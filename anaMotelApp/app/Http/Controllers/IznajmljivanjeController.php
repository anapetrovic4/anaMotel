<?php

namespace App\Http\Controllers;

use App\Models\Iznajmljivanje;
use App\Http\Resources\IznajmljivanjeResource;


use Illuminate\Http\Request;

class IznajmljivanjeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //vraca se kolekcija iznajmljivanja resource-a, prosledjujemo listu
        return IznajmljivanjeResource::collection(Iznajmljivanje::all());
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
    public function show($id)
    {
        return new IznajmljivanjeResource(Iznajmljivanje::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Iznajmljivanje $iznajmljivanje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Iznajmljivanje $iznajmljivanje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Iznajmljivanje $iznajmljivanje)
    {
        //
    }
}
