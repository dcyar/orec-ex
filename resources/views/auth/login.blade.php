@extends('layouts.auth')

@section('title')
    Iniciar Sesión
@endsection

@section('content')
    <div class="row no-gutters flex-row-reverse ht-100v">
        <div class="col-md-6 bg-gray-200 d-flex align-items-center justify-content-center">
            <div class="login-wrapper wd-250 wd-xl-350 mg-y-30">
                <h4 class="tx-inverse tx-center">Iniciar Sesión</h4>
                <p class="tx-center mg-b-30">Bienvenid@ otra vez, usa tus credenciales para ingresar al sistema.</p>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Correo electrónico" autocomplete="email" autofocus required />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- form-group -->
                    <div class="form-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña" />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <a href="#" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a> --}}
                    </div>
                    <!-- form-group -->
                    <button type="submit" class="btn btn-info btn-block">Ingresar</button>
                    <div class="mg-t-60 tx-center">&copy;2019 | Todos los derechos reservados | <a href="http://www.facebook.com/dcyar444" class="tx-info tx-bold" target="_blank">JhOn Al</a></div>
                </form>
            </div>
            <!-- login-wrapper -->
        </div>
        <!-- col -->
        <div class="col-md-6 bg-br-primary d-flex align-items-center justify-content-center">
            <div class="wd-250 wd-xl-450 mg-y-30">
                <div class="signin-logo tx-28 tx-bold tx-white">
                    <span class="tx-normal">[</span> OREC <span class="tx-info">EX</span> <span class="tx-normal">]</span>
                </div>
                <div class="tx-white mg-b-60">Sistema de digitalización, emisión y control de actas de nacimientos, matrimonios y defunciones.</div>
                {{-- <h5 class="tx-white">Why bracket?</h5> --}}
                <p class="tx-white-6">
                    <blockquote class="blockquote bd-l bd-5 pd-l-20">
                        <p class="mg-b-5">{{ $phrase->frase }}</p>
                        <footer class="blockquote-footer tx-14">{{ $phrase->autor }}</footer>
                    </blockquote>

                </p>
                {{-- <p class="tx-white-6 mg-b-60">When your website or app is attractive to use, your users will not simply be using it, they’ll look forward to using it. This means that you should fashion the look and feel of your interface for your users.</p> --}}
            </div>
            <!-- wd-500 -->
        </div>
    </div>
@endsection
