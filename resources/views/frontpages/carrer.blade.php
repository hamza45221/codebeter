

@extends('layout.mainfrontpage')
<style>


    @media only screen and (min-width:1024px) {
        .swiper-slide {
            width: 33% !important;
            margin-right: 10px !important;
        }
    }

</style>
@section('contant')

<main>

    <!-- =======================
Hero START -->
    <section class="position-relative overflow-hidden pt-lg-8 pb-0">
        <div class="bg-secondary-grad position-relative  pt-lg-8 mt-sm-2">
            <!-- Bg pattern -->
            <div class="position-absolute top-0 start-0">
                <img src="{{ asset('assets/images/elements/bg-pattern.svg') }}" style="opacity: 0.05;" alt="bg pattern">
            </div>

            <!-- Main content -->
            <div class="container position-relative">
                <!-- Avatar decoration START -->
                <!-- Avatar item -->
                <div class="avatar avatar-xl flex-shrink-0 position-absolute top-0 start-0 mt-6 ms-n3 d-none d-lg-block">
                    <img class="avatar-img rounded-circle position-relative" src="{{ asset('assets/images/avatar/10.jpg') }}" alt="avatar">
                </div>
                <!-- Avatar item -->
                <div class="avatar flex-shrink-0 position-absolute top-0 start-50 translate-middle-x ms-n9 mt-n6 d-none d-lg-block">
                    <img class="avatar-img rounded-circle position-relative" src="{{ asset('assets/images/avatar/02.jpg') }}" alt="avatar">
                </div>
                <!-- Avatar item -->
{{--                <div class="avatar avatar-lg flex-shrink-0 position-absolute top-0 end-0 me-7 mt-n4 d-none d-lg-block">--}}
{{--                    <img class="avatar-img rounded-circle position-relative" src="{{ asset('assets/images/avatar/06.jpg') }}" alt="avatar">--}}
{{--                </div>--}}
                <!-- Avatar item -->
                <div class="avatar avatar-xxl flex-shrink-0 position-absolute bottom-50 end-0 mb-n9 me-n3 d-none d-lg-block">
                    <img class="avatar-img rounded-circle position-relative" src="{{ asset('assets/images/avatar/09.jpg') }}" alt="avatar">
                </div>
                <!-- Avatar item -->
                <div class="avatar flex-shrink-0 position-absolute bottom-0 start-0 ms-8 mb-n3 d-none d-lg-block">
                    <img class="avatar-img rounded-circle position-relative" src="{{ asset('assets/images/avatar/01.jpg') }}" alt="avatar">
                </div>
                <!-- Avatar decoration END -->

                <!-- Main title and search START -->
                <div class="inner-container text-center position-relative z-index-2 mx-auto">
                    <!-- Title -->
                    <h1 class="fw-semibold mb-4 lh-base">Join Our Creative Group of <span class="text-primary">Web Professionals</span></h1>

                    <!-- Desc -->
                    <p class="mb-5">Developing the Future of Web Development and Design.<br>
                        providing cutting-edge, quick, and user-focused digital experiences.</p>

                    <!-- Search form START -->
{{--                    <div class="bg-body d-inline-block border border-primary border-opacity-10 rounded-3 position-relative p-2">--}}
{{--                        <!-- Form START -->--}}
{{--                        <form class="d-sm-flex align-items-center gap-3">--}}
{{--                            <!-- Input -->--}}
{{--                            <div class="position-relative mb-1 mb-sm-0">--}}
{{--                                <input class="form-control border-0 me-1 ps-5 w-sm-200px w-md-300px" type="text" placeholder="Job title">--}}
{{--                                <!-- Icon -->--}}
{{--                                <span class="position-absolute top-50 start-0 translate-middle ps-5"><i class="bi bi-briefcase"></i></span>--}}
{{--                            </div>--}}

{{--                            <div class="vr opacity-1 my-2 d-none d-sm-block"></div>--}}

{{--                            <!-- Select -->--}}
{{--                            <div class="position-relative mb-1 mb-sm-0">--}}
{{--                                <select class="form-select border-0 w-sm-200px w-md-300px ps-5" data-search-enabled="true">--}}
{{--                                    <option>Location</option>--}}
{{--                                    <option>Canada</option>--}}
{{--                                    <option>USA</option>--}}
{{--                                    <option>Paris</option>--}}
{{--                                    <option>India</option>--}}
{{--                                    <option>London</option>--}}
{{--                                </select>--}}
{{--                                <!-- Icons -->--}}
{{--                                <span class="position-absolute top-50 start-0 translate-middle ps-5"><i class="bi bi-geo-alt"></i></span>--}}
{{--                            </div>--}}

{{--                            <!-- Search -->--}}
{{--                            <a class="btn btn-lg btn-dark btn-icon mb-0" href="#"><i class="bi bi-search fs-6"></i></a>--}}
{{--                        </form>--}}
{{--                        <!-- Form END -->--}}
{{--                    </div>--}}
                    <!-- Search form END -->
                </div>
                <!-- Main title and search END -->
            </div>

            <!-- Unique selling points START -->
            <div class="container mt-6 mt-lg-8">
                <!-- Title and slider button -->
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <h5 class="text-center text-sm-start mb-0">We Promote Connectivity Worldwide</h5>
                    </div>

                    <!-- Slider button -->
                    <div class="col-sm-4 col-lg-5 ms-auto">
                        <div class="d-flex justify-content-center justify-content-sm-end gap-3 position-relative mt-3">
                            <a href="#" class="fs-5 text-body-secondary text-primary-hover mb-0 swiper-button-prev-points rtl-flip"><i class="bi bi-arrow-left"></i></a>
                            <a href="#" class="fs-5 text-body-secondary text-primary-hover mb-0 swiper-button-next-points rtl-flip"><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Slider START -->
                <div class="swiper px-2" data-swiper-options='{
				"slidesPerView": 1,
				"spaceBetween": 20,
				"autoplay": false,
				"navigation":{
					"nextEl":".swiper-button-next-points",
					"prevEl":".swiper-button-prev-points"
				},
				"breakpoints": {
					"576": {"slidesPerView": 2},
					"768": {"slidesPerView": 3},
					"992": {"slidesPerView": 4},
					"1400": {"slidesPerView": 5}
				}}'>

                    <!-- Slider items -->
                    <div class="swiper-wrapper mb-5">
                        <!-- Item -->
                        <div class="swiper-slide  py-3" >
                            <div class="card card-body card-hover-transition shadow-primary p-4">
                                <h3 class="text-pink mb-2"><i class="bi bi-boxes"></i></h3>
                                <p class="lead heading-color fw-bold mb-2">Developing together</p>
                                    <small>We set high standards and go above and beyond expectations in order to achieve excellence in every facet of our work.</small>
{{--                                <a href="#" class="link-primary-grad stretched-link icon-link icon-link-hover">Read more <i class="bi bi-arrow-right"></i></a>--}}
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="swiper-slide py-3">
                            <div class="card card-body card-hover-transition shadow-primary p-4">
                                <h3 class="text-purple mb-2"><i class="bi bi-bullseye"></i></h3>
                                <p class="lead heading-color fw-bold mb-2">Improving together</p>
                                    <small>Integrity and trust are the cornerstones of our relationships with clients and team members.</small>
{{--                                <a href="#" class="link-primary-grad stretched-link icon-link icon-link-hover">Read more <i class="bi bi-arrow-right"></i></a>--}}
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="swiper-slide py-3">
                            <div class="card card-body card-hover-transition shadow-primary p-4">
                                <h3 class="text-success mb-2"><i class="bi bi-people"></i></h3>
                                <p class="lead heading-color fw-bold mb-2">Working together</p>
                                    <small>We recognize the value of ongoing education and skill development in order to stay ahead in the rapidly evolving digital world.</small>
{{--                                <a href="#" class="link-primary-grad stretched-link icon-link icon-link-hover">Read more <i class="bi bi-arrow-right"></i></a>--}}
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Slider END -->
            </div>
            <!-- Unique selling points END -->
        </div>

        <!-- Blur bg -->
        <div class="bg-body h-100px  blur-7 position-absolute bottom-0 start-50 translate-middle-x" style="width: 3000px"></div>
    </section>
    <!-- =======================
Hero END -->

    <!-- =======================
Recruitment Process START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <div class="row g-4 mt-4">
                        <!-- Tab content -->
                        <div class="col-md-6 order-2">
                            <!-- Tab content START -->
                            <div class="tab-content" id="v-pills-tabContent">
                                <!-- Content item -->
                                <div class="tab-pane fade show active" id="proceee-one" aria-labelledby="proceee-one-tab" tabindex="0">
                                    <div class="card rounded-4 border overflow-hidden">
                                        <!-- Image -->
                                        <img src="{{ asset('assets/images/career/steps/01.jpg') }}" class="card-img-top" alt="Blog-img">
                                        <!-- Content -->
                                        <div class="card-body p-4">
                                            <h6>What to Do</h6>
                                            <p class="mb-0">Candidates start by using our online portal to submit their resumes and pertinent information.
                                                Candidates who fit the job requirements and come from a variety of backgrounds are welcome.
                                                To show interest in becoming a member of our team, you must first complete this step.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content item -->
                                <div class="tab-pane fade" id="process-two" aria-labelledby="process-two-tab" tabindex="0">
                                    <div class="card rounded-4 border overflow-hidden">
                                        <!-- Image -->
                                        <img src="{{ asset('assets/images/career/steps/02.jpg') }}" class="card-img-top" alt="Blog-img">
                                        <!-- Content -->
                                        <div class="card-body p-4">
                                            <h6>What to Do</h6>
                                            <p class="mb-0">Every application is carefully examined by our HR team in order to create a shortlist of qualified applicants.
                                                Qualifications, pertinent experience, and role alignment are the main criteria we use for evaluation.
                                                Only individuals who fulfill our preliminary requirements advance to the following phase.
                                                with us.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content item -->
                                <div class="tab-pane fade" id="process-three" aria-labelledby="process-three-tab" tabindex="0">
                                    <div class="card rounded-4 border overflow-hidden">
                                        <!-- Image -->
                                        <img src="{{ asset('assets/images/career/steps/03.jpg') }}" class="card-img-top" alt="Blog-img">
                                        <!-- Content -->
                                        <div class="card-body p-4">
                                            <h6>What to Do</h6>
                                            <p class="mb-0">Candidates who make the short list are invited to an initial interview.
                                                Skills, Experience , attitude, and aommunication are the main topics of this stage.
                                                It allows us to learn more about the individual who wrote the resume.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content item -->
                                <div class="tab-pane fade" id="process-four" aria-labelledby="process-four-tab" tabindex="0">
                                    <div class="card rounded-4 border overflow-hidden">
                                        <!-- Image -->
                                        <img src="{{ asset('assets/images/career/career-skills.jpg') }}" class="card-img-top" alt="Blog-img">
                                        <!-- Content -->
                                        <div class="card-body p-4">

                                            <p class="mb-0">Candidates show their technical proficiency or job-specific skills by completing a task or test.
                                                We evaluate the method, precision, and quality of the problem-solving.
                                                This step guarantees that applicants are technically qualified for the position.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content item -->
                                <div class="tab-pane fade" id="process-five" aria-labelledby="process-five-tab" tabindex="0">
                                    <div class="card rounded-4 border overflow-hidden">
                                        <!-- Image -->
                                        <img src="{{ asset('assets/images/career/career-inter.jpg') }}" class="card-img-top" alt="Blog-img">
                                        <!-- Content -->
                                        <div class="card-body p-4">

                                            <p class="mb-0">Senior team members or decision-makers interview the best applicants.
                                                Deeper conversations about expectations, values, and experience are the main focus of this step.
                                                It assists us in reaching a firm hiring conclusion.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab content END -->
                        </div>

                        <!-- Title and tabs -->
                        <div class="col-md-5 order-1 order-md-2 ms-auto">
                            <h2 class="mb-4">Our Recruitment Process</h2>
                            <!-- Tabs START -->
                            <div class="nav nav-pills-dark flex-column gap-3 nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link text-start rounded-pill ps-4 py-3 active" id="proceee-one-tab" role="tab" data-bs-toggle="pill" data-bs-target="#proceee-one" aria-selected="true">1. Application Submission</button>
                                <button class="nav-link text-start rounded-pill ps-4 py-3" id="process-two-tab" role="tab" data-bs-toggle="pill" data-bs-target="#process-two" aria-selected="false">2. Initial Screening</button>
                                <button class="nav-link text-start rounded-pill ps-4 py-3" id="process-three-tab" role="tab" data-bs-toggle="pill" data-bs-target="#process-three" aria-selected="false">3. First Interview</button>
                                <button class="nav-link text-start rounded-pill ps-4 py-3" id="process-four-tab" role="tab" data-bs-toggle="pill" data-bs-target="#process-four" aria-selected="false" >4. Technical/Skill Assessment</button>
                                <button class="nav-link text-start rounded-pill ps-4 py-3" id="process-five-tab" role="tab" data-bs-toggle="pill" data-bs-target="#process-five" aria-selected="false" >5. Final Interview</button>
                            </div>
                            <!-- Tabs END -->
                        </div>
                    </div>
                    <!-- Row END -->

                    <!-- CTA -->
{{--                    <div class="inner-container-small bg-primary rounded-3 text-white text-center py-3 mt-5">--}}
{{--                        <p class="mb-0 px-2 px-sm-5 px-md-0"><i class="bi bi-info-square-fill heading-color me-2"></i>Contact our team for more information--}}
{{--                            <a href="#" class="fw-semibold icon-link icon-link-hover hover-underline-animation text-white">Let’s chat <i class="bi bi-arrow-right"></i></a>--}}
{{--                        </p>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
Recruitment Process END -->

    <!-- =======================
Office gallery START -->
{{--    <section class="pt-0">--}}
{{--        <div class="container">--}}
{{--            <div class="row row-cols-2 row-cols-md-4 g-lg-5 align-items-center">--}}
{{--                <!-- Image item -->--}}
{{--                <div class="col">--}}
{{--                    <div class="card card-content-hover overflow-hidden">--}}
{{--                        <!-- Image -->--}}
{{--                        <img src="assets/images/career/01.jpg" class="rounded-4" alt="course image">--}}
{{--                        <!-- Full screen button -->--}}
{{--                        <a class="hover-content position-absolute w-100 h-100" data-glightbox data-gallery="gallery" href="assets/images/career/01.jpg">--}}
{{--                            <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Image item -->--}}
{{--                <div class="col">--}}
{{--                    <!-- Item -->--}}
{{--                    <div class="card card-content-hover overflow-hidden mb-5">--}}
{{--                        <!-- Image -->--}}
{{--                        <img src="assets/images/career/02.jpg" class="rounded-4" alt="course image">--}}
{{--                        <!-- Full screen button -->--}}
{{--                        <a class="hover-content position-absolute w-100 h-100" data-glightbox data-gallery="gallery" href="assets/images/career/02.jpg">--}}
{{--                            <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- Item -->--}}
{{--                    <div class="card card-content-hover overflow-hidden">--}}
{{--                        <!-- Image -->--}}
{{--                        <img src="assets/images/career/03.jpg" class="rounded-4" alt="course image">--}}
{{--                        <!-- Full screen button -->--}}
{{--                        <a class="hover-content position-absolute w-100 h-100" data-glightbox data-gallery="gallery" href="assets/images/career/03.jpg">--}}
{{--                            <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Image item -->--}}
{{--                <div class="col">--}}
{{--                    <!-- Item -->--}}
{{--                    <div class="card card-content-hover overflow-hidden mb-5">--}}
{{--                        <!-- Image -->--}}
{{--                        <img src="assets/images/career/05.jpg" class="rounded-4" alt="course image">--}}
{{--                        <!-- Full screen button -->--}}
{{--                        <a class="hover-content position-absolute w-100 h-100" data-glightbox data-gallery="gallery" href="assets/images/career/05.jpg">--}}
{{--                            <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- Item -->--}}
{{--                    <div class="card card-content-hover overflow-hidden">--}}
{{--                        <!-- Image -->--}}
{{--                        <img src="assets/images/career/04.jpg" class="rounded-4" alt="course image">--}}
{{--                        <!-- Full screen button -->--}}
{{--                        <a class="hover-content position-absolute w-100 h-100" data-glightbox data-gallery="gallery" href="assets/images/career/04.jpg">--}}
{{--                            <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Image item -->--}}
{{--                <div class="col">--}}
{{--                    <div class="card card-content-hover overflow-hidden">--}}
{{--                        <!-- Image -->--}}
{{--                        <img src="assets/images/career/06.jpg" class="rounded-4" alt="course image">--}}
{{--                        <!-- Full screen button -->--}}
{{--                        <a class="hover-content position-absolute w-100 h-100" data-glightbox data-gallery="gallery" href="assets/images/career/06.jpg">--}}
{{--                            <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Row END -->--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- =======================
Office gallery END -->

    <!-- =======================
Job listing START -->
    <section class="py-0 mb-n8 ">
        <div class="container-fluid ">

            <div class="max-width-1550 bg-dark position-relative rounded-4 overflow-hidden py-5 py-sm-6 py-lg-6">
                <!-- Decoration START -->
                <!-- Grad blur -->
                <div class="position-absolute top-0 start-0 mt-n6 ms-n5">
                    <img src="{{ asset('assets/images/elements/grad-shape/blur-decoration.svg') }}" class="blur-7 opacity-1" alt="Grad shape">
                </div>
                <!-- Grad blur -->
                <div class="position-absolute top-100 start-50 translate-middle">
                    <img src="{{ asset('assets/images/elements/grad-shape/blur-decoration-2.svg') }}" class="opacity-2 blur-9" alt="Grad shape">
                </div>
                <!-- Decoration END -->

                <div class="container position-relative" data-bs-theme="dark">
                    <!-- Title and button -->
                    <h2 class="text-center mb-4">Discover Your Career—You Deserve It!</h2>
                    <p class="text-center lead mx-auto mb-5">Look through our exciting job openings to find the one that best suits your goals and skill set.</p>

                    <!-- job list -->
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <!-- Job item -->
                            <div class="card bg-transparent bg-opacity-50 border border-opacity-10 card-hover-transition card-hover-shadow mb-4">
                                <div class="card-body p-4" type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <div class="row g-3 g-sm-4 align-items-center">
                                        <div class="col-md-5">
                                            <h6 class="mb-0">UI/UX Designer</h6>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-2">
                                            <span>Full Time</span>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-3">
{{--                                            <span>UI/UX Designer</span>--}}
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-2 text-sm-end">
                                            <a href="#" class="fw-semibold link-success icon-link icon-link-hover stretched-link">Apply <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->
                                </div>
                            </div>

                            <!-- Job item -->
                            <div class="card bg-transparent bg-opacity-50 border border-opacity-10 card-hover-transition card-hover-shadow mb-4">
                                <div class="card-body p-4" type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <div class="row g-3 g-sm-4 align-items-center">
                                        <div class="col-md-5">
                                            <h6 class="mb-0">Front End Developer</h6>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-2">
                                            <span>Full Time</span>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-3">
{{--                                            <span>Software development</span>--}}
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-2 text-sm-end">
                                            <a href="#" class="fw-semibold link-success icon-link icon-link-hover stretched-link">Apply <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->
                                </div>
                            </div>

                            <!-- Job item -->
                            <div class="card bg-transparent bg-opacity-50 border border-opacity-10 card-hover-transition card-hover-shadow mb-4">
                                <div class="card-body p-4" type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <div class="row g-3 g-sm-4 align-items-center">
                                        <div class="col-md-5">
                                            <h6 class="mb-0">PhP/Laravel Junior Developer</h6>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-2">
                                            <span>Full Time</span>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-3">
{{--                                            <span>Design</span>--}}
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-2 text-sm-end">
                                            <a href="#" class="fw-semibold link-success icon-link icon-link-hover stretched-link">Apply <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->
                                </div>
                            </div>

                            <!-- Job item -->
                            <div class="card bg-transparent bg-opacity-50 border border-opacity-10 card-hover-transition card-hover-shadow mb-4">
                                <div class="card-body p-4" type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <div class="row g-3 g-sm-4 align-items-center">
                                        <div class="col-md-5">
                                            <h6 class="mb-0">PHP/Laravel Senior Developer</h6>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-2">
                                            <span>Full Time</span>
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-3">
{{--                                            <span>Sales</span>--}}
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-4 col-md-2 text-sm-end">
                                            <a href="#" class="fw-semibold link-success icon-link icon-link-hover stretched-link">Apply <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
Job listing END -->

    <!-- =======================
Review START -->
    <section class="bg-secondary-grad">
        <!-- Title -->
{{--        <h2 class="text-center mb-4 mb-sm-6 pt-8">What people say about us</h2>--}}

{{--        <!-- Testimonials START -->--}}
{{--        <div class="swiper px-4 px-sm-5" data-swiper-options='{--}}
{{--			"spaceBetween": 30,--}}
{{--			"speed":"14000",--}}
{{--			"autoplay":{--}}
{{--				"delay": 0,--}}
{{--				"disableOnInteraction": false,--}}
{{--				"pauseOnMouseEnter": true--}}
{{--			},--}}
{{--			"breakpoints": {--}}
{{--				"576": {"slidesPerView": 1},--}}
{{--				"768": {"slidesPerView": 2},--}}
{{--				"992": {"slidesPerView": 3},--}}
{{--				"1400": {"slidesPerView": 4}--}}
{{--			}}'>--}}

{{--            <div class="swiper-wrapper">--}}
{{--                <!-- Testimonials item -->--}}
{{--                <div class="swiper-slide">--}}
{{--                    <div class="card rounded-4 p-4 h-100">--}}
{{--                        <!-- Card body -->--}}
{{--                        <div class="card-body p-0 mb-4">--}}
{{--                            <!-- Rating star -->--}}
{{--                            <ul class="list-inline mb-3">--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i></li>--}}
{{--                            </ul>--}}
{{--                            <!-- Testimonials text -->--}}
{{--                            <blockquote>--}}
{{--                                <p class="heading-color mb-0">Their team went above and beyond to understand our needs and deliver a solution that exceeded our expectations. They demonstrated throughout the process was truly impressive.</p>--}}
{{--                            </blockquote>--}}
{{--                        </div>--}}
{{--                        <!-- Card footer -->--}}
{{--                        <div class="card-footer bg-transparent p-0">--}}
{{--                            <!-- Testimonials info -->--}}
{{--                            <div class="d-flex align-items-center">--}}
{{--                                <div class="avatar flex-shrink-0">--}}
{{--                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">--}}
{{--                                </div>--}}
{{--                                <div class="ms-3">--}}
{{--                                    <p class="lead heading-color fw-semibold mb-0">Jacqueline Miller</p>--}}
{{--                                    <small>Product designer</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Testimonials item -->--}}
{{--                <div class="swiper-slide">--}}
{{--                    <div class="card rounded-4 p-4 h-100">--}}
{{--                        <!-- Card body -->--}}
{{--                        <div class="card-body p-0 mb-4">--}}
{{--                            <!-- Rating star -->--}}
{{--                            <ul class="list-inline mb-3">--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                            </ul>--}}
{{--                            <!-- Testimonials text -->--}}
{{--                            <blockquote>--}}
{{--                                <p class="heading-color mb-0">Frequently partiality possession resolution at or appearance unaffected me. Ye goodness felicity do disposal dwelling no.</p>--}}
{{--                            </blockquote>--}}
{{--                        </div>--}}
{{--                        <!-- Card footer -->--}}
{{--                        <div class="card-footer bg-transparent p-0">--}}
{{--                            <!-- Testimonials info -->--}}
{{--                            <div class="d-flex align-items-center">--}}
{{--                                <div class="avatar flex-shrink-0">--}}
{{--                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg" alt="avatar">--}}
{{--                                </div>--}}
{{--                                <div class="ms-3">--}}
{{--                                    <p class="lead heading-color fw-semibold mb-0">Louis Ferguson</p>--}}
{{--                                    <small>Web Developer</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Testimonials item -->--}}
{{--                <div class="swiper-slide">--}}
{{--                    <div class="card rounded-4 p-4 h-100">--}}
{{--                        <!-- Card body -->--}}
{{--                        <div class="card-body p-0 mb-4">--}}
{{--                            <!-- Rating star -->--}}
{{--                            <ul class="list-inline mb-3">--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i></li>--}}
{{--                            </ul>--}}
{{--                            <!-- Testimonials text -->--}}
{{--                            <blockquote>--}}
{{--                                <p class="heading-color mb-0">Was out laughter raptures returned outweigh. Luckily cheered colonel I do we attack highest enabled. Tried law yet style child. The bore of true of no be deal.</p>--}}
{{--                            </blockquote>--}}
{{--                        </div>--}}
{{--                        <!-- Card footer -->--}}
{{--                        <div class="card-footer bg-transparent p-0">--}}
{{--                            <!-- Testimonials info -->--}}
{{--                            <div class="d-flex align-items-center">--}}
{{--                                <div class="avatar flex-shrink-0">--}}
{{--                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">--}}
{{--                                </div>--}}
{{--                                <div class="ms-3">--}}
{{--                                    <p class="lead heading-color fw-semibold mb-0">Emma Watson</p>--}}
{{--                                    <small>UI/UX designer</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Testimonials item -->--}}
{{--                <div class="swiper-slide">--}}
{{--                    <div class="card rounded-4 p-4 h-100">--}}
{{--                        <!-- Card body -->--}}
{{--                        <div class="card-body p-0 mb-4">--}}
{{--                            <!-- Rating star -->--}}
{{--                            <ul class="list-inline mb-3">--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i></li>--}}
{{--                            </ul>--}}
{{--                            <!-- Testimonials text -->--}}
{{--                            <blockquote>--}}
{{--                                <p class="heading-color mb-0">Our passion for customer excellence is just one reason why we are the market leader. We've always worked very hard to give our customers the best experience.</p>--}}
{{--                            </blockquote>--}}
{{--                        </div>--}}
{{--                        <!-- Card footer -->--}}
{{--                        <div class="card-footer bg-transparent p-0">--}}
{{--                            <!-- Testimonials info -->--}}
{{--                            <div class="d-flex align-items-center">--}}
{{--                                <div class="avatar flex-shrink-0">--}}
{{--                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">--}}
{{--                                </div>--}}
{{--                                <div class="ms-3">--}}
{{--                                    <p class="lead heading-color fw-semibold mb-0">Allen Smith</p>--}}
{{--                                    <small>Manager</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Testimonials item -->--}}
{{--                <div class="swiper-slide">--}}
{{--                    <div class="card rounded-4 p-4 h-100">--}}
{{--                        <!-- Card body -->--}}
{{--                        <div class="card-body p-0 mb-4">--}}
{{--                            <!-- Rating star -->--}}
{{--                            <ul class="list-inline mb-3">--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>--}}
{{--                                <li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i></li>--}}
{{--                            </ul>--}}
{{--                            <!-- Testimonials text -->--}}
{{--                            <blockquote>--}}
{{--                                <p class="heading-color mb-0">Was out laughter raptures returned outweigh. Luckily cheered colonel I do we attack highest enabled. Tried law yet style child. The bore of true of no be deal.</p>--}}
{{--                            </blockquote>--}}
{{--                        </div>--}}
{{--                        <!-- Card footer -->--}}
{{--                        <div class="card-footer bg-transparent p-0">--}}
{{--                            <!-- Testimonials info -->--}}
{{--                            <div class="d-flex align-items-center">--}}
{{--                                <div class="avatar flex-shrink-0">--}}
{{--                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">--}}
{{--                                </div>--}}
{{--                                <div class="ms-3">--}}
{{--                                    <p class="lead heading-color fw-semibold mb-0">Emma Watson</p>--}}
{{--                                    <small>UI/UX designer</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Testimonials END -->
    </section>
    <!-- =======================
Review END -->

</main>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Apply Job</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <!-- Form START -->
                <form class="row g-3" action="{{ route('applyjob.mail') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label class="form-label">Full name *</label>
                        <input type="text" name="fullname" class="form-control form-control-sm" placeholder="Full name">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Email address *</label>
                        <input type="email" name="email" class="form-control form-control-sm" id="floatingInput" placeholder="name@example.com">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Address *</label>
                        <textarea class="form-control" name="address" placeholder="Write your address here...." id="floatingTextarea2" style="height: 70px"></textarea>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Phone number *</label>
                        <input type="text" name="phone_number" class="form-control form-control-sm" placeholder="(xx) xxx xxxxxxx">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Country Name *</label>
                        <input type="text" name="country" class="form-control form-control-sm" placeholder="Write your Country Name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Select Job Type *</label>
                        <select class="form-control form-control-sm" name="services">
                            <option class="" >Select services</option>
                            <option value="UI/UX Designer">UI/UX Designer</option>
                            <option value="Front End Developer">Front End Developer</option>
                            <option value="PHP/Laravel Junior Developer">PHP/Laravel Junior Developer</option>
                            <option value="PHP/Laravel Senior Developer">PHP/Laravel Senior Developer<option>

                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Upload Your CV *</label>
                        <input type="file" name="upload_pro_detail" class="form-control form-control-sm" placeholder="Write your project details">
                    </div>
                    <!-- Button -->
                    <button type="submit" class="btn btn-primary mb-0">Send a message</button>
                </form>
                <!-- Form END -->
            </div>

        </div>
    </div>
</div>


@endsection
