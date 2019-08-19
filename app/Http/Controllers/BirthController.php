<?php

namespace App\Http\Controllers;

use App\Entities\Birth;
use Illuminate\Http\Request;
use App\Repositories\Contracts\BirthRepositoryInterface;
use App\Usescases\Birth\Contracts\CreateBirthUsecaseInterface;

class BirthController extends Controller
{
    private $birthRepository, $createBirthUsecase;

    /**
     *
     * @param BirthRepositoryInterface $birthRepository
     */
    public function __construct(BirthRepositoryInterface $birthRepository, CreateBirthUsecaseInterface $createBirthUsecase)
    {
        $this->birthRepository = $birthRepository;
        $this->createBirthUsecase = $createBirthUsecase;
    }

    /**
     *
     * @return void
     */
    public function index()
    {
        $births = $this->birthRepository->getModel()->latest()->take(10)->get();
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
        try {
            $birth = $this->createBirthUsecase->handle($request);
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
        $rs = $this->birthRepository->findOrFail($id);

        return view('nacimientos.show', compact('rs'));
    }

    /**
     *
     * @param integer $id
     * @return void
     */
    public function edit(int $id)
    {
        $rs = $this->birthRepository->findOrFail($id);

        return view('nacimientos.edit', compact('rs'));
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
            $rs = $this->birthRepository->update($request, $id);
            session()->flash('message', 'El acta se ha actualizado correctamente!!');
            session()->flash('flash_type', 'success');
            return redirect()->route('nacimientos.show', $rs);
        } catch (\Exception $e) {
            session()->flash('message', 'Ha ocurrido un error al intentar actualizar el acta!!');
            session()->flash('flash_type', 'success');
            return redirect()->route('nacimientos.show', $rs);
        }
    }

    /**
     *
     * @param int $id
     * @return void
     */
    public function destroy(int $id)
    {
        try {
            $this->birthRepository->delete($id);
            session()->flash('message', 'El acta se ha eliminado correctamente!!');
            session()->flash('flash_type', 'success');
            return redirect()->route('nacimientos.index');
        } catch (\Exception $e) {
            session()->flash('message', 'Ha ocurrido un error al intentar eliminar el acta!!');
            session()->flash('flash_type', 'success');
            return redirect()->route('nacimientos.index');
        }
    }
}
