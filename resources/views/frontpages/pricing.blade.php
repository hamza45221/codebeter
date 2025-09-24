@extends('layout.mainfrontpage')
@section('contant')

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Hero START -->
        <section class="price-wrap position-relative overflow-hidden pt-xl-8">
            <!-- Grad blur -->
            <div class="bg-primary-grad blur-9 h-300px w-100 opacity-2 position-absolute top-0 start-50 translate-middle-x mt-n7"></div>
            <!-- Title and switch -->
            <div class="container position-relative z-index-2 pt-4 pb-6 pb-xl-8">
                <!-- Breadcrumb -->
                <nav class="mb-2" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pricing - v1</li>
                    </ol>
                </nav>

                <!-- Title -->
                <h3>Pricing Plan For</h3>
                <h1 class="fw-bold mb-4">Every <span class="text-primary-grad">Business</span> Needs</h1>

                <!-- Switch -->
                <form class="bg-body shadow-primary border border-primary d-inline-flex align-items-center rounded-3 p-3 px-sm-4 py-sm-3" style="--bs-border-opacity: 0.20;">
                    <!-- Label -->
                    <span class="fw-semibold heading-color">Monthly</span>
                    <!-- Switch -->
                    <div class="form-check form-switch form-check-lg mx-2 mb-0">
                        <input class="form-check-input mt-0 price-toggle" type="checkbox" id="flexSwitchCheckDefault">
                    </div>
                    <!-- Label -->
                    <span class="fw-semibold heading-color">Yearly</span>
                    <span class="badge bg-success ms-2">20% save</span>
                </form>
            </div>

            <!-- Pricing box START -->
            <div class="container-fluid">
                <div class="max-width-1550">
                    <div class="row">
                        <!-- Pricing item -->
                        <div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
                            <div class="card shadow overflow-hidden p-1">
                                <!-- Card header -->
                                <div class="card-header bg-secondary bg-opacity-50 p-4 pb-0">
                                    <!-- Icon -->
                                    <div class="icon-lg bg-body shadow-primary rounded-circle mb-3">
                                        <i class="bi bi-lightning-charge-fill fa-lg lh-1 heading-color"></i>
                                    </div>
                                    <!-- Title and price -->
                                    <h6 class="mb-3">Basic plan</h6>
                                    <p class="mb-0"> <span class="h2 mb-0 plan-price" data-monthly-price="$25" data-annual-price="$20">$25</span> /month</p>
                                    <small>Basic feature for up to 10 users</small>
                                    <!-- Button -->
                                    <a href="#" class="btn btn-dark btn-transition w-100 mt-4">Get started</a>
                                </div>

                                <!-- Card footer -->
                                <div class="card-footer bg-secondary bg-opacity-50 p-4">
                                    <!-- List -->
                                    <ul class="list-group list-group-borderless mb-0">
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Up to 05 users monthly</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Free 5 host domain</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Google docs style editors</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Support for 30+ languages</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Pricing item -->
                        <div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
                            <div class="card shadow overflow-hidden p-1">
                                <!-- Card header -->
                                <div class="card-header bg-secondary bg-opacity-50 p-4 pb-0">
                                    <!-- Icon -->
                                    <div class="icon-lg bg-body shadow-primary rounded-circle mb-3">
                                        <i class="bi bi-send-fill fa-lg lh-1 heading-color"></i>
                                    </div>
                                    <!-- Title and price -->
                                    <h6 class="mb-3">Standard plan</h6>
                                    <p class="mb-0"> <span class="h2 mb-0 plan-price" data-monthly-price="$59" data-annual-price="$45">$59</span> /month</p>
                                    <small>Basic feature for up to 50 users</small>
                                    <!-- Button -->
                                    <a href="#" class="btn btn-dark btn-transition w-100 mt-4">Get started</a>
                                </div>

                                <!-- Card footer -->
                                <div class="card-footer bg-secondary bg-opacity-50 p-4">
                                    <!-- List -->
                                    <ul class="list-group list-group-borderless mb-0">
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Up to 20 users monthly</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Free 12 host domain</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Google docs style editors</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Support for 30+ languages</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Landing pages Web widgets</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Customizable features</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Pricing item -->
                        <div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
                            <div class="card shadow p-1">
                                <!-- Badge -->
                                <div class="bg-primary-grad small text-white rounded position-absolute top-0 start-50 translate-middle px-3 py-1">Recommended</div>

                                <!-- Card header -->
                                <div class="card-header bg-secondary-grad rounded-top p-4 pb-0">
                                    <!-- Icon -->
                                    <div class="icon-lg bg-pink rounded-circle mb-3">
                                        <i class="bi bi-rocket-takeoff-fill fa-lg lh-1 text-white"></i>
                                    </div>
                                    <!-- Title and price -->
                                    <h6 class="mb-3">Enterprise plan</h6>
                                    <p class="mb-0"> <span class="h2 mb-0 plan-price" data-monthly-price="$99" data-annual-price="$75">$99</span> /month</p>
                                    <small>Basic feature for up to 80 users</small>
                                    <!-- Button -->
                                    <a href="#" class="btn btn-white-shadow w-100 mt-4">Get started</a>
                                </div>

                                <!-- Card footer -->
                                <div class="card-footer bg-secondary-grad p-4">
                                    <!-- List -->
                                    <ul class="list-group list-group-borderless mb-0">
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Up to 50 users monthly</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Free 25 host domain</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Google docs style editors</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Support for 30+ languages</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Landing pages Web widgets</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Customizable features</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>24/7 dedicated Support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Pricing item -->
                        <div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
                            <div class="card shadow overflow-hidden p-1">
                                <!-- Card header -->
                                <div class="card-header bg-secondary bg-opacity-50 position-relative overflow-hidden p-4 pb-0">
                                    <!-- Blur decoration -->
                                    <div class="position-absolute top-0 end-0 mt-n8 me-n5">
                                        <img src="assets/images/elements/grad-shape/blur-decoration.svg" class="blur-7 opacity-2 h-300px" alt="Grad shape">
                                    </div>
                                    <!-- Icon -->
                                    <div class="icon-lg bg-body shadow-primary rounded-circle mb-3">
                                        <i class="bi bi-headset fa-lg lh-1 heading-color"></i>
                                    </div>
                                    <!-- Title and price -->
                                    <h6 class="mb-3">Business plan</h6>
                                    <h2>Custom</h2>
                                    <small>Customize feature according to users</small>
                                    <!-- Button -->
                                    <a href="#" class="btn btn-dark btn-transition w-100 mt-4">Request pricing</a>
                                </div>

                                <!-- Card footer -->
                                <div class="card-footer bg-secondary bg-opacity-50 p-4">
                                    <!-- List -->
                                    <ul class="list-group list-group-borderless mb-0">
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Unlimited projects</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Custom reporting and analytics</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Dedicated account manager</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Tailored support and consulting</li>
                                        <li class="list-group-item d-flex heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Customizable features</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pricing box END -->
        </section>
        <!-- =======================
Hero END -->

        <!-- =======================
Compare table START -->
        <section class="pt-0 position-relative">
            <!-- Rocket decoration -->
            <div class="position-absolute end-0 top-0 mt-n7 me-6 d-none d-md-block">
                <img src="assets/images/elements/rocket-03.png" class="h-200px" alt="rocket image">
            </div>

            <div class="container">
                <!-- Title -->
                <h2 class="text-center mb-0">Compare plan</h2>
                <!-- Compare table START -->
                <div class="table-responsive-xl mt-2 mt-md-5">
                    <table class="table table-striped table-borderless align-middle">
                        <!-- Head START -->
                        <thead class="align-middle">
                            <tr>
                                <th scope="col">
                                    <p class="mb-0 fs-5 heading-color">Features</p>
                                </th>

                                <th scope="col">
                                    <div class="text-center p-3">
                                        <p class="mb-3 heading-color">Basic plan</p>
                                        <a href="#" class="btn btn-sm btn-outline-primary mb-0">Get started</a>
                                    </div>
                                </th>

                                <th scope="col">
                                    <div class="text-center p-3">
                                        <p class="mb-3 heading-color">Standard plan</p>
                                        <a href="#" class="btn btn-sm btn-outline-primary mb-0">Get started</a>
                                    </div>
                                </th>

                                <th scope="col">
                                    <div class="text-center p-3">
                                        <p class="mb-3 heading-color">Enterprise plan</p>
                                        <a href="#" class="btn btn-sm btn-outline-primary mb-0">Get started</a>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <!-- Head END -->

                        <!-- Body START -->
                        <tbody class="border-top-0">
                            <!-- Item -->
                            <tr>
                                <th scope="row"><span class="fw-normal heading-color ps-lg-4 mb-0">Storage space</span></th>
                                <td class="text-center"> 40GB </td>
                                <td class="text-center"> 60GB </td>
                                <td class="text-center"> Unlimited </td>
                            </tr>

                            <!-- Item -->
                            <tr>
                                <th scope="row"><span class="fw-normal heading-color ps-lg-4 mb-0">Cloud connected</span></th>
                                <td class="text-center"> Yes </td>
                                <td class="text-center"> Yes </td>
                                <td class="text-center"> Yes </td>
                            </tr>

                            <!-- Item -->
                            <tr>
                                <th scope="row"><span class="fw-normal heading-color ps-lg-4 mb-0">Coding tools</span></th>
                                <td class="text-center text-success"> <i class="bi bi-check-circle fa-lg"></i> </td>
                                <td class="text-center text-success"> <i class="bi bi-check-circle fa-lg"></i> </td>
                                <td class="text-center text-success"> <i class="bi bi-check-circle fa-lg"></i> </td>
                            </tr>

                            <!-- Item -->
                            <tr>
                                <th scope="row"><span class="fw-normal heading-color ps-lg-4 mb-0">Advance debugging</span></th>
                                <td class="text-center text-success"> <i class="bi bi-check-circle fa-lg"></i> </td>
                                <td class="text-center text-success"> <i class="bi bi-check-circle fa-lg"></i> </td>
                                <td class="text-center text-success"> <i class="bi bi-check-circle fa-lg"></i> </td>
                            </tr>

                            <!-- Item -->
                            <tr>
                                <th scope="row"><span class="fw-normal heading-color ps-lg-4 mb-0">Mobile apps</span></th>
                                <td class="text-center text-danger"> <i class="bi bi-x-circle fa-lg"></i> </td>
                                <td class="text-center text-success"> <i class="bi bi-check-circle fa-lg"></i> </td>
                                <td class="text-center text-success"> <i class="bi bi-check-circle fa-lg"></i></td>
                            </tr>

                            <!-- Item -->
                            <tr>
                                <th scope="row"><span class="fw-normal heading-color ps-lg-4 mb-0">Web tools</span></th>
                                <td class="text-center text-danger"> <i class="bi bi-x-circle fa-lg"></i> </td>
                                <td class="text-center text-success"> <i class="bi bi-check-circle fa-lg"></i> </td>
                                <td class="text-center text-success"> <i class="bi bi-check-circle fa-lg"></i></td>
                            </tr>

                            <!-- Item -->
                            <tr>
                                <th scope="row"><span class="fw-normal heading-color ps-lg-4 mb-0">Version control</span></th>
                                <td class="text-center text-danger"> <i class="bi bi-x-circle fa-lg"></i> </td>
                                <td class="text-center text-success"> <i class="bi bi-check-circle fa-lg"></i> </td>
                                <td class="text-center text-success"> <i class="bi bi-check-circle fa-lg"></i> </td>
                            </tr>

                            <!-- Item -->
                            <tr>
                                <th scope="row"><span class="fw-normal heading-color ps-lg-4 mb-0">Security</span></th>
                                <td class="text-center text-danger"> <i class="bi bi-x-circle fa-lg"></i> </td>
                                <td class="text-center text-danger"> <i class="bi bi-x-circle fa-lg"></i> </td>
                                <td class="text-center text-success"> <i class="bi bi-check-circle fa-lg"></i> </td>
                            </tr>

                            <!-- Item -->
                            <tr>
                                <th scope="row"><span class="fw-normal heading-color ps-lg-4 mb-0">Team access</span></th>
                                <td class="text-center text-danger"> <i class="bi bi-x-circle fa-lg"></i> </td>
                                <td class="text-center text-danger"> <i class="bi bi-x-circle fa-lg"></i> </td>
                                <td class="text-center text-success"> <i class="bi bi-check-circle fa-lg"></i> </td>
                            </tr>

                        </tbody>
                        <!-- Body END -->
                    </table>
                </div>
                <!-- Compare table END -->

                <!-- Clients START -->
                <div class="row g-4 align-items-center mt-6">
                    <!-- Title -->
                    <div class="col-lg-3">
                        <div class="d-flex align-items-center justify-content-center justify-content-lg-start">
                            <h6 class="mb-0">Trusted by leading companies</h6>
                            <div class="vr bg-primary-grad opacity-1 d-none d-lg-block"></div>
                        </div>
                    </div>

                    <!-- Logos -->
                    <div class="col-lg-9">
                        <!-- Slider START -->
                        <div class="swiper" data-swiper-options='{
					"slidesPerView": 2,
					"spaceBetween": 50,
					"breakpoints": {
						"576": {"slidesPerView": 3},
						"768": {"slidesPerView": 4},
						"1200": {"slidesPerView": 5}
					}}'>

                            <!-- Slider items -->
                            <div class="swiper-wrapper align-items-center">
                                <!-- Image -->
                                <div class="swiper-slide">
                                    <div class="swap-logo">
                                        <img src="assets/images/client/logo-gray/01.svg" class="p-2 p-lg-3" alt="client-img">
                                        <div class="swap-item">
                                            <img src="assets/images/client/logo-light/01.svg" class="dark-mode-item p-2 p-lg-3" alt="client logo">
                                            <img src="assets/images/client/logo-dark/01.svg" class="light-mode-item p-2 p-lg-3" alt="client logo">
                                        </div>
                                    </div>
                                </div>
                                <!-- Image -->
                                <div class="swiper-slide">
                                    <div class="swap-logo">
                                        <img src="assets/images/client/logo-gray/02.svg" class="p-2 p-lg-3" alt="client-img">
                                        <div class="swap-item">
                                            <img src="assets/images/client/logo-light/02.svg" class="dark-mode-item p-2 p-lg-3" alt="client logo">
                                            <img src="assets/images/client/logo-dark/02.svg" class="light-mode-item p-2 p-lg-3" alt="client logo">
                                        </div>
                                    </div>
                                </div>
                                <!-- Image -->
                                <div class="swiper-slide">
                                    <div class="swap-logo">
                                        <img src="assets/images/client/logo-gray/03.svg" class="p-2 p-lg-3" alt="client-img">
                                        <div class="swap-item">
                                            <img src="assets/images/client/logo-light/03.svg" class="dark-mode-item p-2 p-lg-3" alt="client logo">
                                            <img src="assets/images/client/logo-dark/03.svg" class="light-mode-item p-2 p-lg-3" alt="client logo">
                                        </div>
                                    </div>
                                </div>
                                <!-- Image -->
                                <div class="swiper-slide">
                                    <div class="swap-logo">
                                        <img src="assets/images/client/logo-gray/04.svg" class="p-2 p-lg-3" alt="client-img">
                                        <div class="swap-item">
                                            <img src="assets/images/client/logo-light/04.svg" class="dark-mode-item p-2 p-lg-3" alt="client logo">
                                            <img src="assets/images/client/logo-dark/04.svg" class="light-mode-item p-2 p-lg-3" alt="client logo">
                                        </div>
                                    </div>
                                </div>
                                <!-- Image -->
                                <div class="swiper-slide">
                                    <div class="swap-logo">
                                        <img src="assets/images/client/logo-gray/05.svg" class="p-2 p-lg-3" alt="client-img">
                                        <div class="swap-item">
                                            <img src="assets/images/client/logo-light/05.svg" class="dark-mode-item p-2 p-lg-3" alt="client logo">
                                            <img src="assets/images/client/logo-dark/05.svg" class="light-mode-item p-2 p-lg-3" alt="client logo">
                                        </div>
                                    </div>
                                </div>
                                <!-- Image -->
                                <div class="swiper-slide">
                                    <div class="swap-logo">
                                        <img src="assets/images/client/logo-gray/06.svg" class="p-2 p-lg-3" alt="client-img">
                                        <div class="swap-item">
                                            <img src="assets/images/client/logo-light/06.svg" class="dark-mode-item p-2 p-lg-3" alt="client logo">
                                            <img src="assets/images/client/logo-dark/06.svg" class="light-mode-item p-2 p-lg-3" alt="client logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider END -->
                    </div>
                </div>
                <!-- Clients END -->
            </div>
        </section>
        <!-- =======================
Compare table END -->

        <!-- =======================
 Faq START -->
        <section class="bg-secondary bg-opacity-75">
            <div class="container">

                <!-- Title -->
                <div class="inner-container position-relative text-center mb-4 mb-md-5">
                    <h2 class="mb-0">Have questions? (FAQs)</h2>
                </div>

                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- Accordion START -->
                        <div class="accordion accordion-bg-body-light" id="accordionFaq">
                            <!-- Item -->
                            <div class="accordion-item mb-4">
                                <div class="accordion-header font-base" id="heading-1">
                                    <button class="accordion-button fw-semibold rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
								What payment methods do you accept?
							        </button>
                                </div>
                                <!-- Body -->
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body pt-0 pt-0">
                                        We accept all major credit cards, PayPal, and bank transfers for custom plans. Our expert team will turn your concept into a working prototype within 24 hours, ensuring rapid progress and immediate feedback.
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item mb-4">
                                <div class="accordion-header font-base" id="heading-2">
                                    <button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
								Can I change my plan later?
							</button>
                                </div>
                                <!-- Body -->
                                <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body pt-0">
                                        Yes, you can upgrade or downgrade your plan at any time from your account settings. We provide a range of tools, guides, and best practices to help you create designs, websites.
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item mb-4">
                                <div class="accordion-header font-base" id="heading-3">
                                    <button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
								Is there a free trial available?
							</button>
                                </div>
                                <!-- Body -->
                                <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body pt-0">
                                        Yes, we offer a 14-day free trial for our Basic and Standard plans. No credit card required.
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item mb-4">
                                <div class="accordion-header font-base" id="heading-4">
                                    <button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
								How does customer support work?
							</button>
                                </div>
                                <!-- Body -->
                                <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body pt-0">
                                        Our Basic plan includes email support, while the Standard and Custom plans offer priority email and dedicated account manager support, respectively.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion END -->

                        <!-- CTA text -->
                        <p class="heading-color text-center">Need help? Our team is ready to assist you. Start a chat for quick support. <a href="#" class="hover-underline-animation fw-semibold">Talk to Us</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
 Faq END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

@endsection
