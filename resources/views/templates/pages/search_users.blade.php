@extends('templates.default')

@section('content')
    <div>
        <h2 class="text-dark">
            <p>Search results: "{{ $results ?? 'Not founds!' }}"</p>
        </h2>

        <div class="row mt-5 mb-5">
            @include('templates.partials.crumbs._user_block')
        </div>
    </div>
@endsection






