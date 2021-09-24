<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login</title>

    <!-- General CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../bower_components/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <!-- <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css"> -->
</head>

<body>
    <div class="row">
        <div class="side-left position-absolute h-100 col-lg-12">

        </div>
    </div>
    <div id="app" class="container">
        <div class="row ">
            <div class="col-lg-8 col-md-1 mt-3 fw-bold pt-5 text-white sp">
                <span class="display-2 fw-bold" style="text-shadow: rgba(0, 0, 0, 0.288) 5px 5px 5px;">
                    Wellcome to,
                </span>
                <p class="fs-4"
                    style="text-shadow: rgba(0, 0, 0, 0.288) 5px 5px 5px; word-spacing: 5px; font-weight: 400;">
                    SMK Taruna Bhakti
                </p>
            </div>
            <div class="col-lg-4 col-md-12 bg-white pt-3">
                <div class="p-4 m-3 pt-3">
                    <img src="{{ asset('img/logo-starbhak.png') }}" alt="logo" width="80" class="" style="
                        margin-left: 35%;">
                    <h4 class="text-dark font-weight-normal text-center mb-4 mt-5"><span class="font-weight-bold">Sign
                            in</span>
                    </h4>
                    <form method="POST" action="{{ route('login') }}" novalidate="">
                        @csrf
                        <div class="form-group">
                            <input id="username" type="text" class="form-control mb-4" placeholder="USERNAME"
                                name="username" tabindex="1" required autofocus>
                            <div class="invalid-feedback">
                                Please fill in your username
                            </div>
                        </div>

                        <div class="form-group">
                            <input id="password" type="password" placeholder="PASSWORD" class="form-control mb-4"
                                name="password" tabindex="2" required>
                            <div class="invalid-feedback">
                                please fill in your password
                            </div>
                        </div>


                        <div class="form-group text-center">
                            <!-- <a href="auth-forgot-password.html" class="float-left mt-3">
                  Forgot Password?
                </a> -->
                            <button type="submit" class="mb-4 btn btn-primary d-inline form-control">
                                Login
                            </button>
                        </div>

                        <div class="form-group mb-5">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="stay" class="custom-control-input" id="remember-me">
                                <label class="custom-control-label" for="remember-me">Stay signed in</label>
                            </div>
                        </div>

                        <div class="mt-5 text-center pt-3">
                            CAN'T SIGN IN?
                            <br>
                            <a href="/register">CREATE ACCOUNT</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>
