<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Training & Placement Portal</title>
    <meta name="description" content="A premium college training and placement portal homepage built with Laravel Blade and Bootstrap.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --bg: #0F172A;
            --surface: #111C33;
            --surface-2: #17294A;
            --primary: #2563EB;
            --primary-2: #3B82F6;
            --text: #F8FAFC;
            --muted: #94A3B8;
            --border: rgba(255,255,255,0.12);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            background: linear-gradient(135deg, #020617 0%, var(--bg) 100%);
            color: var(--text);
        }

        .navbar {
            background: rgba(2, 6, 23, 0.92);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid var(--border);
        }

        .navbar-logo {
            width: 48px;
            height: 48px;
            object-fit: contain;
            border-radius: 50%;
            background: #ffffff;
            padding: 2px;
            box-shadow: 0 0 12px rgba(37, 99, 235, 0.6);
        }

        .nav-link {
            color: var(--text) !important;
            transition: 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-2) !important;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-2));
            border: none;
            box-shadow: 0 10px 25px rgba(37, 99, 235, 0.24);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
        }

        .hero-section {
            position: relative;
            min-height: 80vh;
            padding-top: 110px;
            padding-bottom: 60px;
            background: linear-gradient(135deg, rgba(2, 6, 23, 0.85), rgba(15, 23, 42, 0.85));
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Hero Background Logo Watermark */
        .hero-watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 550px;
            height: 550px;
            object-fit: contain;
            opacity: 0.28;
            z-index: 0;
            pointer-events: none;
            filter: drop-shadow(0 0 40px rgba(37, 99, 235, 0.5));
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-card {
            background: rgba(15, 23, 42, 0.82);
            border: 1px solid var(--border);
            border-radius: 28px;
            padding: 2.5rem 2rem;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.35);
            backdrop-filter: blur(12px);
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.8rem;
        }

        .section-subtitle {
            color: var(--muted);
            max-width: 720px;
            margin: 0 auto 2rem;
        }

        .glass-card {
            background: linear-gradient(145deg, rgba(17, 28, 51, 0.95), rgba(15, 23, 42, 0.9));
            border: 1px solid var(--border);
            border-radius: 20px;
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.25);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .glass-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 45px rgba(37, 99, 235, 0.18);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin: 0 auto 1.25rem;
            background: linear-gradient(135deg, var(--primary), var(--primary-2));
            color: white;
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.3);
        }

        .icon-badge {
            width: 54px;
            height: 54px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            font-size: 1.25rem;
            background: linear-gradient(135deg, var(--primary), var(--primary-2));
            color: white;
            margin-bottom: 1rem;
        }

        .scroll-reveal {
            opacity: 0;
            transform: translateY(25px);
            transition: all 0.7s ease;
        }

        .scroll-reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .back-to-top {
            position: fixed;
            right: 20px;
            bottom: 20px;
            display: none;
            z-index: 999;
        }

        .login-modal .modal-content {
            background: linear-gradient(145deg, rgba(17, 28, 51, 0.98), rgba(15, 23, 42, 0.95));
            border: 1px solid var(--border);
            border-radius: 24px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.35);
            color: var(--text);
        }

        .login-modal .modal-header,
        .login-modal .modal-footer {
            border-color: var(--border);
        }

        .login-option {
            display: block;
            padding: 1.1rem 1rem;
            border-radius: 18px;
            background: rgba(255,255,255,0.04);
            border: 1px solid var(--border);
            color: var(--text);
            text-decoration: none;
            transition: transform 0.25s ease, box-shadow 0.25s ease, background-color 0.25s ease;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.18);
        }

        .login-option:hover {
            transform: translateY(-4px);
            background: rgba(37, 99, 235, 0.16);
            box-shadow: 0 16px 36px rgba(37, 99, 235, 0.2);
            color: var(--text);
        }

        .login-option-icon {
            width: 48px;
            height: 48px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 14px;
            background: linear-gradient(135deg, var(--primary), var(--primary-2));
            color: white;
            font-size: 1.15rem;
            flex-shrink: 0;
        }

        .login-option-title {
            font-weight: 600;
        }

        .login-option-desc {
            font-size: 0.9rem;
            color: var(--muted);
        }

        .help-accordion .accordion-button {
            background: transparent;
            color: var(--text);
            box-shadow: none;
            padding-left: 0;
            padding-right: 0;
            font-weight: 600;
        }

        .help-accordion .accordion-button:not(.collapsed) {
            background: transparent;
            color: var(--primary-2);
            box-shadow: none;
        }

        .help-accordion .accordion-body {
            color: var(--muted);
            padding-left: 0;
            padding-right: 0;
            padding-top: 0.35rem;
        }

        .help-accordion .accordion-item {
            background: transparent;
            border-color: rgba(255,255,255,0.08);
        }

        footer {
            border-top: 1px solid var(--border);
            background: rgba(2, 6, 23, 0.95);
        }

        @media (max-width: 768px) {
            .hero-section {
                min-height: auto;
                padding: 110px 0 70px;
            }

            .hero-watermark {
                width: 320px;
                height: 320px;
            }

            .section-title {
                font-size: 1.7rem;
            }
        }
    </style>
</head>
<body>
    <a id="home"></a>

    <!-- Sticky Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="#home">
                <i class="bi bi-mortarboard-fill me-2 text-primary"></i>
                College Training & Placement Portal
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav"
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#companies">Companies</a></li>
                    <li class="nav-item"><a class="nav-link" href="#drives">Placement Drives</a></li>
                    <li class="nav-item"><a class="nav-link" href="#help">Help</a></li>
                    <li class="nav-item"><a class="btn btn-outline-light btn-sm rounded-pill ms-lg-2" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
                  <li class="nav-item">
    <a class="btn btn-primary btn-sm rounded-pill ms-lg-2" href="{{ url('/register') }}">
        Register
    </a>
</li>
                <ul class="navbar-nav ms-auto align-items-lg-center gap-2 mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="btn btn-outline-light btn-sm px-3 rounded-pill" href="{{ url('/student/login') }}">Student Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light btn-sm px-3 rounded-pill" href="{{ url('/company/login') }}">Company Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary btn-sm px-3 rounded-pill" href="{{ url('/register') }}">Register</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Background Watermark Logo -->
    <header class="hero-section">
        <img src="{{ asset('logo.jpeg') }}" 
             onerror="this.onerror=null; this.src='{{ asset('logo.jpg') }}'; if(!this.complete || this.naturalWidth === 0) this.src='{{ asset('logo.png') }}';" 
             alt="College Logo Background" 
             class="hero-watermark">

        <div class="container py-5 hero-content">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-10 scroll-reveal">
                    <div class="hero-card">
                        <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill fs-6">Kilachand Devchand Polytechnic, Patan</span>
                        <h1 class="display-4 fw-bold mb-3 text-white">K. D. Polytechnic Training & Placement Portal</h1>
                        <p class="lead text-light-emphasis mb-4 mx-auto max-w-700 fs-5">
                            Connecting Students with Career Opportunities & Top Recruiters
                        </p>
                        <div class="d-flex flex-wrap gap-3 justify-content-center">
                            <a href="{{ url('/register') }}" class="btn btn-primary btn-lg rounded-pill px-5 py-3 fw-semibold">
                                Get Started
                            </a>
                            <a href="{{ url('/student/login') }}" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 fw-semibold">
                                Student Portal
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Options Section: Student, Company, Admin Cards -->
    <section class="py-5">
        <div class="container py-3">
            <div class="row g-4">
                
                <!-- Student Card -->
                <div class="col-md-4 scroll-reveal">
                    <div class="glass-card p-4 text-center h-100 d-flex flex-column">
                        <div class="icon-box">
                            <i class="bi bi-person-badge-fill"></i>
                        </div>
                        <h4 class="fw-bold mb-2 text-white">For Students</h4>
                        <p class="text-light-emphasis flex-grow-1">Access job postings, apply for campus drives, and track your placement application status.</p>
                        <a href="{{ url('/student/login') }}" class="btn btn-outline-primary rounded-pill w-100 mt-3 py-2 fw-semibold">Login as Student</a>
                    </div>
                </div>

                <!-- Company Card -->
                <div class="col-md-4 scroll-reveal">
                    <div class="glass-card p-4 text-center h-100 d-flex flex-column">
                        <div class="icon-box" style="background: linear-gradient(135deg, #10b981, #059669); box-shadow: 0 10px 20px rgba(16, 185, 129, 0.3);">
                            <i class="bi bi-building-fill"></i>
                        </div>
                        <h4 class="fw-bold mb-2 text-white">For Companies</h4>
                        <p class="text-light-emphasis flex-grow-1">Post new placement opportunities, manage drives, and shortlist candidates efficiently.</p>
                        <a href="{{ url('/company/login') }}" class="btn btn-outline-success rounded-pill w-100 mt-3 py-2 fw-semibold">Login as Recruiter</a>
                    </div>
                </div>

                <!-- Admin Card -->
                <div class="col-md-4 scroll-reveal">
                    <div class="glass-card p-4 text-center h-100 d-flex flex-column">
                        <div class="icon-box" style="background: linear-gradient(135deg, #64748b, #475569); box-shadow: 0 10px 20px rgba(100, 116, 139, 0.3);">
                            <i class="bi bi-shield-lock-fill"></i>
                        </div>
                        <h4 class="fw-bold mb-2 text-white">TPO / Admin</h4>
                        <p class="text-light-emphasis flex-grow-1">Oversee placement operations, manage student & company registrations, and generate reports.</p>
                        <a href="{{ url('/admin/login') }}" class="btn btn-outline-light rounded-pill w-100 mt-3 py-2 fw-semibold">Admin Access</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <main>
        <!-- About Section -->
        <section id="about" class="py-5">
            <div class="container py-3 scroll-reveal">
                <div class="text-center mb-4">
                    <h2 class="section-title">About Training & Placement Cell</h2>
                    <p class="section-subtitle">
                        Kilachand Devchand Polytechnic, Patan brings diploma students and top engineering employers together on a unified digital platform.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="glass-card p-4 h-100">
                            <div class="icon-badge"><i class="bi bi-award"></i></div>
                            <h4 class="fw-semibold mb-3">Empowering Students</h4>
                            <p class="text-light-emphasis mb-0">
                                Diploma students can explore upcoming placement drives, track job opportunities, and build job-ready profiles with guidance from our Training & Placement Officer.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="glass-card p-4 h-100">
                            <div class="icon-badge"><i class="bi bi-building-check"></i></div>
                            <h4 class="fw-semibold mb-3">Industry Alignment</h4>
                            <p class="text-light-emphasis mb-0">
                                Partnering with leading companies to offer campus interviews, skill training workshops, and apprenticeship opportunities tailored for K. D. Polytechnic graduates.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Help & Support Section -->
        <section id="help" class="py-5">
            <div class="container py-3 scroll-reveal">
                <div class="text-center mb-4">
                    <h2 class="section-title">Help & Support</h2>
                    <p class="section-subtitle">Need assistance with placement registration, account access, or drive schedules?</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-7">
                        <div class="glass-card p-4 h-100">
                            <h5 class="fw-semibold mb-3">Contact TPO Office</h5>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label small text-light-emphasis">Full Name</label>
                                        <input type="text" class="form-control bg-transparent text-white" placeholder="Enter your full name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label small text-light-emphasis">Email / Enrollment No.</label>
                                        <input type="text" class="form-control bg-transparent text-white" placeholder="Enrollment / Email" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label small text-light-emphasis">Subject</label>
                                        <input type="text" class="form-control bg-transparent text-white" placeholder="How can we help you?" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label small text-light-emphasis">Message</label>
                                        <textarea class="form-control bg-transparent text-white" rows="4" placeholder="Write your message..." required></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary rounded-pill mt-3">Send Message</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="glass-card p-4 h-100">
                            <h5 class="fw-semibold mb-3">Frequently Asked Questions</h5>
                            <div class="accordion accordion-flush help-accordion" id="faqAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne">
                                            How do I apply for campus drives?
                                        </button>
                                    </h2>
                                    <div id="faqOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Log in to your Student Portal, view active placement drives, and submit your application with one click.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo">
                                            Who can access the Placement Officer portal?
                                        </button>
                                    </h2>
                                    <div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Only authorized faculty members and TPO coordinators of K. D. Polytechnic can access the Placement Officer dashboard.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="py-5 text-center">
        <div class="container">
            <div class="pt-2">
                <img src="{{ asset('logo.jpeg') }}" onerror="this.onerror=null; this.src='https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/KD_Polytechnic_Patan_Logo.png/600px-KD_Polytechnic_Patan_Logo.png';" alt="Logo" class="navbar-logo mb-3" style="width: 55px; height: 55px;">
                <h5 class="fw-semibold mb-2">Kilachand Devchand Polytechnic, Patan</h5>
                <p class="text-light-emphasis small mb-1">Government of Gujarat Institution (ESTD: 1961)</p>
                <p class="text-muted small mb-0">&copy; Training & Placement Cell. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <a href="#home" class="btn btn-primary rounded-circle back-to-top" id="backToTop" aria-label="Back to top"><i class="bi bi-arrow-up"></i></a>

    <!-- Login Modal -->
    <div class="modal fade login-modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-semibold" id="loginModalLabel">Login To Portal</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <a href="{{ url('/student/login') }}" class="login-option h-100">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="login-option-icon"><i class="bi bi-mortarboard-fill"></i></div>
                                    <div>
                                        <div class="login-option-title">Student Login</div>
                                        <div class="login-option-desc">Access placement dashboard</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('/company/login') }}" class="login-option h-100">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="login-option-icon"><i class="bi bi-building-fill-gear"></i></div>
                                    <div>
                                        <div class="login-option-title">Company Login</div>
                                        <div class="login-option-desc">Manage recruitment drives</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('/placement-officer/login') }}" class="login-option h-100">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="login-option-icon"><i class="bi bi-person-badge-fill"></i></div>
                                    <div>
                                        <div class="login-option-title">Placement Officer</div>
                                        <div class="login-option-desc">Manage placement drives</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('/admin/login') }}" class="login-option h-100">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="login-option-icon"><i class="bi bi-shield-lock-fill"></i></div>
                                    <div>
                                        <div class="login-option-title">Admin Login</div>
                                        <div class="login-option-desc">Portal administration</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-light rounded-pill" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const revealItems = document.querySelectorAll('.scroll-reveal');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.15 });

        revealItems.forEach(item => observer.observe(item));

        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                backToTop.style.display = 'inline-flex';
            } else {
                backToTop.style.display = 'none';
            }
        });
    </script>
</body>
</html>