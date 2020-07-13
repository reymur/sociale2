@extends('templates.default')


@section('content')
    <h1>Welcome {{ Auth::user()->getUserFullName() ?? Auth::user()->getUserLogin() }}</h1>

    <div class="col-lg-4 mt-5 mr-auto">
        <img class="phone-home" src="{{ asset('images/phone3.1.jpg') }}" alt="Phone">
    </div>
@endsection






