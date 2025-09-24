
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

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <section class="bg-secondary position-relative vh-100">
            <div class="container h-100 d-flex flex-column justify-content-center">
                <div class="row justify-content-center align-items-center">
                    <!-- Main content START -->
                    <div class="col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5 position-relative">
                        <!-- UFO decoration -->
                        <div class="vert-move position-absolute top-0 start-0 ms-n5 mt-n5 z-index-9 d-none d-sm-block">
                            <img src="assets/images/login/elements/ufo.png" class="h-100px rotate-343" alt="ufo image">
                        </div>
                        <!-- Blur ring decoration -->
                        <div class="position-absolute bottom-0 end-0 mb-n8 me-n5 d-none d-sm-block">
                            <img src="assets/images/login/elements/grad-shape/blur-decoration.svg" class="blur-8 opacity-2" alt="Grad shape">
                        </div>

                        <!-- Sign in START -->
                        <div class="card card-body bg-body bg-opacity-25 bg-blur border border-white border-opacity-10 position-relative rounded-4 shadow-primary text-center p-4 p-sm-5">
                            <!-- Title -->
                            <h1 class="mb-2 h3 fw-bold">Sign in</h1>
                            <p class="mb-0">Don't have an account?<a href="sign-up.html" class="text-primary-grad"> Click here to sign up</a></p>
                            <!-- Form START -->
                            <form class="mt-2 mt-sm-4">
                                <!-- Email -->
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Enter email">
                                </div>
                                <!-- New password -->
                                <div class="mb-3 position-relative">
                                    <!-- Password -->
                                    <div class="mb-3 position-relative">
                                        <input type="password" class="form-control fakepassword pe-6" id="psw-input" placeholder="Enter your password">
                                        <span class="position-absolute top-50 end-0 translate-middle-y p-0 me-2">
										<i class="fakepasswordicon bi bi-eye-slash-fill cursor-pointer p-2"></i>
									</span>
                                    </div>
                                </div>
                                <!-- Remember me -->
                                <div class="mb-3 d-sm-flex justify-content-between">
                                    <div>
                                        <input type="checkbox" class="form-check-input border" id="rememberCheck">
                                        <label class="form-check-label" for="rememberCheck">Remember me?</label>
                                    </div>
                                    <a href="forgot-password.html">Forgot password?</a>
                                </div>
                                <!-- Button -->
                                <div class="d-grid"><button type="submit" class="btn btn-primary">Login</button></div>

                                <!-- Divider -->
                                <div class="d-flex align-items-center my-3">
                                    <hr class="w-100">
                                    <p class="small px-4 mb-0">Or</p>
                                    <hr class="w-100">
                                </div>

                                <!-- Facebook and google button -->
                                <div class="d-flex justify-content-center gap-3">
                                    <a class="btn btn-icon bg-facebook" href="#"><i class="bi bi-facebook lh-base"></i></a>
                                    <a class="btn btn-icon border bg-white" href="#"><i class="bi bi-google lh-base text-google-icon"></i></a>
                                </div>

                                <!-- Copyright -->
                                <div class="text-body small mt-3"> Copyrights ©2025 Folio. Build by <a href="#" target="_blank" class="text-body text-primary-hover hover-underline-animation">StackBros</a>. </div>
                            </form>
                            <!-- Form END -->
                        </div>
                        <!-- Sign in END -->
                    </div>
                </div>
                <!-- Row END -->
            </div>
        </section>
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Back to top -->
    <div class="back-top"></div>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Theme Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>