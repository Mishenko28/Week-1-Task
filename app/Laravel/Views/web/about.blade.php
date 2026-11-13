@extends('web._layouts.main')

@section('page-content')
    {{-- intro section --}}
    @include('web._components.intro-section', [
        'title' => 'Welcome to About Page',
        'image_src' => asset('assets/images/intro_about.avif'),
    ])

    {{-- mission & vision section --}}
    <section class="container py-5">
        <div class="row gy-5">
            <div class="col-lg-6">
                <h2 class="h3 mb-3 font-title">Our mission</h2>
                <p class="text-body-secondary lh-lg mb-0" style="text-align: justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima enim sequi eum quod ab vero accusamus
                    sed reprehenderit cum iusto possimus natus, dolorum, nesciunt tenetur laudantium repellendus, cupiditate
                    quae amet. Eligendi dolore delectus corporis repellendus numquam, quia accusantium sequi perferendis,
                    iusto commodi harum tenetur fugiat ullam neque, quod blanditiis labore!
                </p>
            </div>
            <div class="col-lg-6">
                <h2 class="h3 mb-3 font-title">Our vision</h2>
                <p class="text-body-secondary lh-lg mb-0" style="text-align: justify">
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
                <p class="mb-0 fw-bold lh-1 text-primary font-title h1">214k</p>
                <span class="text-uppercase fw-bold text-muted small" style="letter-spacing: 0.16em">Article
                    published</span>
            </div>
            <div class="col-6 col-lg-3">
                <p class="mb-0 fw-bold lh-1 text-primary font-title h1">121k</p>
                <span class="text-uppercase fw-bold text-muted small" style="letter-spacing: 0.16em">Registered Users</span>
            </div>
            <div class="col-6 col-lg-3">
                <p class="mb-0 fw-bold lh-1 text-primary font-title h1">14k</p>
                <span class="text-uppercase fw-bold text-muted small" style="letter-spacing: 0.16em">Letter
                    subscribers</span>
            </div>
            <div class="col-6 col-lg-3">
                <p class="mb-0 fw-bold lh-1 text-primary font-title h1">2022</p>
                <span class="text-uppercase fw-bold text-muted small" style="letter-spacing: 0.16em">Founded in</span>
            </div>
        </div>
    </section>
@endsection
