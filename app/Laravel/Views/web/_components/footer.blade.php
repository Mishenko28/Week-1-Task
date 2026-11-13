<footer class="mt-5 pt-5 pb-4 border-top bg-primary text-light">
    <div class="container">
        <div class="row g-3 g-lg-3">

            <div class="col-lg-6 pe-lg-5">
                <a class="text-decoration-none h3" href="{{ route('web.home') }}">BLOGS.PH</a>
                <p class="mt-3 small lh-lg">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid eius, non hic veritatis earum quam
                    nihil eos totam perspiciatis iste facilis sapiente itaque magnam culpa natus voluptas praesentium
                    fuga eum.
                </p>
                <div class="d-flex gap-2">
                    <a class="h3" href="#">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                    <a class="h3" href="#">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a class="h3" href="#">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a class="h3" href="#">
                        <i class="bi bi-facebook"></i>
                    </a>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="mb-2">
                    <p class="fw-medium h4">Pages</p>
                </div>
                <ul class="mb-0">
                    <li><a class="text-light text-decoration-none text-uppercase "
                            href="{{ route('web.home') }}">Home</a></li>
                    <li><a class="text-light text-decoration-none text-uppercase "
                            href="{{ route('web.articles') }}">Articles</a></li>
                    <li><a class="text-light text-decoration-none text-uppercase "
                            href="{{ route('web.about') }}">About</a></li>
                    <li><a class="text-light text-decoration-none text-uppercase "
                            href="{{ route('web.contact') }}">Contact</a></li>
                </ul>
            </div>

            <div class="col-6 col-lg-3">
                <div class="mb-2">
                    <p class="fw-medium h4">Categories</p>
                </div>
                <ul class="mb-0">
                    <li><a class="text-light text-decoration-none text-uppercase "
                            href="{{ route('web.articles') }}">Culture</a></li>
                    <li><a class="text-light text-decoration-none text-uppercase "
                            href="{{ route('web.articles') }}">Design</a></li>
                    <li><a class="text-light text-decoration-none text-uppercase "
                            href="{{ route('web.articles') }}">Cities</a></li>
                    <li><a class="text-light text-decoration-none text-uppercase "
                            href="{{ route('web.articles') }}">Essays</a></li>
                </ul>
            </div>

        </div>

        <hr>

        <div class="d-flex flex-column flex-md-row justify-content-between gap-2">
            <p class="mb-0">© 2026 BLOGS.PH. All rights reserved.</p>
            <div class="d-flex gap-4 mb-0">
                <a class="text-light" href="{{ route('web.about') }}">
                    <i class="bi bi-shield"></i>
                    Privacy Policy
                </a>
                <a class="text-light" href="{{ route('web.about') }}">
                    <i class="bi bi-file-earmark"></i>
                    Terms of Service
                </a>
            </div>
        </div>
    </div>
</footer>
