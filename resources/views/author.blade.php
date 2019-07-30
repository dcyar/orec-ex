@extends('layouts.bracket')

@section('title')
    Acerca del Autor
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
            <div class="card-profile-img">
                <img src="{{ asset('bracket-plus/img/author1.jpg') }}" alt="Jhon Marco Achata Limachi" />
            </div>
            <!-- card-profile-img -->
            <h4 class="tx-normal tx-roboto tx-inverse">JhOn Al (dcyar)</h4>
            <p class="mg-b-25">jhonal183@gmail.com</p>
            <p class="wd-md-500 mg-md-l-auto mg-md-r-auto mg-b-25">Desarrollador web, con conocimientos en Frontend, Backend, apasionado de las nuevas tecnologías en internet, amante de la música y explorador de los límites de lo desconocido.</p>
            <p class="mg-b-0 tx-24">
                <a href="https://www.github.com/dcyar" class="tx-primary mg-r-5" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://www.gitlab.com/dcyar" class="tx-primary mg-r-5" target="_blank"><i class="fab fa-gitlab"></i></a>
            </p>
        </div>
        <!-- card-body -->
    </div>
</div>
<!-- br-pagebody -->
@endsection
