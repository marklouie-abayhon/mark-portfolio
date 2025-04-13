@extends('layouts.app')

@section('title', 'Projects - Mark Louie E. Abayhon')
@section('body-class', 'd-flex flex-column h-100 bg-light')

@section('content')
<!-- Projects Section-->
<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0">
                <span class="text-gradient d-inline">My Projects</span>
            </h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Project Card 1-->
                <div class="card overflow-hidden shadow rounded-4 border-primary mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder text-primary">Website Development Projects</h2>
                                <p>
                                    Developed various websites using modern web technologies including Laravel, HTML5, 
                                    CSS3, and JavaScript. These projects demonstrate my ability to create responsive, 
                                    user-friendly interfaces and implement core functionality for different business needs.
                                </p>
                                <div class="d-flex flex-wrap gap-2 mt-3">
                                    <span class="skill-badge">Laravel</span>
                                    <span class="skill-badge">HTML5</span>
                                    <span class="skill-badge">CSS3</span>
                                    <span class="skill-badge">JavaScript</span>
                                    <span class="skill-badge">Bootstrap</span>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset('images/website_project.png') }}" alt="Website Development" />
                        </div>
                    </div>
                </div>
                
                <!-- Project Card 2-->
                <div class="card overflow-hidden shadow rounded-4 border-primary mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder text-primary">Data Annotation Projects</h2>
                                <p>
                                    Completed numerous data annotation and categorization tasks during my freelance work 
                                    with Remotasks. Developed efficient workflows for handling large datasets while 
                                    maintaining high accuracy standards. Gained experience in quality assurance processes 
                                    for machine learning data preparation.
                                </p>
                                <div class="d-flex flex-wrap gap-2 mt-3">
                                    <span class="skill-badge">Data Annotation</span>
                                    <span class="skill-badge">Quality Assurance</span>
                                    <span class="skill-badge">Task Management</span>
                                    <span class="skill-badge">Remote Collaboration</span>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset('images/annotation_project.png') }}" alt="Data Annotation" />
                        </div>
                    </div>
                </div>
                
                <!-- Project Card 3-->
                <div class="card overflow-hidden shadow rounded-4 border-primary">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder text-primary">Academic Projects</h2>
                                <p>
                                    Developed several applications and systems during my academic studies, including 
                                    database systems, web applications, and programming exercises. These projects 
                                    demonstrate my problem-solving abilities and technical skills gained through 
                                    my Information Technology education.
                                </p>
                                <div class="d-flex flex-wrap gap-2 mt-3">
                                    <span class="skill-badge">Java</span>
                                    <span class="skill-badge">C#</span>
                                    <span class="skill-badge">SQL</span>
                                    <span class="skill-badge">PHP</span>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset('images/academic_project.png') }}" alt="Academic Projects" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to action section-->
<section class="py-5 bg-gradient-primary-to-secondary text-white">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="display-4 fw-bolder mb-4">Interested in working together?</h2>
            <p class="lead fw-normal mb-4">I'm available for freelance projects and full-time opportunities</p>
            <a class="btn btn-light btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('contact') }}">
                Get In Touch
            </a>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    .skill-badge {
        display: inline-block;
        padding: 0.35em 0.65em;
        font-size: 0.75em;
        font-weight: 700;
        line-height: 1;
        color: white;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 0.25rem;
        background-color: #005b96;
    }
</style>
@endsection