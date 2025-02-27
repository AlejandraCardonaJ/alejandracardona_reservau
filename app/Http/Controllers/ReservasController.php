<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reservas.inicio');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reservas.crear');
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
    public function show($id=0)
    {
        return view('reservas.historial',['id'=>$id=0]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id= 0)
    {
        return view('reservas.cancelar',['id'=>$id=0]);
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
}
