@extends('templates.template')

@section('content')

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Esportes</h1>
    <div class="lead" style="margin-left:50px;">Assuntos sobre esportes em geral.
        <div class="float-right">
            <a href="{{ url("noticias/create") }}" class="btn btn-primary btn-sm">Novo <i class="fa fa-plus" aria-hidden="true"></i></a>
        </div>
    </div>
</div>

@foreach($noticias as $noticia)

<div class="card mb-3">
    <img class="card-img-top" src="{{ url("$noticia->url")}}" alt="Card image cap">
    <div class="card-body">
        <h4 class="card-title">
            {{ $noticia->titulo }}

            <div class="float-right">
                <form name="fm" id="fm" method="post" action="{{route('noticias.destroy', $noticia->id)}}">
                    @csrf
                    @method('DELETE')
                    {{ csrf_field() }}

                    <a href="{{ url("noticias/$noticia->id/edit") }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
                </form>
            </div>
        </h4>
        <p class="card-text">{{ $noticia->descricao }}</p>
        <p class="card-text">
            <small class="text-muted">
                Data: {{ date('d/m/Y', strtotime($noticia->created_at)) }}
                Por: {{ $noticia->user->name }}
            </small>
            <div class="float-right">
                <a href="{{ url("noticias/$noticia->id") }}">ver mais >></a>
            </div>
        </p>
    </div>
</div>


@endforeach
<div class="d-flex">
    <div class="mx-auto">
    {{ $noticias->links("pagination::bootstrap-4") }}
    </div>
</div>

@endsection
