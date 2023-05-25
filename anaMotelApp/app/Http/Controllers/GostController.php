<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gost;
use Illuminate\Support\Facades\Validator;


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
    public function store(Request $request) //dodavanje novog gosta, post metoda
    {
        $validator = Validator::make($request->all(), [ 
        'ime' => 'required|string|max:50',      //svi objekti su obavezni
        'prezime' => 'required|string|max:50',
        'br_lk' => 'required|string|max:50',
        ]);

        if ($validator->fails()) //ako validator uspe kreiramo objekat
        return response()->json($validator->errors());

        $d = Gost::create([
            'ime'=>$request->ime,
            'prezime'=>$request->prezime,
            'br_lk'=>$request->br_lk,
        ]);
        $d->save(); //cuvanje objekta
        return response()->json(['Objekat je kreiran', $d]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id) //get zahtev, prima id, vraca jednog gosta
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
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [ 
            'ime' => 'string|max:50',      
            'prezime' => 'string|max:50',
            'br_lk' => 'string|max:50',
            ]);
    
            if ($validator->fails()) //ako fejluje ispisuje sta je greska
            return response()->json($validator->errors());
    
            $d = Gost::find($id); //ako pronadje gosta na osnovu id-ja, apdajtuje ga

            if($d){
                $d->ime=$request->ime;
                $d->prezime=$request->prezime;
                $d->br_lk=$request->br_lk;

                $d->save(); //cuvanje promene
                return response()->json(["Uspesno izmenjeno", $d]);
            } else {
                return response()->json("Objekat ne postoji u bazi!");
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $p = Gost::find($id);
        if($p){
            $p->delete();
            return response()->json(["Objekat obrisan", $p]);
        } else {
            return response()->json(["Greska"]);
        }
    }
}
