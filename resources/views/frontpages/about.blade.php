@extends('layout.mainfrontpage')

<style>
    .card-img-scale-wrapper {
        height: 300px !important;
    }

    .teams-member-desc {
        min-height:200px !important ;
    }

    .card-img-scale {
        margin-bottom: 20px !important;
    }

</style>
@section('contant')


    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Hero START -->
        <section class="bg-secondary position-relative pt-xl-8">
            <!-- Decoration START -->
            <!-- Grad blur -->
            <div class="position-absolute top-0 start-0 mt-n9 ms-n5">
                <img src="{{ asset('assets/images/elements/grad-shape/blur-decoration.svg') }}" class="blur-7 opacity-2" alt="Grad shape">
            </div>

            <!-- Grad blur -->
            <div class="position-absolute top-0 start-50 mt-n9 ms-n9">
                <img src="{{ asset('assets/images/elements/grad-shape/blur-decoration.svg') }}" class="blur-8 opacity-1" alt="Grad shape">
            </div>
            <!-- Decoration START -->

            <div class="container position-relative pt-4 pt-sm-5">

                <!-- Clay decoration -->
                <div class="position-absolute top-50 start-0 translate-middle mt-5">
                    <img src="{{ asset('assets/images/elements/clay-decoration.png') }}" alt="Clay-decoration">
                </div>

                <!-- Title and buttons START -->
                <div class="inner-container text-center align-items-center mb-5 mb-md-7">
                    <!-- Breadcrumb -->
{{--                    <nav class="mb-2 justify-content-center d-flex" aria-label="breadcrumb">--}}
{{--                        <ol class="breadcrumb pt-0">--}}
{{--                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>--}}
{{--                            <li class="breadcrumb-item active" aria-current="page">About us</li>--}}
{{--                        </ol>--}}
{{--                    </nav>--}}

                    <!-- Title -->
                    <h1 class="display-5 mb-4">{{ $about->title1 }} <span class="text-primary-grad">{{ $about->title2 }}</span> {{ $about->title3 }}  <span class="text-primary-grad"> {{ $about->title4 }} </span>  </h1>

                    <!-- Buttons -->
                    <div class="d-md-flex justify-content-center align-items-center py-2">
                        <a href="{{ route('service') }}" class="btn btn-white-shadow mb-4 mb-md-0">Explore our services</a>
                        <!-- Video button -->
{{--                        <div class="d-flex align-items-center justify-content-center text-start ms-0 ms-md-4">--}}
{{--                            <a data-glightbox data-gallery="office-tour" href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg btn-round btn-dark mb-0 flex-shrink-0 stretched-link d-flex justify-content-center align-items-center">--}}
{{--                                <i class="bi bi-play-fill fs-5"></i>--}}
{{--                            </a>--}}
{{--                            <p class="mb-0 ms-3 heading-color" style="max-width: 13rem;">Learn about our journey and growth</p>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <!-- Title and buttons END -->

                <!-- Skill sets START -->
                <div class="row position-relative g-4 g-lg-5">
                    <!-- Item -->
                    <div class="col-sm-6 col-xl-3">
                        <div class="card bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-3">
                            <!-- Card header -->
                            <div class="card-header bg-transparent">
                                <p class="heading-color">{{ $about->user_title }}</p>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex mt-auto">
                                <h4 class="purecounter h2 mb-0" data-purecounter-start="0" data-purecounter-end="{{$about->user_count}}" data-purecounter-delay="300">0</h4>
                                <span class="h2 text-primary mb-0">+</span>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col-sm-6 col-xl-3">
                        <div class="card bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-3">
                            <!-- Card header -->
                            <div class="card-header bg-transparent ">
                                <p class="heading-color">{{ $about->project_title }}</p>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex mt-auto">
                                <span class="text-success mb-0"><i class="bi bi-arrow-up"></i></span>
                                <h4 class="purecounter h2 mb-0" data-purecounter-start="0" data-purecounter-end="{{ $about->project_count }}" data-purecounter-delay="300">0</h4>
                                <span class="h2 text-primary mb-0">+</span>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col-sm-6 col-xl-3">
                        <div class="card bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-3">
                            <!-- Card header -->
                            <div class="card-header bg-transparent ">
                                <p class="heading-color">{{ $about->members_title }}</p>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex mt-auto">
                                <h4 class="purecounter h2 mb-0" data-purecounter-start="0" data-purecounter-end="{{ $about->members_count }}" data-purecounter-delay="300">0</h4>
                                <span class="h2 text-primary mb-0">+</span>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col-sm-6 col-xl-3">
                        <div class="card bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-3">
                            <!-- Card header -->
                            <div class="card-header bg-transparent">
                                <p class="heading-color">{{ $about->satisfaction_title }}</p>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex mt-auto">
                                <h4 class="purecounter h2 mb-0" data-purecounter-start="0" data-purecounter-end="{{ $about->satisfaction_count }}" data-purecounter-delay="300">0</h4>
                                <span class="h2 text-primary mb-0">%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Skill sets END -->
            </div>
        </section>
        <!-- =======================
Hero END -->

        <!-- =======================
About START -->
        <section class="bg-secondary pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        <!-- About content START -->
                        <div class="row g-4 g-lg-6 mb-6 mb-md-8">
                            <!-- Images -->
                            <div class="col-md-7 position-relative">
                                <!-- vector blur decoration -->
                                <div class="position-absolute bottom-0 start-50 translate-middle-x ms-n5">
                                    <img src="{{ asset('assets/images/elements/grad-shape/11.png') }}" class="blur-2" alt="Decoration shape">
                                </div>
                                <!-- Blur decoration -->
                                <div class="position-absolute top-0 start-50 translate-middle-x ms-7">
                                    <img src="{{ asset('assets/images/elements/grad-shape/blur-decoration.svg') }}" class="opacity-3 blur-8" alt="Grad shape">
                                </div>
                                <!-- Images -->
                                <div class="row position-relative">
                                    <div class="col-sm-6">
                                        <img src="{{ asset($about->about_image1) }}" class="rounded-4" alt="">
                                    </div>
                                    <div class="col-sm-6 mt-5 mt-sm-8">
                                        <img src="{{ asset($about->about_image2) }}" class="rounded-4" alt="">
                                    </div>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="col-md-5">
                                <h2 class="mb-3">{{ $about->heading }}</h2>

                                <p>
                                    {{ $about->description }}
                                </p>

                                <a class="btn btn-primary icon-link icon-link-hover mt-3" href="{{ route('portfolio') }}">Explore our work<i class="bi bi-arrow-right"></i> </a>
                            </div>
                        </div>
                        <!-- About content END -->

                        <!-- Features START -->
                        <div class="row g-4 g-lg-5">
                            <!-- Feature item -->
                            <div class="col-md-4">
                                <h4>{{ $about->adviser_heading }}</h4>
                            </div>
                            <div class="col-md-4">
                                <h6 class="mb-2"><i class="bi bi-lightning-charge-fill text-success me-2"></i>{{ $about->our_mission_title }}</h6>
                                <p>{{ $about->our_mission_description }}</p>
                            </div>

                            <!-- Feature item -->
                            <div class="col-md-4">
                                <h6 class="mb-2"><i class="bi bi-rocket-takeoff-fill text-pink me-2"></i>{{ $about->our_vision_title }}</h6>
                                <p>{{ $about->our_vision_description }}</p>
                            </div>

                        </div>
                        <!-- Features END -->
                    </div>
                </div>
                <!-- Row END -->
            </div>
        </section>
        <!-- =======================
About END -->

        <!-- =======================
Team START -->
        <section class="bg-secondary position-relative overflow-hidden py-0">
            <!-- Curve bg -->
            <span class="position-absolute start-0 bottom-0 mb-n1">
		<svg class="fill-body" width="1950" height="237" viewBox="0 0 1950 237" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 236.442H1949.5V72.4424C1232.3 -58.7576 351 17.7757 0 72.4424V236.442Z"/>
		</svg>
	</span>

            <div class="container-fluid position-relative">
                <!-- Rocket vector -->
                <div class="position-absolute end-0 bottom-0 me-6 z-index-9 d-none d-lg-block">
                    <img src="{{ asset('assets/images/elements/rocket-03.png') }}" class="h-200px" alt="rocket image">
                </div>

                <div class="max-width-1550 bg-dark position-relative rounded-4 overflow-hidden py-5 py-sm-6 py-lg-6" data-bs-theme="dark">
                    <!-- Blur decoration -->
                    <div class="position-absolute top-0 start-50 translate-middle">
                        <img src="{{ asset('assets/images/elements/grad-shape/blur-decoration-2.svg') }}" class="opacity-2 blur-9" alt="Grad shape">
                    </div>

                    <!-- Blur decoration -->
                    <div class="position-absolute bottom-0 start-0 mb-n8 ms-n5">
                        <img src="{{ asset('assets/images/elements/grad-shape/blur-decoration.svg') }}" class="blur-7 opacity-2" alt="Grad shape">
                    </div>

                    <div class="container position-relative">
                        <!-- Title -->
                        <h1 class="text-center mb-2">{{ $about->our_professionals_heading }}</h1>
                        <p class="text-center mb-4 mb-md-6">{{ $about->our_professionals_desc }}</p>


                        <div class="row g-4 g-sm-5 justify-content-center align-items-center">
                            <!-- Team item -->
{{--                            <div class="col-sm-6 col-md-5 col-lg-4">--}}
{{--                                <div class="card  card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">--}}
{{--                                    <div class="card-img-scale-wrapper">--}}
{{--                                        <!-- Social links -->--}}
{{--                                        <div class="hover-content h-100">--}}
{{--                                            <ul class="list-group list-group-borderless position-absolute bottom-0 end-0 me-3 mb-3">--}}
{{--                                                <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-facebook d-flex justify-content-center align-items-center" href="https://www.facebook.com/share/16vC5D5U3t/"><i class="bi bi-facebook"></i></a> </li>--}}
{{--                                                <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-linkedin d-flex justify-content-center align-items-center" href="www.linkedin.com/in/hamza-javed-dev"><i class="bi bi-linkedin"></i></a> </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <!-- Card Image -->--}}
{{--                                        <img src="{{ asset('assets/images/about/found.jpg') }}" class="card-img-top img-scale" alt="card image">--}}
{{--                                    </div>--}}

{{--                                    <!-- Card body -->--}}
{{--                                    <div class="card-body teams-member-desc text-center px-0">--}}
{{--                                        <h6 class="mb-0">Hamza Javed</h6>--}}
{{--                                        <small class="text-light">Founder & CEO</small>--}}
{{--                                        <p class="py-3 px-2"> With 4 years of coding experience, this tech enthusiast is leading our company's journey with creativity and knowledge. devoted to creating a changing technology environment.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <!-- Team item -->
{{--                            <div class="col-sm-6 col-md-5 col-lg-4">--}}
{{--                                <div class="card  card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">--}}
{{--                                    <div class="card-img-scale-wrapper">--}}
{{--                                        <!-- Social links -->--}}
{{--                                        <div class="hover-content h-100">--}}
{{--                                            <ul class="list-group list-group-borderless position-absolute bottom-0 end-0 me-3 mb-3">--}}
{{--                                                <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-facebook d-flex justify-content-center align-items-center" href="#"><i class="bi bi-facebook"></i></a> </li>--}}
{{--                                                <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-linkedin d-flex justify-content-center align-items-center" href="#"><i class="bi bi-linkedin"></i></a> </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <!-- Card Image -->--}}
{{--                                        <img src="{{ asset('assets/images/about/user_female.jpeg') }}" class="card-img-top img-scale" alt="card image">--}}
{{--                                    </div>--}}

{{--                                    <!-- Card body -->--}}
{{--                                    <div class="card-body teams-member-desc text-center px-0">--}}
{{--                                        <h6 class="mb-0">Jannat Rai</h6>--}}
{{--                                        <small class="text-light">Co-CEO</small>--}}
{{--                                        <p class="py-3 px-2">has 4 years of experience in project management and software quality assurance. She is skilled at leading teams, delivering successful projects, and ensuring top-quality results.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}



                        </div>
                        <div class="row g-4 g-sm-5 justify-content-center align-items-center">

                            @foreach($team as $t)
                            <!-- Team item -->
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="card  card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                                    <div class="card-img-scale-wrapper">
                                        <!-- Social links -->
                                        <div class="hover-content h-100">
                                            <ul class="list-group list-group-borderless position-absolute bottom-0 end-0 me-3 mb-3">
                                                <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-facebook d-flex justify-content-center align-items-center" href="{{ $t->facebook_link }}"><i class="bi bi-facebook"></i></a> </li>
                                                <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-linkedin d-flex justify-content-center align-items-center" href="{{ $t->linkedIn_link }}"><i class="bi bi-linkedin"></i></a> </li>
                                            </ul>
                                        </div>
                                        <!-- Card Image -->
                                        <img src="{{ asset($t->image) }}" class="card-img-top img-scale" alt="card image">
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body teams-member-desc text-center px-0">
                                        <h6 class="mb-0">{{ $t->name }}</h6>
                                        <small class="text-light">{{ $t->title }}</small>
                                        <p class="py-3 px-2">{{ $t->desc }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach



                        </div>

                        <!-- Buttons -->
                        <div class="text-center d-inline-flex flex-column align-items-center gap-2 w-100 mt-5">
                            <a href="{{ route('contact') }}" class="btn btn-primary-grad mb-3">Connect with our team</a>
                            <a class="link-white icon-link icon-link-hover mb-0" href="{{ route('carrer') }}">Explore career options<i class="bi bi-arrow-right"></i> </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Team END -->

        <!-- =======================
Clients START -->
{{--        <section>--}}
{{--            <div class="container">--}}
{{--                <div class="row g-4 align-items-center">--}}
{{--                    <!-- Title -->--}}
{{--                    <div class="col-md-3">--}}
{{--                        <h6 class="text-center text-md-start mb-0">Join the 1,000+ companies using Folio</h6>--}}
{{--                    </div>--}}

{{--                    <!-- Clients -->--}}
{{--                    <div class="col-md-9 col-xxl-7 ms-auto">--}}
{{--                        <ul class="list-inline d-flex justify-content-center justify-content-md-end flex-wrap gap-3 gap-lg-5">--}}
{{--                            <!-- Logo item -->--}}
{{--                            <li class="list-inline-item me-0">--}}
{{--                                <a href="#" class="btn-transition d-flex">--}}
{{--                                    <img src="assets/images/client/icons/08.svg" class="h-40px" alt="icon">--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <!-- Logo item -->--}}
{{--                            <li class="list-inline-item me-0">--}}
{{--                                <a href="#" class="btn-transition d-flex">--}}
{{--                                    <img src="assets/images/client/icons/04.svg" class="h-40px" alt="icon">--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <!-- Logo item -->--}}
{{--                            <li class="list-inline-item me-0">--}}
{{--                                <a href="#" class="btn-transition d-flex">--}}
{{--                                    <img src="assets/images/client/icons/12.svg" class="h-40px" alt="icon">--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <!-- Logo item -->--}}
{{--                            <li class="list-inline-item me-0">--}}
{{--                                <a href="#" class="btn-transition d-flex">--}}
{{--                                    <img src="assets/images/client/icons/09.svg" class="h-40px" alt="icon">--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <!-- Logo item -->--}}
{{--                            <li class="list-inline-item me-0">--}}
{{--                                <a href="#" class="btn-transition d-flex">--}}
{{--                                    <img src="assets/images/client/icons/05.svg" class="h-40px" alt="icon">--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <!-- Logo item -->--}}
{{--                            <li class="list-inline-item me-0">--}}
{{--                                <a href="#" class="btn-transition d-flex">--}}
{{--                                    <img src="assets/images/client/icons/03.svg" class="h-40px" alt="icon">--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <!-- Logo item -->--}}
{{--                            <li class="list-inline-item me-0">--}}
{{--                                <a href="#" class="btn-transition d-flex">--}}
{{--                                    <img src="assets/images/client/icons/02.svg" class="h-40px" alt="icon">--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <!-- Logo item -->--}}
{{--                            <li class="list-inline-item me-0">--}}
{{--                                <a href="#" class="btn-transition d-flex">--}}
{{--                                    <img src="assets/images/client/icons/10.svg" class="h-40px" alt="icon">--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- =======================
Clients END -->



        <section class="bg-secondary position-relative overflow-hidden">
            <!-- Curve decoration -->
            <span class="position-absolute top-0 start-0 mt-n5">
		<svg class="fill-body" width="1930" height="137" viewBox="0 0 1930 137" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M464.909 117.12C228.685 132.607 108.971 82.5335 0 51.0476V1.5L1930 0V26.649V132.607C1873.32 98.4636 1645.24 119.618 1488.21 132.607C1319.34 146.576 1149.46 119.696 1051.95 103.318C837.339 67.2694 668.231 103.79 464.909 117.12Z"></path>
		</svg>
	</span>

            <div class="container pt-5">
                <div class="row g-4 align-items-center">
                    <!-- Title and content -->
                    <div class="col-md-5">
                        <h2 class="mb-3">Keep up with us via our newsletter.</h2>
                        <p class="mb-0">Use our exclusive newsletter to gain access to industry-leading trends and advice.</p>
                    </div>

                    <!-- Input -->
                    <div class="col-md-6 col-xl-5 ms-auto">
                        <div class="bg-body rounded-2 position-relative z-index-2 p-2 mb-2">
                            <form class="input-group mb-0">
                                <input class="form-control bg-transparent border-0 me-1" type="email" placeholder="Enter your email address">
                                <button type="button" class="btn btn-primary rounded-2 mb-0">Subscribe!</button>
                            </form>
                        </div>
                        <div class="form-text">✌️ No Spam — We Promise!</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
CTA END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->


@endsection
