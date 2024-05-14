<div>
    <nav class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom shadow-sm">
        <a href="{{ route('homepage') }}"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="fs-4 ms-4">Portfolio</span>
        </a>
    
        <ul class="nav nav-pills me-3">
            <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link @if(request()->routeIs('homepage')) active @endif" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="{{ route('aboutus') }}" class="nav-link @if(request()->routeIs('aboutus')) active @endif">Chi Siamo</a></li>
            <li class="nav-item "><a href="{{ route('service') }}" class="nav-link @if(request()->routeIs('service')) active @endif">Servizi</a></li>
            <li class="nav-item "><a href="{{ route('contact') }}" class="nav-link @if(request()->routeIs('contact')) active @endif">Contatti</a></li>
    
        </ul>
    </nav>
</div>