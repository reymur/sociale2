@extends('templates.default')

@section('content')
    <div class="container col-lg-12">
        <div class="mb-5">
            <h2>Registration</h2>
        </div>

        <div class="row mr-auto">
            <div class="col-lg-4 mt-5 ml-auto">
                <img class="phone" src="{{ asset('images/phone3.1.jpg') }}" alt="Phone">
            </div>
            <div class="col-lg-4 ml-auto mr-5 mb-5">
                @include('templates.forms.register_form')
            </div>
        </div>
    </div>
@endsection











