@extends('main')

@section('title', 'Éditer le post')

@section('content')

<div class="row">
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
    <div class="col-md-12">
        {{ Form::label('title', 'Titre :') }}
        {{ Form::text('title', null, ['class' => 'form-control input-lg']) }}

        {{ Form::label('body', 'Contenu :', ['class' => 'form-spacing-top']) }}
        {{ Form::textarea('body', null, ['class'=> 'form-control']) }}
        <br>
        <div class="col-md-12 jumbotron">
            <dl class="dl-horizontal">
                <dt>Crée le :</dt>
                <dd>{{ date('j, M, Y h:ia', strtotime($post->created_at)) }}</dd>
            </dl>

            <dl class="dl-horizontal">
                <dt>Mis à jour le :</dt>
                <dd>{{ date('j, M, Y h:ia', strtotime($post->updated_at) )}}</dd>
            </dl>

            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-danger">Annuler</a>
            
            {{ Form::submit('Sauvegarder les changements', ['class' => 'btn btn-success']) }}
            
            {{!! Form::close() !!}}
        </div>
    </div>
    {!! Form::close() !!}
</div>


@stop