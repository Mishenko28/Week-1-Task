<section class="container text-center py-5">
    <p class="intro-title text-primary fw-medium h6 mt-5 text-uppercase" style="letter-spacing: 0.16em">
        {{ $title }}</p>
    <h1 class="lh-1 text-center m-auto fw-bold font-title display-3" style="max-width: 800px">Lorem ipsum dolor sit amet
        consectetur.</h1>
    <p class="text-muted py-3 m-auto" style="max-width: 620px">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore similique, nostrum repudiandae impedit iste
        adipisci veniam deleniti amet modi! Veritatis repudiandae, maiores nihil voluptatem dignissimos provident itaque
        temporibus iste debitis?
    </p>
    <a class="btn btn-lg btn-outline-primary rounded-0" href="{{ route('web.articles') }}">Start reading</a>
    @if (isset($image_src))
        <div class="pt-5">
            <img src="{{ $image_src }}" alt="hero image" width="1600" height="900"
                class="img-fluid rounded-2 w-100">
        </div>
    @endif
</section>
