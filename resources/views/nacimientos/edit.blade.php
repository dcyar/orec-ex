@extends('layouts.bracket')

@section('title')
    Editar Acta
@endsection

@section('content')
<div class="d-flex align-items-center justify-content-start pd-r-20 mg-b-20 mg-sm-b-30">
    <!-- btn-group -->
</div>
<!-- d-flex -->
<div class="br-pagebody">
    <div class="card shadow-base bd-0 mg-t-20">
        <div class="card-body">
            <div class="form-layout form-layout-1 ">
                <form action="{{ route('nacimientos.update', $rs->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mg-b-25">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="form-control-label"><span class="tx-danger">*</span> Libro/CUI:</label>
                                <input class="form-control" type="text" name="libro" value="{{ $rs->libro }}" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="form-control-label"><span class="tx-danger">*</span> Acta:</label>
                                <input class="form-control" type="text" name="acta" value="{{ $rs->acta }}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-control-label"><span class="tx-danger">*</span> Nombres:</label>
                                <input class="form-control" type="text" name="nombres" value="{{ $rs->nombres }}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label"><span class="tx-danger">*</span> Apellidos:</label>
                                <input class="form-control" type="text" name="apellidos" value="{{ $rs->apellidos }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">DNI:</label>
                                <input class="form-control" type="text" name="dni" value="{{ $rs->dni }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label"><span class="tx-danger">*</span> Fecha de Nacimiento:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="fecha_de_registro" class="form-control fc-datepicker" placeholder="YYYY/MM/DD"  value="{{ $rs->fecha_de_registro }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mg-b-10-force">
                                <div class="custom-file mg-t-25">
                                    <input type="file" class="custom-file-input" name="partida" id="customFile2" />
                                    <label class="custom-file-label custom-file-label-primary" for="customFile2">Adjuntar Acta</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="form-layout-footer">
                        <button type="submit" class="btn btn-info">GUARDAR</button>
                        <a href="{{ URL::previous() }}" class="btn btn-secondary">CANCELAR</a>
                    </div>
                    <!-- form-layout-footer -->
                </form>
            </div>
        </div>
        <!-- card-body -->
    </div>
</div>
<!-- br-pagebody -->
@endsection
