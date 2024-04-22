<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>feelroom</title>

    <!-- Favicon -->
    <!-- --------------------------------------------------- -->
    <link rel="shortcut icon" type="image/png"
        href="{{ 'modernize' }}/assets/images/logos/fr.jpg" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link href=".{{ 'modernize' }}/styles.css" rel="stylesheet" />
</head>

<body>
    <div id="main-wrapper">
        <header class="py-3 bg-white">
            <div class="container">
                <!-- Start Header -->
                <div class="header">
                    <nav class="navbar navbar-expand-md navbar-light px-0">
                        {{-- <a class="navbar-brand d-flex" href="#!">
                            <img src="{{ 'modernize' }}/assets/images/logos/logo.png"
                                alt="logo" />
                        </a> --}}
                        <h5 class="fw-bold">feelroom</h5>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto py-3 py-md-0">
                                <li class="nav-item pe-0 pe-md-3">
                                    @if (Route::has('login'))
                                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                                            @auth
                                                <a href="{{ url('/dashboard') }}"
                                                    class="btn btn-success font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                            @else
                                                <a href="{{ route('login') }}"
                                                    class="btn btn-success font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                                    in</a>

                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}"
                                                        class="btn btn-success ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- End Header -->
            </div>
        </header>

        <div class="content-wrapper">
            <section class="spacer bg-light">
                <div class="container">
                    <div class="row justify-content-md-center pt-5">
                        <div class="col-md-9 text-center">
                            <h2 class="text-dark">
                                Share your creativity with
                                <span class="fw-bold">feelroom?</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="text-center p-4">
                All Rights Reserved by feelroom. share your creativity.
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
