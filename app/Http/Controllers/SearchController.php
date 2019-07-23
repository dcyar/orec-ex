<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Searchable\Search;

use App\Models\Birth;
use App\Models\Marriage;
use App\Models\Death;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('busqueda.index');
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
        $searchResults = (new Search())
            ->registerModel(Birth::class, 'apellidos')
            ->registerModel(Marriage::class, 'apellidos_esposo')
            ->registerModel(Death::class, 'apellidos')
            // ->registerModel(Category::class, 'name')
            ->perform($request->input('apellidos'));

        // return $searchResults;
        return view('busqueda.results', compact('searchResults'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function results(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Birth::class, 'apellidos')
            ->registerModel(Marriage::class, 'apellidos', 'apellidos_esposa')
            ->registerModel(Death::class, 'apellidos')
            // ->registerModel(Category::class, 'name')
            ->perform($request->input('apellidos'));

        // return $searchResults;
        return view('busqueda.results', compact('searchResults'));
    }
}
