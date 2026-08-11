<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Company Dashboard</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        body {
            background: #f6f3ff;
            color: #21194d;
        }

        .layout {
            display: flex;
            min-height: 100vh;
            width: 100%;
        }

        /* ================= SIDEBAR ================= */

        .sidebar {
            width: 245px;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            background: linear-gradient(180deg, #26105f, #35137d, #1b0b4d);
            color: white;
            padding: 20px 13px;
            overflow-y: auto;
            z-index: 100;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 4px 10px 25px;
        }

        .logo-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: white;
            color: #5d2ee6;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }

        .logo-text {
            font-size: 13px;
            font-weight: 700;
            line-height: 1.4;
            white-space: nowrap;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .menu-btn {
            border: none;
            background: transparent;
            color: #ded8ff;
            text-decoration: none;
            padding: 12px;
            border-radius: 9px;
            display: flex;
            align-items: center;
            gap: 11px;
            font-size: 13px;
            width: 100%;
            text-align: left;
            cursor: pointer;
            line-height: 1.4;
        }

        .menu-btn:hover,
        .menu-btn.active {
            background: linear-gradient(90deg, #5520df, #7133ef);
            color: white;
        }

        .menu-icon {
            width: 20px;
            text-align: center;
            font-size: 16px;
            flex-shrink: 0;
        }

        .logout {
            margin-top: 25px;
            border-top: 1px solid rgba(255,255,255,0.12);
            padding-top: 15px;
        }

        /* ================= MAIN ================= */

        .main {
            margin-left: 245px;
            width: calc(100% - 245px);
            min-height: 100vh;
        }

        /* ================= TOPBAR ================= */

        .topbar {
            height: 70px;
            width: 100%;
            background: white;
            border-bottom: 1px solid #e7e1f8;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 0 32px;
            gap: 25px;
        }

        .notification-btn {
            position: relative;
            border: none;
            background: none;
            font-size: 21px;
            cursor: pointer;
        }

        .badge {
            position: absolute;
            top: -5px;
            right: -7px;
            width: 16px;
            height: 16px;
            background: #ef4273;
            color: white;
            font-size: 9px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .company-user {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: linear-gradient(135deg, #6330e8, #a27bff);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            flex-shrink: 0;
        }

        .user-name {
            font-size: 12px;
            font-weight: 700;
            line-height: 1.4;
            white-space: nowrap;
        }

        .user-role {
            font-size: 10px;
            color: #777;
            line-height: 1.4;
            white-space: nowrap;
        }

        /* ================= CONTENT ================= */

        .content {
            width: 100%;
            padding: 30px 32px 50px;
        }

        .page-section {
            width: 100%;
            display: none;
        }

        .page-section.active-section {
            display: block;
            width: 100%;
        }

        /* ================= WELCOME ================= */

        .welcome {
            width: 100%;
            max-width: none;
            margin-bottom: 25px;
        }

        .welcome h1 {
            width: 100%;
            max-width: none;
            font-size: 31px;
            line-height: 1.3;
            margin-bottom: 9px;
            color: #171052;
            letter-spacing: 0.2px;
            white-space: nowrap;
        }

        .welcome p {
            width: 100%;
            max-width: none;
            font-size: 14px;
            line-height: 1.7;
            color: #6d6880;
        }

        /* ================= STATS ================= */

        .stats {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
            margin-bottom: 24px;
        }

        .stat {
            width: 100%;
            min-width: 0;
            background: white;
            border: 1px solid #e5def8;
            border-radius: 14px;
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
            box-shadow: 0 5px 15px rgba(60,30,130,.04);
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }

        .purple {
            background: #eee7ff;
        }

        .green {
            background: #def8ed;
        }

        .orange {
            background: #fff0db;
        }

        .pink {
            background: #ffe4ef;
        }

        .number {
            font-size: 25px;
            font-weight: 800;
            color: #171052;
            line-height: 1.2;
        }

        .label {
            font-size: 11px;
            line-height: 1.6;
            color: #77718b;
            white-space: normal;
        }

        /* ================= MAIN GRID ================= */

        .grid {
            width: 100%;
            display: grid;

            /*
             * MORE WIDTH FOR APPLICATIONS
             * AND ENOUGH WIDTH FOR DRIVES
             */
            grid-template-columns: minmax(0, 2.4fr) minmax(330px, 1fr);

            gap: 22px;
            margin-bottom: 22px;
            align-items: start;
        }

        .card {
            width: 100%;
            min-width: 0;
            background: white;
            border: 1px solid #e5def8;
            border-radius: 14px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(60,30,130,.04);
        }

        .card-header {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 17px;
        }

        .card-header h2 {
            width: auto;
            font-size: 18px;
            line-height: 1.4;
            color: #21194d;
            white-space: nowrap;
        }

        .link-btn {
            border: none;
            background: transparent;
            color: #6030df;
            font-size: 11px;
            font-weight: 700;
            cursor: pointer;
            white-space: nowrap;
            flex-shrink: 0;
        }

        .link-btn:hover {
            text-decoration: underline;
        }

        /* ================= TABLE ================= */

        table {
            width: 100%;
            min-width: 620px;
            border-collapse: collapse;
            table-layout: auto;
        }

        th {
            text-align: left;
            padding: 12px 9px;
            font-size: 10px;
            line-height: 1.5;
            color: #706a84;
            background: #f8f6ff;
            white-space: nowrap;
        }

        td {
            padding: 13px 9px;
            border-bottom: 1px solid #eeeaf7;
            font-size: 11px;
            line-height: 1.6;
            vertical-align: middle;

            /*
             * TEXT CAN USE FULL WIDTH
             */
            white-space: normal;
            word-break: normal;
            overflow-wrap: break-word;
        }

        .student {
            display: flex;
            align-items: center;
            gap: 9px;
            min-width: 155px;
        }

        .student-img {
            width: 31px;
            height: 31px;
            border-radius: 50%;
            background: #ebe4ff;
            color: #5d2de0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            flex-shrink: 0;
        }

        .student-name {
            font-size: 11px;
            font-weight: 700;
            line-height: 1.5;
            white-space: nowrap;
        }

        .course {
            font-size: 10px;
            color: #888;
            line-height: 1.5;
            white-space: nowrap;
        }

        .status {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 6px;
            font-size: 9px;
            line-height: 1.4;
            font-weight: 700;
            white-space: nowrap;
        }

        .review {
            background: #e2edff;
            color: #3569bd;
        }

        .shortlisted {
            background: #dcf7eb;
            color: #12825b;
        }

        .interview {
            background: #fff0d3;
            color: #ae7216;
        }

        .small-btn {
            background: #6030df;
            color: white;
            padding: 7px 12px;
            border-radius: 6px;
            border: none;
            text-decoration: none;
            font-size: 9px;
            line-height: 1.3;
            cursor: pointer;
            white-space: nowrap;
        }

        .small-btn:hover {
            background: #4c22bd;
        }

        /* ================= DRIVES ================= */

        .drive {
            width: 100%;
            border: 1px solid #e9e3f6;
            border-radius: 9px;
            padding: 15px;
            margin-bottom: 11px;
        }

        .drive:last-child {
            margin-bottom: 0;
        }

        .drive-title {
            width: 100%;
            font-size: 14px;
            font-weight: 700;
            line-height: 1.5;
            margin-bottom: 7px;
        }

        .drive-info {
            width: 100%;
            font-size: 11px;
            color: #777;
            line-height: 1.8;
        }

        .date {
            display: inline-block;
            background: #eee7ff;
            color: #6031df;
            padding: 6px 8px;
            border-radius: 5px;
            font-size: 9px;
            line-height: 1.3;
            font-weight: 700;
            margin-top: 8px;
        }

        /* ================= QUICK ACTIONS ================= */

        .actions {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 13px;
        }

        .action {
            width: 100%;
            border: 1px solid #e7e1f7;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            background: white;
            transition: .2s;
            color: #21194d;
        }

        .action:hover {
            box-shadow: 0 5px 15px rgba(80,40,160,.1);
            transform: translateY(-2px);
            border-color: #d7c8f7;
        }

        .action-icon {
            font-size: 23px;
            margin-bottom: 8px;
        }

        .action-text {
            width: 100%;
            font-size: 12px;
            font-weight: 700;
            line-height: 1.5;
            white-space: nowrap;
        }

        /* ================= OTHER SECTIONS ================= */

        .section-card {
            width: 100%;
            max-width: none;
            background: white;
            border: 1px solid #e5def8;
            border-radius: 14px;
            padding: 28px;
            margin-top: 5px;
            box-shadow: 0 5px 15px rgba(60,30,130,.04);
        }

        .section-card h2 {
            width: 100%;
            font-size: 22px;
            line-height: 1.4;
            margin-bottom: 8px;
            color: #24115d;
        }

        .section-card > p {
            width: 100%;
            max-width: none;
            color: #77718b;
            font-size: 13px;
            line-height: 1.7;
            margin-bottom: 22px;
        }

        .info-grid {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }

        .info-box {
            width: 100%;
            min-width: 0;
            background: #f8f6ff;
            padding: 17px;
            border-radius: 9px;
        }

        .info-label {
            width: 100%;
            color: #77718b;
            font-size: 11px;
            line-height: 1.5;
            margin-bottom: 6px;
        }

        .info-value {
            width: 100%;
            font-size: 14px;
            line-height: 1.6;
            font-weight: 700;
            color: #2b2354;
            overflow-wrap: anywhere;
        }

        .back-btn {
            border: none;
            background: #eee7ff;
            color: #6031df;
            padding: 9px 14px;
            border-radius: 7px;
            cursor: pointer;
            font-size: 11px;
            line-height: 1.4;
            margin-bottom: 17px;
        }

        .back-btn:hover {
            background: #e2d8ff;
        }

        .detail-box {
            width: 100%;
            border: 1px solid #eee8f8;
            padding: 17px;
            border-radius: 9px;
            margin-bottom: 13px;
        }

        .detail-box h3 {
            width: 100%;
            font-size: 15px;
            line-height: 1.5;
            margin-bottom: 7px;
            color: #2b2354;
        }

        .detail-box p {
            width: 100%;
            margin: 4px 0;
            font-size: 12px;
            line-height: 1.8;
            color: #666078;
        }

        /* ================= RESPONSIVE ================= */

        @media(max-width:1200px) {

            .stats {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .card {
                width: 100%;
            }
        }

        @media(max-width:850px) {

            .sidebar {
                width: 210px;
            }

            .main {
                margin-left: 210px;
                width: calc(100% - 210px);
            }

            .content {
                padding: 25px 20px 40px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .welcome h1 {
                white-space: normal;
            }
        }

        @media(max-width:700px) {

            .sidebar {
                width: 70px;
            }

            .logo-text {
                display: none;
            }

            .logo {
                justify-content: center;
                padding-left: 0;
                padding-right: 0;
            }

            .menu-btn {
                justify-content: center;
                padding: 12px 5px;
            }

            .menu-btn span:not(.menu-icon) {
                display: none;
            }

            .main {
                margin-left: 70px;
                width: calc(100% - 70px);
            }

            .content {
                padding: 20px 15px 35px;
            }

            .welcome h1 {
                font-size: 25px;
                white-space: normal;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .actions {
                grid-template-columns: 1fr;
            }

            .topbar {
                padding: 0 15px;
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .card {
                overflow-x: auto;
            }
        }
    </style>
</head>

<body>

<div class="layout">

    <!-- ================= SIDEBAR ================= -->

    <aside class="sidebar">

        <div class="logo">

            <div class="logo-icon">
                🎓
            </div>

            <div class="logo-text">
                Training &<br>
                Placement Portal
            </div>

        </div>

        <nav class="menu">

            <button class="menu-btn active"
                    onclick="showSection('dashboard', this)">
                <span class="menu-icon">⌂</span>
                <span>Dashboard</span>
            </button>

            <button class="menu-btn"
                    onclick="showSection('profile', this)">
                <span class="menu-icon">🏢</span>
                <span>Company Profile</span>
            </button>

            <button class="menu-btn"
                    onclick="showSection('jobs', this)">
                <span class="menu-icon">💼</span>
                <span>Job Postings</span>
            </button>

            <button class="menu-btn"
                    onclick="showSection('applications', this)">
                <span class="menu-icon">📄</span>
                <span>Applications</span>
            </button>

            <button class="menu-btn"
                    onclick="showSection('shortlisted', this)">
                <span class="menu-icon">⭐</span>
                <span>Shortlisted Students</span>
            </button>

            <button class="menu-btn"
                    onclick="showSection('interviews', this)">
                <span class="menu-icon">📅</span>
                <span>Interviews</span>
            </button>

            <button class="menu-btn"
                    onclick="showSection('notifications', this)">
                <span class="menu-icon">🔔</span>
                <span>Notifications</span>
            </button>

            <button class="menu-btn"
                    onclick="showSection('settings', this)">
                <span class="menu-icon">⚙</span>
                <span>Settings</span>
            </button>

        </nav>

        <div class="logout">

            <button class="menu-btn"
                    onclick="logoutCompany()">

                <span class="menu-icon">↪</span>
                <span>Logout</span>

            </button>

        </div>

    </aside>


    <!-- ================= MAIN ================= -->

    <main class="main">

        <header class="topbar">

            <button class="notification-btn"
                    onclick="showSection('notifications')">

                🔔

                <span class="badge">
                    4
                </span>

            </button>

            <div class="company-user">

                <div class="avatar">
                    C
                </div>

                <div>

                    <div class="user-name">
                        Company
                    </div>

                    <div class="user-role">
                        Company Account
                    </div>

                </div>

            </div>

        </header>


        <section class="content">


            <!-- ================= DASHBOARD ================= -->

            <div id="dashboard"
                 class="page-section active-section">


                <div class="welcome">

                    <h1>
                        Welcome, Company! 👋
                    </h1>

                    <p>
                        Manage your recruitment activities, review applications
                        and connect with talented students.
                    </p>

                </div>


                <!-- ================= STATS ================= -->

                <div class="stats">


                    <div class="stat">

                        <div class="stat-icon purple">
                            💼
                        </div>

                        <div>
                            <div class="number">
                                8
                            </div>

                            <div class="label">
                                Active Job Postings
                            </div>
                        </div>

                    </div>


                    <div class="stat">

                        <div class="stat-icon green">
                            📄
                        </div>

                        <div>
                            <div class="number">
                                126
                            </div>

                            <div class="label">
                                Total Applications
                            </div>
                        </div>

                    </div>


                    <div class="stat">

                        <div class="stat-icon orange">
                            ⭐
                        </div>

                        <div>
                            <div class="number">
                                34
                            </div>

                            <div class="label">
                                Shortlisted Students
                            </div>
                        </div>

                    </div>


                    <div class="stat">

                        <div class="stat-icon pink">
                            📅
                        </div>

                        <div>
                            <div class="number">
                                6
                            </div>

                            <div class="label">
                                Upcoming Interviews
                            </div>
                        </div>

                    </div>

                </div>


                <!-- ================= APPLICATIONS + DRIVES ================= -->

                <div class="grid">


                    <!-- RECENT APPLICATIONS -->

                    <div class="card">

                        <div class="card-header">

                            <h2>
                                Recent Applications
                            </h2>

                            <button class="link-btn"
                                    onclick="showSection('applications')">

                                View All →

                            </button>

                        </div>


                        <table>

                            <thead>

                                <tr>
                                    <th>Student</th>
                                    <th>Job Role</th>
                                    <th>Applied On</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>

                            </thead>


                            <tbody>


                                <tr>

                                    <td>

                                        <div class="student">

                                            <div class="student-img">
                                                A
                                            </div>

                                            <div>

                                                <div class="student-name">
                                                    Aarav Patel
                                                </div>

                                                <div class="course">
                                                    B.Tech CSE
                                                </div>

                                            </div>

                                        </div>

                                    </td>

                                    <td>
                                        Software Engineer
                                    </td>

                                    <td>
                                        08 Aug 2026
                                    </td>

                                    <td>

                                        <span class="status review">
                                            Under Review
                                        </span>

                                    </td>

                                    <td>

                                        <button class="small-btn"
                                                onclick="showApplication(
                                                    'Aarav Patel',
                                                    'B.Tech CSE',
                                                    'Software Engineer',
                                                    '8.4',
                                                    'Under Review'
                                                )">

                                            View

                                        </button>

                                    </td>

                                </tr>


                                <tr>

                                    <td>

                                        <div class="student">

                                            <div class="student-img">
                                                P
                                            </div>

                                            <div>

                                                <div class="student-name">
                                                    Priya Shah
                                                </div>

                                                <div class="course">
                                                    B.Tech IT
                                                </div>

                                            </div>

                                        </div>

                                    </td>

                                    <td>
                                        System Engineer
                                    </td>

                                    <td>
                                        07 Aug 2026
                                    </td>

                                    <td>

                                        <span class="status shortlisted">
                                            Shortlisted
                                        </span>

                                    </td>

                                    <td>

                                        <button class="small-btn"
                                                onclick="showApplication(
                                                    'Priya Shah',
                                                    'B.Tech IT',
                                                    'System Engineer',
                                                    '8.7',
                                                    'Shortlisted'
                                                )">

                                            View

                                        </button>

                                    </td>

                                </tr>


                                <tr>

                                    <td>

                                        <div class="student">

                                            <div class="student-img">
                                                R
                                            </div>

                                            <div>

                                                <div class="student-name">
                                                    Rohan Mehta
                                                </div>

                                                <div class="course">
                                                    B.Tech CSE
                                                </div>

                                            </div>

                                        </div>

                                    </td>

                                    <td>
                                        Software Developer
                                    </td>

                                    <td>
                                        06 Aug 2026
                                    </td>

                                    <td>

                                        <span class="status interview">
                                            Interview
                                        </span>

                                    </td>

                                    <td>

                                        <button class="small-btn"
                                                onclick="showApplication(
                                                    'Rohan Mehta',
                                                    'B.Tech CSE',
                                                    'Software Developer',
                                                    '8.3',
                                                    'Interview'
                                                )">

                                            View

                                        </button>

                                    </td>

                                </tr>


                            </tbody>

                        </table>

                    </div>


                    <!-- UPCOMING DRIVES -->

                    <div class="card">

                        <div class="card-header">

                            <h2>
                                Upcoming Drives
                            </h2>

                            <button class="link-btn"
                                    onclick="showSection('drives')">

                                View All →

                            </button>

                        </div>


                        <div class="drive">

                            <div class="drive-title">
                                Campus Recruitment Drive
                            </div>

                            <div class="drive-info">

                                📍 ABC Engineering College<br>

                                👥 B.Tech / B.E Students<br>

                                💼 Software Engineer

                            </div>

                            <span class="date">
                                20 Aug 2026
                            </span>

                        </div>


                        <div class="drive">

                            <div class="drive-title">
                                Technical Interview
                            </div>

                            <div class="drive-info">

                                📍 Placement Cell<br>

                                👥 12 Shortlisted Students<br>

                                💼 System Engineer

                            </div>

                            <span class="date">
                                24 Aug 2026
                            </span>

                        </div>


                        <div class="drive">

                            <div class="drive-title">
                                Final HR Round
                            </div>

                            <div class="drive-info">

                                💻 Online<br>

                                👥 8 Candidates<br>

                                💼 Software Engineer

                            </div>

                            <span class="date">
                                27 Aug 2026
                            </span>

                        </div>

                    </div>

                </div>


                <!-- ================= QUICK ACTIONS ================= -->

                <div class="card">

                    <div class="card-header">

                        <h2>
                            Quick Actions
                        </h2>

                    </div>


                    <div class="actions">


                        <button class="action"
                                onclick="showSection('jobs')">

                            <div class="action-icon">
                                ➕
                            </div>

                            <div class="action-text">
                                Post New Job
                            </div>

                        </button>


                        <button class="action"
                                onclick="showSection('applications')">

                            <div class="action-icon">
                                📄
                            </div>

                            <div class="action-text">
                                View Applications
                            </div>

                        </button>


                        <button class="action"
                                onclick="showSection('interviews')">

                            <div class="action-icon">
                                📅
                            </div>

                            <div class="action-text">
                                Schedule Interview
                            </div>

                        </button>


                    </div>

                </div>

            </div>


            <!-- ================= PROFILE ================= -->

            <div id="profile"
                 class="page-section">

                <div class="section-card">

                    <button class="back-btn"
                            onclick="showSection('dashboard')">

                        ← Back to Dashboard

                    </button>

                    <h2>
                        Company Profile
                    </h2>

                    <p>
                        View and manage your company information.
                    </p>


                    <div class="info-grid">

                        <div class="info-box">

                            <div class="info-label">
                                Company Name
                            </div>

                            <div class="info-value">
                                Registered Company
                            </div>

                        </div>


                        <div class="info-box">

                            <div class="info-label">
                                Industry
                            </div>

                            <div class="info-value">
                                Information Technology
                            </div>

                        </div>


                        <div class="info-box">

                            <div class="info-label">
                                Email
                            </div>

                            <div class="info-value">
                                company@example.com
                            </div>

                        </div>


                        <div class="info-box">

                            <div class="info-label">
                                Location
                            </div>

                            <div class="info-value">
                                Ahmedabad, Gujarat
                            </div>

                        </div>


                        <div class="info-box">

                            <div class="info-label">
                                Website
                            </div>

                            <div class="info-value">
                                www.company.com
                            </div>

                        </div>


                        <div class="info-box">

                            <div class="info-label">
                                Company Status
                            </div>

                            <div class="info-value">
                                Verified
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================= JOB POSTINGS ================= -->

            <div id="jobs"
                 class="page-section">

                <div class="section-card">

                    <button class="back-btn"
                            onclick="showSection('dashboard')">

                        ← Back to Dashboard

                    </button>

                    <h2>
                        Job Postings
                    </h2>

                    <p>
                        Manage your current recruitment opportunities.
                    </p>


                    <div class="detail-box">

                        <h3>
                            Software Engineer
                        </h3>

                        <p>
                            Eligibility: B.Tech / B.E
                        </p>

                        <p>
                            Location: Ahmedabad
                        </p>

                        <p>
                            Applications: 54
                        </p>

                        <p>
                            Last Date: 20 Aug 2026
                        </p>

                    </div>


                    <div class="detail-box">

                        <h3>
                            System Engineer
                        </h3>

                        <p>
                            Eligibility: B.Tech / MCA
                        </p>

                        <p>
                            Location: Gujarat
                        </p>

                        <p>
                            Applications: 38
                        </p>

                        <p>
                            Last Date: 25 Aug 2026
                        </p>

                    </div>


                    <div class="detail-box">

                        <h3>
                            Data Analyst
                        </h3>

                        <p>
                            Eligibility: B.Tech / MCA
                        </p>

                        <p>
                            Location: Remote
                        </p>

                        <p>
                            Applications: 34
                        </p>

                        <p>
                            Last Date: 30 Aug 2026
                        </p>

                    </div>

                </div>

            </div>


            <!-- ================= APPLICATIONS ================= -->

            <div id="applications"
                 class="page-section">

                <div class="section-card">

                    <button class="back-btn"
                            onclick="showSection('dashboard')">

                        ← Back to Dashboard

                    </button>

                    <h2>
                        All Applications
                    </h2>

                    <p>
                        Review applications received from students.
                    </p>


                    <table>

                        <thead>

                            <tr>
                                <th>Student</th>
                                <th>Course</th>
                                <th>Job Role</th>
                                <th>CGPA</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                        </thead>


                        <tbody>

                            <tr>

                                <td>
                                    Aarav Patel
                                </td>

                                <td>
                                    B.Tech CSE
                                </td>

                                <td>
                                    Software Engineer
                                </td>

                                <td>
                                    8.4
                                </td>

                                <td>

                                    <span class="status review">
                                        Under Review
                                    </span>

                                </td>

                                <td>

                                    <button class="small-btn"
                                            onclick="showApplication(
                                                'Aarav Patel',
                                                'B.Tech CSE',
                                                'Software Engineer',
                                                '8.4',
                                                'Under Review'
                                            )">

                                        View

                                    </button>

                                </td>

                            </tr>


                            <tr>

                                <td>
                                    Priya Shah
                                </td>

                                <td>
                                    B.Tech IT
                                </td>

                                <td>
                                    System Engineer
                                </td>

                                <td>
                                    8.7
                                </td>

                                <td>

                                    <span class="status shortlisted">
                                        Shortlisted
                                    </span>

                                </td>

                                <td>

                                    <button class="small-btn"
                                            onclick="showApplication(
                                                'Priya Shah',
                                                'B.Tech IT',
                                                'System Engineer',
                                                '8.7',
                                                'Shortlisted'
                                            )">

                                        View

                                    </button>

                                </td>

                            </tr>


                            <tr>

                                <td>
                                    Rohan Mehta
                                </td>

                                <td>
                                    B.Tech CSE
                                </td>

                                <td>
                                    Software Developer
                                </td>

                                <td>
                                    8.3
                                </td>

                                <td>

                                    <span class="status interview">
                                        Interview
                                    </span>

                                </td>

                                <td>

                                    <button class="small-btn"
                                            onclick="showApplication(
                                                'Rohan Mehta',
                                                'B.Tech CSE',
                                                'Software Developer',
                                                '8.3',
                                                'Interview'
                                            )">

                                        View

                                    </button>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>


            <!-- ================= APPLICATION DETAILS ================= -->

            <div id="application-details"
                 class="page-section">

                <div class="section-card">

                    <button class="back-btn"
                            onclick="showSection('applications')">

                        ← Back to Applications

                    </button>

                    <h2>
                        Application Details
                    </h2>

                    <p>
                        Student application information.
                    </p>


                    <div class="info-grid">

                        <div class="info-box">

                            <div class="info-label">
                                Student Name
                            </div>

                            <div class="info-value"
                                 id="detail-name">
                            </div>

                        </div>


                        <div class="info-box">

                            <div class="info-label">
                                Course
                            </div>

                            <div class="info-value"
                                 id="detail-course">
                            </div>

                        </div>


                        <div class="info-box">

                            <div class="info-label">
                                Job Role
                            </div>

                            <div class="info-value"
                                 id="detail-job">
                            </div>

                        </div>


                        <div class="info-box">

                            <div class="info-label">
                                CGPA
                            </div>

                            <div class="info-value"
                                 id="detail-cgpa">
                            </div>

                        </div>


                        <div class="info-box">

                            <div class="info-label">
                                Application Status
                            </div>

                            <div class="info-value"
                                 id="detail-status">
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================= SHORTLISTED ================= -->

            <div id="shortlisted"
                 class="page-section">

                <div class="section-card">

                    <button class="back-btn"
                            onclick="showSection('dashboard')">

                        ← Back to Dashboard

                    </button>

                    <h2>
                        Shortlisted Students
                    </h2>

                    <p>
                        Students selected for the next recruitment stage.
                    </p>


                    <div class="detail-box">

                        <h3>
                            Priya Shah
                        </h3>

                        <p>
                            B.Tech IT | CGPA: 8.7
                        </p>

                        <p>
                            Job Role: System Engineer
                        </p>

                        <span class="status shortlisted">
                            Shortlisted
                        </span>

                    </div>


                    <div class="detail-box">

                        <h3>
                            Neha Joshi
                        </h3>

                        <p>
                            B.Tech CE | CGPA: 8.5
                        </p>

                        <p>
                            Job Role: Software Engineer
                        </p>

                        <span class="status shortlisted">
                            Shortlisted
                        </span>

                    </div>


                    <div class="detail-box">

                        <h3>
                            Rohan Mehta
                        </h3>

                        <p>
                            B.Tech CSE | CGPA: 8.3
                        </p>

                        <p>
                            Job Role: Software Developer
                        </p>

                        <span class="status shortlisted">
                            Shortlisted
                        </span>

                    </div>

                </div>

            </div>


            <!-- ================= INTERVIEWS ================= -->

            <div id="interviews"
                 class="page-section">

                <div class="section-card">

                    <button class="back-btn"
                            onclick="showSection('dashboard')">

                        ← Back to Dashboard

                    </button>

                    <h2>
                        Interviews
                    </h2>

                    <p>
                        Manage upcoming student interviews.
                    </p>


                    <div class="detail-box">

                        <h3>
                            Technical Interview
                        </h3>

                        <p>
                            Student: Priya Shah
                        </p>

                        <p>
                            Date: 24 Aug 2026
                        </p>

                        <p>
                            Time: 10:00 AM
                        </p>

                        <p>
                            Mode: Online
                        </p>

                    </div>


                    <div class="detail-box">

                        <h3>
                            HR Interview
                        </h3>

                        <p>
                            Student: Neha Joshi
                        </p>

                        <p>
                            Date: 25 Aug 2026
                        </p>

                        <p>
                            Time: 11:30 AM
                        </p>

                        <p>
                            Mode: Campus
                        </p>

                    </div>


                    <div class="detail-box">

                        <h3>
                            Final Interview
                        </h3>

                        <p>
                            Student: Rohan Mehta
                        </p>

                        <p>
                            Date: 27 Aug 2026
                        </p>

                        <p>
                            Time: 2:00 PM
                        </p>

                        <p>
                            Mode: Online
                        </p>

                    </div>

                </div>

            </div>


            <!-- ================= DRIVES ================= -->

            <div id="drives"
                 class="page-section">

                <div class="section-card">

                    <button class="back-btn"
                            onclick="showSection('dashboard')">

                        ← Back to Dashboard

                    </button>

                    <h2>
                        Upcoming Drives
                    </h2>

                    <p>
                        Recruitment drives scheduled by the company.
                    </p>


                    <div class="detail-box">

                        <h3>
                            Campus Recruitment Drive
                        </h3>

                        <p>
                            College: ABC Engineering College
                        </p>

                        <p>
                            Job Role: Software Engineer
                        </p>

                        <p>
                            Eligibility: B.Tech / B.E
                        </p>

                        <p>
                            Date: 20 Aug 2026
                        </p>

                        <p>
                            Location: Placement Cell
                        </p>

                    </div>


                    <div class="detail-box">

                        <h3>
                            Technical Recruitment Drive
                        </h3>

                        <p>
                            College: XYZ Engineering College
                        </p>

                        <p>
                            Job Role: System Engineer
                        </p>

                        <p>
                            Eligibility: B.Tech / MCA
                        </p>

                        <p>
                            Date: 24 Aug 2026
                        </p>

                        <p>
                            Location: Placement Cell
                        </p>

                    </div>


                    <div class="detail-box">

                        <h3>
                            Final HR Drive
                        </h3>

                        <p>
                            Mode: Online
                        </p>

                        <p>
                            Job Role: Software Developer
                        </p>

                        <p>
                            Date: 27 Aug 2026
                        </p>

                        <p>
                            Location: Online
                        </p>

                    </div>

                </div>

            </div>


            <!-- ================= NOTIFICATIONS ================= -->

            <div id="notifications"
                 class="page-section">

                <div class="section-card">

                    <button class="back-btn"
                            onclick="showSection('dashboard')">

                        ← Back to Dashboard

                    </button>

                    <h2>
                        Notifications
                    </h2>

                    <p>
                        Important recruitment updates and notifications.
                    </p>


                    <div class="detail-box">

                        <h3>
                            New Student Application
                        </h3>

                        <p>
                            Aarav Patel has applied for Software Engineer.
                        </p>

                    </div>


                    <div class="detail-box">

                        <h3>
                            Interview Reminder
                        </h3>

                        <p>
                            Technical interview with Priya Shah is scheduled
                            for 24 Aug 2026.
                        </p>

                    </div>


                    <div class="detail-box">

                        <h3>
                            Drive Approved
                        </h3>

                        <p>
                            Your upcoming campus recruitment drive has been
                            approved by the Placement Officer.
                        </p>

                    </div>

                </div>

            </div>


            <!-- ================= SETTINGS ================= -->

            <div id="settings"
                 class="page-section">

                <div class="section-card">

                    <button class="back-btn"
                            onclick="showSection('dashboard')">

                        ← Back to Dashboard

                    </button>

                    <h2>
                        Settings
                    </h2>

                    <p>
                        Manage your company dashboard settings.
                    </p>


                    <div class="detail-box">

                        <h3>
                            Account Settings
                        </h3>

                        <p>
                            Manage company account information.
                        </p>

                    </div>


                    <div class="detail-box">

                        <h3>
                            Notification Preferences
                        </h3>

                        <p>
                            Manage recruitment notification preferences.
                        </p>

                    </div>


                    <div class="detail-box">

                        <h3>
                            Security
                        </h3>

                        <p>
                            Manage account security and password settings.
                        </p>

                    </div>

                </div>

            </div>


        </section>

    </main>

</div>


<script>

    /* ================= SHOW SECTION ================= */

    function showSection(sectionId, clickedButton = null) {

        const sections = document.querySelectorAll(".page-section");

        sections.forEach(function(section) {

            section.classList.remove("active-section");

        });


        const selected = document.getElementById(sectionId);

        if (selected) {

            selected.classList.add("active-section");

        }


        const buttons = document.querySelectorAll(".menu-btn");

        buttons.forEach(function(button) {

            button.classList.remove("active");

        });


        if (clickedButton) {

            clickedButton.classList.add("active");

        }


        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });

    }


    /* ================= APPLICATION DETAILS ================= */

    function showApplication(
        name,
        course,
        job,
        cgpa,
        status
    ) {

        document.getElementById("detail-name").innerText = name;

        document.getElementById("detail-course").innerText = course;

        document.getElementById("detail-job").innerText = job;

        document.getElementById("detail-cgpa").innerText = cgpa;

        document.getElementById("detail-status").innerText = status;

        showSection("application-details");

    }


    /* ================= LOGOUT ================= */

    function logoutCompany() {

        const confirmLogout = confirm(
            "Are you sure you want to logout?"
        );


        if (confirmLogout) {

            window.location.href = "/company/login";

        }

    }

</script>

</body>
</html>