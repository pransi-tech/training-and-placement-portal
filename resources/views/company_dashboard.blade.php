<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Company Dashboard - K D Polytechnic T&P Portal</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f5f7fb;
            color: #222;
        }

        /* =========================================================
           SIDEBAR
        ========================================================= */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            height: 100vh;
            background: #17104f;
            color: white;
            padding: 22px 15px;
            overflow-y: auto;
            z-index: 1000;
        }

        .logo {
            text-align: center;
            margin-bottom: 28px;
            padding: 16px 10px;
            border-radius: 12px;
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.10);
        }

        .logo h2 {
            font-size: 20px;
            color: white;
            letter-spacing: 0.5px;
            line-height: 1.3;
        }

        .logo h2 span {
            color: #bdb5ff;
        }

        .logo p {
            font-size: 12px;
            color: #d8d4ff;
            margin-top: 7px;
            letter-spacing: 1px;
        }

        .menu {
            list-style: none;
        }

        .menu li {
            margin: 6px 0;
        }

        .menu button {
            width: 100%;
            border: none;
            background: transparent;
            color: white;
            text-align: left;
            padding: 12px 15px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            transition: 0.2s;
        }

        .menu button:hover,
        .menu button.active {
            background: #302777;
        }

        .menu .logout {
            margin-top: 20px;
            background: #b42335;
        }

        .menu .logout:hover {
            background: #c92a3d;
        }


        /* =========================================================
           MAIN CONTENT
        ========================================================= */

        .main {
            margin-left: 250px;
            width: calc(100% - 250px);
            min-height: 100vh;
            padding: 25px;
        }


        /* =========================================================
           TOPBAR
        ========================================================= */

        .topbar {
            background: white;
            min-height: 72px;
            padding: 18px 25px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
        }

        .topbar h1 {
            font-size: 24px;
            color: #17104f;
            margin: 0;
        }


        /* =========================================================
           PAGES
        ========================================================= */

        .page {
            display: none;
        }

        .page.active {
            display: block;
        }

        .page-intro {
            margin-bottom: 20px;
        }

        .page-intro p {
            color: #666;
            font-size: 14px;
        }


        /* =========================================================
           DASHBOARD
        ========================================================= */

        .dashboard-banner {
            background: linear-gradient(135deg, #17104f, #302777);
            color: white;
            padding: 25px;
            border-radius: 14px;
            margin-bottom: 22px;
            box-shadow: 0 4px 15px rgba(23,16,79,0.15);
        }

        .dashboard-banner h2 {
            font-size: 22px;
            margin-bottom: 7px;
        }

        .dashboard-banner p {
            font-size: 14px;
            color: #ddd9ff;
        }

        .quick-actions {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 25px;
        }

        .quick-action {
            background: white;
            padding: 18px;
            border-radius: 11px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
            cursor: pointer;
            border: 1px solid transparent;
            transition: 0.2s;
        }

        .quick-action:hover {
            border-color: #17104f;
            transform: translateY(-2px);
        }

        .quick-action strong {
            display: block;
            color: #17104f;
            margin-bottom: 5px;
        }

        .quick-action span {
            color: #777;
            font-size: 13px;
        }


        /* =========================================================
           DASHBOARD CARDS
        ========================================================= */

        .cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 25px;
        }

        .card {
            background: white;
            padding: 22px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
        }

        .card h3 {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }

        .card .number {
            font-size: 28px;
            font-weight: bold;
            color: #17104f;
        }


        /* =========================================================
           TABLE
        ========================================================= */

        .table-box {
            background: white;
            border-radius: 12px;
            padding: 20px;
            overflow-x: auto;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
            margin-bottom: 20px;
        }

        .table-box h3 {
            color: #17104f;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 13px 10px;
            border-bottom: 1px solid #eee;
            text-align: left;
            font-size: 14px;
        }

        th {
            background: #f7f7fb;
            color: #17104f;
        }


        /* =========================================================
           BUTTONS
        ========================================================= */

        .btn {
            border: none;
            padding: 9px 14px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 13px;
            margin: 2px;
        }

        .btn-primary {
            background: #17104f;
            color: white;
        }

        .btn-primary:hover {
            background: #302777;
        }

        .btn-success {
            background: #198754;
            color: white;
        }

        .btn-warning {
            background: #f0ad4e;
            color: white;
        }

        .btn-danger {
            background: #dc3545;
            color: white;
        }

        .btn-secondary {
            background: #6c757d;
            color: white;
        }

        .btn-light {
            background: #eeeeF5;
            color: #17104f;
        }

        .btn-large {
            padding: 12px 18px;
            font-size: 14px;
        }


        /* =========================================================
           SECTION HEADER
        ========================================================= */

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 18px;
        }

        .section-header h3 {
            color: #17104f;
            font-size: 19px;
        }

        .section-header p {
            color: #777;
            font-size: 13px;
            margin-top: 4px;
        }


        /* =========================================================
           FORMS
        ========================================================= */

        .form-box {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
            margin-bottom: 20px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        .form-group label {
            margin-bottom: 7px;
            font-weight: bold;
            font-size: 14px;
            color: #333;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            padding: 11px;
            border: 1px solid #ddd;
            border-radius: 6px;
            outline: none;
            font-size: 14px;
            background: white;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: #17104f;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }


        /* =========================================================
           TIME SELECTOR
        ========================================================= */

        .time-selector {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .time-selector select {
            min-width: 85px;
            padding: 11px;
            border: 1px solid #ddd;
            border-radius: 6px;
            background: white;
            font-size: 14px;
            cursor: pointer;
        }

        .time-selector .time-colon {
            font-size: 20px;
            font-weight: bold;
            color: #17104f;
        }

        .time-selector .ampm-select {
            min-width: 80px;
        }


        /* =========================================================
           SKILLS
        ========================================================= */

        .skills-container {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 12px;
            background: white;
        }

        .selected-skills {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 12px;
            min-height: 5px;
        }

        .skill-chip {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: #17104f;
            color: white;
            padding: 7px 10px;
            border-radius: 18px;
            font-size: 12px;
        }

        .skill-chip .remove-skill {
            border: none;
            background: transparent;
            color: white;
            cursor: pointer;
            font-size: 16px;
            line-height: 12px;
            padding: 0;
        }

        .skill-options {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .skill-option {
            border: 1px solid #d6d6df;
            background: #f7f7fb;
            color: #17104f;
            padding: 8px 11px;
            border-radius: 18px;
            cursor: pointer;
            font-size: 12px;
        }

        .skill-option:hover {
            background: #e9e7ff;
        }

        .skill-option.selected {
            display: none;
        }

        .view-more-skills {
            margin-top: 12px;
            border: none;
            background: transparent;
            color: #17104f;
            font-weight: bold;
            cursor: pointer;
            font-size: 13px;
            padding: 0;
        }

        .more-skills {
            display: none;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 8px;
        }

        .more-skills.show {
            display: flex;
        }


        /* =========================================================
           PROFILE
        ========================================================= */

        .profile-header {
            background: white;
            padding: 25px;
            border-radius: 12px;
            display: flex;
            gap: 20px;
            align-items: center;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
        }

        .company-logo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #17104f;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            font-weight: bold;
        }

        .profile-info h2 {
            color: #17104f;
            margin-bottom: 7px;
        }

        .profile-info p {
            color: #666;
            margin-bottom: 4px;
            font-size: 14px;
        }


        /* =========================================================
           FILTERS
        ========================================================= */

        .filter-box {
            background: white;
            padding: 18px;
            border-radius: 10px;
            margin-bottom: 18px;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .filter-box input,
        .filter-box select {
            padding: 11px;
            border: 1px solid #ddd;
            border-radius: 6px;
            min-width: 180px;
        }


        /* =========================================================
           JOB / DRIVE CARDS
        ========================================================= */

        .item-card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
            margin-bottom: 15px;
        }

        .item-card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 12px;
        }

        .item-card h3 {
            color: #17104f;
            margin-bottom: 5px;
        }

        .item-card p {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }

        .item-details {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-top: 15px;
        }

        .detail-box {
            background: #f7f7fb;
            padding: 12px;
            border-radius: 7px;
        }

        .detail-box strong {
            display: block;
            color: #17104f;
            font-size: 12px;
            margin-bottom: 4px;
        }

        .detail-box span {
            font-size: 13px;
            color: #555;
        }


        /* =========================================================
           NOTIFICATIONS
        ========================================================= */

        .notification {
            background: white;
            padding: 18px;
            border-radius: 10px;
            margin-bottom: 12px;
            border-left: 4px solid #17104f;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }

        .notification strong {
            color: #17104f;
        }

        .notification p {
            margin-top: 6px;
            margin-bottom: 5px;
        }

        .notification small {
            color: #777;
        }


        /* =========================================================
           BADGES
        ========================================================= */

        .badge {
            padding: 5px 9px;
            border-radius: 15px;
            font-size: 11px;
            display: inline-block;
        }

        .badge-success {
            background: #d1e7dd;
            color: #0f5132;
        }

        .badge-warning {
            background: #fff3cd;
            color: #664d03;
        }

        .badge-danger {
            background: #f8d7da;
            color: #842029;
        }

        .badge-info {
            background: #cff4fc;
            color: #055160;
        }


        /* =========================================================
           SETTINGS
        ========================================================= */

        .settings-section {
            border-bottom: 1px solid #eee;
            padding-bottom: 25px;
            margin-bottom: 25px;
        }

        .settings-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .settings-section h3 {
            color: #17104f;
            margin-bottom: 6px;
        }

        .settings-section p {
            color: #777;
            font-size: 13px;
            margin-bottom: 18px;
        }

        .checkbox-row {
            display: block;
            margin-bottom: 15px;
            color: #444;
            font-size: 14px;
        }

        .checkbox-row input {
            margin-right: 8px;
        }


        /* =========================================================
           HIDDEN FORMS
        ========================================================= */

        .hidden-form {
            display: none;
        }

        .hidden-form.show {
            display: block;
        }


        /* =========================================================
           SHORTLISTED STUDENTS
        ========================================================= */

        .shortlisted-section {
            display: none;
            margin-top: 20px;
        }

        .shortlisted-section.show {
            display: block;
        }

        .shortlisted-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 18px;
        }

        .shortlisted-header h3 {
            color: #17104f;
            font-size: 19px;
        }

        .shortlisted-header p {
            color: #777;
            font-size: 13px;
            margin-top: 4px;
        }


        /* =========================================================
           RESUME MODAL
        ========================================================= */

        .resume-modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.65);
            z-index: 2000;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .resume-modal.show {
            display: flex;
        }

        .resume-content {
            background: white;
            width: 90%;
            max-width: 900px;
            height: 90vh;
            border-radius: 12px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .resume-header {
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
        }

        .resume-header h3 {
            color: #17104f;
        }

        .resume-body {
            flex: 1;
            background: #eee;
        }

        .resume-body iframe {
            width: 100%;
            height: 100%;
            border: none;
        }


        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media(max-width: 1100px) {

            .cards {
                grid-template-columns: repeat(2, 1fr);
            }

            .quick-actions {
                grid-template-columns: repeat(2, 1fr);
            }

            .item-details {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media(max-width: 800px) {

            .sidebar {
                width: 220px;
            }

            .main {
                margin-left: 220px;
                width: calc(100% - 220px);
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: auto;
            }

            .item-details {
                grid-template-columns: 1fr;
            }

            .quick-actions {
                grid-template-columns: 1fr;
            }
        }

        @media(max-width: 600px) {

            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .main {
                margin-left: 0;
                width: 100%;
                padding: 15px;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .topbar {
                padding: 16px;
            }

            .topbar h1 {
                font-size: 20px;
            }

            .section-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .profile-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .resume-content {
                width: 100%;
                height: 85vh;
            }

            .time-selector {
                width: 100%;
            }

            .time-selector select {
                flex: 1;
            }
        }

    </style>

</head>

<body>


<!-- =========================================================
     SIDEBAR
========================================================= -->

<div class="sidebar">

    <div class="logo">

        <h2>
            K D <span>Polytechnic</span>
        </h2>

        <p>
            TRAINING & PLACEMENT PORTAL
        </p>

    </div>


    <ul class="menu">

        <li>
            <button onclick="showPage('dashboard', this)" class="active">
                🏠 Dashboard
            </button>
        </li>

        <li>
            <button onclick="showPage('profile', this)">
                👤 Company Profile
            </button>
        </li>

        <li>
            <button onclick="showPage('post-job', this)">
                ➕ Post New Job
            </button>
        </li>

        <li>
            <button onclick="showPage('applications', this)">
                📋 All Applications
            </button>
        </li>

        <li>
            <button onclick="showPage('drives', this)">
                📅 Upcoming Drives
            </button>
        </li>

        <li>
            <button onclick="showPage('interviews', this)">
                🕐 Schedule Interview
            </button>
        </li>

        <li>
            <button onclick="showPage('notifications', this)">
                🔔 Notifications
            </button>
        </li>

        <li>
            <button onclick="showPage('settings', this)">
                ⚙ Settings
            </button>
        </li>

        <li>
            <button class="logout" onclick="logoutCompany()">
                🚪 Logout
            </button>
        </li>

    </ul>

</div>


<!-- =========================================================
     MAIN
========================================================= -->

<div class="main">


    <!-- =========================================================
         TOPBAR
    ========================================================= -->

    <div class="topbar">

        <h1 id="topTitle">
            Company Dashboard
        </h1>

    </div>


    <!-- =========================================================
         DASHBOARD
    ========================================================= -->

    <section id="dashboard" class="page active">

        <div class="dashboard-banner">

            <h2>
                Welcome to Company Dashboard
            </h2>

            <p>
                Manage jobs, student applications and placement activities from one place.
            </p>

        </div>


        <div class="quick-actions">

            <div
                class="quick-action"
                onclick="showPage('post-job')">

                <strong>
                    ➕ Post New Job
                </strong>

                <span>
                    Create a new job opportunity.
                </span>

            </div>


            <div
                class="quick-action"
                onclick="showPage('applications')">

                <strong>
                    📋 View Applications
                </strong>

                <span>
                    Review student applications.
                </span>

            </div>


            <div
                class="quick-action"
                onclick="showPage('drives')">

                <strong>
                    📅 Placement Drives
                </strong>

                <span>
                    Manage your placement drives.
                </span>

            </div>

        </div>


        <div class="cards">

            <div class="card">

                <h3>
                    Active Jobs
                </h3>

                <div class="number">
                    4
                </div>

            </div>


            <div class="card">

                <h3>
                    Applications
                </h3>

                <div class="number">
                    36
                </div>

            </div>


            <div class="card">

                <h3>
                    Shortlisted
                </h3>

                <div class="number">
                    8
                </div>

            </div>


            <div class="card">

                <h3>
                    Selected
                </h3>

                <div class="number">
                    3
                </div>

            </div>

        </div>


        <div class="item-card">

            <div class="item-card-header">

                <div>

                    <h3>
                        Software Engineer
                    </h3>

                    <p>
                        TCS Campus Recruitment
                    </p>

                </div>

                <span class="badge badge-success">
                    Active
                </span>

            </div>


            <div class="item-details">

                <div class="detail-box">

                    <strong>
                        Minimum CPI
                    </strong>

                    <span>
                        6.5
                    </span>

                </div>


                <div class="detail-box">

                    <strong>
                        Package
                    </strong>

                    <span>
                        ₹4.5 LPA
                    </span>

                </div>


                <div class="detail-box">

                    <strong>
                        Applications
                    </strong>

                    <span>
                        36
                    </span>

                </div>


                <div class="detail-box">

                    <strong>
                        Last Date
                    </strong>

                    <span>
                        05 Sep 2026
                    </span>

                </div>


                <div class="detail-box">

                    <strong>
                        Skills
                    </strong>

                    <span>
                        HTML, CSS, JavaScript
                    </span>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================================
         COMPANY PROFILE
    ========================================================= -->

    <section id="profile" class="page">

        <div class="page-intro">

            <p>
                View and manage your company information.
            </p>

        </div>


        <div class="profile-header">

            <div class="company-logo">
                T
            </div>

            <div class="profile-info">

                <h2>
                    TCS
                </h2>

                <p>
                    Tata Consultancy Services
                </p>

                <p>
                    📧 hr@tcs.com
                </p>

                <p>
                    📞 9876543210
                </p>

            </div>

        </div>


        <div class="form-box">

            <div class="form-grid">

                <div class="form-group">

                    <label>
                        Company Name
                    </label>

                    <input
                        type="text"
                        value="TCS">

                </div>


                <div class="form-group">

                    <label>
                        Company Email
                    </label>

                    <input
                        type="email"
                        value="hr@tcs.com">

                </div>


                <div class="form-group">

                    <label>
                        Contact Number
                    </label>

                    <input
                        type="text"
                        value="9876543210">

                </div>


                <div class="form-group">

                    <label>
                        Website
                    </label>

                    <input
                        type="text"
                        value="www.tcs.com">

                </div>


                <div class="form-group full">

                    <label>
                        Company Description
                    </label>

                    <textarea>Leading technology and consulting company offering career opportunities for students.</textarea>

                </div>

            </div>


            <br>

            <button
                class="btn btn-primary"
                onclick="saveMessage()">

                Save Profile

            </button>

        </div>

    </section>


    <!-- =========================================================
         POST NEW JOB
    ========================================================= -->

    <section id="post-job" class="page">

        <div class="page-intro">

            <p>
                Create and publish a new job opportunity for students.
            </p>

        </div>


        <div class="form-box">

            <div class="form-grid">

                <div class="form-group">

                    <label>
                        Job Title
                    </label>

                    <input
                        type="text"
                        id="jobTitle"
                        placeholder="Software Engineer">

                </div>


                <div class="form-group">

                    <label>
                        Job Type
                    </label>

                    <select id="jobType">

                        <option value="">
                            Select Job Type
                        </option>

                        <option>
                            Full Time
                        </option>

                        <option>
                            Internship
                        </option>

                        <option>
                            Apprenticeship
                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label>
                        Eligible Course
                    </label>

                    <select id="jobCourse">

                        <option value="">
                            Select Course
                        </option>

                        <option>
                            Computer Engineering
                        </option>

                        <option>
                            IT Engineering
                        </option>

                        <option>
                            Mechanical Engineering
                        </option>

                        <option>
                            Civil Engineering
                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label>
                        Minimum CPI
                    </label>

                    <input
                        type="number"
                        id="jobCpi"
                        step="0.1"
                        placeholder="6.5">

                </div>


                <div class="form-group">

                    <label>
                        Salary / Package
                    </label>

                    <input
                        type="text"
                        id="jobSalary"
                        placeholder="₹4.5 LPA">

                </div>


                <div class="form-group">

                    <label>
                        Last Date
                    </label>

                    <input
                        type="date"
                        id="jobLastDate">

                </div>


                <div class="form-group full">

                    <label>
                        Required Skills
                    </label>


                    <div class="skills-container">

                        <div
                            id="selectedSkills"
                            class="selected-skills">
                        </div>


                        <div class="skill-options">

                            <button
                                type="button"
                                class="skill-option"
                                data-skill="HTML"
                                onclick="selectSkill(this)">
                                HTML
                            </button>

                            <button
                                type="button"
                                class="skill-option"
                                data-skill="CSS"
                                onclick="selectSkill(this)">
                                CSS
                            </button>

                            <button
                                type="button"
                                class="skill-option"
                                data-skill="JavaScript"
                                onclick="selectSkill(this)">
                                JavaScript
                            </button>

                            <button
                                type="button"
                                class="skill-option"
                                data-skill="PHP"
                                onclick="selectSkill(this)">
                                PHP
                            </button>

                            <button
                                type="button"
                                class="skill-option"
                                data-skill="Java"
                                onclick="selectSkill(this)">
                                Java
                            </button>

                        </div>


                        <button
                            type="button"
                            id="viewMoreSkillsButton"
                            class="view-more-skills"
                            onclick="toggleMoreSkills()">

                            View More Skills

                        </button>


                        <div
                            id="moreSkills"
                            class="more-skills">

                            <button
                                type="button"
                                class="skill-option"
                                data-skill="Python"
                                onclick="selectSkill(this)">
                                Python
                            </button>

                            <button
                                type="button"
                                class="skill-option"
                                data-skill="SQL"
                                onclick="selectSkill(this)">
                                SQL
                            </button>

                            <button
                                type="button"
                                class="skill-option"
                                data-skill="MySQL"
                                onclick="selectSkill(this)">
                                MySQL
                            </button>

                            <button
                                type="button"
                                class="skill-option"
                                data-skill="React"
                                onclick="selectSkill(this)">
                                React
                            </button>

                            <button
                                type="button"
                                class="skill-option"
                                data-skill="Laravel"
                                onclick="selectSkill(this)">
                                Laravel
                            </button>

                        </div>

                    </div>

                </div>


                <div class="form-group full">

                    <label>
                        Job Description
                    </label>

                    <textarea
                        id="jobDescription"
                        placeholder="Enter job description..."></textarea>

                </div>

            </div>


            <br>

            <button
                class="btn btn-primary"
                onclick="postJob()">

                Post Job

            </button>

        </div>

    </section>


    <!-- =========================================================
         ALL APPLICATIONS
    ========================================================= -->

    <section id="applications" class="page">

        <div class="page-intro">

            <p>
                View and review all student applications received for your job opportunities.
            </p>

        </div>


        <div class="filter-box">

            <input
                type="text"
                id="applicationSearch"
                placeholder="Search student name..."
                onkeyup="filterApplications()">


            <select
                id="courseFilter"
                onchange="filterApplications()">

                <option value="">
                    All Courses
                </option>

                <option value="Computer Engineering">
                    Computer Engineering
                </option>

                <option value="IT Engineering">
                    IT Engineering
                </option>

                <option value="Mechanical Engineering">
                    Mechanical Engineering
                </option>

                <option value="Civil Engineering">
                    Civil Engineering
                </option>

            </select>


            <select
                id="statusFilter"
                onchange="filterApplications()">

                <option value="">
                    All Status
                </option>

                <option value="New">
                    New
                </option>

                <option value="Under Review">
                    Under Review
                </option>

                <option value="Shortlisted">
                    Shortlisted
                </option>

                <option value="Rejected">
                    Rejected
                </option>

            </select>


            <button
                class="btn btn-secondary"
                onclick="clearFilters()">

                Clear Filters

            </button>


            <button
                class="btn btn-primary"
                onclick="showShortlistedStudents()">

                ⭐ Shortlisted Students

            </button>

        </div>


        <!-- =====================================================
             ALL APPLICATIONS TABLE
        ===================================================== -->

        <div
            id="allApplicationsSection"
            class="table-box">

            <h3>
                Student Applications
            </h3>


            <table id="applicationsTable">

                <thead>

                    <tr>

                        <th>Name</th>
                        <th>Enrollment No.</th>
                        <th>Course</th>
                        <th>Job</th>
                        <th>CPI</th>
                        <th>Skills</th>
                        <th>LinkedIn</th>
                        <th>Resume</th>
                        <th>Status</th>

                    </tr>

                </thead>


                <tbody>

                    <tr
                        data-course="Computer Engineering"
                        data-status="Under Review">

                        <td class="student-name">
                            Rahul Patel
                        </td>

                        <td>
                            CE12345
                        </td>

                        <td>
                            Computer Engineering
                        </td>

                        <td>
                            Software Engineer
                        </td>

                        <td>
                            8.2
                        </td>

                        <td>
                            Java, PHP, SQL
                        </td>

                        <td>

                            <a
                                href="https://www.linkedin.com/"
                                target="_blank">

                                View

                            </a>

                        </td>

                        <td>

                            <button
                                class="btn btn-light"
                                onclick="viewResume('Rahul Patel')">

                                View PDF

                            </button>

                        </td>

                        <td>

                            <span class="badge badge-warning">
                                Under Review
                            </span>

                        </td>

                    </tr>


                    <tr
                        data-course="IT Engineering"
                        data-status="Shortlisted">

                        <td class="student-name">
                            Priya Shah
                        </td>

                        <td>
                            IT22341
                        </td>

                        <td>
                            IT Engineering
                        </td>

                        <td>
                            Web Developer
                        </td>

                        <td>
                            8.7
                        </td>

                        <td>
                            HTML, CSS, JavaScript
                        </td>

                        <td>

                            <a
                                href="https://www.linkedin.com/"
                                target="_blank">

                                View

                            </a>

                        </td>

                        <td>

                            <button
                                class="btn btn-light"
                                onclick="viewResume('Priya Shah')">

                                View PDF

                            </button>

                        </td>

                        <td>

                            <span class="badge badge-success">
                                Shortlisted
                            </span>

                        </td>

                    </tr>


                    <tr
                        data-course="Computer Engineering"
                        data-status="New">

                        <td class="student-name">
                            Amit Desai
                        </td>

                        <td>
                            CE34567
                        </td>

                        <td>
                            Computer Engineering
                        </td>

                        <td>
                            Data Analyst
                        </td>

                        <td>
                            7.9
                        </td>

                        <td>
                            Python, SQL, Excel
                        </td>

                        <td>

                            <a
                                href="https://www.linkedin.com/"
                                target="_blank">

                                View

                            </a>

                        </td>

                        <td>

                            <button
                                class="btn btn-light"
                                onclick="viewResume('Amit Desai')">

                                View PDF

                            </button>

                        </td>

                        <td>

                            <span class="badge badge-info">
                                New
                            </span>

                        </td>

                    </tr>


                    <tr
                        data-course="Mechanical Engineering"
                        data-status="Rejected">

                        <td class="student-name">
                            Karan Mehta
                        </td>

                        <td>
                            ME44521
                        </td>

                        <td>
                            Mechanical Engineering
                        </td>

                        <td>
                            Graduate Engineer
                        </td>

                        <td>
                            6.9
                        </td>

                        <td>
                            AutoCAD, Design
                        </td>

                        <td>

                            <a
                                href="https://www.linkedin.com/"
                                target="_blank">

                                View

                            </a>

                        </td>

                        <td>

                            <button
                                class="btn btn-light"
                                onclick="viewResume('Karan Mehta')">

                                View PDF

                            </button>

                        </td>

                        <td>

                            <span class="badge badge-danger">
                                Rejected
                            </span>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>


        <!-- =====================================================
             SHORTLISTED STUDENTS
        ===================================================== -->

        <div
            id="shortlistedSection"
            class="shortlisted-section">

            <div class="shortlisted-header">

                <div>

                    <h3>
                        Shortlisted Students
                    </h3>

                    <p>
                        Manage students who have been shortlisted for further selection.
                    </p>

                </div>


                <button
                    class="btn btn-secondary"
                    onclick="hideShortlistedStudents()">

                    ← Back to All Applications

                </button>

            </div>


            <div class="table-box">

                <table id="shortlistedTable">

                    <thead>

                        <tr>

                            <th>Name</th>
                            <th>Enrollment No.</th>
                            <th>Course</th>
                            <th>Job</th>
                            <th>CPI</th>
                            <th>Skills</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>

                    </thead>


                    <tbody>

                        <tr
                            data-shortlisted-status="Shortlisted">

                            <td>
                                Priya Shah
                            </td>

                            <td>
                                IT22341
                            </td>

                            <td>
                                IT Engineering
                            </td>

                            <td>
                                Web Developer
                            </td>

                            <td>
                                8.7
                            </td>

                            <td>
                                HTML, CSS, JavaScript
                            </td>

                            <td class="shortlisted-status">

                                <span class="badge badge-success">
                                    Shortlisted
                                </span>

                            </td>

                            <td>

                                <button
                                    class="btn btn-warning"
                                    onclick="promoteStudent(this)">

                                    Promote

                                </button>


                                <button
                                    class="btn btn-success"
                                    onclick="selectStudent(this)">

                                    Select

                                </button>


                                <button
                                    class="btn btn-danger"
                                    onclick="rejectStudent(this)">

                                    Reject

                                </button>

                            </td>

                        </tr>


                        <tr
                            data-shortlisted-status="Shortlisted">

                            <td>
                                Neha Patel
                            </td>

                            <td>
                                CE45678
                            </td>

                            <td>
                                Computer Engineering
                            </td>

                            <td>
                                Software Engineer
                            </td>

                            <td>
                                8.5
                            </td>

                            <td>
                                Java, SQL, Python
                            </td>

                            <td class="shortlisted-status">

                                <span class="badge badge-success">
                                    Shortlisted
                                </span>

                            </td>

                            <td>

                                <button
                                    class="btn btn-warning"
                                    onclick="promoteStudent(this)">

                                    Promote

                                </button>


                                <button
                                    class="btn btn-success"
                                    onclick="selectStudent(this)">

                                    Select

                                </button>


                                <button
                                    class="btn btn-danger"
                                    onclick="rejectStudent(this)">

                                    Reject

                                </button>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </section>


    <!-- =========================================================
         UPCOMING DRIVES
    ========================================================= -->

    <section id="drives" class="page">

        <div class="page-intro">

            <p>
                Manage your existing campus placement drives and add new drives.
            </p>

        </div>


        <div class="section-header">

            <div>

                <h3>
                    Existing Placement Drives
                </h3>

                <p>
                    Drives already scheduled by your company.
                </p>

            </div>


            <button
                id="driveToggleButton"
                class="btn btn-primary btn-large"
                onclick="toggleDriveForm()">

                ➕ Add New Drive

            </button>

        </div>


        <div
            id="newDriveForm"
            class="form-box hidden-form">

            <div class="section-header">

                <div>

                    <h3>
                        Add New Placement Drive
                    </h3>

                    <p>
                        Enter the details of the new campus drive.
                    </p>

                </div>


                <button
                    class="btn btn-secondary"
                    onclick="toggleDriveForm()">

                    Close

                </button>

            </div>


            <div class="form-grid">

                <div class="form-group">

                    <label>
                        Drive Name
                    </label>

                    <input
                        id="driveName"
                        type="text"
                        placeholder="TCS Campus Drive">

                </div>


                <div class="form-group">

                    <label>
                        Date
                    </label>

                    <input
                        id="driveDate"
                        type="date">

                </div>


                <div class="form-group">

                    <label>
                        Time
                    </label>

                    <div class="time-selector">

                        <select id="driveHour">

                            <option value="">
                                Hour
                            </option>

                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                            <option>05</option>
                            <option>06</option>
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>

                        </select>

                        <span class="time-colon">
                            :
                        </span>

                        <select id="driveMinute">

                            <option value="">
                                Min
                            </option>

                            <option>00</option>
                            <option>05</option>
                            <option>10</option>
                            <option>15</option>
                            <option>20</option>
                            <option>25</option>
                            <option>30</option>
                            <option>35</option>
                            <option>40</option>
                            <option>45</option>
                            <option>50</option>
                            <option>55</option>

                        </select>

                        <select
                            id="driveAmPm"
                            class="ampm-select">

                            <option value="">
                                AM/PM
                            </option>

                            <option>
                                AM
                            </option>

                            <option>
                                PM
                            </option>

                        </select>

                    </div>

                </div>


                <div class="form-group">

                    <label>
                        Venue
                    </label>

                    <input
                        id="driveVenue"
                        type="text"
                        placeholder="Seminar Hall">

                </div>


                <div class="form-group">

                    <label>
                        Organizer
                    </label>

                    <input
                        id="driveOrganizer"
                        type="text"
                        placeholder="Placement Officer">

                </div>


                <div class="form-group">

                    <label>
                        Eligible Course
                    </label>

                    <select id="driveCourse">

                        <option value="">
                            Select Course
                        </option>

                        <option>
                            Computer Engineering
                        </option>

                        <option>
                            IT Engineering
                        </option>

                        <option>
                            Mechanical Engineering
                        </option>

                        <option>
                            Electrical Engineering
                        </option>

                        <option>
                            Civil Engineering
                        </option>

                        <option>
                            All Courses
                        </option>

                    </select>

                </div>

            </div>


            <br>

            <button
                class="btn btn-primary"
                onclick="addDrive()">

                Add Drive

            </button>

        </div>


        <div
            id="addedDrives"
            class="table-box"
            style="margin-top:20px;">

            <h3>
                Added Drives
            </h3>


            <table id="driveTable">

                <thead>

                    <tr>

                        <th>Drive</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Venue</th>
                        <th>Organizer</th>
                        <th>Course</th>
                        <th>Action</th>

                    </tr>

                </thead>


                <tbody>
                </tbody>

            </table>

        </div>

    </section>


    <!-- =========================================================
         SCHEDULE INTERVIEW
    ========================================================= -->

    <section id="interviews" class="page">

        <div class="page-intro">

            <p>
                Schedule interviews for specific shortlisted students.
            </p>

        </div>


        <div class="form-box">

            <div class="form-grid">

                <div class="form-group">

                    <label>
                        Student Name
                    </label>

                    <input
                        type="text"
                        id="interviewStudent"
                        placeholder="Enter student name">

                </div>


                <div class="form-group">

                    <label>
                        Interview Type
                    </label>

                    <select id="interviewType">

                        <option>
                            Technical Round
                        </option>

                        <option>
                            HR Round
                        </option>

                        <option>
                            Final Round
                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label>
                        Date
                    </label>

                    <input
                        id="interviewDate"
                        type="date">

                </div>


                <div class="form-group">

                    <label>
                        Time
                    </label>

                    <div class="time-selector">

                        <select id="interviewHour">

                            <option value="">
                                Hour
                            </option>

                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                            <option>05</option>
                            <option>06</option>
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>

                        </select>

                        <span class="time-colon">
                            :
                        </span>

                        <select id="interviewMinute">

                            <option value="">
                                Min
                            </option>

                            <option>00</option>
                            <option>05</option>
                            <option>10</option>
                            <option>15</option>
                            <option>20</option>
                            <option>25</option>
                            <option>30</option>
                            <option>35</option>
                            <option>40</option>
                            <option>45</option>
                            <option>50</option>
                            <option>55</option>

                        </select>

                        <select
                            id="interviewAmPm"
                            class="ampm-select">

                            <option value="">
                                AM/PM
                            </option>

                            <option>
                                AM
                            </option>

                            <option>
                                PM
                            </option>

                        </select>

                    </div>

                </div>


                <div class="form-group">

                    <label>
                        Mode
                    </label>

                    <select id="interviewMode">

                        <option>
                            Online
                        </option>

                        <option>
                            Offline
                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label>
                        Interview Location / Link
                    </label>

                    <input
                        id="interviewLocation"
                        type="text"
                        placeholder="Meeting link or location">

                </div>


                <div class="form-group full">

                    <label>
                        Additional Instructions
                    </label>

                    <textarea
                        id="interviewInstructions"
                        placeholder="Enter interview instructions..."></textarea>

                </div>

            </div>


            <br>

            <button
                class="btn btn-primary"
                onclick="scheduleInterview()">

                Schedule Interview

            </button>

        </div>

    </section>


    <!-- =========================================================
         NOTIFICATIONS
    ========================================================= -->

    <section id="notifications" class="page">

        <div class="page-intro">

            <p>
                Recruitment related updates and alerts.
            </p>

        </div>


        <div class="section-header">

            <div>

                <h3>
                    Existing Notifications
                </h3>

                <p>
                    Your recent recruitment notifications.
                </p>

            </div>

        </div>


        <div id="notificationList">

            <div class="notification">

                <strong>
                    New Application Received
                </strong>

                <p>
                    Rahul Patel has applied for Software Engineer.
                </p>

                <small>
                    Today, 10:30 AM
                </small>

            </div>


            <div class="notification">

                <strong>
                    Interview Reminder
                </strong>

                <p>
                    Technical interview with Priya Shah is scheduled tomorrow.
                </p>

                <small>
                    Yesterday
                </small>

            </div>


            <div class="notification">

                <strong>
                    Placement Drive Approved
                </strong>

                <p>
                    Your upcoming campus drive has been approved.
                </p>

                <small>
                    2 days ago
                </small>

            </div>

        </div>


        <div class="form-box">

            <div class="section-header">

                <div>

                    <h3>
                        Add Notification
                    </h3>

                    <p>
                        Company can add recruitment related notifications.
                    </p>

                </div>

            </div>


            <div class="form-grid">

                <div class="form-group">

                    <label>
                        Notification Title
                    </label>

                    <input
                        type="text"
                        id="notificationTitle"
                        placeholder="Enter notification title">

                </div>


                <div class="form-group">

                    <label>
                        Notification Type
                    </label>

                    <select id="notificationType">

                        <option>
                            General Update
                        </option>

                        <option>
                            New Job
                        </option>

                        <option>
                            Interview
                        </option>

                        <option>
                            Placement Drive
                        </option>

                        <option>
                            Important Notice
                        </option>

                    </select>

                </div>


                <div class="form-group full">

                    <label>
                        Notification Message
                    </label>

                    <textarea
                        id="notificationMessage"
                        placeholder="Write notification message..."></textarea>

                </div>

            </div>


            <br>

            <button
                class="btn btn-primary"
                onclick="addNotification()">

                Add Notification

            </button>

        </div>

    </section>


    <!-- =========================================================
         SETTINGS
    ========================================================= -->

    <section id="settings" class="page">

        <div class="page-intro">

            <p>
                Manage your company account and dashboard preferences.
            </p>

        </div>


        <div class="form-box">


            <!-- ACCOUNT INFORMATION -->

            <div class="settings-section">

                <h3>
                    Account Information
                </h3>

                <p>
                    Manage the basic information connected with your company account.
                </p>


                <div class="form-grid">

                    <div class="form-group">

                        <label>
                            Company Email
                        </label>

                        <input
                            type="email"
                            value="hr@tcs.com">

                    </div>


                    <div class="form-group">

                        <label>
                            Contact Number
                        </label>

                        <input
                            type="text"
                            value="9876543210">

                    </div>

                </div>

            </div>


            <!-- NOTIFICATION PREFERENCES -->

            <div class="settings-section">

                <h3>
                    Notification Preferences
                </h3>

                <p>
                    Choose which recruitment notifications you want to receive.
                </p>


                <label class="checkbox-row">

                    <input
                        type="checkbox"
                        checked>

                    New application notifications

                </label>


                <label class="checkbox-row">

                    <input
                        type="checkbox"
                        checked>

                    Interview reminders

                </label>


                <label class="checkbox-row">

                    <input
                        type="checkbox"
                        checked>

                    Placement drive updates

                </label>


                <label class="checkbox-row">

                    <input
                        type="checkbox">

                    Marketing and promotional emails

                </label>

            </div>


            <!-- APPLICATION PREFERENCES -->

            <div class="settings-section">

                <h3>
                    Application Preferences
                </h3>

                <p>
                    Manage how student applications are handled.
                </p>


                <label class="checkbox-row">

                    <input
                        type="checkbox"
                        checked>

                    Allow students to apply to multiple jobs

                </label>


                <label class="checkbox-row">

                    <input
                        type="checkbox"
                        checked>

                    Show student LinkedIn profiles

                </label>


                <label class="checkbox-row">

                    <input
                        type="checkbox"
                        checked>

                    Allow resume viewing

                </label>

            </div>

        </div>

    </section>


</div>


<!-- =========================================================
     RESUME PDF MODAL
========================================================= -->

<div
    id="resumeModal"
    class="resume-modal">

    <div class="resume-content">

        <div class="resume-header">

            <h3 id="resumeStudentName">
                Student Resume
            </h3>

            <button
                class="btn btn-danger"
                onclick="closeResume()">

                Close

            </button>

        </div>


        <div class="resume-body">

            <iframe
                id="resumeFrame"
                title="Student Resume">
            </iframe>

        </div>

    </div>

</div>


<!-- =========================================================
     JAVASCRIPT
========================================================= -->

<script>


/* =========================================================
   PAGE NAVIGATION
========================================================= */

function showPage(pageId, button = null) {

    const pages =
        document.querySelectorAll('.page');


    pages.forEach(function(page) {

        page.classList.remove('active');

    });


    const selectedPage =
        document.getElementById(pageId);


    if (selectedPage) {

        selectedPage.classList.add('active');

    }


    const buttons =
        document.querySelectorAll('.menu button');


    buttons.forEach(function(btn) {

        btn.classList.remove('active');

    });


    if (button) {

        button.classList.add('active');

    } else {

        buttons.forEach(function(btn) {

            const clickText =
                btn.getAttribute('onclick');


            if (
                clickText &&
                clickText.includes("'" + pageId + "'")
            ) {

                btn.classList.add('active');

            }

        });

    }


    const titles = {

        dashboard:
            'Company Dashboard',

        profile:
            'Company Profile',

        'post-job':
            'Post New Job',

        applications:
            'All Applications',

        drives:
            'Upcoming Drives',

        interviews:
            'Schedule Interview',

        notifications:
            'Notifications',

        settings:
            'Settings'

    };


    document.getElementById('topTitle').innerText =
        titles[pageId] || 'Company Dashboard';

}


/* =========================================================
   POST JOB FORM TOGGLE
========================================================= */

function toggleJobForm() {

    const form =
        document.getElementById('newJobForm');

    const button =
        document.getElementById('jobToggleButton');


    if (!form || !button) {
        return;
    }


    form.classList.toggle('show');


    if (form.classList.contains('show')) {

        button.innerHTML =
            '✖ Close Post Job';

    } else {

        button.innerHTML =
            '➕ Post New Job';

    }

}


/* =========================================================
   SKILLS
========================================================= */

function selectSkill(button) {

    const skill =
        button.getAttribute('data-skill');


    const selectedContainer =
        document.getElementById('selectedSkills');


    const alreadySelected =
        document.querySelector(
            '.skill-option[data-skill="' +
            skill +
            '"].selected'
        );


    if (alreadySelected) {
        return;
    }


    button.classList.add('selected');


    const chip =
        document.createElement('div');


    chip.className =
        'skill-chip';


    chip.setAttribute(
        'data-selected-skill',
        skill
    );


    chip.innerHTML = `

        <span>
            ${skill}
        </span>

        <button
            type="button"
            class="remove-skill"
            onclick="removeSkill('${skill}')">

            ×

        </button>

    `;


    selectedContainer.appendChild(chip);

}


function removeSkill(skill) {

    const chip =
        document.querySelector(
            '.skill-chip[data-selected-skill="' +
            skill +
            '"]'
        );


    if (chip) {
        chip.remove();
    }


    const option =
        document.querySelector(
            '.skill-option[data-skill="' +
            skill +
            '"]'
        );


    if (option) {

        option.classList.remove('selected');

    }

}


function toggleMoreSkills() {

    const moreSkills =
        document.getElementById('moreSkills');


    const button =
        document.getElementById(
            'viewMoreSkillsButton'
        );


    moreSkills.classList.toggle('show');


    if (moreSkills.classList.contains('show')) {

        button.innerText =
            'View Less Skills';

    } else {

        button.innerText =
            'View More Skills';

    }

}


function getSelectedSkills() {

    const chips =
        document.querySelectorAll(
            '#selectedSkills .skill-chip'
        );


    const skills = [];


    chips.forEach(function(chip) {

        skills.push(
            chip.getAttribute(
                'data-selected-skill'
            )
        );

    });


    return skills;

}


/* =========================================================
   POST JOB
========================================================= */

function postJob() {

    const job =
        document
            .getElementById('jobTitle')
            .value
            .trim();


    if (job === '') {

        alert(
            'Please enter the Job Title.'
        );

        return;

    }


    const skills =
        getSelectedSkills();


    if (skills.length === 0) {

        alert(
            'Please select at least one required skill.'
        );

        return;

    }


    alert(
        'Job posted successfully!'
    );


    document.getElementById('jobTitle').value = '';
    document.getElementById('jobType').value = '';
    document.getElementById('jobCourse').value = '';
    document.getElementById('jobCpi').value = '';
    document.getElementById('jobSalary').value = '';
    document.getElementById('jobLastDate').value = '';
    document.getElementById('jobDescription').value = '';


    document.getElementById(
        'selectedSkills'
    ).innerHTML = '';


    document.querySelectorAll(
        '.skill-option'
    ).forEach(function(option) {

        option.classList.remove('selected');

    });

}


/* =========================================================
   APPLICATION FILTER
========================================================= */

function filterApplications() {

    const searchInput =
        document.getElementById(
            'applicationSearch'
        );


    const courseInput =
        document.getElementById(
            'courseFilter'
        );


    const statusInput =
        document.getElementById(
            'statusFilter'
        );


    const search =
        searchInput
            ? searchInput.value.toLowerCase()
            : '';


    const course =
        courseInput
            ? courseInput.value
            : '';


    const status =
        statusInput
            ? statusInput.value
            : '';


    const rows =
        document.querySelectorAll(
            '#applicationsTable tbody tr'
        );


    rows.forEach(function(row) {

        const nameElement =
            row.querySelector('.student-name');


        const name =
            nameElement
                ? nameElement.innerText.toLowerCase()
                : '';


        const rowCourse =
            row.getAttribute('data-course');


        const rowStatus =
            row.getAttribute('data-status');


        const searchMatch =
            name.includes(search);


        const courseMatch =
            course === '' ||
            rowCourse === course;


        const statusMatch =
            status === '' ||
            rowStatus === status;


        if (
            searchMatch &&
            courseMatch &&
            statusMatch
        ) {

            row.style.display = '';

        } else {

            row.style.display = 'none';

        }

    });

}


/* =========================================================
   CLEAR APPLICATION FILTERS
========================================================= */

function clearFilters() {

    document.getElementById(
        'applicationSearch'
    ).value = '';


    document.getElementById(
        'courseFilter'
    ).value = '';


    document.getElementById(
        'statusFilter'
    ).value = '';


    filterApplications();

}


/* =========================================================
   SHOW SHORTLISTED STUDENTS
========================================================= */

function showShortlistedStudents() {

    document
        .getElementById(
            'allApplicationsSection'
        )
        .style.display = 'none';


    document
        .getElementById(
            'shortlistedSection'
        )
        .classList.add('show');

}


/* =========================================================
   HIDE SHORTLISTED STUDENTS
========================================================= */

function hideShortlistedStudents() {

    document
        .getElementById(
            'shortlistedSection'
        )
        .classList.remove('show');


    document
        .getElementById(
            'allApplicationsSection'
        )
        .style.display = 'block';

}


/* =========================================================
   PROMOTE STUDENT
========================================================= */

function promoteStudent(button) {

    const row =
        button.closest('tr');


    const name =
        row.cells[0].innerText;


    const confirmPromote =
        confirm(
            'Do you want to promote ' +
            name +
            ' to the next selection round?'
        );


    if (confirmPromote) {

        row
            .querySelector('.shortlisted-status')
            .innerHTML = `

                <span class="badge badge-warning">
                    Promoted
                </span>

            `;


        alert(
            name +
            ' has been promoted to the next round.'
        );

    }

}


/* =========================================================
   SELECT STUDENT
========================================================= */

function selectStudent(button) {

    const row =
        button.closest('tr');


    const name =
        row.cells[0].innerText;


    const confirmSelect =
        confirm(
            'Do you want to select ' +
            name +
            ' for the job?'
        );


    if (confirmSelect) {

        row
            .querySelector('.shortlisted-status')
            .innerHTML = `

                <span class="badge badge-success">
                    Selected
                </span>

            `;


        alert(
            name +
            ' has been selected successfully.'
        );

    }

}


/* =========================================================
   REJECT STUDENT
========================================================= */

function rejectStudent(button) {

    const row =
        button.closest('tr');


    const name =
        row.cells[0].innerText;


    const confirmReject =
        confirm(
            'Do you want to reject ' +
            name +
            '?'
        );


    if (confirmReject) {

        row
            .querySelector('.shortlisted-status')
            .innerHTML = `

                <span class="badge badge-danger">
                    Rejected
                </span>

            `;


        alert(
            name +
            ' has been rejected.'
        );

    }

}


/* =========================================================
   RESUME
========================================================= */

function viewResume(studentName) {

    const modal =
        document.getElementById(
            'resumeModal'
        );


    const title =
        document.getElementById(
            'resumeStudentName'
        );


    const frame =
        document.getElementById(
            'resumeFrame'
        );


    title.innerText =
        studentName +
        ' - Resume';


    frame.src =
        'https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf';


    modal.classList.add('show');

}


function closeResume() {

    const modal =
        document.getElementById(
            'resumeModal'
        );


    const frame =
        document.getElementById(
            'resumeFrame'
        );


    modal.classList.remove('show');


    frame.src = '';

}


/* =========================================================
   DRIVE FORM TOGGLE
========================================================= */

function toggleDriveForm() {

    const form =
        document.getElementById(
            'newDriveForm'
        );


    const button =
        document.getElementById(
            'driveToggleButton'
        );


    form.classList.toggle('show');


    if (
        form.classList.contains('show')
    ) {

        button.innerHTML =
            '✖ Close Add Drive';

    } else {

        button.innerHTML =
            '➕ Add New Drive';

    }

}


/* =========================================================
   ADD DRIVE
========================================================= */

function addDrive() {

    const name =
        document
            .getElementById(
                'driveName'
            )
            .value
            .trim();


    const date =
        document
            .getElementById(
                'driveDate'
            )
            .value;


    const hour =
        document
            .getElementById(
                'driveHour'
            )
            .value;


    const minute =
        document
            .getElementById(
                'driveMinute'
            )
            .value;


    const ampm =
        document
            .getElementById(
                'driveAmPm'
            )
            .value;


    const venue =
        document
            .getElementById(
                'driveVenue'
            )
            .value
            .trim();


    const organizer =
        document
            .getElementById(
                'driveOrganizer'
            )
            .value
            .trim();


    const course =
        document
            .getElementById(
                'driveCourse'
            )
            .value;


    if (
        name === '' ||
        date === '' ||
        hour === '' ||
        minute === '' ||
        ampm === '' ||
        venue === '' ||
        course === ''
    ) {

        alert(
            'Please fill all required drive details.'
        );

        return;

    }


    const formattedTime =
        hour +
        ' : ' +
        minute +
        ' ' +
        ampm;


    const table =
        document.querySelector(
            '#driveTable tbody'
        );


    const row =
        document.createElement('tr');


    row.innerHTML = `

        <td>${name}</td>

        <td>${date}</td>

        <td>${formattedTime}</td>

        <td>${venue}</td>

        <td>${organizer}</td>

        <td>${course}</td>

        <td>

            <button
                class="btn btn-danger"
                onclick="deleteDrive(this)">

                Delete

            </button>

        </td>

    `;


    table.appendChild(row);


    document.getElementById(
        'driveName'
    ).value = '';


    document.getElementById(
        'driveDate'
    ).value = '';


    document.getElementById(
        'driveHour'
    ).value = '';


    document.getElementById(
        'driveMinute'
    ).value = '';


    document.getElementById(
        'driveAmPm'
    ).value = '';


    document.getElementById(
        'driveVenue'
    ).value = '';


    document.getElementById(
        'driveOrganizer'
    ).value = '';


    document.getElementById(
        'driveCourse'
    ).value = '';


    alert(
        'Upcoming drive added successfully.'
    );


    toggleDriveForm();

}


/* =========================================================
   DELETE DRIVE
========================================================= */

function deleteDrive(button) {

    const row =
        button.closest('tr');


    if (
        confirm(
            'Are you sure you want to delete this drive?'
        )
    ) {

        row.remove();


        alert(
            'Drive deleted successfully.'
        );

    }

}


/* =========================================================
   SCHEDULE INTERVIEW
========================================================= */

function scheduleInterview() {

    const student =
        document
            .getElementById(
                'interviewStudent'
            )
            .value
            .trim();


    const date =
        document
            .getElementById(
                'interviewDate'
            )
            .value;


    const hour =
        document
            .getElementById(
                'interviewHour'
            )
            .value;


    const minute =
        document
            .getElementById(
                'interviewMinute'
            )
            .value;


    const ampm =
        document
            .getElementById(
                'interviewAmPm'
            )
            .value;


    if (
        student === '' ||
        date === '' ||
        hour === '' ||
        minute === '' ||
        ampm === ''
    ) {

        alert(
            'Please enter student, date and complete interview time.'
        );

        return;

    }


    const formattedTime =
        hour +
        ' : ' +
        minute +
        ' ' +
        ampm;


    alert(
        'Interview scheduled successfully for ' +
        student +
        ' at ' +
        formattedTime +
        '!'
    );

}


/* =========================================================
   ADD NOTIFICATION
========================================================= */

function addNotification() {

    const title =
        document
            .getElementById(
                'notificationTitle'
            )
            .value
            .trim();


    const message =
        document
            .getElementById(
                'notificationMessage'
            )
            .value
            .trim();


    if (
        title === '' ||
        message === ''
    ) {

        alert(
            'Please enter notification title and message.'
        );

        return;

    }


    const list =
        document.getElementById(
            'notificationList'
        );


    const notification =
        document.createElement(
            'div'
        );


    notification.className =
        'notification';


    notification.innerHTML = `

        <strong>
            ${title}
        </strong>

        <p>
            ${message}
        </p>

        <small>
            Just now
        </small>

    `;


    list.prepend(notification);


    document.getElementById(
        'notificationTitle'
    ).value = '';


    document.getElementById(
        'notificationMessage'
    ).value = '';


    alert(
        'Notification added successfully!'
    );

}


/* =========================================================
   SAVE PROFILE
========================================================= */

function saveMessage() {

    alert(
        'Company profile saved successfully!'
    );

}


/* =========================================================
   SAVE SETTINGS
========================================================= */

function saveSettings() {

    alert(
        'Settings saved successfully!'
    );

}


/* =========================================================
   LOGOUT
========================================================= */

function logoutCompany() {

    const result =
        confirm(
            'Are you sure you want to logout?'
        );


    if (result) {

        window.location.href =
            "{{ route('company.login') }}";

    }

}


/* =========================================================
   PAGE LOAD
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function() {

        const search =
            document.getElementById(
                'applicationSearch'
            );


        const course =
            document.getElementById(
                'courseFilter'
            );


        const status =
            document.getElementById(
                'statusFilter'
            );


        if (search) {

            search.value = '';

        }


        if (course) {

            course.value = '';

        }


        if (status) {

            status.value = '';

        }


        filterApplications();

    }
);

</script>

</body>

</html>