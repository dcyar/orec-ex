@extends('layouts.bracket')

@section('title')
    Búsqueda de Actas
@endsection

@section('content')
{{-- <div class="d-flex align-items-center justify-content-start pd-r-20 mg-b-20 mg-sm-b-30">
    <div class="btn-group hidden-xs-down">
        <div class="br-pagetitle">
            <i class="icon icon ion-ios-book-outline"></i>
            <div>
                <h4>Buscaqueda de actas</h4>
                <p class="mg-b-0">Actas de nacimiento desde 1900 hasta la fecha.</p>
            </div>
        </div>
    </div>
    <!-- btn-group -->
    <div class="mg-l-auto hidden-xs-down">
        <a href="#" class="btn btn-info">Nueva Acta</a>
    </div>
</div> --}}
<!-- d-flex -->
<div class="br-pagebody mg-t-75">
    <!-- start you own content here -->
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
    {{-- <div class="br-section-wrapper mg-b-20">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label class="ckbox">
                        <input type="checkbox" name="nacimiento" id="nacimiento" />
                        <span for="nacimiento">Nacimientos</span>

                    </label>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 form-layout form-layout-1">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-control-label">BUSCAR POR APELLIDOS</label>
                        <input class="form-control" type="text" name="firstname" />
                    </div>
                </div>
                <!-- col-4 -->
                <div class="form-layout-footer pd-l-15">
                    <button class="btn btn-info">Buscar</button>
                </div>
                <!-- form-layout-footer -->
            </div>
        </div>
    </div> --}}
</div>
<!-- br-pagebody -->
@endsection
