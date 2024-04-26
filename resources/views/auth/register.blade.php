@extends('layouts.template_01')

@section('title', 'Accesar')

@section('main')
    <main>
        <section class="section parallax effect-section" style="background-image: url({{asset('images/bg/bg-2.jpg')}});">
            <div class="mask bg-dark opacity-8"></div>
            <div class="container position-relative">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h6 class="text-white-50 font-w-500">CMACVE</h6>
                        <h1 class="display-4 text-white m-0">Registro de Usuarios</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-7 col-xl-6">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {!! session('status')  !!}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        @if (session('status_success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {!! session('status_success')  !!}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                        @endif
                        @if (session('status_fail'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {!! session('status_fail')  !!}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="card rounded-3">
                            <div class="card-body">

                                <div class="row justify-content-center section-heading">
                                    <div class="col-lg-8 col-xl-7 text-center">
                                        <h3 class="h1 after-50 primary-after pb-3 mb-0">Nuevo Usuario</h3>
                                    </div>
                                </div>

                                {!! Form::open(['url'=>'register','method' => 'POST', 'id'=>'FormRegister','class'=>'contact-form'])!!}

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            {!! Form::label('titulo', 'Titulo:',['class'=>'sr-only']) !!}
                                            {!! Form::text('titulo',null,['class'=>'form-control ','placeholder'=>'Titulo']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            {!! Form::label('nombre', 'Nombre:',['class'=>'sr-only']) !!}
                                            {!! Form::text('nombre',null,['class'=>'form-control ','placeholder'=>'Nombre']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('apellidoPaterno', 'Apellido Paterno:',['class'=>'sr-only']) !!}
                                            {!! Form::text('apellidoPaterno',null,['class'=>'form-control ','placeholder'=>'Apellido Paterno']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('apellidoMaterno', 'Apellido Materno:',['class'=>'sr-only']) !!}
                                            {!! Form::text('apellidoMaterno',null,['class'=>'form-control ','placeholder'=>'Apellido Materno']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            {!! Form::label('email', 'Email:',['class'=>'sr-only']) !!}
                                            {!! Form::text('email',null,['class'=>'form-control ','placeholder'=>'Email']) !!}
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            {!! Form::label('password', 'Contraseña:',['class'=>'sr-only']) !!}
                                            {!! Form::password('password',['class'=>'form-control ','placeholder'=>'Contraseña']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            {!! Form::label('password_confirmation', 'Confirmar Contraseña:',['class'=>'sr-only']) !!}
                                            {!! Form::password('password_confirmation',['class'=>'form-control ','placeholder'=>'Confirmar Contraseña']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="aceptoCondiciones" name="aceptoCondiciones">
                                                <label class="custom-control-label" for="aceptoCondiciones">
                                                    He leido el <a target="_blank" href="{{asset('aviso_privacidad')}}" class="text-primary">aviso de privacidad</a> y acepto las condiciones de uso.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br/>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group {{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                            <label for="g-recaptcha-response" class="sr-only">Recaptcha</label>
                                            {!! NoCaptcha::display() !!}
                                        </div>
                                    </div>
                                </div>
                                <br/>

                                <div class="row">
                                    <div class="col-sm-12 mt-4 mb-4">
                                        <button type="submit" class="btn btn-primary w-100">Registrarse</button>
                                    </div>
                                </div>

                                {!! Form::close()!!}

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <input type="hidden" id="seccion_cmacve" value="#btn-login" />
@endsection


@section('scripts')
    {!! NoCaptcha::renderJs() !!}

    <script type="text/javascript" src="{{ asset('libraries/bootbox-v6.0.0/bootbox.all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('libraries/jquery-validation-1.19.5/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('libraries/jquery-validation-1.19.5/additional-methods.min.js') }}"></script>
    <script src="{{ asset('js/auth/register.js') }}"></script>
@endsection
