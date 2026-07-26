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
                College Training & Placement Portal
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
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="btn btn-outline-light btn-sm rounded-pill ms-lg-2" href="#contact">Login</a></li>
                    <li class="nav-item"><a class="btn btn-primary btn-sm rounded-pill ms-lg-2" href="#contact">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 scroll-reveal">
                    <div class="hero-card">
                        <span class="badge rounded-pill bg-primary-subtle text-primary-emphasis mb-3">Trusted by Leading Colleges & Recruiters</span>
                        <h1 class="display-4 fw-bold mb-3">Launch Your Career With Confidence</h1>
                        <p class="lead text-light-emphasis mb-4">
                            Discover premium opportunities, connect with top recruiters, and build a future-ready profile through our modern placement ecosystem.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#drives" class="btn btn-primary btn-lg rounded-pill px-4">Explore Opportunities</a>
                            <a href="#contact" class="btn btn-outline-light btn-lg rounded-pill px-4">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 scroll-reveal">
                    <div class="glass-card p-4 p-lg-5">
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

        <!-- Placement Statistics -->
        <section class="py-5">
            <div class="container py-3 scroll-reveal">
                <div class="text-center mb-4">
                    <h2 class="section-title">Placement Excellence in Numbers</h2>
                    <p class="section-subtitle">A growing network of students, companies, and successful career outcomes.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-3 col-6">
                        <div class="stat-box text-center">
                            <h3 class="display-6 fw-bold counter" data-target="2500">0</h3>
                            <p class="text-light-emphasis mb-0">Students Registered</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-box text-center">
                            <h3 class="display-6 fw-bold counter" data-target="180">0</h3>
                            <p class="text-light-emphasis mb-0">Recruiting Companies</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-box text-center">
                            <h3 class="display-6 fw-bold counter" data-target="95">0</h3>
                            <p class="text-light-emphasis mb-0">Placement Drives</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-box text-center">
                            <h3 class="display-6 fw-bold counter" data-target="1400">0</h3>
                            <p class="text-light-emphasis mb-0">Successful Placements</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Top Recruiters -->
        <section id="companies" class="py-5">
            <div class="container py-3 scroll-reveal">
                <div class="text-center mb-4">
                    <h2 class="section-title">Top Recruiters</h2>
                    <p class="section-subtitle">Our placement network includes some of the most respected names in technology and industry.</p>
                </div>
                <div class="row g-3">
                    <div class="col-6 col-md-4 col-lg-3"><div class="logo-box p-3">TCS</div></div>
                    <div class="col-6 col-md-4 col-lg-3"><div class="logo-box p-3">Infosys</div></div>
                    <div class="col-6 col-md-4 col-lg-3"><div class="logo-box p-3">Wipro</div></div>
                    <div class="col-6 col-md-4 col-lg-3"><div class="logo-box p-3">Accenture</div></div>
                    <div class="col-6 col-md-4 col-lg-3"><div class="logo-box p-3">IBM</div></div>
                    <div class="col-6 col-md-4 col-lg-3"><div class="logo-box p-3">Capgemini</div></div>
                    <div class="col-6 col-md-4 col-lg-3"><div class="logo-box p-3">Cognizant</div></div>
                    <div class="col-6 col-md-4 col-lg-3"><div class="logo-box p-3">Tech Mahindra</div></div>
                    <div class="col-6 col-md-4 col-lg-3"><div class="logo-box p-3">Oracle</div></div>
                    <div class="col-6 col-md-4 col-lg-3"><div class="logo-box p-3">Microsoft</div></div>
                    <div class="col-6 col-md-4 col-lg-3"><div class="logo-box p-3">Google</div></div>
                    <div class="col-6 col-md-4 col-lg-3"><div class="logo-box p-3">Amazon</div></div>
                    <div class="col-6 col-md-4 col-lg-3"><div class="logo-box p-3">Bosch</div></div>
                    <div class="col-6 col-md-4 col-lg-3"><div class="logo-box p-3">Siemens</div></div>
                    <div class="col-6 col-md-4 col-lg-3"><div class="logo-box p-3">Dell</div></div>
                    <div class="col-6 col-md-4 col-lg-3"><div class="logo-box p-3">HCL</div></div>
                </div>
            </div>
        </section>

        <!-- Latest Placement Drives -->
        <section id="drives" class="py-5">
            <div class="container py-3 scroll-reveal">
                <div class="text-center mb-4">
                    <h2 class="section-title">Latest Placement Drives</h2>
                    <p class="section-subtitle">Explore the newest career opportunities available for talented students.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="glass-card p-4 h-100">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="company-logo">T</div>
                                <div>
                                    <h5 class="fw-semibold mb-1">TCS</h5>
                                    <p class="text-light-emphasis mb-0">Software Engineer</p>
                                </div>
                            </div>
                            <ul class="list-unstyled small text-light-emphasis mb-3">
                                <li class="mb-2"><i class="bi bi-person-check me-2"></i>Eligibility: B.Tech 2026 Batch</li>
                                <li class="mb-2"><i class="bi bi-calendar3 me-2"></i>Last Date: 05 Aug 2026</li>
                            </ul>
                            <a href="#contact" class="btn btn-primary rounded-pill">View Details</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="glass-card p-4 h-100">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="company-logo">I</div>
                                <div>
                                    <h5 class="fw-semibold mb-1">Infosys</h5>
                                    <p class="text-light-emphasis mb-0">System Engineer</p>
                                </div>
                            </div>
                            <ul class="list-unstyled small text-light-emphasis mb-3">
                                <li class="mb-2"><i class="bi bi-person-check me-2"></i>Eligibility: Any Graduate</li>
                                <li class="mb-2"><i class="bi bi-calendar3 me-2"></i>Last Date: 12 Aug 2026</li>
                            </ul>
                            <a href="#contact" class="btn btn-primary rounded-pill">View Details</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="glass-card p-4 h-100">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="company-logo">M</div>
                                <div>
                                    <h5 class="fw-semibold mb-1">Microsoft</h5>
                                    <p class="text-light-emphasis mb-0">Data Analyst Intern</p>
                                </div>
                            </div>
                            <ul class="list-unstyled small text-light-emphasis mb-3">
                                <li class="mb-2"><i class="bi bi-person-check me-2"></i>Eligibility: MCA / M.Tech</li>
                                <li class="mb-2"><i class="bi bi-calendar3 me-2"></i>Last Date: 18 Aug 2026</li>
                            </ul>
                            <a href="#contact" class="btn btn-primary rounded-pill">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-5">
            <div class="container py-3 scroll-reveal">
                <div class="text-center mb-4">
                    <h2 class="section-title">Contact Us</h2>
                    <p class="section-subtitle">We are here to help students, recruiters, and academic partners connect smoothly.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="glass-card p-4 h-100">
                            <h5 class="fw-semibold mb-3">Contact Information</h5>
                            <p class="text-light-emphasis mb-3"><i class="bi bi-geo-alt-fill text-primary me-2"></i>Address: K. D. Polytechnic<br>Patan, Gujarat, India</p>
                            <p class="text-light-emphasis mb-3"><i class="bi bi-envelope-fill text-primary me-2"></i>Email: placement.portal@gmail.com</p>
                            <p class="text-light-emphasis mb-0"><i class="bi bi-telephone-fill text-primary me-2"></i>Phone: +91 98765 43210</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="glass-card p-4 h-100">
                            <h5 class="fw-semibold mb-3">Send a Message</h5>
                            <form>
                                <div class="mb-3">
                                    <label class="form-label small text-light-emphasis">Name</label>
                                    <input type="text" class="form-control bg-transparent text-white" placeholder="Enter your name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label small text-light-emphasis">Email</label>
                                    <input type="email" class="form-control bg-transparent text-white" placeholder="Enter your email" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label small text-light-emphasis">Message</label>
                                    <textarea class="form-control bg-transparent text-white" rows="4" placeholder="Write your message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary rounded-pill">Send Message</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="glass-card p-4 h-100">
                            <h5 class="fw-semibold mb-3">Campus Location</h5>
                            <div class="map-placeholder">
                                <iframe
                                    src="https://www.google.com/maps?q=K.%20D.%20Polytechnic%20Patan%20Gujarat%20India&z=14&output=embed"
                                    title="K. D. Polytechnic, Patan, Gujarat"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <h5 class="fw-semibold mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home" class="text-light-emphasis text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="#about" class="text-light-emphasis text-decoration-none">About</a></li>
                        <li class="mb-2"><a href="#drives" class="text-light-emphasis text-decoration-none">Placement Drives</a></li>
                        <li class="mb-2"><a href="#contact" class="text-light-emphasis text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-semibold mb-3">Contact Details</h5>
                    <p class="text-light-emphasis mb-2"><i class="bi bi-envelope-fill text-primary me-2"></i>placement.portal@gmail.com</p>
                    <p class="text-light-emphasis mb-2"><i class="bi bi-telephone-fill text-primary me-2"></i>+91 98765 43210</p>
                    <p class="text-light-emphasis mb-0"><i class="bi bi-geo-alt-fill text-primary me-2"></i>K. D. Polytechnic, Patan, Gujarat, India</p>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-semibold mb-3">Follow Us</h5>
                    <div class="d-flex gap-3 fs-5">
                        <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-top border-secondary mt-4 pt-3 d-flex flex-column flex-md-row justify-content-between align-items-center">
                <p class="mb-0 text-light-emphasis">© 2026 College Training & Placement Portal. All rights reserved.</p>
                <a href="#home" class="btn btn-primary rounded-pill mt-3 mt-md-0">Back to Top</a>
            </div>
        </div>
    </footer>

    <a href="#home" class="btn btn-primary rounded-circle back-to-top" id="backToTop" aria-label="Back to top"><i class="bi bi-arrow-up"></i></a>

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
