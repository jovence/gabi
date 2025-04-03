<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    @include('adminComponents.css')
    @livewireStyles
</head>

<body class="with-welcome-text">
    <div class="container-scroller">

        @include('adminComponents.nav')

        <div class="container-fluid page-body-wrapper">
            @include('adminComponents.sidebar')

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="home-tab">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        
                        <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2025. All
                            rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    @include('adminComponents.js')
    @livewireScripts
</body>

</html>
