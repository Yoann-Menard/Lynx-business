<!doctype html>
<html lang="en">
    <head>
        @include('_head')
    </head>
    
<body>

@include('_nav')

<div class="container">

    @yield('content')

    @include('_footer')

</div>

    @include('_javascript')

    @yield('scripts')
</body>
</html>