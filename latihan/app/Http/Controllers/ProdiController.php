<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
       return view('Prodi.index');
    }

    public function store (Request $request)
    {
        //
    }

    public function show (String $id)
    {
        //
    }

    public function update (Request $request, String $id)
    {
        //
    }

    public function destroy (String $id)
    {

    }

}