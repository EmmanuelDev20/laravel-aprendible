<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        'name' => 'required'
      ]);

      return 'Datos validados';
      // return $request->get('name');
      // return $request->name;
      // return request('email');
    }
}
