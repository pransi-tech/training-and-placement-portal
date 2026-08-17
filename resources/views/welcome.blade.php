<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>K. D. Polytechnic T&P Portal</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #050b1c;
            color: #f5f7ff;
            min-height: 100vh;
        }

        button,
        input,
        select,
        textarea {
            font-family: inherit;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* =========================================================
           HEADER
        ========================================================= */

        .header {
            height: 70px;
            background: #020817;
            border-top: 3px solid #65471f;
            border-bottom: 1px solid rgba(255,255,255,0.08);
            display: flex;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-inner {
            width: 100%;
            max-width: 1500px;
            margin: auto;
            padding: 0 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
        }

        .brand-logo {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ffffff;
            box-shadow: 0 0 14px rgba(56,125,255,0.55);
            background: #fff;
        }

        .brand-name {
            font-size: 24px;
            font-weight: 700;
            color: #f8f9ff;
            white-space: nowrap;
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav-link {
            color: #f3f5fc;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: 0.2s;
        }

        .nav-link:hover {
            color: #4385ff;
        }

        .login-btn,
        .register-btn {
            border-radius: 22px;
            padding: 7px 17px;
            font-size: 15px;
            cursor: pointer;
        }

        .login-btn {
            border: 1px solid #e5e8f0;
            background: transparent;
            color: white;
        }

        .register-btn {
            border: none;
            background: #3278ef;
            color: white;
        }

        .login-btn:hover,
        .register-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 7px 18px rgba(50,120,239,0.3);
        }

        /* Dropdown */

        .dropdown {
            position: relative;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            right: 0;
            top: 42px;
            width: 230px;
            background: #101a32;
            border: 1px solid #273555;
            border-radius: 13px;
            padding: 8px;
            box-shadow: 0 18px 40px rgba(0,0,0,0.45);
            z-index: 2000;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-item {
            width: 100%;
            padding: 12px 14px;
            color: #eaf0ff;
            display: flex;
            align-items: center;
            gap: 11px;
            border-radius: 9px;
            cursor: pointer;
            font-size: 14px;
            background: transparent;
            border: none;
            text-align: left;
        }

        .dropdown-item:hover {
            background: #182645;
            color: #4b8cff;
        }

        /* =========================================================
           HOME
        ========================================================= */

        #homePage {
            display: block;
        }

        .hero {
            min-height: 755px;
            background:
                linear-gradient(
                    rgba(4,10,29,0.82),
                    rgba(4,10,29,0.88)
                ),
                 url("{{ asset('images/kdpclg.jpg.png.png') }}");


            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            padding: 90px 7%;
        }

        .hero-grid {
            width: 100%;
            max-width: 1500px;
            margin: auto;
            display: grid;
            grid-template-columns: 1.65fr 0.85fr;
            gap: 55px;
            align-items: center;
        }

        .hero-card {
            background: rgba(14,24,47,0.87);
            border: 1px solid rgba(150,170,205,0.25);
            border-radius: 28px;
            padding: 48px 36px;
            box-shadow: 0 25px 60px rgba(0,0,0,0.25);
        }

        .hero-card h1 {
            font-size: 58px;
            line-height: 1.18;
            font-weight: 800;
            margin-bottom: 22px;
        }

        .hero-card p {
            color: #72809b;
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 28px;
        }

        .explore-btn {
            background: #347cf2;
            color: white;
            border: none;
            border-radius: 28px;
            padding: 14px 27px;
            font-size: 18px;
            cursor: pointer;
            box-shadow: 0 10px 25px rgba(52,124,242,0.3);
            transition: 0.25s;
        }

        .explore-btn:hover {
            transform: translateY(-2px);
            background: #4286f6;
        }

        .career-card {
            background: rgba(15,29,54,0.90);
            border: 1px solid rgba(150,170,205,0.25);
            border-radius: 24px;
            padding: 53px;
        }

        .career-icon {
            width: 62px;
            height: 62px;
            border-radius: 18px;
            background: #347cf2;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin-bottom: 22px;
        }

        .career-card h2 {
            font-size: 31px;
            margin-bottom: 20px;
        }

        .career-card p {
            color: #71809c;
            line-height: 1.8;
            margin-bottom: 22px;
        }

        .check-line {
            margin: 13px 0;
            font-size: 15px;
        }

        .check-line i {
            color: #087cff;
            margin-right: 8px;
        }

        /* =========================================================
           GENERAL SECTION
        ========================================================= */

        .section {
            padding: 90px 7%;
            background: #050b1c;
        }

        .section-title {
            text-align: center;
            font-size: 38px;
            margin-bottom: 12px;
        }

        .section-subtitle {
            text-align: center;
            color: #87a0c5;
            font-size: 17px;
            max-width: 850px;
            margin: 0 auto 50px;
            line-height: 1.7;
        }

        .container {
            max-width: 1450px;
            margin: auto;
        }

        /* =========================================================
           ABOUT
        ========================================================= */

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 28px;
        }

        .info-card {
            background: #101a31;
            border: 1px solid #293753;
            border-radius: 22px;
            padding: 30px;
        }

        .info-icon {
            width: 65px;
            height: 65px;
            background: #347cf2;
            border-radius: 17px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            margin-bottom: 24px;
        }

        .info-card h3 {
            font-size: 25px;
            margin-bottom: 15px;
        }

        .info-card p {
            color: #687996;
            line-height: 1.8;
        }

        /* =========================================================
           LATEST DRIVES
        ========================================================= */

        .drives-grid {
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 25px;
        }

        .drive-card {
            background: #101a31;
            border: 1px solid #293753;
            border-radius: 20px;
            padding: 27px;
            transition: 0.25s;
        }

        .drive-card:hover {
            transform: translateY(-5px);
            border-color: #397ff0;
        }

        .drive-card h3 {
            font-size: 22px;
            margin-bottom: 16px;
        }

        .drive-company {
            color: #4b8cff;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .drive-info {
            color: #8b9dbc;
            margin: 8px 0;
            font-size: 14px;
        }

        .details-btn {
            margin-top: 18px;
            background: #347cf2;
            color: white;
            border: none;
            padding: 10px 17px;
            border-radius: 9px;
            cursor: pointer;
            font-size: 14px;
        }

        .details-btn:hover {
            background: #4a8bff;
        }

        /* =========================================================
           TOP COMPANIES
        ========================================================= */

        .top-company-grid {
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 25px;
        }

        .top-company {
            background: #101a31;
            border: 1px solid #293753;
            border-radius: 20px;
            padding: 28px;
        }

        .company-rank {
            width: 40px;
            height: 40px;
            background: #347cf2;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
            font-weight: 700;
        }

        .top-company h3 {
            margin-bottom: 8px;
        }

        .top-company p {
            color: #7f91ae;
            line-height: 1.7;
        }

        /* =========================================================
           STUDENTS
        ========================================================= */

        .student-grid {
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 25px;
        }

        .student-card {
            background: #101a31;
            border: 1px solid #293753;
            border-radius: 20px;
            padding: 28px;
        }

        .student-avatar {
            width: 62px;
            height: 62px;
            border-radius: 50%;
            background: #347cf2;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            margin-bottom: 18px;
        }

        .student-card h3 {
            margin-bottom: 8px;
        }

        .student-place {
            color: #4b8cff;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .student-card p {
            color: #8192ad;
            line-height: 1.7;
            font-size: 14px;
        }

        /* =========================================================
           HELP
        ========================================================= */

        .help-section {
            padding: 80px 7% 100px;
            background: #050b1c;
        }

        .help-grid {
            display: grid;
            grid-template-columns: 1.3fr 1fr;
            gap: 28px;
        }

        .help-card {
            background: #101a31;
            border: 1px solid #293753;
            border-radius: 22px;
            padding: 30px;
        }

        .help-card h3 {
            font-size: 23px;
            margin-bottom: 25px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
        display: block;
        color: #ffffff;
        margin-bottom: 7px;
        font-size: 14px;
        font-weight: 400;
    }

        .form-control {
            width: 100%;
            background: #101a31;
            border: 1px solid #8490a5;
            color: white;
            border-radius: 7px;
            padding: 12px;
            outline: none;
        }

        .form-control:focus {
            border-color: #347cf2;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .send-btn {
            background: #347cf2;
            color: white;
            border: none;
            padding: 11px 18px;
            border-radius: 9px;
            cursor: pointer;
        }

        .faq {
            padding: 17px 0;
            border-bottom: 1px solid #293753;
            cursor: pointer;
        }

        .faq-question {
            display: flex;
            justify-content: space-between;
            font-weight: 600;
        }

        .faq-answer {
            display: none;
            color: #7789a7;
            line-height: 1.7;
            margin-top: 12px;
            font-size: 14px;
        }

        .faq.open .faq-answer {
            display: block;
        }

        /* =========================================================
           EXPLORE OPPORTUNITIES PAGE
        ========================================================= */

        #opportunitiesPage {
            display: none;
            background: #050b1c;
            min-height: calc(100vh - 70px);
            padding-bottom: 100px;
        }

        .opportunities-header {
            padding: 70px 7% 40px;
            text-align: center;
        }

        .opportunities-header h1 {
            font-size: 43px;
            margin-bottom: 12px;
        }

        .opportunities-header p {
            color: #8094b5;
        }

        /* Filter */

        .filter-box {
            max-width: 1450px;
            margin: 0 auto 45px;
            padding: 25px;
            background: #101a31;
            border: 1px solid #293753;
            border-radius: 20px;
        }

        .filter-title {
            font-size: 20px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .filter-grid {
            display: grid;
            grid-template-columns: repeat(4,1fr);
            gap: 16px;
        }

        .filter-select {
            width: 100%;
            padding: 13px;
            background: #0a1328;
            color: #f5f7ff;
            border: 1px solid #3b4b6b;
            border-radius: 9px;
            outline: none;
        }

        .filter-select:focus {
            border-color: #347cf2;
        }

        .reset-filter {
            margin-top: 17px;
            background: transparent;
            border: 1px solid #347cf2;
            color: #4b8cff;
            padding: 9px 15px;
            border-radius: 8px;
            cursor: pointer;
        }

        /* Companies */

        .companies-grid {
            max-width: 1450px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 24px;
            padding: 0 20px;
        }

        .company-card {
            background: #101a31;
            border: 1px solid #293753;
            border-radius: 20px;
            padding: 26px;
            transition: 0.25s;
        }

        .company-card:hover {
            border-color: #397ff0;
            transform: translateY(-4px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.18);
        }

        .company-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 15px;
        }

        .company-icon {
            width: 52px;
            height: 52px;
            background: #347cf2;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
        }

        .branch-badge {
            background: rgba(52,124,242,0.14);
            color: #5d96ff;
            border: 1px solid rgba(52,124,242,0.3);
            padding: 5px 9px;
            border-radius: 20px;
            font-size: 11px;
        }

        .company-card h3 {
            font-size: 21px;
            margin-bottom: 6px;
        }

        .company-role {
            color: #4b8cff;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 13px;
        }

        .company-details {
            color: #7f91ad;
            font-size: 13px;
            line-height: 1.9;
        }

        .company-details i {
            width: 19px;
            color: #518cff;
        }

        .view-details {
            margin-top: 17px;
            width: 100%;
            background: #347cf2;
            color: white;
            border: none;
            border-radius: 9px;
            padding: 11px;
            cursor: pointer;
        }

        .no-results {
            display: none;
            text-align: center;
            color: #8394af;
            padding: 50px;
            grid-column: 1/-1;
        }

        .back-home {
            display: block;
            margin: 45px auto 0;
            background: transparent;
            border: 1px solid #46587d;
            color: #d7e1f6;
            border-radius: 10px;
            padding: 11px 20px;
            cursor: pointer;
        }

        /* =========================================================
           MODAL
        ========================================================= */

        .modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.78);
            z-index: 3000;
            align-items: center;
            justify-content: center;
            padding: 25px;
        }

        .modal-overlay.show {
            display: flex;
        }

        .details-modal {
            width: 100%;
            max-width: 850px;
            max-height: 90vh;
            overflow-y: auto;
            background: #0d172d;
            border: 1px solid #30415f;
            border-radius: 22px;
            padding: 32px;
            position: relative;
        }

        .modal-close {
            position: absolute;
            right: 20px;
            top: 18px;
            background: transparent;
            border: none;
            color: #dce6fa;
            font-size: 25px;
            cursor: pointer;
        }

        .modal-title {
            font-size: 30px;
            margin-bottom: 5px;
            padding-right: 40px;
        }

        .modal-role {
            color: #4d8cff;
            margin-bottom: 25px;
        }

        .modal-section {
            margin-top: 25px;
        }

        .modal-section h4 {
            color: #f3f6ff;
            margin-bottom: 12px;
            font-size: 18px;
        }

        .modal-section p,
        .modal-section li {
            color: #8293af;
            line-height: 1.8;
            font-size: 14px;
        }

        .modal-section ul {
            padding-left: 20px;
        }

        .modal-info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .modal-info {
            background: #111e37;
            border: 1px solid #263754;
            padding: 14px;
            border-radius: 10px;
        }

        .modal-info strong {
            display: block;
            color: #e8edfa;
            font-size: 13px;
            margin-bottom: 4px;
        }

        .modal-info span {
            color: #8192ad;
            font-size: 13px;
        }

        /* =========================================================
           FOOTER
        ========================================================= */


footer {
    background: #020817;
    border-top: 1px solid #1b2942;
    text-align: center;
    padding: 55px 20px 60px;
    color: #70819e;
}


.footer-logo {
    width: 75px;
    height: 75px;
    border-radius: 50%;
    object-fit: cover;
    display: block;
    margin: 0 auto 18px;
    border: 2px solid #ffffff;
    filter: drop-shadow(0 0 10px rgba(47, 117, 255, 0.45));
}

.footer-title {
    color: #ffffff;
    font-size: 25px;
    font-weight: 600;
    margin-bottom: 8px;
}

.footer-subtitle {
    color: #66758f;
    font-size: 15px;
    margin-bottom: 10px;
}

.footer-copy {
    color: #66758f;
    font-size: 14px;
}
        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media(max-width: 1100px) {

            .hero-grid {
                grid-template-columns: 1fr;
            }

            .hero-card h1 {
                font-size: 45px;
            }

            .drives-grid,
            .top-company-grid,
            .student-grid,
            .companies-grid {
                grid-template-columns: repeat(2,1fr);
            }

            .filter-grid {
                grid-template-columns: repeat(2,1fr);
            }

            .nav {
                gap: 15px;
            }
        }

        @media(max-width: 750px) {

            .header {
                height: auto;
                padding: 12px 0;
            }

            .header-inner {
                flex-direction: column;
                gap: 13px;
            }

            .nav {
                flex-wrap: wrap;
                justify-content: center;
            }

            .brand-name {
                font-size: 18px;
            }

            .hero {
                padding: 55px 20px;
            }

            .hero-card,
            .career-card {
                padding: 28px;
            }

            .hero-card h1 {
                font-size: 37px;
            }

            .about-grid,
            .drives-grid,
            .top-company-grid,
            .student-grid,
            .companies-grid,
            .help-grid {
                grid-template-columns: 1fr;
            }

            .filter-grid,
            .form-row,
            .modal-info-grid {
                grid-template-columns: 1fr;
            }

            .section {
                padding: 60px 20px;
            }

            .section-title {
                font-size: 31px;
            }
        }

    </style>
</head>

<body>

<!-- =========================================================
     HEADER
========================================================= -->

<header class="header">

    <div class="header-inner">

        <div class="brand" onclick="showHome()">

            <!-- Put logo in public/images/kd-polytechnic-logo.png -->
            <img
                src="{{ asset('images/kd-polytechnic-logo.png') }}"
                class="brand-logo"
                alt="K D Polytechnic Logo"
                onerror="this.style.display='none';"
            >

            <div class="brand-name">
                K. D. Polytechnic T&P Portal
            </div>

        </div>

        <nav class="nav">

            <span class="nav-link" onclick="showHome()">
                Home
            </span>

            <span class="nav-link" onclick="scrollToSection('about')">
                About
            </span>

            <span class="nav-link" onclick="showOpportunities()">
                Companies
            </span>

            <span class="nav-link" onclick="scrollToSection('drives')">
                Placement Drives
            </span>

            <span class="nav-link" onclick="scrollToSection('help')">
                Help
            </span>

            <!-- LOGIN -->

            <div class="dropdown">

                <button class="login-btn"
                        onclick="toggleDropdown('loginMenu')">
                    Login
                </button>

                <div class="dropdown-menu" id="loginMenu">

                    <button class="dropdown-item"
                            onclick="goToPage('/student/login')">
                        <i class="fa-solid fa-user-graduate"></i>
                        Student
                    </button>

                    <button class="dropdown-item"
                            onclick="goToPage('/placement-officer/login')">
                        <i class="fa-solid fa-user-tie"></i>
                        Placement Officer
                    </button>

                    <button class="dropdown-item"
                            onclick="goToPage('/admin/login')">
                        <i class="fa-solid fa-user-shield"></i>
                        Admin
                    </button>

                    <button class="dropdown-item"
                            onclick="goToPage('/company/login')">
                        <i class="fa-solid fa-building"></i>
                        Company
                    </button>

                </div>

            </div>


            <!-- REGISTER -->

            <div class="dropdown">

                <button class="register-btn"
                        onclick="toggleDropdown('registerMenu')">
                    Register
                </button>

                <div class="dropdown-menu" id="registerMenu">

                    <button class="dropdown-item"
                            onclick="goToPage('/register')">
                        <i class="fa-solid fa-user-graduate"></i>
                        Student
                    </button>

                    <button class="dropdown-item"
                           onclick="goToPage('/company-register')">
                        <i class="fa-solid fa-building"></i>
                        Company
                    </button>

                </div>

            </div>

        </nav>

    </div>

</header>


<!-- =========================================================
     HOME PAGE
========================================================= -->

<div id="homePage">


    <!-- HERO -->

    <section class="hero">

        <div class="hero-grid">

            <div class="hero-card">

                <h1>
                    Launch Your Career With Confidence
                </h1>

                <p>
                    Discover premium opportunities, connect with top recruiters,
                    and build a future-ready profile through our modern
                    placement ecosystem.
                </p>

                <button class="explore-btn"
                        onclick="showOpportunities()">

                    Explore Opportunities

                </button>

            </div>


            <div class="career-card">

                <div class="career-icon">
                    <i class="fa-solid fa-rocket"></i>
                </div>

                <h2>
                    Career Advancement Starts Here
                </h2>

                <p>
                    From registration to placement, everything is designed
                    to help students and recruiters collaborate seamlessly.
                </p>

                <div class="check-line">
                    <i class="fa-solid fa-circle-check"></i>
                    Smart placement discovery
                </div>

                <div class="check-line">
                    <i class="fa-solid fa-circle-check"></i>
                    Professional recruiter engagement
                </div>

                <div class="check-line">
                    <i class="fa-solid fa-circle-check"></i>
                    Real-time updates and notifications
                </div>

            </div>

        </div>

    </section>


    <!-- ABOUT -->

    <section class="section" id="about">

        <div class="container">

            <h2 class="section-title">
                About the Training & Placement Portal
            </h2>

            <p class="section-subtitle">
                The portal brings students, colleges, and employers together
                in one polished platform to simplify placement activities
                and accelerate career growth.
            </p>

            <div class="about-grid">

                <div class="info-card">

                    <div class="info-icon">
                        <i class="fa-solid fa-award"></i>
                    </div>

                    <h3>
                        Empowering Student Success
                    </h3>

                    <p>
                        Students can explore career opportunities, build their
                        professional profiles, and apply to companies with
                        clarity and confidence. The platform makes the placement
                        journey organized, transparent, and efficient.
                    </p>

                </div>


                <div class="info-card">

                    <div class="info-icon">
                        <i class="fa-solid fa-building-circle-check"></i>
                    </div>

                    <h3>
                        Connecting Education with Industry
                    </h3>

                    <p>
                        With a professional interface and modern workflows,
                        colleges can coordinate placement drives while
                        recruiters gain direct access to highly engaged
                        student talent pools.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- LATEST PLACEMENT DRIVES -->

    <section class="section" id="drives">

        <div class="container">

            <h2 class="section-title">
                Latest Placement Drives
            </h2>

            <p class="section-subtitle">
                Explore the latest recruitment opportunities available
                for eligible students.
            </p>

            <div class="drives-grid">


                <!-- DRIVE 1 -->

                <div class="drive-card">

                    <h3>TCS</h3>

                    <div class="drive-company">
                        Software Engineer
                    </div>

                    <div class="drive-info">
                        <i class="fa-solid fa-graduation-cap"></i>
                        Eligibility: B.Tech / B.E
                    </div>

                    <div class="drive-info">
                        <i class="fa-solid fa-calendar"></i>
                        Last Date: 05 Aug 2026
                    </div>

                    <div class="drive-info">
                        <i class="fa-solid fa-location-dot"></i>
                        Location: Campus Drive
                    </div>

                    <button class="details-btn"
                            onclick="showDriveDetails(
                            'TCS',
                            'Software Engineer',
                            'B.Tech / B.E students from eligible engineering branches',
                            'Minimum 7.0 CGPA with no active backlogs',
                            '05 Aug 2026',
                            'K. D. Polytechnic Campus',
                            'Full-time placement opportunity',
                            'Candidates will participate in aptitude, technical and HR evaluation rounds. Selected students will receive joining and onboarding information directly from the company.'
                            )">

                        View Details

                    </button>

                </div>


                <!-- DRIVE 2 -->

                <div class="drive-card">

                    <h3>Infosys</h3>

                    <div class="drive-company">
                        System Engineer
                    </div>

                    <div class="drive-info">
                        <i class="fa-solid fa-graduation-cap"></i>
                        Eligibility: Diploma / Graduate
                    </div>

                    <div class="drive-info">
                        <i class="fa-solid fa-calendar"></i>
                        Last Date: 12 Aug 2026
                    </div>

                    <div class="drive-info">
                        <i class="fa-solid fa-location-dot"></i>
                        Location: College Campus
                    </div>

                    <button class="details-btn"
                            onclick="showDriveDetails(
                            'Infosys',
                            'System Engineer',
                            'Diploma and graduate students from eligible technical branches',
                            'Minimum 6.5 CGPA and no active backlogs',
                            '12 Aug 2026',
                            'K. D. Polytechnic Campus',
                            'Full-time placement opportunity',
                            'The recruitment process includes an online assessment, technical discussion and HR interaction. Selected candidates will be informed through the placement cell.'
                            )">

                        View Details

                    </button>

                </div>


                <!-- DRIVE 3 -->

                <div class="drive-card">

                    <h3>Microsoft</h3>

                    <div class="drive-company">
                        Data Analyst Intern
                    </div>

                    <div class="drive-info">
                        <i class="fa-solid fa-graduation-cap"></i>
                        Eligibility: MCA / M.Tech
                    </div>

                    <div class="drive-info">
                        <i class="fa-solid fa-calendar"></i>
                        Last Date: 18 Aug 2026
                    </div>

                    <div class="drive-info">
                        <i class="fa-solid fa-location-dot"></i>
                        Location: Online
                    </div>

                    <button class="details-btn"
                            onclick="showDriveDetails(
                            'Microsoft',
                            'Data Analyst Intern',
                            'MCA / M.Tech students with relevant analytical and technical skills',
                            'Minimum 7.5 CGPA with strong SQL and analytical skills',
                            '18 Aug 2026',
                            'Online Recruitment',
                            'Internship opportunity',
                            'Candidates will be evaluated on analytical reasoning, SQL, programming fundamentals, problem solving and communication. Internship conversion may depend on performance.'
                            )">

                        View Details

                    </button>

                </div>

            </div>

        </div>

    </section>


    <!-- TOP COMPANIES -->

    <section class="section">

        <div class="container">

            <h2 class="section-title">
                Top Companies
            </h2>

            <p class="section-subtitle">
                Companies with strong placement opportunities for students.
            </p>

            <div class="top-company-grid">

                <div class="top-company">

                    <div class="company-rank">1</div>

                    <h3>TCS</h3>

                    <p>
                        One of the leading recruiters offering software,
                        IT services and engineering opportunities.
                    </p>

                </div>


                <div class="top-company">

                    <div class="company-rank">2</div>

                    <h3>Infosys</h3>

                    <p>
                        Offers technology, engineering, consulting and
                        system development opportunities.
                    </p>

                </div>


                <div class="top-company">

                    <div class="company-rank">3</div>

                    <h3>Wipro</h3>

                    <p>
                        Provides opportunities across software, IT,
                        engineering and business technology roles.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- STUDENTS -->

    <section class="section">

        <div class="container">

            <h2 class="section-title">
                Our Placed Students
            </h2>

            <p class="section-subtitle">
                Meet some of the students who successfully started their
                professional journey.
            </p>

            <div class="student-grid">

                <div class="student-card">

                    <div class="student-avatar">
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <h3>Priya Shah</h3>

                    <div class="student-place">
                        Placed at TCS
                    </div>

                    <p>
                        Priya completed her Computer Engineering studies
                        and secured a Software Engineer position. Her
                        placement experience included aptitude, technical
                        and HR rounds.
                    </p>

                </div>


                <div class="student-card">

                    <div class="student-avatar">
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <h3>Rahul Patel</h3>

                    <div class="student-place">
                        Placed at Infosys
                    </div>

                    <p>
                        Rahul successfully participated in the recruitment
                        process and received an opportunity as a System
                        Engineer. He described the process as structured
                        and career-focused.
                    </p>

                </div>


                <div class="student-card">

                    <div class="student-avatar">
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <h3>Neha Mehta</h3>

                    <div class="student-place">
                        Placed at Wipro
                    </div>

                    <p>
                        Neha secured an engineering technology role after
                        completing technical assessments and interviews.
                        Her experience helped her understand the industry
                        recruitment process.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- HELP & SUPPORT - LAST -->

    <section class="help-section" id="help">

        <div class="container">

            <h2 class="section-title">
                Help & Support
            </h2>

            <p class="section-subtitle">
                Need help with placements, account access, or profile updates?
                We're here to assist you.
            </p>

            <div class="help-grid">


                <div class="help-card">

                    <h3>
                        Send us a message
                    </h3>

                    <div class="form-row">

                        <div class="form-group">

                            <label>
                                Full Name
                            </label>

                            <input type="text"
                                   class="form-control"
                                   placeholder="Enter your full name">

                        </div>


                        <div class="form-group">

                            <label>
                                Email Address
                            </label>

                            <input type="email"
                                   class="form-control"
                                   placeholder="Enter your email">

                        </div>

                    </div>


                    <div class="form-group">

                        <label>
                            Subject
                        </label>

                        <input type="text"
                               class="form-control"
                               placeholder="What do you need help with?">

                    </div>


                    <div class="form-group">

                        <label>
                            Message
                        </label>

                        <textarea class="form-control"
                                  placeholder="Write your message"></textarea>

                    </div>


                    <button class="send-btn">
                        Send Message
                    </button>

                </div>


                <div class="help-card">

                    <h3>
                        Frequently Asked Questions
                    </h3>


                    <div class="faq">

                        <div class="faq-question">
                            <span>
                                How do I apply for a placement drive?
                            </span>

                            <span>⌄</span>
                        </div>

                        <div class="faq-answer">
                            Login as a student, open the available placement
                            opportunities and apply for the drive for which
                            you meet the eligibility requirements.
                        </div>

                    </div>


                    <div class="faq">

                        <div class="faq-question">
                            <span>
                                I forgot my password. What should I do?
                            </span>

                            <span>⌄</span>
                        </div>

                        <div class="faq-answer">
                            Contact the placement cell or use the account
                            recovery option when it is available.
                        </div>

                    </div>


                    <div class="faq">

                        <div class="faq-question">
                            <span>
                                How can I update my profile?
                            </span>

                            <span>⌄</span>
                        </div>

                        <div class="faq-answer">
                            Login to your student account and update the
                            information from your profile section.
                        </div>

                    </div>


                    <div class="faq">

                        <div class="faq-question">
                            <span>
                                Who can I contact for placement-related issues?
                            </span>

                            <span>⌄</span>
                        </div>

                        <div class="faq-answer">
                            You can contact the college Training and Placement
                            Officer for placement-related assistance.
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>


<!-- =========================================================
     EXPLORE OPPORTUNITIES
     THIS IS INSIDE SAME WELCOME PAGE
========================================================= -->

<div id="opportunitiesPage">

    <div class="opportunities-header">

        <h1>
            Explore Opportunities
        </h1>

        <p>
            Find the right company and job opportunity according to
            your branch, CGPA, job type and location.
        </p>

    </div>


    <!-- FILTERS -->

    <div class="filter-box">

        <div class="filter-title">
            <i class="fa-solid fa-filter"></i>
            Filter Opportunities
        </div>

        <div class="filter-grid">


            <!-- BRANCH -->

            <select id="branchFilter"
                    class="filter-select"
                    onchange="filterCompanies()">

                <option value="all">
                    All Branches
                </option>

                <option value="Computer">
                    Computer Engineering
                </option>

                <option value="Mechanical">
                    Mechanical Engineering
                </option>

                <option value="Electrical">
                    Electrical Engineering
                </option>

                <option value="Civil">
                    Civil Engineering
                </option>

                <option value="Electronics">
                    Electronics & Communication
                </option>

                <option value="Automobile">
                    Automobile Engineering
                </option>

            </select>


            <!-- CGPA -->

            <select id="cgpaFilter"
                    class="filter-select"
                    onchange="filterCompanies()">

                <option value="all">
                    Any CGPA
                </option>

                <option value="6">
                    6.0+ CGPA
                </option>

                <option value="6.5">
                    6.5+ CGPA
                </option>

                <option value="7">
                    7.0+ CGPA
                </option>

                <option value="7.5">
                    7.5+ CGPA
                </option>

                <option value="8">
                    8.0+ CGPA
                </option>

            </select>


            <!-- JOB TYPE -->

            <select id="jobFilter"
                    class="filter-select"
                    onchange="filterCompanies()">

                <option value="all">
                    All Job Types
                </option>

                <option value="Full-time">
                    Full-time
                </option>

                <option value="Internship">
                    Internship
                </option>

                <option value="Apprenticeship">
                    Apprenticeship
                </option>

            </select>


            <!-- LOCATION -->

            <select id="locationFilter"
                    class="filter-select"
                    onchange="filterCompanies()">

                <option value="all">
                    All Locations
                </option>

                <option value="Ahmedabad">
                    Ahmedabad
                </option>

                <option value="Gandhinagar">
                    Gandhinagar
                </option>

                <option value="Vadodara">
                    Vadodara
                </option>

                <option value="Surat">
                    Surat
                </option>

                <option value="Rajkot">
                    Rajkot
                </option>

                <option value="Pune">
                    Pune
                </option>

                <option value="Mumbai">
                    Mumbai
                </option>

                <option value="Bengaluru">
                    Bengaluru
                </option>

                <option value="Chennai">
                    Chennai
                </option>

            </select>

        </div>


        <button class="reset-filter"
                onclick="resetFilters()">

            <i class="fa-solid fa-rotate-left"></i>
            Reset Filters

        </button>

    </div>


    <!-- COMPANY LIST -->

    <div class="companies-grid"
         id="companiesGrid">


        <!-- 1 TCS -->

        <div class="company-card"
             data-branch="Computer"
             data-cgpa="7"
             data-job="Full-time"
             data-location="Ahmedabad">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-code"></i>
                </div>

                <span class="branch-badge">
                    Computer
                </span>

            </div>

            <h3>TCS</h3>

            <div class="company-role">
                Software Engineer
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 7.0+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Ahmedabad</div>
                <div><i class="fa-solid fa-briefcase"></i> Full-time</div>
                <div><i class="fa-solid fa-money-bill"></i> ₹4.5–7 LPA</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'TCS',
                    'Software Engineer',
                    'Computer',
                    'Ahmedabad',
                    'Full-time',
                    '7.0+',
                    '₹4.5–7 LPA',
                    'TCS offers software development, application support and technology consulting opportunities for engineering students.',
                    'Candidates may work on enterprise software, web applications, cloud platforms, databases and digital transformation projects.',
                    'Programming fundamentals, Java/Python, SQL, problem solving, communication and software development basics.',
                    'Aptitude assessment → Technical assessment → Technical interview → HR interview → Final selection.'
                    )">

                View Details

            </button>

        </div>


        <!-- 2 INFOSYS -->

        <div class="company-card"
             data-branch="Computer"
             data-cgpa="6.5"
             data-job="Full-time"
             data-location="Pune">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>

                <span class="branch-badge">
                    Computer
                </span>

            </div>

            <h3>Infosys</h3>

            <div class="company-role">
                System Engineer
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 6.5+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Pune</div>
                <div><i class="fa-solid fa-briefcase"></i> Full-time</div>
                <div><i class="fa-solid fa-money-bill"></i> ₹4–6 LPA</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'Infosys',
                    'System Engineer',
                    'Computer',
                    'Pune',
                    'Full-time',
                    '6.5+',
                    '₹4–6 LPA',
                    'Infosys provides technology consulting, software engineering and digital services opportunities.',
                    'The selected candidate can work with enterprise applications, cloud technologies, databases and software development teams.',
                    'Programming, SQL, logical reasoning, communication and basic software engineering concepts.',
                    'Online assessment → Technical evaluation → Interview → HR discussion → Selection.'
                    )">

                View Details

            </button>

        </div>


        <!-- 3 WIPRO -->

        <div class="company-card"
             data-branch="Computer"
             data-cgpa="6.5"
             data-job="Full-time"
             data-location="Bengaluru">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-server"></i>
                </div>

                <span class="branch-badge">
                    Computer
                </span>

            </div>

            <h3>Wipro</h3>

            <div class="company-role">
                Project Engineer
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 6.5+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Bengaluru</div>
                <div><i class="fa-solid fa-briefcase"></i> Full-time</div>
                <div><i class="fa-solid fa-money-bill"></i> ₹4–6.5 LPA</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'Wipro',
                    'Project Engineer',
                    'Computer',
                    'Bengaluru',
                    'Full-time',
                    '6.5+',
                    '₹4–6.5 LPA',
                    'Wipro provides technology services and digital transformation opportunities across multiple industries.',
                    'Employees may contribute to software development, testing, cloud services and enterprise technology projects.',
                    'C/C++, Java, Python, SQL, communication and problem-solving skills.',
                    'Assessment → Technical round → HR round → Final selection.'
                    )">

                View Details

            </button>

        </div>


        <!-- 4 ACCENTURE -->

        <div class="company-card"
             data-branch="Computer"
             data-cgpa="7"
             data-job="Full-time"
             data-location="Mumbai">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-network-wired"></i>
                </div>

                <span class="branch-badge">
                    Computer
                </span>

            </div>

            <h3>Accenture</h3>

            <div class="company-role">
                Associate Software Engineer
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 7.0+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Mumbai</div>
                <div><i class="fa-solid fa-briefcase"></i> Full-time</div>
                <div><i class="fa-solid fa-money-bill"></i> ₹5–8 LPA</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'Accenture',
                    'Associate Software Engineer',
                    'Computer',
                    'Mumbai',
                    'Full-time',
                    '7.0+',
                    '₹5–8 LPA',
                    'Accenture works across consulting, technology and digital transformation.',
                    'The role can involve application development, testing, cloud services and enterprise technology solutions.',
                    'Programming, databases, logical reasoning, communication and analytical skills.',
                    'Online assessment → Technical interview → HR discussion → Selection.'
                    )">

                View Details

            </button>

        </div>


        <!-- 5 CAPGEMINI -->

        <div class="company-card"
             data-branch="Computer"
             data-cgpa="6.5"
             data-job="Full-time"
             data-location="Pune">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-cloud"></i>
                </div>

                <span class="branch-badge">
                    Computer
                </span>

            </div>

            <h3>Capgemini</h3>

            <div class="company-role">
                Software Analyst
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 6.5+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Pune</div>
                <div><i class="fa-solid fa-briefcase"></i> Full-time</div>
                <div><i class="fa-solid fa-money-bill"></i> ₹4.5–7 LPA</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'Capgemini',
                    'Software Analyst',
                    'Computer',
                    'Pune',
                    'Full-time',
                    '6.5+',
                    '₹4.5–7 LPA',
                    'Capgemini provides consulting, technology and digital engineering services.',
                    'The selected candidate may work on software applications, testing, cloud and enterprise solutions.',
                    'Java, Python, SQL, software testing, analytical thinking and communication.',
                    'Assessment → Technical round → HR round → Final selection.'
                    )">

                View Details

            </button>

        </div>


        <!-- 6 TECH MAHINDRA -->

        <div class="company-card"
             data-branch="Computer"
             data-cgpa="6.5"
             data-job="Full-time"
             data-location="Pune">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-mobile-screen"></i>
                </div>

                <span class="branch-badge">
                    Computer
                </span>

            </div>

            <h3>Tech Mahindra</h3>

            <div class="company-role">
                Software Developer
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 6.5+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Pune</div>
                <div><i class="fa-solid fa-briefcase"></i> Full-time</div>
                <div><i class="fa-solid fa-money-bill"></i> ₹4–6 LPA</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'Tech Mahindra',
                    'Software Developer',
                    'Computer',
                    'Pune',
                    'Full-time',
                    '6.5+',
                    '₹4–6 LPA',
                    'Tech Mahindra provides IT, networking and digital technology services.',
                    'Students can work on software development, telecom applications, cloud platforms and enterprise systems.',
                    'Java, Python, SQL, web development, communication and problem solving.',
                    'Aptitude → Technical interview → HR interview → Selection.'
                    )">

                View Details

            </button>

        </div>


        <!-- 7 L&T -->

        <div class="company-card"
             data-branch="Mechanical"
             data-cgpa="6.5"
             data-job="Full-time"
             data-location="Vadodara">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-gears"></i>
                </div>

                <span class="branch-badge">
                    Mechanical
                </span>

            </div>

            <h3>Larsen & Toubro</h3>

            <div class="company-role">
                Graduate Engineer Trainee
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 6.5+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Vadodara</div>
                <div><i class="fa-solid fa-briefcase"></i> Full-time</div>
                <div><i class="fa-solid fa-money-bill"></i> ₹4.5–7 LPA</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'Larsen & Toubro',
                    'Graduate Engineer Trainee',
                    'Mechanical',
                    'Vadodara',
                    'Full-time',
                    '6.5+',
                    '₹4.5–7 LPA',
                    'L&T provides engineering, construction and manufacturing opportunities.',
                    'Mechanical engineers may work in design, production, project engineering, maintenance and manufacturing operations.',
                    'Engineering drawing, CAD, manufacturing, thermodynamics, production and communication.',
                    'Technical assessment → Technical interview → HR interview → Final selection.'
                    )">

                View Details

            </button>

        </div>


        <!-- 8 TATA MOTORS -->

        <div class="company-card"
             data-branch="Mechanical"
             data-cgpa="6.5"
             data-job="Full-time"
             data-location="Pune">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-car"></i>
                </div>

                <span class="branch-badge">
                    Mechanical
                </span>

            </div>

            <h3>Tata Motors</h3>

            <div class="company-role">
                Graduate Engineer Trainee
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 6.5+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Pune</div>
                <div><i class="fa-solid fa-briefcase"></i> Full-time</div>
                <div><i class="fa-solid fa-money-bill"></i> ₹4–6.5 LPA</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'Tata Motors',
                    'Graduate Engineer Trainee',
                    'Mechanical',
                    'Pune',
                    'Full-time',
                    '6.5+',
                    '₹4–6.5 LPA',
                    'Tata Motors provides automobile engineering and manufacturing opportunities.',
                    'The role can include production, quality, vehicle systems, manufacturing and maintenance activities.',
                    'Automobile engineering, manufacturing, CAD, quality and mechanical fundamentals.',
                    'Technical assessment → Interview → HR discussion → Selection.'
                    )">

                View Details

            </button>

        </div>


        <!-- 9 MARUTI -->

        <div class="company-card"
             data-branch="Mechanical"
             data-cgpa="6"
             data-job="Apprenticeship"
             data-location="Ahmedabad">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-car-side"></i>
                </div>

                <span class="branch-badge">
                    Mechanical
                </span>

            </div>

            <h3>Maruti Suzuki</h3>

            <div class="company-role">
                Production Trainee
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 6.0+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Ahmedabad</div>
                <div><i class="fa-solid fa-briefcase"></i> Apprenticeship</div>
                <div><i class="fa-solid fa-money-bill"></i> ₹2.5–4 LPA</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'Maruti Suzuki',
                    'Production Trainee',
                    'Mechanical',
                    'Ahmedabad',
                    'Apprenticeship',
                    '6.0+',
                    '₹2.5–4 LPA',
                    'Automobile manufacturing opportunity focused on production and engineering operations.',
                    'Candidates can gain practical exposure to production systems, quality processes and automobile manufacturing.',
                    'Mechanical fundamentals, manufacturing, quality and safety awareness.',
                    'Written test → Technical discussion → HR → Selection.'
                    )">

                View Details

            </button>

        </div>


        <!-- 10 ADANI -->

        <div class="company-card"
             data-branch="Electrical"
             data-cgpa="6.5"
             data-job="Full-time"
             data-location="Ahmedabad">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-bolt"></i>
                </div>

                <span class="branch-badge">
                    Electrical
                </span>

            </div>

            <h3>Adani Group</h3>

            <div class="company-role">
                Electrical Engineer
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 6.5+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Ahmedabad</div>
                <div><i class="fa-solid fa-briefcase"></i> Full-time</div>
                <div><i class="fa-solid fa-money-bill"></i> ₹4–7 LPA</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'Adani Group',
                    'Electrical Engineer',
                    'Electrical',
                    'Ahmedabad',
                    'Full-time',
                    '6.5+',
                    '₹4–7 LPA',
                    'Engineering opportunity across energy, infrastructure and industrial operations.',
                    'Electrical engineers may work on electrical systems, power distribution, maintenance and project operations.',
                    'Electrical machines, power systems, control systems, electrical safety and troubleshooting.',
                    'Technical test → Technical interview → HR round → Selection.'
                    )">

                View Details

            </button>

        </div>


        <!-- 11 SIEMENS -->

        <div class="company-card"
             data-branch="Electrical"
             data-cgpa="7"
             data-job="Internship"
             data-location="Vadodara">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-industry"></i>
                </div>

                <span class="branch-badge">
                    Electrical
                </span>

            </div>

            <h3>Siemens</h3>

            <div class="company-role">
                Electrical Engineering Intern
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 7.0+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Vadodara</div>
                <div><i class="fa-solid fa-briefcase"></i> Internship</div>
                <div><i class="fa-solid fa-money-bill"></i> Stipend Based</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'Siemens',
                    'Electrical Engineering Intern',
                    'Electrical',
                    'Vadodara',
                    'Internship',
                    '7.0+',
                    'Stipend Based',
                    'Engineering internship focused on industrial automation and electrical technologies.',
                    'Interns may assist with industrial systems, automation, electrical equipment and engineering documentation.',
                    'Electrical fundamentals, automation, PLC basics, circuit analysis and technical communication.',
                    'Application screening → Technical discussion → HR → Internship selection.'
                    )">

                View Details

            </button>

        </div>


        <!-- 12 SCHNEIDER -->

        <div class="company-card"
             data-branch="Electrical"
             data-cgpa="7"
             data-job="Full-time"
             data-location="Mumbai">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-plug"></i>
                </div>

                <span class="branch-badge">
                    Electrical
                </span>

            </div>

            <h3>Schneider Electric</h3>

            <div class="company-role">
                Electrical Design Engineer
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 7.0+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Mumbai</div>
                <div><i class="fa-solid fa-briefcase"></i> Full-time</div>
                <div><i class="fa-solid fa-money-bill"></i> ₹5–8 LPA</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'Schneider Electric',
                    'Electrical Design Engineer',
                    'Electrical',
                    'Mumbai',
                    'Full-time',
                    '7.0+',
                    '₹5–8 LPA',
                    'Energy management and industrial automation engineering opportunity.',
                    'The role may include electrical design, automation systems, energy management and technical documentation.',
                    'Electrical design, power systems, automation, CAD and analytical skills.',
                    'Technical assessment → Technical interview → HR → Selection.'
                    )">

                View Details

            </button>

        </div>


        <!-- 13 L&T CIVIL -->

        <div class="company-card"
             data-branch="Civil"
             data-cgpa="6.5"
             data-job="Full-time"
             data-location="Ahmedabad">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-road"></i>
                </div>

                <span class="branch-badge">
                    Civil
                </span>

            </div>

            <h3>L&T Construction</h3>

            <div class="company-role">
                Civil Site Engineer
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 6.5+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Ahmedabad</div>
                <div><i class="fa-solid fa-briefcase"></i> Full-time</div>
                <div><i class="fa-solid fa-money-bill"></i> ₹4–6.5 LPA</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'L&T Construction',
                    'Civil Site Engineer',
                    'Civil',
                    'Ahmedabad',
                    'Full-time',
                    '6.5+',
                    '₹4–6.5 LPA',
                    'Engineering and construction opportunity across infrastructure projects.',
                    'Civil engineers may work on site supervision, estimation, quality control and project coordination.',
                    'AutoCAD, surveying, estimation, construction materials and project management basics.',
                    'Technical assessment → Site discussion → HR interview → Selection.'
                    )">

                View Details

            </button>

        </div>


        <!-- 14 SHAPOORJI -->

        <div class="company-card"
             data-branch="Civil"
             data-cgpa="6"
             data-job="Full-time"
             data-location="Mumbai">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-building"></i>
                </div>

                <span class="branch-badge">
                    Civil
                </span>

            </div>

            <h3>Shapoorji Pallonji</h3>

            <div class="company-role">
                Junior Civil Engineer
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 6.0+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Mumbai</div>
                <div><i class="fa-solid fa-briefcase"></i> Full-time</div>
                <div><i class="fa-solid fa-money-bill"></i> ₹3.5–6 LPA</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'Shapoorji Pallonji',
                    'Junior Civil Engineer',
                    'Civil',
                    'Mumbai',
                    'Full-time',
                    '6.0+',
                    '₹3.5–6 LPA',
                    'Construction and infrastructure engineering opportunity.',
                    'The position includes site activities, quantity estimation, quality inspection and coordination.',
                    'Civil engineering fundamentals, AutoCAD, estimation, surveying and communication.',
                    'Technical interview → Project discussion → HR → Selection.'
                    )">

                View Details

            </button>

        </div>


        <!-- 15 TATA PROJECTS -->

        <div class="company-card"
             data-branch="Civil"
             data-cgpa="6.5"
             data-job="Full-time"
             data-location="Surat">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-city"></i>
                </div>

                <span class="branch-badge">
                    Civil
                </span>

            </div>

            <h3>Tata Projects</h3>

            <div class="company-role">
                Graduate Engineer Trainee
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 6.5+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Surat</div>
                <div><i class="fa-solid fa-briefcase"></i> Full-time</div>
                <div><i class="fa-solid fa-money-bill"></i> ₹4–6 LPA</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'Tata Projects',
                    'Graduate Engineer Trainee',
                    'Civil',
                    'Surat',
                    'Full-time',
                    '6.5+',
                    '₹4–6 LPA',
                    'Infrastructure and engineering projects across multiple sectors.',
                    'Candidates may assist project engineers with planning, quality, site work and documentation.',
                    'Civil engineering, AutoCAD, project planning, estimation and site safety.',
                    'Aptitude → Technical discussion → HR → Selection.'
                    )">

                View Details

            </button>

        </div>


        <!-- 16 BOSCH -->

        <div class="company-card"
             data-branch="Electronics"
             data-cgpa="7"
             data-job="Full-time"
             data-location="Bengaluru">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-microchip"></i>
                </div>

                <span class="branch-badge">
                    Electronics
                </span>

            </div>

            <h3>Bosch</h3>

            <div class="company-role">
                Electronics Engineer
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 7.0+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Bengaluru</div>
                <div><i class="fa-solid fa-briefcase"></i> Full-time</div>
                <div><i class="fa-solid fa-money-bill"></i> ₹5–8 LPA</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'Bosch',
                    'Electronics Engineer',
                    'Electronics',
                    'Bengaluru',
                    'Full-time',
                    '7.0+',
                    '₹5–8 LPA',
                    'Technology and engineering opportunities in automotive and industrial systems.',
                    'The role can include embedded systems, electronics development, testing and automotive technologies.',
                    'Embedded C, electronics, microcontrollers, communication protocols and debugging.',
                    'Technical assessment → Technical interview → HR → Selection.'
                    )">

                View Details

            </button>

        </div>


        <!-- 17 HAVELLS -->

        <div class="company-card"
             data-branch="Electrical"
             data-cgpa="6.5"
             data-job="Full-time"
             data-location="Noida">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>

                <span class="branch-badge">
                    Electrical
                </span>

            </div>

            <h3>Havells</h3>

            <div class="company-role">
                Electrical Graduate Trainee
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 6.5+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Noida</div>
                <div><i class="fa-solid fa-briefcase"></i> Full-time</div>
                <div><i class="fa-solid fa-money-bill"></i> ₹3.5–6 LPA</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'Havells',
                    'Electrical Graduate Trainee',
                    'Electrical',
                    'Noida',
                    'Full-time',
                    '6.5+',
                    '₹3.5–6 LPA',
                    'Electrical products and engineering opportunity.',
                    'The role can include production, quality, electrical testing and engineering operations.',
                    'Electrical machines, circuits, testing, quality and troubleshooting.',
                    'Aptitude → Technical interview → HR → Selection.'
                    )">

                View Details

            </button>

        </div>


        <!-- 18 AMNS -->

        <div class="company-card"
             data-branch="Mechanical"
             data-cgpa="6.5"
             data-job="Full-time"
             data-location="Surat">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-industry"></i>
                </div>

                <span class="branch-badge">
                    Mechanical
                </span>

            </div>

            <h3>AM/NS India</h3>

            <div class="company-role">
                Mechanical Graduate Trainee
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 6.5+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Surat</div>
                <div><i class="fa-solid fa-briefcase"></i> Full-time</div>
                <div><i class="fa-solid fa-money-bill"></i> ₹4–6 LPA</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'AM/NS India',
                    'Mechanical Graduate Trainee',
                    'Mechanical',
                    'Surat',
                    'Full-time',
                    '6.5+',
                    '₹4–6 LPA',
                    'Steel manufacturing and industrial engineering opportunity.',
                    'Mechanical engineers can work with production, maintenance, equipment and manufacturing systems.',
                    'Mechanical engineering, manufacturing, maintenance, CAD and safety.',
                    'Technical assessment → Technical interview → HR → Selection.'
                    )">

                View Details

            </button>

        </div>


        <!-- 19 VOLTAS -->

        <div class="company-card"
             data-branch="Mechanical"
             data-cgpa="6"
             data-job="Apprenticeship"
             data-location="Ahmedabad">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-snowflake"></i>
                </div>

                <span class="branch-badge">
                    Mechanical
                </span>

            </div>

            <h3>Voltas</h3>

            <div class="company-role">
                Service Engineer Trainee
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 6.0+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Ahmedabad</div>
                <div><i class="fa-solid fa-briefcase"></i> Apprenticeship</div>
                <div><i class="fa-solid fa-money-bill"></i> ₹2.5–4 LPA</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'Voltas',
                    'Service Engineer Trainee',
                    'Mechanical',
                    'Ahmedabad',
                    'Apprenticeship',
                    '6.0+',
                    '₹2.5–4 LPA',
                    'Engineering opportunity related to HVAC and cooling systems.',
                    'Candidates can gain practical experience in installation, maintenance and service engineering.',
                    'Thermodynamics, refrigeration, HVAC, mechanical systems and troubleshooting.',
                    'Technical discussion → Practical evaluation → HR → Selection.'
                    )">

                View Details

            </button>

        </div>


        <!-- 20 RELIANCE -->

        <div class="company-card"
             data-branch="Electronics"
             data-cgpa="6.5"
             data-job="Full-time"
             data-location="Gandhinagar">

            <div class="company-top">

                <div class="company-icon">
                    <i class="fa-solid fa-tower-cell"></i>
                </div>

                <span class="branch-badge">
                    Electronics
                </span>

            </div>

            <h3>Reliance Industries</h3>

            <div class="company-role">
                Electronics / Network Engineer
            </div>

            <div class="company-details">
                <div><i class="fa-solid fa-graduation-cap"></i> 6.5+ CGPA</div>
                <div><i class="fa-solid fa-location-dot"></i> Gandhinagar</div>
                <div><i class="fa-solid fa-briefcase"></i> Full-time</div>
                <div><i class="fa-solid fa-money-bill"></i> ₹4–7 LPA</div>
            </div>

            <button class="view-details"
                    onclick="showCompanyDetails(
                    'Reliance Industries',
                    'Electronics / Network Engineer',
                    'Electronics',
                    'Gandhinagar',
                    'Full-time',
                    '6.5+',
                    '₹4–7 LPA',
                    'Technology, telecommunications and industrial engineering opportunities.',
                    'The selected candidate may work with networking, electronics systems, communication infrastructure and technology operations.',
                    'Networking, electronics, communication systems, troubleshooting and basic programming.',
                    'Technical assessment → Technical interview → HR → Final selection.'
                    )">

                View Details

            </button>

        </div>


        <div class="no-results" id="noResults">

            <i class="fa-solid fa-magnifying-glass"
               style="font-size:35px;margin-bottom:15px;"></i>

            <h3>
                No companies found
            </h3>

            <p>
                Try changing one or more filters.
            </p>

        </div>

    </div>


    <button class="back-home"
            onclick="showHome()">

        <i class="fa-solid fa-arrow-left"></i>
        Back to Home

    </button>

</div>


<!-- =========================================================
     DETAILS MODAL
========================================================= -->

<div class="modal-overlay"
     id="detailsModal"
     onclick="closeModalOutside(event)">

    <div class="details-modal">

        <button class="modal-close"
                onclick="closeDetails()">

            &times;

        </button>


        <h2 class="modal-title"
            id="modalTitle">
        </h2>

        <div class="modal-role"
             id="modalRole">
        </div>


        <div class="modal-info-grid">

            <div class="modal-info">

                <strong>Branch</strong>

                <span id="modalBranch"></span>

            </div>


            <div class="modal-info">

                <strong>Location</strong>

                <span id="modalLocation"></span>

            </div>


            <div class="modal-info">

                <strong>Job Type</strong>

                <span id="modalJob"></span>

            </div>


            <div class="modal-info">

                <strong>Minimum CGPA</strong>

                <span id="modalCgpa"></span>

            </div>


            <div class="modal-info">

                <strong>Salary / Stipend</strong>

                <span id="modalSalary"></span>

            </div>

        </div>


        <div class="modal-section">

            <h4>
                About the Company
            </h4>

            <p id="modalAbout"></p>

        </div>


        <div class="modal-section">

            <h4>
                Job Role & Responsibilities
            </h4>

            <p id="modalResponsibilities"></p>

        </div>


        <div class="modal-section">

            <h4>
                Required Skills
            </h4>

            <p id="modalSkills"></p>

        </div>


        <div class="modal-section">

            <h4>
                Recruitment Process
            </h4>

            <p id="modalProcess"></p>

        </div>


        <div class="modal-section">

            <h4>
                Important Information
            </h4>

            <ul>

                <li>
                    Candidates should carefully check their eligibility
                    before applying.
                </li>

                <li>
                    Students should keep their resume and academic documents
                    updated.
                </li>

                <li>
                    Recruitment stages may vary according to the company.
                </li>

                <li>
                    Final selection is subject to company recruitment policy.
                </li>

            </ul>

        </div>

    </div>

</div>


<!-- =========================================================
     DRIVE DETAILS MODAL
========================================================= -->

<div class="modal-overlay"
     id="driveModal"
     onclick="closeDriveOutside(event)">

    <div class="details-modal">

        <button class="modal-close"
                onclick="closeDriveDetails()">

            &times;

        </button>

        <h2 class="modal-title"
            id="driveTitle">
        </h2>

        <div class="modal-role"
             id="driveRole">
        </div>


        <div class="modal-section">

            <h4>
                Eligibility
            </h4>

            <p id="driveEligibility"></p>

        </div>


        <div class="modal-section">

            <h4>
                Academic Requirement
            </h4>

            <p id="driveCgpa"></p>

        </div>


        <div class="modal-section">

            <h4>
                Last Date
            </h4>

            <p id="driveDate"></p>

        </div>


        <div class="modal-section">

            <h4>
                Location
            </h4>

            <p id="driveLocation"></p>

        </div>


        <div class="modal-section">

            <h4>
                Opportunity Type
            </h4>

            <p id="driveType"></p>

        </div>


        <div class="modal-section">

            <h4>
                Recruitment Details
            </h4>

            <p id="driveDescription"></p>

        </div>

    </div>

</div>





<!-- =========================================================
     JAVASCRIPT
========================================================= -->

<script>

    /* =========================================================
       NAVIGATION
    ========================================================= */

    function showHome() {

        document.getElementById('homePage').style.display = 'block';

        document.getElementById('opportunitiesPage').style.display = 'none';

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

    }


    function showOpportunities() {

        document.getElementById('homePage').style.display = 'none';

        document.getElementById('opportunitiesPage').style.display = 'block';

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

    }


    function scrollToSection(id) {

        document.getElementById('homePage').style.display = 'block';

        document.getElementById('opportunitiesPage').style.display = 'none';

        setTimeout(function() {

            const element = document.getElementById(id);

            if (element) {

                element.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

            }

        }, 100);

    }


    /* =========================================================
       DROPDOWNS
    ========================================================= */

    function toggleDropdown(id) {

        const menu = document.getElementById(id);

        document.querySelectorAll('.dropdown-menu').forEach(function(item) {

            if (item.id !== id) {
                item.classList.remove('show');
            }

        });

        menu.classList.toggle('show');

    }


    document.addEventListener('click', function(event) {

        if (!event.target.closest('.dropdown')) {

            document.querySelectorAll('.dropdown-menu')
                .forEach(function(menu) {

                    menu.classList.remove('show');

                });

        }

    });


    function goToPage(url) {

        window.location.href = url;

    }


    /* =========================================================
       COMPANY FILTER
    ========================================================= */

    function filterCompanies() {

        const branch =
            document.getElementById('branchFilter').value;

        const cgpa =
            document.getElementById('cgpaFilter').value;

        const job =
            document.getElementById('jobFilter').value;

        const location =
            document.getElementById('locationFilter').value;


        const cards =
            document.querySelectorAll('.company-card');

        let visibleCount = 0;


        cards.forEach(function(card) {

            const cardBranch =
                card.dataset.branch;

            const cardCgpa =
                parseFloat(card.dataset.cgpa);

            const cardJob =
                card.dataset.job;

            const cardLocation =
                card.dataset.location;


            let branchMatch =
                branch === 'all' ||
                cardBranch === branch;


            let cgpaMatch =
                cgpa === 'all' ||
                cardCgpa >= parseFloat(cgpa);


            let jobMatch =
                job === 'all' ||
                cardJob === job;


            let locationMatch =
                location === 'all' ||
                cardLocation === location;


            if (
                branchMatch &&
                cgpaMatch &&
                jobMatch &&
                locationMatch
            ) {

                card.style.display = 'block';

                visibleCount++;

            } else {

                card.style.display = 'none';

            }

        });


        const noResults =
            document.getElementById('noResults');


        if (visibleCount === 0) {

            noResults.style.display = 'block';

        } else {

            noResults.style.display = 'none';

        }

    }


    function resetFilters() {

        document.getElementById('branchFilter').value = 'all';

        document.getElementById('cgpaFilter').value = 'all';

        document.getElementById('jobFilter').value = 'all';

        document.getElementById('locationFilter').value = 'all';

        filterCompanies();

    }


    /* =========================================================
       COMPANY DETAILS MODAL
    ========================================================= */

    function showCompanyDetails(
        company,
        role,
        branch,
        location,
        job,
        cgpa,
        salary,
        about,
        responsibilities,
        skills,
        process
    ) {

        document.getElementById('modalTitle').textContent =
            company;

        document.getElementById('modalRole').textContent =
            role;

        document.getElementById('modalBranch').textContent =
            branch;

        document.getElementById('modalLocation').textContent =
            location;

        document.getElementById('modalJob').textContent =
            job;

        document.getElementById('modalCgpa').textContent =
            cgpa;

        document.getElementById('modalSalary').textContent =
            salary;

        document.getElementById('modalAbout').textContent =
            about;

        document.getElementById('modalResponsibilities').textContent =
            responsibilities;

        document.getElementById('modalSkills').textContent =
            skills;

        document.getElementById('modalProcess').textContent =
            process;


        document.getElementById('detailsModal')
            .classList.add('show');

        document.body.style.overflow = 'hidden';

    }


    function closeDetails() {

        document.getElementById('detailsModal')
            .classList.remove('show');

        document.body.style.overflow = '';

    }


    function closeModalOutside(event) {

        if (event.target.id === 'detailsModal') {

            closeDetails();

        }

    }


    /* =========================================================
       DRIVE DETAILS
    ========================================================= */

    function showDriveDetails(
        company,
        role,
        eligibility,
        cgpa,
        date,
        location,
        type,
        description
    ) {

        document.getElementById('driveTitle').textContent =
            company;

        document.getElementById('driveRole').textContent =
            role;

        document.getElementById('driveEligibility').textContent =
            eligibility;

        document.getElementById('driveCgpa').textContent =
            cgpa;

        document.getElementById('driveDate').textContent =
            date;

        document.getElementById('driveLocation').textContent =
            location;

        document.getElementById('driveType').textContent =
            type;

        document.getElementById('driveDescription').textContent =
            description;


        document.getElementById('driveModal')
            .classList.add('show');

        document.body.style.overflow = 'hidden';

    }


    function closeDriveDetails() {

        document.getElementById('driveModal')
            .classList.remove('show');

        document.body.style.overflow = '';

    }


    function closeDriveOutside(event) {

        if (event.target.id === 'driveModal') {

            closeDriveDetails();

        }

    }


    /* =========================================================
       ESC KEY FOR MODALS
    ========================================================= */

    document.addEventListener('keydown', function(event) {

        if (event.key === 'Escape') {

            closeDetails();

            closeDriveDetails();

        }

    });


    /* =========================================================
       FAQ
    ========================================================= */

    document.querySelectorAll('.faq').forEach(function(faq) {

        faq.addEventListener('click', function() {

            this.classList.toggle('open');

        });

    });

</script>
<footer class="site-footer">
    <div class="footer-content">

        <!-- K D Polytechnic Logo -->
        <img src="{{ asset('images/kd-polytechnic-logo.png') }}"
             alt="K D Polytechnic Logo"
             class="footer-logo">

        <h3>Kilachand Devchand Polytechnic, Patan</h3>

        <p>Government of Gujarat Institution</p>

    


    </div>
</footer>

</body>
</html>