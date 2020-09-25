@extends('main')

@section('title', 'Contact')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <h1>Nous contacter</h1>
                <hr>
                <form>
                    <div class="form-group">
                        <label name="email">Email :</label>
                        <input id="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="subject">Sujet :</label>
                        <input id="subject" name="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="message">Message :</label>
                        <textarea id="message" name="message" class="form-control">Tapez votre message...</textarea>
                    </div>

                    <button class="btn btn-primary" type="submit">ENVOYER
                </form>
            </div>
        </div>
@stop