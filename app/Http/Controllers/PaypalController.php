<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;


class PaypalController extends Controller
{
    //Route::post('/paypal/pay/{idCurso}', 'payWithPayPal')
    public function payment(Request $request)
    {
        $curso = Curso::find($request->curso)->toArray();
        $usuario = auth()->user()->toArray();
        
        //dd($curso, $usuario);

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
                'return_url' => route('paypal.success'),
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
            return redirect()->route('paypal.cancel')->with('error', 'Error al procesar el pago');
        }

    }

    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($request->token);

        //dd($response);

        if(isset($response['status']) && $response['status'] == 'COMPLETED') {
            return ('Pago realizado con éxito');
        } else {
            return redirect()->route('paypal.cancel');
        }
    }

    public function cancel()
    {
        return ('Pago cancelado');
    }

}
