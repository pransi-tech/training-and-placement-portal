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
        .badge-secondary { background: #E2E8F0; color: #475569; }
        .badge-danger { background: #FEE2E2; color: #DC2626; }

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

        .branch-badge-pill {
            background: #EDE9FE;
            color: #6D28D9;
            font-weight: 700;
            padding: 0.35rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
        }

        .analytic-pill-card {
            border-radius: 14px;
            padding: 1rem;
            border: 1px solid var(--border-light);
            background: #FFFFFF;
        }

        /* COMPACT VERTICAL BAR CHART STYLING */
        .chart-container-box {
            background: #FFFFFF;
            border: 1px solid var(--border-light);
            border-radius: 16px;
            padding: 1.2rem;
        }
        .bar-chart-wrapper {
            height: 180px;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            gap: 40px; /* Reduced gap */
            padding: 10px 20px 0 20px;
            border-bottom: 2px solid #E2E8F0;
            max-width: 460px;
            margin: 0 auto;
        }
        .bar-column {
            width: 80px;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
            justify-content: flex-end;
        }
        .bar-fill {
            width: 100%;
            border-radius: 8px 8px 0 0;
            transition: height 0.4s ease;
            min-height: 25px;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            color: #fff;
            font-size: 0.85rem;
            font-weight: bold;
            padding-top: 4px;
        }
        .bar-fill-placed { background: #10B981; }
        .bar-fill-others { background: #3B82F6; }
        .bar-fill-seeking { background: #EF4444; }
        .bar-label {
            font-size: 0.8rem;
            font-weight: 600;
            margin-top: 8px;
            color: #475569;
            text-align: center;
            white-space: nowrap;
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

            <div class="menu-label">Portal Menu</div>
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
        <!-- TOP HEADER: STRICT RIGHT PLACEMENT HEAD + LEFT BRANCH SWITCHER -->
        <header class="top-header">
            <div>
                <h3 class="fw-bold mb-1" id="section-title" style="color: #0F172A;">Welcome, <span id="headerOfficerTitle">Placement Officer</span> 👋</h3>
                <p class="text-muted small mb-0" id="section-subtitle">Departmental Placement Tracking & Analytics</p>
            </div>
            
            <div class="d-flex align-items-center gap-3">
                <!-- Officer Branch Selector -->
                <div class="bg-white border rounded-pill px-3 py-1 d-flex align-items-center gap-2 shadow-sm">
                    <i class="bi bi-person-badge text-primary"></i>
                    <span class="small fw-bold text-muted">Officer Branch:</span>
                    <select class="form-select form-select-sm border-0 bg-transparent fw-bold text-primary py-0" id="activeOfficerBranch" onchange="handleBranchSelect(this.value)" style="box-shadow: none; cursor: pointer; width: auto;">
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                        <option value="Computer Engineering">Computer Engineering</option>
                        <option value="Civil Engineering">Civil Engineering</option>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                    </select>
                </div>

                <!-- Right End Profile Avatar -->
                <div class="user-profile">
                    <div class="user-avatar" id="officerAvatarBadge">ME</div>
                    <div>
                        <div class="fw-semibold small" id="officerProfileName">Prof. Placement Head</div>
                        <small class="text-muted" id="officerProfileBranch" style="font-size: 0.75rem;">Mechanical Engineering</small>
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
                            <h3 id="statActiveDrives">0</h3>
                            <small class="text-muted">Active Hiring Drives</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="white-card stat-card">
                        <div class="stat-icon stat-green"><i class="bi bi-person-check-fill"></i></div>
                        <div>
                            <h3 id="statPlacedStudents">0</h3>
                            <small class="text-muted">Branch Students Placed</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="white-card stat-card">
                        <div class="stat-icon stat-amber"><i class="bi bi-file-earmark-person"></i></div>
                        <div>
                            <h3 id="statTotalApplications">0</h3>
                            <small class="text-muted">Branch Applications</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="white-card stat-card">
                        <div class="stat-icon stat-rose"><i class="bi bi-calendar-event-fill"></i></div>
                        <div>
                            <h3 id="statUpcomingInterviews">0</h3>
                            <small class="text-muted">Upcoming Interviews</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="white-card">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="fw-bold mb-0" style="color: #0F172A;"><i class="bi bi-briefcase-fill text-primary me-2"></i> Recent Placement Drives (<span class="current-branch-label"></span>)</h5>
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
                                <tbody id="recentDrivesTableBody"></tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="white-card">
                        <h5 class="fw-bold mb-3" style="color: #0F172A;"><i class="bi bi-bar-chart-fill text-warning me-2"></i> Department Performance</h5>
                        
                        <div class="p-3 bg-light rounded-3 mb-3 border">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="fw-bold" id="deptPlacementTitle">Department</span>
                                <span class="fw-bold text-success" id="deptPlacementRate">0%</span>
                            </div>
                            <small class="text-muted d-block mb-2">Overall placement achievement for selected branch.</small>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-success" id="deptProgressBar" style="width: 0%"></div>
                            </div>
                        </div>

                        <div class="small text-muted">
                            <i class="bi bi-info-circle-fill text-primary me-1"></i>
                            Restricted View: You are currently monitoring live statistics for your selected department.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. STUDENTS DIRECTORY TAB -->
        <div id="tab-students" class="content-section">
            <div class="white-card">
                
                <!-- TOP HEADER WITH BRANCH YEAR FILTER -->
                <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                    <div>
                        <h5 class="fw-bold mb-0"><i class="bi bi-people-fill text-primary me-2"></i> Students Directory (<span class="current-branch-label"></span>)</h5>
                        <small class="text-muted">Viewing departmental batch records and placement status</small>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <!-- YEAR FILTER (2022 to 2030) -->
                        <div class="input-group input-group-sm">
                            <span class="input-group-text bg-white fw-bold text-dark"><i class="bi bi-calendar3 me-1 text-primary"></i> Passing Year:</span>
                            <select class="form-select fw-bold text-primary" id="batchYearFilter" onchange="renderBranchStudents()" style="cursor: pointer;">
                                <option value="ALL">All Batches</option>
                                <option value="2022">Batch 2022</option>
                                <option value="2023">Batch 2023</option>
                                <option value="2024">Batch 2024</option>
                                <option value="2025">Batch 2025</option>
                                <option value="2026" selected>Batch 2026 (Final Year)</option>
                                <option value="2027">Batch 2027</option>
                                <option value="2028">Batch 2028</option>
                                <option value="2029">Batch 2029</option>
                                <option value="2030">Batch 2030</option>
                            </select>
                        </div>
                        <span class="badge bg-primary rounded-pill px-3 py-2 text-nowrap" id="studentCountBadge">Total: 0 Students</span>
                    </div>
                </div>

                <!-- 3 METRIC PILL CARDS: PLACED, OTHERS, NOT QUALIFIED -->
                <div class="row g-3 mb-3">
                    <div class="col-md-4">
                        <div class="analytic-pill-card bg-light border-start border-success border-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <small class="text-muted fw-bold text-uppercase">Placed in Companies</small>
                                    <h4 class="fw-bold text-success mb-0" id="metricPlacedCount">0</h4>
                                </div>
                                <span class="badge bg-success-subtle text-success fs-6"><i class="bi bi-check-circle-fill"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="analytic-pill-card bg-light border-start border-primary border-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <small class="text-muted fw-bold text-uppercase">Others (Higher Studies / Gov)</small>
                                    <h4 class="fw-bold text-primary mb-0" id="metricOthersCount">0</h4>
                                </div>
                                <span class="badge bg-primary-subtle text-primary fs-6"><i class="bi bi-mortarboard-fill"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="analytic-pill-card bg-light border-start border-danger border-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <small class="text-muted fw-bold text-uppercase">Not Qualified / Job Seeking</small>
                                    <h4 class="fw-bold text-danger mb-0" id="metricNotQualifiedCount">0</h4>
                                </div>
                                <span class="badge bg-danger-subtle text-danger fs-6"><i class="bi bi-x-circle-fill"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- COMPACT VERTICAL BAR CHART (REDUCED GAP) -->
                <div class="chart-container-box mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="fw-bold small text-dark"><i class="bi bi-bar-chart-line-fill text-primary me-1"></i> Batch Distribution Bar Chart</span>
                        <small class="text-muted" id="barChartStatsLabel">Dynamic comparison of students</small>
                    </div>
                    <div class="bar-chart-wrapper">
                        <!-- Bar 1: Placed -->
                        <div class="bar-column">
                            <div class="bar-fill bar-fill-placed" id="barHeightPlaced" style="height: 15%;">
                                <span id="barValPlaced">0</span>
                            </div>
                            <div class="bar-label">Placed</div>
                        </div>
                        <!-- Bar 2: Others -->
                        <div class="bar-column">
                            <div class="bar-fill bar-fill-others" id="barHeightOthers" style="height: 15%;">
                                <span id="barValOthers">0</span>
                            </div>
                            <div class="bar-label">Others</div>
                        </div>
                        <!-- Bar 3: Seeking / Not Qualified -->
                        <div class="bar-column">
                            <div class="bar-fill bar-fill-seeking" id="barHeightSeeking" style="height: 15%;">
                                <span id="barValSeeking">0</span>
                            </div>
                            <div class="bar-label">Not Qualified</div>
                        </div>
                    </div>
                </div>

                <!-- Filter Controls -->
                <div class="filter-panel">
                    <div class="row g-2 align-items-center">
                        <div class="col-md-5">
                            <label class="small text-muted fw-bold mb-1"><i class="bi bi-shield-lock-fill text-success"></i> Department Locked To:</label>
                            <input type="text" class="form-control form-control-sm fw-bold bg-white" id="lockedBranchInput" readonly value="">
                        </div>
                        <div class="col-md-3">
                            <label class="small text-muted fw-bold mb-1">Minimum CPI:</label>
                            <select class="form-select form-select-sm" id="cpiFilter" onchange="renderBranchStudents()">
                                <option value="0">Any CPI</option>
                                <option value="7.0">7.0 & Above</option>
                                <option value="8.0">8.0 & Above</option>
                                <option value="8.5">8.5 & Above</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="small text-muted fw-bold mb-1">Placement Status:</label>
                            <select class="form-select form-select-sm" id="statusFilter" onchange="renderBranchStudents()">
                                <option value="ALL">All Status</option>
                                <option value="Placed">Placed</option>
                                <option value="Others">Others</option>
                                <option value="Not Qualified">Not Qualified / Seeking</option>
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
                                <th>Batch Year</th>
                                <th>CPI</th>
                                <th>Placement Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="branchStudentsTableBody"></tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 3. COMPANY DRIVES TAB -->
        <div id="tab-companies" class="content-section">
            <div class="white-card">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h5 class="fw-bold mb-0"><i class="bi bi-building-fill text-warning me-2"></i> Placement Drives (<span class="current-branch-label"></span>)</h5>
                        <small class="text-muted">Active and upcoming drives for this department</small>
                    </div>
                    <span class="branch-badge-pill" id="branchPillBadge">Department</span>
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
                        <tbody id="allDrivesTableBody"></tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 4. APPLICATIONS TAB -->
        <div id="tab-applications" class="content-section">
            <div class="white-card">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h5 class="fw-bold mb-0"><i class="bi bi-file-earmark-text-fill text-success me-2"></i> Student Job Applications (<span class="current-branch-label"></span>)</h5>
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
                        <tbody id="applicationsTableBody"></tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 5. TRAINING CELL -->
        <div id="tab-training" class="content-section">
            <div class="white-card">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h5 class="fw-bold mb-1" style="color: #0F172A;"><i class="bi bi-journal-check text-primary me-2"></i> Event Management</h5>
                        <p class="text-muted small mb-0">Departmental workshops, training sessions, and bootcamps.</p>
                    </div>
                    <button class="btn btn-sm btn-primary rounded-pill px-3 py-2" onclick="alert('Event creator opened')" style="background: var(--sidebar-active); border: none; font-weight: 600;">
                        <i class="bi bi-plus-lg me-1"></i> + Add Event
                    </button>
                </div>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="p-3 border rounded-3 bg-light">
                            <h6 class="fw-bold text-dark">Technical Mock Interview Session</h6>
                            <p class="small text-muted mb-2">Faculty mock practice for final selection clearance.</p>
                            <span class="badge bg-primary">Scheduled: 10 Oct 2026</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded-3 bg-light">
                            <h6 class="fw-bold text-dark">Aptitude & Core Test Bootcamp</h6>
                            <p class="small text-muted mb-2">Campus placement aptitude training session.</p>
                            <span class="badge bg-success">Scheduled: 18 Oct 2026</span>
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
                            <strong>Branch Notice:</strong> Verify marksheets and CPI criteria for October drives.
                            <br><small class="text-muted">Today at 10:30 AM</small>
                        </div>
                        <span class="badge bg-primary rounded-pill">New</span>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <!-- Global Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                <div class="modal-header" style="background: var(--sidebar-bg); color: #fff;">
                    <h5 class="modal-title fs-6 fw-bold" id="infoModalTitle">Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4" id="infoModalBody"></div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary btn-sm rounded-pill px-3" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // MASTER STUDENTS DATA WITH PASSING YEAR (2022 to 2030) & STATUS
        const allStudentsMaster = [
            // Mechanical Engineering
            { enroll: '226040319022', name: 'Karan Desai', branch: 'Mechanical Engineering', year: '2026', cpi: 8.20, status: 'Placed', company: 'L&T Construction (5.0 LPA)' },
            { enroll: '226040319034', name: 'Jaydeep Chaudhary', branch: 'Mechanical Engineering', year: '2026', cpi: 7.90, status: 'Placed', company: 'Tata Motors (3.8 LPA)' },
            { enroll: '226040319045', name: 'Hardik Patel', branch: 'Mechanical Engineering', year: '2026', cpi: 8.45, status: 'Others', company: 'Govt. Exam (GPSC)' },
            { enroll: '226040319011', name: 'Vikas Sharma', branch: 'Mechanical Engineering', year: '2026', cpi: 6.10, status: 'Not Qualified', company: 'Job Seeking' },
            { enroll: '216040319009', name: 'Manoj Parmar', branch: 'Mechanical Engineering', year: '2025', cpi: 7.85, status: 'Placed', company: 'Maruti Suzuki' },
            { enroll: '206040319040', name: 'Suresh Patel', branch: 'Mechanical Engineering', year: '2024', cpi: 8.10, status: 'Placed', company: 'Adani Power' },

            // Computer Engineering
            { enroll: '226040307001', name: 'Aarav Sharma', branch: 'Computer Engineering', year: '2026', cpi: 8.75, status: 'Placed', company: 'TCS (4.2 LPA)' },
            { enroll: '226040307012', name: 'Neha Vaghela', branch: 'Computer Engineering', year: '2026', cpi: 8.10, status: 'Placed', company: 'Infosys (3.8 LPA)' },
            { enroll: '226040307025', name: 'Meet Panchal', branch: 'Computer Engineering', year: '2026', cpi: 7.60, status: 'Others', company: 'Higher Studies (B.Tech)' },
            { enroll: '226040307038', name: 'Rohan Patel', branch: 'Computer Engineering', year: '2026', cpi: 6.20, status: 'Not Qualified', company: 'Job Seeking / Backlogs' },
            { enroll: '216040307005', name: 'Kavita Dave', branch: 'Computer Engineering', year: '2025', cpi: 8.40, status: 'Placed', company: 'Wipro (4.0 LPA)' },
            { enroll: '206040307018', name: 'Sanket Solanki', branch: 'Computer Engineering', year: '2024', cpi: 7.90, status: 'Placed', company: 'Capgemini' },

            // Civil Engineering
            { enroll: '226040306008', name: 'Rahul Solanki', branch: 'Civil Engineering', year: '2026', cpi: 7.40, status: 'Not Qualified', company: 'Job Seeking' },
            { enroll: '226040306019', name: 'Anjali Prajapati', branch: 'Civil Engineering', year: '2026', cpi: 8.35, status: 'Placed', company: 'L&T Construction (5.0 LPA)' },
            { enroll: '226040306031', name: 'Darshan Joshi', branch: 'Civil Engineering', year: '2026', cpi: 7.80, status: 'Others', company: 'Family Construction Business' },
            { enroll: '216040306014', name: 'Pooja Varma', branch: 'Civil Engineering', year: '2025', cpi: 8.15, status: 'Placed', company: 'Dilip Buildcon' },

            // Electrical Engineering
            { enroll: '226040309015', name: 'Priya Patel', branch: 'Electrical Engineering', year: '2026', cpi: 8.50, status: 'Placed', company: 'Tata Power (4.5 LPA)' },
            { enroll: '226040309028', name: 'Sanjay Rawal', branch: 'Electrical Engineering', year: '2026', cpi: 6.30, status: 'Not Qualified', company: 'Job Seeking' },
            { enroll: '226040309040', name: 'Manish Dave', branch: 'Electrical Engineering', year: '2026', cpi: 8.10, status: 'Others', company: 'Higher Studies (Degree)' },
            { enroll: '216040309019', name: 'Tejas Shah', branch: 'Electrical Engineering', year: '2025', cpi: 7.90, status: 'Placed', company: 'Torrent Power' }
        ];

        // MASTER DRIVES
        const allDrivesMaster = [
            { company: 'Tata Motors', role: 'Production Quality Associate', pkg: '3.8 LPA', branches: ['Mechanical Engineering'], date: '05 Oct 2026', status: 'Ongoing' },
            { company: 'L&T Heavy Engineering', role: 'Diploma Engineer Trainee', pkg: '5.2 LPA', branches: ['Mechanical Engineering', 'Civil Engineering'], date: '12 Oct 2026', status: 'Upcoming' },
            { company: 'Maruti Suzuki', role: 'Assembly Supervisor Trainee', pkg: '4.5 LPA', branches: ['Mechanical Engineering'], date: '18 Oct 2026', status: 'Open' },
            { company: 'Tata Consultancy Services', role: 'Junior Software Trainee', pkg: '4.2 LPA', branches: ['Computer Engineering'], date: '08 Oct 2026', status: 'Ongoing' },
            { company: 'Infosys BPM', role: 'Technical Support Associate', pkg: '3.6 LPA', branches: ['Computer Engineering'], date: '14 Oct 2026', status: 'Upcoming' },
            { company: 'Wipro Technologies', role: 'Project Trainee', pkg: '4.0 LPA', branches: ['Computer Engineering'], date: '22 Oct 2026', status: 'Open' },
            { company: 'L&T Construction', role: 'Site Engineer Trainee', pkg: '5.0 LPA', branches: ['Civil Engineering', 'Mechanical Engineering'], date: '10 Oct 2026', status: 'Ongoing' },
            { company: 'Adani Infra & Port', role: 'Civil Quality Inspector', pkg: '4.2 LPA', branches: ['Civil Engineering'], date: '16 Oct 2026', status: 'Upcoming' },
            { company: 'Tata Power Solar', role: 'Junior Electrical Engineer', pkg: '4.5 LPA', branches: ['Electrical Engineering'], date: '07 Oct 2026', status: 'Ongoing' },
            { company: 'Torrent Power', role: 'Substation Trainee', pkg: '4.0 LPA', branches: ['Electrical Engineering'], date: '15 Oct 2026', status: 'Open' }
        ];

        // MASTER APPLICATIONS
        const allApplicationsMaster = [
            { student: 'Karan Desai', branch: 'Mechanical Engineering', company: 'Tata Motors', role: 'Production Quality Associate', date: '28 Sep 2026', status: 'Shortlisted' },
            { student: 'Jaydeep Chaudhary', branch: 'Mechanical Engineering', company: 'L&T Heavy Engineering', role: 'Diploma Trainee', date: '29 Sep 2026', status: 'Under Review' },
            { student: 'Aarav Sharma', branch: 'Computer Engineering', company: 'TCS', role: 'Junior Software Trainee', date: '28 Sep 2026', status: 'Under Review' },
            { student: 'Neha Vaghela', branch: 'Computer Engineering', company: 'Infosys', role: 'System Trainee', date: '29 Sep 2026', status: 'Shortlisted' },
            { student: 'Rahul Solanki', branch: 'Civil Engineering', company: 'L&T Construction', role: 'Site Trainee', date: '28 Sep 2026', status: 'Under Review' },
            { student: 'Priya Patel', branch: 'Electrical Engineering', company: 'Tata Power', role: 'Junior Engineer', date: '28 Sep 2026', status: 'Shortlisted' }
        ];

        const branchStatsMap = {
            'Computer Engineering': { placedRate: '85%', placedCount: 48, appsCount: 95, interviews: 3, avatar: 'CE' },
            'Mechanical Engineering': { placedRate: '62%', placedCount: 38, appsCount: 78, interviews: 2, avatar: 'ME' },
            'Civil Engineering': { placedRate: '55%', placedCount: 26, appsCount: 52, interviews: 1, avatar: 'CV' },
            'Electrical Engineering': { placedRate: '70%', placedCount: 35, appsCount: 68, interviews: 2, avatar: 'EE' }
        };

        // READ BRANCH DIRECTLY FROM URL PARAMETER OR LOCALSTORAGE
        const urlParams = new URLSearchParams(window.location.search);
        let currentOfficerBranch = urlParams.get('branch') || localStorage.getItem('kdp_officer_branch') || 'Mechanical Engineering';

        // GUARANTEED INSTANT URL REDIRECT (NO STUCK DATA)
        function handleBranchSelect(selectedBranch) {
            localStorage.setItem('kdp_officer_branch', selectedBranch);
            // Instant redirect with branch param so URL and State are 100% synchronized
            window.location.href = window.location.pathname + '?branch=' + encodeURIComponent(selectedBranch);
        }

        function applyBranchDataDirectly() {
            // Set Select value
            const selectEl = document.getElementById('activeOfficerBranch');
            if (selectEl) selectEl.value = currentOfficerBranch;

            const shortName = currentOfficerBranch.replace(' Engineering', '');
            const stats = branchStatsMap[currentOfficerBranch] || { placedRate: '60%', placedCount: 30, appsCount: 60, interviews: 2, avatar: 'PO' };

            // Update Top Header & Profile Avatar
            document.getElementById('headerOfficerTitle').innerText = shortName + " Dept Officer";
            document.getElementById('officerAvatarBadge').innerText = stats.avatar;
            document.getElementById('officerProfileName').innerText = "Prof. " + shortName + " Coordinator";
            document.getElementById('officerProfileBranch').innerText = currentOfficerBranch;

            // Update Department Locked to Input
            document.getElementById('lockedBranchInput').value = currentOfficerBranch;
            document.getElementById('branchPillBadge').innerText = currentOfficerBranch;

            document.querySelectorAll('.current-branch-label').forEach(el => {
                el.innerText = shortName;
            });

            // Update Dashboard Tab Stats
            document.getElementById('statPlacedStudents').innerText = stats.placedCount;
            document.getElementById('statTotalApplications').innerText = stats.appsCount;
            document.getElementById('statUpcomingInterviews').innerText = stats.interviews;
            document.getElementById('deptPlacementTitle').innerText = currentOfficerBranch;
            document.getElementById('deptPlacementRate').innerText = stats.placedRate;
            document.getElementById('deptProgressBar').style.width = stats.placedRate;

            // Re-render Data Tables & Chart
            renderBranchStudents();
            renderBranchDrives();
            renderBranchApplications();
            updateTabTitles();
        }

        // RENDER STUDENTS & UPDATE VERTICAL BAR CHART
        function renderBranchStudents() {
            const tbody = document.getElementById('branchStudentsTableBody');
            const minCpi = parseFloat(document.getElementById('cpiFilter').value) || 0;
            const statusFilter = document.getElementById('statusFilter').value;
            const yearFilter = document.getElementById('batchYearFilter').value;

            // Filter students strictly by active branch and batch year
            let branchPool = allStudentsMaster.filter(s => s.branch.trim().toLowerCase() === currentOfficerBranch.trim().toLowerCase());
            if (yearFilter !== 'ALL') {
                branchPool = branchPool.filter(s => s.year === yearFilter);
            }

            const placedCount = branchPool.filter(s => s.status === 'Placed').length;
            const othersCount = branchPool.filter(s => s.status === 'Others').length;
            const notQualifiedCount = branchPool.filter(s => s.status === 'Not Qualified').length;
            const totalCount = branchPool.length;

            // Metric Cards
            document.getElementById('metricPlacedCount').innerText = placedCount;
            document.getElementById('metricOthersCount').innerText = othersCount;
            document.getElementById('metricNotQualifiedCount').innerText = notQualifiedCount;

            // UPDATE VERTICAL BAR CHART HEIGHTS (UP-DOWN HEIGHT IN PERCENT)
            const maxVal = Math.max(placedCount, othersCount, notQualifiedCount, 1);
            const placedHeight = Math.max(Math.round((placedCount / maxVal) * 85), 18);
            const othersHeight = Math.max(Math.round((othersCount / maxVal) * 85), 18);
            const seekingHeight = Math.max(Math.round((notQualifiedCount / maxVal) * 85), 18);

            document.getElementById('barHeightPlaced').style.height = placedHeight + '%';
            document.getElementById('barValPlaced').innerText = placedCount;

            document.getElementById('barHeightOthers').style.height = othersHeight + '%';
            document.getElementById('barValOthers').innerText = othersCount;

            document.getElementById('barHeightSeeking').style.height = seekingHeight + '%';
            document.getElementById('barValSeeking').innerText = notQualifiedCount;

            document.getElementById('barChartStatsLabel').innerText = `Batch ${yearFilter}: ${totalCount} Total Students Monitored`;

            // Filter Table
            const filteredTableData = branchPool.filter(s => {
                const cpiMatch = (s.cpi >= minCpi);
                const statusMatch = (statusFilter === 'ALL' || s.status === statusFilter);
                return cpiMatch && statusMatch;
            });

            tbody.innerHTML = '';
            if (filteredTableData.length === 0) {
                tbody.innerHTML = `<tr><td colspan="7" class="text-center text-muted py-3">No students found matching current filters for ${currentOfficerBranch}.</td></tr>`;
            } else {
                filteredTableData.forEach(s => {
                    let badgeClass = 'badge-info';
                    if (s.status === 'Placed') badgeClass = 'badge-active';
                    else if (s.status === 'Others') badgeClass = 'badge-secondary';
                    else if (s.status === 'Not Qualified') badgeClass = 'badge-danger';

                    tbody.innerHTML += `
                        <tr>
                            <td class="fw-semibold">${s.enroll}</td>
                            <td>${s.name}</td>
                            <td><span class="badge bg-light text-dark border">${s.branch}</span></td>
                            <td><span class="badge bg-light text-primary border">${s.year}</span></td>
                            <td><span class="fw-bold text-success">${s.cpi.toFixed(2)}</span></td>
                            <td><span class="badge-status ${badgeClass}">${s.status}</span></td>
                            <td><button class="btn-action-dark" onclick="openStudentModal('${s.name}', '${s.enroll}', '${s.branch}', '${s.year}', '${s.cpi}', '${s.company}')">View Profile</button></td>
                        </tr>
                    `;
                });
            }

            document.getElementById('studentCountBadge').innerText = `Total: ${filteredTableData.length} Students`;
        }

        // RENDER DRIVES
        function renderBranchDrives() {
            const eligibleDrives = allDrivesMaster.filter(d => d.branches.includes(currentOfficerBranch));
            document.getElementById('statActiveDrives').innerText = eligibleDrives.length;

            const recentTbody = document.getElementById('recentDrivesTableBody');
            const allDrivesTbody = document.getElementById('allDrivesTableBody');

            recentTbody.innerHTML = '';
            allDrivesTbody.innerHTML = '';

            if (eligibleDrives.length === 0) {
                recentTbody.innerHTML = `<tr><td colspan="6" class="text-center text-muted py-3">No active drives for ${currentOfficerBranch}.</td></tr>`;
                allDrivesTbody.innerHTML = `<tr><td colspan="7" class="text-center text-muted py-3">No active drives for ${currentOfficerBranch}.</td></tr>`;
            } else {
                eligibleDrives.forEach(d => {
                    const rowHtml = `
                        <tr>
                            <td class="fw-semibold"><i class="bi bi-building text-info me-2"></i> ${d.company}</td>
                            <td>${d.role}</td>
                            <td class="fw-bold text-success">${d.pkg}</td>
                            <td>${d.branches.join(', ')}</td>
                            <td>${d.date}</td>
                            <td><span class="badge-status badge-active">${d.status}</span></td>
                            <td><button class="btn-action-dark" onclick="openDriveDetails('${d.company}', '${d.role}', '${d.pkg}', '${d.branches.join(', ')}', '${d.date}', '${d.status}')">View Details</button></td>
                        </tr>
                    `;
                    const rowHtmlRecent = `
                        <tr>
                            <td class="fw-semibold"><i class="bi bi-building text-info me-2"></i> ${d.company}</td>
                            <td>${d.role}</td>
                            <td>${d.branches.join(', ')}</td>
                            <td>${d.date}</td>
                            <td><span class="badge-status badge-active">${d.status}</span></td>
                            <td><button class="btn-action-dark" onclick="openDriveDetails('${d.company}', '${d.role}', '${d.pkg}', '${d.branches.join(', ')}', '${d.date}', '${d.status}')">View Details</button></td>
                        </tr>
                    `;
                    recentTbody.innerHTML += rowHtmlRecent;
                    allDrivesTbody.innerHTML += rowHtml;
                });
            }
        }

        // RENDER APPLICATIONS
        function renderBranchApplications() {
            const tbody = document.getElementById('applicationsTableBody');
            const apps = allApplicationsMaster.filter(a => a.branch.trim().toLowerCase() === currentOfficerBranch.trim().toLowerCase());

            tbody.innerHTML = '';
            if (apps.length === 0) {
                tbody.innerHTML = `<tr><td colspan="6" class="text-center text-muted py-3">No applications submitted by ${currentOfficerBranch} students yet.</td></tr>`;
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

        function resetBranchFilters() {
            document.getElementById('cpiFilter').value = '0';
            document.getElementById('statusFilter').value = 'ALL';
            document.getElementById('batchYearFilter').value = '2026';
            renderBranchStudents();
        }

        // TAB SWITCHER
        let currentTabName = 'dashboard';
        function showTab(tabName, element) {
            currentTabName = tabName;
            document.querySelectorAll('.content-section').forEach(tab => tab.classList.remove('active-section'));
            document.querySelectorAll('.nav-item-link').forEach(link => link.classList.remove('active'));

            const activeTab = document.getElementById('tab-' + tabName);
            if (activeTab) activeTab.classList.add('active-section');
            if (element) element.classList.add('active');

            updateTabTitles();
        }

        function updateTabTitles() {
            const shortName = currentOfficerBranch.replace(' Engineering', '');
            const titles = {
                dashboard: ['Welcome, ' + shortName + ' Dept Officer 👋', 'Departmental Placement Tracking & Analytics'],
                students: ['Students Directory 🎓', 'Viewing batch records strictly registered under ' + currentOfficerBranch],
                companies: ['Placement Drives 🏢', 'Drives open for ' + currentOfficerBranch],
                applications: ['Job Applications 📄', 'Submissions from ' + currentOfficerBranch],
                training: ['Manage Events 🗓️', 'Departmental training and placement events'],
                notifications: ['Department Notifications 🔔', 'Latest updates and announcements']
            };

            if (titles[currentTabName]) {
                document.getElementById('section-title').innerText = titles[currentTabName][0];
                document.getElementById('section-subtitle').innerText = titles[currentTabName][1];
            }
        }

        // INITIALIZE ON LOAD
        document.addEventListener('DOMContentLoaded', () => {
            applyBranchDataDirectly();
        });

        // MODAL HANDLERS
        const modal = new bootstrap.Modal(document.getElementById('infoModal'));

        function openStudentModal(name, enroll, branch, year, cpi, company) {
            document.getElementById('infoModalTitle').innerText = "Student Profile Details";
            document.getElementById('infoModalBody').innerHTML = `
                <div class="text-center mb-3">
                    <div style="width: 55px; height: 55px; border-radius: 50%; background: #372E75; color: #fff; display: inline-flex; align-items: center; justify-content: center; font-size: 1.3rem; font-weight: bold;">
                        ${name.split(' ').map(n => n[0]).join('')}
                    </div>
                    <h6 class="fw-bold mt-2 mb-0">${name}</h6>
                    <small class="text-muted">${branch} | Batch ${year}</small>
                </div>
                <div class="p-2 border rounded bg-light small">
                    <div class="d-flex justify-content-between py-1"><strong>Enrollment:</strong> <span>${enroll}</span></div>
                    <div class="d-flex justify-content-between py-1"><strong>CPI:</strong> <span class="text-success fw-bold">${cpi}</span></div>
                    <div class="d-flex justify-content-between py-1"><strong>Status / Company:</strong> <span class="badge bg-primary">${company}</span></div>
                </div>
            `;
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
            modal.show();
        }
    </script>
</body>
</html>