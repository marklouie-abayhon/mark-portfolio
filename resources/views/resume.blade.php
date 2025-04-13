@extends('layouts.app')

@section('title', 'Resume - Mark Louie E. Abayhon')
@section('body-class', 'h-100 bg-light')

@section('styles')
<style>
    :root {
        --bs-primary: #005b96;
        --bs-secondary: #0088cc;
        --bs-accent: #00b4d8;
        --bs-light: #f8f9fa;
        --bs-dark: #212529;
    }
    
    .text-primary { color: var(--bs-primary) !important; }
    .text-secondary { color: var(--bs-secondary) !important; }
    .text-accent { color: var(--bs-accent) !important; }
    
    .bg-primary { background-color: var(--bs-primary) !important; }
    .bg-secondary { background-color: var(--bs-secondary) !important; }
    .bg-accent { background-color: var(--bs-accent) !important; }
    
    .bg-gradient-primary-to-secondary {
        background: linear-gradient(to right, var(--bs-primary), var(--bs-secondary));
    }
    .text-gradient {
        background: linear-gradient(to right, var(--bs-primary), var(--bs-secondary));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .btn-accent {
        background-color: var(--bs-accent);
        border-color: var(--bs-accent);
        color: white;
    }
    .btn-accent:hover {
        background-color: #0093b8;
        border-color: #0093b8;
    }
    
    .border-primary { border-color: var(--bs-primary) !important; }
    .border-accent { border-color: var(--bs-accent) !important; }
    
    .timeline-item {
        border-left: 3px solid var(--bs-primary);
        padding-left: 1.5rem;
        position: relative;
    }
    .timeline-item::before {
        content: '';
        position: absolute;
        left: -0.5rem;
        top: 0;
        width: 1rem;
        height: 1rem;
        border-radius: 50%;
        background-color: var(--bs-primary);
    }
    
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
        background-color: var(--bs-primary);
    }
</style>
@endsection

@section('content')
<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0">
            <span class="text-gradient d-inline">Professional Resume</span>
        </h1>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <!-- Profile Section -->
            <section class="mb-5">
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <h2 class="text-primary fw-bolder mb-4">PROFESSIONAL PROFILE</h2>
                        <p class="mb-0">
                            Bachelor of Science in Information Technology graduate skilled in programming, 
                            IT concepts, and Microsoft Office. Experienced in website development and 
                            freelancing, with strong adaptability and commitment to learning new technologies 
                            and methodologies to deliver effective solutions.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section class="mb-5">
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <h2 class="text-primary fw-bolder mb-4">CONTACT INFORMATION</h2>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <p><i class="bi bi-telephone-fill text-primary me-2"></i> <strong>Phone:</strong> 09752038818</p>
                                <p><i class="bi bi-envelope-fill text-primary me-2"></i> <strong>Email:</strong> marklouieabayhon@gmail.com</p>
                                <p><i class="bi bi-geo-alt-fill text-primary me-2"></i> <strong>Address:</strong> Mayuga, Libagon, Southern Leyte, 6615</p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <p><i class="bi bi-facebook text-primary me-2"></i> <strong>Facebook:</strong> 
                                    <a href="https://www.facebook.com/clinkx.fleather.12" class="text-decoration-none">facebook.com/clinkx.fleather.12</a>
                                </p>
                                <p><i class="bi bi-linkedin text-primary me-2"></i> <strong>LinkedIn:</strong> 
                                    <a href="https://www.linkedin.com/in/mark-louie-abayhon-2a9b65196/" class="text-decoration-none">linkedin.com/in/mark-louie-abayhon</a>
                                </p>
                                <p><i class="bi bi-github text-primary me-2"></i> <strong>GitHub:</strong> 
                                    <a href="https://github.com/marklouie-abayhon" class="text-decoration-none">github.com/marklouie-abayhon</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Experience Section -->
            <section class="mb-5">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-primary fw-bolder mb-0">PROFESSIONAL EXPERIENCE</h2>
                    <a class="btn btn-primary px-4 py-3" href="{{ url('/download-resume') }}">
    <div class="d-inline-block bi bi-download me-2"></div>
    Download Resume
</a>

                </div>
                
                <!-- Freelancer Experience -->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-primary fw-bolder mb-2">Sep 2023 - Dec 2023</div>
                                    <div class="small fw-bolder">Freelancer</div>
                                    <div class="small text-muted">Remotasks</div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <ul class="mb-0">
                                    <li>Completed various data annotation, categorization, and quality assurance tasks with high accuracy</li>
                                    <li>Gained experience in remote collaboration and task management tools</li>
                                    <li>Developed strong time management skills while consistently meeting deadlines</li>
                                    <li>Maintained excellent quality standards across all assigned projects</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- OJT Experience -->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-primary fw-bolder mb-2">Apr 2022 - May 2022</div>
                                    <div class="small fw-bolder">On-the-Job Trainee</div>
                                    <div class="small text-muted">HMP Co. Business Support and Engineering Solution</div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <ul class="mb-0">
                                    <li>Assisted in website creation and virtual project facilitation</li>
                                    <li>Completed 96 hours of intensive on-the-job training</li>
                                    <li>Gained practical experience in web development workflows</li>
                                    <li>Contributed to team projects with technical solutions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Education Section -->
            <section class="mb-5">
                <h2 class="text-primary fw-bolder mb-4">EDUCATION</h2>
                
                <!-- University -->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="timeline-item mb-4">
                            <div class="small text-primary fw-bolder">2018 - 2022</div>
                            <h4 class="fw-bolder">Southern Leyte State University</h4>
                            <p class="mb-2">Bachelor of Science in Information Technology, Major in Programming</p>
                            <p class="small text-muted">Sogod, Southern Leyte</p>
                        </div>
                    </div>
                </div>
                
                <!-- Senior High -->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="timeline-item mb-4">
                            <div class="small text-primary fw-bolder">2016 - 2018</div>
                            <h4 class="fw-bolder">Rito Monte de Ramos Sr. Memorial Nahaong National High School</h4>
                            <p class="mb-2">Senior High School (With Honors)</p>
                            <p class="small text-muted">Nahaong, Libagon, Southern Leyte</p>
                        </div>
                    </div>
                </div>
                
                <!-- Junior High -->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="timeline-item mb-4">
                            <div class="small text-primary fw-bolder">2012 - 2016</div>
                            <h4 class="fw-bolder">Rito Monte de Ramos Sr. Memorial Nahaong National High School</h4>
                            <p class="mb-2">Junior High School (With Honors)</p>
                            <p class="small text-muted">Nahaong, Libagon, Southern Leyte</p>
                        </div>
                    </div>
                </div>
                
                <!-- Elementary -->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="timeline-item">
                            <div class="small text-primary fw-bolder">2005 - 2012</div>
                            <h4 class="fw-bolder">Mayuga Elementary School</h4>
                            <p class="mb-2">Elementary Education (With Honors)</p>
                            <p class="small text-muted">Mayuga, Libagon, Southern Leyte</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Certifications Section -->
            <section class="mb-5">
                <h2 class="text-primary fw-bolder mb-4">CERTIFICATIONS</h2>
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="timeline-item mb-4">
                            <h4 class="fw-bolder">Microsoft Office Specialist</h4>
                            <p class="mb-1">Microsoft Word Office 2016</p>
                            <p class="small text-muted">Issued: December 2018 by Microsoft</p>
                        </div>
                        <div class="timeline-item mb-4">
                            <h4 class="fw-bolder">Information Security Awareness</h4>
                            <p class="small text-muted">Conducted by DICT Region 3 Tech4ED Project | March 30, 2022</p>
                        </div>
                        <div class="timeline-item">
                            <h4 class="fw-bolder">Ethical Hacking Part 3 & 4</h4>
                            <p class="small text-muted">Conducted by UPSKILL I.T. WORKSHOP | March 26 and April 02, 2022</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Skills Section -->
            <section class="mb-5">
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="mb-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                    <i class="bi bi-tools"></i>
                                </div>
                                <h3 class="fw-bolder mb-0">
                                    <span class="text-gradient d-inline">TECHNICAL SKILLS</span>
                                </h3>
                            </div>
                            
                            <h4 class="fw-bolder mb-3">Programming Languages:</h4>
                            <div class="d-flex flex-wrap gap-2 mb-4">
                                <span class="skill-badge">Java</span>
                                <span class="skill-badge">C#</span>
                                <span class="skill-badge">HTML/CSS</span>
                                <span class="skill-badge">JavaScript</span>
                                <span class="skill-badge">PHP</span>
                                <span class="skill-badge">Laravel</span>
                                <span class="skill-badge">SQL</span>
                            </div>
                            
                            <h4 class="fw-bolder mb-3">Tools & Platforms:</h4>
                            <div class="d-flex flex-wrap gap-2 mb-4">
                                <span class="skill-badge">Microsoft Word 2016 (Intermediate)</span>
                                <span class="skill-badge">Adobe Photoshop (Basic)</span>
                                <span class="skill-badge">Git/GitHub</span>
                                <span class="skill-badge">Visual Studio Code</span>
                            </div>
                            
                            <h4 class="fw-bolder mb-3">Professional Skills:</h4>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="skill-badge">Web Development</span>
                                <span class="skill-badge">Data Annotation</span>
                                <span class="skill-badge">Quality Assurance</span>
                                <span class="skill-badge">Remote Collaboration</span>
                                <span class="skill-badge">Task Management</span>
                                <span class="skill-badge">Problem Solving</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Achievements Section -->
            <section class="mb-5">
                <h2 class="text-primary fw-bolder mb-4">ACHIEVEMENTS</h2>
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <ul class="mb-0">
                            <li>Graduated with honors in elementary, junior high, and senior high school</li>
                            <li>Successfully completed Bachelor's degree in Information Technology</li>
                            <li>Earned Microsoft Office Specialist certification (Word 2016)</li>
                            <li>Completed professional training in Information Security and Ethical Hacking</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Interests Section -->
            <section>
                <h2 class="text-primary fw-bolder mb-4">INTERESTS</h2>
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="d-flex flex-wrap gap-2">
                            <span class="skill-badge">Technology Innovation</span>
                            <span class="skill-badge">Web Development</span>
                            <span class="skill-badge">Ethical Hacking</span>
                            <span class="skill-badge">Cryptocurrency</span>
                            <span class="skill-badge">Continuous Learning</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection