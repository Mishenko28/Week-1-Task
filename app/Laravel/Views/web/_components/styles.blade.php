{{-- GLOBAL CSS --}}

{{-- google fonts --}}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
</style>


<style>
    * {
        font-family: Inter;
    }

    body {
        background-color: var(--bs-light-bg-subtle);
    }

    .heading {
        font-size: clamp(2.6rem, 6.5vw, 4.4rem);
        max-width: 800px;
    }

    .intro-title {
        letter-spacing: 0.16em;
    }

    .intro-desc {
        max-width: 620px;
    }

    .avatar {
        width: 35px;
        height: 35px;
        border-radius: 100%;
    }

    .nav-item .active {
        color: var(--bs-primary) !important;
    }

    .article-category {
        letter-spacing: 0.16em;
    }

    .font-title {
        font-family: Fraunces;
    }
</style>
