@extends('templates.default')

@section('content')
    <div class="row">
        <div class="col-lg-6 mt-4">
            <div class="mb-4">
                <h5>Your friends</h5>
            </div>

            @if($friends)
                @if(!$friends->count())
                    <h6>You have not friends</h6>
                @else
                    @foreach($friends as $user)
                        @include('templates.partials.crumbs._friends_block')
                    @endforeach
                @endif
            @endif
        </div>

        <div class="col-lg-6 mt-4">
            <div class="mb-4">
                <h5>friend requests</h5>
            </div>

            @if($requests)
                @if(!$requests->count())
                    <h6>Request: <strong>0</strong></h6>
                @else
                    @foreach($requests as $user)
                        @include('templates.partials.crumbs._friends_block')
                    @endforeach
                @endif
            @endif
        </div>
    </div>
@endsection





