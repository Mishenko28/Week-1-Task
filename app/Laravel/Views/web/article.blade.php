@extends('web._layouts.main')

@section('page-content')
    <article class="container pt-5">
        <header class="d-flex flex-column align-items-center text-center mx-auto">
            <p class="article-category mb-2 text-primary small">CITIES</p>
            <h5 class="fs-1 fw-bold lh-1 mb-4" style="max-width: 600px;">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Nemo, ab.</h5>
            <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                <div class="d-flex gap-3 align-items-center">
                    <div>
                        <img src="{{ asset('assets/images/avatar.avif') }}" alt="avatar" width="400" height="400"
                            class="avatar">
                        <span class="fw-medium">John Doe</span>
                    </div>
                    <span>-</span>
                    <span class="small text-muted">March 14, 2025</span>
                    <span>-</span>
                    <span class="small text-muted"><i class="bi bi-clock"></i> 8 min read</span>
                </div>
                <div class="d-flex gap-2">
                    <a class="share-icon h6 m-0 d-flex align-items-center justify-content-center h3 text-primary border rounded-circle"
                        href="#">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                    <a class="share-icon h6 m-0 d-flex align-items-center justify-content-center h3 text-primary border rounded-circle"
                        href="#">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a class="share-icon h6 m-0 d-flex align-items-center justify-content-center h3 text-primary border rounded-circle"
                        href="#">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a class="share-icon h6 m-0 d-flex align-items-center justify-content-center h3 text-primary border rounded-circle"
                        href="#">
                        <i class="bi bi-link-45deg"></i>
                    </a>
                </div>
            </div>
        </header>

        {{-- featured image --}}
        <div class="pt-5">
            <img src="{{ asset('assets/images/featured.avif') }}" alt="hero image" width="1600" height="900"
                class="img-fluid rounded-2 w-100">
        </div>
    </article>

    {{-- article body --}}
    <div class="container py-5">
        <div class="d-flex flex-column gap-3">
            <p class="article-paragraph lead">
                Necessitatibus soluta illum beatae dolorum saepe voluptate! Ab necessitatibus enim deserunt dolorem
                consequatur rem molestiae molestias corrupti facere doloribus cumque optio sequi, repellendus illum quos?
                modi porro? Minus quas ex officia porro consequuntur possimus, excepturi quasi non quibusdam voluptatibus
                vel facere vero dolor omnis ipsam numquam, debitis sed similique ipsum accusamus ad. Accusantium alias
                expedita, veritatis modi itaque numquam quam necessitatibus! Nemo cupiditate laborum voluptate sunt, dicta
                consequuntur assumenda neque commodi perferendis mollitia quo! Ipsum at similique deserunt ullam eaque
                facere beatae recusandae temporibus qui.
            </p>

            <p class="article-paragraph lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit cum consequatur, beatae culpa maiores optio
                animi eius exercitationem autem! Numquam magni, modi quod cupiditate nihil quo repellendus rem aliquam
                consectetur, voluptate cum natus minima recusandae et neque voluptates consequuntur blanditiis eligendi eum
                laudantium totam hic deleniti earum. Atque sapiente veniam exercitationem qui placeat ad, velit voluptates
                voluptate officia a, et at, tempore eum quisquam temporibus omnis beatae quod id molestiae mollitia possimus
                praesentium nobis nam veritatis. Sed accusantium nostrum id quisquam doloremque animi tempora ab non libero
                hic totam voluptatibus, ducimus aliquid, voluptas architecto nulla cumque impedit exercitationem.
                Perferendis, dolor.
            </p>

            <p class="article-paragraph lead">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, aut illo sed iste pariatur laborum fugiat
                autem? Reprehenderit aliquid ab magni et molestias odit id expedita, natus sit officiis maiores excepturi
                adipisci amet, quos, labore quaerat consectetur quae tenetur accusamus commodi error modi rerum eligendi
                esse. Debitis iure deserunt ex! Fugit dolorum sequi temporibus nulla unde recusandae. Eum voluptatem dolorem
                exercitationem laudantium ex aut doloremque ullam quod deserunt non voluptate ab nisi accusamus molestias
                molestiae, repudiandae temporibus minima quidem! Ullam laborum illo quae porro laudantium voluptatem magnam,
                labore placeat nihil quo ipsam fugit accusantium quibusdam non odio dolorum reiciendis dolore?
            </p>
        </div>
    </div>

    <!-- Related articles -->
    <section class="container mt-5 pt-4">
        <div class="mb-2">
            <p class="text-primary fw-medium">KEEP READING</p>
            <h2>Related articles</h2>
        </div>
        <div class="row g-4">
            @include('web._components.article-card')
            @include('web._components.article-card')
            @include('web._components.article-card')
        </div>
    </section>
@endsection

@section('page-styles')
    <style>
        .share-icon {
            width: 44px;
            height: 44px;
        }

        .article-paragraph {
            text-align: justify;
        }

        .article-paragraph:first-of-type::first-letter {
            float: left;
            font-weight: 600;
            font-size: 3.8rem;
            line-height: 0.9;
            padding: 0.06em 0.12em 0 0;
        }
    </style>
@endsection
