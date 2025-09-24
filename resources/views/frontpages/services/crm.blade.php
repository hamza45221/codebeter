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
                        <h2>CRM <br>(Customer Relationship Management)</h2>
                        <p>Streamline Your Customer Relations. Simplify Your Organization. Our CRM system does everything.</p>

                        <div class="details mt-5">
                            <p>Intelligent, reliable CRM systems that are cost-effective, fully customizable, and tailored to your company's needs.</p>

                            <p>For small to medium-sized businesses, we offer a comprehensive range of CRM solutions, including customer management, custom CRM software, and marketing automation tools. Local startups and established enterprises are among our clients. We are ready to leverage intelligent, reliable CRM technology to help your business grow, just as we’ve helped others enhance customer relationships and streamline operations.</p>

                            <p>Our highly competitive pricing and fully customizable CRM solutions ensure 100% client satisfaction. Each system comes with flexible features and ongoing support to ensure it meets your specific needs. We are committed to delivering the perfect balance of performance and affordability. We are the best choice if you're looking for an affordable CRM system that enhances customer engagement and drives growth.</p>
                        </div>
                        <a class="btn btn-dark icon-link mt-4 icon-link-hover" href="{{ route('contact') }}">Contact Us<i class="bi bi-arrow-right"></i> </a>

                    </div>
                    <div class="col-md-6">
                        <div class="bg-secondary bg-opacity-50 rounded-4">
                            <img src="{{ asset('assets/images/services/crm-hero.jpg') }}" class="rounded-2 border-3 mt-3 " alt="image">
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
                        <h2 class="text-center mb-6">We help you at every stage, from setup to daily sales.</h2>
                    </div>
                </div>
                <div class="row position-relative g-6 g-lg-7">
                    <!-- Step item -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-lg bg-primary rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">01</div>
                            <!-- Info -->
                            <h6 class="mt-4">Easy to Use</h6>
                            <p class="mb-0">Our CRM system is designed to be user-friendly. You can start managing customer relationships in minutes, whether you run a small business or oversee multiple locations, with no hassle.</p>
                        </div>
                    </div>

                    <!-- Step item -->
                    <div class="col-md-4">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-lg bg-pink rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">02</div>
                            <!-- Info -->
                            <h6 class="mt-4">Fully Customizable</h6>
                            <p class="mb-0">Your CRM should be as unique as your business. We customize your system to align with the needs of your customers, service offerings, and workflow.</p>
                        </div>
                    </div>

                    <!-- Step item -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-lg bg-purple rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">03</div>
                            <!-- Info -->
                            <h6 class="mt-4">Reliable Support</h6>
                            <p class="mb-0">We help you make better decisions every day by providing detailed customer insights, sales analytics, and team performance reports, along with ongoing support.</p>
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
                        <h2 class="mb-4">CRM innovations designed to streamline your customer management processes. <span class="text-primary"></span></h2>
                        <p class="mb-3">Our CRM solutions ensure smooth operations and help you effectively achieve your business objectives.</p>
                        <!-- List -->
                        <ul class="list-group list-group-borderless mb-4">
                            <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>Our flexible and scalable CRM systems are built to grow with your business.</li>
                            <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>Multiple CRM integrations make it easy to manage customer interactions and data securely.</li>
                            <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>Benefit from real-time updates and seamless customer data and interaction management.</li>
                            <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>We provide seamless customer management and conversion optimization.</li>
                            <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>Our user-friendly interface simplifies customer management and daily interactions.</li>
                            <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>Create a seamless customer experience across all touchpoints.</li>
                        </ul>
                        <!-- Button -->
                        <a class="btn btn-dark icon-link icon-link-hover" href="{{ route('contact') }}">Contact Us<i class="bi bi-arrow-right"></i> </a>
                    </div>
                    <!-- Content END -->

                    <!-- Image -->
                    <div class="col-md-6 ms-auto">
                        <div class="bg-secondary bg-opacity-50 rounded-4">
                            <img src="{{ asset('assets/images/services/crm-btm.jpg') }}" class="rounded-3" alt="image">
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
                                        Is your CRM system suitable for small businesses?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Yes! Our CRM system is designed for small and medium-sized businesses. It is affordable, easy to use, and scalable as your business grows.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Can I use this CRM system to manage customer data and interactions?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, absolutely. It offers customer data tracking, interaction history, segmentation, and even automation for follow-ups and engagement.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Does it support multiple customer interaction channels?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, our CRM system supports various customer interaction channels, including email, social media, and live chat.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                        Do you provide onboarding and support?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, we offer complete onboarding and ongoing support to ensure you and your team can get started quickly and effectively.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                        Can I access the system remotely?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes. You can monitor customer interactions, sales, and data from anywhere at any time with our cloud-based CRM system.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                        Do you offer technical support?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Absolutely! We provide ongoing technical support to ensure your CRM system runs smoothly every day.
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

