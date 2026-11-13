@extends('web._layouts.main')

@section('page-content')
    {{-- intro section --}}
    @include('web._components.intro-section', [
        'title' => 'Welcome to Contact Page',
    ])

    {{-- contact form --}}
    <section class="container py-5">
        <div class="row gy-5">
            <div class="col-lg-7">
                <h2 class="h4 mb-4 font-title">Send a message</h2>
                <form id="contactForm" action="#" method="get" novalidate>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label small fw-medium" for="contactName">YOUR NAME</label>
                            <input type="text" class="form-control py-2" id="contactName" name="name"
                                placeholder="Juan Dela Cruz" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label small fw-medium" for="contactEmail">EMAIL ADDRESS</label>
                            <input type="email" class="form-control py-2" id="contactEmail" name="email"
                                placeholder="juandelacruz@example.com" required>
                        </div>

                        <div class="col-12">
                            <label class="form-label small fw-medium" for="contactSubject">SUBJECT</label>
                            <select class="form-select py-2" id="contactSubject" name="subject" required>
                                <option value="" selected>Choose a subject…</option>
                                <option>Ask</option>
                                <option>Question</option>
                                <option>Advertise</option>
                                <option>Something else</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="form-label small fw-medium" for="contactMessage">MESSAGE</label>
                            <textarea class="form-control py-2" id="contactMessage" name="message" rows="6"
                                placeholder="Lorem ipsum, dolor sit amet consectetur adipisicing elit." required></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary px-4 py-2">Send message</button>
                            <p class="small text-body-secondary mt-2 mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id temporibus illo rem.
                            </p>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-5">
                <h2 class="h4 mb-4 font-title">Contact Us</h2>

                <div class="d-flex gap-3 mb-3">
                    <i class="contact-icon text-primary d-flex bg-primary-subtle border-0 justify-content-center align-items-center flex-shrink-0 bi bi-envelope rounded-circle"
                        style="width: 44px; height: 44px" aria-hidden="true"></i>
                    <div>
                        <p class="small fw-semibold mb-0">Email</p>
                        <a class="mb-0 small lh-lg" href="#">helloworld@email.com</a>
                    </div>
                </div>

                <div class="d-flex gap-3 mb-3">
                    <i class="contact-icon text-primary d-flex bg-primary-subtle border-0 justify-content-center align-items-center flex-shrink-0 bi bi-telephone rounded-circle"
                        style="width: 44px; height: 44px" aria-hidden="true"></i>
                    <div>
                        <p class="small fw-semibold mb-0">Telephone</p>
                        <p class="small mb-0 text-body-secondary">+63 (987) 654 3210</p>
                    </div>
                </div>

                <div class="d-flex gap-3 mb-4">
                    <i class="contact-icon text-primary d-flex bg-primary-subtle border-0 justify-content-center align-items-center flex-shrink-0 bi bi-geo-alt rounded-circle"
                        style="width: 44px; height: 44px" aria-hidden="true"></i>
                    <div>
                        <p class="small fw-semibold mb-0">Address</p>
                        <p class="small lh-lg text-body-secondary mb-0">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Esse, enim.</p>
                    </div>
                </div>

                <div class="border rounded p-4">
                    <h2 class="h6 mb-3">Follow us</h2>
                    <div class="d-flex mb-4 gap-2">
                        <a class="h3 text-primary" href="#">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                        <a class="h3 text-primary" href="#">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a class="h3 text-primary" href="#">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a class="h3 text-primary" href="#">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </div>
                    <hr>
                    <h3 class="h6 mb-3">Office hours</h3>
                    <ul class="list-unstyled mb-4 small">
                        <li class="d-flex justify-content-between mb-1">
                            <span>Monday – Friday</span>
                            <span>8:00 AM – 5:00 PM</span>
                        </li>
                        <li class="d-flex justify-content-between mb-1">
                            <span>Saturday</span>
                            <span>Closed</span>
                        </li>
                        <li class="d-flex justify-content-between mb-1">
                            <span>Sunday</span>
                            <span>Closed</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
