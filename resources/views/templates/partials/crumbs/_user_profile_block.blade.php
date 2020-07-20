

<div class="ml-4 mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="{{ $user->first()->getUserAvatar() }}" class="card-img" alt="...">
        </div>

        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $user->first()->getUserFullName() ?? $user->first()->getUserFirstNameOrLogin() }}
                </h5>
                <h5 class="card-title">{{ $user->first()->email ?? 'Email:' }}</h5>
                <h5 class="card-title">
                    {{ $user->first()->first_name ?? 'First name:' }}
                </h5>
                <h5 class="card-title">
                    {{ $user->first()->last_namem ?? 'Last name' }}
                </h5>
                <p class="card-text">
                    <small class="text-muted">{{ $user->first()->location ?? 'Location' }}</small>
                </p>
            </div>

            @if(Auth::check())
                <div class="ml-4">
                    <a href="{{ route('user-profile.edit', ['user_profile' => Auth::user()->id]) }}" class="btn btn-primary">Edit</a>
                </div>
            @endif
        </div>
    </div>
</div>
