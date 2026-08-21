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
            padding: 25px 15px;
            overflow-y: auto;
            z-index: 1000;
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo h2 {
            font-size: 22px;
            color: white;
        }

        .logo p {
            font-size: 13px;
            color: #d8d4ff;
            margin-top: 5px;
        }

        .menu {
            list-style: none;
        }

        .menu li {
            margin: 7px 0;
        }

        .menu button {
            width: 100%;
            border: none;
            background: transparent;
            color: white;
            text-align: left;
            padding: 13px 15px;
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
           STUDENT STATUS TABS
        ========================================================= */

        .student-tabs {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 18px;
        }

        .student-tab {
            padding: 10px 16px;
            border: 1px solid #ddd;
            background: white;
            color: #17104f;
            border-radius: 7px;
            cursor: pointer;
            font-size: 13px;
        }

        .student-tab.active {
            background: #17104f;
            color: white;
            border-color: #17104f;
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
        }

    </style>

</head>

<body>


<!-- =========================================================
     SIDEBAR
========================================================= -->

<div class="sidebar">

    <div class="logo">
        <h2>K D Polytechnic</h2>
        <p>T&P Portal</p>
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
            <button onclick="showPage('students', this)">
                👨‍🎓 Student List
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
     MAIN CONTENT
========================================================= -->

<div class="main">


    <!-- TOPBAR -->

    <div class="topbar">
        <h1 id="topTitle">Company Dashboard</h1>
    </div>


    <!-- =====================================================
         DASHBOARD
    ===================================================== -->

    <section id="dashboard" class="page active">

        <div class="page-intro">
            <p>Overview of your recruitment activities.</p>
        </div>

        <div class="cards">

            <div class="card">
                <h3>Active Job Posts</h3>
                <div class="number">08</div>
            </div>

            <div class="card">
                <h3>Total Applications</h3>
                <div class="number">126</div>
            </div>

            <div class="card">
                <h3>Shortlisted Students</h3>
                <div class="number">32</div>
            </div>

            <div class="card">
                <h3>Upcoming Interviews</h3>
                <div class="number">12</div>
            </div>

        </div>


        <div class="table-box">

            <div class="section-header">

                <div>
                    <h3>Recent Applications</h3>
                    <p>Latest student applications received.</p>
                </div>

                <button
                    class="btn btn-primary"
                    onclick="showPage('applications')">
                    View All
                </button>

            </div>

            <table>

                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Course</th>
                        <th>Applied For</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Rahul Patel</td>
                        <td>Computer Engineering</td>
                        <td>Software Engineer</td>
                        <td>
                            <span class="badge badge-warning">
                                Under Review
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>Priya Shah</td>
                        <td>IT Engineering</td>
                        <td>Web Developer</td>
                        <td>
                            <span class="badge badge-success">
                                Shortlisted
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>Amit Desai</td>
                        <td>Computer Engineering</td>
                        <td>Data Analyst</td>
                        <td>
                            <span class="badge badge-info">
                                New
                            </span>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    <!-- =====================================================
         COMPANY PROFILE
    ===================================================== -->

    <section id="profile" class="page">

        <div class="page-intro">
            <p>Manage your company information.</p>
        </div>

        <div class="profile-header">

            <div class="company-logo">
                T
            </div>

            <div class="profile-info">

                <h2>TCS</h2>

                <p>Information Technology Company</p>

                <p>Ahmedabad, Gujarat</p>

            </div>

        </div>


        <div class="form-box">

            <div class="form-grid">

                <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" value="TCS">
                </div>

                <div class="form-group">
                    <label>Company Email</label>
                    <input type="email" value="hr@tcs.com">
                </div>

                <div class="form-group">
                    <label>Contact Number</label>
                    <input type="text" value="9876543210">
                </div>

                <div class="form-group">
                    <label>Website</label>
                    <input type="text" value="www.tcs.com">
                </div>

                <div class="form-group">
                    <label>Industry</label>
                    <input type="text" value="Information Technology">
                </div>

                <div class="form-group">
                    <label>Location</label>
                    <input type="text" value="Ahmedabad, Gujarat">
                </div>

                <div class="form-group full">

                    <label>Company Description</label>

                    <textarea>Leading technology and consulting company providing IT services and solutions.</textarea>

                </div>

            </div>

            <br>

            <button class="btn btn-primary" onclick="saveMessage()">
                Save Profile
            </button>

        </div>

    </section>


    <!-- =====================================================
         POST NEW JOB
    ===================================================== -->

    <section id="post-job" class="page">

        <div class="page-intro">
            <p>Manage your existing job posts and create new placement opportunities.</p>
        </div>


        <!-- EXISTING JOBS -->

        <div class="section-header">

            <div>

                <h3>Existing Job Posts</h3>

                <p>
                    Manage jobs already posted by your company.
                </p>

            </div>

            <button
                id="jobToggleButton"
                class="btn btn-primary btn-large"
                onclick="toggleJobForm()">

                ➕ Post New Job

            </button>

        </div>


        <!--
            IMPORTANT:
            NEW JOB FORM IS DIRECTLY BELOW THE BUTTON.
            IT DOES NOT SCROLL DOWN.
        -->

        <div id="newJobForm" class="form-box hidden-form">

            <div class="section-header">

                <div>

                    <h3>Post New Job</h3>

                    <p>
                        Enter the details of the new placement opportunity.
                    </p>

                </div>

                <button
                    class="btn btn-secondary"
                    onclick="toggleJobForm()">

                    Close

                </button>

            </div>


            <div class="form-grid">

                <div class="form-group">

                    <label>Job Title</label>

                    <input
                        type="text"
                        id="jobTitle"
                        placeholder="Software Engineer">

                </div>


                <div class="form-group">

                    <label>Job Type</label>

                    <select id="jobType">

                        <option value="">Select Job Type</option>
                        <option>Full Time</option>
                        <option>Internship</option>
                        <option>Part Time</option>

                    </select>

                </div>


                <div class="form-group">

                    <label>Eligibility Course</label>

                    <select id="jobCourse">

                        <option value="">Select Course</option>
                        <option>Computer Engineering</option>
                        <option>Information Technology</option>
                        <option>Electronics Engineering</option>
                        <option>Mechanical Engineering</option>
                        <option>Civil Engineering</option>
                        <option>All Courses</option>

                    </select>

                </div>


                <div class="form-group">

                    <label>Minimum CPI</label>

                    <input
                        type="number"
                        step="0.1"
                        id="jobCpi"
                        placeholder="6.0">

                </div>


                <div class="form-group">

                    <label>Salary / Package</label>

                    <input
                        type="text"
                        id="jobSalary"
                        placeholder="₹5 LPA">

                </div>


                <div class="form-group">

                    <label>Application Last Date</label>

                    <input
                        type="date"
                        id="jobLastDate">

                </div>


                <div class="form-group full">

                    <label>Required Skills</label>

                    <input
                        type="text"
                        id="jobSkills"
                        placeholder="Java, Python, PHP, SQL, HTML, CSS">

                </div>


                <div class="form-group full">

                    <label>Job Description</label>

                    <textarea
                        id="jobDescription"
                        placeholder="Enter complete job description..."></textarea>

                </div>

            </div>


            <br>

            <button
                class="btn btn-primary"
                onclick="postJob()">

                Post Job

            </button>

        </div>


        <!-- EXISTING JOB 1 -->

        <div class="item-card">

            <div class="item-card-header">

                <div>

                    <h3>Software Engineer</h3>

                    <p>Full Time • Ahmedabad</p>

                </div>

                <span class="badge badge-success">
                    Active
                </span>

            </div>


            <div class="item-details">

                <div class="detail-box">
                    <strong>Course</strong>
                    <span>Computer Engineering</span>
                </div>

                <div class="detail-box">
                    <strong>Minimum CPI</strong>
                    <span>7.0</span>
                </div>

                <div class="detail-box">
                    <strong>Package</strong>
                    <span>₹5 LPA</span>
                </div>

                <div class="detail-box">
                    <strong>Applications</strong>
                    <span>48</span>
                </div>

                <div class="detail-box">
                    <strong>Last Date</strong>
                    <span>30 Aug 2026</span>
                </div>

                <div class="detail-box">
                    <strong>Skills</strong>
                    <span>Java, PHP, SQL</span>
                </div>

            </div>

        </div>


        <!-- EXISTING JOB 2 -->

        <div class="item-card">

            <div class="item-card-header">

                <div>

                    <h3>Web Developer</h3>

                    <p>Full Time • Ahmedabad</p>

                </div>

                <span class="badge badge-success">
                    Active
                </span>

            </div>


            <div class="item-details">

                <div class="detail-box">
                    <strong>Course</strong>
                    <span>IT Engineering</span>
                </div>

                <div class="detail-box">
                    <strong>Minimum CPI</strong>
                    <span>6.5</span>
                </div>

                <div class="detail-box">
                    <strong>Package</strong>
                    <span>₹4.5 LPA</span>
                </div>

                <div class="detail-box">
                    <strong>Applications</strong>
                    <span>36</span>
                </div>

                <div class="detail-box">
                    <strong>Last Date</strong>
                    <span>05 Sep 2026</span>
                </div>

                <div class="detail-box">
                    <strong>Skills</strong>
                    <span>HTML, CSS, JavaScript</span>
                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         ALL APPLICATIONS
    ===================================================== -->

    <section id="applications" class="page">

        <div class="page-intro">
            <p>View, search, edit and manage student applications.</p>
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

                <option value="">All Courses</option>
                <option value="Computer Engineering">Computer Engineering</option>
                <option value="IT Engineering">IT Engineering</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Civil Engineering">Civil Engineering</option>

            </select>


            <select
                id="statusFilter"
                onchange="filterApplications()">

                <option value="">All Status</option>
                <option value="New">New</option>
                <option value="Under Review">Under Review</option>
                <option value="Shortlisted">Shortlisted</option>
                <option value="Rejected">Rejected</option>

            </select>


            <button
                class="btn btn-secondary"
                onclick="clearFilters()">

                Clear Filters

            </button>

        </div>


        <div class="table-box">

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
                        <th>Action</th>
                    </tr>

                </thead>


                <tbody>

                    <tr
                        data-course="Computer Engineering"
                        data-status="Under Review">

                        <td class="student-name">
                            Rahul Patel
                        </td>

                        <td>CE12345</td>

                        <td>
                            Computer Engineering
                        </td>

                        <td>
                            Software Engineer
                        </td>

                        <td>8.2</td>

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

                        <td>

                            <button
                                class="btn btn-warning"
                                onclick="editApplication(this)">
                                Edit
                            </button>

                            <button
                                class="btn btn-danger"
                                onclick="deleteApplication(this)">
                                Delete
                            </button>

                        </td>

                    </tr>


                    <tr
                        data-course="IT Engineering"
                        data-status="Shortlisted">

                        <td class="student-name">
                            Priya Shah
                        </td>

                        <td>IT22341</td>

                        <td>
                            IT Engineering
                        </td>

                        <td>
                            Web Developer
                        </td>

                        <td>8.7</td>

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

                        <td>

                            <button
                                class="btn btn-warning"
                                onclick="editApplication(this)">
                                Edit
                            </button>

                            <button
                                class="btn btn-danger"
                                onclick="deleteApplication(this)">
                                Delete
                            </button>

                        </td>

                    </tr>


                    <tr
                        data-course="Computer Engineering"
                        data-status="New">

                        <td class="student-name">
                            Amit Desai
                        </td>

                        <td>CE34567</td>

                        <td>
                            Computer Engineering
                        </td>

                        <td>
                            Data Analyst
                        </td>

                        <td>7.9</td>

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

                        <td>

                            <button
                                class="btn btn-warning"
                                onclick="editApplication(this)">
                                Edit
                            </button>

                            <button
                                class="btn btn-danger"
                                onclick="deleteApplication(this)">
                                Delete
                            </button>

                        </td>

                    </tr>


                    <tr
                        data-course="Mechanical Engineering"
                        data-status="Rejected">

                        <td class="student-name">
                            Karan Mehta
                        </td>

                        <td>ME44521</td>

                        <td>
                            Mechanical Engineering
                        </td>

                        <td>
                            Graduate Engineer
                        </td>

                        <td>6.9</td>

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

                        <td>

                            <button
                                class="btn btn-warning"
                                onclick="editApplication(this)">
                                Edit
                            </button>

                            <button
                                class="btn btn-danger"
                                onclick="deleteApplication(this)">
                                Delete
                            </button>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    <!-- =====================================================
         STUDENT LIST
    ===================================================== -->

    <section id="students" class="page">

        <div class="page-intro">
            <p>View students according to their placement status and branch.</p>
        </div>


        <!-- BRANCH FILTER -->

        <div class="filter-box">

            <select
                id="studentBranchFilter"
                onchange="filterStudents()">

                <option value="">All Branches</option>
                <option value="Mechanical Engineering">
                    Mechanical Engineering
                </option>
                <option value="Computer Engineering">
                    Computer Engineering
                </option>
                <option value="Electrical Engineering">
                    Electrical Engineering
                </option>
                <option value="Civil Engineering">
                    Civil Engineering
                </option>

            </select>


            <button
                class="btn btn-secondary"
                onclick="clearStudentFilter()">

                Clear Filter

            </button>

        </div>


        <!-- STATUS FILTER -->

        <div class="student-tabs">

            <button
                class="student-tab active"
                onclick="filterStudentStatus('all', this)">
                All Students
            </button>

            <button
                class="student-tab"
                onclick="filterStudentStatus('shortlisted', this)">
                Shortlisted Students
            </button>

            <button
                class="student-tab"
                onclick="filterStudentStatus('placed', this)">
                Placed Students
            </button>

            <button
                class="student-tab"
                onclick="filterStudentStatus('rejected', this)">
                Rejected Students
            </button>

        </div>


        <div class="table-box">

            <table id="studentListTable">

                <thead>

                    <tr>

                        <th>Student</th>
                        <th>Enrollment No.</th>
                        <th>Branch</th>
                        <th>CPI</th>
                        <th>Status</th>
                        <th>Resume</th>
                        <th>Action</th>

                    </tr>

                </thead>


                <tbody>

                    <tr
                        data-branch="Computer Engineering"
                        data-student-status="shortlisted">

                        <td>Rahul Patel</td>
                        <td>CE12345</td>
                        <td>Computer Engineering</td>
                        <td>8.2</td>

                        <td>
                            <span class="badge badge-success">
                                Shortlisted
                            </span>
                        </td>

                        <td>

                            <button
                                class="btn btn-light"
                                onclick="viewResume('Rahul Patel')">
                                View PDF
                            </button>

                        </td>

                        <td>

                            <button
                                class="btn btn-primary"
                                onclick="scheduleForStudent('Rahul Patel')">
                                Schedule Interview
                            </button>

                        </td>

                    </tr>


                    <tr
                        data-branch="Computer Engineering"
                        data-student-status="placed">

                        <td>Amit Desai</td>
                        <td>CE34567</td>
                        <td>Computer Engineering</td>
                        <td>7.9</td>

                        <td>
                            <span class="badge badge-success">
                                Placed
                            </span>
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
                                Selected
                            </span>
                        </td>

                    </tr>


                    <tr
                        data-branch="Mechanical Engineering"
                        data-student-status="rejected">

                        <td>Karan Mehta</td>
                        <td>ME44521</td>
                        <td>Mechanical Engineering</td>
                        <td>6.9</td>

                        <td>
                            <span class="badge badge-danger">
                                Rejected
                            </span>
                        </td>

                        <td>

                            <button
                                class="btn btn-light"
                                onclick="viewResume('Karan Mehta')">
                                View PDF
                            </button>

                        </td>

                        <td>
                            -
                        </td>

                    </tr>


                    <tr
                        data-branch="Electrical Engineering"
                        data-student-status="shortlisted">

                        <td>Neha Shah</td>
                        <td>EE22312</td>
                        <td>Electrical Engineering</td>
                        <td>8.4</td>

                        <td>
                            <span class="badge badge-success">
                                Shortlisted
                            </span>
                        </td>

                        <td>

                            <button
                                class="btn btn-light"
                                onclick="viewResume('Neha Shah')">
                                View PDF
                            </button>

                        </td>

                        <td>

                            <button
                                class="btn btn-primary"
                                onclick="scheduleForStudent('Neha Shah')">
                                Schedule Interview
                            </button>

                        </td>

                    </tr>


                    <tr
                        data-branch="Civil Engineering"
                        data-student-status="placed">

                        <td>Riya Patel</td>
                        <td>CV34521</td>
                        <td>Civil Engineering</td>
                        <td>8.1</td>

                        <td>
                            <span class="badge badge-success">
                                Placed
                            </span>
                        </td>

                        <td>

                            <button
                                class="btn btn-light"
                                onclick="viewResume('Riya Patel')">
                                View PDF
                            </button>

                        </td>

                        <td>
                            <span class="badge badge-info">
                                Selected
                            </span>
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    <!-- =====================================================
         UPCOMING DRIVES
    ===================================================== -->

    <section id="drives" class="page">

        <div class="page-intro">
            <p>Manage your existing campus placement drives and add new drives.</p>
        </div>


        <!-- EXISTING DRIVES HEADER -->

        <div class="section-header">

            <div>

                <h3>Existing Placement Drives</h3>

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


        <!--
            IMPORTANT:
            DRIVE FORM IS DIRECTLY BELOW THE BUTTON.
            NO AUTOMATIC SCROLL.
        -->

        <div id="newDriveForm" class="form-box hidden-form">

            <div class="section-header">

                <div>

                    <h3>Add New Placement Drive</h3>

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

                    <label>Drive Name</label>

                    <input
                        id="driveName"
                        type="text"
                        placeholder="TCS Campus Drive">

                </div>


                <div class="form-group">

                    <label>Date</label>

                    <input
                        id="driveDate"
                        type="date">

                </div>


                <div class="form-group">

                    <label>Time</label>

                    <input
                        id="driveTime"
                        type="time">

                </div>


                <div class="form-group">

                    <label>Venue</label>

                    <input
                        id="driveVenue"
                        type="text"
                        placeholder="Seminar Hall">

                </div>


                <div class="form-group">

                    <label>Organizer</label>

                    <input
                        id="driveOrganizer"
                        type="text"
                        placeholder="Placement Officer">

                </div>


                <div class="form-group">

                    <label>Eligible Course</label>

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


        <!--
            NO TCS EXISTING DRIVE.
            NO VIEW DETAILS.
            NO EDIT BUTTON.
        -->


        <div
            id="addedDrives"
            class="table-box"
            style="margin-top:20px;">

            <h3>Added Drives</h3>

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


    <!-- =====================================================
         SCHEDULE INTERVIEW
    ===================================================== -->

    <section id="interviews" class="page">

        <div class="page-intro">
            <p>Schedule interviews for specific shortlisted students.</p>
        </div>


        <div class="form-box">

            <div class="form-grid">

                <div class="form-group">

            <label>Student Name</label>

                <input
                type="text"
                id="interviewStudent"
                placeholder="Enter student name">

            </div>


                <div class="form-group">

                    <label>Interview Type</label>

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

                    <label>Date</label>

                    <input
                        id="interviewDate"
                        type="date">

                </div>


                <div class="form-group">

                    <label>Time</label>

                    <input
                        id="interviewTime"
                        type="time">

                </div>


                <div class="form-group">

                    <label>Mode</label>

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

                    <label>Interview Location / Link</label>

                    <input
                        id="interviewLocation"
                        type="text"
                        placeholder="Meeting link or location">

                </div>


                <div class="form-group full">

                    <label>Additional Instructions</label>

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


    <!-- =====================================================
         NOTIFICATIONS
    ===================================================== -->

    <section id="notifications" class="page">

        <div class="page-intro">
            <p>Recruitment related updates and alerts.</p>
        </div>


        <!-- ADD NOTIFICATION -->

        <div class="form-box">

            <div class="section-header">

                <div>

                    <h3>Add Notification</h3>

                    <p>
                        Company can add recruitment related notifications.
                    </p>

                </div>

            </div>


            <div class="form-grid">

                <div class="form-group">

                    <label>Notification Title</label>

                    <input
                        type="text"
                        id="notificationTitle"
                        placeholder="Enter notification title">

                </div>


                <div class="form-group">

                    <label>Notification Type</label>

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

                    <label>Notification Message</label>

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


        <!-- EXISTING NOTIFICATIONS -->

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

    </section>


    <!-- =====================================================
         SETTINGS
    ===================================================== -->

    <section id="settings" class="page">

        <div class="page-intro">
            <p>Manage your company account, security and dashboard preferences.</p>
        </div>


        <div class="form-box">


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


            <div class="settings-section">

                <h3>
                    Security & Authentication
                </h3>

                <p>
                    Change your company account password and keep your account secure.
                </p>


                <div class="form-grid">

                    <div class="form-group full">

                        <label>
                            Current Password
                        </label>

                        <input
                            type="password"
                            id="currentPassword"
                            placeholder="Enter current password">

                    </div>


                    <div class="form-group">

                        <label>
                            New Password
                        </label>

                        <input
                            type="password"
                            id="newPassword"
                            placeholder="Enter new password">

                    </div>


                    <div class="form-group">

                        <label>
                            Confirm New Password
                        </label>

                        <input
                            type="password"
                            id="confirmPassword"
                            placeholder="Confirm new password">

                    </div>

                </div>


                <br>

                <button
                    class="btn btn-primary"
                    onclick="changePassword()">

                    Change Password

                </button>

            </div>


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


            <div class="settings-section">

                <h3>
                    Dashboard Preferences
                </h3>

                <p>
                    Customize the way application information is displayed.
                </p>


                <div class="form-grid">

                    <div class="form-group">

                        <label>
                            Default Application Status
                        </label>

                        <select>

                            <option>
                                New
                            </option>

                            <option>
                                Under Review
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label>
                            Items Per Page
                        </label>

                        <select>

                            <option>
                                10
                            </option>

                            <option>
                                25
                            </option>

                            <option>
                                50
                            </option>

                        </select>

                    </div>

                </div>

            </div>


            <button
                class="btn btn-primary"
                onclick="saveSettings()">

                Save Settings

            </button>

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

        students:
            'Student List',

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


    /*
       IMPORTANT:
       No window.scrollTo() here.
       So clicking menu does not automatically
       scroll somewhere unexpectedly.
    */

}


/* =========================================================
   POST JOB FORM TOGGLE
   FORM OPENS DIRECTLY BELOW THE BUTTON
========================================================= */

function toggleJobForm() {

    const form =
        document.getElementById('newJobForm');

    const button =
        document.getElementById('jobToggleButton');


    form.classList.toggle('show');


    if (form.classList.contains('show')) {

        button.innerHTML = '✖ Close Post Job';

    } else {

        button.innerHTML = '➕ Post New Job';

    }

}


/* =========================================================
   DRIVE FORM TOGGLE
   FORM OPENS DIRECTLY BELOW THE BUTTON
========================================================= */

function toggleDriveForm() {

    const form =
        document.getElementById('newDriveForm');

    const button =
        document.getElementById('driveToggleButton');


    form.classList.toggle('show');


    if (form.classList.contains('show')) {

        button.innerHTML = '✖ Close Add Drive';

    } else {

        button.innerHTML = '➕ Add New Drive';

    }

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

        alert('Please enter the Job Title.');

        return;

    }


    alert('Job posted successfully!');


    /*
       Form fields clear after successful posting.
    */

    document.getElementById('jobTitle').value = '';
    document.getElementById('jobType').value = '';
    document.getElementById('jobCourse').value = '';
    document.getElementById('jobCpi').value = '';
    document.getElementById('jobSalary').value = '';
    document.getElementById('jobLastDate').value = '';
    document.getElementById('jobSkills').value = '';
    document.getElementById('jobDescription').value = '';


    toggleJobForm();

}


/* =========================================================
   APPLICATION FILTER
========================================================= */

function filterApplications() {

    const search =
        document
            .getElementById('applicationSearch')
            .value
            .toLowerCase();


    const course =
        document
            .getElementById('courseFilter')
            .value;


    const status =
        document
            .getElementById('statusFilter')
            .value;


    const rows =
        document.querySelectorAll(
            '#applicationsTable tbody tr'
        );


    rows.forEach(function(row) {

        const name =
            row
                .querySelector('.student-name')
                .innerText
                .toLowerCase();


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

    document.getElementById('applicationSearch').value = '';
    document.getElementById('courseFilter').value = '';
    document.getElementById('statusFilter').value = '';

    filterApplications();

}


/* =========================================================
   EDIT APPLICATION
========================================================= */

function editApplication(button) {

    const row =
        button.closest('tr');


    const name =
        row
            .querySelector('.student-name')
            .innerText;


    const newName =
        prompt(
            'Edit Student Name:',
            name
        );


    if (
        newName &&
        newName.trim() !== ''
    ) {

        row
            .querySelector('.student-name')
            .innerText =
            newName.trim();


        alert(
            'Application updated successfully.'
        );

    }

}


/* =========================================================
   DELETE APPLICATION
========================================================= */

function deleteApplication(button) {

    const row =
        button.closest('tr');


    const name =
        row
            .querySelector('.student-name')
            .innerText;


    const confirmDelete =
        confirm(
            'Are you sure you want to delete the application of '
            + name
            + '?'
        );


    if (confirmDelete) {

        row.remove();

        alert(
            'Application deleted successfully.'
        );

    }

}


/* =========================================================
   RESUME PDF
========================================================= */

function viewResume(studentName) {

    const modal =
        document.getElementById('resumeModal');

    const title =
        document.getElementById('resumeStudentName');

    const frame =
        document.getElementById('resumeFrame');


    title.innerText =
        studentName + ' - Resume';


    /*
       Demo PDF.
       Later this src can be replaced by the actual
       Laravel resume URL/database file URL.
    */

    frame.src =
        'https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf';


    modal.classList.add('show');

}


function closeResume() {

    const modal =
        document.getElementById('resumeModal');

    const frame =
        document.getElementById('resumeFrame');


    modal.classList.remove('show');

    frame.src = '';

}


/* =========================================================
   STUDENT LIST - BRANCH FILTER
========================================================= */

function filterStudents() {

    const branch =
        document
            .getElementById('studentBranchFilter')
            .value;


    const rows =
        document.querySelectorAll(
            '#studentListTable tbody tr'
        );


    rows.forEach(function(row) {

        const rowBranch =
            row.getAttribute('data-branch');


        const branchMatch =
            branch === '' ||
            rowBranch === branch;


        if (branchMatch) {

            row.style.display = '';

        } else {

            row.style.display = 'none';

        }

    });

}


/* =========================================================
   STUDENT STATUS FILTER
========================================================= */

function filterStudentStatus(status, button) {

    const buttons =
        document.querySelectorAll('.student-tab');


    buttons.forEach(function(btn) {
        btn.classList.remove('active');
    });


    button.classList.add('active');


    const rows =
        document.querySelectorAll(
            '#studentListTable tbody tr'
        );


    rows.forEach(function(row) {

        const rowStatus =
            row.getAttribute('data-student-status');


        const branch =
            document
                .getElementById('studentBranchFilter')
                .value;


        const rowBranch =
            row.getAttribute('data-branch');


        const statusMatch =
            status === 'all' ||
            rowStatus === status;


        const branchMatch =
            branch === '' ||
            rowBranch === branch;


        if (
            statusMatch &&
            branchMatch
        ) {

            row.style.display = '';

        } else {

            row.style.display = 'none';

        }

    });

}


/* =========================================================
   CLEAR STUDENT FILTER
========================================================= */

function clearStudentFilter() {

    document
        .getElementById('studentBranchFilter')
        .value = '';


    const activeTab =
        document.querySelector('.student-tab.active');


    if (activeTab) {

        filterStudentStatus(
            'all',
            document.querySelector('.student-tab')
        );

    }

}


/* =========================================================
   SCHEDULE INTERVIEW FOR SPECIFIC STUDENT
========================================================= */

function scheduleForStudent(studentName) {

    showPage('interviews');


    const select =
        document.getElementById('interviewStudent');


    let found = false;


    for (
        let i = 0;
        i < select.options.length;
        i++
    ) {

        if (
            select.options[i].text ===
            studentName
        ) {

            select.selectedIndex = i;

            found = true;

            break;

        }

    }


    if (!found) {

        const option =
            document.createElement('option');

        option.text = studentName;

        select.add(option);

        select.value = studentName;

    }

}


/* =========================================================
   ADD DRIVE
========================================================= */

function addDrive() {

    const name =
        document
            .getElementById('driveName')
            .value
            .trim();


    const date =
        document
            .getElementById('driveDate')
            .value;


    const time =
        document
            .getElementById('driveTime')
            .value;


    const venue =
        document
            .getElementById('driveVenue')
            .value
            .trim();


    const organizer =
        document
            .getElementById('driveOrganizer')
            .value
            .trim();


    const course =
        document
            .getElementById('driveCourse')
            .value;


    if (
        name === '' ||
        date === '' ||
        time === '' ||
        venue === '' ||
        course === ''
    ) {

        alert(
            'Please fill all required drive details.'
        );

        return;

    }


    const table =
        document.querySelector(
            '#driveTable tbody'
        );


    const row =
        document.createElement('tr');


    row.innerHTML = `

        <td>${name}</td>

        <td>${date}</td>

        <td>${time}</td>

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


    /*
       Clear form after adding.
    */

    document.getElementById('driveName').value = '';
    document.getElementById('driveDate').value = '';
    document.getElementById('driveTime').value = '';
    document.getElementById('driveVenue').value = '';
    document.getElementById('driveOrganizer').value = '';
    document.getElementById('driveCourse').value = '';


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
            .getElementById('interviewStudent')
            .value;


    const date =
        document
            .getElementById('interviewDate')
            .value;


    const time =
        document
            .getElementById('interviewTime')
            .value;


    if (
        student === '' ||
        date === '' ||
        time === ''
    ) {

        alert(
            'Please select student, date and time.'
        );

        return;

    }


    alert(
        'Interview scheduled successfully for ' +
        student +
        '!'
    );

}


/* =========================================================
   ADD NOTIFICATION
   NO FILE / ATTACHMENT
========================================================= */

function addNotification() {

    const title =
        document
            .getElementById('notificationTitle')
            .value
            .trim();


    const message =
        document
            .getElementById('notificationMessage')
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
        document.getElementById('notificationList');


    const notification =
        document.createElement('div');


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


    document.getElementById('notificationTitle').value = '';
    document.getElementById('notificationMessage').value = '';


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
   CHANGE PASSWORD
========================================================= */

function changePassword() {

    const currentPassword =
        document
            .getElementById('currentPassword')
            .value;


    const newPassword =
        document
            .getElementById('newPassword')
            .value;


    const confirmPassword =
        document
            .getElementById('confirmPassword')
            .value;


    if (currentPassword === '') {

        alert(
            'Please enter your current password.'
        );

        return;

    }


    if (newPassword === '') {

        alert(
            'Please enter a new password.'
        );

        return;

    }


    if (newPassword.length < 6) {

        alert(
            'New password must contain at least 6 characters.'
        );

        return;

    }


    if (confirmPassword === '') {

        alert(
            'Please confirm your new password.'
        );

        return;

    }


    if (
        newPassword !==
        confirmPassword
    ) {

        alert(
            'New password and confirm password do not match.'
        );

        return;

    }


    alert(
        'Password changed successfully!'
    );


    document.getElementById('currentPassword').value = '';
    document.getElementById('newPassword').value = '';
    document.getElementById('confirmPassword').value = '';

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
   GENERAL MESSAGE
========================================================= */

function showMessage(message) {

    alert(message);

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

</script>

</body>

</html>