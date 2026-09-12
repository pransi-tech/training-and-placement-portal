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

        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.8rem;
            flex-wrap: wrap;
            gap: 15px;
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

        .white-card {
            background: var(--card-white);
            color: var(--text-dark);
            border-radius: 18px;
            padding: 1.4rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            height: 100%;
            border: 1px solid var(--border-light);
        }

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

        .filter-panel {
            background: #F8FAFC;
            border: 1px solid var(--border-light);
            border-radius: 14px;
            padding: 1rem 1.2rem;
            margin-bottom: 1.2rem;
        }

        .event-box {
            background: #FFFFFF;
            border: 1px solid var(--border-light);
            border-radius: 16px;
            padding: 1.25rem;
            height: 100%;
            transition: all 0.2s ease;
            box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        }

        .event-box:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 16px rgba(0,0,0,0.06);
        }

        .event-icon-badge {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: #EEF2FF;
            color: #4F46E5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .branch-badge-pill {
            background: #EDE9FE;
            color: #6D28D9;
            font-weight: 700;
            padding: 0.35rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
        }

        @media (max-width: 768px) {
            .sidebar { width: 100%; height: auto; position: relative; }
            .main-content { margin-left: 0; }
        }
    </style>
</head>
<body>

    <!-- Sidebar Menu -->
    <aside class="sidebar">
        <div>
            <div class="brand-box">
                <p class="brand-title">K D Polytechnic</p>
                <span class="brand-subtitle">Training & Placement Portal</span>
            </div>

            <div class="menu-label">Officer Menu</div>
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

    <!-- Main Content -->
    <main class="main-content">
        <header class="top-header">
            <div>
                <h3 class="fw-bold mb-1" id="section-title" style="color: #0F172A;">Welcome, <span id="headerOfficerTitle">Computer Dept Officer</span> 👋</h3>
                <p class="text-muted small mb-0" id="section-subtitle">Departmental Placement Tracking & Analytics (Restricted View)</p>
            </div>
            
            <div class="d-flex align-items-center gap-3">
                <!-- Branch Selector for Officer / Faculty Switch -->
                <div class="bg-white border rounded-pill px-3 py-1 d-flex align-items-center gap-2 shadow-sm">
                    <i class="bi bi-person-badge text-primary"></i>
                    <span class="small fw-bold text-muted">Officer Branch:</span>
                    <select class="form-select form-select-sm border-0 bg-transparent fw-bold text-primary py-0" id="activeOfficerBranch" onchange="switchOfficerBranch(this.value)" style="box-shadow: none; cursor: pointer; width: auto;">
                        <option value="Computer Engineering" selected>Computer Engineering</option>
                        <option value="Civil Engineering">Civil Engineering</option>
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                    </select>
                </div>

                <div class="user-profile">
                    <div class="user-avatar" id="officerAvatarBadge">CO</div>
                    <div>
                        <div class="fw-semibold small" id="officerProfileName">Prof. Placement Head</div>
                        <small class="text-muted" id="officerProfileBranch" style="font-size: 0.75rem;">Computer Department</small>
                    </div>
                </div>
            </div>
        </header>

        <!-- 1. DASHBOARD TAB -->
        <div id="tab-dashboard" class="content-section active-section">
            <div class="row g-4 mb-4">
                <div class="col-md-3">
                    <div class="white-card stat-card">
                        <div class="stat-icon stat-purple"><i class="bi bi-building"></i></div>
                        <div>
                            <h3 id="statActiveDrives">1</h3>
                            <small class="text-muted">Active Hiring Drives</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="white-card stat-card">
                        <div class="stat-icon stat-green"><i class="bi bi-person-check-fill"></i></div>
                        <div>
                            <h3 id="statPlacedStudents">48</h3>
                            <small class="text-muted">Branch Students Placed</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="white-card stat-card">
                        <div class="stat-icon stat-amber"><i class="bi bi-file-earmark-person"></i></div>
                        <div>
                            <h3 id="statTotalApplications">95</h3>
                            <small class="text-muted">Branch Applications</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="white-card stat-card">
                        <div class="stat-icon stat-rose"><i class="bi bi-calendar-event-fill"></i></div>
                        <div>
                            <h3 id="statUpcomingInterviews">2</h3>
                            <small class="text-muted">Upcoming Interviews</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="white-card">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="fw-bold mb-0" style="color: #0F172A;"><i class="bi bi-briefcase-fill text-primary me-2"></i> Recent Placement Drives (<span class="current-branch-label">Computer</span>)</h5>
                            <button onclick="showTab('companies')" class="btn btn-sm btn-primary rounded-pill px-3" style="background: var(--sidebar-active); border: none;">View All</button>
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
                                <tbody id="recentDrivesTableBody">
                                    <!-- Populated automatically based on Active Branch -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="white-card">
                        <h5 class="fw-bold mb-3" style="color: #0F172A;"><i class="bi bi-bar-chart-fill text-warning me-2"></i> Department Performance</h5>
                        
                        <div class="p-3 bg-light rounded-3 mb-3 border">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="fw-bold" id="deptPlacementTitle">Computer Engineering</span>
                                <span class="fw-bold text-success" id="deptPlacementRate">85%</span>
                            </div>
                            <small class="text-muted d-block mb-2">Overall placement achievement for final year students.</small>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-success" id="deptProgressBar" style="width: 85%"></div>
                            </div>
                        </div>

                        <div class="small text-muted">
                            <i class="bi bi-info-circle-fill text-primary me-1"></i>
                            This dashboard is restricted to your department. You can only view and filter students belonging to your branch.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. STUDENTS DIRECTORY (ONLY ACTIVE BRANCH STUDENTS) -->
        <div id="tab-students" class="content-section">
            <div class="white-card">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h5 class="fw-bold mb-0"><i class="bi bi-people-fill text-primary me-2"></i> Registered Students (<span class="current-branch-label">Computer</span>)</h5>
                        <small class="text-muted">Viewing students strictly enrolled under your department</small>
                    </div>
                    <span class="badge bg-primary rounded-pill px-3 py-2" id="studentCountBadge">Total: 0</span>
                </div>

                <div class="filter-panel">
                    <div class="row g-2 align-items-center">
                        <div class="col-md-5">
                            <label class="small text-muted fw-bold mb-1"><i class="bi bi-shield-lock-fill text-success"></i> Department Locked To:</label>
                            <input type="text" class="form-control form-control-sm fw-bold bg-white" id="lockedBranchInput" readonly value="Computer Engineering">
                        </div>
                        <div class="col-md-3">
                            <label class="small text-muted fw-bold mb-1">Minimum CPI:</label>
                            <select class="form-select form-select-sm" id="cpiFilter" onchange="filterBranchStudents()">
                                <option value="0">Any CPI</option>
                                <option value="7.0">7.0 & Above</option>
                                <option value="8.0">8.0 & Above</option>
                                <option value="8.5">8.5 & Above</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="small text-muted fw-bold mb-1">Placement Status:</label>
                            <select class="form-select form-select-sm" id="statusFilter" onchange="filterBranchStudents()">
                                <option value="ALL">All Status</option>
                                <option value="Placed">Placed Only</option>
                                <option value="Shortlisted">Shortlisted</option>
                                <option value="Eligible">Eligible</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button class="btn btn-sm btn-outline-secondary w-100" onclick="resetBranchFilters()"><i class="bi bi-arrow-counterclockwise"></i> Reset</button>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="custom-table align-middle" id="studentsTable">
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
                        <tbody id="branchStudentsTableBody">
                            <!-- Populated strictly by Active Branch -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 3. COMPANY DRIVES (ONLY ELIGIBLE FOR ACTIVE BRANCH) -->
        <div id="tab-companies" class="content-section">
            <div class="white-card">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h5 class="fw-bold mb-0"><i class="bi bi-building-fill text-warning me-2"></i> Placement Drives (<span class="current-branch-label">Computer</span>)</h5>
                        <small class="text-muted">Only campus drives open for your branch are displayed</small>
                    </div>
                    <span class="branch-badge-pill" id="branchPillBadge">Computer Engineering</span>
                </div>
                <div class="table-responsive">
                    <table class="custom-table align-middle">
                        <thead>
                            <tr>
                                <th>Company</th>
                                <th>Job Role</th>
                                <th>Salary Package</th>
                                <th>Eligible Branches</th>
                                <th>Drive Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="allDrivesTableBody">
                            <!-- Populated strictly by Active Branch -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 4. APPLICATIONS (ONLY ACTIVE BRANCH SUBMISSIONS) -->
        <div id="tab-applications" class="content-section">
            <div class="white-card">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h5 class="fw-bold mb-0"><i class="bi bi-file-earmark-text-fill text-success me-2"></i> Student Job Applications</h5>
                        <small class="text-muted">Applications submitted by students of your branch</small>
                    </div>
                    <span class="badge bg-success rounded-pill px-3 py-2" id="applicationCountBadge">0 Submissions</span>
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
                        <tbody id="applicationsTableBody">
                            <!-- Populated strictly by Active Branch -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 5. TRAINING & SKILL CELL -->
        <div id="tab-training" class="content-section">
            <div class="white-card">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h5 class="fw-bold mb-1" style="color: #0F172A;"><i class="bi bi-journal-check text-primary me-2"></i> Event Management</h5>
                        <p class="text-muted small mb-0">Departmental workshops, training sessions, and bootcamps.</p>
                    </div>
                    <button class="btn btn-sm btn-primary rounded-pill px-3 py-2" onclick="openAddEventModal()" style="background: var(--sidebar-active); border: none; font-weight: 600;">
                        <i class="bi bi-plus-lg me-1"></i> + Add Event
                    </button>
                </div>

                <div class="row g-4" id="eventsContainer">
                    <div class="col-md-6 auto-expiring-card" data-expiry="2026-08-28">
                        <div class="event-box">
                            <div class="event-icon-badge">
                                <i class="bi bi-calendar-event"></i>
                            </div>
                            <h6 class="fw-bold text-dark mb-2">Resume Building Workshop</h6>
                            <p class="small text-muted mb-3">Departmental workshop to help final year students build core resumes.</p>
                            <span class="badge bg-light text-primary border mb-3">28 Aug 2026</span>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-dark px-3 rounded-pill" style="background: #18153F; border: none;" onclick="openEventDetails('Resume Building Workshop', '28 Aug 2026', 'Departmental workshop to help students build professional resumes.', 'Auditorium')">View Details</button>
                                <button class="btn btn-sm btn-light border px-3 rounded-pill" onclick="manageEvent('Resume Building Workshop')">Manage</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 auto-expiring-card" data-expiry="2026-09-10">
                        <div class="event-box">
                            <div class="event-icon-badge" style="background: #FDF2F8; color: #DB2777;">
                                <i class="bi bi-mic"></i>
                            </div>
                            <h6 class="fw-bold text-dark mb-2">Technical Mock Interview Session</h6>
                            <p class="small text-muted mb-3">Departmental faculty mock interview practice for upcoming hiring drives.</p>
                            <span class="badge bg-light text-primary border mb-3">10 Sep 2026</span>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-dark px-3 rounded-pill" style="background: #18153F; border: none;" onclick="openEventDetails('Technical Mock Interview Session', '10 Sep 2026', 'Mock interview practice conducted by departmental faculty.', 'Department Lab')">View Details</button>
                                <button class="btn btn-sm btn-light border px-3 rounded-pill" onclick="manageEvent('Technical Mock Interview Session')">Manage</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 auto-expiring-card" data-expiry="2026-09-18">
                        <div class="event-box">
                            <div class="event-icon-badge" style="background: #ECFDF5; color: #059669;">
                                <i class="bi bi-code-slash"></i>
                            </div>
                            <h6 class="fw-bold text-dark mb-2">Core Skills & Aptitude Bootcamp</h6>
                            <p class="small text-muted mb-3">Intensive branch preparation camp for campus aptitude test clearance.</p>
                            <span class="badge bg-light text-primary border mb-3">18 Sep 2026</span>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-dark px-3 rounded-pill" style="background: #18153F; border: none;" onclick="openEventDetails('Core Skills Bootcamp', '18 Sep 2026', 'Branch technical grooming sessions.', 'Seminar Hall')">View Details</button>
                                <button class="btn btn-sm btn-light border px-3 rounded-pill" onclick="manageEvent('Core Skills Bootcamp')">Manage</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6. NOTIFICATIONS -->
        <div id="tab-notifications" class="content-section">
            <div class="white-card">
                <h5 class="fw-bold mb-3"><i class="bi bi-bell-fill text-danger me-2"></i> Department Notifications</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <strong>Branch Notice:</strong> Students must submit verified marksheets for upcoming drives.
                            <br><small class="text-muted">Today at 10:30 AM</small>
                        </div>
                        <span class="badge bg-primary rounded-pill">New</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <strong>Drive Update:</strong> Shortlist announcement for final rounds scheduled this week.
                            <br><small class="text-muted">Yesterday</small>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <!-- Global Dynamic Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                <div class="modal-header" style="background: var(--sidebar-bg); color: #fff; border-top-left-radius: 16px; border-top-right-radius: 16px;">
                    <h5 class="modal-title fs-6 fw-bold" id="infoModalTitle">Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" id="infoModalBody"></div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary btn-sm rounded-pill px-3" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm rounded-pill px-3" id="infoModalActionBtn" style="background: var(--sidebar-active); border: none;">Save</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // MASTER DUMMY DATA FOR THE 4 BRANCHES (NO DB NEEDED)
        const allStudentsMaster = [
            // Computer Engineering
            { enroll: '226040307001', name: 'Aarav Sharma', branch: 'Computer Engineering', sem: '6th', cpi: 8.75, status: 'Placed', company: 'TCS (4.2 LPA)' },
            { enroll: '226040307012', name: 'Neha Vaghela', branch: 'Computer Engineering', sem: '6th', cpi: 8.10, status: 'Shortlisted', company: 'Infosys' },
            { enroll: '226040307025', name: 'Meet Panchal', branch: 'Computer Engineering', sem: '6th', cpi: 7.60, status: 'Eligible', company: 'None' },
            
            // Civil Engineering
            { enroll: '226040306008', name: 'Rahul Solanki', branch: 'Civil Engineering', sem: '6th', cpi: 7.40, status: 'Eligible', company: 'None' },
            { enroll: '226040306019', name: 'Anjali Prajapati', branch: 'Civil Engineering', sem: '6th', cpi: 8.35, status: 'Placed', company: 'L&T Construction (5.0 LPA)' },
            
            // Mechanical Engineering
            { enroll: '226040319022', name: 'Karan Desai', branch: 'Mechanical Engineering', sem: '6th', cpi: 8.20, status: 'Shortlisted', company: 'L&T Construction' },
            { enroll: '226040319034', name: 'Jaydeep Chaudhary', branch: 'Mechanical Engineering', sem: '6th', cpi: 7.90, status: 'Placed', company: 'Tata Motors (3.8 LPA)' },
            
            // Electrical Engineering
            { enroll: '226040309015', name: 'Priya Patel', branch: 'Electrical Engineering', sem: '6th', cpi: 8.50, status: 'Placed', company: 'Tata Power (4.5 LPA)' },
            { enroll: '226040309028', name: 'Sanjay Rawal', branch: 'Electrical Engineering', sem: '6th', cpi: 7.15, status: 'Eligible', company: 'None' }
        ];

        const allDrivesMaster = [
            { company: 'Tata Consultancy Services', role: 'Junior Software Trainee', pkg: '4.2 LPA', branches: ['Computer Engineering'], date: '2026-09-08', formattedDate: '08 Sep 2026', status: 'Ongoing' },
            { company: 'L&T Construction', role: 'Diploma Engineer Trainee', pkg: '5.0 LPA', branches: ['Civil Engineering', 'Mechanical Engineering', 'Electrical Engineering'], date: '2026-09-12', formattedDate: '12 Sep 2026', status: 'Upcoming' },
            { company: 'Tata Power', role: 'Junior Engineer', pkg: '4.5 LPA', branches: ['Electrical Engineering'], date: '2026-09-15', formattedDate: '15 Sep 2026', status: 'Open' },
            { company: 'Tata Motors', role: 'Production Quality Associate', pkg: '3.8 LPA', branches: ['Mechanical Engineering'], date: '2026-09-14', formattedDate: '14 Sep 2026', status: 'Open' }
        ];

        const allApplicationsMaster = [
            { student: 'Aarav Sharma', branch: 'Computer Engineering', company: 'TCS', role: 'Junior Software Trainee', date: '02 Sep 2026', status: 'Under Review' },
            { student: 'Neha Vaghela', branch: 'Computer Engineering', company: 'Infosys', role: 'System Trainee', date: '01 Sep 2026', status: 'Shortlisted' },
            { student: 'Anjali Prajapati', branch: 'Civil Engineering', company: 'L&T Construction', role: 'Diploma Trainee', date: '03 Sep 2026', status: 'Shortlisted' },
            { student: 'Siddharth Shah', branch: 'Mechanical Engineering', company: 'L&T Construction', role: 'Graduate Trainee', date: '01 Sep 2026', status: 'Shortlisted' },
            { student: 'Priya Patel', branch: 'Electrical Engineering', company: 'Tata Power', role: 'Junior Engineer', date: '02 Sep 2026', status: 'Shortlisted' }
        ];

        const branchStatsMap = {
            'Computer Engineering': { placedRate: '85%', placedCount: 48, appsCount: 95, interviews: 2 },
            'Civil Engineering': { placedRate: '55%', placedCount: 26, appsCount: 52, interviews: 1 },
            'Mechanical Engineering': { placedRate: '62%', placedCount: 38, appsCount: 78, interviews: 2 },
            'Electrical Engineering': { placedRate: '70%', placedCount: 35, appsCount: 68, interviews: 1 }
        };

        // CURRENT ACTIVE OFFICER BRANCH
        let currentOfficerBranch = 'Computer Engineering';

        // Check URL parameter if passed: e.g. /placement-officer/dashboard?branch=Civil+Engineering
        const urlParams = new URLSearchParams(window.location.search);
        if(urlParams.get('branch')) {
            currentOfficerBranch = urlParams.get('branch');
            const branchSelector = document.getElementById('activeOfficerBranch');
            if(branchSelector) branchSelector.value = currentOfficerBranch;
        }

        // SWITCH BRANCH FUNCTION - RE-RENDERS ENTIRE DASHBOARD TO THAT BRANCH ONLY
        function switchOfficerBranch(branch) {
            currentOfficerBranch = branch;
            
            // 1. Update Header Information
            document.getElementById('headerOfficerTitle').innerText = branch.split(' ')[0] + " Dept Officer";
            document.getElementById('lockedBranchInput').value = branch;
            document.getElementById('branchPillBadge').innerText = branch;
            document.querySelectorAll('.current-branch-label').forEach(el => el.innerText = branch.split(' ')[0]);
            
            // Avatar letters
            const initials = branch.split(' ').map(w => w[0]).join('').substring(0, 2);
            document.getElementById('officerAvatarBadge').innerText = initials;
            document.getElementById('officerProfileBranch').innerText = branch + " Dept";

            // 2. Update Stats
            const stats = branchStatsMap[branch] || { placedRate: '50%', placedCount: 20, appsCount: 40, interviews: 1 };
            document.getElementById('statPlacedStudents').innerText = stats.placedCount;
            document.getElementById('statTotalApplications').innerText = stats.appsCount;
            document.getElementById('statUpcomingInterviews').innerText = stats.interviews;
            document.getElementById('deptPlacementTitle').innerText = branch;
            document.getElementById('deptPlacementRate').innerText = stats.placedRate;
            document.getElementById('deptProgressBar').style.width = stats.placedRate;

            // 3. Render Branch Students Only
            renderBranchStudents();

            // 4. Render Branch Eligible Drives Only
            renderBranchDrives();

            // 5. Render Branch Applications Only
            renderBranchApplications();

            // 6. Purge Expired items
            purgeAllExpiredItems();
        }

        // RENDER STUDENTS FILTERED BY CURRENT OFFICER BRANCH
        function renderBranchStudents() {
            const tbody = document.getElementById('branchStudentsTableBody');
            const minCpi = parseFloat(document.getElementById('cpiFilter').value) || 0;
            const statusFilter = document.getElementById('statusFilter').value;

            // FILTER: ONLY MATCH CURRENT OFFICER BRANCH + FILTERS
            const filtered = allStudentsMaster.filter(s => {
                const branchMatch = (s.branch === currentOfficerBranch);
                const cpiMatch = (s.cpi >= minCpi);
                const statusMatch = (statusFilter === 'ALL' || s.status === statusFilter);
                return branchMatch && cpiMatch && statusMatch;
            });

            tbody.innerHTML = '';
            if(filtered.length === 0) {
                tbody.innerHTML = `<tr><td colspan="7" class="text-center text-muted py-3">No students found for ${currentOfficerBranch} with selected criteria.</td></tr>`;
            } else {
                filtered.forEach(s => {
                    const statusBadge = s.status === 'Placed' ? 'badge-active' : (s.status === 'Shortlisted' ? 'badge-pending' : 'badge-info');
                    tbody.innerHTML += `
                        <tr class="student-row">
                            <td class="fw-semibold">${s.enroll}</td>
                            <td>${s.name}</td>
                            <td><span class="badge bg-light text-dark border">${s.branch}</span></td>
                            <td>${s.sem}</td>
                            <td><span class="fw-bold text-success">${s.cpi.toFixed(2)}</span></td>
                            <td><span class="badge-status ${statusBadge}">${s.status}</span></td>
                            <td><button class="btn-action-dark" onclick="openStudentModal('${s.name}', '${s.enroll}', '${s.branch}', '${s.sem}', '${s.cpi}', '${s.company}')">View Profile</button></td>
                        </tr>
                    `;
                });
            }

            document.getElementById('studentCountBadge').innerText = `Total: ${filtered.length} Students`;
        }

        function filterBranchStudents() {
            renderBranchStudents();
        }

        function resetBranchFilters() {
            document.getElementById('cpiFilter').value = '0';
            document.getElementById('statusFilter').value = 'ALL';
            renderBranchStudents();
        }

        // RENDER DRIVES ELIGIBLE FOR CURRENT OFFICER BRANCH
        function renderBranchDrives() {
            const today = new Date();
            today.setHours(0,0,0,0);

            const eligibleDrives = allDrivesMaster.filter(d => {
                const isBranchEligible = d.branches.includes(currentOfficerBranch);
                const driveDate = new Date(d.date);
                driveDate.setHours(0,0,0,0);
                return isBranchEligible && (driveDate >= today);
            });

            document.getElementById('statActiveDrives').innerText = eligibleDrives.length;

            // Update Recent Drives in Dashboard
            const recentTbody = document.getElementById('recentDrivesTableBody');
            recentTbody.innerHTML = '';

            // Update All Drives in Company Tab
            const allDrivesTbody = document.getElementById('allDrivesTableBody');
            allDrivesTbody.innerHTML = '';

            if(eligibleDrives.length === 0) {
                const emptyMsg = `<tr><td colspan="7" class="text-center text-muted py-3">No ongoing drives eligible for ${currentOfficerBranch}.</td></tr>`;
                recentTbody.innerHTML = `<tr><td colspan="6" class="text-center text-muted py-3">No ongoing drives for your department.</td></tr>`;
                allDrivesTbody.innerHTML = emptyMsg;
            } else {
                eligibleDrives.forEach(d => {
                    const rowHtmlRecent = `
                        <tr class="auto-expiring-row" data-expiry="${d.date}">
                            <td class="fw-semibold"><i class="bi bi-building text-info me-2"></i> ${d.company}</td>
                            <td>${d.role}</td>
                            <td>${d.branches.join(', ')}</td>
                            <td>${d.formattedDate}</td>
                            <td><span class="badge-status badge-active">${d.status}</span></td>
                            <td><button class="btn-action-dark" onclick="openDriveDetails('${d.company}', '${d.role}', '${d.pkg}', '${d.branches.join(', ')}', '${d.formattedDate}', '${d.status}')">View Details</button></td>
                        </tr>
                    `;
                    const rowHtmlAll = `
                        <tr class="auto-expiring-row" data-expiry="${d.date}">
                            <td class="fw-semibold"><i class="bi bi-building text-info me-2"></i> ${d.company}</td>
                            <td>${d.role}</td>
                            <td class="fw-bold text-success">${d.pkg}</td>
                            <td>${d.branches.join(', ')}</td>
                            <td>${d.formattedDate}</td>
                            <td><span class="badge-status badge-active">${d.status}</span></td>
                            <td><button class="btn-action-dark" onclick="openDriveDetails('${d.company}', '${d.role}', '${d.pkg}', '${d.branches.join(', ')}', '${d.formattedDate}', '${d.status}')">View Details</button></td>
                        </tr>
                    `;
                    recentTbody.innerHTML += rowHtmlRecent;
                    allDrivesTbody.innerHTML += rowHtmlAll;
                });
            }
        }

        // RENDER APPLICATIONS FOR CURRENT BRANCH
        function renderBranchApplications() {
            const tbody = document.getElementById('applicationsTableBody');
            const apps = allApplicationsMaster.filter(a => a.branch === currentOfficerBranch);
            
            tbody.innerHTML = '';
            if(apps.length === 0) {
                tbody.innerHTML = `<tr><td colspan="6" class="text-center text-muted py-3">No applications found for ${currentOfficerBranch}.</td></tr>`;
            } else {
                apps.forEach(a => {
                    tbody.innerHTML += `
                        <tr>
                            <td class="fw-semibold">${a.student}</td>
                            <td>${a.company}</td>
                            <td>${a.role}</td>
                            <td>${a.date}</td>
                            <td><span class="badge-status badge-pending">${a.status}</span></td>
                            <td><button class="btn-action-dark" onclick="openDriveDetails('${a.company}', '${a.role} - ${a.student}', 'N/A', '${a.branch}', '${a.date}', '${a.status}')">View Application</button></td>
                        </tr>
                    `;
                });
            }
            document.getElementById('applicationCountBadge').innerText = `${apps.length} Submissions`;
        }

        // AUTO-EXPIRY LOGIC (REMOVES PAST DATES)
        function purgeAllExpiredItems() {
            const today = new Date();
            today.setHours(0, 0, 0, 0);

            document.querySelectorAll('.auto-expiring-card').forEach(card => {
                const exp = card.getAttribute('data-expiry');
                if (exp) {
                    const itemDate = new Date(exp);
                    itemDate.setHours(0, 0, 0, 0);
                    if (itemDate < today) card.remove();
                }
            });
        }

        // INITIALIZE ON LOAD
        document.addEventListener('DOMContentLoaded', () => {
            switchOfficerBranch(currentOfficerBranch);
        });

        // TAB SWITCHER
        function showTab(tabName, element) {
            document.querySelectorAll('.content-section').forEach(tab => tab.classList.remove('active-section'));
            document.querySelectorAll('.nav-item-link').forEach(link => link.classList.remove('active'));

            const activeTab = document.getElementById('tab-' + tabName);
            if(activeTab) activeTab.classList.add('active-section');
            if(element) element.classList.add('active');

            const titles = {
                dashboard: ['Welcome, ' + currentOfficerBranch.split(' ')[0] + ' Dept Officer 👋', 'Departmental Placement Tracking & Analytics (Restricted View)'],
                students: ['Students Directory 🎓', 'Viewing students strictly registered under ' + currentOfficerBranch],
                companies: ['Placement Drives 🏢', 'Drives open for ' + currentOfficerBranch],
                applications: ['Job Applications 📄', 'Submissions from ' + currentOfficerBranch],
                training: ['Manage Events 🗓️', 'Departmental training and placement events'],
                notifications: ['Department Notifications 🔔', 'Latest updates and announcements']
            };

            if(titles[tabName]) {
                document.getElementById('section-title').innerText = titles[tabName][0];
                document.getElementById('section-subtitle').innerText = titles[tabName][1];
            }
        }

        // MODALS
        const modal = new bootstrap.Modal(document.getElementById('infoModal'));

        function openStudentModal(name, enroll, branch, sem, cpi, company) {
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
                    <div class="d-flex justify-content-between py-1"><strong>CPI:</strong> <span class="text-success fw-bold">${cpi}</span></div>
                    <div class="d-flex justify-content-between py-1"><strong>Status / Company:</strong> <span class="badge bg-success">${company}</span></div>
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
                    <div class="d-flex justify-content-between py-1"><strong>Status:</strong> <span class="badge bg-primary">${status}</span></div>
                </div>
            `;
            document.getElementById('infoModalActionBtn').style.display = 'none';
            modal.show();
        }

        function openAddEventModal() {
            document.getElementById('infoModalTitle').innerText = "Add New Department Event";
            document.getElementById('infoModalBody').innerHTML = `
                <form id="addEventForm">
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Event Title</label>
                        <input type="text" id="eventTitleInput" class="form-control form-control-sm" placeholder="e.g. Core Branch Interview Prep" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Event Date / Deadline</label>
                        <input type="date" id="eventDateInput" class="form-control form-control-sm" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Venue / Room</label>
                        <input type="text" id="eventVenueInput" class="form-control form-control-sm" placeholder="e.g. Department Seminar Hall" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Description</label>
                        <textarea id="eventDescInput" class="form-control form-control-sm" rows="2" placeholder="Brief about the session"></textarea>
                    </div>
                </form>
            `;
            const actionBtn = document.getElementById('infoModalActionBtn');
            actionBtn.style.display = 'block';
            actionBtn.innerText = "Publish Event";
            actionBtn.onclick = function() {
                const title = document.getElementById('eventTitleInput').value;
                const dateVal = document.getElementById('eventDateInput').value;
                const desc = document.getElementById('eventDescInput').value || 'Training session for branch students.';

                if(!title || !dateVal) {
                    alert('Please enter title and date.');
                    return;
                }

                const options = { day: '2-digit', month: 'short', year: 'numeric' };
                const formattedDate = new Date(dateVal).toLocaleDateString('en-GB', options);

                const container = document.getElementById('eventsContainer');
                const newCard = document.createElement('div');
                newCard.className = 'col-md-6 auto-expiring-card';
                newCard.setAttribute('data-expiry', dateVal);
                newCard.innerHTML = `
                    <div class="event-box">
                        <div class="event-icon-badge" style="background:#ECFDF5; color:#059669;">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h6 class="fw-bold text-dark mb-2">${title}</h6>
                        <p class="small text-muted mb-3">${desc}</p>
                        <span class="badge bg-light text-primary border mb-3">${formattedDate}</span>
                        <div class="d-flex gap-2">
                            <button class="btn btn-sm btn-dark px-3 rounded-pill" style="background: #18153F; border: none;" onclick="openEventDetails('${title}', '${formattedDate}', '${desc}', 'Dept Hall')">View Details</button>
                            <button class="btn btn-sm btn-light border px-3 rounded-pill" onclick="manageEvent('${title}')">Manage</button>
                        </div>
                    </div>
                `;
                container.prepend(newCard);
                modal.hide();
                alert("Event '" + title + "' published successfully for " + currentOfficerBranch + "!");
            };
            modal.show();
        }

        function openEventDetails(title, date, desc, venue) {
            document.getElementById('infoModalTitle').innerText = "Event Details - " + title;
            document.getElementById('infoModalBody').innerHTML = `
                <div class="p-2 border rounded bg-light small">
                    <div class="d-flex justify-content-between py-1"><strong>Event:</strong> <span>${title}</span></div>
                    <div class="d-flex justify-content-between py-1"><strong>Date:</strong> <span>${date}</span></div>
                    <div class="d-flex justify-content-between py-1"><strong>Venue:</strong> <span>${venue}</span></div>
                    <div class="mt-2 pt-2 border-top"><strong>Description:</strong> <p class="mb-0 text-muted mt-1">${desc}</p></div>
                </div>
            `;
            document.getElementById('infoModalActionBtn').style.display = 'none';
            modal.show();
        }

        function manageEvent(title) {
            document.getElementById('infoModalTitle').innerText = "Manage Event: " + title;
            document.getElementById('infoModalBody').innerHTML = `
                <p class="small text-muted">Update event schedule or settings for <strong>${title}</strong>.</p>
                <div class="mb-3">
                    <label class="form-label small fw-bold">Event Status</label>
                    <select class="form-select form-select-sm">
                        <option value="Open">Registration Open</option>
                        <option value="Closed">Registration Closed</option>
                        <option value="Completed">Mark as Completed</option>
                    </select>
                </div>
            `;
            const actionBtn = document.getElementById('infoModalActionBtn');
            actionBtn.style.display = 'block';
            actionBtn.innerText = "Save Settings";
            actionBtn.onclick = function() {
                alert("Event settings updated for " + title);
                modal.hide();
            };
            modal.show();
        }
    </script>
</body>
</html>