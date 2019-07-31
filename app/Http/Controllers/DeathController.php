<?php

namespace App\Http\Controllers;

use App\Models\Death;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DeathController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deaths = Death::latest()->take(10)->get();

        return view('defunciones.index', compact('deaths'));
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
        $imageName = '/orec/defunciones/' . Str::slug((Carbon::now(). strtolower(($request->nombres .'-'. $request->apellidos))), '-') .'.'.request()->partida->getClientOriginalExtension();
            
        request()->partida->move(public_path('orec/defunciones/'), $imageName);

        $death = Death::create([
            'libro' => $request->libro,
            'acta' => $request->acta,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'dni' => $request->dni,
            'fecha_de_registro' => $request->fecha_de_registro,
            'partida' => $imageName,
        ]);

        // $death->save();

        return redirect()->back()->withMessage('El acta se guardó exitosamente...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Death  $death
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rs = Death::findOrFail($id);

        return view('defunciones.show', compact('rs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Death  $death
     * @return \Illuminate\Http\Response
     */
    public function edit(Death $death)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Death  $death
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Death $death)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Death  $death
     * @return \Illuminate\Http\Response
     */
    public function destroy(Death $death)
    {
        //
    }
}
