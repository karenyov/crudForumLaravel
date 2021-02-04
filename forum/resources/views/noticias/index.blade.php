@extends('templates.template')

@section('content')

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Esportes</h1>
    <div class="lead">Assuntos sobre esportes em geral.
        <div class="float-right">
            <button type="button" class="btn btn-primary btn-sm">Novo <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
    </div>
</div>

@foreach($noticias as $noticia)
    @php
        $user=$noticia->find($noticia->id)->relUsers
    @endphp

<div class="card mb-3">
    <img class="card-img-top" src="{{ url("$noticia->url")}}" alt="Card image cap">
    <div class="card-body">
        <h4 class="card-title">
            {{ $noticia->titulo }}

            <div class="float-right">
                <a href="{{ url("noticias/$noticia->id") }}" type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <a href="" type="button" class="btn btn-primary btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a>
            </div>
        </h4>
        <p class="card-text">{{ $noticia->descricao }}</p>
        <p class="card-text">
            <small class="text-muted">
                Data: {{ date('d/m/Y', strtotime($noticia->created_at)) }}
                Por: {{ $user->name }}
            </small>
            <div class="float-right">
                <a href="">ver mais >></a>
            </div>
        </p>
    </div>
</div>

@endforeach

@endsection
