<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Birth;
use App\Models\Marriage;
use App\Models\Death;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $births = Birth::all()->count();
        $marriages = Marriage::all()->count();
        $deaths = Death::all()->count();

        return view('dashboard', ['births' => $births, 'marriages' => $marriages, 'deaths' => $deaths]);
    }
}
