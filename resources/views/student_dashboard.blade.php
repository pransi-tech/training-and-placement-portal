<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f7f5ff;
            color: #211b3d;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* SIDEBAR */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 230px;
            height: 100vh;
            background: linear-gradient(180deg, #180d4d, #32116f);
            color: white;
            padding: 22px 14px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0 10px 30px;
        }

        .logo-icon {
            width: 38px;
            height: 38px;
            border-radius: 11px;
            background: rgba(255,255,255,0.14);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 19px;
        }

        .logo-text {
            font-size: 12px;
            font-weight: 800;
            line-height: 1.3;
        }

        .logo-text span {
            color: #cfc4ff;
        }

        .nav {
            list-style: none;
        }

        .nav li {
            margin: 5px 0;
        }

        .nav a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            border-radius: 9px;
            color: #d8d0ed;
            font-size: 11px;
            font-weight: 500;
        }

        .nav a:hover {
            background: rgba(255,255,255,0.08);
            color: white;
        }

        .nav a.active {
            background: linear-gradient(90deg, #6334db, #7849ed);
            color: white;
        }

        .nav-icon {
            width: 18px;
            text-align: center;
            font-size: 15px;
        }

        .notification {
            margin-left: auto;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: #ff4d71;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 8px;
            font-weight: 700;
        }

        .logout {
            position: absolute;
            bottom: 20px;
            left: 14px;
            right: 14px;
        }

        /* MAIN */

        .main {
            margin-left: 230px;
            min-height: 100vh;
        }

        /* TOPBAR */

        .topbar {
            height: 65px;
            background: white;
            border-bottom: 1px solid #ebe7f5;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding: 0 28px;
            gap: 18px;
        }

        .notification-btn {
            width: 34px;
            height: 34px;
            border: 1px solid #e7e1f2;
            border-radius: 9px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .notification-dot {
            position: absolute;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #ff4d70;
            top: 5px;
            right: 5px;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: linear-gradient(135deg, #d9ccff, #8b65e9);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
        }

        .profile-name {
            font-size: 10px;
            font-weight: 700;
        }

        .profile-role {
            font-size: 8px;
            color: #8d879d;
            margin-top: 3px;
        }

        /* CONTENT */

        .content {
            padding: 28px;
        }

        .welcome {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 22px;
        }

        .welcome h1 {
            font-size: 27px;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .welcome h1 span {
            color: #6638dc;
        }

        .welcome p {
            color: #817a91;
            font-size: 10px;
            margin-top: 6px;
        }

        .dream {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 17px;
            border-radius: 13px;
            background: linear-gradient(135deg, #eee7ff, #faf8ff);
            border: 1px solid #e2d9fa;
        }

        .rocket {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: #7041e5;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .dream strong {
            display: block;
            font-size: 10px;
        }

        .dream small {
            display: block;
            color: #898299;
            font-size: 8px;
            margin-top: 3px;
        }

        /* STAT CARDS */

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-bottom: 17px;
        }

        .stat {
            padding: 16px;
            border-radius: 14px;
            min-height: 105px;
        }

        .stat:nth-child(1) {
            background: linear-gradient(135deg, #eee7ff, #faf8ff);
        }

        .stat:nth-child(2) {
            background: linear-gradient(135deg, #e4f8f1, #f9fffc);
        }

        .stat:nth-child(3) {
            background: linear-gradient(135deg, #fff0dc, #fffaf3);
        }

        .stat:nth-child(4) {
            background: linear-gradient(135deg, #ffe8ef, #fff8fa);
        }

        .stat-icon {
            width: 30px;
            height: 30px;
            background: rgba(255,255,255,0.8);
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .stat-number {
            font-size: 21px;
            font-weight: 800;
        }

        .stat-label {
            color: #777087;
            font-size: 8px;
            margin-top: 3px;
        }

        /* CARDS */

        .card {
            background: white;
            border: 1px solid #ebe7f5;
            border-radius: 15px;
            box-shadow: 0 4px 18px rgba(50, 35, 100, 0.04);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 17px;
        }

        .card-title {
            display: flex;
            align-items: center;
            gap: 9px;
            font-size: 12px;
            font-weight: 750;
        }

        .title-icon {
            width: 28px;
            height: 28px;
            border-radius: 8px;
            background: #f0eaff;
            color: #693cdd;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .view {
            color: #6739da;
            font-size: 8px;
            font-weight: 700;
        }

        /* MIDDLE */

        .middle {
            display: grid;
            grid-template-columns: 1.6fr 0.8fr;
            gap: 16px;
            margin-bottom: 16px;
        }

        /* TABLE */

        .table-container {
            padding: 0 13px 13px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 550px;
        }

        th {
            padding: 9px 7px;
            text-align: left;
            background: #f8f6fd;
            color: #696279;
            font-size: 8px;
        }

        td {
            padding: 11px 7px;
            border-bottom: 1px solid #f1eef6;
            font-size: 8px;
        }

        .company {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 700;
        }

        .company-icon {
            width: 27px;
            height: 27px;
            border-radius: 7px;
            background: #f0eaff;
            color: #673bda;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
        }

        .apply {
            border: 0;
            border-radius: 6px;
            padding: 6px 11px;
            background: #6939df;
            color: white;
            font-size: 8px;
            font-weight: 700;
            cursor: pointer;
        }

        /* PROGRESS */

        .progress-content {
            padding: 0 17px 17px;
        }

        .progress-item {
            margin-bottom: 15px;
        }

        .progress-label {
            display: flex;
            justify-content: space-between;
            font-size: 8px;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .percentage {
            color: #693dde;
        }

        .bar {
            height: 6px;
            border-radius: 10px;
            background: #eeeaf5;
            overflow: hidden;
        }

        .fill {
            height: 100%;
            background: linear-gradient(90deg, #6738db, #9068f2);
            border-radius: 10px;
        }

        .tip {
            margin-top: 18px;
            padding: 11px;
            background: #e8f8f2;
            border-radius: 10px;
            color: #28745e;
            font-size: 8px;
            line-height: 1.5;
        }

        /* BOTTOM */

        .bottom {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 16px;
        }

        /* DRIVE */

        .drive-content {
            padding: 0 16px 17px;
        }

        .drive {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 11px;
            background: #faf8ff;
            border: 1px solid #eee9f7;
            border-radius: 10px;
        }

        .date {
            width: 40px;
            height: 43px;
            background: #eee7ff;
            color: #693cdd;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .date-month {
            font-size: 7px;
            font-weight: 800;
        }

        .date-day {
            font-size: 15px;
            font-weight: 800;
        }

        .drive-info strong {
            display: block;
            font-size: 9px;
        }

        .drive-info span {
            color: #898298;
            font-size: 7px;
            display: block;
            margin-top: 4px;
        }

        .deadline {
            display: inline-block;
            margin-top: 5px;
            background: #ffe7ed;
            color: #dc4665;
            padding: 3px 5px;
            border-radius: 4px;
            font-size: 6px;
            font-weight: 700;
        }

        /* COURSES */

        .courses {
            padding: 0 16px 15px;
        }

        .course {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 9px 0;
            border-bottom: 1px solid #f0edf5;
        }

        .course:last-child {
            border-bottom: 0;
        }

        .course-left {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .course-icon {
            width: 28px;
            height: 28px;
            border-radius: 7px;
            background: #f0eaff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .course-name {
            font-size: 8px;
            font-weight: 700;
        }

        .course-info {
            color: #898299;
            font-size: 6px;
            margin-top: 3px;
        }

        .start {
            padding: 5px 8px;
            border: 1px solid #ddd3ff;
            border-radius: 5px;
            background: #f7f3ff;
            color: #693cdd;
            font-size: 6px;
            font-weight: 700;
        }

        /* QUICK LINKS */

        .quick {
            padding: 0 16px 15px;
        }

        .quick-link {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 9px 0;
            border-bottom: 1px solid #f0edf5;
            font-size: 8px;
            font-weight: 600;
        }

        .quick-link:last-child {
            border-bottom: 0;
        }

        .quick-left {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .quick-icon {
            width: 28px;
            height: 28px;
            border-radius: 7px;
            background: #f0eaff;
            color: #693cdd;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .arrow {
            color: #91899f;
        }

        .footer {
            text-align: center;
            color: #9a94a9;
            font-size: 7px;
            padding: 20px 0 5px;
        }

        /* RESPONSIVE */

        @media (max-width: 1050px) {
            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .middle {
                grid-template-columns: 1fr;
            }

            .bottom {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 750px) {
            .sidebar {
                width: 65px;
            }

            .logo-text,
            .nav a span,
            .notification {
                display: none;
            }

            .logo {
                justify-content: center;
                padding-left: 0;
                padding-right: 0;
            }

            .nav a {
                justify-content: center;
            }

            .main {
                margin-left: 65px;
            }

            .content {
                padding: 18px;
            }

            .welcome {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .dream {
                width: 100%;
            }

            .bottom {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 500px) {
            .stats {
                grid-template-columns: 1fr;
            }

            .profile-name,
            .profile-role {
                display: none;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo">
            <div class="logo-icon">🎓</div>

            <div class="logo-text">
                Training &<br>
                <span>Placement Portal</span>
            </div>
        </div>

        <ul class="nav">

            <li>
                <a href="#" class="active">
                    <div class="nav-icon">⌂</div>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="/student/profile">
                    <div class="nav-icon">👤</div>
                    <span>My Profile</span>
                </a>
            </li>
<li>
    <a href="/student/opportunities">
        <div class="nav-icon">💼</div>
        <span>Opportunities</span>
    </a>
</li>

<li>
    <a href="/student/applications">
        <div class="nav-icon">📋</div>
        <span>My Applications</span>
    </a>
</li>

<li>
    <a href="/student/courses">
        <div class="nav-icon">🎓</div>
        <span>Training & Courses</span>
    </a>
</li>

<li>
    <a href="/student/resume">
        <div class="nav-icon">📄</div>
        <span>Resume</span>
    </a>
</li>

<li>
    <a href="/student/notifications">
        <div class="nav-icon">🔔</div>
        <span>Notifications</span>
    </a>
</li>

        </ul>

        <div class="logout">
    <a href="/student/logout" class="nav">
        <div style="padding:12px;color:#d8d0ed;font-size:11px;">
            ↪ &nbsp; Logout
        </div>
    </a>
</div>

    </aside>


    <!-- MAIN -->
    <main class="main">

        <!-- TOP BAR -->
        <div class="topbar">

            <div class="notification-btn">
                🔔
                <div class="notification-dot"></div>
            </div>

            <div class="profile">

                <div class="avatar">
                    👤
                </div>

                <div>
                    <div class="profile-name">
                        Hi, Hridyaa 👋
                    </div>

                    <div class="profile-role">
                        Student
                    </div>
                </div>

                <span>⌄</span>

            </div>

        </div>


        <!-- CONTENT -->
        <div class="content">

            <!-- WELCOME -->
            <div class="welcome">

                <div>
                    <h1>
                        Welcome, <span>student</span> 👋
                    </h1>

                    <p>
                        Your career journey starts here. Explore opportunities,
                        gain skills and get placed.
                    </p>
                </div>

                <div class="dream">

                    <div class="rocket">
                        🚀
                    </div>

                    <div>
                        <strong>Dream Today, Hire Tomorrow!</strong>
                        <small>Your career journey starts here.</small>
                    </div>

                </div>

            </div>


            <!-- STATISTICS -->
            <div class="stats">

                <div class="stat">
                    <div class="stat-icon">💼</div>
                    <div class="stat-number">12</div>
                    <div class="stat-label">Available Opportunities</div>
                </div>

                <div class="stat">
                    <div class="stat-icon">📄</div>
                    <div class="stat-number">4</div>
                    <div class="stat-label">Applications Submitted</div>
                </div>

                <div class="stat">
                    <div class="stat-icon">🏢</div>
                    <div class="stat-number">8</div>
                    <div class="stat-label">Eligible Companies</div>
                </div>

                <div class="stat">
                    <div class="stat-icon">📅</div>
                    <div class="stat-number">3</div>
                    <div class="stat-label">Upcoming Drives</div>
                </div>

            </div>


            <!-- MIDDLE -->
            <div class="middle">

                <!-- OPPORTUNITIES -->
                <div class="card">

                    <div class="card-header">

                        <div class="card-title">
                            <div class="title-icon">📢</div>
                            Latest Placement Opportunities
                        </div>

                        <a href="#" class="view">
                            View All →
                        </a>

                    </div>

                    <div class="table-container">

                        <table>

                            <thead>
                                <tr>
                                    <th>Company</th>
                                    <th>Job Role</th>
                                    <th>Eligibility</th>
                                    <th>Last Date</th>
                                    <th>Apply</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>
                                        <div class="company">
                                            <div class="company-icon">G</div>
                                            Google
                                        </div>
                                    </td>

                                    <td>Software Engineer</td>
                                    <td>B.Tech / B.E</td>
                                    <td>24 Jun</td>

                                    <td>
                                        <button class="apply">
                                            Apply
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="company">
                                            <div class="company-icon">M</div>
                                            Microsoft
                                        </div>
                                    </td>

                                    <td>Software Developer</td>
                                    <td>B.Tech / B.E</td>
                                    <td>26 Jun</td>

                                    <td>
                                        <button class="apply">
                                            Apply
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="company">
                                            <div class="company-icon">I</div>
                                            Infosys
                                        </div>
                                    </td>

                                    <td>System Engineer</td>
                                    <td>B.Tech / B.E</td>
                                    <td>28 Jun</td>

                                    <td>
                                        <button class="apply">
                                            Apply
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="company">
                                            <div class="company-icon">T</div>
                                            TCS
                                        </div>
                                    </td>

                                    <td>Software Engineer</td>
                                    <td>B.Tech / B.E</td>
                                    <td>30 Jun</td>

                                    <td>
                                        <button class="apply">
                                            Apply
                                        </button>
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>


                <!-- PROGRESS -->
                <div class="card">

                    <div class="card-header">

                        <div class="card-title">
                            <div class="title-icon">📊</div>
                            My Progress
                        </div>

                        <a href="#" class="view">
                            View Details →
                        </a>

                    </div>

                    <div class="progress-content">

                        <div class="progress-item">

                            <div class="progress-label">
                                <span>Resume Profile</span>
                                <span class="percentage">80%</span>
                            </div>

                            <div class="bar">
                                <div class="fill" style="width:80%;"></div>
                            </div>

                        </div>


                        <div class="progress-item">

                            <div class="progress-label">
                                <span>Skills Completed</span>
                                <span class="percentage">70%</span>
                            </div>

                            <div class="bar">
                                <div class="fill" style="width:70%;"></div>
                            </div>

                        </div>


                        <div class="progress-item">

                            <div class="progress-label">
                                <span>Training Completed</span>
                                <span class="percentage">60%</span>
                            </div>

                            <div class="bar">
                                <div class="fill" style="width:60%;"></div>
                            </div>

                        </div>


                        <div class="progress-item">

                            <div class="progress-label">
                                <span>Application Status</span>
                                <span class="percentage">50%</span>
                            </div>

                            <div class="bar">
                                <div class="fill" style="width:50%;"></div>
                            </div>

                        </div>


                        <div class="tip">
                            💡 <strong>Tip:</strong>
                            Improve your skills and attend more training sessions
                            to increase your chances of getting placed!
                        </div>

                    </div>

                </div>

            </div>


            <!-- BOTTOM -->
            <div class="bottom">

                <!-- UPCOMING DRIVES -->
                <div class="card">

                    <div class="card-header">

                        <div class="card-title">
                            <div class="title-icon">📅</div>
                            Upcoming Drives
                        </div>

                        <a href="#" class="view">
                            View All →
                        </a>

                    </div>

                    <div class="drive-content">

                        <div class="drive">

                            <div class="date">
                                <div class="date-month">JUN</div>
                                <div class="date-day">24</div>
                            </div>

                            <div class="drive-info">

                                <strong>Campus Placement Drive</strong>

                                <span>
                                    Virtual | 10:00 AM
                                </span>

                                <div class="deadline">
                                    Last Date: 24 Jun
                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- COURSES -->
                <div class="card">

                    <div class="card-header">

                        <div class="card-title">
                            <div class="title-icon">📚</div>
                            Recommended Courses
                        </div>

                        <a href="#" class="view">
                            View All →
                        </a>

                    </div>

                    <div class="courses">

                        <div class="course">

                            <div class="course-left">

                                <div class="course-icon">
                                    💻
                                </div>

                                <div>
                                    <div class="course-name">
                                        Data Structures & Algorithms
                                    </div>

                                    <div class="course-info">
                                        Learn and practice DSA
                                    </div>
                                </div>

                            </div>

                            <button class="start">
                                Start
                            </button>

                        </div>


                        <div class="course">

                            <div class="course-left">

                                <div class="course-icon">
                                    🤖
                                </div>

                                <div>
                                    <div class="course-name">
                                        Machine Learning Basics
                                    </div>

                                    <div class="course-info">
                                        Fundamentals of ML and AI
                                    </div>
                                </div>

                            </div>

                            <button class="start">
                                Start
                            </button>

                        </div>


                        <div class="course">

                            <div class="course-left">

                                <div class="course-icon">
                                    🌐
                                </div>

                                <div>
                                    <div class="course-name">
                                        Web Development
                                    </div>

                                    <div class="course-info">
                                        Frontend & Backend
                                    </div>
                                </div>

                            </div>

                            <button class="start">
                                Start
                            </button>

                        </div>

                    </div>

                </div>


                <!-- QUICK LINKS -->
                <div class="card">

                    <div class="card-header">

                        <div class="card-title">
                            <div class="title-icon">🔗</div>
                            Quick Links
                        </div>

                    </div>

                    <div class="quick">

                        <a href="#" class="quick-link">

                            <div class="quick-left">
                                <div class="quick-icon">💼</div>
                                View Job Opportunities
                            </div>

                            <span class="arrow">→</span>

                        </a>


                        <a href="#" class="quick-link">

                            <div class="quick-left">
                                <div class="quick-icon">🎓</div>
                                Training & Courses
                            </div>

                            <span class="arrow">→</span>

                        </a>


                        <a href="#" class="quick-link">

                            <div class="quick-left">
                                <div class="quick-icon">📄</div>
                                Update Resume
                            </div>

                            <span class="arrow">→</span>

                        </a>

                    </div>

                </div>

            </div>


            <div class="footer">
                © 2026 Training & Placement Portal | Student Dashboard
            </div>

        </div>

    </main>

</body>
</html>