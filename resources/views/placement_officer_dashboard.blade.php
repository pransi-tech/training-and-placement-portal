<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement Officer Dashboard - K. D. Polytechnic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --bg-light: #F4F6FA;
            --sidebar-bg: #18153F;
            --sidebar-active: #372E75;
            --card-white: #FFFFFF;
            --primary-purple: #372E75;
            --text-dark: #0F172A;
            --text-muted: #64748B;
            --border-light: #E2E8F0;
        }

        body {
            font-family: 'Segoe UI', Roboto, sans-serif;
            background-color: var(--bg-light);
            color: var(--text-dark);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Sidebar Styling matched to Image 1 */
        .sidebar {
            width: 270px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: var(--sidebar-bg);
            border-right: 1px solid rgba(255, 255, 255, 0.08);
            padding: 1.25rem 1rem;
            z-index: 100;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Top Brand Box */
        .brand-box {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 14px;
            padding: 1rem 0.8rem;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .brand-title {
            color: #FFFFFF;
            font-size: 1.15rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            margin: 0;
        }

        .brand-subtitle {
            color: #A5B4FC;
            font-size: 0.65rem;
            font-weight: 600;
            letter-spacing: 1px;
            margin-top: 3px;
            display: block;
            text-transform: uppercase;
        }

        .menu-label {
            color: #818CF8;
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            padding-left: 0.5rem;
            margin-bottom: 0.6rem;
        }

        .nav-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav-item-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0.75rem 1rem;
            color: #CBD5E1;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 500;
            font-size: 0.92rem;
            transition: all 0.25s ease;
            margin-bottom: 0.35rem;
            cursor: pointer;
        }

        .nav-item-link:hover, .nav-item-link.active {
            background: var(--sidebar-active);
            color: #FFFFFF;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.25);
        }

        .btn-sidebar-logout {
            background: #DC2626;
            color: #FFFFFF !important;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 0.75rem 1rem;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.92rem;
            transition: 0.2s ease;
        }

        .btn-sidebar-logout:hover {
            background: #B91C1C;
        }

        /* Main Content Layout */
        .main-content {
            margin-left: 270px;
            padding: 2rem;
        }

        .content-section {
            display: none;
            animation: fadeIn 0.25s ease;
        }

        .content-section.active-section {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(5px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Header Area */
        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.8rem;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #FFFFFF;
            padding: 0.5rem 1.2rem;
            border-radius: 30px;
            border: 1px solid var(--border-light);
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }

        .user-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: var(--sidebar-active);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #fff;
        }

        /* White Cards Styling */
        .white-card {
            background: var(--card-white);
            color: var(--text-dark);
            border-radius: 18px;
            padding: 1.4rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            height: 100%;
            border: 1px solid var(--border-light);
        }

        /* Stat Cards */
        .stat-card {
            display: flex;
            align-items: center;
            gap: 1.1rem;
        }

        .stat-card h3 {
            color: var(--text-dark);
            font-weight: 700;
            margin: 0;
        }

        .stat-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.35rem;
        }

        .stat-purple { background: #EEF2FF; color: #4F46E5; }
        .stat-green { background: #ECFDF5; color: #059669; }
        .stat-amber { background: #FFFBEB; color: #D97706; }
        .stat-rose { background: #FFF1F2; color: #E11D48; }

        /* Tables */
        .custom-table {
            width: 100%;
            color: var(--text-dark);
            border-collapse: separate;
            border-spacing: 0 0.5rem;
        }

        .custom-table th {
            color: var(--text-muted);
            font-weight: 600;
            font-size: 0.85rem;
            padding: 0.8rem 1rem;
            border: none;
        }

        .custom-table td {
            background: #F8FAFC;
            color: var(--text-dark);
            padding: 0.95rem 1rem;
            border-top: 1px solid var(--border-light);
            border-bottom: 1px solid var(--border-light);
        }

        .custom-table td:first-child {
            border-left: 1px solid var(--border-light);
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
        }

        .custom-table td:last-child {
            border-right: 1px solid var(--border-light);
            border-top-right-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        .badge-status {
            padding: 0.35rem 0.75rem;
            border-radius: 20px;
            font-size: 0.78rem;
            font-weight: 600;
        }

        .badge-active { background: #DCFCE7; color: #15803D; }
        .badge-pending { background: #FEF3C7; color: #B45309; }
        .badge-info { background: #E0F2FE; color: #0369A1; }

        .btn-action-dark {
            background: #18153F;
            color: #FFFFFF;
            font-size: 0.8rem;
            font-weight: 600;
            padding: 0.4rem 0.9rem;
            border-radius: 8px;
            border: none;
            transition: 0.2s ease;
            cursor: pointer;
        }

        .btn-action-dark:hover {
            background: #372E75;
            color: #FFFFFF;
        }

        @media (max-width: 768px) {
            .sidebar { width: 100%; height: auto; position: relative; }
            .main-content { margin-left: 0; }
        }
    </style>
</head>
<body>

    <!-- Sidebar Menu Matched to Image 1 -->
    <aside class="sidebar">
        <div>
            <!-- Top Box -->
            <div class="brand-box">
                <p class="brand-title">K D Polytechnic</p>
                <span class="brand-subtitle">Training & Placement Portal</span>
            </div>

            <div class="menu-label">Main Menu</div>
            <ul class="nav-menu">
                <li><a href="javascript:void(0)" class="nav-item-link active" onclick="showTab('dashboard', this)"><i class="bi bi-grid-fill"></i> Dashboard</a></li>
                <li><a href="javascript:void(0)" class="nav-item-link" onclick="showTab('students', this)"><i class="bi bi-people-fill"></i> Students List</a></li>
                <li><a href="javascript:void(0)" class="nav-item-link" onclick="showTab('companies', this)"><i class="bi bi-building-fill"></i> Company Drives</a></li>
                <li><a href="javascript:void(0)" class="nav-item-link" onclick="showTab('applications', this)"><i class="bi bi-file-earmark-text-fill"></i> Applications</a></li>
                <li><a href="javascript:void(0)" class="nav-item-link" onclick="showTab('training', this)"><i class="bi bi-journal-check"></i> Training & Skill Cell</a></li>
                <li><a href="javascript:void(0)" class="nav-item-link" onclick="showTab('notifications', this)"><i class="bi bi-bell-fill"></i> Notifications</a></li>
            </ul>
        </div>
        <div>
            <a href="{{ url('/welcome') }}" class="btn-sidebar-logout"><i class="bi bi-box-arrow-right"></i> Logout</a>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="main-content">
        
        <!-- Header -->
        <header class="top-header">
            <div>
                <h3 class="fw-bold mb-1" id="section-title" style="color: #0F172A;">Welcome, TPO Officer 👋</h3>
                <p class="text-muted small mb-0" id="section-subtitle">Kilachand Devchand Polytechnic Placement Dashboard</p>
            </div>
            <div class="d-flex align-items-center gap-3">
                <div class="user-profile">
                    <div class="user-avatar">PO</div>
                    <div>
                        <div class="fw-semibold small" style="color: #0F172A;">Placement Officer</div>
                        <small class="text-muted" style="font-size: 0.75rem;">K. D. Polytechnic, Patan</small>
                    </div>
                </div>
            </div>
        </header>

        <!-- 1. DASHBOARD SECTION -->
        <div id="tab-dashboard" class="content-section active-section">
            <div class="row g-4 mb-4">
                <div class="col-md-3">
                    <div class="white-card stat-card">
                        <div class="stat-icon stat-purple"><i class="bi bi-building"></i></div>
                        <div>
                            <h3>18</h3>
                            <small class="text-muted">Active Hiring Drives</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="white-card stat-card">
                        <div class="stat-icon stat-green"><i class="bi bi-person-check-fill"></i></div>
                        <div>
                            <h3>142</h3>
                            <small class="text-muted">Students Placed</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="white-card stat-card">
                        <div class="stat-icon stat-amber"><i class="bi bi-file-earmark-person"></i></div>
                        <div>
                            <h3>320</h3>
                            <small class="text-muted">Total Applications</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="white-card stat-card">
                        <div class="stat-icon stat-rose"><i class="bi bi-calendar-event-fill"></i></div>
                        <div>
                            <h3>5</h3>
                            <small class="text-muted">Upcoming Interviews</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="white-card">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="fw-bold mb-0" style="color: #0F172A;"><i class="bi bi-briefcase-fill text-primary me-2"></i> Recent Placement Drives</h5>
                            <button onclick="showTab('companies')" class="btn btn-sm btn-primary rounded-pill px-3" style="background: var(--sidebar-active); border: none;">View All Drives</button>
                        </div>
                        <div class="table-responsive">
                            <table class="custom-table align-middle">
                                <thead>
                                    <tr>
                                        <th>Company</th>
                                        <th>Job Role</th>
                                        <th>Branch Eligibility</th>
                                        <th>Drive Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-semibold"><i class="bi bi-building text-info me-2"></i> TCS</td>
                                        <td>Junior Software Engineer</td>
                                        <td>Computer, IT</td>
                                        <td>28 Aug 2026</td>
                                        <td><span class="badge-status badge-active">Active</span></td>
                                        <td><button class="btn-action-dark" onclick="openDriveDetails('TCS', 'Junior Software Engineer', '4.2 LPA', 'Computer, IT', '28 Aug 2026', 'Active')">View Details</button></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold"><i class="bi bi-building text-warning me-2"></i> L&T Construction</td>
                                        <td>Graduate Engineer Trainee</td>
                                        <td>Civil, Mechanical</td>
                                        <td>02 Sep 2026</td>
                                        <td><span class="badge-status badge-active">Active</span></td>
                                        <td><button class="btn-action-dark" onclick="openDriveDetails('L&T Construction', 'Graduate Engineer Trainee', '5.0 LPA', 'Civil, Mechanical', '02 Sep 2026', 'Active')">View Details</button></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold"><i class="bi bi-building text-primary me-2"></i> Infosys</td>
                                        <td>System Engineer Trainee</td>
                                        <td>All Diploma Branches</td>
                                        <td>10 Sep 2026</td>
                                        <td><span class="badge-status badge-pending">Upcoming</span></td>
                                        <td><button class="btn-action-dark" onclick="openScheduleModal('Infosys', '10 Sep 2026')">Schedule</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="white-card">
                        <h5 class="fw-bold mb-3" style="color: #0F172A;"><i class="bi bi-bar-chart-fill text-warning me-2"></i> Branch Placement Status</h5>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small mb-1">
                                <span>Computer Engineering</span>
                                <span class="fw-bold text-success">85%</span>
                            </div>
                            <div class="progress bg-light" style="height: 8px;">
                                <div class="progress-bar bg-success" style="width: 85%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small mb-1">
                                <span>Information Technology</span>
                                <span class="fw-bold text-primary">78%</span>
                            </div>
                            <div class="progress bg-light" style="height: 8px;">
                                <div class="progress-bar bg-primary" style="width: 78%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small mb-1">
                                <span>Mechanical Engineering</span>
                                <span class="fw-bold text-warning">62%</span>
                            </div>
                            <div class="progress bg-light" style="height: 8px;">
                                <div class="progress-bar bg-warning" style="width: 62%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small mb-1">
                                <span>Civil Engineering</span>
                                <span class="fw-bold text-info">55%</span>
                            </div>
                            <div class="progress bg-light" style="height: 8px;">
                                <div class="progress-bar bg-info" style="width: 55%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. STUDENTS LIST SECTION -->
        <div id="tab-students" class="content-section">
            <div class="white-card">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold mb-0"><i class="bi bi-people-fill text-primary me-2"></i> Registered Students</h5>
                    <span class="badge bg-primary rounded-pill px-3 py-2">Total: 450</span>
                </div>
                <div class="table-responsive">
                    <table class="custom-table align-middle">
                        <thead>
                            <tr>
                                <th>Enrollment No.</th>
                                <th>Student Name</th>
                                <th>Branch</th>
                                <th>Semester</th>
                                <th>CPI</th>
                                <th>Placement Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold">226040307001</td>
                                <td>Aarav Sharma</td>
                                <td>Computer Engineering</td>
                                <td>6th</td>
                                <td><span class="fw-bold text-success">8.75</span></td>
                                <td><span class="badge-status badge-active">Placed (TCS)</span></td>
                                <td><button class="btn-action-dark" onclick="openStudentModal('Aarav Sharma', '226040307001', 'Computer Engineering', '6th', '8.75', 'Placed at TCS (4.2 LPA)')">View Profile</button></td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">226040307015</td>
                                <td>Priya Patel</td>
                                <td>Information Technology</td>
                                <td>6th</td>
                                <td><span class="fw-bold text-success">9.10</span></td>
                                <td><span class="badge-status badge-active">Placed (Infosys)</span></td>
                                <td><button class="btn-action-dark" onclick="openStudentModal('Priya Patel', '226040307015', 'Information Technology', '6th', '9.10', 'Placed at Infosys (4.5 LPA)')">View Profile</button></td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">226040319022</td>
                                <td>Karan Desai</td>
                                <td>Mechanical Engineering</td>
                                <td>6th</td>
                                <td><span class="fw-bold text-primary">8.20</span></td>
                                <td><span class="badge-status badge-pending">Shortlisted</span></td>
                                <td><button class="btn-action-dark" onclick="openStudentModal('Karan Desai', '226040319022', 'Mechanical Engineering', '6th', '8.20', 'Shortlisted for L&T')">View Profile</button></td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">226040306008</td>
                                <td>Rahul Solanki</td>
                                <td>Civil Engineering</td>
                                <td>6th</td>
                                <td><span class="fw-bold text-warning">7.40</span></td>
                                <td><span class="badge-status badge-info">Eligible</span></td>
                                <td><button class="btn-action-dark" onclick="openStudentModal('Rahul Solanki', '226040306008', 'Civil Engineering', '6th', '7.40', 'Eligible for Hiring Drives')">View Profile</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 3. COMPANY DRIVES SECTION -->
        <div id="tab-companies" class="content-section">
            <div class="white-card">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold mb-0"><i class="bi bi-building-fill text-warning me-2"></i> Company Placement Drives</h5>
                    <button class="btn btn-sm btn-primary rounded-pill px-3" onclick="openAddDriveModal()" style="background: var(--sidebar-active); border: none;"><i class="bi bi-plus-lg"></i> Add New Drive</button>
                </div>
                <div class="table-responsive">
                    <table class="custom-table align-middle">
                        <thead>
                            <tr>
                                <th>Company</th>
                                <th>Job Profile</th>
                                <th>Salary Package</th>
                                <th>Eligible Branches</th>
                                <th>Drive Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold"><i class="bi bi-building text-info me-2"></i> Tata Consultancy Services</td>
                                <td>Graduate Trainee</td>
                                <td class="fw-bold text-success">4.2 LPA</td>
                                <td>Computer, IT</td>
                                <td>28 Aug 2026</td>
                                <td><span class="badge-status badge-active">Ongoing</span></td>
                                <td><button class="btn-action-dark" onclick="openDriveDetails('TCS', 'Graduate Trainee', '4.2 LPA', 'Computer, IT', '28 Aug 2026', 'Ongoing')">View</button></td>
                            </tr>
                            <tr>
                                <td class="fw-semibold"><i class="bi bi-building text-warning me-2"></i> L&T Construction</td>
                                <td>Diploma Engineer Trainee</td>
                                <td class="fw-bold text-success">5.0 LPA</td>
                                <td>Mechanical, Civil, Electrical</td>
                                <td>02 Sep 2026</td>
                                <td><span class="badge-status badge-active">Upcoming</span></td>
                                <td><button class="btn-action-dark" onclick="openDriveDetails('L&T Construction', 'Diploma Engineer Trainee', '5.0 LPA', 'Mechanical, Civil', '02 Sep 2026', 'Upcoming')">View</button></td>
                            </tr>
                            <tr>
                                <td class="fw-semibold"><i class="bi bi-building text-primary me-2"></i> Infosys</td>
                                <td>System Associate</td>
                                <td class="fw-bold text-success">4.5 LPA</td>
                                <td>All Diploma Branches</td>
                                <td>10 Sep 2026</td>
                                <td><span class="badge-status badge-pending">Open</span></td>
                                <td><button class="btn-action-dark" onclick="openDriveDetails('Infosys', 'System Associate', '4.5 LPA', 'All Branches', '10 Sep 2026', 'Registration Open')">View</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 4. APPLICATIONS SECTION -->
        <div id="tab-applications" class="content-section">
            <div class="white-card">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold mb-0"><i class="bi bi-file-earmark-text-fill text-success me-2"></i> Student Job Applications</h5>
                    <span class="badge bg-success rounded-pill px-3 py-2">320 Applications</span>
                </div>
                <div class="table-responsive">
                    <table class="custom-table align-middle">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Applied Company</th>
                                <th>Role</th>
                                <th>Applied On</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold">Rohan Mehta</td>
                                <td>TCS</td>
                                <td>Software Trainee</td>
                                <td>20 Aug 2026</td>
                                <td><span class="badge-status badge-pending">Under Review</span></td>
                                <td><button class="btn-action-dark" onclick="openReviewModal('Rohan Mehta', 'TCS', 'Software Trainee')">Review</button></td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Siddharth Shah</td>
                                <td>L&T Construction</td>
                                <td>Graduate Trainee</td>
                                <td>19 Aug 2026</td>
                                <td><span class="badge-status badge-active">Shortlisted</span></td>
                                <td><button class="btn-action-dark" onclick="openReviewModal('Siddharth Shah', 'L&T Construction', 'Graduate Trainee')">View Details</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 5. TRAINING & SKILLS SECTION -->
        <div id="tab-training" class="content-section">
            <div class="white-card">
                <h5 class="fw-bold mb-3"><i class="bi bi-journal-check text-info me-2"></i> Training & Skill Development Programs</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="p-3 border rounded-3 bg-light">
                            <h6 class="fw-bold mb-1">Mock HR Interview Practice</h6>
                            <p class="small text-muted mb-2">Preparation session for upcoming campus drives.</p>
                            <span class="badge bg-primary">22 Aug 2026 · 11:00 AM</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded-3 bg-light">
                            <h6 class="fw-bold mb-1">Aptitude & Technical Bootcamp</h6>
                            <p class="small text-muted mb-2">Covers quantitative aptitude and logical reasoning.</p>
                            <span class="badge bg-success">26 Aug 2026 · 09:30 AM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6. NOTIFICATIONS SECTION -->
        <div id="tab-notifications" class="content-section">
            <div class="white-card">
                <h5 class="fw-bold mb-3"><i class="bi bi-bell-fill text-danger me-2"></i> Portal Notifications</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <strong>New Company Registration:</strong> TCS registered for diploma campus recruitment.
                            <br><small class="text-muted">Today at 10:30 AM</small>
                        </div>
                        <span class="badge bg-primary rounded-pill">New</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <strong>Drive Alert:</strong> L&T application deadline is approaching on 01 Sep 2026.
                            <br><small class="text-muted">Yesterday</small>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </main>

    <!-- Global Dynamic Modal for Working Buttons -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                <div class="modal-header" style="background: var(--sidebar-bg); color: #fff; border-top-left-radius: 16px; border-top-right-radius: 16px;">
                    <h5 class="modal-title fs-6 fw-bold" id="infoModalTitle">Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" id="infoModalBody">
                    <!-- Dynamic Body Content -->
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary btn-sm rounded-pill px-3" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm rounded-pill px-3" id="infoModalActionBtn" style="background: var(--sidebar-active); border: none;">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showTab(tabName, element) {
            document.querySelectorAll('.content-section').forEach(tab => {
                tab.classList.remove('active-section');
            });

            document.querySelectorAll('.nav-item-link').forEach(link => {
                link.classList.remove('active');
            });

            const activeTab = document.getElementById('tab-' + tabName);
            if(activeTab) {
                activeTab.classList.add('active-section');
            }

            if(element) {
                element.classList.add('active');
            }

            const titles = {
                dashboard: ['Welcome, TPO Officer 👋', 'Kilachand Devchand Polytechnic Placement Dashboard'],
                students: ['Students Directory 🎓', 'Manage and view registered students and placements'],
                companies: ['Placement Drives 🏢', 'Schedule and track upcoming campus hiring drives'],
                applications: ['Job Applications 📄', 'Review student submissions and shortlists'],
                training: ['Training & Skill Cell 📚', 'Manage workshops, webinars and mock interviews'],
                notifications: ['Portal Notifications 🔔', 'Latest updates, registrations, and alerts']
            };

            if(titles[tabName]) {
                document.getElementById('section-title').innerText = titles[tabName][0];
                document.getElementById('section-subtitle').innerText = titles[tabName][1];
            }
        }

        // Interactive Button Functions
        const modal = new bootstrap.Modal(document.getElementById('infoModal'));

        function openStudentModal(name, enroll, branch, sem, cpi, status) {
            document.getElementById('infoModalTitle').innerText = "Student Profile Details";
            document.getElementById('infoModalBody').innerHTML = `
                <div class="text-center mb-3">
                    <div style="width: 55px; height: 55px; border-radius: 50%; background: #372E75; color: #fff; display: inline-flex; align-items: center; justify-content: center; font-size: 1.3rem; font-weight: bold;">
                        ${name.split(' ').map(n => n[0]).join('')}
                    </div>
                    <h6 class="fw-bold mt-2 mb-0">${name}</h6>
                    <small class="text-muted">${branch}</small>
                </div>
                <div class="p-2 border rounded bg-light small">
                    <div class="d-flex justify-content-between py-1"><strong>Enrollment:</strong> <span>${enroll}</span></div>
                    <div class="d-flex justify-content-between py-1"><strong>Semester:</strong> <span>${sem}</span></div>
                    <div class="d-flex justify-content-between py-1"><strong>CPI / CGPA:</strong> <span class="text-success fw-bold">${cpi}</span></div>
                    <div class="d-flex justify-content-between py-1"><strong>Status:</strong> <span class="badge bg-success">${status}</span></div>
                </div>
            `;
            document.getElementById('infoModalActionBtn').style.display = 'none';
            modal.show();
        }

        function openDriveDetails(company, role, pkg, branch, date, status) {
            document.getElementById('infoModalTitle').innerText = "Drive Details - " + company;
            document.getElementById('infoModalBody').innerHTML = `
                <div class="p-2 border rounded bg-light small">
                    <div class="d-flex justify-content-between py-1"><strong>Company:</strong> <span>${company}</span></div>
                    <div class="d-flex justify-content-between py-1"><strong>Job Profile:</strong> <span>${role}</span></div>
                    <div class="d-flex justify-content-between py-1"><strong>Package:</strong> <span class="text-success fw-bold">${pkg}</span></div>
                    <div class="d-flex justify-content-between py-1"><strong>Eligibility:</strong> <span>${branch}</span></div>
                    <div class="d-flex justify-content-between py-1"><strong>Drive Date:</strong> <span>${date}</span></div>
                    <div class="d-flex justify-content-between py-1"><strong>Current Status:</strong> <span class="badge bg-primary">${status}</span></div>
                </div>
            `;
            document.getElementById('infoModalActionBtn').style.display = 'none';
            modal.show();
        }

        function openScheduleModal(company, defaultDate) {
            document.getElementById('infoModalTitle').innerText = "Schedule Drive: " + company;
            document.getElementById('infoModalBody').innerHTML = `
                <form>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Company Name</label>
                        <input type="text" class="form-control form-control-sm" value="${company}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Select Date & Time</label>
                        <input type="datetime-local" class="form-control form-control-sm">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Interview Venue / Mode</label>
                        <input type="text" class="form-control form-control-sm" placeholder="e.g. T&P Cell / Online">
                    </div>
                </form>
            `;
            const actionBtn = document.getElementById('infoModalActionBtn');
            actionBtn.style.display = 'block';
            actionBtn.innerText = "Confirm Schedule";
            actionBtn.onclick = function() {
                alert("Drive schedule updated successfully for " + company);
                modal.hide();
            };
            modal.show();
        }

        function openAddDriveModal() {
            document.getElementById('infoModalTitle').innerText = "Add New Placement Drive";
            document.getElementById('infoModalBody').innerHTML = `
                <form>
                    <div class="mb-2">
                        <label class="form-label small fw-bold">Company Name</label>
                        <input type="text" class="form-control form-control-sm" placeholder="e.g. Wipro">
                    </div>
                    <div class="mb-2">
                        <label class="form-label small fw-bold">Job Role</label>
                        <input type="text" class="form-control form-control-sm" placeholder="e.g. Graduate Trainee">
                    </div>
                    <div class="mb-2">
                        <label class="form-label small fw-bold">Package (LPA)</label>
                        <input type="text" class="form-control form-control-sm" placeholder="e.g. 4.0 LPA">
                    </div>
                    <div class="mb-2">
                        <label class="form-label small fw-bold">Eligible Branches</label>
                        <input type="text" class="form-control form-control-sm" placeholder="e.g. Computer, IT, Mechanical">
                    </div>
                </form>
            `;
            const actionBtn = document.getElementById('infoModalActionBtn');
            actionBtn.style.display = 'block';
            actionBtn.innerText = "Add Drive";
            actionBtn.onclick = function() {
                alert("New drive added successfully!");
                modal.hide();
            };
            modal.show();
        }

        function openReviewModal(student, company, role) {
            document.getElementById('infoModalTitle').innerText = "Review Application: " + student;
            document.getElementById('infoModalBody').innerHTML = `
                <p class="small text-muted mb-2">Reviewing student submission for <strong>${company}</strong> (${role}).</p>
                <div class="mb-3">
                    <label class="form-label small fw-bold">Change Application Status</label>
                    <select class="form-select form-select-sm" id="appStatusSelect">
                        <option value="Shortlisted">Shortlist for Interview</option>
                        <option value="Selected">Select / Offer</option>
                        <option value="Rejected">Reject</option>
                    </select>
                </div>
            `;
            const actionBtn = document.getElementById('infoModalActionBtn');
            actionBtn.style.display = 'block';
            actionBtn.innerText = "Update Status";
            actionBtn.onclick = function() {
                const status = document.getElementById('appStatusSelect').value;
                alert("Application for " + student + " updated to: " + status);
                modal.hide();
            };
            modal.show();
        }
    </script>
</body>
</html>