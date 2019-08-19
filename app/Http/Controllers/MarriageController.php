<?php

namespace App\Http\Controllers;

use App\Entities\Marriage;
use Illuminate\Http\Request;
use App\Repositories\Contracts\MarriageRepositoryInterface;
use App\Usescases\Marriage\Contracts\CreateMarriageUsecaseInterface;

class MarriageController extends Controller
{

    private $marriageRepository, $createMarriageUsecase;

    public function __construct(MarriageRepositoryInterface $marriageRepository, CreateMarriageUsecaseInterface $createMarriageUsecase)
    {
        $this->marriageRepository = $marriageRepository;
        $this->createMarriageUsecase = $createMarriageUsecase;
    }

    /**
     *
     * @return void
     */
    public function index()
    {
        $marriages = $this->marriageRepository->getModel()->latest()->take(10)->get();

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
        try {
            $marriage = $this->createMarriageUsecase->handle($request);
            session()->flash('message', 'El acta se ha guardado correctamente!!');
            session()->flash('flash_type', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('message', 'Ha ocurrido un error y el acta no se ha guardado!!');
            session()->flash('flash_type', 'danger');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marriage  $marriage
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $rs = $this->marriageRepository->show($id);

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
     *
     * @param int $id
     * @return void
     */
    public function destroy(int $id)
    {
        try {
            $this->marriageRepository->delete($id);
            session()->flash('message', 'El acta se ha eliminado correctamente!!');
            session()->flash('flash_type', 'success');
            return redirect()->route('matrimonios.index');
        } catch (\Exception $e) {
            session()->flash('message', 'Ha ocurrido un error al intentar eliminar el acta!!');
            session()->flash('flash_type', 'success');
            return redirect()->route('matrimonios.index');
        }
    }
}
