@extends('templates.template')

@section('content')

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">@if(isset($noticia)) Editar @else Nova Notícia @endif</h1>
</div>

<div class="card mb-3">
    <div class="card-body">

        @if(isset($errors) && count($errors)>0)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                @foreach($errors->all() as $erro)
                    <strong>{{ $erro }} </strong><br>
                @endforeach
            </div>
        @endif

        @if(isset($noticia))
            <form name="fm" id="fm" method="post" action="{{ url('noticias/$noticia->id')}}">
                @method('PUT')
        @else
            <form name="fm" id="fm" method="post" action="{{ url('noticias')}}">
        @endif

            @csrf
            <div class="form-group row">
                <label for="titulo" class="col-sm-2 col-form-label">Título</label>
                <div class="col-sm-10">
                    <input type="text" name="titulo" class="form-control" value="{{ $noticia->titulo?? '' }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="descricao" class="col-sm-2 col-form-label">Descrição</label>
                <div class="col-sm-10">
                    <textarea name="descricao" class="form-control" rows="3">{{ $noticia->descricao?? '' }}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="url" class="col-sm-2 col-form-label">URL Imagem</label>
                <div class="col-sm-10">
                    <input type="text" name="url" class="form-control" value="{{ $noticia->url?? '' }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="url" class="col-sm-2 col-form-label">Usuário</label>
                <div class="col-sm-10">
                    <select class="form-control" name="user_id">
                        <option selected value="">Selecione</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}"  {{ isset($noticia->user_id) && $noticia->user_id == $user->id? 'selected' : ''}}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="float-right">
            <button class="btn btn-primary" type="submit">Enviar</button>
            <button class="btn btn-default" type="reset">Limpar</button>

            </div>
        </form>
    </div>
</div>

@endsection
