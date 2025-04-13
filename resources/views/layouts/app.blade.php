<head>
    <!-- Charset & Viewport -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
    <!-- SEO Meta -->
    <meta name="description" content="Professional portfolio of Mark Louie E. Abayhon - IT Graduate and Web Developer" />
    <meta name="author" content="Mark Louie E. Abayhon" />
    <title>@yield('title', 'Mark Louie E. Abayhon - IT Professional')</title>

    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Optional Custom Stylesheet -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

    @yield('styles')
</head>
