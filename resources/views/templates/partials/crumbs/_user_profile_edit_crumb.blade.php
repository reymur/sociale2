


<form action="{{ route('user-profile.update', ['user_profile' => Auth::user()->id]) }}" method="post" novalidate>
    @method('put')
    @csrf()
    <div class="form-group">
        <label for="login">Login *</label>
        <input type="text" name="login" class="form-control {{ $errors->has('login') ? 'is-invalid' : '' }}" id="login" value="{{ old('login') ?? Auth::user()->login }}">
        <span class="invalid-feedback">
            {{ $errors->has('login') ? $errors->first('login') : '' }}
        </span>
    </div>

    <div class="form-group">
        <label for="email">Email *</label>
        <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" value="{{ old('email') ?? Auth::user()->email }}">
        <span class="invalid-feedback">
            {{ $errors->has('email') ? $errors->first('email') : '' }}
        </span>
    </div>

    <div class="form-group">
        <label for="first_name">First name</label>
        <input type="text" name="first_name" class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" id="first_name" value="{{ old('first_name') ?? Auth::user()->first_name }}">
            {{ $errors->has('first_name') ? $errors->first('first_name') : '' }}
        </span>
    </div>

    <div class="form-group">
        <label for="last_name">Last name</label>
        <input type="text" name="last_name" class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" id="last_name" value="{{ old('last_name')  ?? Auth::user()->last_name }}">
        <span class="invalid-feedback">
            {{ $errors->has('last_name') ? $errors->first('last_name') : '' }}
        </span>
    </div>

    {{--    {{ dd(Auth::user()->login) }}--}}
    <div class="form-group">
        <label for="location">Location</label>
        <input type="text" name="location" class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" id="location" value="{{ old('location') ?? Auth::user()->location }}">
        <span class="invalid-feedback">
            {{ $errors->has('location') ? $errors->first('location') : '' }}
        </span>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
