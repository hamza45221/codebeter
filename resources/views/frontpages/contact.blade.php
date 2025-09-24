
@extends('layout.mainfrontpage')
@section('contant')


    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Hero START -->
        <section class="position-relative py-xl-9" style="background:url({{ asset('assets/images/contect/contectus.jpg') }}) no-repeat; background-size:cover; background-position:bottom;">
            <!-- Bg overlay -->
            <div class="bg-overlay " style="background: #ffffffdb;"></div>

            <div class="container position-relative z-index-2">
                <!-- Title -->
                <h1 class="display-6 text-black"> Contact <span class="text-primary-grad"> us </span></h1>
            </div>
        </section>
        <!-- =======================
Hero END -->

        <!-- =======================
Map and office detail START -->
        <section class="position-relative overflow-hidden pb-0">
            <div class="container">
                <div class="row g-lg-5">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h5>Connect with our best support team</h5>
                        <p class="lead mb-4">We're thrilled that you're considering reaching out to us. Whether you have a question, need assistance, or are interested in collaborating with us, this is the place to start the conversation.</p>

                        <!-- Form START -->
                        <form action="{{ route('contact.mail') }}" method="POST" class="row form-border-bottom g-4">
                            @csrf
                            <!-- Name -->
                            <div class="col-md-6">
                                <div class="position-relative">
                                    <input type="text" name="name" class="form-control" placeholder="What's Your good name?">
                                    <span class="focus-border"></span>
                                    <span class="position-absolute top-50 end-0 translate-middle-y"><i class="bi bi-emoji-smile"></i></span>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <div class="position-relative">
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email address" required="">
                                    <span class="focus-border"></span>
                                    <span class="position-absolute top-50 end-0 translate-middle-y"><i class="bi bi-envelope"></i></span>
                                </div>
                            </div>

                            <!-- Subject -->
                            <div class="col-12">
                                <div class="position-relative">
                                    <input type="text" name="client_want" class="form-control" placeholder="How can we help you?">
                                    <span class="focus-border"></span>
                                    <span class="position-absolute top-50 end-0 translate-middle-y"><i class="bi bi-journals"></i></span>
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <div class="position-relative">
                                    <textarea class="form-control" name="project_detail" id="floatingTextarea2" style="height: 100px" placeholder="Describe about your project"></textarea>
                                    <span class="focus-border"></span>
                                    <span class="position-absolute top-0 end-0"><i class="bi bi-chat-square-dots"></i></span>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary-grad mb-0">Send a message</button>
                            </div>
                        </form>
                        <!-- Form END -->
                    </div>

                    <!-- Get in touch -->
                    <div class="col-lg-6 col-xxl-5 ms-auto">
                        <div class="card card-body bg-secondary bg-opacity-50 rounded-4 p-4 p-sm-5 mb-4">
                            <!-- Title -->
                            <h5 class="mb-4">Get in touch</h5>

                            <!-- Call -->
                            <div class="d-sm-flex gap-3 mb-4">
                                <!-- Icon -->
                                <div class="icon-lg bg-body shadow-primary heading-color rounded-circle flex-shrink-0"><i class="bi bi-telephone"></i></div>
                                <!-- Content -->
                                <div class="mt-3 mt-sm-0">
                                    <p class="mb-1">Feel free to call us.</p>
                                    <ul class="list-inline d-flex flex-wrap gap-sm-3 mb-0">
                                        <li class="list-inline-item">
                                            <p class="heading-color text-primary-hover">+92 3291070012</p>
                                        </li>
{{--                                        <li class="list-inline-item"> <a href="#" class="fw-semibold heading-color text-primary-hover">+(469) 537-2410</a></li>--}}
                                    </ul>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="d-sm-flex gap-3 mb-4">
                                <!-- Icon -->
                                <div class="icon-lg bg-body shadow-primary heading-color rounded-circle flex-shrink-0"><i class="bi bi-envelope"></i></div>
                                <!-- Content -->
                                <div class="mt-3 mt-sm-0">
                                    <p class="mb-1">Join our growing team.</p>
                                    <p class=" heading-color text-primary-hover mb-0">mail.codebeter@gmail.com</p>
                                </div>
                            </div>

                            <!-- Email -->
{{--                            <div class="d-sm-flex gap-3">--}}
                                <!-- Icon -->
{{--                                <div class="icon-lg bg-body shadow-primary heading-color rounded-circle flex-shrink-0"><i class="bi bi-pin-map-fill"></i></div>--}}
                                <!-- Content -->
{{--                                <div class="mt-3 mt-sm-0">--}}
{{--                                    <p class="mb-1">Are you ready for coffee?</p>--}}
{{--                                    <p class="fw-semibold heading-color mb-0">55/123 Norman street, Banking road, Sydney NSW 5000</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>

                        <!-- Social links -->
                        <ul class="list-inline d-sm-flex align-items-center justify-content-center mb-0">
                            <li class="list-inline-item heading-color fw-semibold me-sm-3">Connect with:</li>
                            <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-facebook" target="_blank" href="https://www.facebook.com/profile.php?id=61577180078622"><i class="bi bi-facebook lh-base"></i></a> </li>
{{--                            <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-instagram" href="#"><i class="bi bi-instagram lh-base"></i></a> </li>--}}
                            <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-twitter-x" target="_blank" href="https://x.com/CodeBeter"><i class="bi bi-twitter-x lh-base"></i></a> </li>
                            <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-linkedin" target="_blank" href="https://www.linkedin.com/in/hamza-javed-48574936b/"><i class="bi bi-linkedin lh-base"></i></a> </li>
                        </ul>
                    </div>
                </div>
                <!-- Row END -->

            </div>
        </section>
        <!-- =======================
Map and office detail END -->

        <section class="pb-0">
            <iframe class="w-100 h-200px h-lg-400px grayscale d-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3094.973546958881!2d72.69027018334327!3d32.06552874064571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39217794baf6b153%3A0x891b1b11658cf553!2sUniversity%20Road%2C%20Sargodha%2C%20Pakistan!5e1!3m2!1sen!2s!4v1754900553270!5m2!1sen!2s"
                style="margin-bottom: -5px;" aria-hidden="false" tabindex="0"></iframe>
        </section>

    </main>
    <!-- **************** MAIN CONTENT END **************** -->


@endsection
