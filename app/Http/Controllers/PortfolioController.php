<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
      $portfolio = [
        ['title' => 'Proyecto 1'],
        ['title' => 'Proyecto 2'],
        ['title' => 'Proyecto 3'],
        ['title' => 'Proyecto 4'],

      ];

        return view('portfolio', compact('portfolio'));
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
