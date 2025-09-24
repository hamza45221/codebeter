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
                        <h2>POS <br> (Point Of Sale System)</h2>
                        <p>Streamline Your Sales Process. Simplify Your Organization. Our point-of-sale system does everything.</p>

                        <div class="details mt-5">
                            <p>Intelligent, dependable point-of-sale (POS) systems that are reasonably priced, completely customizable, and tailored to your company's needs.</p>

                            <p>For small to medium-sized businesses, we provide a full range of point-of-sale (POS) solutions, such as hardware integration, custom POS software, and inventory management tools. Local startups and major retail chains are among our clientele. We are prepared to use intelligent, dependable point-of-sale technology to help your company expand, just as we have helped them increase sales and streamline operations.</p>

                            <p>Our highly competitive pricing and fully customizable point-of-sale (POS) solutions ensure 100% client satisfaction. Every system has adaptable features and continuous support to guarantee that it meets your specific requirements. We are committed to providing the ideal ratio of performance to affordability. We are the best option if you're searching for an affordable point-of-sale system that increases productivity and sales.</p>
                        </div>
                        <a class="btn btn-dark icon-link mt-4 icon-link-hover" href="{{ route('contact') }}">Contact Us<i class="bi bi-arrow-right"></i> </a>

                    </div>
                    <div class="col-md-6">
                        <div class="bg-secondary bg-opacity-50 rounded-4">
                            <img src="{{ asset('assets/images/services/pos.webp') }}" class="rounded-2 border-3 mt-3 " alt="image">
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
                            <p class="mb-0">Our POS system is made to be easy to use. You can begin selling in minutes with no hassle, regardless of whether you run a small business or oversee several locations.</p>
                        </div>
                    </div>

                    <!-- Step item -->
                    <div class="col-md-4">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-lg bg-pink rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">02</div>
                            <!-- Info -->
                            <h6 class="mt-4">Fully Customizable</h6>
                            <p class="mb-0">Your POS should be as unique as your company. We customize your system to fit the needs of your customers, product types, and workflow.</p>
                        </div>
                    </div>

                    <!-- Step item -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-lg bg-purple rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">03</div>
                            <!-- Info -->
                            <h6 class="mt-4">Reliable Support</h6>
                            <p class="mb-0">We help you make better decisions every day by offering comprehensive sales, inventory, and employee performance reports along with continuous support.</p>
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
                        <h2 class="mb-4">POS innovations designed to streamline your business processes. <span class="text-primary"></span></h2>
                        <p class="mb-3">Our point-of-sale solutions provide seamless operations and assist you in effectively accomplishing your business objectives.</p>
                        <!-- List -->
                        <ul class="list-group list-group-borderless mb-4">
                            <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>Our flexible and adjustable systems are prepared to expand along with your company.</li>
                            <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>Several payment method integrations make it simple to accept safe payments.</li>
                            <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>Get benefit from real-time updates and easy product and inventory management.</li>
                            <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>We offer simple product management and conversion optimization.</li>
                            <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>Our user-friendly interface simplifies staff management and daily sales.</li>
                            <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check text-success me-2"></i>Create a seamless user experience across platforms.</li>
                        </ul>
                        <!-- Button -->
                        <a class="btn btn-dark icon-link icon-link-hover" href="{{ route('contact') }}">Contact Us<i class="bi bi-arrow-right"></i> </a>
                    </div>
                    <!-- Content END -->

                    <!-- Image -->
                    <div class="col-md-6 ms-auto">
                        <div class="bg-secondary bg-opacity-50 rounded-4">
                            <img src="{{ asset('assets/images/services/pos2.webp') }}" class="rounded-3" alt="image">
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
                                        Is your point-of-sale system appropriate for small businesses?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Yes! Small and medium-sized businesses are the target market for our point-of-sale system. It is scalable as your company expands, inexpensive, and simple to use.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Can I use this POS system to manage my inventory?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, definitely. Stock level monitoring, low-stock alerts, product category management, and even restocking automation are all available.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Does it accept a variety of payment options?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, digital wallets, credit/debit cards, cash, and mobile payments are all accepted by our point-of-sale system.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                        Do you offer training and installation?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, we provide comprehensive setup support and clear training so you and your employees can get going right away.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                        Is it possible for me to remotely access the system?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes. You can keep an eye on performance, sales, and inventory at any time and from any location with our cloud-based point-of-sale system.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                        Can I get technical support?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Of course! To make sure your POS system functions properly every day, we offer continuous support.
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

