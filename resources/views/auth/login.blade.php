<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>Library admin - Log in </title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.css') }}">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap-extend.css') }}">

    <!-- theme style -->
    <link rel="stylesheet" href="{{ asset('css/css/master_style.css') }}">

    <!-- Bankio admin skins -->
    <link rel="stylesheet" href="{{ asset('css/css/skins/_all-skins.css') }}">

    <!-- weather weather -->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/weather-icons/weather-icons.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery 3 -->
    <script src="{{ asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>

</head>
<body class="hold-transition bg-light">

<div class="container h-p100">
    <div class="row align-items-center justify-content-md-center h-p100">

        <div class="col-lg-5 col-md-8 col-12">
            <div class="p-40 bg-white content-bottom">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info border-info"><i class="ti-user"></i></span>
                            </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" autocomplete="email" autofocus
                                   placeholder="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info border-info"><i class="ti-lock"></i></span>
                            </div>
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password"
                                   autocomplete="current-password" placeholder="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="checkbox">
                                <input type="checkbox" id="basic_checkbox_1"
                                       name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="basic_checkbox_1">Remember Me</label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-6">
                            <div class="fog-pwd text-right">
                                <a href="javascript:void(0)"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-info mt-10">SIGN IN</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <div class="content-top-agile bg-primary">
                <h2>Test Login With</h2>
                <div class="gap-items-2 mb-20">
                <p class="text-blue">Email: minh@gmail.com</p>
                <p class="text-blue">Password: 12345678</p>
                </div>
            </div>
        </div>


    </div>
</div>


<!-- fullscreen -->
<script src="{{ asset('assets/vendor_components/screenfull/screenfull.js') }}"></script>

<!-- jQuery ui -->
<script src="{{asset('assets/vendor_components/jquery-ui/jquery-ui.js')}}"></script>

<!-- popper -->
<script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>

<!-- Bootstrap 4.0-->
<script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.js') }}"></script>

</body>
</html>
