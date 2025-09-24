<!DOCTYPE html>
<html lang="en">

<head>

    <title>Folio - Multipurpose Bootstrap Theme</title>

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
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/glightbox/css/glightbox.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- Header START -->
    <header class="header-sticky header-absolute">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand me-0" href="index.html">
				<img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
			</a>
                <!-- Logo END -->

                <!-- Main navbar START -->
                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll dropdown-hover mx-auto">

                        <!-- Nav item -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Demos</a>
                            <div class="dropdown-menu dropdown-menu-size-lg overflow-hidden p-0">
                                <div class="row px-3 py-4">
                                    <!-- Image and button -->
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled">
                                            <li> <a class="dropdown-item" href="index.html">Classic Default</a> </li>
                                            <li> <a class="dropdown-item" href="index-software-company.html">Software Company</a> </li>
                                            <li> <a class="dropdown-item" href="index-finance-consulting.html">Finance Consulting</a> </li>
                                            <li> <a class="dropdown-item" href="index-ai-agency.html">AI Agency</a> </li>
                                            <li> <a class="dropdown-item" href="index-product-landing.html">Product Landing</a> </li>
                                        </ul>
                                    </div>

                                    <!-- Image and button -->
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled">
                                            <li> <a class="dropdown-item" href="index-saas.html">SaaS</a> </li>
                                            <li> <a class="dropdown-item" href="index-ai-chatbot.html">SaaS AI Chatbot</a> </li>
                                            <li> <a class="dropdown-item" href="index-application-showcase.html">Application Showcase</a> </li>
                                            <li> <a class="dropdown-item" href="index-personal-portfolio.html">Personal Portfolio</a> </li>
                                            <li> <a class="dropdown-item" href="index-blog.html">Blog home</a> </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Cta -->
                                <div class="h-200px position-relative" style="background:url(assets/images/elements/nav-cta.jpg) no-repeat; background-size:cover; background-position:center;">
                                    <!-- Bg overlay -->
                                    <div class="bg-overlay bg-dark bg-opacity-10"></div>
                                </div>
                            </div>
                        </li>

                        <!-- Nav item -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <!-- Dropdown submenu -->
                                <li class="dropdown dropend">
                                    <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">About</a>
                                    <ul class="dropdown-menu" data-bs-popper="none">
                                        <li> <a class="dropdown-item" href="about-v1.html">About v.1</a> </li>
                                        <li> <a class="dropdown-item" href="about-v2.html">About v.2</a> </li>
                                        <li> <a class="dropdown-item" href="services-grid.html">Services Grid</a></li>
                                        <li> <a class="dropdown-item" href="services-list.html">Services List</a></li>
                                        <li> <a class="dropdown-item" href="service-single.html">Service Single</a></li>
                                        <li> <a class="dropdown-item" href="team.html">Team</a></li>
                                        <li> <a class="dropdown-item" href="career.html">Career <span class="badge text-bg-success ms-2">2 Job</span></a></li>
                                        <li> <a class="dropdown-item" href="career-single.html">Career Single</a></li>
                                    </ul>
                                </li>

                                <li> <a class="dropdown-item" href="contact-us-v1.html">Contact Us v1</a> </li>
                                <li> <a class="dropdown-item" href="contact-us-v2.html">Contact Us v2</a> </li>
                                <li> <a class="dropdown-item" href="pricing-v1.html">Pricing v1</a> </li>
                                <li> <a class="dropdown-item" href="pricing-v2.html">Pricing v2</a> </li>

                                <!-- Dropdown submenu -->
                                <li class="dropdown dropend">
                                    <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Saas pages</a>
                                    <ul class="dropdown-menu" data-bs-popper="none">
                                        <li> <a class="dropdown-item" href="feature-single.html">Feature Single</a> </li>
                                        <li> <a class="dropdown-item" href="integrations.html">Integrations</a> </li>
                                        <li> <a class="dropdown-item" href="integration-single.html">Integrations Single</a> </li>
                                    </ul>
                                </li>

                                <!-- Dropdown submenu -->
                                <li class="dropdown dropend">
                                    <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Portfolio</a>
                                    <ul class="dropdown-menu" data-bs-popper="none">
                                        <li> <a class="dropdown-item" href="portfolio-grid.html">Portfolio Grid</a> </li>
                                        <li> <a class="dropdown-item" href="portfolio-list.html">Portfolio List</a> </li>
                                        <li> <a class="dropdown-item" href="portfolio-modern.html">Portfolio Modern</a> </li>
                                        <li> <a class="dropdown-item" href="portfolio-case-study-v1.html">Portfolio case study v1</a> </li>
                                        <li> <a class="dropdown-item" href="portfolio-case-study-v2.html">Portfolio case study v2</a> </li>
                                    </ul>
                                </li>

                                <!-- Dropdown submenu -->
                                <li class="dropdown dropend">
                                    <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Blog</a>
                                    <ul class="dropdown-menu" data-bs-popper="none">
                                        <li> <a class="dropdown-item" href="blog-minimal.html">Blog Minimal</a> </li>
                                        <li> <a class="dropdown-item" href="blog-single.html">Blog Single</a> </li>
                                    </ul>
                                </li>

                                <li> <a class="dropdown-item" href="error-404.html">Error 404</a> </li>
                                <li> <a class="dropdown-item" href="coming-soon.html">Coming soon</a> </li>

                                <!-- Dropdown submenu -->
                                <li class="dropdown dropend">
                                    <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Authentication</a>
                                    <ul class="dropdown-menu" data-bs-popper="none">
                                        <li> <a class="dropdown-item" href="sign-in.html">Sign in</a> </li>
                                        <li> <a class="dropdown-item" href="sign-up.html">Sign up</a> </li>
                                        <li> <a class="dropdown-item" href="forgot-password.html">Forgot Password</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!-- Nav item -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doc</a>
                            <div class="dropdown-menu dropdown-menu-size-xl dropdown-menu-center p-xl-3">
                                <div class="row row-cols-1 row-cols-md-2 pt-2">
                                    <!-- Doc menu -->
                                    <div class="col">
                                        <div class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3">
                                            <div class="d-flex">
                                                <!-- Icon -->
                                                <div class="icon-md bg-primary bg-opacity-15 text-primary rounded flex-shrink-0"><i class="bi bi-file-earmark-text fs-6"></i></div>
                                                <!-- Content -->
                                                <div class="mx-3">
                                                    <p class="stretched-link heading-color fw-bold mb-0">Documentation</p>
                                                    <p class="mb-0 text-body small">Using documentation you can easily develop projects</p>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <a class="icon-link icon-link-hover text-primary-hover stretched-link" href="#" target="_blank"><i class="bi bi-chevron-right"></i> </a>
                                        </div>
                                    </div>

                                    <!-- Doc menu -->
                                    <div class="col">
                                        <div class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3">
                                            <div class="d-flex">
                                                <!-- Icon -->
                                                <div class="icon-md bg-pink bg-opacity-15 text-pink rounded flex-shrink-0"><i class="bi bi-stickies fs-6"></i></div>
                                                <!-- Content -->
                                                <div class="mx-3">
                                                    <p class="stretched-link heading-color fw-bold mb-0">Snippets</p>
                                                    <p class="mb-0 text-body small">Development guides for building projects with Folio</p>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <a class="icon-link icon-link-hover text-primary-hover stretched-link" href="#" target="_blank"><i class="bi bi-chevron-right"></i> </a>
                                        </div>
                                    </div>

                                    <!-- Doc menu -->
                                    <div class="col">
                                        <div class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3">
                                            <div class="d-flex">
                                                <!-- Icon -->
                                                <div class="icon-md bg-success bg-opacity-15 text-success rounded flex-shrink-0"><i class="bi bi-bullseye fs-6"></i></div>
                                                <!-- Content -->
                                                <div class="mx-3">
                                                    <p class="stretched-link heading-color fw-bold mb-0">Changelog</p>
                                                    <p class="mb-0 text-body small">Recent feature release and announcement.</p>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <a class="icon-link icon-link-hover text-primary-hover stretched-link" href="#" target="_blank"><i class="bi bi-chevron-right"></i> </a>
                                        </div>
                                    </div>

                                    <!-- Doc menu -->
                                    <div class="col">
                                        <div class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3">
                                            <div class="d-flex">
                                                <!-- Icon -->
                                                <div class="icon-md bg-warning bg-opacity-15 text-warning rounded flex-shrink-0"><i class="bi bi-mask fs-6"></i></div>
                                                <!-- Content -->
                                                <div class="mx-3">
                                                    <p class="stretched-link heading-color fw-bold mb-0">Playwright tips</p>
                                                    <p class="mb-0 text-body small">Tips and In-depth guide for headless browser automation</p>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <a class="icon-link icon-link-hover text-primary-hover stretched-link" href="#" target="_blank"><i class="bi bi-chevron-right"></i> </a>
                                        </div>
                                    </div>

                                    <!-- Doc menu -->
                                    <div class="col">
                                        <div class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3">
                                            <div class="d-flex">
                                                <!-- Icon -->
                                                <div class="icon-md bg-info bg-opacity-15 text-info rounded flex-shrink-0"><i class="bi bi-grid-fill fs-6"></i></div>
                                                <!-- Content -->
                                                <div class="mx-3">
                                                    <p class="stretched-link heading-color fw-bold mb-0">Integrations</p>
                                                    <p class="mb-0 text-body small">Taking advantage of integrations with other services.</p>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <a class="icon-link icon-link-hover text-primary-hover stretched-link" href="integrations.html" target="_blank"><i class="bi bi-chevron-right"></i> </a>
                                        </div>
                                    </div>

                                    <!-- Doc menu -->
                                    <div class="col">
                                        <div class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3">
                                            <div class="d-flex">
                                                <!-- Icon -->
                                                <div class="icon-md bg-purple bg-opacity-15 text-purple rounded flex-shrink-0"><i class="bi bi-chat-dots fs-6"></i></div>
                                                <!-- Content -->
                                                <div class="mx-3">
                                                    <p class="stretched-link heading-color fw-bold mb-0">Supports</p>
                                                    <p class="mb-0 text-body small">Need help? Our customers support is there to help you.</p>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <a class="icon-link icon-link-hover text-primary-hover stretched-link" href="#" target="_blank"><i class="bi bi-chevron-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Nav item -->
                        <li class="nav-item"> <a class="nav-link" href="contact-us-v1.html">Contact us</a> </li>
                    </ul>
                </div>
                <!-- Main navbar END -->

                <!-- Buttons -->
                <ul class="nav align-items-center dropdown-hover ms-sm-2">
                    <!-- Dark mode option START -->
                    <li class="nav-item dropdown dropdown-animation">
                        <button class="btn btn-link mb-0 px-2 lh-1" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"  class="bi bi-circle-half theme-icon-active fill-mode fa-fw" viewBox="0 0 16 16">
						<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
						<use href="#"></use>
					</svg>
					</button>

                        <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
                            <li class="mb-1">
                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
								<svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
									<path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
									<use href="#"></use>
								</svg>Light
							</button>
                            </li>
                            <li class="mb-1">
                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
									<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
									<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
									<use href="#"></use>
								</svg>Dark
							</button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
									<use href="#"></use>
								</svg>Auto
							</button>
                            </li>
                        </ul>
                    </li>
                    <!-- Dark mode option END -->

                    <!-- Sign up button -->
                    <li class="nav-item ms-2 d-none d-sm-block">
                        <a href="sign-up.html" class="btn btn-sm btn-primary-grad mb-0">Sign up</a>
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

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Hero START -->
        <section class="position-relative pt-8 pt-xl-9 overflow-hidden">
            <!-- Blur decoration -->
            <div class="position-absolute end-0 top-0">
                <img src="assets/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-1 blur-8 h-300px rotate-335" alt="Grad shape">
            </div>
            <!-- Blur decoration -->
            <div class="position-absolute start-0 top-0">
                <img src="assets/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-2 blur-9 h-300px rotate-335" alt="Grad shape">
            </div>
            <!-- Box pattern -->
            <div class="position-absolute top-0 start-0">
                <img src="assets/images/elements/bg-pattern.svg" style="opacity: 0.05;" alt="bg pattern">
            </div>

            <div class="container position-relative">
                <!-- Title and content -->
                <div class="row">
                    <div class="col-md-7 mx-auto text-center">
                        <h1 class="mb-4">Meet our experts</h1>
                        <p class="mb-0">Our dedicated team is passionate about delivering exceptional results that exceed your expectations.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Hero END -->

        <!-- =======================
Team START -->
        <section class="pt-0">
            <div class="container">
                <div class="row g-4 g-sm-5">

                    <!-- Team item -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                            <div class="card-img-scale-wrapper">
                                <!-- Social links -->
                                <div class="hover-content h-100">
                                    <ul class="list-group list-group-borderless position-absolute bottom-0 end-0 me-3 mb-3">
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-instagram-gradient" href="#"><i class="bi bi-instagram"></i></a> </li>
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-linkedin" href="#"><i class="bi bi-linkedin"></i></a> </li>
                                    </ul>
                                </div>
                                <!-- Card Image -->
                                <img src="assets/images/team/3by4/03.jpg" class="card-img-top img-scale" alt="card image">
                            </div>

                            <!-- Card body -->
                            <div class="card-body text-center px-0">
                                <h6 class="mb-0">Emma Watson</h6>
                                <small>Founder</small>
                            </div>
                        </div>
                    </div>

                    <!-- Team item -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                            <div class="card-img-scale-wrapper">
                                <!-- Social links -->
                                <div class="hover-content h-100">
                                    <ul class="list-group list-group-borderless position-absolute bottom-0 end-0 me-3 mb-3">
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-facebook" href="#"><i class="bi bi-facebook"></i></a> </li>
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-instagram-gradient" href="#"><i class="bi bi-instagram"></i></a> </li>
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-linkedin" href="#"><i class="bi bi-linkedin"></i></a> </li>
                                    </ul>
                                </div>
                                <!-- Card Image -->
                                <img src="assets/images/team/3by4/02.jpg" class="card-img-top img-scale" alt="card image">
                            </div>

                            <!-- Card body -->
                            <div class="card-body text-center px-0">
                                <h6 class="mb-0">Allen Smith</h6>
                                <small>Co-Founder</small>
                            </div>
                        </div>
                    </div>

                    <!-- Team item -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                            <div class="card-img-scale-wrapper">
                                <!-- Social links -->
                                <div class="hover-content h-100">
                                    <ul class="list-group list-group-borderless position-absolute bottom-0 end-0 me-3 mb-3">
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-facebook" href="#"><i class="bi bi-facebook"></i></a> </li>
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-linkedin" href="#"><i class="bi bi-linkedin"></i></a> </li>
                                    </ul>
                                </div>
                                <!-- Card Image -->
                                <img src="assets/images/team/3by4/04.jpg" class="card-img-top img-scale" alt="card image">
                            </div>

                            <!-- Card body -->
                            <div class="card-body text-center px-0">
                                <h6 class="mb-0">Louis Ferguson</h6>
                                <small>Creative Director</small>
                            </div>
                        </div>
                    </div>

                    <!-- Team item -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                            <div class="card-img-scale-wrapper">
                                <!-- Social links -->
                                <div class="hover-content h-100">
                                    <ul class="list-group list-group-borderless position-absolute bottom-0 end-0 me-3 mb-3">
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-instagram-gradient" href="#"><i class="bi bi-instagram"></i></a> </li>
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-linkedin" href="#"><i class="bi bi-linkedin"></i></a> </li>
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-twitter-x" href="#"><i class="bi bi-twitter-x"></i></a> </li>
                                    </ul>
                                </div>
                                <!-- Card Image -->
                                <img src="assets/images/team/3by4/06.jpg" class="card-img-top img-scale" alt="card image">
                            </div>

                            <!-- Card body -->
                            <div class="card-body text-center px-0">
                                <h6 class="mb-0">Emily Johnson</h6>
                                <small>Marketing Strategist</small>
                            </div>
                        </div>
                    </div>

                    <!-- Team item -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                            <div class="card-img-scale-wrapper">
                                <!-- Social links -->
                                <div class="hover-content h-100">
                                    <ul class="list-group list-group-borderless position-absolute bottom-0 end-0 me-3 mb-3">
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-instagram-gradient" href="#"><i class="bi bi-instagram"></i></a> </li>
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-twitter-x" href="#"><i class="bi bi-twitter-x"></i></a> </li>
                                    </ul>
                                </div>
                                <!-- Card Image -->
                                <img src="assets/images/team/3by4/01.jpg" class="card-img-top img-scale" alt="card image">
                            </div>

                            <!-- Card body -->
                            <div class="card-body text-center px-0">
                                <h6 class="mb-0">Michael Brown</h6>
                                <small>Lead Developer</small>
                            </div>
                        </div>
                    </div>

                    <!-- Team item -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                            <div class="card-img-scale-wrapper">
                                <!-- Social links -->
                                <div class="hover-content h-100">
                                    <ul class="list-group list-group-borderless position-absolute bottom-0 end-0 me-3 mb-3">
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-instagram-gradient" href="#"><i class="bi bi-instagram"></i></a> </li>
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-twitter-x" href="#"><i class="bi bi-twitter-x"></i></a> </li>
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-facebook" href="#"><i class="bi bi-facebook"></i></a> </li>
                                    </ul>
                                </div>
                                <!-- Card Image -->
                                <img src="assets/images/team/3by4/08.jpg" class="card-img-top img-scale" alt="card image">
                            </div>

                            <!-- Card body -->
                            <div class="card-body text-center px-0">
                                <h6 class="mb-0">Sarah Davis</h6>
                                <small>Content Specialist</small>
                            </div>
                        </div>
                    </div>

                    <!-- Team item -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                            <div class="card-img-scale-wrapper">
                                <!-- Social links -->
                                <div class="hover-content h-100">
                                    <ul class="list-group list-group-borderless position-absolute bottom-0 end-0 me-3 mb-3">
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-instagram-gradient" href="#"><i class="bi bi-instagram"></i></a> </li>
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-facebook" href="#"><i class="bi bi-facebook"></i></a> </li>
                                    </ul>
                                </div>
                                <!-- Card Image -->
                                <img src="assets/images/team/3by4/05.jpg" class="card-img-top img-scale" alt="card image">
                            </div>

                            <!-- Card body -->
                            <div class="card-body text-center px-0">
                                <h6 class="mb-0">Samuel Bishop</h6>
                                <small>Product designer</small>
                            </div>
                        </div>
                    </div>

                    <!-- Team item -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                            <div class="card-img-scale-wrapper">
                                <!-- Social links -->
                                <div class="hover-content h-100">
                                    <ul class="list-group list-group-borderless position-absolute bottom-0 end-0 me-3 mb-3">
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-instagram-gradient" href="#"><i class="bi bi-instagram"></i></a> </li>
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-twitter-x" href="#"><i class="bi bi-twitter-x"></i></a> </li>
                                        <li class="list-group-item pb-0"> <a class="btn btn-sm btn-round bg-facebook" href="#"><i class="bi bi-facebook"></i></a> </li>
                                    </ul>
                                </div>
                                <!-- Card Image -->
                                <img src="assets/images/team/3by4/07.jpg" class="card-img-top img-scale" alt="card image">
                            </div>

                            <!-- Card body -->
                            <div class="card-body text-center px-0">
                                <h6 class="mb-0">Alex Green</h6>
                                <small>Account Manager</small>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Row END -->
            </div>
        </section>
        <!-- =======================
Team END -->

        <!-- =======================
Video and counter START -->
        <section class="pt-0">
            <div class="container">
                <div class="row g-4 g-sm-5">
                    <!-- Title and counter -->
                    <div class="col-lg-5">
                        <!-- Title -->
                        <h2 class="mb-3">Our lifetime achievements</h2>
                        <p class="mb-0">Join our team Creative Agency Specializing in: Video Production, Web Design, Branding, Brand Strategy.</p>

                        <!-- Counter -->
                        <div class="row mt-4 mt-lg-6">
                            <!-- Item -->
                            <div class="col-sm-5 mb-3 mb-sm-0">
                                <div class="border-2 border-start border-purple border-opacity-50 ps-3">
                                    <div class="d-flex mb-1">
                                        <h3 class="purecounter mb-0" data-purecounter-start="0" data-purecounter-end="80" data-purecounter-delay="300">0</h3>
                                        <span class="h3 text-primary mb-0">+</span>
                                    </div>
                                    <p class="mb-0">Total employees</p>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="col-sm-5">
                                <div class="border-2 border-start border-purple border-opacity-50 ps-3">
                                    <div class="d-flex mb-1">
                                        <h3 class="purecounter mb-0" data-purecounter-start="0" data-purecounter-end="12" data-purecounter-delay="300">0</h3>
                                        <span class="h3 text-primary mb-0">+</span>
                                    </div>
                                    <p class="mb-0">Total awards</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Award list -->
                    <div class="col-lg-7 col-xl-6 ms-auto">
                        <!-- Image -->
                        <div class="card card-body overflow-hidden p-0">
                            <img src="assets/images/team/video-bg.jpg" class="card-img" alt="about-img">
                            <div class="bg-overlay bg-dark opacity-2"></div>
                            <!-- Card img overlay -->
                            <div class="position-absolute end-0 bottom-0 m-3 z-index-2">
                                <a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-sm btn-white" data-glightbox data-gallery="course-video"><i class="bi bi-youtube text-danger fa-fw fa-xl me-1"></i> Watch our story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Video and counter START -->

        <!-- =======================
Cta START -->
        <section class="bg-secondary-grad position-relative rounded-3 overflow-hidden py-6 py-sm-7">
            <!-- BG pattern -->
            <div class="position-absolute end-0 top-0 rotate-13 mt-n5 me-n6 d-none d-sm-block">
                <img src="assets/images/elements/geo-grad-pattern.svg" class="h-600px opacity-3" alt="bg pattern">
            </div>

            <!-- BG pattern -->
            <div class="position-absolute start-0 top-0 rotate-343 mt-n3 ms-n5 d-none d-xl-block">
                <img src="assets/images/elements/grad-shape/10.png" class="h-500px" alt="bg pattern">
            </div>

            <div class="container">
                <div class="row g-4 align-items-center position-relative">
                    <!-- Title and list -->
                    <div class="col-xl-6">
                        <h2>Partner with our <span class="text-primary-grad">creative</span> team</h2>
                        <p class="mb-0">Discover the difference a dedicated, creative, and strategic team can make for your business. </p>
                    </div>

                    <!-- Button -->
                    <div class="col-xl-6 text-xl-end">
                        <a href="#" class="btn btn-dark mb-0">Schedule a consultation</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Cta END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
Footer START -->
    <footer class="bg-dark position-relative pt-6 pt-lg-8" data-bs-theme="dark">
        <div class="container position-relative">
            <!-- Link widgets -->
            <div class="row g-4">

                <!-- Widget item -->
                <div class="col-md-6 col-xl-4">
                    <!-- logo -->
                    <a href="index.html">
					<img class="h-40px" src="assets/images/logo-light.svg" alt="logo">
				</a>
                    <p class="my-3 my-xl-4">A Bootstrap theme that's both stylish and functional, perfect for any type of technology or corporate website.</p>
                </div>

                <div class="col-xl-7 ms-auto">
                    <div class="row g-4">
                        <!-- Widget item -->
                        <div class="col-6 col-md-3">
                            <h6 class="mb-3 mb-xl-4">Company</h6>
                            <!-- Links -->
                            <ul class="nav flex-column gap-1">
                                <li class="nav-item"><a class="nav-link pt-0" href="about-v1.html">About us</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact us</a></li>
                                <li class="nav-item"><a class="nav-link" href="career.html">Career <span class="badge bg-primary ms-2">2 jobs</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="career-single.html">Career detail</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact-us-v2.html">Become a partner</a></li>
                                <li class="nav-item"><a class="nav-link" href="service-v1.html">Services</a></li>
                            </ul>
                        </div>

                        <!-- Widget item -->
                        <div class="col-6 col-md-3">
                            <h6 class="mb-3 mb-xl-4">Resources</h6>
                            <!-- Links -->
                            <ul class="nav flex-column gap-1">
                                <li class="nav-item"><a class="nav-link pt-0" href="portfolio-case-study-v1.html">Case studies</a></li>
                                <li class="nav-item"><a class="nav-link" href="pricing-v1.html">Pricing <span class="badge bg-success ms-2">New</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="blog-minimal.html">Blogs</a></li>
                                <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog detail</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Success stories<i class="bi bi-box-arrow-up-right small ms-2"></i></a></li>
                            </ul>
                        </div>

                        <!-- Widget item -->
                        <div class="col-sm-6 col-md-6">
                            <h6 class="mb-3 mb-xl-4">Download our app</h6>
                            <p class="mb-3">Get instant access to exclusive features for FREE!</p>
                            <div class="row g-2 mb-4 mb-sm-5">
                                <!-- Google play store button -->
                                <div class="col-5 col-sm-6 col-md-5 col-lg-4 col-xl-5">
                                    <a href="#"> <img src="assets/images/elements/google-play.svg" alt=""> </a>
                                </div>
                                <!-- App store button -->
                                <div class="col-5 col-sm-6 col-md-5 col-lg-4 col-xl-5">
                                    <a href="#"> <img src="assets/images/elements/app-store.svg" alt="app-store"> </a>
                                </div>
                            </div>

                            <!-- Social buttons -->
                            <span class="heading-color fw-semibold">Follow on:</span>
                            <ul class="list-inline align-items-center mb-0 mt-3">
                                <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-facebook" href="#"><i class="bi bi-facebook lh-base"></i></a> </li>
                                <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-instagram" href="#"><i class="bi bi-instagram lh-base"></i></a> </li>
                                <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-twitter-x" href="#"><i class="bi bi-twitter-x lh-base"></i></a> </li>
                                <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-linkedin" href="#"><i class="bi bi-linkedin lh-base"></i></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <hr class="mt-xl-5 mb-0 opacity-1">

            <!-- Bottom footer -->
            <div class="d-md-flex justify-content-between align-items-center text-center text-lg-start py-4">
                <!-- copyright text -->
                <div class="text-body small mb-3 mb-md-0"> Copyrights ©2025 Folio. Build by <a href="#" target="_blank" class="text-body text-primary-hover hover-underline-animation">StackBros</a>. </div>

                <!-- Policy link -->
                <ul class="nav d-flex justify-content-center gap-1 mb-0">
                    <li class="nav-item"><a class="nav-link small py-0" href="#">Privacy policy</a></li>
                    <li class="nav-item"><a class="nav-link small py-0 pe-0" href="#">Terms &amp; conditions</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- =======================
Footer END -->

    <!-- Back to top -->
    <div class="back-top"></div>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!--Vendors-->
    <script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.js"></script>

    <!-- Theme Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>