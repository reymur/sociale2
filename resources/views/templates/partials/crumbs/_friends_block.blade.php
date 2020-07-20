

<div class="ml-4 mb-3">
    <div class="row">
        <div class="col-lg-2">
            <img src="{{ $user->getUserAvatar() }}" class="friend-block-image" alt="...">
        </div>

        <div class="mt-3 ml-4">
            <h5 class="card-title">
                {{ $user->getUserFullName() ?? $user->getUserFirstNameOrLogin() }}
            </h5>
        </div>
    </div>
</div>
