
@if(Session::has('danger'))
    <div class="alert alert-danger" role="alert">
        {{ session()->get('danger') }}
    </div>
@endif
