<?php

namespace App\Http\Controllers;

use App\Http\Resources\KlijentResource;
use App\Models\Klijent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KlijentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $klijenti = Klijent::all();
        return KlijentResource::collection($klijenti);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Klijent  $klijent
     * @return \Illuminate\Http\Response
     */
    public function show(Klijent $klijent)
    {
        return new KlijentResource($klijent);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Klijent  $klijent
     * @return \Illuminate\Http\Response
     */
    public function edit(Klijent $klijent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Klijent  $klijent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Klijent $klijent)
    {
        $validator = Validator::make($request->all(), [
            'imePrezime' => 'required',
            'brojTelefona' => 'required',
            'grad' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $klijent->imePrezime = $request->imePrezime;
        $klijent->brojTelefona = $request->brojTelefona;
        $klijent->grad = $request->grad;

        $klijent->save();

        return response()->json(['Uspešno izmenjen klijent!', new KlijentResource($klijent)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Klijent  $klijent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Klijent $klijent)
    {
        $klijent->delete();
        return response()->json('Uspešno obrisan klijent!');
    }
}
