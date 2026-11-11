@extends('web._layouts.main')

@section('page-content')
    {{-- intro section --}}
    @include('web._components.intro-section', [
        'subtitle' => 'Welcome to Articles Page',
        'image_src' => asset('assets/images/intro_articles.avif'),
    ])
@endsection

@section('page-styles')
    <style>

    </style>
@endsection
