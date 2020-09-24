@extends('main')

@section('title', 'Crée un post')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Crée un post</h1>
        <hr>
        <form action="/posts" method="POST">
            @csrf
            <div class="form-group">
            <label name="title"> Titre :</label>
            <input id="title" name="title" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label name="body">Contenu :</label>
                <textarea id="body" name="body" class="form-control"></textarea> 
            </div>

            <button type="submit" class="btn btn-success btn-lg btn-block 'style' 'margin-top: 20px;'"">Créer un poste
        </form>
    </div>
</div>

@endsection