@extends('templates.template')

@section('content')

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">{{ $noticia->titulo }}</h1>
</div>

<div class="card mb-3">
    <img class="card-img-top" src="{{ url("$noticia->url")}}" alt="Card image cap">
    <div class="card-body">
        <p class="card-text">{{ $noticia->descricao }}</p>
        <p class="card-text">
            <small class="text-muted">
                @php
                    $user=$noticia->find($noticia->id)->relUsers
                @endphp

                Data: {{ date('d/m/Y', strtotime($noticia->created_at)) }} -
                Por: {{ $user->name}}
            </small>
        </p>
    </div>
</div>

@endsection
