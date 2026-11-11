@extends('web._layouts.main')

@section('page-content')
    {{-- intro section --}}
    @include('web._components.intro-section', [
        'subtitle' => 'Welcome to Home Page',
        'image_src' => asset('assets/images/intro_home.jpg'),
    ])

    {{-- featured section --}}
    <section class="container py-5">
        <div class="mb-2">
            <p class="text-primary fw-medium">Today's pick</p>
        </div>
        <div class="card border-0">
            <div class="row gap-0">
                <div class="col-md-7">
                    <img src="{{ asset('assets/images/featured.avif') }}" alt="featured image" class="img-fluid rounded-2 w-100">
                </div>
                <div class="col-md-5">
                    <div class="card-body">
                        <p class="article-category mb-2 text-secondary small">CITIES</p>
                        <h5 class="card-title fs-1 fw-bold lh-1">Lorem ipsum dolor sit amet.</h5>
                        <p class="card-text text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ratione amet totam? Architecto
                            aut sint aliquid fugit qui nihil incidunt, at, distinctio magnam rerum quasi eos veniam. Beatae
                            molestiae in, odio soluta impedit ipsum laudantium magni quia cupiditate dignissimos! In
                            reprehenderit iusto atque dolore suscipit, quasi recusandae eum iure repellendus.
                        </p>
                        <div class="card-text mt-3 mb-4">
                            <img src="{{ asset('assets/images/avatar.avif') }}" alt="avatar" width="400" height="400"
                                class="avatar">
                            <span class="fw-medium">Noor Haddad</span>
                            <span>-</span>
                            <span class="small text-muted">March 14, 2025</span>
                            <span class="small text-muted">8 min read</span>
                        </div>
                        <a href="#" class="card-link">Read the featured story</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- articles section --}}
    <section class="container py-5">
        <div class="mb-2">
            <p class="text-primary fw-medium">Latest Articles</p>
        </div>
        <div class="row">
            <div class="card col-md-4 border-0">
                <img src="{{ asset('assets/images/articles.avif') }}" class="card-img-top" alt="article image">
                <div class="card-body">
                    <p class="article-category mb-2 text-secondary small">CULTURE</p>
                    <h5 class="card-title fw-bold">Lorem ipsum dolor sit amet.</h5>
                    <p class="card-text text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eos eum eius, laboriosam ut id
                        quam. Aspernatur minima porro dolores!
                    </p>
                    <div class="card-text mt-3 mb-4">
                        <img src="{{ asset('assets/images/avatar.avif') }}" alt="avatar" width="400" height="400"
                            class="avatar">
                        <span class="fw-medium">Noor Haddad</span>
                        <span>-</span>
                        <span class="small text-muted">March 14, 2025</span>
                        <span class="small text-muted">8 min read</span>
                    </div>
                    <a href="#" class="btn btn-outline-primary">Read more</a>
                </div>
            </div>
            <div class="card col-md-4 border-0">
                <img src="{{ asset('assets/images/articles.avif') }}" class="card-img-top" alt="article image">
                <div class="card-body">
                    <p class="article-category mb-2 text-secondary small">FOOD</p>
                    <h5 class="card-title  fw-bold">Lorem ipsum dolor sit amet.</h5>
                    <p class="card-text text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eos eum eius, laboriosam ut id
                        quam. Aspernatur minima porro dolores!
                    </p>
                    <div class="card-text mt-3 mb-4">
                        <img src="{{ asset('assets/images/avatar.avif') }}" alt="avatar" width="400" height="400"
                            class="avatar">
                        <span class="fw-medium">Noor Haddad</span>
                        <span>-</span>
                        <span class="small text-muted">March 14, 2025</span>
                        <span class="small text-muted">8 min read</span>
                    </div>
                    <a href="#" class="btn btn-outline-primary">Read more</a>
                </div>
            </div>
            <div class="card col-md-4 border-0">
                <img src="{{ asset('assets/images/articles.avif') }}" class="card-img-top" alt="article image">
                <div class="card-body">
                    <p class="article-category mb-2 text-secondary small">HISTORY</p>
                    <h5 class="card-title  fw-bold">Lorem ipsum dolor sit amet.</h5>
                    <p class="card-text text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eos eum eius, laboriosam ut id
                        quam. Aspernatur minima porro dolores!
                    </p>
                    <div class="card-text mt-3 mb-4">
                        <img src="{{ asset('assets/images/avatar.avif') }}" alt="avatar" width="400" height="400"
                            class="avatar">
                        <span class="fw-medium">Noor Haddad</span>
                        <span>-</span>
                        <span class="small text-muted">March 14, 2025</span>
                        <span class="small text-muted">8 min read</span>
                    </div>
                    <a href="#" class="btn btn-outline-primary">Read more</a>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('page-styles')
    <style>
        .article-category {
            letter-spacing: 0.16em;
        }
    </style>
@endsection
