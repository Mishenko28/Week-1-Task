@extends('web._layouts.main')

@section('page-content')
    {{-- intro section --}}
    @include('web._components.intro-section', [
        'subtitle' => 'Welcome to About Page',
        'image_src' => asset('assets/images/intro_about.avif'),
    ])

    {{-- mission & vision section --}}
    <section class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <h2 class="h3 mb-3">Our mission</h2>
                <p class="text-body-secondary lh-lg mb-0">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima enim sequi eum quod ab vero accusamus
                    sed reprehenderit cum iusto possimus natus, dolorum, nesciunt tenetur laudantium repellendus, cupiditate
                    quae amet. Eligendi dolore delectus corporis repellendus numquam, quia accusantium sequi perferendis,
                    iusto commodi harum tenetur fugiat ullam neque, quod blanditiis labore!
                </p>
            </div>
            <div class="col-lg-6">
                <h2 class="h3 mb-3">Our vision</h2>
                <p class="text-body-secondary lh-lg mb-0">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quod facilis temporibus vitae rem
                    dolores molestiae eligendi, accusamus deserunt eos corporis, sit molestias sint adipisci ipsum quas
                    perferendis nesciunt exercitationem quidem praesentium dicta? Similique dolor a voluptatem consequatur
                    ratione ab nulla sequi consequuntur mollitia cum? Ullam deserunt nesciunt delectus hic?
                </p>
            </div>
        </div>
    </section>

    {{-- statistics --}}
    <section class="container py-5">
        <div class="row g-4 py-5 text-center border-top border-bottom">
            <div class="col-6 col-lg-3">
                <p class="stat-number mb-0 fw-bold lh-1 text-primary">214k</p>
                <span class="stat-label text-uppercase fw-bold text-muted small">Article published</span>
            </div>
            <div class="col-6 col-lg-3">
                <p class="stat-number mb-0 fw-bold lh-1 text-primary">121k</p>
                <span class="stat-label text-uppercase fw-bold text-muted small">Registered Users</span>
            </div>
            <div class="col-6 col-lg-3">
                <p class="stat-number mb-0 fw-bold lh-1 text-primary">14k</p>
                <span class="stat-label text-uppercase fw-bold text-muted small">Letter subscribers</span>
            </div>
            <div class="col-6 col-lg-3">
                <p class="stat-number mb-0 fw-bold lh-1 text-primary">2022</p>
                <span class="stat-label text-uppercase fw-bold text-muted small">Founded in</span>
            </div>
        </div>
    </section>
@endsection

@section('page-styles')
    <style>
        .stat-number {
            font-size: clamp(2.4rem, 4vw, 3.2rem);
        }

        .stat-label {
            letter-spacing: 0.16em;
        }
    </style>
@endsection
