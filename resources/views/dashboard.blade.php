@extends('layouts.bracket')

@section('title')
    Inicio
@endsection

@section('content')
<div class="br-pagetitle">
    <i class="icon icon ion-ios-book-outline"></i>
    <div>
        <h4>Inicio</h4>
        <p class="mg-b-0">Sistema de emisión y control de actas de nacimientos, matrimonios y defunciones.</p>
    </div>
</div>
<!-- d-flex -->
<div class="br-pagebody">
    <div class="card-columns column-count-3 mg-t-20">
        <div class="card bd-0 shadow-base">
            <div class="pd-y-20 pd-x-30 tx-center">
                <h3 class="tx-uppercase tx-light tx-roboto tx-info mg-b-5">{{ $births }}</h3>
                <h5 class="tx-inverse tx-roboto tx-normal mg-b-15">Nacimientos</h5>
            </div>
        </div>
        <!-- card -->
        <div class="card bd-0 shadow-base">
            <div class="pd-y-20 pd-x-30 tx-center">
                <h3 class="tx-uppercase tx-light tx-roboto tx-info mg-b-5">{{ $marriages }}</h3>
                <h5 class="tx-inverse tx-roboto tx-normal mg-b-15">Matrimonios</h5>
            </div>
        </div>
        <!-- card -->
        <div class="card bd-0 shadow-base">
            <div class="pd-y-20 pd-x-30 tx-center">
                <h3 class="tx-uppercase tx-light tx-roboto tx-info mg-b-5">{{ $deaths }}</h3>
                <h5 class="tx-inverse tx-roboto tx-normal mg-b-15">Defunciones</h5>
            </div>
        </div>
        <!-- card -->
    </div>
    <div class="card widget-18 shadow-base">
        <div class="wt-content">
            <div class="wt-content-item">
                <h1 class="wt-title">Buscar Acta</h1>
                <p class="mg-b-30">Busca un acta por los Apellidos (Actas de Nacimiento, Matrimonios y Defunciones)</p>
                <form action="{{ route('search.results') }}" method="POST">
                    @csrf
                    <div class="d-sm-flex justify-content-center flex-row">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-file"></i></span>
                            </div>
                            <!-- input-group-prepend -->
                            <input type="text" name="apellidos" class="form-control" placeholder="Ingresar Apellidos..." />
                        </div>
                        <!-- input-group -->
                        <button type="submit" class="btn btn-info">Buscar</button>
                    </div>
                    {{-- <nav class="nav">
                        <label class="ckbox">
                            <input type="checkbox" name="nacimiento" id="nacimiento" checked />
                            <span for="nacimiento">Nacimientos</span>
                        </label>
                        <label class="ckbox mg-l-30 mg-r-30">
                            <input type="checkbox" name="matrimonio" id="matrimonio" />
                            <span for="matrimonio">Matrimonios</span>
                        </label>
                        <label class="ckbox">
                            <input type="checkbox" name="defuncion" id="defuncion" />
                            <span for="defuncion">Defunciones</span>
                        </label>
                    </nav> --}}
                </form>    
            </div>
            <!-- tx-center -->
        </div>
        <!-- d-flex -->
    </div>
</div>
<!-- br-pagebody -->
@endsection
