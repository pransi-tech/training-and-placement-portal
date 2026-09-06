<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard | K D Polytechnic T&P Portal</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5f6fa;
            color: #11164b;
            min-height: 100vh;
        }

        button,
        input,
        select,
        textarea {
            font-family: Arial, sans-serif;
        }

        button {
            cursor: pointer;
        }

        /* ================= SIDEBAR ================= */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 285px;
            height: 100vh;
            background: #171052;
            padding: 22px 17px;
            color: white;
            overflow-y: auto;
            z-index: 1000;
        }

        .logo-box {
            background: #272064;
            border: 1px solid rgba(255, 255, 255, 0.13);
            border-radius: 15px;
            padding: 19px 12px;
            text-align: center;
            margin-bottom: 30px;
        }

        .logo-box h2 {
            font-size: 24px;
            margin-bottom: 7px;
        }

        .logo-box h2 span {
            color: #b8b6ff;
        }

        .logo-box p {
            color: #dddafe;
            font-size: 14px;
            letter-spacing: .3px;
        }

        .menu-title {
            font-size: 12px;
            color: #aaa5e7;
            margin: 0 11px 10px;
            letter-spacing: 1px;
        }

        .menu {
            list-style: none;
        }

        .menu li {
            margin-bottom: 5px;
        }

        .menu button {
            width: 100%;
            border: none;
            background: transparent;
            color: white;
            padding: 14px 18px;
            border-radius: 9px;
            text-align: left;
            font-size: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: .2s;
        }

        .menu button:hover {
            background: #272064;
        }

        .menu button.active {
            background: #382d83;
        }

        .menu-icon {
            width: 22px;
            text-align: center;
            font-size: 18px;
        }

        .logout-btn {
            margin-top: 25px !important;
            background: #c6213a !important;
        }

        .logout-btn:hover {
            background: #ad1b31 !important;
        }

        /* ================= MAIN ================= */

        .main {
            margin-left: 285px;
            min-height: 100vh;
            padding: 28px;
        }

        /* ================= TOPBAR ================= */

        .topbar {
            background: white;
            border-radius: 15px;
            padding: 19px 28px;
            min-height: 102px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 5px 18px rgba(21, 16, 82, .08);
            margin-bottom: 28px;
        }

        .topbar h1 {
            font-size: 32px;
            margin-bottom: 6px;
            color: #11164b;
        }

        .topbar p {
            font-size: 16px;
            color: #5e6275;
        }

        .admin-box {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #f6f6fb;
            border-radius: 10px;
            padding: 10px 17px;
            min-width: 220px;
            cursor: pointer;
        }

        .admin-avatar {
            width: 43px;
            height: 43px;
            border-radius: 50%;
            background: #171052;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 21px;
        }

        .admin-info strong {
            display: block;
            font-size: 16px;
            color: #11164b;
        }

        .admin-info span {
            color: #737789;
            font-size: 13px;
            display: block;
            margin-top: 4px;
        }

        /* ================= PAGES ================= */

        .page {
            display: none;
        }

        .page.active {
            display: block;
        }

        /* ================= WELCOME ================= */

        .welcome-box {
            background: linear-gradient(135deg, #2a226f, #32277d);
            border-radius: 16px;
            color: white;
            padding: 32px;
            margin-bottom: 24px;
            box-shadow: 0 8px 22px rgba(36, 28, 108, .18);
        }

        .welcome-box h2 {
            font-size: 29px;
            margin-bottom: 10px;
        }

        .welcome-box p {
            font-size: 16px;
            line-height: 1.6;
        }

        .welcome-note {
            margin-top: 16px;
            display: inline-block;
            padding: 9px 14px;
            background: rgba(255,255,255,.12);
            border-radius: 8px;
            font-size: 13px;
        }

        /* ================= STATS ================= */

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            margin-bottom: 26px;
        }

        .stat-card {
            background: white;
            border-radius: 14px;
            padding: 21px;
            min-height: 155px;
            box-shadow: 0 5px 18px rgba(21,16,82,.07);
        }

        .card-icon {
            width: 47px;
            height: 47px;
            background: #f0f0f8;
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-bottom: 12px;
        }

        .stat-card h3 {
            font-size: 14px;
            color: #555b70;
            margin-bottom: 6px;
        }

        .stat-number {
            font-size: 31px;
            font-weight: bold;
            color: #11164b;
            margin-bottom: 5px;
        }

        .stat-card p {
            color: #737789;
            font-size: 12px;
        }

        /* ================= ACTION CARDS ================= */

        .action-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            margin-bottom: 25px;
        }

        .action-card {
            background: white;
            border-radius: 14px;
            padding: 21px;
            min-height: 155px;
            box-shadow: 0 5px 18px rgba(21,16,82,.07);
            cursor: pointer;
            transition: .2s;
        }

        .action-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 9px 24px rgba(21,16,82,.12);
        }

        .action-card h3 {
            font-size: 16px;
            margin-bottom: 7px;
            color: #11164b;
        }

        .action-card p {
            color: #737789;
            line-height: 1.5;
            font-size: 13px;
        }

        /* ================= SECTION ================= */

        .section-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 18px rgba(21,16,82,.07);
            margin-bottom: 22px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            gap: 15px;
        }

        .section-header h2 {
            color: #11164b;
            font-size: 21px;
        }

        .section-header p {
            color: #737789;
            font-size: 14px;
            margin-top: 5px;
        }

        /* ================= TABLE ================= */

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #f5f5fa;
            color: #555b70;
            padding: 13px;
            text-align: left;
            font-size: 13px;
        }

        td {
            padding: 14px 13px;
            border-bottom: 1px solid #eeeeF4;
            color: #555b70;
            font-size: 14px;
        }

        td strong {
            color: #11164b;
        }

        /* ================= BUTTONS ================= */

        .primary-btn {
            background: #382d83;
            color: white;
            border: none;
            padding: 10px 17px;
            border-radius: 7px;
            font-weight: bold;
        }

        .primary-btn:hover {
            background: #2a216d;
        }

        .secondary-btn {
            background: #f0f0f8;
            color: #29215f;
            border: none;
            padding: 10px 17px;
            border-radius: 7px;
            font-weight: bold;
        }

        .secondary-btn:hover {
            background: #e6e5f2;
        }

        .danger-btn {
            background: #c6213a;
            color: white;
            border: none;
            padding: 10px 17px;
            border-radius: 7px;
            font-weight: bold;
        }

        .small-btn {
            padding: 7px 11px;
            font-size: 12px;
        }

        /* ================= BADGES ================= */

        .badge {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
        }

        .badge-green {
            background: #e7f7ed;
            color: #18733c;
        }

        .badge-blue {
            background: #e9efff;
            color: #3155aa;
        }

        .badge-yellow {
            background: #fff5dc;
            color: #93670b;
        }

        .badge-red {
            background: #ffe7eb;
            color: #b21f38;
        }

        .badge-purple {
            background: #eeeaff;
            color: #4c3a9e;
        }

        /* ================= MANAGEMENT GRID ================= */

        .management-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .management-card {
            border: 1px solid #ededf4;
            border-radius: 12px;
            padding: 21px;
            background: white;
        }

        .management-card:hover {
            box-shadow: 0 5px 15px rgba(21,16,82,.07);
        }

        .management-card h3 {
            color: #11164b;
            margin-bottom: 8px;
            font-size: 18px;
        }

        .management-card p {
            color: #737789;
            font-size: 13px;
            line-height: 1.5;
            margin-bottom: 16px;
        }

        .management-actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        /* ================= FORMS ================= */

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
            font-size: 13px;
            font-weight: bold;
            color: #44495f;
            margin-bottom: 7px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            border: 1px solid #ddddE7;
            border-radius: 7px;
            padding: 11px 12px;
            outline: none;
            color: #33384f;
            background: white;
            font-size: 14px;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .form-actions {
            margin-top: 22px;
            display: flex;
            gap: 10px;
        }

        /* ================= PROFILE ================= */

        .profile-layout {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 20px;
        }

        .profile-side {
            background: white;
            border-radius: 15px;
            padding: 28px 20px;
            text-align: center;
            box-shadow: 0 5px 18px rgba(21,16,82,.07);
            height: fit-content;
        }

        .large-avatar {
            width: 92px;
            height: 92px;
            border-radius: 50%;
            background: #171052;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 42px;
            margin: 0 auto 15px;
        }

        .profile-side h2 {
            color: #11164b;
            font-size: 19px;
            margin-bottom: 6px;
        }

        .profile-side p {
            color: #737789;
            font-size: 13px;
        }

        .profile-form {
            background: white;
            border-radius: 15px;
            padding: 28px;
            box-shadow: 0 5px 18px rgba(21,16,82,.07);
        }

        /* ================= SEARCH ================= */

        .search-box {
            display: flex;
            gap: 10px;
            margin-bottom: 18px;
        }

        .search-box input {
            flex: 1;
            padding: 11px 13px;
            border: 1px solid #ddddE7;
            border-radius: 7px;
            outline: none;
        }

        /* ================= MODAL ================= */

        .modal {
            display: none;
            position: fixed;
            z-index: 3000;
            inset: 0;
            background: rgba(10, 8, 40, .55);
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal.show {
            display: flex;
        }

        .modal-content {
            background: white;
            width: 100%;
            max-width: 700px;
            max-height: 90vh;
            overflow-y: auto;
            border-radius: 15px;
            padding: 28px;
            position: relative;
        }

        .modal-content h2 {
            color: #11164b;
            margin-bottom: 17px;
            font-size: 23px;
        }

        .close-modal {
            position: absolute;
            right: 20px;
            top: 17px;
            border: none;
            background: #f0f0f7;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            font-size: 18px;
        }

        .modal-details {
            color: #5e6275;
            line-height: 1.7;
            font-size: 14px;
        }

        .detail-box {
            background: #f7f7fb;
            border-radius: 9px;
            padding: 13px;
            margin-top: 10px;
        }

        .detail-box strong {
            color: #11164b;
        }

        .detail-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin-top: 15px;
        }

        /* ================= SETTINGS ================= */

        .settings-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .settings-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 18px rgba(21,16,82,.07);
        }

        .settings-card h2 {
            color: #11164b;
            font-size: 19px;
            margin-bottom: 7px;
        }

        .settings-card > p {
            color: #737789;
            font-size: 13px;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .setting-row {
            padding: 15px 0;
            border-bottom: 1px solid #eeeeF4;
        }

        .setting-row:last-child {
            border-bottom: none;
        }

        .setting-row label {
            color: #11164b;
            font-weight: bold;
            font-size: 14px;
            display: block;
            margin-bottom: 7px;
        }

        .setting-row small {
            color: #858897;
            font-size: 12px;
        }

        /* ================= TOAST ================= */

        .toast {
            position: fixed;
            right: 25px;
            bottom: 25px;
            background: #171052;
            color: white;
            padding: 14px 20px;
            border-radius: 9px;
            box-shadow: 0 8px 25px rgba(0,0,0,.2);
            display: none;
            z-index: 5000;
            font-size: 14px;
        }

        .toast.show {
            display: block;
        }

        /* ================= RESPONSIVE ================= */

        @media(max-width:1200px) {

            .stats-grid,
            .action-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .management-grid,
            .settings-grid {
                grid-template-columns: 1fr;
            }
        }

        @media(max-width:900px) {

            .sidebar {
                width: 230px;
            }

            .main {
                margin-left: 230px;
                padding: 18px;
            }

            .profile-layout {
                grid-template-columns: 1fr;
            }
        }

        @media(max-width:700px) {

            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .main {
                margin-left: 0;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .admin-box {
                width: 100%;
            }

            .stats-grid,
            .action-grid,
            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: auto;
            }

            .detail-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<!-- ================= SIDEBAR ================= -->

<aside class="sidebar">

    <div class="logo-box">
        <h2>K D <span>Polytechnic</span></h2>
        <p>Training & Placement Portal</p>
    </div>

    <div class="menu-title">ADMIN MENU</div>

    <ul class="menu">

        <li>
            <button class="active" onclick="showPage('dashboard', this)">
                <span class="menu-icon">🏠</span>
                Dashboard
            </button>
        </li>

        <li>
            <button onclick="showPage('students', this)">
                <span class="menu-icon">👨‍🎓</span>
                Students
            </button>
        </li>

        <li>
            <button onclick="showPage('companies', this)">
                <span class="menu-icon">🏢</span>
                Companies
            </button>
        </li>

        <li>
            <button onclick="showPage('applications', this)">
                <span class="menu-icon">📄</span>
                Applications
            </button>
        </li>

        <li>
            <button onclick="showPage('drives', this)">
                <span class="menu-icon">🎯</span>
                Placement Drives
            </button>
        </li>

        <li>
            <button onclick="showPage('courses', this)">
                <span class="menu-icon">📚</span>
                Manage Courses
            </button>
        </li>

        <li>
            <button onclick="showPage('events', this)">
                <span class="menu-icon">📅</span>
                Manage Events
            </button>
        </li>

        <li>
            <button onclick="showPage('notifications', this)">
                <span class="menu-icon">🔔</span>
                Notifications
            </button>
        </li>

        <li>
            <button onclick="showPage('settings', this)">
                <span class="menu-icon">⚙️</span>
                Settings
            </button>
        </li>

        <li>
            <button class="logout-btn" onclick="logoutAdmin()">
                <span class="menu-icon">🚪</span>
                Logout
            </button>
        </li>

    </ul>

</aside>


<!-- ================= MAIN ================= -->

<main class="main">

    <!-- TOPBAR -->

    <div class="topbar">

        <div>
            <h1 id="pageTitle">Admin Dashboard</h1>
            <p id="pageSubtitle">
                Manage students, companies and placement activities.
            </p>
        </div>

        <div class="admin-box" onclick="showPage('profile')">

            <div class="admin-avatar">
                👨‍💼
            </div>

            <div class="admin-info">
                <strong>Placement Admin</strong>
                <span>Administrator</span>
            </div>

        </div>

    </div>


    <!-- ================================================= -->
    <!-- DASHBOARD -->
    <!-- ================================================= -->

    <section id="dashboard" class="page active">

        <div class="welcome-box">

            <h2>Welcome, Admin 👋</h2>

            <p>
                Manage students, companies, placement drives,
                applications, courses and upcoming events from one place.
            </p>

            <span class="welcome-note">
                K D Polytechnic Training & Placement Portal
            </span>

        </div>


        <!-- STATISTICS -->

        <div class="stats-grid">

            <div class="stat-card">

                <div class="card-icon">👨‍🎓</div>

<<<<<<< HEAD
                <h3>Total Students</h3>
=======
                <h3>{{ $studentCount }}</h3>
>>>>>>> b160755 (Update company dashboard and admin pages)

                <div class="stat-number">128</div>

                <p>Registered students</p>

            </div>


            <div class="stat-card">

                <div class="card-icon">⭐</div>

<<<<<<< HEAD
                <h3>Shortlisted</h3>
=======
                <h3 id="companyCount">{{ $companyCount }}</h3>
>>>>>>> b160755 (Update company dashboard and admin pages)

                <div class="stat-number">24</div>

                <p>Students shortlisted</p>

            </div>


            <div class="stat-card">

                <div class="card-icon">🏆</div>

<<<<<<< HEAD
                <h3>Selected</h3>
=======
                <h3 id="opportunityCount">0</h3>
>>>>>>> b160755 (Update company dashboard and admin pages)

                <div class="stat-number">16</div>

                <p>Students selected</p>

            </div>


            <div class="stat-card">

                <div class="card-icon">❌</div>

<<<<<<< HEAD
                <h3>Rejected</h3>
=======
                <h3 id="applicationCount">0</h3>
>>>>>>> b160755 (Update company dashboard and admin pages)

                <div class="stat-number">19</div>

                <p>Applications rejected</p>

            </div>

        </div>


        <!-- QUICK MANAGEMENT -->

        <div class="section-card">

            <div class="section-header">

                <div>
                    <h2>Quick Management</h2>
                    <p>Frequently used admin options</p>
                </div>

            </div>


            <div class="action-grid">

                <div class="action-card"
                     onclick="showPage('students')">

                    <div class="card-icon">👨‍🎓</div>

                    <h3>Update Students</h3>

                    <p>
                        View student records and update their information.
                    </p>

                </div>


                <div class="action-card"
                     onclick="showPage('companies')">

                    <div class="card-icon">🏢</div>

                    <h3>Manage Companies</h3>

                    <p>
                        Add companies and view company recruitment details.
                    </p>

                </div>


                <div class="action-card"
                     onclick="showPage('drives')">

                    <div class="card-icon">🎯</div>

                    <h3>Placement Drives</h3>

                    <p>
                        Create and manage upcoming placement drives.
                    </p>

                </div>


                <div class="action-card"
                     onclick="showPage('applications')">

                    <div class="card-icon">📄</div>

                    <h3>Applications</h3>

                    <p>
                        Check applications and update their status.
                    </p>

                </div>

            </div>

        </div>


        <!-- RECENT APPLICATIONS -->

        <div class="section-card">

            <div class="section-header">

                <div>
                    <h2>Recent Applications</h2>
                    <p>Latest student applications</p>
                </div>

<button class="secondary-btn"
        onclick="showPage('applications')">
    View All
</button>

<div class="table-wrapper">

    <table>

        <thead>
            <tr>
                <th>Student</th>
                <th>Company</th>
                <th>Position</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td colspan="4" style="text-align: center;">
                    No applications available yet.
                </td>
            </tr>
        </tbody>

    </table>

</div>

            </div>


            <div class="table-container">

                <table>

                    <thead>

                        <tr>
                            <th>Student</th>
                            <th>Company</th>
                            <th>Position</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td><strong>Riya Patel</strong></td>
                            <td>TCS</td>
                            <td>Software Trainee</td>
                            <td>
                                <span class="badge badge-green">
                                    Selected
                                </span>
                            </td>
                            <td>
                                <button class="primary-btn small-btn"
                                    onclick="viewApplication('Riya Patel','TCS','Software Trainee','Selected')">
                                    View Details
                                </button>
                            </td>
                        </tr>


                        <tr>
                            <td><strong>Meet Shah</strong></td>
                            <td>Infosys</td>
                            <td>Web Developer</td>
                            <td>
                                <span class="badge badge-yellow">
                                    Shortlisted
                                </span>
                            </td>
                            <td>
                                <button class="primary-btn small-btn"
                                    onclick="viewApplication('Meet Shah','Infosys','Web Developer','Shortlisted')">
                                    View Details
                                </button>
                            </td>
                        </tr>


                        <tr>
                            <td><strong>Krisha Patel</strong></td>
                            <td>Wipro</td>
                            <td>Junior Developer</td>
                            <td>
                                <span class="badge badge-blue">
                                    Applied
                                </span>
                            </td>
                            <td>
                                <button class="primary-btn small-btn"
                                    onclick="viewApplication('Krisha Patel','Wipro','Junior Developer','Applied')">
                                    View Details
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </section>


    <!-- ================================================= -->
    <!-- STUDENTS -->
    <!-- ================================================= -->

    <section id="students" class="page">

        <div class="section-card">

            <div class="section-header">

                <div>
                    <h2>Student Management</h2>
                    <p>View and update registered students</p>
                </div>

                <button class="primary-btn"
                    onclick="openStudentForm()">
                    + Add Student
                </button>

            </div>


            <div class="search-box">

                <input
                    type="text"
                    id="studentSearch"
                    placeholder="Search student by name..."
                    onkeyup="searchTable('studentSearch','studentTable')">

            </div>


            <div class="table-container">

                <table id="studentTable">

                    <thead>

                        <tr>
                            <th>Name</th>
                            <th>Enrollment</th>
                            <th>Branch</th>
                            <th>CPI</th>
                            <th>Placement Status</th>
                            <th>Action</th>
                        </tr>

                    </thead>

<<<<<<< HEAD
                    <tbody>

                        <tr>
                            <td><strong>Riya Patel</strong></td>
                            <td>CE23041</td>
                            <td>Computer Engineering</td>
                            <td>8.6</td>
                            <td>
                                <span class="badge badge-green">
                                    Selected
                                </span>
                            </td>
                            <td>
                                <button class="primary-btn small-btn"
                                    onclick="editStudent('Riya Patel','CE23041','Computer Engineering','8.6','Selected')">
                                    Update
                                </button>

                                <button class="secondary-btn small-btn"
                                    onclick="viewStudent('Riya Patel')">
                                    View Details
                                </button>
                            </td>
                        </tr>


                        <tr>
                            <td><strong>Meet Shah</strong></td>
                            <td>CE23052</td>
                            <td>Computer Engineering</td>
                            <td>8.1</td>
                            <td>
                                <span class="badge badge-yellow">
                                    Shortlisted
                                </span>
                            </td>
                            <td>
                                <button class="primary-btn small-btn"
                                    onclick="editStudent('Meet Shah','CE23052','Computer Engineering','8.1','Shortlisted')">
                                    Update
                                </button>

                                <button class="secondary-btn small-btn"
                                    onclick="viewStudent('Meet Shah')">
                                    View Details
                                </button>
                            </td>
                        </tr>


                        <tr>
                            <td><strong>Krisha Patel</strong></td>
                            <td>CE23064</td>
                            <td>Computer Engineering</td>
                            <td>7.8</td>
                            <td>
                                <span class="badge badge-blue">
                                    Available
                                </span>
                            </td>
                            <td>
                                <button class="primary-btn small-btn"
                                    onclick="editStudent('Krisha Patel','CE23064','Computer Engineering','7.8','Available')">
                                    Update
                                </button>

                                <button class="secondary-btn small-btn"
                                    onclick="viewStudent('Krisha Patel')">
                                    View Details
                                </button>
                            </td>
                        </tr>

                    </tbody>
=======
<tbody>
    @forelse($students as $student)
        <tr>
            <td>{{ $student->enrollment_no }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->branch }}</td>
            <td>
                <span class="status">Active</span>
            </td>
            <td>
                <button class="btn btn-light">
                    View
                </button>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6" style="text-align: center;">
                No students registered yet.
            </td>
        </tr>
    @endforelse
</tbody>
>>>>>>> b160755 (Update company dashboard and admin pages)

                </table>

            </div>

        </div>

    </section>


    <!-- ================================================= -->
    <!-- COMPANIES -->
    <!-- ================================================= -->

    <section id="companies" class="page">

        <div class="section-card">

            <div class="section-header">

                <div>
                    <h2>Company Management</h2>
                    <p>Add and manage companies participating in placements.</p>
                </div>

                <button class="primary-btn"
                    onclick="showPage('addCompany')">
                    + Add Company
                </button>

            </div>


            <div class="management-grid">

                <div class="management-card">

                    <div class="card-icon">🏢</div>

<<<<<<< HEAD
                    <h3>TCS</h3>

                    <p>
                        Tata Consultancy Services is hiring students
                        for Software Trainee positions.
                    </p>

                    <div class="management-actions">

                        <button class="primary-btn small-btn"
                            onclick="viewCompany('TCS')">
                            View Details
                        </button>

                        <button class="secondary-btn small-btn"
                            onclick="showPage('drives')">
                            Placement Drive
                        </button>
=======
                  <tbody>
    @forelse($companies as $company)
        <tr>
            <td>{{ $company->name }}</td>
            <td>{{ $company->email }}</td>
            <td>{{ $company->industry ?? 'N/A' }}</td>
            <td>{{ $company->location ?? 'N/A' }}</td>
            <td><span class="status">Active</span></td>
            <td>
                <button class="btn btn-light">View</button>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6" style="text-align: center;">
                No companies registered yet.
            </td>
        </tr>
    @endforelse
</tbody>
>>>>>>> b160755 (Update company dashboard and admin pages)

                    </div>

                </div>


                <div class="management-card">

                    <div class="card-icon">💻</div>

                    <h3>Infosys</h3>

                    <p>
                        IT services company offering opportunities
                        for Web Developer roles.
                    </p>

                    <div class="management-actions">

                        <button class="primary-btn small-btn"
                            onclick="viewCompany('Infosys')">
                            View Details
                        </button>

                        <button class="secondary-btn small-btn"
                            onclick="showPage('drives')">
                            Placement Drive
                        </button>

                    </div>

                </div>


                <div class="management-card">

                    <div class="card-icon">🌐</div>

                    <h3>Wipro</h3>

                    <p>
                        Recruitment opportunity for junior software
                        development positions.
                    </p>

                    <div class="management-actions">

                        <button class="primary-btn small-btn"
                            onclick="viewCompany('Wipro')">
                            View Details
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ================================================= -->
    <!-- ADD COMPANY -->
    <!-- ================================================= -->

    <section id="addCompany" class="page">

        <div class="section-card">

            <div class="section-header">

                <div>
                    <h2>Add New Company</h2>
                    <p>Enter company information for placement activities.</p>
                </div>

                <button class="secondary-btn"
                    onclick="showPage('companies')">
                    ← Back
                </button>

            </div>


            <form onsubmit="saveCompany(event)">

                <div class="form-grid">

                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" required
                            placeholder="Enter company name">
                    </div>


                    <div class="form-group">
                        <label>Industry</label>
                        <input type="text" required
                            placeholder="e.g. IT Services">
                    </div>


                    <div class="form-group">
                        <label>HR Name</label>
                        <input type="text"
                            placeholder="Enter HR name">
                    </div>


                    <div class="form-group">
                        <label>Contact Email</label>
                        <input type="email" required
                            placeholder="company@email.com">
                    </div>


                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="tel"
                            placeholder="Enter contact number">
                    </div>


                    <div class="form-group">
                        <label>Company Website</label>
                        <input type="text"
                            placeholder="www.company.com">
                    </div>


                    <div class="form-group full">
                        <label>Company Address</label>
                        <textarea
                            placeholder="Enter company address"></textarea>
                    </div>


                    <div class="form-group full">
                        <label>About Company</label>
                        <textarea
                            placeholder="Write short company description"></textarea>
                    </div>

                </div>


                <div class="form-actions">

                    <button class="primary-btn" type="submit">
                        Save Company
                    </button>

                    <button class="secondary-btn"
                        type="button"
                        onclick="showPage('companies')">
                        Cancel
                    </button>

                </div>

            </form>

        </div>

    </section>


    <!-- ================================================= -->
    <!-- APPLICATIONS -->
    <!-- ================================================= -->

    <section id="applications" class="page">

        <div class="section-card">

            <div class="section-header">

                <div>
                    <h2>Student Applications</h2>
                    <p>Track and update placement application status.</p>
                </div>

            </div>


            <div class="table-container">

                <table>

                    <thead>

                        <tr>
                            <th>Student</th>
                            <th>Company</th>
                            <th>Position</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td><strong>Riya Patel</strong></td>
                            <td>TCS</td>
                            <td>Software Trainee</td>
                            <td>20 Aug 2026</td>
                            <td>
                                <span class="badge badge-green">
                                    Selected
                                </span>
                            </td>
                            <td>
                                <button class="primary-btn small-btn"
                                    onclick="viewApplication('Riya Patel','TCS','Software Trainee','Selected')">
                                    View Details
                                </button>
                            </td>
                        </tr>


                        <tr>
                            <td><strong>Meet Shah</strong></td>
                            <td>Infosys</td>
                            <td>Web Developer</td>
                            <td>21 Aug 2026</td>
                            <td>
                                <span class="badge badge-yellow">
                                    Shortlisted
                                </span>
                            </td>
                            <td>
                                <button class="primary-btn small-btn"
                                    onclick="viewApplication('Meet Shah','Infosys','Web Developer','Shortlisted')">
                                    View Details
                                </button>
                            </td>
                        </tr>


                        <tr>
                            <td><strong>Krisha Patel</strong></td>
                            <td>Wipro</td>
                            <td>Junior Developer</td>
                            <td>22 Aug 2026</td>
                            <td>
                                <span class="badge badge-blue">
                                    Applied
                                </span>
                            </td>
                            <td>
                                <button class="primary-btn small-btn"
                                    onclick="viewApplication('Krisha Patel','Wipro','Junior Developer','Applied')">
                                    View Details
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </section>


    <!-- ================================================= -->
    <!-- PLACEMENT DRIVES -->
    <!-- ================================================= -->

    <section id="drives" class="page">

        <div class="section-card">

            <div class="section-header">

                <div>
                    <h2>Placement Drive Management</h2>
                    <p>Create and manage company placement drives.</p>
                </div>

                <button class="primary-btn"
                    onclick="showPage('addDrive')">
                    + Create Drive
                </button>

            </div>


            <div class="management-grid">

                <div class="management-card">

                    <div class="card-icon">🎯</div>

                    <h3>TCS Campus Drive</h3>

                    <p>
                        Software Trainee recruitment drive for eligible
                        Computer Engineering students.
                    </p>

                    <span class="badge badge-green">
                        Upcoming
                    </span>

                    <div class="management-actions"
                         style="margin-top:15px;">

                        <button class="primary-btn small-btn"
                            onclick="viewDrive('TCS Campus Drive')">
                            View Details
                        </button>

                        <button class="secondary-btn small-btn"
                            onclick="editDrive('TCS Campus Drive')">
                            Manage
                        </button>

                    </div>

                </div>


                <div class="management-card">

                    <div class="card-icon">💼</div>

                    <h3>Infosys Recruitment Drive</h3>

                    <p>
                        Web Developer recruitment opportunity with
                        aptitude and technical rounds.
                    </p>

                    <span class="badge badge-yellow">
                        Registration Open
                    </span>

                    <div class="management-actions"
                         style="margin-top:15px;">

                        <button class="primary-btn small-btn"
                            onclick="viewDrive('Infosys Recruitment Drive')">
                            View Details
                        </button>

                        <button class="secondary-btn small-btn"
                            onclick="editDrive('Infosys Recruitment Drive')">
                            Manage
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ================================================= -->
    <!-- ADD DRIVE -->
    <!-- ================================================= -->

    <section id="addDrive" class="page">

        <div class="section-card">

            <div class="section-header">

                <div>
                    <h2>Create Placement Drive</h2>
                    <p>Add details for a new campus recruitment drive.</p>
                </div>

                <button class="secondary-btn"
                    onclick="showPage('drives')">
                    ← Back
                </button>

            </div>


            <form onsubmit="saveDrive(event)">

                <div class="form-grid">

                    <div class="form-group">
                        <label>Company</label>

                        <select required>
                            <option value="">Select Company</option>
                            <option>TCS</option>
                            <option>Infosys</option>
                            <option>Wipro</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Job Role</label>
                        <input type="text"
                            required
                            placeholder="Software Trainee">
                    </div>


                    <div class="form-group">
                        <label>Drive Date</label>
                        <input type="date" required>
                    </div>


                    <div class="form-group">
                        <label>Reporting Time</label>
                        <input type="time" required>
                    </div>


                    <div class="form-group">
                        <label>Minimum CPI</label>
                        <input type="number"
                            step="0.1"
                            placeholder="7.0">
                    </div>


                    <div class="form-group">
                        <label>Vacancies</label>
                        <input type="number"
                            placeholder="Number of vacancies">
                    </div>


                    <div class="form-group full">

                        <label>Selection Process</label>

                        <textarea
                            placeholder="Example: Aptitude Test → Technical Interview → HR Interview"></textarea>

                    </div>

                </div>


                <div class="form-actions">

                    <button class="primary-btn" type="submit">
                        Create Placement Drive
                    </button>

                    <button class="secondary-btn"
                        type="button"
                        onclick="showPage('drives')">
                        Cancel
                    </button>

                </div>

            </form>

        </div>

    </section>


    <!-- ================================================= -->
    <!-- COURSES -->
    <!-- ================================================= -->

    <section id="courses" class="page">

        <div class="section-card">

            <div class="section-header">

                <div>
                    <h2>Course Management</h2>
                    <p>Add, update and manage training courses.</p>
                </div>

                <button class="primary-btn"
                    onclick="showPage('addCourse')">
                    + Add Course
                </button>

            </div>


            <div class="management-grid">

                <div class="management-card">

                    <div class="card-icon">💻</div>

                    <h3>Web Development</h3>

                    <p>
                        HTML, CSS, JavaScript and basic web development
                        concepts for placement preparation.
                    </p>

                    <div class="management-actions">

                        <button class="primary-btn small-btn"
                            onclick="viewCourse('Web Development')">
                            View Details
                        </button>

                        <button class="secondary-btn small-btn"
                            onclick="editCourse('Web Development')">
                            Manage
                        </button>

                    </div>

                </div>


                <div class="management-card">

                    <div class="card-icon">🐍</div>

                    <h3>Python Programming</h3>

                    <p>
                        Python basics, functions, OOP and introductory
                        problem-solving concepts.
                    </p>

                    <div class="management-actions">

                        <button class="primary-btn small-btn"
                            onclick="viewCourse('Python Programming')">
                            View Details
                        </button>

                        <button class="secondary-btn small-btn"
                            onclick="editCourse('Python Programming')">
                            Manage
                        </button>

                    </div>

                </div>


                <div class="management-card">

                    <div class="card-icon">🤖</div>

                    <h3>Generative AI Basics</h3>

                    <p>
                        Introduction to AI, prompt design and
                        intelligent applications.
                    </p>

                    <div class="management-actions">

                        <button class="primary-btn small-btn"
                            onclick="viewCourse('Generative AI Basics')">
                            View Details
                        </button>

                        <button class="secondary-btn small-btn"
                            onclick="editCourse('Generative AI Basics')">
                            Manage
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ================================================= -->
    <!-- ADD COURSE -->
    <!-- ================================================= -->

    <section id="addCourse" class="page">

        <div class="section-card">

            <div class="section-header">

                <div>
                    <h2>Add New Course</h2>
                    <p>Create a training course for students.</p>
                </div>

                <button class="secondary-btn"
                    onclick="showPage('courses')">
                    ← Back
                </button>

            </div>


            <form onsubmit="saveCourse(event)">

                <div class="form-grid">

                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" required
                            placeholder="Enter course name">
                    </div>


                    <div class="form-group">
                        <label>Trainer Name</label>
                        <input type="text"
                            placeholder="Enter trainer name">
                    </div>


                    <div class="form-group">
                        <label>Duration</label>
                        <input type="text"
                            placeholder="Example: 4 Weeks">
                    </div>


                    <div class="form-group">
                        <label>Course Level</label>

                        <select>
                            <option>Beginner</option>
                            <option>Intermediate</option>
                            <option>Advanced</option>
                        </select>

                    </div>


                    <div class="form-group full">

                        <label>Course Description</label>

                        <textarea
                            placeholder="Enter course information"></textarea>

                    </div>


                    <div class="form-group full">

                        <label>Topics Covered</label>

                        <textarea
                            placeholder="HTML, CSS, JavaScript..."></textarea>

                    </div>

                </div>


                <div class="form-actions">

                    <button class="primary-btn" type="submit">
                        Save Course
                    </button>

                    <button class="secondary-btn"
                        type="button"
                        onclick="showPage('courses')">
                        Cancel
                    </button>

                </div>

            </form>

        </div>

    </section>


    <!-- ================================================= -->
    <!-- EVENTS -->
    <!-- ================================================= -->

    <section id="events" class="page">

        <div class="section-card">

            <div class="section-header">

                <div>
                    <h2>Event Management</h2>
                    <p>Manage upcoming training and placement events.</p>
                </div>

                <button class="primary-btn"
                    onclick="showPage('addEvent')">
                    + Add Event
                </button>

            </div>


            <div class="management-grid">

                <div class="management-card">

                    <div class="card-icon">📅</div>

                    <h3>Resume Building Workshop</h3>

                    <p>
                        Workshop to help students create professional
                        resumes for placement applications.
                    </p>

                    <span class="badge badge-purple">
                        28 Aug 2026
                    </span>

                    <div class="management-actions"
                        style="margin-top:15px;">

                        <button class="primary-btn small-btn"
                            onclick="viewEvent('Resume Building Workshop')">
                            View Details
                        </button>

                        <button class="secondary-btn small-btn"
                            onclick="editEvent('Resume Building Workshop')">
                            Manage
                        </button>

                    </div>

                </div>


                <div class="management-card">

                    <div class="card-icon">🎤</div>

                    <h3>Mock Interview Session</h3>

                    <p>
                        Practice interview session conducted for
                        final-year students.
                    </p>

                    <span class="badge badge-blue">
                        02 Sep 2026
                    </span>

                    <div class="management-actions"
                        style="margin-top:15px;">

                        <button class="primary-btn small-btn"
                            onclick="viewEvent('Mock Interview Session')">
                            View Details
                        </button>

                        <button class="secondary-btn small-btn"
                            onclick="editEvent('Mock Interview Session')">
                            Manage
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ================================================= -->
    <!-- ADD EVENT -->
    <!-- ================================================= -->

    <section id="addEvent" class="page">

        <div class="section-card">

            <div class="section-header">

                <div>
                    <h2>Add New Event</h2>
                    <p>Create an upcoming training or placement event.</p>
                </div>

                <button class="secondary-btn"
                    onclick="showPage('events')">
                    ← Back
                </button>

            </div>


            <form onsubmit="saveEvent(event)">

                <div class="form-grid">

                    <div class="form-group">
                        <label>Event Name</label>
                        <input type="text" required
                            placeholder="Enter event name">
                    </div>


                    <div class="form-group">
                        <label>Event Type</label>

                        <select required>
                            <option>Workshop</option>
                            <option>Seminar</option>
                            <option>Mock Interview</option>
                            <option>Training</option>
                        </select>

                    </div>


                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" required>
                    </div>


                    <div class="form-group">
                        <label>Time</label>
                        <input type="time" required>
                    </div>


                    <div class="form-group">
                        <label>Venue</label>
                        <input type="text"
                            placeholder="Seminar Hall / Lab">
                    </div>


                    <div class="form-group">
                        <label>Target Students</label>

                        <select>
                            <option>All Students</option>
                            <option>Final Year</option>
                            <option>Computer Engineering</option>
                        </select>

                    </div>


                    <div class="form-group full">

                        <label>Description</label>

                        <textarea
                            placeholder="Enter event description"></textarea>

                    </div>

                </div>


                <div class="form-actions">

                    <button class="primary-btn" type="submit">
                        Save Event
                    </button>

                    <button class="secondary-btn"
                        type="button"
                        onclick="showPage('events')">
                        Cancel
                    </button>

                </div>

            </form>

        </div>

    </section>


    <!-- ================================================= -->
    <!-- NOTIFICATIONS -->
    <!-- ================================================= -->

    <section id="notifications" class="page">

        <div class="section-card">

            <div class="section-header">

                <div>
                    <h2>Notifications</h2>
                    <p>Recent portal activities and updates.</p>
                </div>

                <button class="secondary-btn"
                    onclick="markAllRead()">
                    Mark All Read
                </button>

            </div>


            <div class="notification-list">

                <div class="detail-box">
                    <strong>🏢 New Company Added</strong>
                    <p>
                        Infosys has been added to the placement portal.
                    </p>
                    <small>Today, 10:15 AM</small>
                </div>


                <div class="detail-box">
                    <strong>👨‍🎓 New Student Registered</strong>
                    <p>
                        A new Computer Engineering student registered.
                    </p>
                    <small>Today, 09:40 AM</small>
                </div>


                <div class="detail-box">
                    <strong>🎯 Placement Drive Updated</strong>
                    <p>
                        TCS campus drive registration is currently open.
                    </p>
                    <small>Yesterday</small>
                </div>


                <div class="detail-box">
                    <strong>📚 Course Added</strong>
                    <p>
                        Generative AI Basics course is now available.
                    </p>
                    <small>Yesterday</small>
                </div>

            </div>

        </div>

    </section>


    <!-- ================================================= -->
    <!-- ADMIN PROFILE -->
    <!-- ================================================= -->

    <section id="profile" class="page">

        <div class="profile-layout">

            <div class="profile-side">

                <div class="large-avatar">
                    👨‍💼
                </div>

                <h2>Placement Admin</h2>

                <p>Administrator</p>

                <br>

                <span class="badge badge-green">
                    Account Active
                </span>

            </div>


            <div class="profile-form">

                <h2 style="margin-bottom:20px;">
                    Admin Profile
                </h2>

                <form onsubmit="saveProfile(event)">

                    <div class="form-grid">

                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text"
                                value="Placement Admin"
                                required>
                        </div>


                        <div class="form-group">
                            <label>Role</label>
                            <input type="text"
                                value="Administrator"
                                readonly>
                        </div>


                        <div class="form-group">
                            <label>Email</label>
                            <input type="email"
                                value="admin@kdpolytechnic.ac.in"
                                required>
                        </div>


                        <div class="form-group">
                            <label>Phone</label>
                            <input type="tel"
                                value="9876543210">
                        </div>


                        <div class="form-group full">
                            <label>Department</label>
                            <input type="text"
                                value="Training & Placement Department">
                        </div>

                    </div>


                    <div class="form-actions">

                        <button class="primary-btn">
                            Save Profile
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </section>


    <!-- ================================================= -->
    <!-- SETTINGS -->
    <!-- ================================================= -->

    <section id="settings" class="page">

        <div class="settings-grid">


            <!-- PASSWORD -->

            <div class="settings-card">

                <h2>🔐 Change Password</h2>

                <p>
                    Verify your current password before creating
                    a new password.
                </p>

                <form onsubmit="changePassword(event)">

                    <div class="form-group">

                        <label>Current Password</label>

                        <input
                            type="password"
                            id="currentPassword"
                            required
                            placeholder="Enter current password">

                    </div>


                    <br>


                    <div class="form-group">

                        <label>New Password</label>

                        <input
                            type="password"
                            id="newPassword"
                            required
                            minlength="6"
                            placeholder="Minimum 6 characters">

                    </div>


                    <br>


                    <div class="form-group">

                        <label>Confirm New Password</label>

                        <input
                            type="password"
                            id="confirmPassword"
                            required
                            placeholder="Confirm new password">

                    </div>


                    <div class="form-actions">

                        <button class="primary-btn">
                            Update Password
                        </button>

                    </div>

                </form>

            </div>


            <!-- ACCOUNT -->

            <div class="settings-card">

                <h2>⚙️ Portal Settings</h2>

                <p>
                    Basic settings for the admin portal.
                </p>


                <div class="setting-row">

                    <label>Email Notifications</label>

                    <small>
                        Receive notifications about new students
                        and applications.
                    </small>

                    <br><br>

                    <input type="checkbox" checked>
                    Enable notifications

                </div>


                <div class="setting-row">

                    <label>Placement Alerts</label>

                    <small>
                        Show alerts when placement drive status changes.
                    </small>

                    <br><br>

                    <input type="checkbox" checked>
                    Enable placement alerts

                </div>


                <div class="setting-row">

                    <label>Account Status</label>

                    <small>
                        Administrator account is currently active.
                    </small>

                    <br><br>

                    <span class="badge badge-green">
                        Active
                    </span>

                </div>

            </div>


            <!-- SECURITY -->

            <div class="settings-card">

                <h2>🛡️ Security</h2>

                <p>
                    Basic security information for the admin account.
                </p>

                <div class="setting-row">

                    <label>Last Password Change</label>

                    <small>
                        15 August 2026
                    </small>

                </div>


                <div class="setting-row">

                    <label>Login Verification</label>

                    <small>
                        Password verification is required for
                        sensitive account changes.
                    </small>

                </div>


                <div class="setting-row">

                    <label>Session Status</label>

                    <br>

                    <span class="badge badge-green">
                        Secure Session
                    </span>

                </div>

            </div>


            <!-- PORTAL INFO -->

            <div class="settings-card">

                <h2>ℹ️ Portal Information</h2>

                <p>
                    Information about this Training & Placement Portal.
                </p>

                <div class="setting-row">

                    <label>Portal Name</label>

                    <small>
                        K D Polytechnic Training & Placement Portal
                    </small>

                </div>


                <div class="setting-row">

                    <label>Administrator</label>

                    <small>
                        Placement Department
                    </small>

                </div>


                <div class="setting-row">

                    <label>Portal Version</label>

                    <small>
                        Version 1.0
                    </small>

                </div>

            </div>

        </div>

    </section>

</main>


<!-- ================= MODAL ================= -->

<div class="modal" id="detailsModal">

    <div class="modal-content">

        <button class="close-modal"
            onclick="closeModal()">
            ×
        </button>

        <h2 id="modalTitle">
            Details
        </h2>

        <div class="modal-details"
            id="modalBody">
        </div>

    </div>

</div>


<!-- ================= TOAST ================= -->

<div class="toast" id="toast">
    Saved successfully!
</div>


<script>

    /* ================= PAGE NAVIGATION ================= */

    function showPage(pageId, clickedButton = null) {

        document.querySelectorAll(".page").forEach(page => {
            page.classList.remove("active");
        });

        const page = document.getElementById(pageId);

        if (page) {
            page.classList.add("active");
        }

        document.querySelectorAll(".menu button").forEach(btn => {
            btn.classList.remove("active");
        });

        if (clickedButton) {
            clickedButton.classList.add("active");
        }

        const titles = {

            dashboard: [
                "Admin Dashboard",
                "Manage students, companies and placement activities."
            ],

            students: [
                "Student Management",
                "View and update student information."
            ],

            companies: [
                "Company Management",
                "Manage companies participating in placements."
            ],

            addCompany: [
                "Add Company",
                "Register a new company."
            ],

            applications: [
                "Applications",
                "Track student placement applications."
            ],

            drives: [
                "Placement Drives",
                "Manage campus recruitment drives."
            ],

            addDrive: [
                "Create Placement Drive",
                "Add a new recruitment drive."
            ],

            courses: [
                "Manage Courses",
                "Manage student training courses."
            ],

            addCourse: [
                "Add Course",
                "Create a new training course."
            ],

            events: [
                "Manage Events",
                "Manage upcoming portal events."
            ],

            addEvent: [
                "Add Event",
                "Create a new event."
            ],

            notifications: [
                "Notifications",
                "View recent portal activities."
            ],

            profile: [
                "Admin Profile",
                "View and update administrator information."
            ],

            settings: [
                "Settings",
                "Manage account and portal settings."
            ]

        };

        if (titles[pageId]) {

            document.getElementById("pageTitle").innerText =
                titles[pageId][0];

            document.getElementById("pageSubtitle").innerText =
                titles[pageId][1];

        }

        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }


    /* ================= MODAL ================= */

    function openModal(title, content) {

        document.getElementById("modalTitle").innerText = title;

        document.getElementById("modalBody").innerHTML = content;

        document.getElementById("detailsModal")
            .classList.add("show");
    }


    function closeModal() {

        document.getElementById("detailsModal")
            .classList.remove("show");
    }


    window.onclick = function(event) {

        const modal =
            document.getElementById("detailsModal");

        if (event.target === modal) {
            closeModal();
        }

    };


    /* ================= STUDENT DETAILS ================= */

    function viewStudent(name) {

        openModal(
            "Student Details - " + name,

            `
            <div class="detail-grid">

                <div class="detail-box">
                    <strong>Full Name</strong><br>
                    ${name}
                </div>

                <div class="detail-box">
                    <strong>Enrollment Number</strong><br>
                    CE23041
                </div>

                <div class="detail-box">
                    <strong>Branch</strong><br>
                    Computer Engineering
                </div>

                <div class="detail-box">
                    <strong>Semester</strong><br>
                    6th Semester
                </div>

                <div class="detail-box">
                    <strong>CPI</strong><br>
                    8.6
                </div>

                <div class="detail-box">
                    <strong>Placement Status</strong><br>
                    Shortlisted
                </div>

            </div>

            <div class="detail-box">
                <strong>Email</strong><br>
                student@example.com
            </div>

            <div class="detail-box">
                <strong>Skills</strong><br>
                HTML, CSS, JavaScript, PHP, MySQL
            </div>

            <div class="detail-box">
                <strong>Applications</strong><br>
                TCS, Infosys and Wipro
            </div>

            <br>

            <button class="primary-btn"
                onclick="closeModal(); editStudent('${name}','CE23041','Computer Engineering','8.6','Shortlisted')">
                Update Student
            </button>
            `
        );
    }


    /* ================= EDIT STUDENT ================= */

    function editStudent(name, enrollment, branch, cpi, status) {

        showPage("students");

        setTimeout(() => {

            openModal(
                "Update Student - " + name,

                `
                <form onsubmit="updateStudent(event)">

                    <div class="form-grid">

                        <div class="form-group">
                            <label>Full Name</label>
                            <input value="${name}" required>
                        </div>

                        <div class="form-group">
                            <label>Enrollment Number</label>
                            <input value="${enrollment}" required>
                        </div>

                        <div class="form-group">
                            <label>Branch</label>
                            <input value="${branch}" required>
                        </div>

                        <div class="form-group">
                            <label>CPI</label>
                            <input value="${cpi}" type="number" step="0.1">
                        </div>

                        <div class="form-group">
                            <label>Placement Status</label>

                            <select>

                                <option ${status === "Available" ? "selected" : ""}>
                                    Available
                                </option>

                                <option ${status === "Shortlisted" ? "selected" : ""}>
                                    Shortlisted
                                </option>

                                <option ${status === "Selected" ? "selected" : ""}>
                                    Selected
                                </option>

                                <option ${status === "Rejected" ? "selected" : ""}>
                                    Rejected
                                </option>

                            </select>

                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email"
                                value="student@example.com">
                        </div>

                    </div>

                    <div class="form-actions">

                        <button class="primary-btn">
                            Save Changes
                        </button>

                        <button type="button"
                            class="secondary-btn"
                            onclick="closeModal()">
                            Cancel
                        </button>

                    </div>

                </form>
                `
            );

        }, 100);
    }


    function updateStudent(event) {

        event.preventDefault();

        closeModal();

        showToast("Student information updated successfully.");
    }


    function openStudentForm() {

        openModal(
            "Add New Student",

            `
            <form onsubmit="addStudent(event)">

                <div class="form-grid">

                    <div class="form-group">
                        <label>Full Name</label>
                        <input required>
                    </div>

                    <div class="form-group">
                        <label>Enrollment Number</label>
                        <input required>
                    </div>

                    <div class="form-group">
                        <label>Branch</label>
                        <input value="Computer Engineering">
                    </div>

                    <div class="form-group">
                        <label>CPI</label>
                        <input type="number"
                            step="0.1">
                    </div>

                    <div class="form-group full">
                        <label>Email</label>
                        <input type="email" required>
                    </div>

                </div>

                <div class="form-actions">

                    <button class="primary-btn">
                        Add Student
                    </button>

                </div>

            </form>
            `
        );
    }


    function addStudent(event) {

        event.preventDefault();

        closeModal();

        showToast("Student added successfully.");
    }


    /* ================= COMPANY DETAILS ================= */

    function viewCompany(company) {

        let data = {

            TCS: {
                industry: "IT Services & Consulting",
                hr: "Ms. Priya Mehta",
                email: "hr@tcs.example",
                role: "Software Trainee",
                salary: "₹4.2 LPA",
                location: "Ahmedabad / Multiple Locations",
                eligibility: "CPI 7.0+",
                process: "Aptitude Test → Technical Interview → HR Interview"
            },

            Infosys: {
                industry: "Information Technology",
                hr: "Mr. Rahul Shah",
                email: "careers@infosys.example",
                role: "Web Developer",
                salary: "₹4.5 LPA",
                location: "Pune / Bengaluru",
                eligibility: "CPI 7.0+",
                process: "Online Test → Technical Interview → HR"
            },

            Wipro: {
                industry: "IT Services",
                hr: "Ms. Neha Patel",
                email: "careers@wipro.example",
                role: "Junior Developer",
                salary: "₹4.0 LPA",
                location: "Ahmedabad",
                eligibility: "CPI 6.5+",
                process: "Aptitude → Technical → HR"
            }

        };

        const d = data[company];

        openModal(
            company + " - Company Details",

            `
            <div class="detail-grid">

                <div class="detail-box">
                    <strong>Company</strong><br>
                    ${company}
                </div>

                <div class="detail-box">
                    <strong>Industry</strong><br>
                    ${d.industry}
                </div>

                <div class="detail-box">
                    <strong>HR Contact</strong><br>
                    ${d.hr}
                </div>

                <div class="detail-box">
                    <strong>Email</strong><br>
                    ${d.email}
                </div>

                <div class="detail-box">
                    <strong>Job Role</strong><br>
                    ${d.role}
                </div>

                <div class="detail-box">
                    <strong>Package</strong><br>
                    ${d.salary}
                </div>

                <div class="detail-box">
                    <strong>Location</strong><br>
                    ${d.location}
                </div>

                <div class="detail-box">
                    <strong>Eligibility</strong><br>
                    ${d.eligibility}
                </div>

            </div>

            <div class="detail-box">
                <strong>Selection Process</strong><br>
                ${d.process}
            </div>

            <br>

            <button class="primary-btn"
                onclick="closeModal(); showPage('drives')">
                Manage Placement Drive
            </button>
            `
        );
    }


    function saveCompany(event) {

        event.preventDefault();

        showToast("Company added successfully.");

        setTimeout(() => {
            showPage("companies");
        }, 700);
    }


    /* ================= APPLICATION DETAILS ================= */

    function viewApplication(student, company, role, status) {

        openModal(

            "Application Details",

            `
            <div class="detail-grid">

                <div class="detail-box">
                    <strong>Student</strong><br>
                    ${student}
                </div>

                <div class="detail-box">
                    <strong>Company</strong><br>
                    ${company}
                </div>

                <div class="detail-box">
                    <strong>Position</strong><br>
                    ${role}
                </div>

                <div class="detail-box">
                    <strong>Application Status</strong><br>
                    ${status}
                </div>

                <div class="detail-box">
                    <strong>CPI</strong><br>
                    8.6
                </div>

                <div class="detail-box">
                    <strong>Applied On</strong><br>
                    20 August 2026
                </div>

            </div>

            <div class="detail-box">
                <strong>Skills</strong><br>
                HTML, CSS, JavaScript, PHP, MySQL
            </div>

            <div class="detail-box">
                <strong>Resume</strong><br>
                Student resume submitted successfully.
            </div>

            <div class="detail-box">

                <strong>Update Application Status</strong>

                <br><br>

                <select id="applicationStatus"
                    style="padding:10px;width:100%;border:1px solid #ddd;border-radius:7px;">

                    <option ${status === "Applied" ? "selected" : ""}>
                        Applied
                    </option>

                    <option ${status === "Shortlisted" ? "selected" : ""}>
                        Shortlisted
                    </option>

                    <option ${status === "Selected" ? "selected" : ""}>
                        Selected
                    </option>

                    <option ${status === "Rejected" ? "selected" : ""}>
                        Rejected
                    </option>

                </select>

                <br><br>

                <button class="primary-btn"
                    onclick="updateApplication()">
                    Update Status
                </button>

            </div>
            `
        );
    }


    function updateApplication() {

        closeModal();

        showToast("Application status updated successfully.");
    }


    /* ================= COURSE DETAILS ================= */

    function viewCourse(course) {

        const courses = {

            "Web Development": {
                trainer: "Mr. Harsh Patel",
                duration: "4 Weeks",
                level: "Beginner",
                topics: "HTML, CSS, JavaScript, Responsive Design, Basic PHP",
                students: "42 Students"
            },

            "Python Programming": {
                trainer: "Ms. Riya Shah",
                duration: "5 Weeks",
                level: "Beginner",
                topics: "Python Basics, Functions, OOP, File Handling, Problem Solving",
                students: "35 Students"
            },

            "Generative AI Basics": {
                trainer: "Mr. Amit Shah",
                duration: "3 Weeks",
                level: "Intermediate",
                topics: "Generative AI, Prompt Design, AI Tools, Intelligent Applications",
                students: "28 Students"
            }

        };

        const d = courses[course];

        openModal(

            course + " - Course Details",

            `
            <div class="detail-grid">

                <div class="detail-box">
                    <strong>Course Name</strong><br>
                    ${course}
                </div>

                <div class="detail-box">
                    <strong>Trainer</strong><br>
                    ${d.trainer}
                </div>

                <div class="detail-box">
                    <strong>Duration</strong><br>
                    ${d.duration}
                </div>

                <div class="detail-box">
                    <strong>Level</strong><br>
                    ${d.level}
                </div>

                <div class="detail-box">
                    <strong>Enrolled Students</strong><br>
                    ${d.students}
                </div>

                <div class="detail-box">
                    <strong>Status</strong><br>
                    Active
                </div>

            </div>

            <div class="detail-box">

                <strong>Topics Covered</strong>

                <br><br>

                ${d.topics}

            </div>

            <div class="detail-box">

                <strong>Course Description</strong>

                <br><br>

                This course is designed to help students develop
                practical technical skills and prepare for
                placement opportunities.

            </div>

            <br>

            <button class="primary-btn"
                onclick="closeModal(); editCourse('${course}')">
                Manage Course
            </button>
            `
        );
    }


    function editCourse(course) {

        openModal(

            "Manage Course - " + course,

            `
            <form onsubmit="saveManagedCourse(event)">

                <div class="form-group">
                    <label>Course Name</label>
                    <input value="${course}" required>
                </div>

                <br>

                <div class="form-group">
                    <label>Trainer</label>
                    <input value="Mr. Harsh Patel">
                </div>

                <br>

                <div class="form-group">
                    <label>Duration</label>
                    <input value="4 Weeks">
                </div>

                <br>

                <div class="form-group">
                    <label>Status</label>

                    <select>

                        <option>Active</option>
                        <option>Upcoming</option>
                        <option>Completed</option>

                    </select>

                </div>

                <br>

                <div class="form-group">
                    <label>Course Description</label>

                    <textarea>
This course helps students develop practical technical skills.
                    </textarea>

                </div>

                <div class="form-actions">

                    <button class="primary-btn">
                        Save Course Changes
                    </button>

                    <button type="button"
                        class="danger-btn"
                        onclick="deleteCourse()">
                        Remove Course
                    </button>

                </div>

            </form>
            `
        );
    }


    function saveCourse(event) {

        event.preventDefault();

        showToast("Course added successfully.");

        setTimeout(() => {
            showPage("courses");
        }, 700);
    }


    function saveManagedCourse(event) {

        event.preventDefault();

        closeModal();

        showToast("Course updated successfully.");
    }


    function deleteCourse() {

        closeModal();

        showToast("Course removed from management list.");
    }


    /* ================= EVENT DETAILS ================= */

    function viewEvent(eventName) {

        openModal(

            eventName + " - Event Details",

            `
            <div class="detail-grid">

                <div class="detail-box">
                    <strong>Event Name</strong><br>
                    ${eventName}
                </div>

                <div class="detail-box">
                    <strong>Event Type</strong><br>
                    Workshop
                </div>

                <div class="detail-box">
                    <strong>Date</strong><br>
                    28 August 2026
                </div>

                <div class="detail-box">
                    <strong>Time</strong><br>
                    10:00 AM - 12:00 PM
                </div>

                <div class="detail-box">
                    <strong>Venue</strong><br>
                    Seminar Hall
                </div>

                <div class="detail-box">
                    <strong>Participants</strong><br>
                    Final Year Students
                </div>

            </div>

            <div class="detail-box">

                <strong>Event Description</strong>

                <br><br>

                Students will learn how to prepare a professional
                resume and highlight their technical skills,
                projects and achievements.

            </div>

            <br>

            <button class="primary-btn"
                onclick="closeModal(); editEvent('${eventName}')">
                Manage Event
            </button>
            `
        );
    }


    function editEvent(eventName) {

        openModal(

            "Manage Event - " + eventName,

            `
            <form onsubmit="saveManagedEvent(event)">

                <div class="form-group">
                    <label>Event Name</label>
                    <input value="${eventName}" required>
                </div>

                <br>

                <div class="form-group">
                    <label>Date</label>
                    <input type="date" value="2026-08-28">
                </div>

                <br>

                <div class="form-group">
                    <label>Time</label>
                    <input type="time" value="10:00">
                </div>

                <br>

                <div class="form-group">
                    <label>Venue</label>
                    <input value="Seminar Hall">
                </div>

                <br>

                <div class="form-group">
                    <label>Status</label>

                    <select>

                        <option>Upcoming</option>
                        <option>Completed</option>
                        <option>Cancelled</option>

                    </select>

                </div>

                <div class="form-actions">

                    <button class="primary-btn">
                        Save Event Changes
                    </button>

                    <button type="button"
                        class="danger-btn"
                        onclick="deleteEvent()">
                        Delete Event
                    </button>

                </div>

            </form>
            `
        );
    }


    function saveEvent(event) {

        event.preventDefault();

        showToast("Event added successfully.");

        setTimeout(() => {
            showPage("events");
        }, 700);
    }


    function saveManagedEvent(event) {

        event.preventDefault();

        closeModal();

        showToast("Event updated successfully.");
    }


    function deleteEvent() {

        closeModal();

        showToast("Event deleted successfully.");
    }


    /* ================= DRIVE DETAILS ================= */

    function viewDrive(drive) {

        openModal(

            drive + " - Drive Details",

            `
            <div class="detail-grid">

                <div class="detail-box">
                    <strong>Company</strong><br>
                    TCS
                </div>

                <div class="detail-box">
                    <strong>Job Role</strong><br>
                    Software Trainee
                </div>

                <div class="detail-box">
                    <strong>Drive Date</strong><br>
                    05 September 2026
                </div>

                <div class="detail-box">
                    <strong>Reporting Time</strong><br>
                    09:00 AM
                </div>

                <div class="detail-box">
                    <strong>Minimum CPI</strong><br>
                    7.0
                </div>

                <div class="detail-box">
                    <strong>Vacancies</strong><br>
                    15
                </div>

            </div>

            <div class="detail-box">

                <strong>Eligible Students</strong>

                <br><br>

                48 students meet the basic eligibility criteria.

            </div>

            <div class="detail-box">

                <strong>Selection Process</strong>

                <br><br>

                Aptitude Test → Technical Interview → HR Interview

            </div>

            <div class="detail-box">

                <strong>Applications</strong>

                <br><br>

                36 Applied &nbsp; | &nbsp;
                18 Shortlisted &nbsp; | &nbsp;
                8 Selected

            </div>

            <br>

            <button class="primary-btn"
                onclick="closeModal(); editDrive('${drive}')">
                Manage Drive
            </button>
            `
        );
    }


    function editDrive(drive) {

        openModal(

            "Manage Drive - " + drive,

            `
            <form onsubmit="saveManagedDrive(event)">

                <div class="form-grid">

                    <div class="form-group">
                        <label>Company</label>

                        <select>

                            <option>TCS</option>
                            <option>Infosys</option>
                            <option>Wipro</option>

                        </select>

                    </div>

                    <div class="form-group">

                        <label>Job Role</label>

                        <input value="Software Trainee">

                    </div>

                    <div class="form-group">

                        <label>Drive Date</label>

                        <input type="date"
                            value="2026-09-05">

                    </div>

                    <div class="form-group">

                        <label>Vacancies</label>

                        <input type="number"
                            value="15">

                    </div>

                    <div class="form-group">

                        <label>Minimum CPI</label>

                        <input type="number"
                            step="0.1"
                            value="7.0">

                    </div>

                    <div class="form-group">

                        <label>Status</label>

                        <select>

                            <option>Upcoming</option>
                            <option>Registration Open</option>
                            <option>Completed</option>
                            <option>Cancelled</option>

                        </select>

                    </div>

                </div>

                <div class="form-actions">

                    <button class="primary-btn">
                        Save Drive Changes
                    </button>

                    <button type="button"
                        class="danger-btn"
                        onclick="deleteDrive()">
                        Delete Drive
                    </button>

                </div>

            </form>
            `
        );
    }


    function saveDrive(event) {

        event.preventDefault();

        showToast("Placement drive created successfully.");

        setTimeout(() => {
            showPage("drives");
        }, 700);
    }


    function saveManagedDrive(event) {

        event.preventDefault();

        closeModal();

        showToast("Placement drive updated successfully.");
    }


    function deleteDrive() {

        closeModal();

        showToast("Placement drive deleted.");
    }


    /* ================= PROFILE ================= */

    function saveProfile(event) {

        event.preventDefault();

        showToast("Admin profile updated successfully.");
    }


    /* ================= SETTINGS ================= */

    function changePassword(event) {

        event.preventDefault();

        const current =
            document.getElementById("currentPassword").value;

        const newPassword =
            document.getElementById("newPassword").value;

        const confirmPassword =
            document.getElementById("confirmPassword").value;


        if (current.length < 1) {

            showToast("Enter your current password.");

            return;
        }


        if (newPassword !== confirmPassword) {

            showToast("New passwords do not match.");

            return;
        }


        if (newPassword.length < 6) {

            showToast("Password must contain at least 6 characters.");

            return;
        }


        showToast(
            "Password verified and updated successfully."
        );


        document.getElementById("currentPassword").value = "";

        document.getElementById("newPassword").value = "";

        document.getElementById("confirmPassword").value = "";
    }


    /* ================= SEARCH ================= */

    function searchTable(inputId, tableId) {

        const input =
            document.getElementById(inputId)
                .value
                .toLowerCase();

        const rows =
            document
                .getElementById(tableId)
                .getElementsByTagName("tbody")[0]
                .getElementsByTagName("tr");


        for (let i = 0; i < rows.length; i++) {

            const text =
                rows[i].innerText.toLowerCase();

            rows[i].style.display =
                text.includes(input) ? "" : "none";
        }
    }


    /* ================= NOTIFICATIONS ================= */

    function markAllRead() {

        showToast("All notifications marked as read.");
    }


    /* ================= LOGOUT ================= */

    function logoutAdmin() {

        const confirmLogout =
            confirm("Are you sure you want to logout?");

        if (confirmLogout) {

            showToast("Logging out...");

            setTimeout(() => {

                alert(
                    "Admin logout successful.\nConnect this button to your Laravel logout route."
                );

            }, 500);

        }
    }


    /* ================= TOAST ================= */

    function showToast(message) {

        const toast =
            document.getElementById("toast");

        toast.innerText = message;

        toast.classList.add("show");

        setTimeout(() => {

            toast.classList.remove("show");

        }, 2500);
    }


    /* ================= CLOSE MODAL ESC ================= */

    document.addEventListener("keydown", function(event) {

        if (event.key === "Escape") {

            closeModal();

        }

    });

</script>

</body>
</html>