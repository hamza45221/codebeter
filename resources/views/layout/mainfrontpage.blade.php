<!DOCTYPE html>
<html lang="en">

<head>

    <title>CodeBeter</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="StackBros">
    <meta name="description" content="multipurpose bootstrap theme">



    <!-- Dark mode -->
    <script>
        const storedTheme = localStorage.getItem('theme')

        const getPreferredTheme = () => {
            if (storedTheme) {
                return storedTheme
            }
            return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
        }

        const setTheme = function(theme) {
            if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-bs-theme', 'dark')
            } else {
                document.documentElement.setAttribute('data-bs-theme', theme)
            }
        }

        setTheme(getPreferredTheme())

        window.addEventListener('DOMContentLoaded', () => {
            var el = document.querySelector('.theme-icon-active');
            if (el != 'undefined' && el != null) {
                const showActiveTheme = theme => {
                    const activeThemeIcon = document.querySelector('.theme-icon-active use')
                    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                    const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

                    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                        element.classList.remove('active')
                    })

                    btnToActive.classList.add('active')
                    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
                }

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                    if (storedTheme !== 'light' || storedTheme !== 'dark') {
                        setTheme(getPreferredTheme())
                    }
                })

                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            localStorage.setItem('theme', theme)
                            setTheme(theme)
                            showActiveTheme(theme)
                        })
                    })

            }
        })
    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/glightbox/css/glightbox.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <style>
        .btn-primary, .bg-primary {
            background: linear-gradient(to right, #7F39F8 0%, #543DE7 51%, #7F39F8 100%) !important;
        }

        .offcanvas, .offcanvas-sm {
            width: 520px !important;
        }

        section {
            padding-top: 5rem !important;
            padding-bottom: 5rem !important;
        }
        /*.bg-dark {*/
        /*    background-color: white !important;*/
        /*}*/
    </style>

</head>

<body>

<!-- Header START -->
<div class="header-absolute">
    <!-- Top header -->
    <div class="alert fade show border-0 rounded-0 text-center overflow-hidden z-index-9 py-2 m-0 d-none d-lg-block" style="background: linear-gradient(to right, #7F39F8 0%, #543DE7 51%, #7F39F8 100%);" role="alert">
        <div class="container d-flex justify-content-between px-2 px-xl-4">
            <!-- Contact info -->
            <ul class="list-inline d-flex flex-wrap gap-3 text-white mb-0">
                <li class="list-inline-item small fw-light">
                    <i class="bi bi-headset me-2"></i>
                    Call us:
                    <a href="https://wa.me/923291070012" class="link-white" target="_blank">
                        +92 3291070012
                    </a>
                </li>
                <li class="list-inline-item small fw-light">
                    <i class="bi bi-envelope me-2"></i>
                    Email:
                    <a href="mailto:mail.codebeter@gmail.com" class="link-white">
                        mail.codebeter@gmail.com
                    </a>
                </li>
            </ul>


            <!-- Social links -->
            <ul class="list-inline mb-0">
                <li class="list-inline-item small text-white">Follow us on: </li>
                <li class="list-inline-item"> <a href="https://www.facebook.com/profile.php?id=61577180078622" target="_blank" class="link-white"><i class="bi bi-facebook"></i></a> </li>
{{--                <li class="list-inline-item"> <a href="#" class="link-white"><i class="bi bi-instagram"></i></a> </li>--}}
                <li class="list-inline-item"> <a href="https://x.com/CodeBeter" target="_blank" class="link-white"><i class="bi bi-twitter-x"></i></a> </li>
                <li class="list-inline-item"> <a href="https://www.linkedin.com/in/hamza-javed-48574936b/" target="_blank" class="link-white"><i class="bi bi-linkedin"></i></a> </li>
            </ul>
        </div>
    </div>

    <!-- Header START -->
    <header class="header-sticky bg-transparent">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-xl" >
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand me-0" href="{{ route('index') }}">
                    <img class="light-mode-item navbar-brand-item" src="{{ asset('assets/images/codebeter horizontal logo-sm.png') }}" alt="logo">
                    <img class="dark-mode-item navbar-brand-item"  src="{{ asset('assets/images/codebeter horizontal logo-sm.png') }}" alt="logo">
                </a>
                <!-- Logo END -->

                <!-- Main navbar START -->
                <div class="navbar-collapse collapse" id="navbarCollapse" >

                <ul class="navbar-nav navbar-nav-scroll dropdown-hover mx-auto">

                        <!-- Nav item -->
                        <li class="nav-item"> <a class="nav-link" href="{{route('index')}}">Home</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('about') }}">About</a> </li>


                        <!-- Nav item -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                            <div class="dropdown-menu dropdown-menu-size-xl dropdown-menu-center p-xl-3">
                                <div class="row row-cols-1 row-cols-md-2 pt-2">
                                    <!-- Doc menu -->
                                    <div class="col">
                                        <div class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3">
                                            <div class="d-flex">
                                                <!-- Icon -->
                                                <div class="icon-md bg-info bg-opacity-15 d-flex justify-content-center align-items-center text-primary rounded flex-shrink-0"><i class="bi bi-file-earmark-text fs-6"></i></div>
                                                <!-- Content -->
                                                <div class="mx-3">
                                                    <p class="stretched-link heading-color fw-bold mb-0">Website Development</p>
                                                    <p class="mb-0 text-body small">Custom web solutions tailored to your needs.</p>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <a class="icon-link icon-link-hover text-primary-hover stretched-link" href="{{ route('services') }}"><i class="bi bi-chevron-right"></i> </a>
                                        </div>
                                    </div>

                                    <!-- Doc menu -->
                                    <div class="col">
                                        <div class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3">
                                            <div class="d-flex">
                                                <!-- Icon -->
                                                <div class="icon-md bg-pink bg-opacity-15 d-flex justify-content-center align-items-center text-pink rounded flex-shrink-0"><i class="bi bi-stickies fs-6"></i></div>
                                                <!-- Content -->
                                                <div class="mx-3">
                                                    <p class="stretched-link heading-color fw-bold mb-0">API Development</p>
                                                    <p class="mb-0 text-body small">Configured API solutions for seamless system integration.</p>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <a class="icon-link icon-link-hover text-primary-hover stretched-link" href="{{ route('services.api') }}"><i class="bi bi-chevron-right"></i> </a>
                                        </div>
                                    </div>

                                    <!-- Doc menu -->
                                    <div class="col">
                                        <div class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3">
                                            <div class="d-flex">
                                                <!-- Icon -->
                                                <div class="icon-md bg-success bg-opacity-15 d-flex justify-content-center align-items-center text-success rounded flex-shrink-0"><i class="bi bi-bullseye fs-6"></i></div>
                                                <!-- Content -->
                                                <div class="mx-3">
                                                    <p class="stretched-link heading-color fw-bold mb-0">CRM</p>
                                                    <p class="mb-0 text-body small">We develop CRMs that boost customer engagement.</p>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <a class="icon-link icon-link-hover text-primary-hover stretched-link" href="{{ route('crm') }}"><i class="bi bi-chevron-right"></i> </a>
                                        </div>
                                    </div>

                                    <!-- Doc menu -->
                                    <div class="col">
                                        <div class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3">
                                            <div class="d-flex">
                                                <!-- Icon -->
                                                <div class="icon-md bg-warning bg-opacity-15 d-flex justify-content-center align-items-center text-warning rounded flex-shrink-0"><i class="bi bi-mask fs-6"></i></div>
                                                <!-- Content -->
                                                <div class="mx-3">
                                                    <p class="stretched-link heading-color fw-bold mb-0">POS (Point of sale system)</p>
                                                    <p class="mb-0 text-body small">Integrated POS solutions for real-time transaction tracking.</p>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <a class="icon-link icon-link-hover text-primary-hover stretched-link" href="{{ route('pos') }}" target="_blank"><i class="bi bi-chevron-right"></i> </a>
                                        </div>
                                    </div>

                                    <!-- Doc menu -->
                                    <div class="col">
                                        <div class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3">
                                            <div class="d-flex">
                                                <!-- Icon -->
                                                <div class="icon-md bg-info bg-opacity-15 d-flex justify-content-center align-items-center text-info rounded flex-shrink-0"><i class="bi bi-grid-fill fs-6"></i></div>
                                                <!-- Content -->
                                                <div class="mx-3">
                                                    <p class="stretched-link heading-color fw-bold mb-0">Mobile App Development</p>
                                                    <p class="mb-0 text-body small">Innovative mobile solutions for growing your business.</p>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <a class="icon-link icon-link-hover text-primary-hover stretched-link" href="{{ route('app.development') }}" ><i class="bi bi-chevron-right"></i> </a>
                                        </div>
                                    </div>

                                    <!-- Doc menu -->
{{--                                    <div class="col">--}}
{{--                                        <div class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3">--}}
{{--                                            <div class="d-flex">--}}
{{--                                                <!-- Icon -->--}}
{{--                                                <div class="icon-md bg-purple bg-opacity-15 text-purple rounded flex-shrink-0"><i class="bi bi-chat-dots fs-6"></i></div>--}}
{{--                                                <!-- Content -->--}}
{{--                                                <div class="mx-3">--}}
{{--                                                    <p class="stretched-link heading-color fw-bold mb-0">Support and maintenance</p>--}}
{{--                                                    <p class="mb-0 text-body small">Need help? Our customers support is there to help you.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- Button -->--}}
{{--                                            <a class="icon-link icon-link-hover text-primary-hover stretched-link" href="#"><i class="bi bi-chevron-right"></i> </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </li>


                        <li class="nav-item"> <a class="nav-link" href="{{ route('portfolio') }}">Work</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('carrer') }}">Carrier</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('contact') }}">Contact us</a> </li>
                        <li class="nav-item d-block d-sm-none ">
                            <a href="#" class="btn text-light btn-sm mb-0 rounded-3 py-3 py-md-3 py-lg-3 py-xl-3" style="width: 100% !important;background: linear-gradient(to right, #7F39F8 0%, #543DE7 51%, #7F39F8 100%);" data-bs-toggle="offcanvas" data-bs-target="#scheduleCall" aria-controls="scheduleCall">
                                <i class="bi bi-calendar-week text-light me-2 "></i>
                                Launch Project</a>
                        </li>
                    </ul>
                </div>
                <!-- Main navbar END -->

                <!-- Buttons -->
                <ul class="nav align-items-center dropdown-hover ms-sm-2">
                    <!-- Dark mode option START -->
{{--                    <li class="nav-item dropdown dropdown-animation">--}}
{{--                        <button class="btn btn-link mb-0 px-2 lh-1" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"  class="bi bi-circle-half theme-icon-active fill-mode fa-fw" viewBox="0 0 16 16">--}}
{{--                                <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>--}}
{{--                                <use href="#"></use>--}}
{{--                            </svg>--}}
{{--                        </button>--}}

{{--                        <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">--}}
{{--                            <li class="mb-1">--}}
{{--                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">--}}
{{--                                    <svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">--}}
{{--                                        <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>--}}
{{--                                        <use href="#"></use>--}}
{{--                                    </svg>Light--}}
{{--                                </button>--}}
{{--                            </li>--}}
{{--                            <li class="mb-1">--}}
{{--                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">--}}
{{--                                        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>--}}
{{--                                        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>--}}
{{--                                        <use href="#"></use>--}}
{{--                                    </svg>Dark--}}
{{--                                </button>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">--}}
{{--                                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>--}}
{{--                                        <use href="#"></use>--}}
{{--                                    </svg>Auto--}}
{{--                                </button>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <!-- Dark mode option END -->

                    <!-- Schedule button -->
                    <li class="nav-item ms-2 d-none d-sm-block">
                        <a href="#" class="btn text-light btn-sm mb-0 rounded-3 py-2 py-md-3 py-lg-3 py-xl-3" style="    background: linear-gradient(to right, #7F39F8 0%, #543DE7 51%, #7F39F8 100%);" data-bs-toggle="offcanvas" data-bs-target="#scheduleCall" aria-controls="scheduleCall">
                            <i class="bi bi-calendar-week text-light me-2 "></i>
                            Launch Project</a>
                    </li>

                    <!-- Responsive navbar toggler -->
                    <li class="nav-item">
                        <button class="navbar-toggler ms-sm-3 p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-animation">
								<span></span>
								<span></span>
								<span></span>
							</span>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- Header END -->
</div>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->


@yield('contant')




<!-- =======================
Footer START -->
<footer class="bg-dark pt-8 pt-md-7 position-relative" data-bs-theme="dark">

    <div class="container">
        <div class="row g-4 justify-content-between">
            <!-- Widget 1 START -->
            <div class="col-lg-4">
                <!-- logo -->
                <a href="{{ route('index') }}">
                    <img class="h-40px" src="{{ asset('assets/images/codebeter horizontal logo-sm.png') }}" alt="logo">
                </a>

                <p class="my-3 my-lg-4">Some of the most advanced businesses in the world trust us. Use our web, mobile, e-commerce, and software development services to improve your company's profile.</p>
                <!-- Social icon -->
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-secondary" target="_blank" href="https://www.facebook.com/profile.php?id=61577180078622"><i class="bi bi-facebook lh-base"></i></a> </li>
{{--                    <li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-secondary" href="#"><i class="bi bi-instagram lh-base"></i></a> </li>--}}
                    <li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-secondary" target="_blank" href="https://x.com/CodeBeter"><i class="bi bi-twitter-x lh-base"></i></a> </li>
                    <li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-secondary" target="_blank" href="https://www.linkedin.com/in/hamza-javed-dev/"><i class="bi bi-linkedin lh-base"></i></a> </li>
                </ul>
            </div>
            <!-- Widget 1 END -->

            <!-- Widget 2 START -->
            <div class="col-lg-6 col-xxl-4">
                <div class="row g-4">
                    <!-- Link block -->
                    <div class="col-6">
                        <h6 class="mb-3 mb-sm-4">Company</h6>
                        <!-- Links -->
                        <ul class="nav flex-column gap-1">
                            <li class="nav-item"><a class="nav-link pt-0" href="{{ route('about') }}">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('carrer') }}">Career <span class="badge bg-primary ms-2">2 jobs</span></a></li>
{{--                            <li class="nav-item"><a class="nav-link" href="{{ route('') }}">Career detail</a></li>--}}
{{--                            <li class="nav-item"><a class="nav-link" href="{{ route('') }}">Become a partner</a></li>--}}
                            <li class="nav-item"><a class="nav-link pt-0" href="{{ route('portfolio') }}">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('service') }}">Services</a></li>
                        </ul>
                    </div>

                    <!-- Link block -->
                    <div class="col-6">
                        <h6 class="mb-3 mb-sm-4">Services</h6>
                        <!-- Links -->
                        <ul class="nav flex-column gap-1">
                            <li class="nav-item"><a class="nav-link pt-0" href="{{ route('services') }}">Website Development</a></li>
                            <li class="nav-item"><a class="nav-link pt-0" href="{{ route('services.api') }}">API Development</a></li>
                            <li class="nav-item"><a class="nav-link pt-0" href="{{ route('crm') }}">CRM</a></li>
                            <li class="nav-item"><a class="nav-link pt-0" href="{{ route('pos') }}">POS</a></li>
                            <li class="nav-item"><a class="nav-link pt-0" href="{{ route('app.development') }}">Mobile App Development</a></li>
{{--                            <li class="nav-item"><a class="nav-link" href="{{ route('pricing') }}">Pricing <span class="badge bg-success ms-2">New</span></a></li>--}}
{{--                            <li class="nav-item"><a class="nav-link" href="">Blogs</a></li>--}}
{{--                            <li class="nav-item"><a class="nav-link" href="">Blog detail</a></li>--}}
{{--                            <li class="nav-item"><a class="nav-link" href="#">Success stories<i class="bi bi-box-arrow-up-right small ms-2"></i></a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Widget 2 END -->
        </div>

        <!-- Divider -->
        <hr class="mt-xl-5 mb-0 opacity-1">

        <!-- Bottom footer -->
        <div class="d-md-flex justify-content-between align-items-center text-center text-lg-start py-4">
            <!-- copyright text -->
            <div class="text-body small mb-3 mb-md-0"> Copyrights ©2025 CodeBeter</div>

            <!-- Policy link -->
{{--            <ul class="nav d-flex justify-content-center gap-1 mb-0">--}}
{{--                <li class="nav-item"><a class="nav-link small py-0" href="#">Privacy policy</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link small py-0 pe-0" href="#">Terms & conditions</a></li>--}}
{{--            </ul>--}}
        </div>
    </div>
</footer>
<!-- =======================
Footer END -->

<!-- Schedule call offcanvas content START -->
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="scheduleCall" aria-labelledby="scheduleCallLabel">
    <div class="offcanvas-header">
        <h6 class="offcanvas-title" id="scheduleCallLabel">Start your project</h6>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <!-- Form START -->
        <form class="row g-3" action="{{ route('project.mail') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="col-12">
                <label class="form-label">Full name *</label>
                <input type="text" name="fullname" class="form-control form-control-sm" placeholder="Full name">
            </div>

            <div class="col-12">
                <label class="form-label">Email address *</label>
                <input type="email" name="email" class="form-control form-control-sm" id="floatingInput" placeholder="name@example.com">
            </div>

            <div class="col-12">
                <label class="form-label">Address *</label>
                <textarea class="form-control" name="address" placeholder="Write your address here...." id="floatingTextarea2" style="height: 150px"></textarea>
            </div>

            <div class="col-12">
                <label class="form-label">Phone number *</label>
                <input type="text" name="phone_number" class="form-control form-control-sm" placeholder="(xxx) xx xxxx">
            </div>
            <div class="col-12">
                <label class="form-label">Project Name *</label>
                <input type="text" name="project_name" class="form-control form-control-sm" placeholder="Write your project Name">
            </div>
            <div class="col-12">
                <label class="form-label">Select Services *</label>
                <select class="form-control form-control-sm" name="services">
                    <option class="" >Select services</option>
                    <option value="Website development">Website development</option>
                    <option value="API integration">API integration</option>
                    <option value="CRM">CRM</option>
                    <option value="POS">POS</option>
                    <option value="Support and maintenance">Support and maintenance</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                </select>
            </div>

            <div class="col-12">
                <label class="form-label">Estimated Budget *</label>
                <input type="text" name="estimated_budget" class="form-control form-control-sm" placeholder="Write your Estimated Budget ">
            </div>

            <div class="col-12">
                <label class="form-label">Project Description *</label>
                <textarea class="form-control" name="project_desc" placeholder="Write your message here...." id="floatingTextarea2" style="height: 150px"></textarea>
            </div>
            <div class="col-12">
                <label class="form-label">Upload Your project details *</label>
                <input type="file" name="upload_pro_detail" class="form-control form-control-sm" placeholder="Write your project details">
            </div>
            <!-- Button -->
            <button type="submit" class="btn btn-primary mb-0">Send a message</button>
        </form>
        <!-- Form END -->
    </div>
</div>
<!-- Schedule call offcanvas content END -->

@if(session('success'))
    <div id="successAlert"
         class="alert alert-success alert-dismissible fade show"
         role="alert"
         style="position: fixed; bottom: 20px; right: 20px; z-index: 9999; display: none;">
        <i class="fa fa-check-circle"></i>
        {{ session('success') }}
{{--        <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--            <span aria-hidden="true">&times;</span>--}}
{{--        </button>--}}
    </div>
@endif

<script>
    document.addEventListener("DOMContentLoaded", function () {
        @if(session('success'))
        let alertBox = document.getElementById("successAlert");
        alertBox.style.display = "block"; // Show immediately
        setTimeout(function () {
            alertBox.style.display = "none"; // Hide after 5 seconds
        }, 5000);
        @endif
    });
</script>




<!-- Cookie message -->
{{--<div class="alert alert-secondary alert-dismissible fade show position-fixed bottom-0 start-50 translate-middle-x z-index-99 rounded-3 d-none d-md-flex justify-content-between align-items-center shadow px-3 py-2" role="alert">--}}
{{--    <p class="heading-color fw-semibold mb-md-0">🍪 The website uses cookies to improve your web experience.</p>--}}
{{--    <a href="#" class="bg-success text-success bg-opacity-10 rounded-pill py-1 px-3 mb-0 ms-md-2" data-bs-dismiss="alert" aria-label="Close">Accept--}}
{{--    </a>--}}
{{--</div>--}}

<!-- Back to top -->
<div class="back-top"></div>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!--Vendors-->
<script src="{{ asset('assets/vendor/ityped/index.js') }}"></script>
<script src="{{ asset('assets/vendor/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/sticky-js/sticky.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}"></script>

<!-- Theme Functions -->
<script src="{{ asset('assets/js/functions.js') }}"></script>

</body>

</html>
