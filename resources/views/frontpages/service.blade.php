

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
{{--            <nav class="mb-2 d-flex justify-content-center" aria-label="breadcrumb">--}}
{{--                <ol class="breadcrumb pt-0">--}}
{{--                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>--}}
{{--                    <li class="breadcrumb-item active" aria-current="page">Services</li>--}}
{{--                </ol>--}}
{{--            </nav>--}}

            <!-- Title -->
            <h1 class="mb-4 text-center">Our <span class="text-primary-grad"> Services </span> </h1>

            <!-- Services START -->
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <div class="row g-4 g-lg-5">


                        <!-- Service item START -->
                        <div class="col-xl-11">
                            <div class="card card-hover-shadow card-hover-transition card-img-scale shadow-primary-sm bg-body bg-opacity-50 bg-blur rounded-4 p-3 p-lg-4">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <!-- Image -->
                                        <img src="{{ asset('assets/images/services/web.jpg') }}" class="card-img mb-3 mb-md-0" alt="...">
                                    </div>
                                    <div class="col-md-7">
                                        <!-- Content -->
                                        <div class="card-body d-flex flex-column h-100 px-2 px-md-4 py-0 py-md-2">
                                            <!-- Title -->
                                            <h5 class="card-title">Web design & development</h5>
                                            <p class="card-text">Provide ongoing maintenance, updates, and technical support to ensure websites.</p>

                                            <!-- List -->
                                            <ul class="list-inline d-flex flex-wrap gap-2 mb-3">
                                                <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Custom website design</li>
                                                <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>E-commerce solutions</li>
                                                <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Maintenance and support</li>
                                            </ul>

                                            <!-- Button link -->
                                            <a class="icon-link icon-link-hover stretched-link mt-auto" href="{{ route('services') }}">View detail<i class="bi bi-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service item END -->

                        <!-- Service item START -->
                        <div class="col-xl-11 ms-auto">
                            <div class="card card-hover-shadow card-hover-transition shadow-primary-sm bg-body bg-opacity-75 bg-blur rounded-4 p-3 p-lg-4">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <!-- Image -->
                                        <img src="{{ asset('assets/images/services/pos.jpg') }}" class="card-img mb-3 mb-md-0" alt="...">
                                    </div>
                                    <div class="col-md-7">
                                        <!-- Content -->
                                        <div class="card-body d-flex flex-column h-100 px-2 px-md-4 py-0 py-md-2">
                                            <!-- Title -->
                                            <h5 class="card-title">POS </h5>
                                            <p class="card-text">Our POS system collects data from multiple sources to ensure accurate, real-time information.
                                                It enhances decision-making by providing reliable insights into sales, inventory, and customer activity.
                                            </p>

                                            <!-- List -->
                                            <ul class="list-inline d-flex flex-wrap gap-2 mb-3">
                                                <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Inventory Management</li>
                                                <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Sales & Billing</li>
                                                <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Reports & Analytics</li>
                                                <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Customer Tracking</li>
                                            </ul>

                                            <!-- Button link -->
                                            <a class="icon-link icon-link-hover stretched-link mt-auto" href="{{ route('pos') }}">View detail<i class="bi bi-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service item END -->




                        <!-- Service item START -->
                        <div class="col-xl-11">
                            <div class="card card-hover-shadow card-hover-transition card-img-scale shadow-primary-sm bg-body bg-opacity-50 bg-blur rounded-4 p-3 p-lg-4">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <!-- Image -->
                                        <img src="{{ asset('assets/images/services/crm.jpg') }}" class="card-img mb-3 mb-md-0" alt="...">
                                    </div>
                                    <div class="col-md-7">
                                        <!-- Content -->
                                        <div class="card-body d-flex flex-column h-100 px-2 px-md-4 py-0 py-md-2">
                                            <!-- Title -->
                                            <h5 class="card-title">CRM</h5>
                                            <p class="card-text">Our CRM system gathers data from emails, calls, forms, and social platforms to ensure accurate customer records.
                                                It improves engagement and decision-making through centralized, reliable client insights.</p>

                                            <!-- List -->
                                            <ul class="list-inline d-flex flex-wrap gap-2 mb-3">
                                                <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Contact & Lead Management</li>
                                                <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Email & Call Integration</li>
                                                <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Pipeline & Deal Tracking</li>
                                                <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Reports & Customer Insights</li>
                                            </ul>

                                            <!-- Button link -->
                                            <a class="icon-link icon-link-hover stretched-link mt-auto" href="{{ route('crm') }}">View detail<i class="bi bi-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service item END -->

                        <!-- Service item START -->
                        <div class="col-xl-11 ms-auto">
                            <div class="card card-hover-shadow card-hover-transition shadow-primary-sm bg-body bg-opacity-75 bg-blur rounded-4 p-3 p-lg-4">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <!-- Image -->
                                        <img src="{{ asset('assets/images/services/api.jpg') }}" class="card-img mb-3 mb-md-0" alt="...">
                                    </div>
                                    <div class="col-md-7">
                                        <!-- Content -->
                                        <div class="card-body d-flex flex-column h-100 px-2 px-md-4 py-0 py-md-2">
                                            <!-- Title -->
                                            <h5 class="card-title">API</h5>
                                            <p class="card-text">
                                                Our system integrates with third-party APIs to sync data across platforms seamlessly and in real time.
                                                It enhances workflow automation, reduces manual effort, and ensures consistent data flow between systems.
                                            </p>

                                            <!-- List -->
                                            <ul class="list-inline d-flex flex-wrap gap-2 mb-3">
                                                <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Third-Party Service Integration</li>
                                                <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Payment Gateway Connectivity</li>
                                                <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Webhook & API Authentication</li>
{{--                                                <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Customer Tracking</li>--}}
                                            </ul>

                                            <!-- Button link -->
                                            <a class="icon-link icon-link-hover stretched-link mt-auto" href="{{ route('services.api') }}">View detail<i class="bi bi-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service item END -->


                        <!-- Service item START -->
                        <div class="col-xl-11">
                            <div class="card card-hover-shadow card-hover-transition card-img-scale shadow-primary-sm bg-body bg-opacity-50 bg-blur rounded-4 p-3 p-lg-4">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <!-- Image -->
                                        <img src="{{ asset('assets/images/services/app.jpg') }}" class="card-img mb-3 mb-md-0" alt="...">
                                    </div>
                                    <div class="col-md-7">
                                        <!-- Content -->
                                        <div class="card-body d-flex flex-column h-100 px-2 px-md-4 py-0 py-md-2">
                                            <!-- Title -->
                                            <h5 class="card-title">Mobile APP Development</h5>
                                            <p class="card-text">
                                                We build custom mobile and web apps tailored to your business needs, ensuring performance and scalability.
                                                Our solutions offer intuitive interfaces, secure architecture, and seamless user experiences across devices.
                                            </p>

                                            <!-- List -->
                                            <ul class="list-inline d-flex flex-wrap gap-2 mb-3">
                                                <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Android & iOS App Development</li>
                                                <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Cross-Platform Compatibility</li>
                                                <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>UI/UX Design & Prototyping</li>
                                                <li class="list-inline-item heading-color"> <i class="bi bi-check-circle text-success me-1"></i>Backend Integration & APIs</li>
                                            </ul>

                                            <!-- Button link -->
                                            <a class="icon-link icon-link-hover stretched-link mt-auto" href="{{ route('app.development') }}">View detail<i class="bi bi-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service item END -->

                    </div>
                </div>
            </div>
            <!-- Services END -->
        </div>
    </section>
    <!-- =======================
Hero END -->

    <!-- =======================
Step START -->
    <section class="pt-md-0 overflow-hidden">
        <div class="container">
            <!-- Title -->
            <h2 class="text-center mb-6">Our workflow</h2>

            <div class="row position-relative g-6 g-lg-7">
                <!-- Step item -->
                <div class="col-md-4 mt-md-8">
                    <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                        <!-- number -->
                        <div class="icon-lg bg-primary rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">01</div>
                        <!-- Info -->
                        <h6 class="mt-4">Initial consultation</h6>
                        <p class="mb-0">An initial meeting to understand your vision and objectives.</p>
                    </div>
                </div>

                <!-- Step item -->
                <div class="col-md-4">
                    <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                        <!-- number -->
                        <div class="icon-lg bg-pink rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">02</div>
                        <!-- Info -->
                        <h6 class="mt-4">Development and Execution</h6>
                        <p class="mb-0">We begin development and execution based on the agreed plan.</p>
                    </div>
                </div>

                <!-- Step item -->
                <div class="col-md-4 mt-md-8">
                    <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                        <!-- number -->
                        <div class="icon-lg bg-purple rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">03</div>
                        <!-- Info -->
                        <h6 class="mt-4"> Review and Delivery</h6>
                        <p class="mb-0">Post-delivery support to ensure a smooth transition and continued success</p>
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
                <div class="col-md-5 mb-9 mb-md-0">
                    <h2 class="mb-4">Integrate with a wide range of <span class="text-primary">projects</span></h2>
                    <p class="mb-3">Our integration solutions facilitate smooth collaboration and help you achieve project goals efficiently.</p>
                    <!-- List -->
                    <ul class="list-group list-group-borderless mb-4">
                        <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>Expand your reach</li>
                        <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>Exceptional integration</li>
                        <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>Extensive project connectivity</li>
                        <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>Connect and Collaborate</li>
                    </ul>
                    <!-- Button -->
                    <a class="btn btn-dark icon-link icon-link-hover" href="{{ route('portfolio') }}">Explore our work<i class="bi bi-arrow-right"></i> </a>
                </div>
                <!-- Content END -->

                <!-- Image -->
                <div class="col-md-6 ms-auto">
                    <div class="bg-secondary bg-opacity-50 rounded-4">
                        <img src="{{ asset('assets/images/all-web.jpg') }}" class="mt-n8" alt="image">
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
                <div class="row align-items-center g-4">
                    <!-- Content -->
                    <div class="col-lg-5">
                        <span class="hand-wave-animate h2">🖐️</span>
                        <h2 class="mb-3 h1">Say Hello</h2>
                        <p>Our friendly team is ready to assist you with whatever you need.</p>

                        <!-- Contact info -->
                        <div class="row row-cols-1 row-cols-sm-2 g-4 mt-3 mt-md-5">
                            <!-- Call us -->
                            <div class="col">
                                <span class="fs-3 text-primary-grad"><i class="bi bi-headset"></i></span>
                                <h6 class="my-2 my-sm-3">Call us</h6>
                                <p class="mb-2">Let's work together towards a common goal - get in touch!</p>
                                <a href="#" class="heading-color hover-underline-animation">+92 3071686562</a>
                            </div>

                            <!-- Email us -->
                            <div class="col">
                                <span class="fs-3 text-primary-grad"><i class="bi bi-envelope"></i></span>
                                <h6 class="my-2 my-sm-3">Email us</h6>
                                <p class="mb-2">We respond to all inquiries within 24 hours.</p>
                                <a href="#" class="heading-color hover-underline-animation">mail.codebeter@gmail.com</a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact form -->
                    <div class="col-lg-6 ms-auto mt-5 mt-lg-n7">
                        <div class="card card-body rounded-4 shadow-primary-lg p-4">
                            <form class="row form-border-transparent g-3">
                                <div class="col-md-6">
                                    <label class="form-label">First name</label>
                                    <input type="text" class="form-control bg-secondary">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Last name</label>
                                    <input type="text" class="form-control bg-secondary">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control bg-secondary" id="floatingInput">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Mobile number</label>
                                    <input type="text" class="form-control bg-secondary">
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Subject</label>
                                    <input type="text" class="form-control bg-secondary">
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control bg-secondary" id="floatingTextarea2" style="height: 150px"></textarea>
                                </div>

                                <div class="col-12 mt-4">
                                    <!-- Button -->
                                    <button class="btn btn-primary mb-2 mb-md-0">Send a message</button>
                                </div>
                            </form>
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
