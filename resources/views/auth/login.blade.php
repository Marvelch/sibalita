@include('../partials/html')

<head>
    @include("../partials/title-meta")

    @include('../partials/head-css')
</head>

<body class="authentication-bg position-relative">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="{{asset('/assets/images/auth-img.png')}}" alt=""
                                    class="img-fluid rounded h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="auth-brand p-4">
                                        <a href="index.html" class="logo-light">
                                            <img src="assets/images/logo.png" alt="logo" height="22">
                                        </a>
                                        <a href="index.html" class="logo-dark text-center">
                                            <!-- <img src="assets/images/logo-dark.png" alt="dark logo" height="22"> -->
                                            <h1>Logo</h1>
                                            <p class="text-small">Pengelolaan Layanana Balita Dinas Kesehatan Talaud</p>
                                        </a>
                                    </div>
                                    <div class="p-4 my-auto">
                                        <h4 class="fs-20">Sign In</h4>
                                        <p class="text-muted mb-3">Gunakan alamat email dan password untuk akses layanan
                                        </p>

                                        <!-- form -->
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="emailaddress" class="form-label">Email</label>
                                                <input name="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ old('email') }}" type="email" id="emailaddress"
                                                    required="" placeholder="Enter your email" required
                                                    autocomplete="email" autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <a href="auth-forgotpw.html" class="text-muted float-end"><small>lupa
                                                        kata sandi?</small></a>
                                                <label for="password" class="form-label">Password</label>
                                                <input class="form-control @error('password') is-invalid @enderror"
                                                    type="password" name="password" required
                                                    autocomplete="current-password" id="password"
                                                    placeholder="Enter your password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="checkbox-signin">
                                                    <label class="form-check-label" for="checkbox-signin">Ingat
                                                        saya</label>
                                                </div>
                                            </div>
                                            <div class="mb-0 text-start">
                                                <button class="btn btn-soft-primary w-100" type="submit"><i
                                                        class="ri-login-circle-fill me-1"></i> <span
                                                        class="fw-bold">Masuk</span> </button>
                                            </div>
                                            <div class="text-center mt-2">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <hr>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        OR
                                                    </div>
                                                    <div class="col-sm">
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 justify-content-center mt-1">
                                                    <a class="btn btn-primary fw-semibold w-100" href="{{url('register')}}">Daftar</a>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- end form-->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    @include('./partials/footer-scripts')

    <!-- App js -->
    <script src="{{asset('./assets/js/app.min.js')}}"></script>

</body>

</html>
