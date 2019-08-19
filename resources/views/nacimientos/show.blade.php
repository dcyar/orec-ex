@extends('layouts.bracket')

@section('title')
    {{ $rs->nombres . ' ' . $rs->apellidos }}
@endsection

@section('content')
<div class="d-flex align-items-center justify-content-start pd-r-20 mg-b-20 mg-sm-b-30">
    <div class="btn-group hidden-xs-down">
        <div class="br-pagetitle">
            <i class="icon icon ion-ios-book-outline"></i>
            <div>
                <h4>Nacimiento</h4>
                <p class="mg-b-0">Acta de nacimiento inscrita en esta OREC.</p>
            </div>
        </div>
    </div>
    <!-- btn-group -->
    <div class="mg-l-auto hidden-xs-down">
        <a href="{{ route('birth.download', [$rs->id, '1']) }}" class="btn btn-teal" target="_blank">Imprimir en Formato</a>
        <a href="{{ route('birth.download', [$rs->id, '2']) }}" class="btn btn-indigo" target="_blank">Imprimir A4</a>
        <div class="btn-group ml-3" role="group" aria-label="Actions">
            <a href="{{ route('nacimientos.edit', $rs->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>

            @include('includes.delete-form', ['route' => 'nacimientos.destroy', 'id' => $rs->id])
        </div>
    </div>
</div>
<!-- d-flex -->
<div class="br-pagebody">
    @if (Session::has('message'))
        <div class="alert alert-bordered alert-{{ Session::get('flash_type') }}" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong class="d-block d-sm-inline-block-force">{{Session::get('message') }}</strong>
        </div>
    @endif
    <div class="card bd-0 shadow-base">
        <div class="card-body pd-30 pd-md-60">
            <div class="d-md-flex justify-content-between flex-row-reverse">
                <h1 class="mg-b-0 tx-uppercase tx-gray-600 tx-mont tx-bold">{{ $rs->libro }} | {{ $rs->acta }}</h1>
                <div class="mg-t-25 mg-md-t-0">
                    <h6 class="tx-secondary">Fecha de Nacimiento: {{ $rs->fecha_de_registro }}</h6>
                    <h4 class="tx-primary">{{ $rs->nombres . ' ' . $rs->apellidos }}</h4>
                </div>
            </div>
            <!-- d-flex -->
        </div>
        <!-- card-body -->
    </div>
</div>
<!-- br-pagebody -->
@endsection
