<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
    <div class="container px-5">
        <a class="navbar-brand" href="{{ route('home') }}">
            <span class="fw-bolder text-primary">Mark Louie E. Abayhon</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('home')) active @endif" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('resume')) active @endif" href="{{ route('resume') }}">Resume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('projects')) active @endif" href="{{ route('projects') }}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('contact')) active @endif" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>