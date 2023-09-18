@include('../partials/html')

<head>
    @include("../partials/title-meta")

    @include('../partials/head-css')
</head>

<body class="authentication-bg">

    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden bg-opacity-25">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="{{asset('/assets/images/auth-img-1.png')}}" alt=""
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
                                        <!-- form -->
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="emailaddress" class="form-label">NIK</label>
                                                <input name="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ old('email') }}" type="email" id="emailaddress"
                                                    required="" required
                                                    autocomplete="email" autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="fullname" class="form-label">Nama Lengkap</label>
                                                <input class="form-control @error('name') is-invalid @enderror"
                                                    type="text" name="name" value="{{ old('name') }}" required
                                                    autocomplete="name" autofocus>
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Tempat Lahir</label>
                                                        <input type="text" class="form-control" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Tanggal</label>
                                                        <input type="date" name="" id="" class="form-control" value="{{date('Y-m-d',strtotime(now()))}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="emailaddress" class="form-label">Email</label>
                                                <input class="form-control @error('email') is-invalid @enderror"
                                                    type="email" name="email" value="{{ old('email') }}" required
                                                    autocomplete="email">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input id="password" class="form-control @error('password') is-invalid @enderror"
                                                    type="password" name="password" required
                                                    autocomplete="new-password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Konfirmasi Password</label>
                                                <input id="password-confirm" class="form-control @error('password') is-invalid @enderror"
                                                    type="password" name="password_confirmation" required
                                                    autocomplete="new-password">
                                            </div>
                                            <div class="mb-0 d-grid text-center">
                                                <button class="btn btn-primary fw-semibold"
                                                    type="submit">Daftar</button>
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
                                                    <a class="btn btn-soft-primary w-100" href="{{url('login')}}"><i
                                                            class="ri-login-circle-fill me-1"></i> <span
                                                            class="fw-bold">Masuk</span> </a>
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
    <script src="{{asset('./assets/js/app.min.js"></script>

</body>

</html>
