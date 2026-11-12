<div class="card col-md-4 border-0">
    <img src="{{ asset('assets/images/articles.avif') }}" class="card-img-top" alt="article image">
    <div class="card-body">
        <p class="article-category mb-2 text-primary small">CULTURE</p>
        <h5 class="card-title fw-bold font-title">Lorem ipsum dolor sit amet.</h5>
        <p class="card-text text-muted text-truncate">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe repudiandae modi hic architecto culpa! Nemo
            et ullam illo ipsam cupiditate officia atque id doloremque exercitationem minus commodi, iusto beatae
            repellendus ducimus aliquid dolor praesentium corrupti totam, doloribus adipisci nihil rem! Quos, corporis
            neque! Amet neque vitae aut fuga perspiciatis ea.
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
        <a href="{{ route("web.article") }}" class="btn btn-link p-0">Read more</a>
    </div>
</div>
