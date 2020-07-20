@extends('templates.default')


@section('content')
    <h1>Welcome
        @if(Auth::check())
            {{ Auth::user()->getUserFullName() ?? Auth::user()->getUserLogin() }}
        @else
            our Social set.
        @endif
    </h1>

    <div class="col-lg-4 mt-5 mr-auto">
        <img class="phone-home" src="{{ asset('images/phone3.1.jpg') }}" alt="Phone">
    </div>
@endsection






