<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    //funciones que reciben un correo y actualiza un usuario a admin
    public function quitarAdmin(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $user->is_admin = false;
        $user->save();
        return redirect('/profile');
    }
    public function añadirAdmin(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $user->is_admin = true;
        $user->save();
        return redirect('/profile');
    }
    //switch admin
    public function switchAdmin(Request $request)
    {
        // Obtiene el usuario autenticado
        $authenticatedUser = Auth::user();

        // Busca el usuario por su correo electrónico en la base de datos
        $user = User::where('email', $request->email)->first();

        if ($user) {
            // Verifica que el usuario autenticado no sea el mismo que se está modificando
            if ($user->id !== $authenticatedUser->id) {
                // Realiza la conmutación del estado 'is_admin'
                $user->is_admin = !$user->is_admin;

                // Guarda los cambios en la base de datos
                $user->save();

                return redirect('/profile')->with('success', 'Cambios guardados exitosamente');
            } else {
                return redirect('/profile')->with('error', 'No puedes quitarte a ti mismo el rol de administrador');
            }
        } else {
            // El usuario no se encontró en la base de datos
            return redirect('/profile')->with('error', 'Usuario no encontrado');
        }
    }

}
