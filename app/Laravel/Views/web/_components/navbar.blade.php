<header class="sticky-top bg-light-subtle border-bottom">
    <nav class="navbar navbar-expand-lg py-3" aria-label="Navigation">
        <div class="container">
            <a class="navbar-brand fw-semibold fs-5" href="{{ route('web.home') }}">BLOGS.PH</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#siteNav"
                aria-controls="siteNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse gap-2" id="siteNav">
                <ul class="navbar-nav mx-auto align-items-lg-center gap-lg-2">
                    <li class="nav-item">
                        <a class="nav-link fw-medium {{ $title_page === 'Articles' ? 'active' : '' }}"
                            {{ $title_page === 'Articles' ? "aria-current='page'" : '' }}
                            href="{{ route('web.articles') }}">ARTICLES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium {{ $title_page === 'About' ? 'active' : '' }}"
                            {{ $title_page === 'About' ? "aria-current='page'" : '' }}
                            href="{{ route('web.about') }}">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium {{ $title_page === 'Contact' ? 'active' : '' }}"
                            {{ $title_page === 'Contact' ? "aria-current='page'" : '' }}
                            href="{{ route('web.contact') }}">CONTACT</a>
                    </li>
                    <li class="nav-item d-lg-none d-flex gap-2">
                        <a class="btn btn-outline-primary fw-medium" href="#">Login</a>
                        <a class="btn btn-primary fw-medium" href="#">Register</a>
                    </li>
                </ul>
            </div>

            <div class="navbar-nav gap-2 d-none d-lg-flex gap-2">
                <a class="nav-item btn btn-outline-primary" href="#">Login</a>
                <a class="nav-item btn btn-primary" href="#">Register</a>
            </div>
        </div>
    </nav>
</header>
