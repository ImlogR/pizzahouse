<!DOCTYPE html>
<html lang="en">
<head>
    <title>Auth View - Login</title>
    <script src="https://kit.fontawesome.com/4430c6a384.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>Staff - Login</h2>
                    <form  method="POST" action="{{ route('login') }}">
                        @csrf 
                        <input id="email" type="email" placeholder="email" class="input-box @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <input id="password" type="password" placeholder="password" class="input-box @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <p>Invalid Credentials!!</p>
                            </span>
                        @enderror
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <p>Invalid Credentials!!</p>
                            </span>
                        @enderror
                        
                        <button type="submit" class="submit-btn">Submit</button>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                        @endif
                        <br>
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span>Remember Me</span>
                    </form>
                    <a href="/register"><button type="button" class="btn" onclick="openRegister()">I'm new here!</button></a>
                    <a href="{{route('pizzas.create')}}"><button type="button" class="btn" onclick="openRegister()">Not a Staff? Click to Place order!</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- copyright message -->

<div class="footer">
    <p><i class="fa-solid fa-copyright"></i> Copyright 2022 - Robeen Gyawali</p>
</div>

</body>
</html>