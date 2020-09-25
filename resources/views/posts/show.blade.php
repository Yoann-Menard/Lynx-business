@extends('main')

@section('title', 'Post')

@section('content')

<tr>
    <td>
        <a href="{{ route('posts.create') }}" class="btn btn-sm btn-success">Créer</a>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">Éditer</a>
        <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-sm btn-danger">Supprimer</a>
    </td>
</tr>

<h1>{{ $post->title }}</h1>


<p>{{ $post->body }}</p>

@stop