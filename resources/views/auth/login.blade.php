<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admincast bootstrap 4 &amp; angular 5 admin template, Шаблон админки | Login</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{ asset('layout/assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('layout/assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('layout/assets/vendors/themify-icons/css/themify-icons.css') }}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{ asset('layout/assets/css/main.css" rel="stylesheet') }}" />
    <!-- PAGE LEVEL STYLES-->
    <link href="{{ asset('layout/assets/css/pages/auth-light.css') }}" rel="stylesheet" />
</head>

<body class="bg-silver-300">
    <div class="content">
        <div class="brand">
            <a class="link" href="index.html">AdminCAST</a>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="login-title">Log in</h2>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <label class="ui-checkbox ui-checkbox-info">
                    <input type="checkbox">
                    <span class="input-span"></span>Remember me</label>
                <a href="forgot_password.html">Forgot password?</a>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
            </div>
            
            <div class="text-center">Not a member?
                <a class="color-blue" href="/register">Create accaunt</a>
            </div>
        </form>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
   
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src="{{ asset('layout/assets/vendors/jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('layout/assets/vendors/popper.js/dist/umd/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('layout/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src="{{ asset('layout/assets/vendors/jquery-validation/dist/jquery.validate.min.js')}}" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{ asset('layoutassets/js/app.js')}}" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#login-form').validate({
                errorClass: "help-block",
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    }
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
            });
        });
    </script>
</body>

</html>