
@if(session()->has('success'))
    <div class="alert alert-primary" role="alert">
        {{ session()->get('info') }}
    </div>
@endif
