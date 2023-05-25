<?php

namespace App\Http\Controllers;

use App\Models\Gost;
use Illuminate\Http\Request;

class GostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //radi sa GET zahtevom, vraca sve goste u bazi
    {
        return Gost::all();
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
    public function show(Gost $gost) //get zahtev, prima id, vraca jednog gosta
    {
        return Gost::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gost $gost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gost $gost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gost $gost)
    {
        //
    }
}
