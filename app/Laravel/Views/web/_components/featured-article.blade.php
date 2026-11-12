<div class="card border-0">
    <div class="row gap-0">
        <div class="col-md-7">
            <img src="{{ asset('assets/images/featured.avif') }}" alt="featured image" class="img-fluid rounded-2 w-100">
        </div>
        <div class="col-md-5">
            <div class="card-body">
                <p class="article-category mb-2 text-secondary small">CITIES</p>
                <h5 class="card-title fs-1 fw-bold lh-1 font-title">Lorem ipsum dolor sit amet.</h5>
                <p class="card-text text-muted">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ratione amet totam? Architecto
                    aut sint aliquid fugit qui nihil incidunt, at, distinctio magnam rerum quasi eos veniam. Beatae
                    molestiae in, odio soluta impedit ipsum laudantium magni quia cupiditate dignissimos! In
                    reprehenderit iusto atque dolore suscipit, quasi recusandae eum iure repellendus.
                </p>
                <div class="d-flex gap-2 align-items-center mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <img src="{{ asset('assets/images/avatar.avif') }}" alt="avatar" width="400" height="400"
                            class="avatar">
                        <span class="fw-medium">John Doe</span>
                    </div>
                    <span>-</span>
                    <span class="small text-muted">March 14, 2025</span>
                    <span>-</span>
                    <span class="small text-muted"><i class="bi bi-clock"></i> 8 min read</span>
                </div>
                <a href="{{ route('web.article') }}" class="card-link">Read the full story</a>
            </div>
        </div>
    </div>
</div>
