@extends('templates.default')

@section('content')
    <div class="mt-5 col-lg-12">
        <div class="mt-3 mb-5">
            <h3>Profile page.</h3>
        </div>

       <div class="row">
           <div class="col-lg-5">
               @include('templates.partials.crumbs._user_profile_block')
           </div>

           <div class="col-lg-4">
               <h4>Friends</h4>
               <h6>You have <strong>{{ $user->first()->getFriends()->count() ?? 0 }} friends</strong></h6>

               <hr>

               @if($user->first()->getFriends()->count() > 0)
                   @foreach($user->first()->getFriends() as $user)
                       @include('templates.partials.crumbs._friends_block')
                   @endforeach
               @endif
           </div>
       </div>
    </div>
@endsection





