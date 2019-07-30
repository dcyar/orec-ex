@extends('layouts.bracket')

@section('title')
    Acerca del Sistema
@endsection

@section('content')
<div class="d-flex align-items-center justify-content-start pd-r-20 mg-b-20 mg-sm-b-30">
    <!-- btn-group -->
</div>
<!-- d-flex -->
<div class="br-pagebody">
    <div class="card shadow-base bd-0 mg-t-20 widget-4">
        <div class="card-header">
            <div class="hidden-xs-down">
                <span class="tx-regular mg-r-10">|</span>
            </div>
            <div class="hidden-xss-down">
                <span class="tx-regular mg-r-10">|</span>
            </div>
        </div>
        <!-- card-header -->
        <div class="card-body">
            {{-- <div class="card-profile-img">
                <img src="{{ asset('bracket-plus/img/author1.jpg') }}" alt="Jhon Marco Achata Limachi" />
            </div> --}}
            <!-- card-profile-img -->
            <h1 class="tx-regular tx-roboto tx-inverse">OREC EX</h1>
            <p class="mg-b-25">Sistema de digitalización, emisión y control de actas de nacimientos, matrimonios y defunciones.</p>
            <hr />
            <p class="wd-md-500 mg-md-l-auto mg-md-r-auto mg-b-25"><a href="https://gitlab.com/dcyar/orec-ex" target="_blank"><strong>OREC EX</strong></a> es un proyecto de codigo abierto (Open Source), enfocado a facilitar el proceso de digitalización y expedición de actas de nacimientos, matrimonios y defunciones.</p>
            <span>Link del Proyecto:</span>
            <p class="mg-b-0 tx-24">
                <a href="https://www.gitlab.com/dcyar/orec-ex" class="tx-primary mg-r-5" target="_blank"><i class="fab fa-gitlab"></i></a>
            </p>
        </div>
        <!-- card-body -->
    </div>
</div>
<!-- br-pagebody -->
@endsection
