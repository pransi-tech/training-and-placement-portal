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

        /* ================= SIDEBAR ================= */

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
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo h2 {
            font-size: 20px;
        }

        .logo p {
            font-size: 12px;
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

        /* ================= MAIN ================= */

        .main {
            margin-left: 250px;
            padding: 25px;
        }

        .topbar {
            background: white;
            padding: 18px 22px;
            border-radius: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
        }

        .topbar h1 {
            font-size: 24px;
            color: #222;
        }

        .company-name {
            font-weight: bold;
            color: #17104f;
        }

        /* ================= PAGES ================= */

        .page {
            display: none;
        }

        .page.active {
            display: block;
        }

        .page-title {
            margin-bottom: 20px;
        }

        .page-title h2 {
            color: #17104f;
            margin-bottom: 5px;
        }

        .page-title p {
            color: #666;
        }

        /* ================= CARDS ================= */

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

        /* ================= TABLE ================= */

        .table-box {
            background: white;
            border-radius: 12px;
            padding: 20px;
            overflow-x: auto;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
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

        /* ================= BUTTONS ================= */

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

        /* ================= SEARCH ================= */

        .filter-box {
            background: white;
            padding: 18px;
            border-radius: 10px;
            margin-bottom: 18px;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .filter-box input,
        .filter-box select {
            padding: 11px;
            border: 1px solid #ddd;
            border-radius: 6px;
            min-width: 180px;
        }

        /* ================= FORMS ================= */

        .form-box {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
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
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            padding: 11px;
            border: 1px solid #ddd;
            border-radius: 6px;
            outline: none;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        /* ================= PROFILE ================= */

        .profile-header {
            background: white;
            padding: 25px;
            border-radius: 12px;
            display: flex;
            gap: 20px;
            align-items: center;
            margin-bottom: 20px;
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

        /* ================= NOTIFICATION ================= */

        .notification {
            background: white;
            padding: 18px;
            border-radius: 10px;
            margin-bottom: 12px;
            border-left: 4px solid #17104f;
        }

        .notification small {
            color: #777;
        }

        /* ================= BADGES ================= */

        .badge {
            padding: 5px 9px;
            border-radius: 15px;
            font-size: 11px;
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

        /* ================= RESPONSIVE ================= */

        @media(max-width: 1000px) {
            .cards {
                grid-template-columns: repeat(2, 1fr);
            }

            .sidebar {
                width: 210px;
            }

            .main {
                margin-left: 210px;
            }
        }

        @media(max-width: 700px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .main {
                margin-left: 0;
            }

            .cards,
            .form-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<!-- ========================================================= -->
<!-- SIDEBAR -->
<!-- ========================================================= -->

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
            <button onclick="showPage('shortlisted', this)">
                ⭐ Shortlisted Students
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


<!-- ========================================================= -->
<!-- MAIN -->
<!-- ========================================================= -->

<div class="main">

    <div class="topbar">
        <h1 id="topTitle">Company Dashboard</h1>
        <div>
            Welcome,
            <span class="company-name">TCS</span>
        </div>
    </div>


    <!-- ===================================================== -->
    <!-- DASHBOARD -->
    <!-- ===================================================== -->

    <section id="dashboard" class="page active">

        <div class="page-title">
            <h2>Dashboard</h2>
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

            <h3 style="margin-bottom:15px;">Recent Applications</h3>

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
                            <span class="badge badge-warning">Under Review</span>
                        </td>
                    </tr>

                    <tr>
                        <td>Priya Shah</td>
                        <td>IT Engineering</td>
                        <td>Web Developer</td>
                        <td>
                            <span class="badge badge-success">Shortlisted</span>
                        </td>
                    </tr>

                    <tr>
                        <td>Amit Desai</td>
                        <td>Computer Engineering</td>
                        <td>Data Analyst</td>
                        <td>
                            <span class="badge badge-info">New</span>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

    </section>


    <!-- ===================================================== -->
    <!-- PROFILE -->
    <!-- ===================================================== -->

    <section id="profile" class="page">

        <div class="page-title">
            <h2>Company Profile</h2>
            <p>Manage your company information.</p>
        </div>

        <div class="profile-header">

            <div class="company-logo">
                T
            </div>

            <div>
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


    <!-- ===================================================== -->
    <!-- POST JOB -->
    <!-- ===================================================== -->

    <section id="post-job" class="page">

        <div class="page-title">
            <h2>Post New Job</h2>
            <p>Create a new placement opportunity.</p>
        </div>

        <div class="form-box">

            <div class="form-grid">

                <div class="form-group">
                    <label>Job Title</label>
                    <input type="text" id="jobTitle" placeholder="Software Engineer">
                </div>

                <div class="form-group">
                    <label>Job Type</label>

                    <select>
                        <option>Full Time</option>
                        <option>Internship</option>
                        <option>Part Time</option>
                    </select>

                </div>

                <div class="form-group">
                    <label>Eligibility Course</label>

                    <select>
                        <option>Computer Engineering</option>
                        <option>Information Technology</option>
                        <option>Electronics Engineering</option>
                        <option>All Courses</option>
                    </select>

                </div>

                <div class="form-group">
                    <label>Minimum CPI</label>
                    <input type="number" step="0.1" placeholder="6.0">
                </div>

                <div class="form-group">
                    <label>Salary / Package</label>
                    <input type="text" placeholder="₹5 LPA">
                </div>

                <div class="form-group">
                    <label>Application Last Date</label>
                    <input type="date">
                </div>

                <div class="form-group full">
                    <label>Required Skills</label>
                    <input type="text" placeholder="Java, Python, SQL, HTML">
                </div>

                <div class="form-group full">
                    <label>Job Description</label>
                    <textarea placeholder="Enter complete job description..."></textarea>
                </div>

            </div>

            <br>

            <button class="btn btn-primary" onclick="postJob()">
                Post Job
            </button>

        </div>

    </section>


    <!-- ===================================================== -->
    <!-- ALL APPLICATIONS -->
    <!-- ===================================================== -->

    <section id="applications" class="page">

        <div class="page-title">
            <h2>All Applications</h2>
            <p>View, search, edit and manage student applications.</p>
        </div>


        <!-- SEARCH + FILTER -->

        <div class="filter-box">

            <input
                type="text"
                id="applicationSearch"
                placeholder="Search student name..."
                onkeyup="filterApplications()"
            >

            <select id="courseFilter" onchange="filterApplications()">
                <option value="">All Courses</option>
                <option value="Computer Engineering">Computer Engineering</option>
                <option value="IT Engineering">IT Engineering</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Civil Engineering">Civil Engineering</option>
            </select>

            <select id="statusFilter" onchange="filterApplications()">
                <option value="">All Status</option>
                <option value="New">New</option>
                <option value="Under Review">Under Review</option>
                <option value="Shortlisted">Shortlisted</option>
                <option value="Rejected">Rejected</option>
            </select>

            <button class="btn btn-secondary" onclick="clearFilters()">
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

                    <tr data-course="Computer Engineering"
                        data-status="Under Review">

                        <td class="student-name">Rahul Patel</td>

                        <td>CE12345</td>

                        <td>Computer Engineering</td>

                        <td>Software Engineer</td>

                        <td>8.2</td>

                        <td>Java, PHP, SQL</td>

                        <td>
                            <a href="https://www.linkedin.com/" target="_blank">
                                View
                            </a>
                        </td>

                        <td>
                            <a href="#" onclick="viewResume('Rahul Patel')">
                                PDF
                            </a>
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


                    <tr data-course="IT Engineering"
                        data-status="Shortlisted">

                        <td class="student-name">Priya Shah</td>

                        <td>IT22341</td>

                        <td>IT Engineering</td>

                        <td>Web Developer</td>

                        <td>8.7</td>

                        <td>HTML, CSS, JavaScript</td>

                        <td>
                            <a href="https://www.linkedin.com/" target="_blank">
                                View
                            </a>
                        </td>

                        <td>
                            <a href="#" onclick="viewResume('Priya Shah')">
                                PDF
                            </a>
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


                    <tr data-course="Computer Engineering"
                        data-status="New">

                        <td class="student-name">Amit Desai</td>

                        <td>CE34567</td>

                        <td>Computer Engineering</td>

                        <td>Data Analyst</td>

                        <td>7.9</td>

                        <td>Python, SQL, Excel</td>

                        <td>
                            <a href="https://www.linkedin.com/" target="_blank">
                                View
                            </a>
                        </td>

                        <td>
                            <a href="#" onclick="viewResume('Amit Desai')">
                                PDF
                            </a>
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


                    <tr data-course="Mechanical Engineering"
                        data-status="Rejected">

                        <td class="student-name">Karan Mehta</td>

                        <td>ME44521</td>

                        <td>Mechanical Engineering</td>

                        <td>Graduate Engineer</td>

                        <td>6.9</td>

                        <td>AutoCAD, Design</td>

                        <td>
                            <a href="https://www.linkedin.com/" target="_blank">
                                View
                            </a>
                        </td>

                        <td>
                            <a href="#" onclick="viewResume('Karan Mehta')">
                                PDF
                            </a>
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


    <!-- ===================================================== -->
    <!-- SHORTLISTED -->
    <!-- ===================================================== -->

    <section id="shortlisted" class="page">

        <div class="page-title">
            <h2>Shortlisted Students</h2>
            <p>Students selected for the next recruitment stage.</p>
        </div>

        <div class="table-box">

            <table>

                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Course</th>
                        <th>CPI</th>
                        <th>Job</th>
                        <th>Interview</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Priya Shah</td>
                        <td>IT Engineering</td>
                        <td>8.7</td>
                        <td>Web Developer</td>
                        <td>
                            <span class="badge badge-success">
                                Scheduled
                            </span>
                        </td>

                        <td>
                            <button class="btn btn-primary"
                                onclick="showMessage('Student profile opened.')">
                                View Profile
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Rahul Patel</td>
                        <td>Computer Engineering</td>
                        <td>8.2</td>
                        <td>Software Engineer</td>
                        <td>
                            <span class="badge badge-warning">
                                Pending
                            </span>
                        </td>

                        <td>
                            <button class="btn btn-primary"
                                onclick="showPage('interviews')">
                                Schedule
                            </button>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    <!-- ===================================================== -->
    <!-- UPCOMING DRIVES -->
    <!-- ===================================================== -->

    <section id="drives" class="page">

        <div class="page-title">

            <h2>Upcoming Drives</h2>

            <p>
                Manage campus placement drives.
            </p>

        </div>

        <div class="form-box">

            <h3>Add New Drive</h3>

            <br>

            <div class="form-grid">

                <div class="form-group">
                    <label>Drive Name</label>
                    <input id="driveName" type="text"
                           placeholder="TCS Campus Drive">
                </div>

                <div class="form-group">
                    <label>Date</label>
                    <input id="driveDate" type="date">
                </div>

                <div class="form-group">
                    <label>Time</label>
                    <input id="driveTime" type="time">
                </div>

                <div class="form-group">
                    <label>Venue</label>
                    <input id="driveVenue" type="text"
                           placeholder="Seminar Hall">
                </div>

                <div class="form-group">
                    <label>Organizer</label>
                    <input id="driveOrganizer" type="text"
                           placeholder="Placement Officer">
                </div>

                <div class="form-group">
                    <label>Eligible Course</label>

                    <select id="driveCourse">
                        <option>Computer Engineering</option>
                        <option>IT Engineering</option>
                        <option>All Courses</option>
                    </select>

                </div>

            </div>

            <br>

            <button class="btn btn-primary"
                    onclick="addDrive()">
                Add Drive
            </button>

        </div>

        <br>

        <div class="table-box">

            <h3 style="margin-bottom:15px;">
                Scheduled Drives
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

                    <tr>
                        <td>TCS Campus Drive</td>
                        <td>20 Aug 2026</td>
                        <td>10:00 AM</td>
                        <td>Seminar Hall</td>
                        <td>Placement Officer</td>
                        <td>Computer Engineering</td>

                        <td>
                            <button class="btn btn-danger"
                                    onclick="deleteDrive(this)">
                                Delete
                            </button>
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    <!-- ===================================================== -->
    <!-- INTERVIEWS -->
    <!-- ===================================================== -->

    <section id="interviews" class="page">

        <div class="page-title">

            <h2>Schedule Interview</h2>

            <p>
                Schedule interviews for shortlisted students.
            </p>

        </div>

        <div class="form-box">

            <div class="form-grid">

                <div class="form-group">
                    <label>Student Name</label>

                    <select>
                        <option>Priya Shah</option>
                        <option>Rahul Patel</option>
                        <option>Amit Desai</option>
                    </select>

                </div>

                <div class="form-group">
                    <label>Interview Type</label>

                    <select>
                        <option>Technical Round</option>
                        <option>HR Round</option>
                        <option>Final Round</option>
                    </select>

                </div>

                <div class="form-group">
                    <label>Date</label>
                    <input type="date">
                </div>

                <div class="form-group">
                    <label>Time</label>
                    <input type="time">
                </div>

                <div class="form-group">
                    <label>Mode</label>

                    <select>
                        <option>Online</option>
                        <option>Offline</option>
                    </select>

                </div>

                <div class="form-group">
                    <label>Interview Location / Link</label>
                    <input type="text"
                           placeholder="Meeting link or location">
                </div>

                <div class="form-group full">
                    <label>Additional Instructions</label>

                    <textarea
                        placeholder="Enter interview instructions..."></textarea>
                </div>

            </div>

            <br>

            <button class="btn btn-primary"
                    onclick="scheduleInterview()">
                Schedule Interview
            </button>

        </div>

    </section>


    <!-- ===================================================== -->
    <!-- NOTIFICATIONS -->
    <!-- ===================================================== -->

    <section id="notifications" class="page">

        <div class="page-title">

            <h2>Notifications</h2>

            <p>
                Recruitment related updates and alerts.
            </p>

        </div>

        <div class="notification">

            <strong>New Application Received</strong>

            <p>
                Rahul Patel has applied for Software Engineer.
            </p>

            <small>
                Today, 10:30 AM
            </small>

        </div>

        <div class="notification">

            <strong>Interview Reminder</strong>

            <p>
                Technical interview with Priya Shah is scheduled tomorrow.
            </p>

            <small>
                Yesterday
            </small>

        </div>

        <div class="notification">

            <strong>Placement Drive Approved</strong>

            <p>
                Your upcoming campus drive has been approved.
            </p>

            <small>
                2 days ago
            </small>

        </div>

    </section>


    <!-- ===================================================== -->
    <!-- SETTINGS -->
    <!-- ===================================================== -->

    <section id="settings" class="page">

        <div class="page-title">

            <h2>Settings</h2>

            <p>
                Manage company dashboard preferences.
            </p>

        </div>


        <div class="form-box">

            <h3>Account Settings</h3>

            <br>

            <div class="form-grid">

                <div class="form-group">
                    <label>Company Email</label>
                    <input type="email" value="hr@tcs.com">
                </div>

                <div class="form-group">
                    <label>Contact Number</label>
                    <input type="text" value="9876543210">
                </div>

                <div class="form-group">
                    <label>Change Password</label>
                    <input type="password"
                           placeholder="New Password">
                </div>

                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password"
                           placeholder="Confirm Password">
                </div>

            </div>

            <br>

            <h3>Notification Settings</h3>

            <br>

            <label>
                <input type="checkbox" checked>
                New application notifications
            </label>

            <br><br>

            <label>
                <input type="checkbox" checked>
                Interview reminders
            </label>

            <br><br>

            <label>
                <input type="checkbox" checked>
                Placement drive updates
            </label>

            <br><br>

            <label>
                <input type="checkbox">
                Marketing and promotional emails
            </label>

            <br><br>

            <h3>Application Preferences</h3>

            <br>

            <label>
                <input type="checkbox" checked>
                Allow students to apply to multiple jobs
            </label>

            <br><br>

            <label>
                <input type="checkbox" checked>
                Show student LinkedIn profiles
            </label>

            <br><br>

            <label>
                <input type="checkbox" checked>
                Allow resume viewing
            </label>

            <br><br>

            <h3>Dashboard Preferences</h3>

            <br>

            <div class="form-grid">

                <div class="form-group">

                    <label>Default Application Status</label>

                    <select>
                        <option>New</option>
                        <option>Under Review</option>
                    </select>

                </div>

                <div class="form-group">

                    <label>Items Per Page</label>

                    <select>
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                    </select>

                </div>

            </div>

            <br>

            <button class="btn btn-primary"
                    onclick="saveSettings()">
                Save Settings
            </button>

        </div>

    </section>

</div>


<!-- ========================================================= -->
<!-- JAVASCRIPT -->
<!-- ========================================================= -->

<script>

    /* ================= PAGE NAVIGATION ================= */

    function showPage(pageId, button = null) {

        const pages = document.querySelectorAll('.page');

        pages.forEach(function(page) {
            page.classList.remove('active');
        });

        const selectedPage = document.getElementById(pageId);

        if (selectedPage) {
            selectedPage.classList.add('active');
        }

        const buttons = document.querySelectorAll('.menu button');

        buttons.forEach(function(btn) {
            btn.classList.remove('active');
        });

        if (button) {
            button.classList.add('active');
        }

        const titles = {
            dashboard: 'Company Dashboard',
            profile: 'Company Profile',
            'post-job': 'Post New Job',
            applications: 'All Applications',
            shortlisted: 'Shortlisted Students',
            drives: 'Upcoming Drives',
            interviews: 'Schedule Interview',
            notifications: 'Notifications',
            settings: 'Settings'
        };

        document.getElementById('topTitle').innerText =
            titles[pageId] || 'Company Dashboard';

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }


    /* ================= APPLICATION SEARCH ================= */

    function filterApplications() {

        const search =
            document.getElementById('applicationSearch')
            .value
            .toLowerCase();

        const course =
            document.getElementById('courseFilter')
            .value;

        const status =
            document.getElementById('statusFilter')
            .value;

        const rows =
            document.querySelectorAll(
                '#applicationsTable tbody tr'
            );

        rows.forEach(function(row) {

            const name =
                row.querySelector('.student-name')
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


    /* ================= CLEAR FILTER ================= */

    function clearFilters() {

        document.getElementById('applicationSearch').value = '';
        document.getElementById('courseFilter').value = '';
        document.getElementById('statusFilter').value = '';

        filterApplications();

    }


    /* ================= EDIT APPLICATION ================= */

    function editApplication(button) {

        const row = button.closest('tr');

        const name =
            row.querySelector('.student-name').innerText;

        const newName =
            prompt(
                'Edit Student Name:',
                name
            );

        if (newName && newName.trim() !== '') {

            row.querySelector('.student-name')
               .innerText = newName.trim();

            alert('Application updated successfully.');

        }

    }


    /* ================= DELETE APPLICATION ================= */

    function deleteApplication(button) {

        const row = button.closest('tr');

        const name =
            row.querySelector('.student-name').innerText;

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


    /* ================= RESUME ================= */

    function viewResume(studentName) {

        alert(
            'Resume PDF for '
            + studentName
            + ' will open here after the student resume is connected.'
        );

    }


    /* ================= ADD DRIVE ================= */

    function addDrive() {

        const name =
            document.getElementById('driveName').value;

        const date =
            document.getElementById('driveDate').value;

        const time =
            document.getElementById('driveTime').value;

        const venue =
            document.getElementById('driveVenue').value;

        const organizer =
            document.getElementById('driveOrganizer').value;

        const course =
            document.getElementById('driveCourse').value;

        if (
            name === '' ||
            date === '' ||
            time === '' ||
            venue === ''
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

        document.getElementById('driveName').value = '';
        document.getElementById('driveDate').value = '';
        document.getElementById('driveTime').value = '';
        document.getElementById('driveVenue').value = '';
        document.getElementById('driveOrganizer').value = '';

        alert(
            'Upcoming drive added successfully.'
        );

    }


    /* ================= DELETE DRIVE ================= */

    function deleteDrive(button) {

        const row = button.closest('tr');

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


    /* ================= POST JOB ================= */

    function postJob() {

        const job =
            document.getElementById('jobTitle').value;

        if (job === '') {

            alert(
                'Please enter the Job Title.'
            );

            return;

        }

        alert(
            'Job posted successfully!'
        );

        document.getElementById('jobTitle').value = '';

    }


    /* ================= INTERVIEW ================= */

    function scheduleInterview() {

        alert(
            'Interview scheduled successfully!'
        );

    }


    /* ================= SAVE PROFILE ================= */

    function saveMessage() {

        alert(
            'Company profile saved successfully!'
        );

    }


    /* ================= SETTINGS ================= */

    function saveSettings() {

        alert(
            'Settings saved successfully!'
        );

    }


    /* ================= GENERAL MESSAGE ================= */

    function showMessage(message) {

        alert(message);

    }


    /* ================= LOGOUT ================= */

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