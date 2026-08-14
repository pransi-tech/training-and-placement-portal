<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard | Training & Placement Portal</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f7f5ff;
            color: #24104f;
        }

        /* ================= SIDEBAR ================= */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 273px;
            height: 100vh;
            background: linear-gradient(180deg, #32116d, #4b1e9e);
            color: white;
            padding: 30px 20px;
            z-index: 1000;
        }

        .logo {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo h2 {
            font-size: 27px;
            margin-bottom: 5px;
        }

        .logo p {
            font-size: 14px;
            color: #d8c9f8;
        }

        .menu-title {
            color: #bca9df;
            font-size: 13px;
            margin: 0 0 15px 14px;
            letter-spacing: 1px;
        }

        .menu {
            list-style: none;
        }

        .menu li {
            margin-bottom: 8px;
        }

        .menu button {
            width: 100%;
            border: none;
            background: transparent;
            color: #eee6ff;
            padding: 14px 17px;
            border-radius: 12px;
            text-align: left;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .menu button:hover,
        .menu button.active {
            background: rgba(255,255,255,0.18);
            color: white;
        }

        .menu-icon {
            display: inline-block;
            width: 30px;
        }

        .logout {
            position: absolute;
            bottom: 25px;
            left: 20px;
            right: 20px;
            border-top: 1px solid rgba(255,255,255,0.15);
            padding-top: 20px;
        }

        .logout button {
            width: 100%;
            background: transparent;
            border: none;
            color: #eee6ff;
            padding: 12px;
            text-align: left;
            font-size: 16px;
            cursor: pointer;
        }

        /* ================= MAIN ================= */

        .main {
            margin-left: 273px;
            padding: 35px 42px;
            min-height: 100vh;
        }

        /* ================= TOP BAR ================= */

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 28px;
        }

        .topbar h1 {
            font-size: 32px;
            color: #351276;
            margin-bottom: 7px;
        }

        .topbar p {
            color: #806c9f;
            font-size: 15px;
        }

        .admin-profile {
            background: white;
            border-radius: 18px;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            box-shadow: 0 7px 25px rgba(76, 39, 145, 0.09);
        }

        .admin-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #eee5ff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
        }

        .admin-profile strong {
            color: #32116d;
        }

        /* ================= SECTIONS ================= */

        .page-section {
            display: none;
        }

        .page-section.active {
            display: block;
        }

        /* ================= WELCOME ================= */

        .welcome {
            background: linear-gradient(100deg, #6130d4, #8148e4);
            border-radius: 23px;
            padding: 35px 32px;
            color: white;
            margin-bottom: 28px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(92, 43, 190, 0.2);
        }

        .welcome h2 {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .welcome p {
            font-size: 15px;
            opacity: 0.95;
        }

        .welcome::after {
            content: "";
            position: absolute;
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: rgba(255,255,255,0.09);
            right: -40px;
            top: -60px;
        }

        /* ================= STATISTICS ================= */

        .section-heading {
            font-size: 21px;
            color: #351276;
            margin-bottom: 18px;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            border-radius: 17px;
            padding: 22px;
            box-shadow: 0 8px 25px rgba(76, 39, 145, 0.07);
        }

        .stat-icon {
            width: 47px;
            height: 47px;
            background: #eee5ff;
            border-radius: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-bottom: 15px;
        }

        .stat-card h3 {
            font-size: 30px;
            color: #5524b7;
            margin-bottom: 5px;
        }

        .stat-card p {
            color: #817196;
            font-size: 14px;
        }

        /* ================= CONTENT GRID ================= */

        .content-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 22px;
        }

        .panel {
            background: white;
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0 8px 25px rgba(76, 39, 145, 0.07);
            margin-bottom: 25px;
        }

        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .panel-header h2 {
            font-size: 20px;
            color: #351276;
        }

        /* ================= TABLE ================= */

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #faf8ff;
            color: #705d8e;
            text-align: left;
            padding: 13px;
            font-size: 13px;
        }

        td {
            padding: 14px 13px;
            border-bottom: 1px solid #eee8f8;
            color: #554767;
            font-size: 14px;
        }

        tr:last-child td {
            border-bottom: none;
        }

        /* ================= BUTTONS ================= */

        .btn {
            border: none;
            background: #6330d2;
            color: white;
            padding: 9px 16px;
            border-radius: 9px;
            cursor: pointer;
            font-size: 13px;
        }

        .btn:hover {
            background: #4e20b0;
        }

        .btn-light {
            background: #eee5ff;
            color: #5524b7;
        }

        .btn-danger {
            background: #ffe7e7;
            color: #d33b3b;
        }

        /* ================= STATUS ================= */

        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            background: #e5f9ec;
            color: #198754;
        }

        .status.pending {
            background: #fff3d9;
            color: #b87900;
        }

        .status.rejected {
            background: #ffe6e6;
            color: #d33b3b;
        }

        /* ================= SEARCH ================= */

        .search-box {
            width: 100%;
            padding: 13px 15px;
            border: 1px solid #e5ddf1;
            border-radius: 10px;
            outline: none;
            margin-bottom: 18px;
            font-size: 14px;
        }

        .search-box:focus {
            border-color: #6b35d7;
        }

        /* ================= QUICK ACTIONS ================= */

        .quick-actions {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 13px;
        }

        .quick-action {
            border: 1px solid #eee7f8;
            padding: 18px;
            border-radius: 13px;
            cursor: pointer;
            background: white;
            transition: 0.2s;
        }

        .quick-action:hover {
            border-color: #7140d9;
            background: #faf8ff;
        }

        .quick-action h3 {
            color: #3d197a;
            font-size: 15px;
            margin-bottom: 5px;
        }

        .quick-action p {
            color: #8b7b9e;
            font-size: 12px;
        }

        /* ================= FORM ================= */

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 17px;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            color: #67577b;
            margin-bottom: 7px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #e5ddf1;
            border-radius: 9px;
            outline: none;
        }

        /* ================= RESPONSIVE ================= */

        @media(max-width: 1100px) {
            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .content-grid {
                grid-template-columns: 1fr;
            }
        }

        @media(max-width: 750px) {
            .sidebar {
                width: 220px;
            }

            .main {
                margin-left: 220px;
                padding: 25px;
            }

            .topbar h1 {
                font-size: 25px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .form-grid {
                grid-template-columns: 1fr;
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
        <h2>🎓 Admin Portal</h2>
        <p>Training & Placement</p>
    </div>

    <div class="menu-title">MAIN MENU</div>

    <ul class="menu">

        <li>
            <button class="nav-btn active" onclick="showPage('dashboard', this)">
                <span class="menu-icon">🏠</span>
                Dashboard
            </button>
        </li>

        <li>
            <button class="nav-btn" onclick="showPage('students', this)">
                <span class="menu-icon">👨‍🎓</span>
                Students
            </button>
        </li>

        <li>
            <button class="nav-btn" onclick="showPage('companies', this)">
                <span class="menu-icon">🏢</span>
                Companies
            </button>
        </li>

        <li>
            <button class="nav-btn" onclick="showPage('opportunities', this)">
                <span class="menu-icon">💼</span>
                Opportunities
            </button>
        </li>

        <li>
            <button class="nav-btn" onclick="showPage('applications', this)">
                <span class="menu-icon">📄</span>
                Applications
            </button>
        </li>

    </ul>

    <div class="logout">
        <button onclick="logout()">
            ↪️ &nbsp;&nbsp; Logout
        </button>
    </div>

</div>


<!-- =========================================================
     MAIN
========================================================= -->

<div class="main">

    <!-- TOP BAR -->

    <div class="topbar">

        <div>
            <h1 id="pageTitle">Admin Dashboard</h1>
            <p>Manage your Training & Placement Portal.</p>
        </div>

        <div class="admin-profile">
            <div class="admin-icon">👤</div>
            <strong>Admin</strong>
        </div>

    </div>


    <!-- =====================================================
         DASHBOARD
    ====================================================== -->

    <section id="dashboard" class="page-section active">

        <div class="welcome">

            <h2>Welcome, Admin! 👋</h2>

            <p>
                Manage students, companies, opportunities and placement applications.
            </p>

        </div>


        <h2 class="section-heading">Overview</h2>

        <div class="stats">

            <div class="stat-card">

                <div class="stat-icon">👨‍🎓</div>

                <h3 id="studentCount">250</h3>

                <p>Total Students</p>

            </div>


            <div class="stat-card">

                <div class="stat-icon">🏢</div>

                <h3 id="companyCount">45</h3>

                <p>Total Companies</p>

            </div>


            <div class="stat-card">

                <div class="stat-icon">💼</div>

                <h3 id="opportunityCount">32</h3>

                <p>Opportunities</p>

            </div>


            <div class="stat-card">

                <div class="stat-icon">📄</div>

                <h3 id="applicationCount">680</h3>

                <p>Applications</p>

            </div>

        </div>


        <div class="content-grid">

            <div class="panel">

                <div class="panel-header">

                    <h2>Recent Applications</h2>

                    <button class="btn" onclick="showPage('applications')">
                        View All
                    </button>

                </div>

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
                                <td>Student 1</td>
                                <td>TCS</td>
                                <td>Software Developer</td>
                                <td>
                                    <span class="status">Applied</span>
                                </td>
                            </tr>

                            <tr>
                                <td>Student 2</td>
                                <td>Infosys</td>
                                <td>System Engineer</td>
                                <td>
                                    <span class="status pending">Pending</span>
                                </td>
                            </tr>

                            <tr>
                                <td>Student 3</td>
                                <td>Wipro</td>
                                <td>Web Developer</td>
                                <td>
                                    <span class="status">Selected</span>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>


            <div class="panel">

                <div class="panel-header">
                    <h2>Quick Actions</h2>
                </div>

                <div class="quick-actions">

                    <div class="quick-action"
                         onclick="showPage('students')">

                        <h3>👨‍🎓 Manage Students</h3>

                        <p>
                            View registered students
                        </p>

                    </div>


                    <div class="quick-action"
                         onclick="showPage('companies')">

                        <h3>🏢 Manage Companies</h3>

                        <p>
                            View company information
                        </p>

                    </div>


                    <div class="quick-action"
                         onclick="showPage('opportunities')">

                        <h3>💼 Opportunities</h3>

                        <p>
                            Manage placement opportunities
                        </p>

                    </div>


                    <div class="quick-action"
                         onclick="showPage('applications')">

                        <h3>📄 Applications</h3>

                        <p>
                            Review applications
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         STUDENTS
    ====================================================== -->

    <section id="students" class="page-section">

        <div class="panel">

            <div class="panel-header">

                <h2>👨‍🎓 Students</h2>

                <button class="btn" onclick="alert('Add Student form can be connected to database later.')">
                    + Add Student
                </button>

            </div>

            <input
                type="text"
                class="search-box"
                placeholder="Search students..."
                onkeyup="searchTable(this, 'studentTable')"
            >

            <div class="table-wrapper">

                <table id="studentTable">

                    <thead>
                        <tr>
                            <th>Enrollment No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>CE001</td>
                            <td>Student 1</td>
                            <td>student1@email.com</td>
                            <td>Computer Engineering</td>
                            <td><span class="status">Active</span></td>
                            <td>
                                <button class="btn btn-light"
                                    onclick="alert('Student profile')">
                                    View
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>CE002</td>
                            <td>Student 2</td>
                            <td>student2@email.com</td>
                            <td>Computer Engineering</td>
                            <td><span class="status">Active</span></td>
                            <td>
                                <button class="btn btn-light"
                                    onclick="alert('Student profile')">
                                    View
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>CE003</td>
                            <td>Student 3</td>
                            <td>student3@email.com</td>
                            <td>Computer Engineering</td>
                            <td><span class="status">Active</span></td>
                            <td>
                                <button class="btn btn-light"
                                    onclick="alert('Student profile')">
                                    View
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </section>


    <!-- =====================================================
         COMPANIES
    ====================================================== -->

    <section id="companies" class="page-section">

        <div class="panel">

            <div class="panel-header">

                <h2>🏢 Companies</h2>

                <button class="btn"
                        onclick="alert('Add Company form can be connected to database later.')">
                    + Add Company
                </button>

            </div>

            <input
                type="text"
                class="search-box"
                placeholder="Search companies..."
                onkeyup="searchTable(this, 'companyTable')"
            >

            <div class="table-wrapper">

                <table id="companyTable">

                    <thead>
                        <tr>
                            <th>Company</th>
                            <th>Email</th>
                            <th>Industry</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>TCS</td>
                            <td>hr@tcs.com</td>
                            <td>IT</td>
                            <td>Ahmedabad</td>
                            <td><span class="status">Active</span></td>
                            <td>
                                <button class="btn btn-light"
                                    onclick="alert('Company details')">
                                    View
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>Infosys</td>
                            <td>hr@infosys.com</td>
                            <td>IT</td>
                            <td>Pune</td>
                            <td><span class="status">Active</span></td>
                            <td>
                                <button class="btn btn-light"
                                    onclick="alert('Company details')">
                                    View
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>Wipro</td>
                            <td>hr@wipro.com</td>
                            <td>IT</td>
                            <td>Bangalore</td>
                            <td><span class="status">Active</span></td>
                            <td>
                                <button class="btn btn-light"
                                    onclick="alert('Company details')">
                                    View
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </section>


    <!-- =====================================================
         OPPORTUNITIES
    ====================================================== -->

    <section id="opportunities" class="page-section">

        <div class="panel">

            <div class="panel-header">

                <h2>💼 Opportunities</h2>

                <button class="btn"
                        onclick="alert('Add Opportunity form can be connected to database later.')">
                    + Add Opportunity
                </button>

            </div>

            <input
                type="text"
                class="search-box"
                placeholder="Search opportunities..."
                onkeyup="searchTable(this, 'opportunityTable')"
            >

            <div class="table-wrapper">

                <table id="opportunityTable">

                    <thead>
                        <tr>
                            <th>Company</th>
                            <th>Position</th>
                            <th>Type</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>TCS</td>
                            <td>Software Developer</td>
                            <td>Full Time</td>
                            <td>Ahmedabad</td>
                            <td><span class="status">Open</span></td>
                            <td>
                                <button class="btn btn-light">
                                    View
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>Infosys</td>
                            <td>System Engineer</td>
                            <td>Full Time</td>
                            <td>Pune</td>
                            <td><span class="status">Open</span></td>
                            <td>
                                <button class="btn btn-light">
                                    View
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>Wipro</td>
                            <td>Web Developer</td>
                            <td>Internship</td>
                            <td>Bangalore</td>
                            <td>
                                <span class="status pending">
                                    Closing Soon
                                </span>
                            </td>
                            <td>
                                <button class="btn btn-light">
                                    View
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </section>


    <!-- =====================================================
         APPLICATIONS
    ====================================================== -->

    <section id="applications" class="page-section">

        <div class="panel">

            <div class="panel-header">

                <h2>📄 Applications</h2>

            </div>

            <input
                type="text"
                class="search-box"
                placeholder="Search applications..."
                onkeyup="searchTable(this, 'applicationTable')"
            >

            <div class="table-wrapper">

                <table id="applicationTable">

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
                            <td>Student 1</td>
                            <td>TCS</td>
                            <td>Software Developer</td>
                            <td>12 Aug 2026</td>
                            <td>
                                <span class="status">Applied</span>
                            </td>
                            <td>
                                <button class="btn btn-light"
                                    onclick="alert('Application details')">
                                    View
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>Student 2</td>
                            <td>Infosys</td>
                            <td>System Engineer</td>
                            <td>11 Aug 2026</td>
                            <td>
                                <span class="status pending">
                                    Pending
                                </span>
                            </td>
                            <td>
                                <button class="btn btn-light"
                                    onclick="alert('Application details')">
                                    View
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>Student 3</td>
                            <td>Wipro</td>
                            <td>Web Developer</td>
                            <td>10 Aug 2026</td>
                            <td>
                                <span class="status">
                                    Selected
                                </span>
                            </td>
                            <td>
                                <button class="btn btn-light"
                                    onclick="alert('Application details')">
                                    View
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </section>

</div>


<!-- =========================================================
     JAVASCRIPT
========================================================= -->

<script>

    /* ================= PAGE NAVIGATION ================= */

    function showPage(page, button = null) {

        const sections = document.querySelectorAll(".page-section");

        sections.forEach(function(section) {
            section.classList.remove("active");
        });

        const selected = document.getElementById(page);

        if (selected) {
            selected.classList.add("active");
        }


        /* Change active sidebar button */

        const buttons = document.querySelectorAll(".nav-btn");

        buttons.forEach(function(btn) {
            btn.classList.remove("active");
        });

        if (button) {
            button.classList.add("active");
        }


        /* Change page title */

        const titles = {
            dashboard: "Admin Dashboard",
            students: "Students",
            companies: "Companies",
            opportunities: "Opportunities",
            applications: "Applications"
        };

        document.getElementById("pageTitle").innerText =
            titles[page] || "Admin Dashboard";


        /* Scroll to top */

        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }


    /* ================= SEARCH ================= */

    function searchTable(input, tableId) {

        const filter = input.value.toLowerCase();

        const table = document.getElementById(tableId);

        const rows = table
            .getElementsByTagName("tbody")[0]
            .getElementsByTagName("tr");


        for (let i = 0; i < rows.length; i++) {

            const text = rows[i]
                .textContent
                .toLowerCase();

            if (text.includes(filter)) {
                rows[i].style.display = "";
            } else {
                rows[i].style.display = "none";
            }

        }

    }


    /* ================= LOGOUT ================= */

    function logout() {

        if (confirm("Are you sure you want to logout?")) {

            /*
             * Later connect this to your Laravel logout route.
             */

            window.location.href = "/admin/login";
        }

    }

</script>

</body>
</html>