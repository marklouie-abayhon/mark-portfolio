<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Character Encoding and Viewport Settings -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Professional portfolio of Mark Louie E. Abayhon - IT Graduate and Web Developer" />
    <meta name="author" content="Mark Louie E. Abayhon" />
    <title>@yield('title', 'Mark Louie E. Abayhon - IT Professional')</title>

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Favicon, Fonts, Icons, etc -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    
    <!-- Core Theme CSS -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

    <!-- Optional: Other Styles or Scripts -->
    @yield('styles')
</head>
<body class="d-flex flex-column @yield('body-class', 'h-100')">
    @include('layouts.nav')
    
    <main class="flex-shrink-0">
        @yield('content')
    </main>
    
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Mark Louie E. Abayhon {{ date('Y') }}</div></div>
                <div class="col-auto">
                    <a class="small text-white" href="{{ route('privacy') }}">Privacy</a>
                    <span class="mx-1 text-white">&middot;</span>
                    <a class="small text-white" href="{{ route('terms') }}">Terms</a>
                    <span class="mx-1 text-white">&middot;</span>
                    <a class="small text-white" href="{{ route('contact') }}">Contact</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom Theme JS -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    @yield('scripts')
</body>
</html>
