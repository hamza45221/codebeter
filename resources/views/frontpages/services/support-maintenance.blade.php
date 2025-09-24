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
                        <h2>Support and   <br>Maintenance</h2>
                        <p>We are dedicated to offering outstanding support and making sure that our services run smoothly.</p>

                        <div class="details mt-5">
                            <p>Welcome to the Support and Maintenance Services section of CodeBeter. We are aware that maintaining a successful online presence calls for proactive maintenance and regular support in addition to a well-designed website. Our goal is to keep your web assets in optimal condition at all times.</p>
                            <p>Are you looking for a personalized maintenance and support plan? We will send you a comprehensive proposal if you request a quote.</p>
                            <p>Are you ready to talk about your maintenance and support requirements? We will respond to you as soon as possible if you use our online form to contact us.</p>

                            <a class="btn btn-dark icon-link mt-4 icon-link-hover" href="{{ route('contact') }}">Contact Us<i class="bi bi-arrow-right"></i> </a>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-secondary bg-opacity-50 rounded-4">
                            <img src="{{ asset('assets/images/services/maintenance-support.avif') }}" class="rounded-2 border-3 " alt="image">
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
                        <h2 class="text-center mb-6">Why should you choose our support and maintenance services?</h2>
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
                            <p class="mb-0">Our team comprises seasoned web experts who are knowledgeable about a range of technologies and content management systems.</p>
                        </div>
                    </div>

                    <!-- Step item -->
                    <div class="col-md-4">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-lg bg-pink rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">02</div>
                            <!-- Info -->
                            <h6 class="mt-4">Proactive Approach</h6>
                            <p class="mb-0">We support proactive maintenance to minimize downtime and interruptions by preventing problems before they arise.</p>
                        </div>
                    </div>

                    <!-- Step item -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-lg bg-purple rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">03</div>
                            <!-- Info -->
                            <h6 class="mt-4">Responsive Support</h6>
                            <p class="mb-0">You can reach our support staff by phone or email. We address your questions and concerns right away.</p>
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
                    <h2 class="text-center mb-6" >Our Maintenance and Support Services.</h2>
                    <!-- Content START -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-xl bg-light rounded-circle text-white mx-auto shadow-sm position-absolute top-0 start-50 translate-middle mt-n2">
                                <img src="{{ asset('assets/images/services/it-support.png') }}" width="50px" />
                            </div>
                            <!-- Info -->
                            <h6 class="mt-4">Website Maintenance</h6>
                            <p class="mb-0">To keep your website current with the newest security patches, bug fixes, and content updates, we provide continuous website maintenance services.</p>
                        </div>
                    </div>
                    <!-- Content END -->
                    <!-- Content START -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-xl bg-light rounded-circle text-white mx-auto shadow-sm position-absolute top-0 start-50 translate-middle mt-n2">
                                <img src="{{ asset('assets/images/services/optimization.png') }}" width="50px" />
                            </div>
                            <!-- Info -->
                            <h6 class="mt-4">Performance Optimization</h6>
                            <p class="mb-0">We constantly track and improve the functionality of your website to guarantee quick loading times and a great user experience.</p>
                        </div>
                    </div>
                    <!-- Content END -->
                    <!-- Content START -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-xl bg-light shadow-sm rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">
                                <img src="{{ asset('assets/images/services/servers.png') }}" width="50px" >
                            </div>
                            <!-- Info -->
                            <h6 class="mt-4">Technical Support</h6>
                            <p class="mb-0">If you have any technical questions or concerns regarding your website, our committed support staff is here to help.</p>
                        </div>
                    </div>
                    <!-- Content END -->
                    <!-- Content START -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-xl bg-light shadow-sm rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">
                                <img src="{{ asset('assets/images/services/maintenance.png') }}" width="50px" >
                            </div>
                            <!-- Info -->
                            <h6 class="mt-4">Security Updates</h6>
                            <p class="mb-0">Our top priority is keeping your website safe. We frequently implement security updates to guard against vulnerabilities on your website.</p>
                        </div>
                    </div>
                    <!-- Content END -->
                    <!-- Content START -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-xl bg-light shadow-sm rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">
                                <img src="{{ asset('assets/images/services/update.png') }}" width="50px" >
                            </div>
                            <!-- Info -->
                            <h6 class="mt-4">Content Updates</h6>
                            <p class="mb-0">Do you need to update your website's images, add new content, or redesign its layout? When it comes to content updates and enhancements, we are here to assist you.</p>
                        </div>
                    </div>
                    <!-- Content END -->
                    <!-- Content START -->
                    <div class="col-md-4 mt-md-8">
                        <div class="card card-body bg-secondary bg-opacity-75 text-center rounded-4 p-4">
                            <!-- number -->
                            <div class="icon-xl bg-light shadow-sm rounded-circle text-white mx-auto position-absolute top-0 start-50 translate-middle mt-n2">
                                <img src="{{ asset('assets/images/services/sync.png') }}" width="50px" />
                            </div>
                            <!-- Info -->
                            <h6 class="mt-4">Backup and Recovery</h6>
                            <p class="mb-0">To protect your data, we regularly backup your website. If there are any problems, we can promptly restore your website.</p>
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
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What types of websites do you provide support and maintenance for?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            We provide support and maintenance services for a wide range of websites, including business websites, e-commerce stores, blogs, and more. Whether you have a custom-built site or use a popular content management system (CMS), we can help.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How frequently do you update your website?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The complexity of your website and your particular needs will determine how frequently we perform maintenance. We provide both one-time updates when required and continuous monthly maintenance plans. During our consultation, we can go over the ideal timetable for your site.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What is included in website maintenance?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We offer a wide range of website maintenance services, including regular backups, security checks, content updates, performance monitoring, and software, plugin, and theme updates. We modify our maintenance schedules to meet the particular needs of your website.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                        How can I submit a request for website updates or support?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can send us an email or use the contact form on our website to get in touch with our support staff and ask for help or updates. Give us specifics about the changes or problems you're having, and we'll get back to you right away.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                        Why is website maintenance and support important for my business?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        In order to keep your website safe, functional, and in line with your company's objectives, website support and maintenance entails routinely checking, updating, and optimizing it. A well-maintained website supports your online presence, improves security, and improves user experience, which makes it crucial.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                        Can you support websites created on different platforms and content management systems (CMS)?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, we have worked with a range of CMS platforms, such as custom CMS solutions and WordPress, Drupal, and Joomla. Web apps and static websites can also be supported by us.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                                        Can you assist with optimizing the performance of websites?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Absolutely, we improve load times, find and fix bottlenecks, and make sure your website functions properly across a range of browsers and devices.
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
