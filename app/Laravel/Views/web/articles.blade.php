@extends('web._layouts.main')

@section('page-content')
    {{-- featured section --}}
    <section class="container py-5">
        <div class="mb-2">
            <p class="text-primary fw-medium">FEATURED</p>
        </div>

        @include('web._components.featured-article')
    </section>

    {{-- articles section --}}
    <section class="container py-5">
        <div class="row gy-3 align-items-end justify-content-between mb-4">
            {{-- categories --}}
            <div class="col-lg-8">
                <p class="text-primary fw-medium">CATEGORIES</p>
                <div class="d-flex flex-wrap gap-2" aria-label="Filter articles by category">
                    <a class="fw-bold text-uppercase text-muted border rounded-pill py-2 px-3 small text-decoration-none active-categoty"
                        aria-current="true" href="#">All</a>
                    <a class="fw-bold text-uppercase text-muted border rounded-pill py-2 px-3 small text-decoration-none"
                        href="#">Culture</a>
                    <a class="fw-bold text-uppercase text-muted border rounded-pill py-2 px-3 small text-decoration-none"
                        href="#">Design</a>
                    <a class="fw-bold text-uppercase text-muted border rounded-pill py-2 px-3 small text-decoration-none"
                        href="#">Cities</a>
                    <a class="fw-bold text-uppercase text-muted border rounded-pill py-2 px-3 small text-decoration-none"
                        href="#">Food</a>
                    <a class="fw-bold text-uppercase text-muted border rounded-pill py-2 px-3 small text-decoration-none"
                        href="#">Essays</a>
                    <a class="fw-bold text-uppercase text-muted border rounded-pill py-2 px-3 small text-decoration-none"
                        href="#">Books</a>
                    <a class="fw-bold text-uppercase text-muted border rounded-pill py-2 px-3 small text-decoration-none"
                        href="#">Architecture</a>
                    <a class="fw-bold text-uppercase text-muted border rounded-pill py-2 px-3 small text-decoration-none"
                        href="#">History</a>
                </div>
            </div>

            {{-- search --}}
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-text py-2" aria-hidden="true"><i class="bi bi-search"></i></span>
                    <input type="search" class="form-control border-start-0" id="articleSearch" name="q"
                        placeholder="Search stories, authors, topics…" aria-label="Search articles">
                </div>
            </div>
        </div>

        <hr class="mb-4">

        <div class="row gy-5 g-md-3 mb-5">
            @include('web._components.article-card')
            @include('web._components.article-card')
            @include('web._components.article-card')
        </div>

        <div class="row gy-5 g-md-3 mb-5">
            @include('web._components.article-card')
            @include('web._components.article-card')
            @include('web._components.article-card')
        </div>

        <div class="row gy-5 g-md-3 mb-5">
            @include('web._components.article-card')
            @include('web._components.article-card')
            @include('web._components.article-card')
        </div>

        <nav class="d-flex justify-content-center">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#"><i class="bi bi-arrow-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="bi bi-arrow-right"></i></a></li>
            </ul>
        </nav>
    </section>
@endsection


@section('page-styles')
    <style>
        .active-categoty {
            background: var(--bs-primary);
            color: var(--bs-light) !important;
            border: none;
        }
    </style>
@endsection
