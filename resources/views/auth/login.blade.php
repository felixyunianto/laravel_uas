<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primex - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/assets/media/image/favicon.png')}}" />

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{asset('assets/vendors/bundle.css')}}" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('assets/assets/css/app.min.css')}}" type="text/css">
</head>

<body class="form-membership" style="background: #182139">

    <!-- begin::preloader-->
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    <!-- end::preloader -->

    <div class="form-wrapper">


        <!-- logo -->
        <div id="logo">
            <img class="logo" src="{{asset('assets/assets/media/image/logo-light.png')}}" alt="image">
        </div>
        <!-- ./ logo -->

        <h1>SIGN IN</h1>

        <!-- form -->
        <form method="POST" action="{{ route('login') }}" style="background: #313852">
            @csrf
            <div class="form-group">
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                    name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Username or Email">

                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="Password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group d-flex justify-content-between">
                <div class="custom-control custom-checkbox">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <a href="pages-recovery-password.html">Reset password</a>
            </div>
            <button class="btn btn-primary btn-block">Sign in</button>
        </form>
        <!-- ./ form -->


    </div>

    <!-- Plugin scripts -->
    <script src="{{asset('assets/vendors/bundle.js')}}"></script>
    <script src="{{asset('assets/assets/js/app.min.js')}}"></script>
</body>

</html>
