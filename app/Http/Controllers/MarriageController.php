<?php

namespace App\Http\Controllers;

use App\Models\Marriage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MarriageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marriages = Marriage::latest()->take(10)->get();

        return view('matrimonios.index', compact('marriages'));
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
        $imageName = '/orec/matrimonios/' . Str::slug((Carbon::now(). strtolower(($request->nombres .'-'. $request->apellidos))), '-') .'.'.request()->partida->getClientOriginalExtension();
            
        request()->partida->move(public_path('orec/matrimonios/'), $imageName);
        
        $marriage = Marriage::create([
            'libro' => $request->libro,
            'acta' => $request->acta,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'dni' => $request->dni,
            'nombres_esposa' => $request->nombres_esposa,
            'apellidos_esposa' => $request->apellidos_esposa,
            'dni_esposa' => $request->dni_esposa,
            'fecha_de_registro' => $request->fecha_de_registro,
            'partida' => $imageName,
        ]);

        $marriage->save();

        return redirect()->back()->withMessage('El acta se guardó exitosamente...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marriage  $marriage
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rs = Marriage::findOrFail($id);

        return view('matrimonios.show', compact('rs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marriage  $marriage
     * @return \Illuminate\Http\Response
     */
    public function edit(Marriage $marriage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marriage  $marriage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marriage $marriage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marriage  $marriage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marriage $marriage)
    {
        //
    }
}
