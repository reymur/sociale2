
<form action="{{ route('register.post') }}" method="post" novalidate>
    @csrf()
    <div class="form-group">
        <label for="login">Login</label>
        <input type="text" name="login" class="form-control {{ $errors->has('login') ? 'is-invalid' : '' }}" id="login" value="{{ old('login') }}">
        <span class="invalid-feedback">
            {{ $errors->has('login') ? $errors->first('login') : '' }}
        </span>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" value="{{ old('email') }}">
        <span class="invalid-feedback">
            {{ $errors->has('email') ? $errors->first('email') : '' }}
        </span>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password">
        <span class="invalid-feedback">
            {{ $errors->has('password') ? $errors->first('password') : '' }}
        </span>
    </div>
    <div class="form-group">
        <label for="confirmation_password">Password confirmation</label>
        <input type="password" name="password_confirmation" class="form-control" id="confirmation_password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
