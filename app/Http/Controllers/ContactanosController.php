<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nombre' => 'required',
        //     'correo' => 'required|email',
        //     'mensaje' => 'required',
        // ]);
        // NO SE PORQUE NO FUNCIONA CUANDO SE PONE EL VALIDATE

        $correo = new ContactanosMailable($request->all());
        Mail::to('tupy1977@gmail.com')->send($correo); // Se envia el correo a la direccion que se pone en el to

        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');
    }
}