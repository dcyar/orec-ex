<?php

namespace App\Http\Controllers;

use App\Entities\Death;
use Illuminate\Http\Request;
use App\Repositories\Contracts\DeathRepositoryInterface;
use App\Usescases\Death\Contracts\CreateDeathUsecaseInterface;

class DeathController extends Controller
{
    private $deathRepository, $createDeathUsecase;

    public function __construct(DeathRepositoryInterface $deathRepository, CreateDeathUsecaseInterface $createDeathUsecase)
    {
        $this->deathRepository = $deathRepository;
        $this->createDeathUsecase = $createDeathUsecase;
    }
    /**
     *
     * @return void
     */
    public function index()
    {
        $deaths = $this->deathRepository->getModel()->latest()->take(10)->get();

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
        try {
            $death = $this->createDeathUsecase->handle($request);
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
     *
     * @param integer $id
     * @return void
     */
    public function show(int $id)
    {
        $rs = $this->deathRepository->show($id);

        return view('defunciones.show', compact('rs'));
    }

    /**
     *
     * @param integer $id
     * @return void
     */
    public function edit(int $id)
    {
        $rs = $this->deathRepository->getModel()->findOrFail($id);

        return view('defunciones.edit', compact('rs'));
    }

    /**
     *
     * @param Request $request
     * @param integer $id
     * @return void
     */
    public function update(Request $request, int $id)
    {
        try {
            $rs = $this->deathRepository->update($request, $id);
            session()->flash('message', 'El acta se ha actualizado correctamente!!');
            session()->flash('flash_type', 'success');
            return redirect()->route('defunciones.show', $rs);
        } catch (\Exception $e) {
            session()->flash('message', 'Ha ocurrido un error al intentar actualizar el acta!!');
            session()->flash('flash_type', 'success');
            return redirect()->route('defunciones.show', $rs);
        }
    }

    /**
     *
     * @param integer $id
     * @return void
     */
    public function destroy(int $id)
    {
        try {
            $this->deathRepository->delete($id);
            session()->flash('message', 'El acta se ha eliminado correctamente!!');
            session()->flash('flash_type', 'success');
            return redirect()->route('defunciones.index');
        } catch (\Exception $e) {
            session()->flash('message', 'Ha ocurrido un error al intentar eliminar el acta!!');
            session()->flash('flash_type', 'success');
            return redirect()->route('defunciones.index');
        }
    }
}
