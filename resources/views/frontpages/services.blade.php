@extends('layout.mainfrontpage')
@section('contant')

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Hero START -->
        <section class="bg-secondary-grad position-relative pt-xl-8 overflow-hidden">
            <!-- Curve decoration -->
            <span>
		<svg class="position-absolute bottom-0 start-0 mb-n3 z-index-2" viewBox="0 0 1950 178" style="enable-background:new 0 0 1950 178;">
			<path class="fill-body" d="M1480.3,21.8c238.7-17.4,359.6,39,469.7,74.4V178H0v-54.2V4.4c57.3,38.5,287.7,14.6,446.4,0 c170.6-15.7,342.3,14.5,440.8,33C1104,78,1274.8,36.9,1480.3,21.8z"/>
		</svg>
	</span>
            <!-- Patten decoration -->
            <div class="position-absolute end-0 top-0 rotate-180 mt-n5 me-n9">
                <img src="{{ asset('assets/images/elements/geo-grad-pattern.svg') }}" class="h-700px opacity-1" alt="bg pattern">
            </div>
            <!-- Patten decoration -->
            <div class="position-absolute start-0 bottom-0 mb-8 ms-n7">
                <img src="{{ asset('assets/images/elements/geo-grad-pattern.svg') }}" class="h-400px opacity-1" alt="bg pattern">
            </div>

            <!-- Grad blur -->
            <div class="position-absolute top-0 start-50 mt-n9 ms-n9">
                <img src="{{ asset('assets/images/elements/grad-shape/blur-decoration.svg') }}" class="blur-8 opacity-1" alt="Grad shape">
            </div>

            <div class="container position-relative pt-4 pt-sm-5 pb-5 pb-lg-8">
                <!-- Breadcrumb -->
{{--                <nav class="mb-2 d-flex justify-content-center" aria-label="breadcrumb">--}}
{{--                    <ol class="breadcrumb pt-0">--}}
{{--                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>--}}
{{--                        <li class="breadcrumb-item active" aria-current="page">Services</li>--}}
{{--                    </ol>--}}
{{--                </nav>--}}

                <!-- Title -->
{{--                <h1 class="mb-4 text-center">Our Services</h1>--}}

                <!-- Services START -->
{{--                <div class="row">--}}
{{--                    <div class="col-xl-10 mx-auto">--}}
{{--                        <div class="row g-4 g-lg-5">--}}

{{--                            <!-- Service item START -->--}}
{{--                            <div class="col-xl-11">--}}
{{--                                <div class="card card-hover-shadow card-hover-transition shadow-primary-sm bg-body bg-opacity-75 bg-blur rounded-4 p-3 p-lg-4">--}}
{{--                                    <div class="row g-0">--}}
{{--                                        <div class="col-md-5">--}}
{{--                                            <!-- Image -->--}}
{{--                                            <img src="assets/images/services/4by3/01.jpg" class="card-img mb-3 mb-md-0" alt="...">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-7">--}}
{{--                                            <!-- Content -->--}}
{{--                                            <div class="card-body d-flex flex-column h-100 px-2 px-md-4 py-0 py-md-2">--}}
{{--                                                <!-- Title -->--}}
{{--                                                <h5 class="card-title">Digital marketing solutions</h5>--}}
{{--                                                <p class="card-text">Digital marketing is the art and science of reaching, and influencing through online channels.</p>--}}

{{--                                                <!-- List -->--}}
{{--                                                <ul class="list-inline d-flex flex-wrap gap-2 mb-3">--}}
{{--                                                    <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>SEO marketing</li>--}}
{{--                                                    <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Data scraping</li>--}}
{{--                                                    <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Facebook marketing</li>--}}
{{--                                                    <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Email marketing</li>--}}
{{--                                                    <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Social marketing</li>--}}
{{--                                                </ul>--}}

{{--                                                <!-- Button link -->--}}
{{--                                                <a class="icon-link icon-link-hover stretched-link mt-auto" href="service-single.html">View detail<i class="bi bi-arrow-right"></i> </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Service item END -->--}}

{{--                            <!-- Service item START -->--}}
{{--                            <div class="col-xl-11 ms-auto">--}}
{{--                                <div class="card card-hover-shadow card-hover-transition shadow-primary-sm bg-body bg-opacity-75 bg-blur rounded-4 p-3 p-lg-4">--}}
{{--                                    <div class="row g-0">--}}
{{--                                        <div class="col-md-5">--}}
{{--                                            <!-- Image -->--}}
{{--                                            <img src="assets/images/services/4by3/02.jpg" class="card-img mb-3 mb-md-0" alt="...">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-7">--}}
{{--                                            <!-- Content -->--}}
{{--                                            <div class="card-body d-flex flex-column h-100 px-2 px-md-4 py-0 py-md-2">--}}
{{--                                                <!-- Title -->--}}
{{--                                                <h5 class="card-title">Brand strategy & identity</h5>--}}
{{--                                                <p class="card-text">Develop comprehensive brand strategies including market research, positioning.</p>--}}

{{--                                                <!-- List -->--}}
{{--                                                <ul class="list-inline d-flex flex-wrap gap-2 mb-3">--}}
{{--                                                    <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Logo design</li>--}}
{{--                                                    <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Brand strategy</li>--}}
{{--                                                    <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Visual identity</li>--}}
{{--                                                    <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Video animation</li>--}}
{{--                                                </ul>--}}

{{--                                                <!-- Button link -->--}}
{{--                                                <a class="icon-link icon-link-hover stretched-link mt-auto" href="service-single.html">View detail<i class="bi bi-arrow-right"></i> </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Service item END -->--}}

{{--                            <!-- Service item START -->--}}
{{--                            <div class="col-xl-11">--}}
{{--                                <div class="card card-hover-shadow card-hover-transition card-img-scale shadow-primary-sm bg-body bg-opacity-50 bg-blur rounded-4 p-3 p-lg-4">--}}
{{--                                    <div class="row g-0">--}}
{{--                                        <div class="col-md-5">--}}
{{--                                            <!-- Image -->--}}
{{--                                            <img src="assets/images/services/4by3/03.jpg" class="card-img mb-3 mb-md-0" alt="...">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-7">--}}
{{--                                            <!-- Content -->--}}
{{--                                            <div class="card-body d-flex flex-column h-100 px-2 px-md-4 py-0 py-md-2">--}}
{{--                                                <!-- Title -->--}}
{{--                                                <h5 class="card-title">Web design & development</h5>--}}
{{--                                                <p class="card-text">Provide ongoing maintenance, updates, and technical support to ensure websites.</p>--}}

{{--                                                <!-- List -->--}}
{{--                                                <ul class="list-inline d-flex flex-wrap gap-2 mb-3">--}}
{{--                                                    <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Custom website design</li>--}}
{{--                                                    <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>E-commerce solutions</li>--}}
{{--                                                    <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Maintenance and support</li>--}}
{{--                                                </ul>--}}

{{--                                                <!-- Button link -->--}}
{{--                                                <a class="icon-link icon-link-hover stretched-link mt-auto" href="service-single.html">View detail<i class="bi bi-arrow-right"></i> </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Service item END -->--}}

{{--                            <!-- Service item START -->--}}
{{--                            <div class="col-xl-11 ms-auto">--}}
{{--                                <div class="card card-hover-shadow card-hover-transition shadow-primary-sm bg-body bg-opacity-75 bg-blur rounded-4 p-3 p-lg-4">--}}
{{--                                    <div class="row g-0">--}}
{{--                                        <div class="col-md-5">--}}
{{--                                            <!-- Image -->--}}
{{--                                            <img src="assets/images/services/4by3/04.jpg" class="card-img mb-3 mb-md-0" alt="...">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-7">--}}
{{--                                            <!-- Content -->--}}
{{--                                            <div class="card-body d-flex flex-column h-100 px-2 px-md-4 py-0 py-md-2">--}}
{{--                                                <!-- Title -->--}}
{{--                                                <h5 class="card-title">Database analysis</h5>--}}
{{--                                                <p class="card-text">DImplement systems for collecting data from various sources to ensure accuracy and reliability.</p>--}}

{{--                                                <!-- List -->--}}
{{--                                                <ul class="list-inline d-flex flex-wrap gap-2 mb-3">--}}
{{--                                                    <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Data collection</li>--}}
{{--                                                    <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Data management</li>--}}
{{--                                                    <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Reporting</li>--}}
{{--                                                    <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Visualization</li>--}}
{{--                                                </ul>--}}

{{--                                                <!-- Button link -->--}}
{{--                                                <a class="icon-link icon-link-hover stretched-link mt-auto" href="service-single.html">View detail<i class="bi bi-arrow-right"></i> </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Service item END -->--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- Services END -->

                <div class="row">
                    <div class="col-md-6">
                        <h2>Website Design <br> And Development</h2>
                        <p>At Every Step of Your Web Design and Development Process, We Can Help</p>

                        <div class="details mt-5">
                            <p>Beautiful websites, affordable prices, custom, distinctive, and consistently trending web designs</p>

                            <p>We offer a wide range of web services, including premium custom website design, website development, and search marketing, to small and medium-sized businesses. Our clientele includes large, well-known companies as well as tiny start-ups. In the same way that we have helped our clients, we will help your business perform better.</p>

                            <p>We guarantee 100% client satisfaction by setting our prices at incredibly competitive levels and offering unlimited design revisions with every website we create. We firmly think that we have the ideal balance between price and quality. If you want an inexpensive website that converts visitors into customers, we are the best option.</p>
                        </div>
                        <a class="btn btn-dark icon-link mt-4 icon-link-hover" href="{{ route('contact') }}">Contact Us<i class="bi bi-arrow-right"></i> </a>

                    </div>
                    <div class="col-md-6">
                        <div class="bg-secondary bg-opacity-50 rounded-4">
                            <img src="{{ asset('assets/images/services/web-service.webp') }}" class="rounded-2 border-3 " alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Hero END -->

        <!-- =======================
Step START -->
        <section class="pt-md-0 overflow-hidden">
            <div class="container">
                <!-- Title -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-9">
                        <h5 class="text-center text-primary mb-2">Why CHoose Us</h5>
                        <h2 class="text-center mb-6">We Can Assist You Throughout the Whole Web Design and Development Process</h2>
                    </div>
                </div>
                <div class="row position-relative g-6 g-lg-7">
                    <!-- Step item -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-lg bg-primary rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">01</div>
                            <!-- Info -->
                            <h6 class="mt-4">Custom Solutions</h6>
                            <p class="mb-0">We customize every website to fit your unique needs and objectives.</p>
                        </div>
                    </div>

                    <!-- Step item -->
                    <div class="col-md-4">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-lg bg-pink rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">02</div>
                            <!-- Info -->
                            <h6 class="mt-4">Responsive Design</h6>
                            <p class="mb-0">On all devices, your website will function and look perfect.</p>
                        </div>
                    </div>

                    <!-- Step item -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-lg bg-purple rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">03</div>
                            <!-- Info -->
                            <h6 class="mt-4">User-Centric Approach</h6>
                            <p class="mb-0">The user experience is our top priority in order to retain visitors and turn them into paying customers.</p>
                        </div>
                    </div>
                </div>
                <!-- Row END -->
            </div>
        </section>
        <!-- =======================
Step END -->

        <!-- =======================
Left right content START -->
        <section class="py-0">
            <div class="container">
                <div class="row align-items-center align-items-xl-end">
                    <!-- Content START -->
                    <div class="col-md-6 mb-9 mb-md-0">
                        <h2 class="mb-4">We have a strong commitment to using innovative communications to  <span class="text-primary">solve issues.</span></h2>
                        <p class="mb-3">Our integration solutions facilitate smooth collaboration and help you achieve project goals efficiently.</p>
                        <!-- List -->
                        <ul class="list-group list-group-borderless mb-4">
                            <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>We create websites from the ground up to meet your specific business requirements.</li>
                            <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>Future expansion is possible with our adaptable and scalable custom solutions.</li>
                            <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>Open a robust online store with safe payment methods.</li>
                            <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>We offer simple product management and conversion optimization.</li>
                            <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>A user-friendly CMS makes it simple to manage and update your website.</li>
                            <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>Integrate iOS and Android mobile apps to increase your reach.</li>
                            <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>Create a seamless user experience across platforms.</li>
                        </ul>
                        <!-- Button -->
                        <a class="btn btn-dark icon-link icon-link-hover" href="{{ route('contact') }}">Contact Us<i class="bi bi-arrow-right"></i> </a>
                    </div>
                    <!-- Content END -->

                    <!-- Image -->
                    <div class="col-md-6 ms-auto">
                        <div class="bg-secondary bg-opacity-50 rounded-4">
                            <img src="{{ asset('assets/images/services/app_devdelop.png') }}" class="rounded-3" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Left right content END -->

        <!-- =======================
Contact us START-->
        <section class="pb-0 overflow-hidden">
            <div class="bg-secondary-grad position-relative pb-8">
                <!-- Skew bg decoration -->
                <span>
			<svg class="position-abslolute top-0 start-0 mt-n3 mt-sm-n1" viewBox="0 0 1920 108" style="enable-background:new 0 0 1920 108;" xml:space="preserve">
				<path class="fill-body" d="M0,0l1920,1.5V108L0,0z"/>
			</svg>
		</span>

                <div class="container position-relative pt-5 pt-lg-0">
                    <div class="row align-items-center  mt-3 g-4">
                        <h2>Helpful Answers to Your <br> Questions</h2>
                        <div class="accordion pt-2" id="">
                            <div class="accordion-item ">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is website design and development, and why do I need it for my business?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>While development concentrates on coding and constructing the website's functionality, design entails creating the visual layout and appearance of a website. In order to create an online presence, interact with your audience, and accomplish your business objectives, you need both.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        For what kinds of websites do you offer design and development services?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We provide design and development services for a range of website types, such as custom web applications, blogs, portfolio sites, e-commerce sites, business websites, and content management systems (CMS).
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How is the design and development process for your website carried out?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Design, development, testing, launch, and discovery and planning are all common steps in our process. To make sure your website complements your goals and brand identity, we work closely with you.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                        Can you redesign an existing website or work with preexisting designs?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Absolutely, in order to improve the user experience and achieve your objectives, we can either work with your current designs to make them better or offer a total redesign.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                        Do you offer responsive web design so that websites function properly on a variety of screens and devices?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        To guarantee that your website works flawlessly across a range of devices, including desktops, tablets, and smartphones, we specialize in responsive web design.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                        Do you offer continuing support and upkeep for websites?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        To keep your website current, safe, and operating at its best, we do provide regular maintenance and support services. We also quickly fix any problems or glitches.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                                        What sets your website design and development services apart from competitors?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Our services stand out because we have a team of experienced people, work together, pay attention to detail, and are dedicated to making websites that not only look great but also give users great experiences and results.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Contact us END-->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

@endsection

