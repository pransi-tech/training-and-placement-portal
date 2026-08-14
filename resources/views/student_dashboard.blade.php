<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Dashboard</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f6f3ff;
            color: #1e124b;
            min-height: 100vh;
        }

        /* =====================================================
           SIDEBAR
        ===================================================== */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            height: 100vh;

            background: linear-gradient(
                180deg,
                #291064,
                #4d20a5
            );

            color: white;
            padding: 25px 18px;

            box-shadow:
                5px 0 25px rgba(57, 25, 120, 0.15);

            z-index: 1000;
        }

        .logo {
            text-align: center;
            margin-bottom: 35px;
        }

        .logo h2 {
            font-size: 23px;
        }

        .logo p {
            margin-top: 5px;
            font-size: 12px;
            color: #d9cbff;
        }

        .menu-title {
            color: #baa9e7;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 0 13px 12px;
        }

        .nav {
            list-style: none;
        }

        .nav li {
            margin-bottom: 6px;
        }

        .nav-link {
            width: 100%;
            display: flex;
            align-items: center;
            gap: 13px;

            padding: 13px 14px;

            border: none;
            border-radius: 10px;

            background: transparent;

            color: #e0d7f6;

            text-decoration: none;

            font-size: 14px;

            cursor: pointer;

            transition: 0.2s;
        }

        .nav-link:hover {
            background: rgba(255,255,255,0.10);
            color: white;
        }

        .nav-link.active {
            background: rgba(255,255,255,0.18);
            color: white;

            box-shadow:
                0 6px 18px rgba(0,0,0,0.12);
        }

        .nav-icon {
            width: 27px;
            text-align: center;
            font-size: 18px;
        }

        .logout {
            position: absolute;
            left: 18px;
            right: 18px;
            bottom: 20px;

            border-top:
                1px solid rgba(255,255,255,0.12);

            padding-top: 15px;
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .main {
            margin-left: 250px;
            padding: 30px 38px;
            min-height: 100vh;
        }


        /* =====================================================
           TOPBAR
        ===================================================== */

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;

            margin-bottom: 25px;
        }

        .topbar h1 {
            font-size: 30px;
            color: #351275;
        }

        .topbar p {
            color: #7b748d;
            font-size: 13px;
            margin-top: 5px;
        }

        .student-badge {
            display: flex;
            align-items: center;
            gap: 9px;

            background: white;

            padding: 9px 15px;

            border-radius: 13px;

            box-shadow:
                0 5px 20px rgba(70,40,130,0.08);
        }

        .student-icon {
            width: 36px;
            height: 36px;

            background: #eee4ff;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 18px;
        }

        .student-name {
            font-weight: bold;
            font-size: 12px;
            color: #351275;
        }


        /* =====================================================
           SECTIONS
        ===================================================== */

        .page-section {
            display: none;
        }

        .page-section.active {
            display: block;
        }


        /* =====================================================
           WELCOME
        ===================================================== */

        .welcome {
            background:
                linear-gradient(
                    135deg,
                    #5d2bc8,
                    #7d4de0
                );

            color: white;

            padding: 30px;

            border-radius: 20px;

            margin-bottom: 25px;

            box-shadow:
                0 15px 35px rgba(89,45,190,0.20);

            position: relative;
            overflow: hidden;
        }

        .welcome::after {
            content: "";

            position: absolute;

            width: 180px;
            height: 180px;

            right: -50px;
            top: -70px;

            border-radius: 50%;

            background: rgba(255,255,255,0.08);
        }

        .welcome h2 {
            font-size: 26px;
            margin-bottom: 8px;
            position: relative;
            z-index: 1;
        }

        .welcome p {
            color: #eee8ff;
            font-size: 13px;
            position: relative;
            z-index: 1;
        }


        /* =====================================================
           STATISTICS
        ===================================================== */

        .section-title {
            font-size: 19px;
            color: #351275;
            margin-bottom: 16px;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);

            gap: 16px;

            margin-bottom: 28px;
        }

        .stat-card {
            background: white;

            padding: 20px;

            border-radius: 16px;

            border: 1px solid #eee9f8;

            box-shadow:
                0 7px 25px rgba(60,40,120,0.07);
        }

        .stat-icon {
            width: 42px;
            height: 42px;

            border-radius: 11px;

            background: #eee5ff;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 20px;

            margin-bottom: 12px;
        }

        .stat-number {
            font-size: 25px;
            font-weight: bold;
            color: #5421b6;
        }

        .stat-label {
            color: #777;
            font-size: 11px;
            margin-top: 4px;
        }


        /* =====================================================
           SERVICE CARDS
        ===================================================== */

        .services {
            display: grid;
            grid-template-columns: repeat(3, 1fr);

            gap: 18px;

            margin-bottom: 30px;
        }

        .service-card {
            background: white;

            padding: 23px;

            border-radius: 17px;

            border: 1px solid #eee9f8;

            box-shadow:
                0 7px 25px rgba(60,40,120,0.07);

            transition: 0.2s;
        }

        .service-card:hover {
            transform: translateY(-3px);

            box-shadow:
                0 12px 28px rgba(70,40,140,0.11);
        }

        .service-icon {
            width: 45px;
            height: 45px;

            border-radius: 11px;

            background: #eee5ff;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 21px;

            margin-bottom: 14px;
        }

        .service-card h3 {
            color: #351275;
            font-size: 16px;
            margin-bottom: 8px;
        }

        .service-card p {
            color: #777;
            font-size: 12px;
            line-height: 1.5;
        }

        .service-card button {
            margin-top: 13px;

            border: none;
            background: transparent;

            color: #6532cf;

            font-size: 12px;

            font-weight: bold;

            cursor: pointer;
        }


        /* =====================================================
           LOWER DASHBOARD
        ===================================================== */

        .lower {
            display: grid;

            grid-template-columns:
                1.5fr 1fr;

            gap: 18px;
        }

        .panel {
            background: white;

            border-radius: 17px;

            padding: 22px;

            border: 1px solid #eee9f8;

            box-shadow:
                0 7px 25px rgba(60,40,120,0.07);
        }

        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;

            margin-bottom: 17px;
        }

        .panel-header h3 {
            color: #351275;
            font-size: 16px;
        }

        .view-btn {
            border: none;
            background: transparent;

            color: #6632d1;

            font-size: 11px;
            font-weight: bold;

            cursor: pointer;
        }


        /* =====================================================
           OPPORTUNITIES
        ===================================================== */

        .opportunity {
            display: flex;

            justify-content: space-between;
            align-items: center;

            padding: 14px;

            background: #faf8ff;

            border: 1px solid #eee8fa;

            border-radius: 11px;

            margin-bottom: 10px;
        }

        .opportunity:last-child {
            margin-bottom: 0;
        }

        .company {
            color: #351275;
            font-size: 12px;
            font-weight: bold;
        }

        .role {
            color: #777;
            font-size: 11px;
            margin-top: 5px;
        }

        .apply-btn {
            border: none;

            background: #6331d1;

            color: white;

            padding: 7px 12px;

            border-radius: 7px;

            font-size: 10px;

            cursor: pointer;
        }

        .apply-btn:hover {
            background: #7847e0;
        }


        /* =====================================================
           PROFILE
        ===================================================== */

        .back-btn {
            border: none;
            background: transparent;

            color: #6331d1;

            font-size: 13px;

            font-weight: bold;

            cursor: pointer;

            margin-bottom: 20px;
        }

        .profile-card {
            background: white;

            border-radius: 22px;

            padding: 35px;

            box-shadow:
                0 10px 30px rgba(60,40,120,0.08);

            border: 1px solid #eee9f8;
        }

        .profile-header {
            display: flex;
            align-items: center;

            gap: 20px;

            padding-bottom: 25px;

            border-bottom:
                1px solid #eeeaf5;

            margin-bottom: 28px;
        }

        .profile-avatar {
            width: 85px;
            height: 85px;

            border-radius: 50%;

            background: #eee4ff;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 38px;
        }

        .profile-header h2 {
            color: #4b1da8;
            font-size: 32px;
            margin-bottom: 5px;
        }

        .profile-header p {
            color: #777;
            font-size: 17px;
        }

        .profile-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .profile-item {
            background: #f8f5ff;

            padding: 20px;

            border-radius: 13px;
        }

        .profile-label {
            color: #777;

            font-size: 13px;

            margin-bottom: 7px;
        }

        .profile-value {
            color: #180a59;

            font-weight: bold;

            font-size: 17px;
        }


        /* =====================================================
           APPLICATIONS
        ===================================================== */

        .application {
            background: white;

            padding: 20px;

            border-radius: 14px;

            border: 1px solid #eee9f8;

            margin-bottom: 12px;

            display: flex;

            justify-content: space-between;

            align-items: center;
        }

        .application h3 {
            color: #351275;

            font-size: 15px;

            margin-bottom: 5px;
        }

        .application p {
            color: #777;

            font-size: 12px;
        }

        .status {
            background: #e6f8ed;

            color: #21834d;

            padding: 7px 13px;

            border-radius: 20px;

            font-size: 11px;

            font-weight: bold;
        }


        /* =====================================================
           COURSES
        ===================================================== */

        .course-grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 18px;
        }

        .course {
            background: white;

            border: 1px solid #eee9f8;

            border-radius: 17px;

            padding: 24px;

            box-shadow:
                0 7px 25px rgba(60,40,120,0.07);
        }

        .course-icon {
            width: 45px;
            height: 45px;

            border-radius: 11px;

            background: #eee5ff;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 21px;

            margin-bottom: 15px;
        }

        .course h3 {
            color: #351275;

            font-size: 16px;

            margin-bottom: 8px;
        }

        .course p {
            color: #777;

            font-size: 12px;

            line-height: 1.6;
        }

        .course button {
            margin-top: 15px;

            border: none;

            background: #6331d1;

            color: white;

            padding: 8px 14px;

            border-radius: 7px;

            cursor: pointer;
        }


        /* =====================================================
           RESUME
        ===================================================== */

        .resume-box {
            background: white;

            border-radius: 20px;

            padding: 35px;

            box-shadow:
                0 8px 25px rgba(60,40,120,0.07);

            border: 1px solid #eee9f8;
        }

        .resume-box h2 {
            color: #351275;

            margin-bottom: 10px;
        }

        .resume-box p {
            color: #777;

            margin-bottom: 20px;
        }

        .resume-btn {
            border: none;

            background: #6331d1;

            color: white;

            padding: 10px 17px;

            border-radius: 8px;

            cursor: pointer;
        }


        /* =====================================================
           NOTIFICATIONS
        ===================================================== */

        .notification {
            background: white;

            border: 1px solid #eee9f8;

            border-left:
                4px solid #6a37d7;

            border-radius: 12px;

            padding: 18px;

            margin-bottom: 12px;
        }

        .notification h3 {
            color: #351275;

            font-size: 15px;

            margin-bottom: 6px;
        }

        .notification p {
            color: #777;

            font-size: 12px;

            line-height: 1.5;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1050px) {

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .services {
                grid-template-columns: repeat(2, 1fr);
            }

            .lower {
                grid-template-columns: 1fr;
            }

            .course-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 700px) {

            .sidebar {
                width: 210px;
            }

            .main {
                margin-left: 210px;

                padding: 22px 18px;
            }

            .services {
                grid-template-columns: 1fr;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .course-grid {
                grid-template-columns: 1fr;
            }

            .profile-details {
                grid-template-columns: 1fr;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
        }

    </style>

</head>


<body>


<!-- =====================================================
     SIDEBAR
===================================================== -->

<aside class="sidebar">

    <div class="logo">

        <h2>🎓 Student Portal</h2>

        <p>Training & Placement</p>

    </div>


    <div class="menu-title">
        Main Menu
    </div>


    <ul class="nav">

        <li>
            <button
                class="nav-link active"
                onclick="showSection('dashboard', this)"
            >
                <div class="nav-icon">🏠</div>
                <span>Dashboard</span>
            </button>
        </li>


        <li>
            <button
                class="nav-link"
                onclick="showSection('profile', this)"
            >
                <div class="nav-icon">👤</div>
                <span>My Profile</span>
            </button>
        </li>


        <li>
            <button
                class="nav-link"
                onclick="showSection('opportunities', this)"
            >
                <div class="nav-icon">💼</div>
                <span>Opportunities</span>
            </button>
        </li>


        <li>
            <button
                class="nav-link"
                onclick="showSection('applications', this)"
            >
                <div class="nav-icon">📄</div>
                <span>My Applications</span>
            </button>
        </li>


        <li>
            <button
                class="nav-link"
                onclick="showSection('courses', this)"
            >
                <div class="nav-icon">🎓</div>
                <span>Training & Courses</span>
            </button>
        </li>


        <li>
            <button
                class="nav-link"
                onclick="showSection('resume', this)"
            >
                <div class="nav-icon">📋</div>
                <span>Resume</span>
            </button>
        </li>


        <li>
            <button
                class="nav-link"
                onclick="showSection('notifications', this)"
            >
                <div class="nav-icon">🔔</div>
                <span>Notifications</span>
            </button>
        </li>

    </ul>


    <div class="logout">

        <a
            href="/student/logout"
            class="nav-link"
        >
            <div class="nav-icon">↪</div>
            <span>Logout</span>
        </a>

    </div>

</aside>



<!-- =====================================================
     MAIN
===================================================== -->

<main class="main">


    <!-- =================================================
         DASHBOARD
    ================================================== -->

    <section
        id="dashboard"
        class="page-section active"
    >


        <div class="topbar">

            <div>

                <h1>
                    Student Dashboard
                </h1>

                <p>
                    Welcome to your Training & Placement Portal.
                </p>

            </div>


            <div class="student-badge">

                <div class="student-icon">
                    👤
                </div>

                <div class="student-name">
                    Student
                </div>

            </div>

        </div>


        <div class="welcome">

            <h2>
                Welcome, Student! 👋
            </h2>

            <p>
                Explore opportunities, manage applications,
                improve your skills and prepare for your career.
            </p>

        </div>


        <h2 class="section-title">
            Overview
        </h2>


        <div class="stats">


            <div class="stat-card">

                <div class="stat-icon">
                    💼
                </div>

                <div class="stat-number">
                    12
                </div>

                <div class="stat-label">
                    Available Opportunities
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon">
                    📄
                </div>

                <div class="stat-number">
                    0
                </div>

                <div class="stat-label">
                    My Applications
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon">
                    🎓
                </div>

                <div class="stat-number">
                    4
                </div>

                <div class="stat-label">
                    Training Courses
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon">
                    🔔
                </div>

                <div class="stat-number">
                    3
                </div>

                <div class="stat-label">
                    Notifications
                </div>

            </div>

        </div>

        <div class="lower">


            <div class="panel">

                <div class="panel-header">

                    <h3>
                        Latest Opportunities
                    </h3>

                    <button
                        class="view-btn"
                        onclick="showSection('opportunities')"
                    >
                        View All →
                    </button>

                </div>


                <div class="opportunity">

                    <div>

                        <div class="company">
                            TCS
                        </div>

                        <div class="role">
                            Software Developer
                        </div>

                    </div>

                    <button
                        class="apply-btn"
                        onclick="applyJob('TCS - Software Developer')"
                    >
                        Apply
                    </button>

                </div>


                <div class="opportunity">

                    <div>

                        <div class="company">
                            Infosys
                        </div>

                        <div class="role">
                            System Engineer
                        </div>

                    </div>

                    <button
                        class="apply-btn"
                        onclick="applyJob('Infosys - System Engineer')"
                    >
                        Apply
                    </button>

                </div>


                <div class="opportunity">

                    <div>

                        <div class="company">
                            Wipro
                        </div>

                        <div class="role">
                            Web Developer
                        </div>

                    </div>

                    <button
                        class="apply-btn"
                        onclick="applyJob('Wipro - Web Developer')"
                    >
                        Apply
                    </button>

                </div>

            </div>


            <div class="panel">

                <div class="panel-header">

                    <h3>
                        My Progress
                    </h3>

                </div>


                <div class="progress-item">

                    <div class="progress-label">

                        <span>Resume</span>

                        <span>80%</span>

                    </div>

                    <div class="progress-bar">

                        <div
                            class="progress-fill"
                            style="width:80%"
                        ></div>

                    </div>

                </div>


                <div class="progress-item">

                    <div class="progress-label">

                        <span>Skills</span>

                        <span>70%</span>

                    </div>

                    <div class="progress-bar">

                        <div
                            class="progress-fill"
                            style="width:70%"
                        ></div>

                    </div>

                </div>


                <div class="progress-item">

                    <div class="progress-label">

                        <span>Training</span>

                        <span>60%</span>

                    </div>

                    <div class="progress-bar">

                        <div
                            class="progress-fill"
                            style="width:60%"
                        ></div>

                    </div>

                </div>


                <div class="progress-item">

                    <div class="progress-label">

                        <span>Placement Preparation</span>

                        <span>50%</span>

                    </div>

                    <div class="progress-bar">

                        <div
                            class="progress-fill"
                            style="width:50%"
                        ></div>

                    </div>

                </div>

            </div>


        </div>

    </section>



    <!-- =================================================
         PROFILE
    ================================================== -->

    <section
        id="profile"
        class="page-section"
    >

        <button
            class="back-btn"
            onclick="showSection('dashboard')"
        >
            ← Back to Dashboard
        </button>


        <div class="profile-card">


            <div class="profile-header">

                <div class="profile-avatar">
                    👤
                </div>

                <div>

                    <h2>
                        Student
                    </h2>

                    <p>
                        Student Profile
                    </p>

                </div>

            </div>


            <div class="profile-details">


                <div class="profile-item">

                    <div class="profile-label">
                        Full Name
                    </div>

                    <div class="profile-value">
                        Student
                    </div>

                </div>


                <div class="profile-item">

                    <div class="profile-label">
                        Enrollment Number
                    </div>

                    <div class="profile-value">
                        Not Available
                    </div>

                </div>


                <div class="profile-item">

                    <div class="profile-label">
                        Email
                    </div>

                    <div class="profile-value">
                        Not Available
                    </div>

                </div>


                <div class="profile-item">

                    <div class="profile-label">
                        Mobile Number
                    </div>

                    <div class="profile-value">
                        Not Available
                    </div>

                </div>


                <div class="profile-item">

                    <div class="profile-label">
                        Semester
                    </div>

                    <div class="profile-value">
                        Not Available
                    </div>

                </div>


                <div class="profile-item">

                    <div class="profile-label">
                        Branch
                    </div>

                    <div class="profile-value">
                        Not Available
                    </div>

                </div>


                <div class="profile-item">

                    <div class="profile-label">
                        Area of Expertise
                    </div>

                    <div class="profile-value">
                        Not Available
                    </div>

                </div>


                <div class="profile-item">

                    <div class="profile-label">
                        LinkedIn
                    </div>

                    <div class="profile-value">
                        Not Added
                    </div>

                </div>


            </div>

        </div>

    </section>



    <!-- =================================================
         OPPORTUNITIES
    ================================================== -->

    <section
        id="opportunities"
        class="page-section"
    >

        <button
            class="back-btn"
            onclick="showSection('dashboard')"
        >
            ← Back to Dashboard
        </button>


        <h2 class="section-title">
            💼 Opportunities
        </h2>


        <div class="opportunity">

            <div>

                <div class="company">
                    TCS
                </div>

                <div class="role">
                    Software Developer
                </div>

            </div>

            <button
                class="apply-btn"
                onclick="applyJob('TCS - Software Developer')"
            >
                Apply
            </button>

        </div>


        <div class="opportunity">

            <div>

                <div class="company">
                    Infosys
                </div>

                <div class="role">
                    System Engineer
                </div>

            </div>

            <button
                class="apply-btn"
                onclick="applyJob('Infosys - System Engineer')"
            >
                Apply
            </button>

        </div>


        <div class="opportunity">

            <div>

                <div class="company">
                    Wipro
                </div>

                <div class="role">
                    Web Developer
                </div>

            </div>

            <button
                class="apply-btn"
                onclick="applyJob('Wipro - Web Developer')"
            >
                Apply
            </button>

        </div>


        <div class="opportunity">

            <div>

                <div class="company">
                    Accenture
                </div>

                <div class="role">
                    Associate Software Engineer
                </div>

            </div>

            <button
                class="apply-btn"
                onclick="applyJob('Accenture - Associate Software Engineer')"
            >
                Apply
            </button>

        </div>

    </section>



    <!-- =================================================
         APPLICATIONS
    ================================================== -->

    <section
        id="applications"
        class="page-section"
    >

        <button
            class="back-btn"
            onclick="showSection('dashboard')"
        >
            ← Back to Dashboard
        </button>


        <h2 class="section-title">
            📄 My Applications
        </h2>


        <div id="applicationList">

            <div class="application">

                <div>

                    <h3>
                        No applications yet
                    </h3>

                    <p>
                        Apply for an opportunity and it will appear here.
                    </p>

                </div>

            </div>

        </div>

    </section>



    <!-- =================================================
         COURSES
    ================================================== -->

    <section
        id="courses"
        class="page-section"
    >

        <button
            class="back-btn"
            onclick="showSection('dashboard')"
        >
            ← Back to Dashboard
        </button>


        <h2 class="section-title">
            🎓 Training & Courses
        </h2>


        <div class="course-grid">


            <div class="course">

                <div class="course-icon">
                    💻
                </div>

                <h3>
                    Web Development
                </h3>

                <p>
                    Learn HTML, CSS, JavaScript and modern web development.
                </p>

                <button>
                    Start Course
                </button>

            </div>


            <div class="course">

                <div class="course-icon">
                    🐘
                </div>

                <h3>
                    PHP & Laravel
                </h3>

                <p>
                    Learn backend development using PHP and Laravel.
                </p>

                <button>
                    Start Course
                </button>

            </div>


            <div class="course">

                <div class="course-icon">
                    🗄️
                </div>

                <h3>
                    Database Management
                </h3>

                <p>
                    Learn SQL and database management concepts.
                </p>

                <button>
                    Start Course
                </button>

            </div>


        </div>

    </section>



    <!-- =================================================
         RESUME
    ================================================== -->

    <section
        id="resume"
        class="page-section"
    >

        <button
            class="back-btn"
            onclick="showSection('dashboard')"
        >
            ← Back to Dashboard
        </button>


        <h2 class="section-title">
            📋 Resume
        </h2>


        <div class="resume-box">

            <h2>
                My Resume
            </h2>

            <p>
                Manage your resume for placement opportunities.
            </p>

            <button class="resume-btn">
                Upload Resume
            </button>

        </div>

    </section>



    <!-- =================================================
         NOTIFICATIONS
    ================================================== -->

    <section
        id="notifications"
        class="page-section"
    >

        <button
            class="back-btn"
            onclick="showSection('dashboard')"
        >
            ← Back to Dashboard
        </button>


        <h2 class="section-title">
            🔔 Notifications
        </h2>


        <div class="notification">

            <h3>
                New Placement Opportunity
            </h3>

            <p>
                A new Software Developer opportunity has been added.
            </p>

        </div>


        <div class="notification">

            <h3>
                New Training Available
            </h3>

            <p>
                Web Development training is now available.
            </p>

        </div>


        <div class="notification">

            <h3>
                Welcome to the Portal
            </h3>

            <p>
                Keep checking your portal for placement updates.
            </p>

        </div>

    </section>


</main>



<!-- =====================================================
     JAVASCRIPT
===================================================== -->

<script>

    let applicationCount = 0;


    function showSection(sectionId, clickedButton = null) {

        /* Hide all sections */

        const sections =
            document.querySelectorAll(".page-section");

        sections.forEach(function(section) {

            section.classList.remove("active");

        });


        /* Show selected section */

        const selected =
            document.getElementById(sectionId);

        if (selected) {

            selected.classList.add("active");

        }


        /* Remove active state from sidebar */

        const navLinks =
            document.querySelectorAll(".nav-link");

        navLinks.forEach(function(link) {

            link.classList.remove("active");

        });


        /* Add active state to clicked sidebar item */

        if (clickedButton) {

            clickedButton.classList.add("active");

        }


        /* Scroll to top */

        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });

    }



    function applyJob(jobName) {

        applicationCount++;


        const list =
            document.getElementById("applicationList");


        /* Remove "No applications yet" */

        if (applicationCount === 1) {

            list.innerHTML = "";

        }


        /* Create application */

        const application =
            document.createElement("div");

        application.className =
            "application";


        application.innerHTML = `

            <div>

                <h3>
                    ${jobName}
                </h3>

                <p>
                    Application submitted successfully.
                </p>

            </div>

            <div class="status">
                Applied
            </div>

        `;


        list.appendChild(application);


        /* Open applications */

        showSection("applications");

    }

</script>


</body>

</html>