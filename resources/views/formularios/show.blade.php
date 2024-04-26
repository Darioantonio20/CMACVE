@extends('layouts.template_01')


@section('title', 'Inicio')

@section('content')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card rounded-3 text-bg-light">
                        <div class="card-header text-center mb-5 pt-3 pb-5">
                            <h3 class="card-title text-center p-3 mb-3">{{$formulario->nombre}}</h3>
                            <div class="text-justify">{!! $formulario->indicaciones !!}</div>
                        </div>

                        <ul class="list-group list-group-flush">
                            @foreach($preguntas as $pregunta)
                                <li class="list-group-item">
                                    <div class="pregunta">
                                        <div class="indicaciones">{!!  $pregunta->instrucciones!!}</div>
                                        <h5>{{$pregunta->orden}} - {{$pregunta->pregunta}}</h5>
                                    </div>
                                </li>
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
