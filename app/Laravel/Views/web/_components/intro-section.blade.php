<section class="container text-center py-5">
    <p class="intro-title text-primary fw-medium h6 mt-5 text-uppercase">{{ $title }}</p>
    <h1 class="heading lh-1 text-center m-auto fw-bold font-title">Lorem ipsum dolor sit amet consectetur.</h1>
    <p class="intro-desc text-muted py-3 m-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore rem
        voluptatum
        hic
        nihil, vel ullam accusamus. Nam quos doloribus ratione impedit esse! Nihil eaque id quae, odit voluptas ea
        numquam.</p>
    <a class="btn btn-lg btn-outline-primary rounded-0" href="{{ route('web.articles') }}">Start reading</a>
    @if (isset($image_src))
        <div class="pt-5">
            <img src="{{ $image_src }}" alt="hero image" width="1600" height="900"
                class="img-fluid rounded-2 w-100">
        </div>
    @endif
</section>
