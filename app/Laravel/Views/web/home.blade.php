@extends('web._layouts.main')

@section('page-content')
    {{-- intro section --}}
    @include('web._components.intro-section', [
        'title' => 'Welcome to Home Page',
        'image_src' => asset('assets/images/intro_home.jpg'),
    ])

    {{-- featured section --}}
    <section class="container py-5">
        <div class="mb-2">
            <p class="text-primary fw-medium">FEATURED</p>
        </div>
        @include('web._components.featured-article')
    </section>

    {{-- articles section --}}
    <section class="container py-5">
        <div class="mb-2">
            <p class="text-primary fw-medium">LATEST ARTICLES</p>
        </div>
        <div class="row">
            @include('web._components.article-card')
            @include('web._components.article-card')
            @include('web._components.article-card')
        </div>
    </section>
@endsection
