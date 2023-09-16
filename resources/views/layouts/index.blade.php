@include('./partials/html')

    <head>
        @include("./partials/title-meta")

        <!-- Daterangepicker css -->
        <link rel="stylesheet" href="{{asset('./assets/vendor/daterangepicker/daterangepicker.css')}}">

        <!-- Vector Map css -->
        <link rel="stylesheet" href="{{asset('./assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}">

        @include('./partials/head-css')
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            @include('./partials/menu')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                        @yield('contents')
                    <!-- container -->

                </div>
                <!-- content -->

                @include('./partials/footer')

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        @include('./partials/right-sidebar')

        @include('./partials/footer-scripts')

        <!-- Daterangepicker js -->
        <script src="{{asset('assets/vendor/daterangepicker/moment.min.js')}}"></script>
        <script src="{{asset('assets/vendor/daterangepicker/daterangepicker.js')}}"></script>

        <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

        <script src="{{asset('./assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{asset('./assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')}}"></script>

        <script src="{{asset('./assets/js/pages/dashboard.js')}}"></script>

        <script src="{{asset('./assets/js/app.min.js')}}"></script>
    </body>
</html>
