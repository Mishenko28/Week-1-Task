@extends('web._layouts.main')

@section('page-content')
    {{-- intro section --}}
    @include('web._components.intro-section', [
        'subtitle' => 'Welcome to Contact Page',
    ])
@endsection

@section('page-styles')
    <style>

    </style>
@endsection
