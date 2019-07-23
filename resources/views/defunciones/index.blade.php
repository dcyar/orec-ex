@extends('layouts.bracket')

@section('title')
    Defunciones
@endsection

@section('content')
<div class="d-flex align-items-center justify-content-start pd-r-20 mg-b-20 mg-sm-b-30">
    <div class="btn-group hidden-xs-down">
        <div class="br-pagetitle">
            <i class="icon icon ion-ios-book-outline"></i>
            <div>
                <h4>Defunciones</h4>
                <p class="mg-b-0">Actas de defunciones inscritas en esta OREC.</p>
            </div>
        </div>
    </div>
    <!-- btn-group -->
    <div class="mg-l-auto hidden-xs-down">
        <a href="{{ URL::previous() }}" class="btn btn-info">Atras</a>
        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#nuevaActa">Nueva Acta</a>
    </div>
</div>
<!-- d-flex -->
<div class="br-pagebody">
    <!-- start you own content here -->
    <div class="br-section-wrapper">
        @if (Session::has('message'))
            <div class="alert alert-bordered alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong class="d-block d-sm-inline-block-force">Felicidades!</strong> El acta se guardo correctamente
            </div>
        @endif
        {{-- <h6 class="br-section-label">Basic Table</h6>
        <p class="br-section-text">Add zebra-striping to any table row.</p> --}}
        <div class="bd bd-gray-300 rounded table-responsive">
            <table class="table table-striped table-bordered table-colored table-dark mg-b-0">
                <thead class="thead-colored thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombres y Apellidos</th>
                        <th>Libro y Acta</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($deaths as $death)
                        <tr>
                            <th scope="row">{{ $death->id }}</th>
                            <td>{{ $death->nombres . ' ' . $death->apellidos }}</td>
                            <td>{{ $death->libro . ' | ' . $death->acta }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- acta nueva modal -->
    <div id="nuevaActa" class="modal fade effect-sign">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content tx-size-sm">
                <form action="{{ route('defunciones.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Registrar Nueva Acta</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body pd-20">
                        {{-- 'libro', 'acta', 'nombres', 'apellidos', 'dni', 'fecha_de_registro', 'partida', --}}
                        <div class="row mg-b-25">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label">Libro: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="libro" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label">Acta: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="acta" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Nombres: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="nombres" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Apellidos: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="apellidos" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">DNI: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="dni" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Fecha de Nacimiento: <span class="tx-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="fecha_de_registro" class="form-control fc-datepicker" placeholder="YYYY/MM/DD" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mg-b-10-force">
                                    {{-- <label class="form-control-label">Apellidos: <span class="tx-danger">*</span></label> --}}
                                    <div class="custom-file mg-t-25">
                                        <input type="file" class="custom-file-input" name="partida" id="customFile2" />
                                        <label class="custom-file-label custom-file-label-primary" for="customFile2">Adjuntar Acta</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                    <!-- modal-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary tx-size-xs">Guardar Acta</submit>
                        <button type="button" class="btn btn-secondary tx-size-xs" data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- modal-dialog -->
    </div>
</div>
<!-- br-pagebody -->
@endsection

@section('extra-js')
    <script>
        // Datepicker
        $('.fc-datepicker').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true
        });
</script>
@endsection