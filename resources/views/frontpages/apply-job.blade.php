
@extends('layout.mainfrontpage')
<style>
    .navbar{
        background-color: white !important;
    }
</style>
@section('contant')


<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
Hero START -->
    <section class="bg-dark position-relative overflow-hidden pt-xl-8 pb-sm-7" data-bs-theme="dark">
        <!-- Decoration START -->
        <!-- Grad blur -->
        <div class="position-absolute top-0 start-0 mt-n9 ms-n5">
            <img src="assets/images/elements/grad-shape/blur-decoration.svg" class="blur-7 opacity-2" alt="Grad shape">
        </div>

        <!-- Grad blur -->
        <div class="position-absolute top-0 start-50 mt-n9 ms-n9">
            <img src="assets/images/elements/grad-shape/blur-decoration.svg" class="blur-8 opacity-1" alt="Grad shape">
        </div>
        <!-- Decoration START -->

        <div class="container position-relative pt-4 pt-sm-5">
            <div class="row g-4 align-items-center">
                <!-- Title and content -->
                <div class="col-md-7 col-xl-5">
                    <!-- Breadcrumb -->
                    <a href="#" class="text-body-secondary text-primary-hover icon-link icon-link-hover"><i class="bi bi-arrow-left me-1"></i>Back to listing</a>
                    <!-- Title -->
                    <h1 class="h2 mt-3 mb-0">Machine Learning Specialist</h1>
                </div>

                <div class="col-md-4 ms-auto text-md-end">
                    <!-- Button -->
                    <a class="btn btn-success icon-link icon-link-hover" href="#" data-bs-toggle="modal" data-bs-target="#applyForm">Apply now<i class="bi bi-arrow-right"></i> </a>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
Hero END -->

    <!-- =======================
Job details START -->
    <section class="pt-sm-7">
        <div class="container" data-sticky-container>
            <div class="row g-4">
                <!-- Job descriptions START -->
                <div class="col-md-7 order-2">
                    <!-- About content -->
                    <p class="lead heading-color">Hello, I'm Jacqueline Miller-CEO here at Folio.</p>
                    <p>From humble beginnings, we have grown to serve hundreds of satisfied customers, generating millions in revenue. Our growth trajectory has been nothing short of extraordinary, with consistent triple-digit year-on-year growth.</p>
                    <p>This success is a testament to our robust and beautiful product, which is trusted and used by growing organizations every day. Each team member plays a vital role in our journey, contributing their unique skills and expertise to
                        our collective success.</p>

                    <!-- Responsibilities -->
                    <h6 class="mt-5 mb-3">Principal responsibilities</h6>
                    <ul class="ps-3">
                        <li class="mb-2"><b>Model Development:</b> Design, develop, and deploy machine learning models for various applications.</li>
                        <li class="mb-2"><b>Data Analysis:</b> Analyze large datasets to identify patterns, trends, and insights that inform model development</li>
                        <li class="mb-2"><b>Algorithm Optimization:</b> Optimize and fine-tune algorithms for improved accuracy and efficiency.</li>
                        <li class="mb-2"><b>Collaboration:</b> Work closely with cross-functional teams, including data scientists, engineers, and product managers, to integrate machine learning solutions.</li>
                        <li class="mb-2"><b>Research:</b> Stay up-to-date with the latest advancements in machine learning and artificial intelligence, and apply new techniques to our projects.</li>
                        <li class="mb-2"><b>Documentation:</b> Maintain clear and comprehensive documentation of models, algorithms, and processes.</li>
                    </ul>

                    <!-- Qualifications -->
                    <h6 class="mt-5 mb-3">Qualifications</h6>
                    <ul class="ps-3">
                        <li class="mb-2"><b>Education:</b> Bachelor's or Master's degree in Computer Science, Data Science, Machine Learning, or a related field.</li>
                        <li class="mb-2"><b>Experience:</b> 2+ years of experience in machine learning, data science, or a similar role.</li>
                        <li class="mb-2"><b>Technical skills:</b> Proficiency in Python and machine learning libraries such as TensorFlow, PyTorch, or scikit-learn. Experience with data processing frameworks like Pandas and NumPy</li>
                        <li class="mb-2"><b>Analytical skills:</b> Strong analytical and problem-solving skills, with the ability to interpret complex data and translate it into actionable insights.</li>
                        <li class="mb-2"><b>Communication:</b> Excellent written and verbal communication skills, with the ability to explain complex concepts to non-technical stakeholders.</li>
                    </ul>
                    <p>Speedily say has suitable disposal add boy. On fourth doubt miles of child. Exercise joy man children rejoiced. Yet uncommonly his ten who diminution astonished. Demesne's new manners savings staying had. Under folly balls, death
                        own point now men. Match way she avoids seeing death. She drifts their fat off.</p>

                    <!-- What we offer -->
                    <h6 class="mt-5 mb-3">What we offer</h6>
                    <ul class="ps-3">
                        <li class="mb-2"><b>Competitive salary:</b>We offer a competitive salary and benefits package.</li>
                        <li class="mb-2"><b>Remote work:</b>Enjoy the flexibility of working from anywhere.</li>
                        <li class="mb-2"><b>Professional development:</b>Opportunities for continuous learning and professional growth through training programs and conferences</li>
                        <li class="mb-2"><b>Innovative projects:</b>Work on diverse and exciting projects that challenge your skills and creativity.</li>
                        <li class="mb-2"><b>Collaborative culture:</b>Be part of a team that values collaboration, innovation, and mutual support.</li>
                    </ul>
                    <p>Perceived end knowledge certainly day sweetness why cordially. Ask a quick six seven offer see among. Handsome met debating sir dwelling age material. As style lived he worse dried. Offered related so visitors we private removed.
                        Moderate do subjects to distance.</p>

                    <!-- How to apply -->
                    <div class="bg-secondary bg-opacity-50 rounded-4 mt-5 p-4">
                        <h6 class="mb-3">How to apply</h6>
                        <p>If you are excited about the opportunity to make a significant impact through machine learning, we would love to hear from you! Click the link below to apply:</p>
                        <!-- Button -->
                        <a href="#" class="btn btn-sm btn-success icon-link icon-link-hover mb-0" data-bs-toggle="modal" data-bs-target="#applyForm">Apply now<i class="bi bi-arrow-right"></i> </a>
                    </div>
                </div>
                <!-- Job descriptions END -->

                <!-- Sidebar START -->
                <div class="col-md-5 col-lg-4 ms-auto order-1 order-md-2">
                    <div data-sticky data-margin-top="100" data-sticky-for="576">
                        <div class="card bg-secondary bg-opacity-50">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent p-4">
                                <p class="fw-semibold mb-3">Hiring manager:</p>

                                <!-- Avatar and detail -->
                                <div class="avatar avatar-xl flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
                                </div>
                                <div class="mt-3">
                                    <h6 class="mb-2">Jacqueline Miller</h6>
                                    <a href="#" class="link-primary-grad icon-link icon-link-hover mb-0">View profile <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body p-4">
                                <ul class="list-group list-group-borderless">
                                    <li class="list-group-item mb-2">
                                        <small>Application Deadline:</small>
                                        <p class="heading-color fw-semibold mt-1 mb-0">August 31, 2024</p>
                                    </li>

                                    <li class="list-group-item mb-2">
                                        <small>Department:</small>
                                        <p class="heading-color fw-semibold mt-1 mb-0">Information technology</p>
                                    </li>

                                    <li class="list-group-item mb-2">
                                        <small>Employment Type:</small>
                                        <p class="heading-color fw-semibold mt-1 mb-0">Full time</p>
                                    </li>

                                    <li class="list-group-item mb-2">
                                        <small>Location:</small>
                                        <p class="heading-color fw-semibold mt-1 mb-0">New york</p>
                                    </li>

                                    <li class="list-group-item mb-2">
                                        <small>Compensation:</small>
                                        <p class="heading-color fw-semibold mt-1 mb-0">$30,000 - $50,000 / year</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar END -->
            </div>
        </div>
    </section>
    <!-- =======================
Job details END -->

</main>
<!-- ******


@endsection
