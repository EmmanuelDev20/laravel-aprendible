<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
  public function store(Request $request)
  {
    // $validated = $request->validate([
    //   'origen' => 'required',
    //   'consecutivo' => 'required',
    //   'temperatura' => 'required',
    //   'estado' => 'required',
    // ]);

    // request()->validate([
    //   'name' => 'required',
    // ]);

    $request->validate([
      'name' => 'required',
      'email' => 'required'
    ], [
      'name.required' => 'Fallo el nombre'
    ]);

    //Enviar email

    Mail::to('emanuelovares@gmail.com')->send(new MessageReceived);

    return 'Mensaje enviado';
    // return $request->get('name');
    // return $request->name;
    // return request('email');
  }
}
