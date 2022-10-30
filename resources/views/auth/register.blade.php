<!DOCTYPE html>
<html lang="en">
<head>
    <title>Auth View - Register</title>
    <script src="https://kit.fontawesome.com/4430c6a384.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/registration.css">
</head>
<body>
    
    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-back">
                    <div class="invalid-feedback">
                        @error('name')
                            <span role="alert">
                                Invalid Name!
                            </span>
                        @enderror
                        @error('password')
                            <span role="alert">
                                Invalid Passwordl!
                            </span>
                        @enderror
                    </div>

                    <h2>Register</h2>
                        <span id="username-error"></span>
                        <span id="email-error"></span>
                        <span id="password-error"></span>
                        <span id="confirm-error"></span>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input id="name" type="text" onkeyup="validateName()" placeholder="username" class="input-box @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <input id="email" type="email" onkeyup="validateEmail()" placeholder="email" class="input-box @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        <input id="password" type="password" onkeyup="validatePassword()" placeholder="password" class="input-box @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <input id="password-confirm" type="password" onkeyup="confirmPassword()" placeholder="confirm password" class="input-box" name="password_confirmation" required autocomplete="new-password">
                        <span id="signup-error"></span>
                        <button type="submit" onclick=" return validateSignup()" class="submit-btn">Submit</button>
                    </form>
                        @error('email')
                            <span role="alert">
                                Email already Used!
                            </span>
                        @enderror
                    <a href="/login"><button type="button" class="btn">Already have an account?</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- copyright message -->

<div class="footer">
    <p><i class="fa-solid fa-copyright"></i> Copyright 2022 - Robeen Gyawali</p>
</div>

<script src="/js/validation.js"></script>

</body>
</html>