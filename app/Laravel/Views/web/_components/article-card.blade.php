<div class="card col-md-4 border-0">
    <div class="overflow-hidden">
        <img src="{{ asset('assets/images/articles.avif') }}" class="card-img-top hover-zoom" alt="article image">
    </div>
    <div class="card-body px-0">
        <p class="mb-2 text-primary small" style="letter-spacing: 0.16em">CULTURE</p>
        <h5 class="card-title fw-bold font-title">Lorem ipsum dolor sit amet.</h5>
        <p class="card-text text-muted text-truncate">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe repudiandae modi hic architecto culpa! Nemo
            et ullam illo ipsam cupiditate officia atque id doloremque exercitationem minus commodi, iusto beatae
            repellendus ducimus aliquid dolor praesentium corrupti totam, doloribus adipisci nihil rem! Quos, corporis
            neque! Amet neque vitae aut fuga perspiciatis ea.
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
        <a href="{{ route('web.article') }}" class="btn btn-link p-0">Read more</a>
    </div>
</div>
