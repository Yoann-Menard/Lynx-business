@extends('main')

@section('title', 'Tous les Posts')

@section('content')

<div class="row">
    <div class="col-md-10">
        <h1>Tous les Posts</h1>
    </div>

    <div class="col-md-2">

    </div>
    <div class="col-md-12">
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <th>#</th>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Crée le : </th>
                <th></th>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <th>{{ $post->id}}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : ""}}</td>
                    <td>{{ date('j, M, Y',  strtotime($post->created_at)) }}</td>
                    <td>
                        <a href="{{ route('posts.create') }}" class="btn btn-sm btn-success">Créer</a>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-secondary">Voir</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">Éditer</a>
                        <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-sm btn-danger">Supprimer</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop