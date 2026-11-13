<div class="card border-0 px-3">
    <div class="row gap-0">
        <div class="col-md-7 overflow-hidden p-0">
            <img src="{{ asset('assets/images/featured.avif') }}" alt="featured image"
                class="img-fluid rounded-2 w-100 hover-zoom">
        </div>
        <div class="col-md-5 px-0 ps-md-5">
            <div class="card-body px-0">
                <p class="mb-2 text-primary small" style="letter-spacing: 0.16em">CITIES</p>
                <h5 class="card-title fs-1 fw-bold lh-1 font-title">Lorem ipsum dolor sit amet.</h5>
                <p class="card-text text-muted">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ratione amet totam? Architecto
                    aut sint aliquid fugit qui nihil incidunt, at, distinctio magnam rerum quasi eos veniam. Beatae
                    molestiae in, odio soluta impedit ipsum laudantium magni quia cupiditate dignissimos! In
                    reprehenderit iusto atque dolore suscipit, quasi recusandae eum iure repellendus.
                </p>
                <div class="d-flex flex-wrap gap-2 align-items-center mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <img src="{{ asset('assets/images/avatar.avif') }}" alt="avatar" width="400" height="400"
                            class="rounded-circle" style="width: 35px; height: 35px; flex-shrink: 0">
                        <span class="fw-medium">Juan Dela Cruz</span>
                    </div>
                    <div>
                        <span class="small text-muted">March 14, 2025</span>
                        <span>-</span>
                        <span class="small text-muted"><i class="bi bi-clock"></i> 8 min read</span>
                    </div>
                </div>
                <a href="{{ route('web.article') }}" class="card-link">Read the full story</a>
            </div>
        </div>
    </div>
</div>
