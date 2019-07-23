<?php

namespace App\Http\Controllers;

use App\Models\Birth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BirthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $births = Birth::latest()->take(10)->get();

        return view('nacimientos.index', compact('births'));
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
        $imageName = '/orec/nacimientos/' . Str::slug((Carbon::now(). strtolower(($request->nombres .'-'. $request->apellidos))), '-') .'.'.request()->partida->getClientOriginalExtension();
            
        request()->partida->move(public_path('orec/nacimientos/'), $imageName);

        $birth = Birth::create([
            'libro' => $request->libro,
            'acta' => $request->acta,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'dni' => $request->dni,
            'fecha_de_registro' => $request->fecha_de_registro,
            'partida' => $imageName,
        ]);

        // $birth->save();

        return redirect()->back()->withMessage('El acta se guardó exitosamente...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Birth  $birth
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rs = Birth::findOrFail($id);

        return view('nacimientos.show', compact('rs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Birth  $birth
     * @return \Illuminate\Http\Response
     */
    public function edit(Birth $birth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Birth  $birth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Birth $birth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Birth  $birth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Birth $birth)
    {
        //
    }
}
