<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K.D Polytechnic T&P Portal</title>
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
            min-height: 100vh;
            padding-top: 90px;
            background: linear-gradient(90deg, rgba(2, 6, 23, 0.94), rgba(15, 23, 42, 0.72)),
                        url("https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1400&q=80") center/cover no-repeat;
            display: flex;
            align-items: center;
        }

        .hero-card {
            background: rgba(15, 23, 42, 0.8);
            border: 1px solid var(--border);
            border-radius: 28px;
            padding: 2rem;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
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

        .stat-box {
            padding: 1.5rem;
            border-radius: 20px;
            border: 1px solid var(--border);
            background: rgba(255,255,255,0.04);
        }

        .logo-box {
            min-height: 92px;
            border-radius: 18px;
            border: 1px solid var(--border);
            background: rgba(255,255,255,0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #E2E8F0;
            font-weight: 700;
            transition: all 0.3s ease;
        }

        .logo-box:hover {
            transform: translateY(-4px);
            background: rgba(37, 99, 235, 0.16);
        }

        .company-logo {
            width: 56px;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            font-size: 1.3rem;
            font-weight: 700;
            background: linear-gradient(135deg, rgba(37,99,235,0.2), rgba(59,130,246,0.15));
            color: white;
            border: 1px solid rgba(255,255,255,0.12);
        }

        .map-placeholder {
            min-height: 280px;
            border-radius: 18px;
            border: 1px dashed rgba(255,255,255,0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--muted);
            background: linear-gradient(145deg, rgba(15, 23, 42, 0.95), rgba(30, 41, 59, 0.8));
            overflow: hidden;
        }

        .map-placeholder iframe {
            width: 100%;
            height: 100%;
            border: 0;
            min-height: 280px;
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
                K.D Polytechnic T&P Portal
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
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
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container py-5">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-8 scroll-reveal">
                    <div class="hero-card">
                        <h1 class="display-4 fw-bold mb-3">Launch Your Career With Confidence</h1>
                        <p class="lead text-light-emphasis mb-4">
                            Discover premium opportunities, connect with top recruiters, and build a future-ready profile through our modern placement ecosystem.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="{{ url('/explore-opportunities') }}" class="btn btn-primary btn-lg rounded-pill px-4">
                                Explore Opportunities
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 scroll-reveal d-flex">
                    <div class="glass-card p-4 p-lg-5 w-100">
                        <div class="icon-badge"><i class="bi bi-rocket-takeoff"></i></div>
                        <h3 class="fw-semibold mb-3">Career Advancement Starts Here</h3>
                        <p class="text-light-emphasis mb-3">
                            From registration to placement, everything is designed to help students and recruiters collaborate seamlessly.
                        </p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Smart placement discovery</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Professional recruiter engagement</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Real-time updates and notifications</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- About Section -->
        <section id="about" class="py-5">
            <div class="container py-3 scroll-reveal">
                <div class="text-center mb-4">
                    <h2 class="section-title">About the Training & Placement Portal</h2>
                    <p class="section-subtitle">
                        The portal brings students, colleges, and employers together in one polished platform to simplify placement activities and accelerate career growth.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="glass-card p-4 h-100">
                            <div class="icon-badge"><i class="bi bi-award"></i></div>
                            <h4 class="fw-semibold mb-3">Empowering Student Success</h4>
                            <p class="text-light-emphasis mb-0">
                                Students can explore career opportunities, build their professional profiles, and apply to companies with clarity and confidence. The platform makes the placement journey organized, transparent, and efficient.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="glass-card p-4 h-100">
                            <div class="icon-badge"><i class="bi bi-building-check"></i></div>
                            <h4 class="fw-semibold mb-3">Connecting Education with Industry</h4>
                            <p class="text-light-emphasis mb-0">
                                With a professional interface and modern workflows, colleges can coordinate placement drives while recruiters gain direct access to highly engaged student talent pools.
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
                    <p class="section-subtitle">Need help with placements, account access, or profile updates? We're here to assist you.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-7">
                        <div class="glass-card p-4 h-100">
                            <h5 class="fw-semibold mb-3">Send us a message</h5>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label small text-light-emphasis">Full Name</label>
                                        <input type="text" class="form-control bg-transparent text-white" placeholder="Enter your full name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label small text-light-emphasis">Email Address</label>
                                        <input type="email" class="form-control bg-transparent text-white" placeholder="Enter your email" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label small text-light-emphasis">Subject</label>
                                        <input type="text" class="form-control bg-transparent text-white" placeholder="What do you need help with?" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label small text-light-emphasis">Message</label>
                                        <textarea class="form-control bg-transparent text-white" rows="4" placeholder="Write your message" required></textarea>
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
                                            How do I apply for a placement drive?
                                        </button>
                                    </h2>
                                    <div id="faqOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Log in to your student account, browse available drives, and click the apply button for the opportunity you want.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo">
                                            I forgot my password. What should I do?
                                        </button>
                                    </h2>
                                    <div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Use the Forgot Password option on the respective login page or contact the support team for assistance.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree">
                                            How can I update my profile?
                                        </button>
                                    </h2>
                                    <div id="faqThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Navigate to your dashboard and update your personal and academic information from the profile section.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFour">
                                            Who can I contact for placement-related issues?
                                        </button>
                                    </h2>
                                    <div id="faqFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            You can reach out to the placement office through this help page or contact the listed support team.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="glass-card p-4">
                            <h5 class="fw-semibold mb-2">Need More Help?</h5>
                            <p class="text-light-emphasis mb-0">If your issue is not resolved through the FAQs, please send us a message using the form above.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="py-5">
        <div class="container text-center">
            <div class="border-top border-secondary pt-4">
                <h5 class="fw-semibold mb-3">Training & Placement Portal</h5>
                <p class="text-light-emphasis mb-2">K. D. Polytechnic, Patan, Gujarat</p>
                <p class="text-light-emphasis mb-0">Designed for students, placement officers, companies, and administrators.</p>
            </div>
        </div>
    </footer>

    <a href="#home" class="btn btn-primary rounded-circle back-to-top" id="backToTop" aria-label="Back to top"><i class="bi bi-arrow-up"></i></a>

    <div class="modal fade login-modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-semibold" id="loginModalLabel">Login As</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <a href="{{ url('/student/login') }}" class="login-option h-100">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="login-option-icon"><i class="bi bi-mortarboard-fill"></i></div>
                                    <div>
                                        <div class="login-option-title">Student</div>
                                        <div class="login-option-desc">Access student dashboard</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('/company/login') }}" class="login-option h-100">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="login-option-icon"><i class="bi bi-building-fill-gear"></i></div>
                                    <div>
                                        <div class="login-option-title">Company</div>
                                        <div class="login-option-desc">Manage recruitment</div>
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
                                        <div class="login-option-desc">Manage placement activities</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('/admin/login') }}" class="login-option h-100">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="login-option-icon"><i class="bi bi-shield-lock-fill"></i></div>
                                    <div>
                                        <div class="login-option-title">Admin</div>
                                        <div class="login-option-desc">Manage entire portal</div>
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

        const counters = document.querySelectorAll('.counter');
        const statsSection = document.querySelector('.stat-box');
        let countersDone = false;

        const animateCounters = () => {
            if (countersDone) return;
            countersDone = true;
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                let current = 0;
                const step = Math.ceil(target / 60);
                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) {
                        counter.textContent = `${target}+`;
                        clearInterval(timer);
                    } else {
                        counter.textContent = `${current}+`;
                    }
                }, 18);
            });
        };

        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                }
            });
        });

        if (statsSection) {
            statsObserver.observe(statsSection.parentElement.parentElement);
        }

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
