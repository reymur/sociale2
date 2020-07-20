
@if($users->count() > 0)
    @foreach($users as $user)
        <div class="card m-2" style="width: 16rem;">
            <a href="{{ route('profile', ['id' => $user->id]) }}">
                <img src="{{ asset('images/image.svg') }}" class="card-img-top" alt="...">
            </a>

            <div class="card-body">
                <h5 class="card-title text-dark">{{ $user->getUserFullName() ?? 'No name' }}</h5>
                <h5 class="card-title text-dark">{{ $user->email ?? 'No email' }}</h5>
                <h5 class="card-title text-dark">{{ $user->getUserLogin() ?? 'No name' }}</h5>
                <p class="card-text text-dark">{{ $user->location ?? 'No location' }}</p>
            </div>
        </div>
    @endforeach
@endif
