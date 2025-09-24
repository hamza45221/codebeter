
@extends('layout.mainfrontpage')
@section('contant')

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Hero START -->
        <section class="position-relative pt-sm-8 pt-lg-9 pb-4">
            <!-- Right side svg decoration -->
            <div class="position-absolute top-0 end-0 z-index-2 d-none d-md-block rtl-flip">
{{--                <img src="assets/images/elements/grad-shape/07.png" alt="">--}}
            </div>

            <div class="container pt-4">
                <div class="row">
                    <div class="col-md-6 pe-3">
                        <!-- Pre title -->
                        <p class="heading-color bg-secondary d-inline-block rounded px-3 py-2 mb-3"><span class="badge bg-dark me-2">New</span> Maximize productivity with next-generation software</p>

                        <!-- Title -->
                        <h1 class=" mb-4 " >Building Reliable Website or Software That Drives your <br>
                            <span class="text-primary ityped-cursor-opacity mb-0 d-block d-xxl-inline-block">
					<span class="typed" data-type-text="business&&agency&&startup"></span>
                        </span>
                        </h1>

                        <!-- Button and info -->
                        <div class="d-flex gap-3 gap-sm-4 flex-wrap">
                            <!-- Button -->
                            <a href="https://wa.me/923291070012" class="btn btn-primary-grad px-3"> <i class="bi bi-whatsapp me-2"></i> 03291070012 </a>

                            <!-- Info -->
                            <div class="d-flex gap-2 align-items-center">
                                <ul class="avatar-group mb-0 align-items-center">
                                    <li class="avatar">
                                        <img class="avatar-img rounded-circle" src="{{ asset('assets/images/client/huaman1.jpg') }}" alt="avatar">
                                    </li>
                                    <li class="avatar">
                                        <img class="avatar-img rounded-circle" src="{{ asset('assets/images/client/human2.jpg') }}" alt="avatar">
                                    </li>
                                    <li class="avatar">
                                        <img class="avatar-img rounded-circle" src="{{ asset('assets/images/client/human3.jpg') }}" alt="avatar">
                                    </li>
                                    <li class="avatar">
                                        <img class="avatar-img rounded-circle" src="{{ asset('assets/images/client/human4.jpg') }}" alt="avatar">
                                    </li>
                                </ul>
                                <p class="heading-color mb-0">30+ happy clients</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="hero-video mt-5">
                            <video width="100%" class="rounded-3" height="100%"  muted autoplay="autoplay" loop>
                                <source src="{{ asset('assets/video/her-vid.mp4') }}" type="video/mp4">
                                <source src="{{ asset('assets/video/her-vid.mp4') }}" type="video/webm">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Hero END -->

        <!-- =======================
Image and client START -->
        <section class="bg-secondary position-relative overflow-hidden">
            <!-- skewed divider	 -->
            <span class="position-absolute top-0 start-0">
		<svg class="fill-body" width="1920" height="237" viewBox="0 0 1920 237" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M1940.5 0H-9V164C708.2 295.2 1589.5 218.667 1940.5 164V0Z"/>
		</svg>
	 </span>

            <div class="container position-relative z-index-9">
                <!-- Grad blur decoration -->
                <div class="position-absolute top-0 start-50 translate-middle-x mt-n3">
                    <img src="{{ asset('assets/images/elements/grad-shape/blur-decoration-2.svg') }}" class="opacity-2 blur-8" alt="Grad shape">
                </div>

                <!-- Image -->
                <div class="bg-body bg-opacity-10 bg-blur border border-white border-opacity-25 position-relative rounded-4 shadow-primary-lg p-4">
                    <!-- Dots -->
                    <span class="text-purple">
				<svg class="mt-n4" width="40" height="10" viewBox="0 0 40 10" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M10 5C10 7.76142 7.76142 10 5 10C2.23858 10 0 7.76142 0 5C0 2.23858 2.23858 0 5 0C7.76142 0 10 2.23858 10 5Z" fill="currentColor"/>
					<path d="M25 5C25 7.76142 22.7614 10 20 10C17.2386 10 15 7.76142 15 5C15 2.23858 17.2386 0 20 0C22.7614 0 25 2.23858 25 5Z" fill="currentColor"/>
					<path d="M40 5C40 7.76142 37.7614 10 35 10C32.2386 10 30 7.76142 30 5C30 2.23858 32.2386 0 35 0C37.7614 0 40 2.23858 40 5Z" fill="currentColor"/>
				</svg>
			</span>

                    <!-- Images content -->
                    <div class="row rounded-4 overflow-hidden g-0">
                        <!-- Call image -->
                        <div class="col-sm-5">
                            <div class="card card-body p-0 h-100">
                                <!-- Image -->
                                <img src="{{ asset('assets/images/bg/02.jpg') }}" alt="">

                                <!-- Actions -->
                                <div class="card-img-overlay d-flex flex-column">
                                    <ul class="list-inline d-flex gap-3 mb-1 mt-auto mx-auto">
                                        <!-- Voice Call (WhatsApp) -->
                                        <li class="list-inline-item me-0">
                                            <a href="https://wa.me/923291070012?text=Hi%2C%20I%20want%20to%20discuss%20something" target="_blank" class="btn btn-lg btn-white btn-icon rounded-circle mb-0" type="button">
                                                <i class="bi bi-mic fa-sm"></i>
                                            </a>
                                        </li>

                                        <!-- Video Call (Zoom link or similar) -->
                                        <a href="https://meet.google.com/your-meeting-code" target="_blank" class="btn btn-lg btn-success btn-icon rounded-circle mb-0" type="button">
                                            <i class="bi bi-camera-video fa-sm"></i>
                                        </a>

                                        <!-- End Call (Phone Dialer or Cancel Action) -->
                                        <li class="list-inline-item me-0">
                                            <a href="https://wa.me/923291070012" class="btn btn-lg btn-danger btn-icon rounded-circle mb-0" type="button">
                                                <i class="bi bi-telephone-x fa-sm"></i>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <!-- Code image -->
                        <div class="col-sm-7">
                            <div class="h-100" style="background:url(assets/images/bg/code.jpg) no-repeat; background-size:cover; background-position:left top;"></div>
                        </div>
                    </div>
                </div>

                <!-- Client slider START -->
                <div class="swiper mt-6" data-swiper-options='{
		"slidesPerView": 2,
			"spaceBetween": 50,
			"breakpoints": {
				"576": {"slidesPerView": 3},
				"768": {"slidesPerView": 4},
				"1200": {"slidesPerView": 6},
				"1400": {"slidesPerView": 8}
			}}'>

                    <!-- Slider items -->
                    <div class="swiper-wrapper align-items-center">
                        <!-- Image -->
                        <div class="swiper-slide">
                            <div class="swap-logo">
                                <img src="assets/images/client/logo-gray/01.svg" alt="client-img">
                                <div class="swap-item">
                                    <img src="assets/images/client/logo-light/01.svg" class="dark-mode-item" alt="client logo">
                                    <img src="assets/images/client/logo-dark/01.svg" class="light-mode-item" alt="client logo">
                                </div>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="swiper-slide">
                            <div class="swap-logo">
                                <img src="assets/images/client/logo-gray/02.svg" alt="client-img">
                                <div class="swap-item">
                                    <img src="assets/images/client/logo-light/02.svg" class="dark-mode-item" alt="client logo">
                                    <img src="assets/images/client/logo-dark/02.svg" class="light-mode-item" alt="client logo">
                                </div>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="swiper-slide">
                            <div class="swap-logo">
                                <img src="assets/images/client/logo-gray/03.svg" alt="client-img">
                                <div class="swap-item">
                                    <img src="assets/images/client/logo-light/03.svg" class="dark-mode-item" alt="client logo">
                                    <img src="assets/images/client/logo-dark/03.svg" class="light-mode-item" alt="client logo">
                                </div>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="swiper-slide">
                            <div class="swap-logo">
                                <img src="assets/images/client/logo-gray/04.svg" alt="client-img">
                                <div class="swap-item">
                                    <img src="assets/images/client/logo-light/04.svg" class="dark-mode-item" alt="client logo">
                                    <img src="assets/images/client/logo-dark/04.svg" class="light-mode-item" alt="client logo">
                                </div>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="swiper-slide">
                            <div class="swap-logo">
                                <img src="assets/images/client/logo-gray/05.svg" alt="client-img">
                                <div class="swap-item">
                                    <img src="assets/images/client/logo-light/05.svg" class="dark-mode-item" alt="client logo">
                                    <img src="assets/images/client/logo-dark/05.svg" class="light-mode-item" alt="client logo">
                                </div>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="swiper-slide">
                            <div class="swap-logo">
                                <img src="assets/images/client/logo-gray/06.svg" alt="client-img">
                                <div class="swap-item">
                                    <img src="assets/images/client/logo-light/06.svg" class="dark-mode-item" alt="client logo">
                                    <img src="assets/images/client/logo-dark/06.svg" class="light-mode-item" alt="client logo">
                                </div>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="swiper-slide">
                            <div class="swap-logo">
                                <img src="assets/images/client/logo-gray/07.svg" alt="client-img">
                                <div class="swap-item">
                                    <img src="assets/images/client/logo-light/07.svg" class="dark-mode-item" alt="client logo">
                                    <img src="assets/images/client/logo-dark/07.svg" class="light-mode-item" alt="client logo">
                                </div>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="swiper-slide">
                            <div class="swap-logo">
                                <img src="assets/images/client/logo-gray/08.svg" alt="client-img">
                                <div class="swap-item">
                                    <img src="assets/images/client/logo-light/08.svg" class="dark-mode-item" alt="client logo">
                                    <img src="assets/images/client/logo-dark/08.svg" class="light-mode-item" alt="client logo">
                                </div>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="swiper-slide">
                            <div class="swap-logo">
                                <img src="assets/images/client/logo-gray/09.svg" alt="client-img">
                                <div class="swap-item">
                                    <img src="assets/images/client/logo-light/09.svg" class="dark-mode-item" alt="client logo">
                                    <img src="assets/images/client/logo-dark/09.svg" class="light-mode-item" alt="client logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Client slider END -->
            </div>
        </section>
        <!-- =======================
Image and client END -->
        <!-- =======================
Services START -->
        <section class="bg-secondary position-relative overflow-hidden pt-0">
            <div class="container position-relative">
                <!-- Title -->
                <div class="inner-container-small text-center mb-6 mb-lg-7">
                    <h2 class="mb-0">Our expert services</h2>
                </div>

                <!-- Services START -->
                <div class="row g-4 g-xl-5">
                    <!-- Service item -->
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card card-hover-shadow card-icon-transition text-center bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-4">
                            <!-- Icon -->
                            <div class="card-icon icon-xl bg-pink d-flex justify-content-center align-items-center text-white rounded-circle">
                                <svg width="40" height="40" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.5587 22.5601C22.1315 22.9872 22.1315 23.6797 22.5587 24.1068C22.9858 24.534 23.6782 24.534 24.1054 24.1068L22.5587 22.5601ZM29.1654 17.5001L29.9387 18.2735C30.1439 18.0684 30.2591 17.7902 30.2591 17.5001C30.2591 17.2101 30.1439 16.9318 29.9387 16.7268L29.1654 17.5001ZM24.1054 10.8934C23.6782 10.4663 22.9858 10.4663 22.5587 10.8934C22.1315 11.3205 22.1315 12.0131 22.5587 12.4402L24.1054 10.8934ZM12.4388 12.4402C12.8659 12.0131 12.8659 11.3205 12.4388 10.8934C12.0116 10.4663 11.3191 10.4663 10.892 10.8934L12.4388 12.4402ZM5.83203 17.5001L5.05863 16.7268C4.85352 16.9318 4.73828 17.2101 4.73828 17.5001C4.73828 17.7902 4.85352 18.0684 5.05863 18.2735L5.83203 17.5001ZM10.892 24.1068C11.3191 24.534 12.0116 24.534 12.4388 24.1068C12.8659 23.6797 12.8659 22.9872 12.4388 22.5601L10.892 24.1068ZM13.5304 27.408C13.3644 27.9887 13.7007 28.5941 14.2816 28.7601C14.8623 28.926 15.4677 28.5897 15.6336 28.0089L13.5304 27.408ZM21.467 7.59226C21.6329 7.01144 21.2966 6.40607 20.7158 6.24012C20.1351 6.07416 19.5297 6.41049 19.3638 6.99131L21.467 7.59226ZM24.1054 24.1068L29.9387 18.2735L28.392 16.7268L22.5587 22.5601L24.1054 24.1068ZM29.9387 16.7268L24.1054 10.8934L22.5587 12.4402L28.392 18.2735L29.9387 16.7268ZM10.892 10.8934L5.05863 16.7268L6.60543 18.2735L12.4388 12.4402L10.892 10.8934ZM5.05863 18.2735L10.892 24.1068L12.4388 22.5601L6.60543 16.7268L5.05863 18.2735ZM15.6336 28.0089L21.467 7.59226L19.3638 6.99131L13.5304 27.408L15.6336 28.0089Z" fill="currentColor"/>
                                </svg>
                            </div>

                            <!-- Card body -->
                            <div class="card-footer bg-transparent mt-6 p-0">
                                <h6 class="mb-3">Software development</h6>
                                <p>We develop reliable, scalable software tailored to your goals—from concept to launch.

                                    Let me know if you want even shorter tagline-style options.</p>
                                <a href="{{ route('services') }}" class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read more <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Service item -->
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card card-hover-shadow card-icon-transition text-center bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-4">
                            <!-- Icon -->
                            <div class="card-icon icon-xl bg-purple d-flex justify-content-center align-items-center text-white rounded-circle">
                                <img src="{{ asset('assets/images/portfolio/elements/code.svg') }}" width="45px" />
                            </div>
                                            <!-- Card body -->
                                                                <div class="card-footer bg-transparent mt-6 p-0">
                                                                    <h6 class="mb-3">Website Development</h6>
                                                                    <p>Our speciality is creating effective websites that are lucid, responsive, and have a big impact.</p>
                                                                    <a href="{{ route('services') }}" class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read more <i class="bi bi-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Service item -->
                                                        <div class="col-sm-6 col-lg-4 mb-4">
                                                            <div class="card card-hover-shadow card-icon-transition text-center bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-4">
                                                                <!-- Icon -->
                                                                <div class="card-icon icon-xl bg-warning d-flex justify-content-center align-items-center text-white rounded-circle">
                                                                    <img src="{{ asset('assets/images/portfolio/elements/mobile-app-developing-svgrepo-com.svg') }}" color="white" width="45px" />
                                                                </div>

                                                                <!-- Card body -->
                                                                <div class="card-footer bg-transparent mt-6 p-0">
                                                                    <h6 class="mb-3">Mobile App Development</h6>
                                                                    <p>We build custom mobile and web apps tailored to your business needs, ensuring performance and scalability.</p>
                                                                    <a href="{{ route('app.development') }}" class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read more <i class="bi bi-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Service item -->
                                                        <div class="col-sm-6 col-lg-4 mb-4">
                                                            <div class="card card-hover-shadow card-icon-transition text-center bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-4">
                                                                <!-- Icon -->
                                                                <div class="card-icon icon-xl bg-primary d-flex justify-content-center align-items-center text-white rounded-circle">
                                                                    <img src="{{ asset('assets/images/portfolio/elements/api2.svg') }}" width="45px" />
                                                                </div>

                                                                <!-- Card body -->
                                                                <div class="card-footer bg-transparent mt-6 p-0">
                                                                    <h6 class="mb-3">API Integration</h6>
                                                                    <p>We add robust APIs to your website to improve functionality and expedite processes.</p>
                                                                    <a href="{{ route('services') }}" class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read more <i class="bi bi-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Service item -->
                                                        <div class="col-sm-6 col-lg-4 mb-4">
                                                            <div class="card card-hover-shadow card-icon-transition text-center bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-4">
                                                                <!-- Icon -->
                                                                <div class="card-icon icon-xl bg-success d-flex justify-content-center align-items-center text-white rounded-circle">
                                                                    <img src="{{ asset('assets/images/portfolio/elements/crm.svg') }}" width="45px" />
                                                                </div>

                                                                <!-- Card body -->
                                                                <div class="card-footer bg-transparent mt-6 p-0">
                                                                    <h6 class="mb-3">CRM</h6>
                                                                    <p>To help you track leads, interact with customers, and increase productivity, we create custom CRM systems.</p>
                                                                    <a href="{{ route('services') }}" class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read more <i class="bi bi-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Service item -->
                                                        <div class="col-sm-6 col-lg-4 mb-4">
                                                            <div class="card card-hover-shadow card-icon-transition text-center bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-4">
                                                                <!-- Icon -->
                                                                <div class="card-icon icon-xl bg-success d-flex justify-content-center align-items-center text-white rounded-circle">
                                                                    <img src="{{ asset('assets/images/portfolio/elements/pos.svg') }}" width="45px" />
                                                                </div>

                                                                <!-- Card body -->
                                                                <div class="card-footer bg-transparent mt-6 p-0">
                                                                    <h6 class="mb-3">POS</h6>
                                                                    <p>We create quick, easy-to-use point-of-sale (POS) systems to simplify transactions and make running your company a breeze.</p>
                                                                    <a href="{{ route('services') }}" class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read more <i class="bi bi-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- button -->
                                                        <div class="col-sm-6 col-lg-4 mb-4">
                                                            <div class="d-flex flex-column justify-content-center align-items-center text-center h-100">
                                                                <img src="{{ asset('assets/images/elements/emoji.png') }}" class="mb-3" alt="">
                                                                <p>Not satisfied yet?</p>
                                                                <a href="{{ route('service') }}" class="btn btn-primary-grad mb-0">Explore all services</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- Services END -->
                                                </div>
                                            </section>
                                            <!-- =======================
                                    Services END -->

                                            <!-- =======================
                                    About START -->
                                            <section class="bg-secondary pt-0 overflow-hidden">
            <div class="container">
                <div class="row g-4">
                    <!-- Title and contents -->
                    <div class="col-lg-5">
                        <h2 class="mb-2 mb-lg-4">Leading the future of software innovation</h2>
                        <p class="mb-2 mb-lg-4">Our expert team is dedicated to understanding your unique needs and delivering solutions that exceed expectations.</p>

                        <!-- List -->
                        <ul class="list-group list-group-borderless mb-3 mb-lg-4">
                            <li class="list-group-item d-flex heading-color fw-semibold pb-0"><i class="bi bi-check-circle text-primary me-2"></i>Collaborative approach</li>
                            <li class="list-group-item d-flex heading-color fw-semibold pb-0"><i class="bi bi-check-circle text-primary me-2"></i>Agile development methodology</li>
                            <li class="list-group-item d-flex heading-color fw-semibold pb-0"><i class="bi bi-check-circle text-primary me-2"></i>Data security and compliance</li>
                        </ul>

                        <!-- Buttons -->
                        <div class="d-flex gap-3 flex-wrap">
                            <a href="about-v2.html" class="btn btn-primary mb-0">Learn more</a>
                            <a href="contact-us-v1.html" class="link-primary-grad icon-link icon-link-hover">Schedule a consultation <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="col-lg-6 position-relative ms-auto ps-lg-4">
                        <!-- Shape decoration -->
                        <div class="position-absolute start-0 bottom-0 ms-n6 mb-5 d-none d-sm-block">
                            <img src="assets/images/elements/grad-shape/08.png" class="blur-1 z-index-9 position-relative" alt="shape decoration">
                        </div>

                        <!-- Blur decoration -->
                        <div class="position-absolute top-50 start-0 translate-middle-y ms-n4 mt-n7">
                            <img src="assets/images/elements/grad-shape/blur-decoration.svg" class="blur-7 opacity-1" alt="Grad shape">
                        </div>

                        <!-- Main image -->
                        <img src="assets/images/about/04.jpg" class="rounded-4 position-relative z-index-2" alt="about image">
                    </div>

                </div>
            </div>
        </section>
        <!-- =======================
About END -->

        {{--        Project START --}}
        <section class="position-relative z-index-9  overflow-hidden">
            <div class="container  card-grid">
                <!-- Title and button -->
                <div class="d-md-flex justify-content-between align-items-center text-center text-sm-start mb-4 mb-md-5">
                    <h2 class="mb-3 mb-md-0">Our latest projects</h2>
                    <a href="{{ route('portfolio') }}" class="btn btn-primary-grad mb-0">Explore portfolio</a>
                </div>

                <div class="row g-4">
                    <!-- Project item -->
                    <div class="col-md-7">
                        <div class="card card-img-scale card-content-hover overflow-hidden rounded-4">
                            <div class="card-img-scale-wrapper">
                                <!-- Hover content -->
                                <div class="hover-content bg-blur bg-white bg-opacity-10">
                                    <!-- Hover content -->
                                    <div class="z-index-2 mt-auto">
                                        <span class="">TaxiLink</span>
                                        <h6 class="mb-0 mt-2"><a href="https://texilinkcrm.codebeter.com/" target="_blank" class=" stretched-link">CRM (Customer Relationship Management)</a></h6>
                                    </div>
                                </div>
                                <!-- Image -->
                                <a href="https://texilinkcrm.codebeter.com/"  target="_blank"  class="stretched-link"><img src="{{ asset('assets/images/portfolio/pro5.jpg') }}" class="img-scale img-blur" alt="portfolio-img"></a>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="col-md-5">
                        <div class="card card-img-scale card-content-hover overflow-hidden rounded-4">
                            <div class="card-img-scale-wrapper">
                                <!-- Hover content -->
                                <div class="hover-content bg-blur bg-white bg-opacity-10">
                                    <!-- Hover content -->
                                    <div class="z-index-2 mt-auto">
                                        <span class="">Denysverh</span>
                                        <h6 class="mb-0 mt-2"><a href="http://denysverh.codebeter.com" class=" stretched-link">Portfolio site</a></h6>
                                    </div>
                                </div>
                                <!-- Image -->
                                <a href="http://denysverh.codebeter.com" class="stretched-link"><img src="{{ asset('assets/images/portfolio/pro6.jpg') }}" class="img-scale img-blur img-fluid" alt="portfolio-img"></a>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="col-md-5">
                        <div class="card card-img-scale card-content-hover overflow-hidden rounded-4">
                            <div class="card-img-scale-wrapper">
                                <!-- Hover content -->
                                <div class="hover-content bg-blur bg-white bg-opacity-10">
                                    <!-- Hover content -->
                                    <div class="z-index-2 mt-auto">
                                        <span class="">RailOrignal</span>
                                        <h6 class="mb-0 mt-2"><a href="http://railoriginal.codebeter.com"  target="_blank"  class=" stretched-link">Business Site</a></h6>
                                    </div>
                                </div>
                                <!-- Image -->
                                <a href="http://railoriginal.codebeter.com"  target="_blank"  class="stretched-link">
                                    <img src="{{ asset('assets/images/portfolio/pro4.jpg') }}"  class="img-scale img-blur img-fluid" alt="portfolio-img"></a>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="col-md-7">
                        <div class="card card-img-scale card-content-hover overflow-hidden rounded-4">
                            <div class="card-img-scale-wrapper">
                                <!-- Hover content -->
                                <div class="hover-content bg-blur bg-white bg-opacity-10">
                                    <!-- Hover content -->
                                    <div class="z-index-2 mt-auto">
                                        <span class="">Business Brokers</span>
                                        <h6 class="mb-0 mt-2"><a href="http://business-brokers.codebeter.com"  target="_blank"  class=" stretched-link">Management System</a></h6>
                                    </div>
                                </div>
                                <!-- Image -->
                                <a href="http://business-brokers.codebeter.com" target="_blank" class="stretched-link">
                                    <img src="{{ asset('assets/images/portfolio/pro3.jpg') }}"  class="img-scale img-blur img-fluid" alt="portfolio-img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row END -->

                <!-- CTA START -->
                <div class="row mt-6">
                    <div class="col-lg-10 col-xl-8 col-xxl-7 mx-auto">
                        <div class="bg-body text-lg-end rounded-3 shadow-primary position-relative px-3 px-sm-6 py-3">
                            <!-- Shape decoration -->
                            <div class="position-absolute top-0 start-0 mt-n5 ms-n4 d-none d-sm-block">
                                <img src="{{ asset('assets/images/elements/grad-shape/03.png') }}"  class="zoom-animate" alt="Shape">
                            </div>

                            <p class="heading-color mb-0 ms-sm-6 ms-xl-0">Embark on your project journey! partner with us today
                                <a href="{{ route('contact') }}"  class="fw-semibold hover-underline-animation mb-0">Join today</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- CTA END -->
            </div>
        </section>
        <!-- =======================
Project END -->

        <!-- =======================
Video START -->
        <section class="bg-body position-relative overflow-hidden">
            <!-- Dark bg -->
            <div class="bg-dark h-500px w-100 position-absolute top-0 start-0">
                <!-- Blur shape -->
                <div class="position-absolute top-0 start-0 translate-middle">
                    <img src="{{ asset('assets/images/elements/grad-shape/blur-decoration-2.svg') }}" class="opacity-1 blur-8" alt="Grad shape">
                </div>

                <!-- skewed divider -->
                <span class="position-absolute start-0 bottom-0">
			<svg class="fill-body" width="1920" height="99" viewBox="0 0 1920 99" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M0 93L1946 0V99H0V93Z"/>
			</svg>
		</span>
            </div>

            <div class="container position-relative">
                <!-- Title -->
                <div class="row mb-4 mb-md-6">
                    <div class="col-md-6">
                        <h2 class="text-white mb-0">Achieving mastery in every phase of our methodology.</h2>
                    </div>
                </div>

                <!-- Video section -->
                <div class="bg-parallax position-relative h-400px h-xl-500px rounded-4 overflow-hidden" style="background:url(assets/images/achivement.jpg) no-repeat; background-size:cover; background-position:center;">
                    <!-- BG overlay -->
                    <div class="bg-overlay bg-purple opacity-1"></div>
                    <!-- Play button -->
                    <div class="position-absolute top-50 start-50 translate-middle z-index-2">
                        <a href="{{ asset('assets/video/cod-vid.mp4') }}"  class="btn btn-icon btn-xl btn-white btn-round mb-0" data-glightbox data-gallery="Video">
                            <i class="bi bi-play-fill fa-lg"></i>
                        </a>

                    </div>
                </div>

                <!-- CTA -->
                <div class="inner-container-small bg-body shadow-primary rounded-3 text-center py-3 mt-5">
                    <p class="mb-0 px-2 px-sm-5 px-md-0">🚀 Need any help or questions, don't worry!
                        <a href="{{ route('contact') }}" class="fw-semibold heading-color hover-underline-animation">Hit the button</a>
                    </p>
                </div>
            </div>
        </section>
        <!-- =======================
Video END -->

        <!-- =======================
Testimonials START -->
        <section class="bg-body position-relative pt-0 pb-5 pb-sm-0">
            <!-- Right side svg decoration -->
            <div class="position-absolute top-100 start-0 translate-middle z-index-2 ms-5 ms-xl-9 mt-5 d-none d-sm-block">
                <img src="{{ asset('assets/images/elements/grad-shape/10.png') }}" class="h-500px h-xl-700px rtl-flip" alt="">
            </div>

            <div class="container position-relative z-index-9">
                <!-- Title -->
                <div class="row align-items-center mb-4 mb-md-5">
                    <div class="col-md-7 col-lg-5">
                        <h2 class="mb-0">What our clients say</h2>
                    </div>

                    <div class="col-md-5 ms-sm-auto text-sm-end mt-5 mt-sm-0">
                        <!-- Add pagination and navigation elements here -->
                        <div class="d-flex gap-2 justify-content-sm-end">
                            <a href="#" class="btn btn-primary-grad btn-icon btn-lg rounded-circle mb-0 swiper-button-prev"><i class="bi bi-arrow-left fa-sm"></i></a>
                            <a href="#" class="btn btn-primary-grad btn-icon btn-lg rounded-circle mb-0 swiper-button-next"><i class="bi bi-arrow-right fa-sm"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Testimonials START -->
                <div class="swiper mb-4" data-swiper-options='{
				"spaceBetween": 30,
				"breakpoints": {
					"576": {"slidesPerView": 1},
					"768": {"slidesPerView": 2},
					"992": {"slidesPerView": 3}
				},
				"navigation":{
					"nextEl":".swiper-button-next",
					"prevEl":".swiper-button-prev"
				}}'>

                    <div class="swiper-wrapper">
                        <!-- Testimonials item -->
                        <div class="swiper-slide">
                            <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                                <!-- Card body -->
                                <div class="card-body p-0 mb-4">
                                    <!-- Rating star -->
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i></li>
                                    </ul>
                                    <!-- Testimonials text -->
                                    <blockquote>
                                        <p class="heading-color mb-0">Outstanding service and top-quality software solutions! The team was professional, responsive, and delivered exactly what we needed on time.</p>
                                    </blockquote>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer bg-transparent p-0">
                                    <!-- Testimonials info -->
                                    <div class="d-flex align-items-center">
                                        <div class="avatar flex-shrink-0">
                                            <img class="avatar-img rounded-circle" src="{{ asset('assets/images/client/huaman1.jpg') }}" alt="avatar">
                                        </div>
                                        <div class="ms-3">
                                            <p class="lead heading-color fw-semibold mb-0">Jacqueline Miller</p>
{{--                                            <small>Product designer</small>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonials item -->
                        <div class="swiper-slide">
                            <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                                <!-- Card body -->
                                <div class="card-body p-0 mb-4">
                                    <!-- Rating star -->
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                    </ul>
                                    <!-- Testimonials text -->
                                    <blockquote>
                                        <p class="heading-color mb-0">Exceptional expertise and attention to detail. Our project was completed flawlessly, and communication was seamless throughout</p>
                                    </blockquote>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer bg-transparent p-0">
                                    <!-- Testimonials info -->
                                    <div class="d-flex align-items-center">
                                        <div class="avatar flex-shrink-0">
                                            <img class="avatar-img rounded-circle" src="{{ asset('assets/images/client/human2.jpg') }}" alt="avatar">
                                        </div>
                                        <div class="ms-3">
                                            <p class="lead heading-color fw-semibold mb-0">Louis Ferguson</p>
{{--                                            <small>Web Developer</small>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonials item -->
                        <div class="swiper-slide">
                            <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                                <!-- Card body -->
                                <div class="card-body p-0 mb-4">
                                    <!-- Rating star -->
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i></li>
                                    </ul>
                                    <!-- Testimonials text -->
                                    <blockquote>
                                        <p class="heading-color mb-0">Highly skilled and reliable agency. They exceeded expectations and delivered a fantastic software solution within the agreed timeframe.</p>
                                    </blockquote>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer bg-transparent p-0">
                                    <!-- Testimonials info -->
                                    <div class="d-flex align-items-center">
                                        <div class="avatar flex-shrink-0">
                                            <img class="avatar-img rounded-circle" src="{{ asset('assets/images/client/human6.jpg') }}" alt="avatar">
                                        </div>
                                        <div class="ms-3">
                                            <p class="lead heading-color fw-semibold mb-0">Evelyn</p>
{{--                                            <small>UI/UX designer</small>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonials item -->
                        <div class="swiper-slide">
                            <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                                <!-- Card body -->
                                <div class="card-body p-0 mb-4">
                                    <!-- Rating star -->
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i></li>
                                    </ul>
                                    <!-- Testimonials text -->
                                    <blockquote>
                                        <p class="heading-color mb-0">Great experience working with this company. They were responsive, professional, and delivered exactly what we needed for our software project</p>
                                    </blockquote>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer bg-transparent p-0">
                                    <!-- Testimonials info -->
                                    <div class="d-flex align-items-center">
                                        <div class="avatar flex-shrink-0">
                                            <img class="avatar-img rounded-circle" src="{{ asset('assets/images/client/human5.jpg') }}" alt="avatar">
                                        </div>
                                        <div class="ms-3">
                                            <p class="lead heading-color fw-semibold mb-0">Allen Smith</p>
{{--                                            <small>Manager</small>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonials item -->
                        <div class="swiper-slide">
                            <div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
                                <!-- Card body -->
                                <div class="card-body p-0 mb-4">
                                    <!-- Rating star -->
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                        <li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i></li>
                                    </ul>
                                    <!-- Testimonials text -->
                                    <blockquote>
                                        <p class="heading-color mb-0">Was out laughter raptures returned outweigh. Luckily cheered colonel I do we attack highest enabled. Tried law yet style child. The bore of true of no be deal.</p>
                                    </blockquote>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer bg-transparent p-0">
                                    <!-- Testimonials info -->
                                    <div class="d-flex align-items-center">
                                        <div class="avatar flex-shrink-0">
                                            <img class="avatar-img rounded-circle" src="{{ asset('assets/images/client/human7.jpg') }}" alt="avatar">
                                        </div>
                                        <div class="ms-3">
                                            <p class="lead heading-color fw-semibold mb-0">Emma Watson</p>
{{--                                            <small>UI/UX designer</small>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonials END -->
            </div>
        </section>
        <!-- =======================
Testimonials END -->

        <!-- =======================
Pricing START -->
{{--        <section class="bg-secondary position-relative overflow-hidden">--}}
{{--            <!-- skewed divider	 -->--}}
{{--            <span>--}}
{{--		<svg class="position-absolute top-0 start-0 mt-lg-n6" viewBox="0 0 1950 237" style="enable-background:new 0 0 1950 237;" xml:space="preserve">--}}
{{--			<path class="fill-body" d="M1949.5,0H0v164c717.2,131.2,1598.5,54.7,1949.5,0V0z"/>--}}
{{--		</svg>--}}
{{--	</span>--}}

{{--            <div class="container position-relative z-index-9 pt-5 pt-xxl-8">--}}
{{--                <div class="row g-4 align-items-center">--}}
{{--                    <!-- Title and tab -->--}}
{{--                    <div class="col-lg-4">--}}
{{--                        <h2 class="mb-3 mb-lg-4"> Find the perfect plan for your business</h2>--}}
{{--                        <p class="mb-4">Our flexible pricing plans are designed to scale with your business, offering the features you need to thrive.</p>--}}
{{--                        <a href="pricing-v1.html" class="btn btn-primary-grad icon-link icon-link-hover">Compare pricing <i class="bi bi-arrow-right"></i></a>--}}
{{--                    </div>--}}

{{--                    <!-- Pricing content -->--}}
{{--                    <div class="col-lg-8 ms-auto ps-xl-6">--}}
{{--                        <div class="row align-items-center g-0">--}}

{{--                            <!-- Pricing item START -->--}}
{{--                            <div class="col-md-6 mb-5 mb-md-0">--}}
{{--                                <div class="card bg-body text-center align-items-center p-4 pe-5 me-md-n3">--}}

{{--                                    <!-- Card header -->--}}
{{--                                    <div class="card-header bg-transparent d-flex flex-column align-items-center p-0">--}}
{{--                                        <!-- Icon -->--}}
{{--                                        <div class="icon-xl bg-secondary d-flex justify-content-center align-items-center text-white rounded-circle mb-3">--}}
{{--                                            <img src="assets/images/elements/rocket.png" class="h-40px" alt="rocket">--}}
{{--                                        </div>--}}

{{--                                        <!-- Title -->--}}
{{--                                        <h6 class="mb-3">Basic plan</h6>--}}

{{--                                        <!-- Price -->--}}
{{--                                        <span class="text-primary-grad"> <span class="h1 fw-bold">$25</span> /month</span>--}}
{{--                                    </div>--}}

{{--                                    <!-- Card body -->--}}
{{--                                    <div class="card-body w-100 p-0 mt-3">--}}
{{--                                        <ul class="list-group list-group-borderless text-center mb-4">--}}
{{--                                            <li class="list-group-item mb-0"><i class="bi bi-check-lg text-success me-1"></i>Customizable features</li>--}}
{{--                                            <li class="list-group-item mb-0"><i class="bi bi-check-lg text-success me-1"></i>Basic support</li>--}}
{{--                                            <li class="list-group-item mb-0"><i class="bi bi-check-lg text-success me-1"></i>Monthly updates</li>--}}
{{--                                            <li class="list-group-item mb-0"><i class="bi bi-check-lg text-success me-1"></i>Up to 50 Users</li>--}}
{{--                                        </ul>--}}

{{--                                        <a href="contact-us-v2.html" class="btn btn-dark w-100 mb-0">Get started</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Pricing item END -->--}}

{{--                            <!-- Pricing item START -->--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="card bg-primary text-center align-items-center p-4 pt-5">--}}
{{--                                    <!-- Badge -->--}}
{{--                                    <div class="text-bg-dark rounded position-absolute top-0 start-50 translate-middle px-3 py-1">Most popular</div>--}}

{{--                                    <!-- Card header -->--}}
{{--                                    <div class="card-header bg-transparent d-flex flex-column align-items-center p-0">--}}
{{--                                        <!-- Icon -->--}}
{{--                                        <div class="icon-xl bg-body d-flex justify-content-center align-items-center text-white rounded-circle mb-3">--}}
{{--                                            <img src="assets/images/elements/thunder.png" class="h-40px" alt="thunder">--}}
{{--                                        </div>--}}

{{--                                        <!-- Title -->--}}
{{--                                        <h6 class="mb-3 text-white">Standard plan</h6>--}}

{{--                                        <!-- Price -->--}}
{{--                                        <span class="text-white"> <span class="h1 text-white fw-bold">$120</span> /month</span>--}}
{{--                                    </div>--}}

{{--                                    <!-- Card body -->--}}
{{--                                    <div class="card-body w-100 p-0 mt-3">--}}
{{--                                        <ul class="list-group list-group-borderless text-center opacity-8 mb-4">--}}
{{--                                            <li class="list-group-item text-white mb-0"><i class="bi bi-check-lg me-1"></i>All basic plan features</li>--}}
{{--                                            <li class="list-group-item text-white mb-0"><i class="bi bi-check-lg me-1"></i>Priority support</li>--}}
{{--                                            <li class="list-group-item text-white mb-0"><i class="bi bi-check-lg me-1"></i>Access to advanced features</li>--}}
{{--                                            <li class="list-group-item text-white mb-0"><i class="bi bi-check-lg me-1"></i>Up to 100 Users</li>--}}
{{--                                            <li class="list-group-item text-white mb-0"><i class="bi bi-check-lg me-1"></i>Dedicated account manager</li>--}}
{{--                                        </ul>--}}
{{--                                        <!-- Button -->--}}
{{--                                        <a href="contact-us-v2.html" class="btn btn-white w-100 mb-0">Get started</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Pricing item END -->--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- =======================
Pricing END -->

        <!-- =======================
Faq START -->
{{--        <section class="bg-secondary pt-0 position-relative">--}}
{{--            <!-- Grad blur decoration -->--}}
{{--            <div class="position-absolute end-0 bottom-0 d-none d-sm-block">--}}
{{--                <img src="assets/images/elements/grad-shape/12.png" class="blur-2" alt="Decoration shape">--}}
{{--            </div>--}}

{{--            <div class="container position-relative">--}}
{{--                <!-- Title -->--}}
{{--                <div class="inner-container position-relative text-center mb-4 mb-md-5">--}}
{{--                    <h2 class="mb-0">Got questions? (FAQs)</h2>--}}
{{--                </div>--}}

{{--                <div class="row">--}}
{{--                    <div class="col-lg-8 mx-auto">--}}
{{--                        <!-- Accordion START -->--}}
{{--                        <div class="accordion accordion-bg-body-light" id="accordionFaq">--}}
{{--                            <!-- Item -->--}}
{{--                            <div class="accordion-item mb-4">--}}
{{--                                <div class="accordion-header font-base" id="heading-1">--}}
{{--                                    <button class="accordion-button fw-semibold rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">--}}
{{--								How do I get started with your service?--}}
{{--							</button>--}}
{{--                                </div>--}}
{{--                                <!-- Body -->--}}
{{--                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionFaq">--}}
{{--                                    <div class="accordion-body pt-0 pt-0">--}}
{{--                                        The first step is to sign up for our service. You can do this by visiting our website and locating the sign-up or registration button. Click on it and follow the prompts to create your account.--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Item -->--}}
{{--                            <div class="accordion-item mb-4">--}}
{{--                                <div class="accordion-header font-base" id="heading-2">--}}
{{--                                    <button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">--}}
{{--								What payment methods do you accept?--}}
{{--							</button>--}}
{{--                                </div>--}}
{{--                                <!-- Body -->--}}
{{--                                <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionFaq">--}}
{{--                                    <div class="accordion-body pt-0">--}}
{{--                                        September how men saw tolerably two behavior arranging. She offices for highest and replied one venture pasture. Applauded no discovery in newspaper allowance am northward. Frequently partiality possession resolution at or appearance unaffected me. Engaged--}}
{{--                                        its was the evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began to cause a scale.--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Item -->--}}
{{--                            <div class="accordion-item mb-4">--}}
{{--                                <div class="accordion-header font-base" id="heading-3">--}}
{{--                                    <button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">--}}
{{--								How can I contact your customer support team?--}}
{{--							</button>--}}
{{--                                </div>--}}
{{--                                <!-- Body -->--}}
{{--                                <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionFaq">--}}
{{--                                    <div class="accordion-body pt-0">--}}
{{--                                        Agencies provide a wide range of services depending on their specialization. Some common services include advertising campaigns, digital marketing, branding, creative design, media planning and buying, public relations, talent management, event planning,--}}
{{--                                        and market research.--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Item -->--}}
{{--                            <div class="accordion-item mb-4">--}}
{{--                                <div class="accordion-header font-base" id="heading-4">--}}
{{--                                    <button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">--}}
{{--								Do you offer custom solutions for businesses?--}}
{{--							</button>--}}
{{--                                </div>--}}
{{--                                <!-- Body -->--}}
{{--                                <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionFaq">--}}
{{--                                    <div class="accordion-body pt-0">--}}
{{--                                        When selecting an agency, consider your specific requirements, budget, and the agency's expertise and track record in your industry. Research their portfolio, client testimonials, and case studies to gauge their capabilities. It's also important to meet--}}
{{--                                        with the agency to assess their communication style and ensure they align with your goals.--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Accordion END -->--}}

{{--                        <!-- CTA text -->--}}
{{--                        <p class="heading-color text-center">Confused? Our team is ready to assist you! Start a chat for quick support. <a href="#" class="hover-underline-animation fw-semibold">Talk to Us</a></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- =======================
Faq START -->


        <!-- =======================
CTA START -->
        <section class="bg-secondary overflow-hidden pt-0 pb-5 mb-n8">
            <div class="container z-index-9 position-relative  mb-5 ">
                <div class="row g-5 mt-2 justify-content-center align-items-center">
                    <!-- CTA One -->
{{--                    <div class="col-xl-6">--}}
{{--                        <div class="card bg-primary h-100">--}}

{{--                            <!-- Rocket image -->--}}
{{--                            <div class="position-absolute bottom-0 end-0 me-n6 mb-n5 d-none d-sm-block">--}}
{{--                                <img src="assets/images/elements/rocket-02.png" alt="rocket image">--}}
{{--                            </div>--}}

{{--                            <!-- Content -->--}}
{{--                            <div class="row align-items-center h-100 p-3 p-sm-4">--}}
{{--                                <!-- Title and content -->--}}
{{--                                <div class="col-sm-8 d-flex h-100">--}}
{{--                                    <div class="card-body d-flex flex-column text-white">--}}
{{--                                        <h4 class="mb-5 text-white">Stay connected with us</h4>--}}

{{--                                        <div class="mt-auto">--}}
{{--                                            <form class="input-group mb-2">--}}
{{--                                                <input class="form-control form-control-sm rounded border me-3" type="email" placeholder="Enter your email">--}}
{{--                                                <button type="button" class="btn btn-sm btn-dark px-3 rounded-2 mb-0"><i class="bi bi-send-fill"></i></button>--}}
{{--                                            </form>--}}
{{--                                            <p class="small mb-0">✌️ No Spam — We Promise!</p>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <!-- CTA Two -->
                    <div class="col-xl-10 mt-3 pt-4">
                        <div class="card bg-primary-grad h-100 overflow-hidden">
                            <!-- Image -->
                            <div class="position-absolute end-0 top-0 me-n8 d-none d-sm-block">
                                <img src="{{ asset('assets/images/elements/person-laptop.png') }}" alt="">
                            </div>

                            <div class="row align-items-center p-3 ">
                                <!-- Title and content -->
                                <div class="col-sm-8">
                                    <div class="card-body  text-white">
                                        <p>Apply to work with us</p>
                                        <h4 class="mb-5 text-white">Explore Career Opportunities</h4>
                                        <a class="btn btn-sm btn-dark icon-link icon-link-hover" href="{{ route('carrer') }}">View open positions<i class="bi bi-arrow-right"></i> </a>
                                        <p class="small mb-0">2 jobs are available</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row END -->
            </div>
        </section>
        <!-- =======================
CTA END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Initialize GLightbox
            const lightbox = GLightbox({
                href: 'your-video-or-content.html', // Replace with your video or HTML content
                type: 'iframe', // 'iframe' for video or external page
                autoplayVideos: true,
                touchNavigation: true,
                openEffect: 'zoom',
                closeEffect: 'fade',
                zoomable: true,
                draggable: true
            });

            // Open automatically on page load
            lightbox.open();
        });
    </script>

@endsection
