<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --bg-light: #F4F6FA;
            --sidebar-bg: #18153F; /* Matched with Student Dashboard */
            --sidebar-active: #372E75; /* Matched active item purple */
            --card-white: #FFFFFF;
            --primary-purple: #4338CA;
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

        /* Sidebar Styling (Matched with Student Dashboard) */
        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: var(--sidebar-bg);
            border-right: 1px solid rgba(255, 255, 255, 0.08);
            padding: 1.5rem 1rem;
            z-index: 100;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            font-size: 1.1rem;
            color: #fff;
            text-decoration: none;
            margin-bottom: 2rem;
            padding: 0 0.5rem;
        }

        .sidebar-brand img {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #fff;
            padding: 2px;
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
            padding: 0.8rem 1rem;
            color: #A5B4FC;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 500;
            transition: all 0.3s ease;
            margin-bottom: 0.4rem;
            cursor: pointer;
        }

        .nav-item-link:hover, .nav-item-link.active {
            background: var(--sidebar-active);
            color: #FFFFFF;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        /* Main Content Layout */
        .main-content {
            margin-left: 260px;
            padding: 2rem;
        }

        /* Section Display Control */
        .content-section {
            display: none;
            animation: fadeIn 0.3s ease;
        }

        .content-section.active-section {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(6px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Header Area */
        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #FFFFFF;
            padding: 0.5rem 1rem;
            border-radius: 30px;
            border: 1px solid var(--border-light);
            box-shadow: 0 2px 6px rgba(0,0,0,0.04);
        }

        .user-avatar {
            width: 36px;
            height: 36px;
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
            border-radius: 20px;
            padding: 1.5rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            height: 100%;
            border: 1px solid var(--border-light);
        }

        /* Stat Cards */
        .stat-card {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .stat-card h3 {
            color: var(--text-dark);
            font-weight: 700;
        }

        .stat-icon {
            width: 52px;
            height: 54px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
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
            border-spacing: 0 0.6rem;
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
            padding: 1rem;
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
            padding: 0.4rem 0.8rem;
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
            font-size: 0.78rem;
            font-weight: 600;
            padding: 0.35rem 0.85rem;
            border-radius: 8px;
            border: none;
            transition: all 0.2s ease;
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

    <!-- Sidebar Menu -->
    <aside class="sidebar">
        <div>
            <a href="javascript:void(0)" class="sidebar-brand" onclick="showTab('dashboard')">
                <img src="{{ asset('logo.jpeg') }}" onerror="this.onerror=null; this.src='https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/KD_Polytechnic_Patan_Logo.png/600px-KD_Polytechnic_Patan_Logo.png';" alt="KD Logo">
                <span>Placement Cell</span>
            </a>
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
            <a href="{{ url('/welcome') }}" class="nav-item-link text-danger"><i class="bi bi-box-arrow-right"></i> Logout</a>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="main-content">
        
        <!-- Header -->
        <header class="top-header">
            <div>
                <h3 class="fw-bold mb-1" id="section-title" style="color: #0F172A;">Welcome, Recruiter / Company 👋</h3>
                <p class="text-muted small mb-0" id="section-subtitle">Kilachand Devchand Polytechnic Campus Hiring Portal</p>
            </div>
            <div class="d-flex align-items-center gap-3">
                <div class="user-profile">
                    <div class="user-avatar">HR</div>
                    <div>
                        <div class="fw-semibold small" style="color: #0F172A;">Company HR</div>
                        <small class="text-muted" style="font-size: 0.75rem;">Corporate Recruiter</small>
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
                            <h3 class="mb-0">18</h3>
                            <small class="text-muted">Active Hiring Drives</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="white-card stat-card">
                        <div class="stat-icon stat-green"><i class="bi bi-person-check-fill"></i></div>
                        <div>
                            <h3 class="mb-0">142</h3>
                            <small class="text-muted">Students Placed</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="white-card stat-card">
                        <div class="stat-icon stat-amber"><i class="bi bi-file-earmark-person"></i></div>
                        <div>
                            <h3 class="mb-0">320</h3>
                            <small class="text-muted">Total Applications</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="white-card stat-card">
                        <div class="stat-icon stat-rose"><i class="bi bi-calendar-event-fill"></i></div>
                        <div>
                            <h3 class="mb-0">5</h3>
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
                            <button onclick="showTab('companies')" class="btn btn-sm btn-primary rounded-pill">View All Drives</button>
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
                                        <td><button class="btn-action-dark">View Details</button></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold"><i class="bi bi-building text-warning me-2"></i> L&T Construction</td>
                                        <td>Graduate Engineer Trainee</td>
                                        <td>Civil, Mechanical</td>
                                        <td>02 Sep 2026</td>
                                        <td><span class="badge-status badge-active">Active</span></td>
                                        <td><button class="btn-action-dark">View Details</button></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold"><i class="bi bi-building text-primary me-2"></i> Infosys</td>
                                        <td>System Engineer Trainee</td>
                                        <td>All Diploma Branches</td>
                                        <td>10 Sep 2026</td>
                                        <td><span class="badge-status badge-pending">Upcoming</span></td>
                                        <td><button class="btn-action-dark">Schedule</button></td>
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
                    <span class="badge bg-primary rounded-pill">Total: 450</span>
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
                                <td><button class="btn-action-dark">View Profile</button></td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">226040307015</td>
                                <td>Priya Patel</td>
                                <td>Information Technology</td>
                                <td>6th</td>
                                <td><span class="fw-bold text-success">9.10</span></td>
                                <td><span class="badge-status badge-active">Placed (Infosys)</span></td>
                                <td><button class="btn-action-dark">View Profile</button></td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">226040319022</td>
                                <td>Karan Desai</td>
                                <td>Mechanical Engineering</td>
                                <td>6th</td>
                                <td><span class="fw-bold text-primary">8.20</span></td>
                                <td><span class="badge-status badge-pending">Shortlisted</span></td>
                                <td><button class="btn-action-dark">View Profile</button></td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">226040306008</td>
                                <td>Rahul Solanki</td>
                                <td>Civil Engineering</td>
                                <td>6th</td>
                                <td><span class="fw-bold text-warning">7.40</span></td>
                                <td><span class="badge-status badge-info">Eligible</span></td>
                                <td><button class="btn-action-dark">View Profile</button></td>
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
                    <button class="btn btn-sm btn-primary rounded-pill"><i class="bi bi-plus-lg"></i> Add New Drive</button>
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
                            </tr>
                            <tr>
                                <td class="fw-semibold"><i class="bi bi-building text-warning me-2"></i> L&T Construction</td>
                                <td>Diploma Engineer Trainee</td>
                                <td class="fw-bold text-success">5.0 LPA</td>
                                <td>Mechanical, Civil, Electrical</td>
                                <td>02 Sep 2026</td>
                                <td><span class="badge-status badge-active">Upcoming</span></td>
                            </tr>
                            <tr>
                                <td class="fw-semibold"><i class="bi bi-building text-primary me-2"></i> Infosys</td>
                                <td>System Associate</td>
                                <td class="fw-bold text-success">4.5 LPA</td>
                                <td>All Diploma Branches</td>
                                <td>10 Sep 2026</td>
                                <td><span class="badge-status badge-pending">Registration Open</span></td>
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
                    <span class="badge bg-success rounded-pill">320 Applications</span>
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
                                <td><button class="btn-action-dark">Review</button></td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Siddharth Shah</td>
                                <td>L&T Construction</td>
                                <td>Graduate Trainee</td>
                                <td>19 Aug 2026</td>
                                <td><span class="badge-status badge-active">Shortlisted</span></td>
                                <td><button class="btn-action-dark">View Details</button></td>
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
                dashboard: ['Welcome, Recruiter / Company 👋', 'Kilachand Devchand Polytechnic Campus Hiring Portal'],
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
    </script>
</body>
</html>