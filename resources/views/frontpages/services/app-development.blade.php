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
                {{--                     </div>--}}
                {{--                </div>--}}
                <!-- Services END -->

                <div class="row">
                    <div class="col-md-6">
                        <h2>Mobile Application   <br>Development</h2>
                        <p>Our specialty is developing state-of-the-art mobile applications that meet your particular user and business needs.</p>

                        <div class="details mt-5">
                            <p>Welcome to our page for mobile application development services! Our specialty is developing state-of-the-art mobile applications that meet your particular user and business needs. Our team of skilled developers, designers, and strategists is dedicated to providing excellent mobile solutions.</p>

                            <a class="btn btn-dark icon-link mt-4 icon-link-hover" href="{{ route('contact') }}">Contact Us<i class="bi bi-arrow-right"></i> </a>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-secondary bg-opacity-50 rounded-4">
                            <img src="{{ asset('assets/images/services/mobilea-app.webp') }}" class="rounded-2 border-3 " alt="image">
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
                        {{--                        <h5 class="text-center text-primary mb-2">Why CHoose Us</h5>--}}
                        <h2 class="text-center mb-6">Boost Your Online Presence</h2>
                    </div>
                </div>
                <div class="row position-relative g-6 g-lg-7">
                    <!-- Step item -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-lg bg-primary rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">01</div>
                            <!-- Info -->
                            <h6 class="mt-4">Expertise</h6>
                            <p class="mb-0">Our team has years of experience creating mobile apps for iOS and Android, among other platforms.</p>
                        </div>
                    </div>

                    <!-- Step item -->
                    <div class="col-md-4">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-lg bg-pink rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">02</div>
                            <!-- Info -->
                            <h6 class="mt-4">Custom Solutions</h6>
                            <p class="mb-0">We customize every mobile application to your unique business objectives, making sure it fits both user expectations and your brand.</p>
                        </div>
                    </div>

                    <!-- Step item -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-lg bg-purple rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">03</div>
                            <!-- Info -->
                            <h6 class="mt-4">User-Centric Design</h6>
                            <p class="mb-0">To increase user engagement, our designers concentrate on developing user interfaces that are both aesthetically pleasing and intuitive.</p>
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
                    <h2 class="text-center mb-3" >Our specialty is developing innovative mobile applications that meet your specific user and business needs.</h2>
                    <!-- Content START -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-xl bg-light rounded-circle text-white mx-auto shadow-sm position-absolute top-0 start-50 translate-middle mt-n2">
                                <img src="{{ asset('assets/images/services/ux-design.png') }}" width="50px" />
                            </div>
                            <!-- Info -->
                            <h6 class="mt-4">UI/UX Design</h6>
                            <p class="mb-0">To increase user satisfaction and engagement, our designers concentrate on developing user interfaces that are both aesthetically pleasing and intuitive.</p>
                        </div>
                    </div>
                    <!-- Content END -->
                    <!-- Content START -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-xl bg-light rounded-circle text-white mx-auto shadow-sm position-absolute top-0 start-50 translate-middle mt-n2">
                                <img src="{{ asset('assets/images/services/software-development.png') }}" width="50px" />
                            </div>
                            <!-- Info -->
                            <h6 class="mt-4">Backend Development</h6>
                            <p class="mb-0">To support your mobile app, we create reliable backend systems that guarantee safe data handling and seamless operation.</p>
                        </div>
                    </div>
                    <!-- Content END -->
                    <!-- Content START -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-xl bg-light shadow-sm rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">
                                <img src="{{ asset('assets/images/services/cross-platform.png') }}" width="50px" >
                            </div>
                            <!-- Info -->
                            <h6 class="mt-4">Cross-Platform Development</h6>
                            <p class="mb-0">Use cross-platform development tools to your advantage to reach iOS and Android users while saving time and money.</p>
                        </div>
                    </div>
                    <!-- Content END -->
                    <!-- Content START -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-xl bg-light shadow-sm rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">
                                <img src="{{ asset('assets/images/services/app-development1.png') }}" width="50px" >
                            </div>
                            <!-- Info -->
                            <h6 class="mt-4">website Maintenance and Support</h6>
                            <p class="mb-0">We offer continuing support and maintenance to keep your mobile app current and functional.</p>
                        </div>
                    </div>
                    <!-- Content END -->
                    <!-- Content START -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-xl bg-light shadow-sm rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">
                                <img src="{{ asset('assets/images/services/android.png') }}" width="50px" >
                            </div>
                            <!-- Info -->
                            <h6 class="mt-4">Android App Development</h6>
                            <p class="mb-0">For optimal market reach, we develop feature-rich Android apps that function flawlessly across a variety of devices.</p>
                        </div>
                    </div>
                    <!-- Content END -->
                    <!-- Content START -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-xl bg-light shadow-sm rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">
                                <img src="{{ asset('assets/images/services/apple.png') }}" width="50px" />
                            </div>
                            <!-- Info -->
                            <h6 class="mt-4">iOS App Development</h6>
                            <p class="mb-0">Our iOS development team creates sophisticated and useful apps that are tailored for the Apple ecosystem for users of iPhones and iPads.</p>
                        </div>
                    </div>
                    <!-- Content END -->


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
                            <div class="accordion-item">
                                <h2 class="accordion-header font-base" id="heading-1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        For what platforms do you create mobile applications?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Creating mobile apps for the iOS and Android operating systems is our area of expertise.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Do you provide services for developing cross-platform apps?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, we provide cross-platform development services utilizing React Native and Flutter, which enable your app to run on both iOS and Android using a single codebase.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How much does it cost to develop a mobile app?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Depending on the platform, features, and complexity of the app, the price of developing a mobile app can vary significantly. Once we comprehend the needs of your project, we provide personalized quotes.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                        How much time does it take to create a mobile application?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The complexity of the project and its particular requirements will determine how long it takes to develop a mobile app. During the planning stage, we will give you a project timeline.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                        Do you offer services for developing apps for iOS and Android?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, we provide services for developing apps for both iOS and Android. Additionally, we can create cross-platform applications that function flawlessly on both platforms, cutting down on expenses and development time.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                        How can I be sure my app idea will succeed?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        In order to validate your app idea, we first carry out in-depth market research and competitive analysis. After that, we draft a thorough project plan that includes wireframes and prototypes to make sure your app satisfies user requirements and industry standards.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                                        Are you able to help with app stores?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, we can guide you through the app submission process for app stores such as the Google Play Store and Apple App Store, making sure your app complies with their requirements and is prepared for user downloads.
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
