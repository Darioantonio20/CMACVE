@extends('layouts.template_01')


@section('title', 'Inicio')

@section('content')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card rounded-3 text-bg-light ">
                        <div class="card-header text-center">
                            <h3 class="card-title text-center">Tipos de Evaluaciones</h3>
                        </div>

                        <ul class="list-group list-group-flush">
                            @foreach($formularios as $form)
                                <li class="list-group-item py-3"><a href="{{asset('formularios/'.$form->idFormulario)}}" class="card-link">{{$form->nombre}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <input type="hidden" id="seccion_cmacve" value="#btn-inicio" />
@endsection

@section('modal')

@endsection


@section('scripts')

@endsection
