@extends('layout.mainfrontpage')
@section('contant')

    <main>

        <!-- =======================
Hero START -->
        <section class="bg-secondary pt-xl-8 pb-5 pb-md-7">
            <!-- Title and content -->
            <div class="container position-relative pt-4 pt-sm-5">
                <!-- Breadcrumb -->
{{--                <nav class="mb-2" aria-label="breadcrumb">--}}
{{--                    <ol class="breadcrumb pt-0">--}}
{{--                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>--}}
{{--                        <li class="breadcrumb-item active" aria-current="page">Portfolio</li>--}}
{{--                    </ol>--}}
{{--                </nav>--}}
                <!-- Title -->
                <h1 class="display-5 text-center">Our Featured <span class="text-primary-grad"> Projects </span></h1>
            </div>
        </section>
        <!-- =======================
Hero END -->

        <!-- =======================
Portfolio START -->
        <section class="bg-secondary pt-0">
            <div class="container">

                <div class="row justify-content-center mb-6">
                    <div class="col-md-5">
                        <div class="card card-img-scale card-content-hover rounded-0 bg-transparent overflow-hidden">
                            <div class="card-img-scale-wrapper rounded-0">
                                <!-- Card Image -->
                                <img src="{{ asset('assets/images/portfolio/pro5.jpg') }}" class="img-scale" alt="portfolio-img">
                                <!-- Arrow button -->
                                <div class="card-img-overlay hover-content d-flex flex-column align-items-center justify-content-center p-5">
                                    <div class="icon-xl bg-dark text-white rounded-circle"><i class="bi bi-arrow-up-right"></i></div>
                                </div>
                            </div>
                            <!-- Card body -->
                            <div class="card-body d-flex justify-content-between px-0 pb-0">
                                <div>
                                    <h6 class="mb-0"><a href="https://texilinkcrm.codebeter.com/" target="_blank" class="heading-color stretched-link">TaxiLink</a></h6>
{{--                                    <span>UI/UX design</span>--}}
                                </div>
                                <small>@2025</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex align-items-center">
                        <div class="row justify-content-center mt-5 mt-md-0">
                            <div class="col-md-8">
                                <div class="card card-img-scale card-content-hover rounded-0 bg-transparent overflow-hidden">
                                    <div class="card-img-scale-wrapper rounded-0">
                                        <!-- Card Image -->
                                        <img src="{{ asset('assets/images/portfolio/pro6.jpg') }}" class="img-scale" alt="portfolio-img">
                                        <!-- Arrow button -->
                                        <div class="card-img-overlay hover-content d-flex flex-column align-items-center justify-content-center p-5">
                                            <div class="icon-xl bg-dark text-white rounded-circle"><i class="bi bi-arrow-up-right"></i></div>
                                        </div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body d-flex justify-content-between px-0 pb-0">
                                        <div>
                                            <h6 class="mb-0"><a href="http://denysverh.codebeter.com" target="_blank" class="heading-color stretched-link">Denysverh</a></h6>
{{--                                            <span>SEO</span>--}}
                                        </div>
                                        <small>@2025</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex align-items-center">
                        <div class="row justify-content-center mt-5 mt-md-6">
                            <div class="col-md-11 col-lg-9">
                                <div class="card card-img-scale card-content-hover rounded-0 bg-transparent overflow-hidden">
                                    <div class="card-img-scale-wrapper rounded-0">
                                        <!-- Card Image -->
                                        <img src="{{ asset('assets/images/portfolio/pro4.jpg') }}" class="img-scale" alt="portfolio-img">
                                        <!-- Arrow button -->
                                        <div class="card-img-overlay hover-content d-flex flex-column align-items-center justify-content-center p-5">
                                            <div class="icon-xl bg-dark text-white rounded-circle"><i class="bi bi-arrow-up-right"></i></div>
                                        </div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body d-flex justify-content-between px-0 pb-0">
                                        <div>
                                            <h6 class="mb-0"><a href="http://railoriginal.codebeter.com" target="_blank" class="heading-color stretched-link">RailOrignal</a></h6>
{{--                                            <span>Logo design</span>--}}
                                        </div>
                                        <small>@2025</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex align-items-center">
                        <div class="row justify-content-center mt-5 mt-md-6">
                            <div class="col-md-11 col-lg-9">
                                <div class="card card-img-scale card-content-hover rounded-0 bg-transparent overflow-hidden">
                                    <div class="card-img-scale-wrapper rounded-0">
                                        <!-- Card Image -->
                                        <img src="{{ asset('assets/images/portfolio/pro3.jpg') }}" class="img-scale" alt="portfolio-img">
                                        <!-- Arrow button -->
                                        <div class="card-img-overlay hover-content d-flex flex-column align-items-center justify-content-center p-5">
                                            <div class="icon-xl bg-dark text-white rounded-circle"><i class="bi bi-arrow-up-right"></i></div>
                                        </div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body d-flex justify-content-between px-0 pb-0">
                                        <div>
                                            <h6 class="mb-0"><a href="http://business-brokers.codebeter.com" target="_blank" class="heading-color stretched-link">Business Brokers</a></h6>
{{--                                            <span>E-commerce</span>--}}
                                        </div>
                                        <small>@2025</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex align-items-center">
                        <div class="row justify-content-center mt-5 mt-md-6">
                            <div class="col-md-11 col-lg-9">
                                <div class="card card-img-scale card-content-hover rounded-0 bg-transparent overflow-hidden">
                                    <div class="card-img-scale-wrapper rounded-0">
                                        <!-- Card Image -->
                                        <img src="{{ asset('assets/images/portfolio/pro2.jpg') }}" class="img-scale" alt="portfolio-img">
                                        <!-- Arrow button -->
                                        <div class="card-img-overlay hover-content d-flex flex-column align-items-center justify-content-center p-5">
                                            <div class="icon-xl bg-dark text-white rounded-circle"><i class="bi bi-arrow-up-right"></i></div>
                                        </div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body d-flex justify-content-between px-0 pb-0">
                                        <div>
                                            <h6 class="mb-0"><a href="http://jobportal.codebeter.com" target="_blank" class="heading-color stretched-link">Jobportal</a></h6>
{{--                                            <span>Animation</span>--}}
                                        </div>
                                        <small>@2025</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="col-md-6 d-flex align-items-center">--}}
{{--                        <div class="row justify-content-center mt-5 mt-md-6">--}}
{{--                            <div class="col-md-11 col-lg-9">--}}
{{--                                <div class="card card-img-scale card-content-hover rounded-0 bg-transparent overflow-hidden">--}}
{{--                                    <div class="card-img-scale-wrapper rounded-0">--}}
{{--                                        <!-- Card Image -->--}}
{{--                                        <img src="assets/images/portfolio/04.jpg" class="img-scale" alt="portfolio-img">--}}
{{--                                        <!-- Arrow button -->--}}
{{--                                        <div class="card-img-overlay hover-content d-flex flex-column align-items-center justify-content-center p-5">--}}
{{--                                            <div class="icon-xl bg-dark text-white rounded-circle"><i class="bi bi-arrow-up-right"></i></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Card body -->--}}
{{--                                    <div class="card-body d-flex justify-content-between px-0 pb-0">--}}
{{--                                        <div>--}}
{{--                                            <h6 class="mb-0"><a href="portfolio-case-study-v2.html" class="heading-color stretched-link">Digital marketing overhaul</a></h6>--}}
{{--                                            <span>Marketing</span>--}}
{{--                                        </div>--}}
{{--                                        <small>@2021</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <!-- Row END -->

                <!-- Pagination -->
                <div class="d-grid justify-content-center">
                    <a href="#!" role="button" class="btn btn-loader btn-outline-primary mb-0" data-bs-toggle="button" aria-pressed="true">
				<span class="load-text">Load more work</span>
				<div class="load-icon">
					<div class="spinner-grow spinner-grow-sm bg-primary" role="status">
						<span class="visually-hidden">Loading...</span>
					</div>
				</div>
			</a>
                </div>
            </div>
        </section>
        <!-- =======================
Portfolio END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

@endsection
