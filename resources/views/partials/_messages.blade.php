@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        <strong>Succès:</strong> {{ Session::get('success')}}
    </div>
        
    @else
        
    @endif