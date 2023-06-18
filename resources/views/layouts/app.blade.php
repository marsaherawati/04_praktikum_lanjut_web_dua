<!-- app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet'
        type='text/css'>
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/templatemo-style.css') }}" rel="stylesheet">

    <title>@yield('title')</title>
    @yield('styles')
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <div class="row">
                <div class="tm-h3">
                    <a href="{{ url('/') }}" class="tm-site-name">Metro City</a><br>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container my-auto">
        <div class="row">
            <div class="col-md-2">
                <!-- Sidebar -->
                <ul class="list-group">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about-us') }}">About Us</a></li>
                    <li><a href="{{ url('/news/1') }}">News</a></li>
                    <li><a href="{{ url('/product') }}">Product</a></li>
                    <li><a href="{{ url('/program') }}">Program</a></li>
                    <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <!-- Main content -->
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <br><br><footer class="bg-light py-3">
        <div class="container">
            <p class="text-center">Braman Tyamahendrawan &copy; {{ date('Y') }}</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ url('js/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/templatemo-script.js') }}"></script>
    @yield('scripts')
</body>

</html>
