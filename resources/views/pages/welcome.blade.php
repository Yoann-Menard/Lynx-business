@extends('main')

@section('title', 'Accueil')

@section('content')
          <div class="row">
              <div class="col-md-12">
                  <div class="jumbotron">
                      <h1>Titre</h1>
                      <p class="lead">paragraphe</p>
                      <p><a class="btn btn-primary btn-lg" href="#" role="button">bouton</a></p>
                  </div>
              </div>
          </div>

          @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Accueil</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Connexion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Inscription</a>
                        @endif
                    @endif
                </div>
            @endif

          <div class="row">
            <div class="col-md-8">
              <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis, nesciunt expedita. Perspiciatis recusandae quisquam architecto cumque sit blanditiis, nemo sunt voluptas, mollitia excepturi minus consectetur
                  illum temporibus expedita unde aperiam.</p>
                  <a href="#" class="btn btn-primary">Read more</a>
              </div>

              <hr>

              <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis, nesciunt expedita. Perspiciatis recusandae quisquam architecto cumque sit blanditiis, nemo sunt voluptas, mollitia excepturi minus consectetur
                  illum temporibus expedita unde aperiam.</p>
                  <a href="#" class="btn btn-primary">Read more</a>
              </div>

              <hr>

              <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis, nesciunt expedita. Perspiciatis recusandae quisquam architecto cumque sit blanditiis, nemo sunt voluptas, mollitia excepturi minus consectetur
                  illum temporibus expedita unde aperiam.</p>
                  <a href="#" class="btn btn-primary">Read more</a>
              </div>

              <hr>

              <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis, nesciunt expedita. Perspiciatis recusandae quisquam architecto cumque sit blanditiis, nemo sunt voluptas, mollitia excepturi minus consectetur
                  illum temporibus expedita unde aperiam.</p>
                  <a href="#" class="btn btn-primary">Read more</a>
              </div>

              <hr>
              
            </div>

            <div class="col-md-3 col-md-offset-1">
              <h2>Test</h2>
            </div>

          </div>
@endsection