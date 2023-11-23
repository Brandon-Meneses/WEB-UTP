<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Compra;
use App\Models\User;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;


class PaypalController extends Controller
{
    //Route::post('/paypal/pay/{idCurso}', 'payWithPayPal')
    public function payment(Request $request)
    {
        $curso = Curso::find($request->idCurso)->toArray();
        $usuario = auth()->user()->toArray();

        //dd($curso, $usuario);

        //si el usuario ya ha comprado el curso (si existe en la tabla compras) no se puede volver a comprar
        if(Compra::where('id_usuario', $usuario['id'])->where('id_curso', $curso['id'])->exists()) {
            return redirect()->route('dashboard')->with('mensaje', 'Ya has comprado este curso');
        }

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            'intent' => 'CAPTURE',
            'application_context' => [
                'brand_name' => config('app.name'),
                'locale' => 'es-ES',
                'landing_page' => 'BILLING',
                'shipping_preference' => 'NO_SHIPPING',
                'user_action' => 'PAY_NOW',
                // Aqui podemos pasar parametros adicionales:
                'return_url' => route('paypal.success', ['idCurso' => $curso['id'], 'idUsuario' => $usuario['id']]),
                'cancel_url' => route('paypal.cancel'),
            ],
            'purchase_units' => [
                [
                    'amount' => [
                        'currency_code' => 'USD',
                        'value' => $curso['precio'],
                    ],
                ],
            ]
        ]);

        //dd($response);

        if(isset($response['status']) && $response['status'] == 'CREATED') {
            foreach($response['links'] as $link) {
                if($link['rel'] == 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('paypal.cancel')->with('mensaje', 'Error al procesar el pago');
        }

    }

    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($request->token);

        if(isset($response['status']) && $response['status'] == 'COMPLETED') {
            $curso = Curso::find($request->idCurso);
            $usuario = User::find($request->idUsuario);

            //se agrega el curso comprado al usuario en la tabla Compras
            /*                                               USUARIO, CURSO
            INSERT INTO compras (id_usuario, id_curso) VALUES (1, 1),*/
            $compra = new Compra([
                'id_usuario' => $usuario->id,
                'id_curso' => $curso->id,
            ]);
            $compra->save();

            /*
            return response()->json([
                'status' => 'success',
                'message' => 'Pago realizado con éxito',
                'curso' => $curso,
                'usuario' => $usuario,
            ]); */
            return redirect()->route('dashboard')->with('mensaje', 'Pago realizado con éxito');
        } else {
            return redirect()->route('paypal.cancel');
        }
    }


    public function cancel()
    {
        return ('Pago cancelado');
    }

}
