
<form action="{{ route('login.post') }}" method="post" novalidate>
    @csrf()
    <div class="form-group">
        <label for="login">Login</label>
        <input type="text" name="login" class="form-control {{ $errors->has('login') ? 'is-invalid' : '' }}" id="login" value="{{ old('login') }}">
        <span class="invalid-feedback">
            {{ $errors->has('login') ? $errors->first('login') : '' }}
        </span>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password">
        <span class="invalid-feedback">
            {{ $errors->has('password') ? $errors->first('password') : '' }}
        </span>
    </div>

    <div class="col-auto my-1 mb-3">
        <div class="custom-control custom-checkbox mr-sm-2">
            <input type="checkbox" name="remember" class="custom-control-input" id="customControlAutosizing">
            <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
