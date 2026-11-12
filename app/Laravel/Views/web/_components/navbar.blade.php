<header class="sticky-top bg-light-subtle border-bottom">
    <nav class="navbar navbar-expand-lg py-3" aria-label="Main navigation">
        <div class="container">
            {{-- brand --}}
            <a class="navbar-brand fw-semibold fs-5" href="{{ route('web.home') }}">BLOGS.PH</a>

            {{-- collapse button --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#siteNav"
                aria-controls="siteNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- navigations --}}
            <div class="collapse navbar-collapse" id="siteNav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
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
                </ul>
            </div>
        </div>
    </nav>
</header>
