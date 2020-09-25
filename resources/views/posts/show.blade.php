@extends('main')

@section('title', 'Post')

@section('content')

<div class="row">
    <div class="col-md-8">
        <h1>{{ $post->title }}</h1>

        <p class="lead">{{ $post->body}}</p>
    </div>

    <div class="col-md-4 jumbotron">
        <div class="well">
            <dl class="dl-horizontal">
                <dt>Crée le :</dt>
                <dd>{{ date('j, M, Y h:ia', strtotime($post->created_at)) }}</dd>
            </dl>

            <dl class="dl-horizontal">
                <dt>Mis à jour le :</dt>
                <dd>{{ date('j, M, Y h:ia', strtotime($post->updated_at) )}}</dd>
            </dl>
            <hr>

            <div class="row">
                <div class="col-sm-6">
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-block btn-primary">Éditer</a>
                </div>

                <div class="col-sm-6">
                    {!! Form:open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                    <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-block btn-danger">Supprimer</a>
                </div>
            </div>
        </div>
    </div>

@stop