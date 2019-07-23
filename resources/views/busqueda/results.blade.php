@extends('layouts.bracket')

@section('title')
    Resultados de búsqueda para {{ request('apellidos') }}
@endsection

@section('content')
<div class="br-pagebody mg-t-95 mg-b-30">
    <div class="br-section-wrapper">
        <div class="alert alert-inverse alert-solid mg-b-20" role="alert">
            <div class="d-sm-flex align-items-center justify-content-aroud">
                <div class=" mg-t-15 mg-sm-t-0">
                    <p class="mg-b-0 tx-xs op-8">
                        <span class="font-light">
                            <strong>{{ '0'. $searchResults->count() }}</strong> resultados encontrados para <strong>"{{ request('apellidos') }}"</strong></span>
                    </p>
                </div>
                <div class="mg-l-auto hidden-xs-down">
                    <a href="{{ URL::previous() }}" class="btn btn-secondary">Atras</a>
                </div>
            </div>
            <!-- d-flex -->
        </div>
        <!-- start you own content here -->
        @foreach($searchResults->groupByType() as $type => $modelSearchResults)
            {{-- <h5 class="tx-inverse ">{{ ucfirst($type) }}</h5> --}}
            <h5>
                {{ strtoupper($type = ($type === 'births') ? 'nacimientos' :
                    $type = ($type === 'marriages') ? 'matrimonios' :
                    $type = ($type === 'deaths') ? 'defunciones' : 'otros') }}
            </h5>
            <div class="row mg-b-30">
                @foreach($modelSearchResults as $sr)
                    <div class="col-md-6 col-sm-12 mg-b-5">
                        <div class="list-group">
                            <div class="list-group-item d-block pd-y-20 rounded-top-0">
                                <div class="d-flex justify-content-between align-items-center tx-12 mg-b-10">
                                    <a href="{{ $sr->url }}" class="tx-info" target="_blank">Libro N°{{ $sr->searchable->libro }} | Acta N°{{ $sr->searchable->acta }}</a>
                                    <span>{{ $sr->searchable->fecha_de_registro }}</span>
                                </div>
                                <!-- d-flex -->
                                <h6 class="lh-3 mg-b-10">
                                    <a href="{{ $sr->url }}" class="tx-inverse hover-primary" target="_blank">{{ $sr->searchable->nombres . ' ' . $sr->searchable->apellidos }}</a>
                                </h6>
                                {{-- <p class="tx-13 mg-b-0">It is   a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p> --}}
                            </div>
                            <!-- list-group-item -->
                        </div>
                        <!-- list-group -->
                    </div>
                    <!-- col-6 -->
                @endforeach
            </div>
        @endforeach
    </div>
</div>
<!-- br-pagebody -->
@endsection
