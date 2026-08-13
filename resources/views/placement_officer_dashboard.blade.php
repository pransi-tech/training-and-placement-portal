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
            --bg-dark: #0B132B; /* Dark Blue main background */
            --sidebar-bg: #121829;
            --card-white: #FFFFFF; /* Pure white for inner content cards */
            --primary-purple: #6366F1;
            --text-dark: #1E293B; /* Dark text inside white cards */
            --text-muted: #64748B;
            --border-light: #E2E8F0;
        }

        body {
            font-family: 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #020617 0%, var(--bg-dark) 100%);
            color: #F8FAFC;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: var(--sidebar-bg);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
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
            color: #94A3B8;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 500;
            transition: all 0.3s ease;
            margin-bottom: 0.4rem;
        }

        .nav-item-link:hover, .nav-item-link.active {
            background: var(--primary-purple);
            color: #fff;
            box-shadow: 0 8px 20px rgba(99, 102, 241, 0.3);
        }

        /* Main Content Layout */
        .main-content {
            margin-left: 260px;
            padding: 2rem;
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
            background: rgba(255, 255, 255, 0.08);
            padding: 0.5rem 1rem;
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .user-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--primary-purple);
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
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            height: 100%;
            border: 1px solid var(--border-light);
        }

        /* Stat Cards */
        .stat-card {
            display: flex;
            align-items: center;
            gap: 1rem;
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

        /* Tables & Lists inside White Cards */
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
            <a href="#" class="sidebar-brand">
                <img src="{{ asset('logo.jpeg') }}" onerror="this.onerror=null; this.src='https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/KD_Polytechnic_Patan_Logo.png/600px-KD_Polytechnic_Patan_Logo.png';" alt="KD Logo">
                <span>Placement Cell</span>
            </a>
            <ul class="nav-menu">
                <li><a href="#" class="nav-item-link active"><i class="bi bi-grid-fill"></i> Dashboard</a></li>
                <li><a href="#" class="nav-item-link"><i class="bi bi-people-fill"></i> Students List</a></li>
                <li><a href="#" class="nav-item-link"><i class="bi bi-building-fill"></i> Company Drives</a></li>
                <li><a href="#" class="nav-item-link"><i class="bi bi-file-earmark-text-fill"></i> Applications</a></li>
                <li><a href="#" class="nav-item-link"><i class="bi bi-journal-check"></i> Training & Skill Cell</a></li>
                <li><a href="#" class="nav-item-link"><i class="bi bi-bell-fill"></i> Notifications</a></li>
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
                <h3 class="fw-bold mb-1 text-white">Welcome, TPO Officer 👋</h3>
                <p class="text-light-emphasis small mb-0">Kilachand Devchand Polytechnic Placement Dashboard</p>
            </div>
            <div class="d-flex align-items-center gap-3">
                <div class="user-profile">
                    <div class="user-avatar">PO</div>
                    <div>
                        <div class="fw-semibold small text-white">Placement Officer</div>
                        <small class="text-light-emphasis" style="font-size: 0.75rem;">K. D. Polytechnic, Patan</small>
                    </div>
                </div>
            </div>
        </header>

        <!-- Stats Grid (4 White Cards) -->
        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="white-card stat-card">
                    <div class="stat-icon stat-purple"><i class="bi bi-building"></i></div>
                    <div>
                        <h3 class="fw-bold mb-0">18</h3>
                        <small class="text-muted">Active Hiring Drives</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="white-card stat-card">
                    <div class="stat-icon stat-green"><i class="bi bi-person-check-fill"></i></div>
                    <div>
                        <h3 class="fw-bold mb-0">142</h3>
                        <small class="text-muted">Students Placed</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="white-card stat-card">
                    <div class="stat-icon stat-amber"><i class="bi bi-file-earmark-person"></i></div>
                    <div>
                        <h3 class="fw-bold mb-0">320</h3>
                        <small class="text-muted">Total Applications</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="white-card stat-card">
                    <div class="stat-icon stat-rose"><i class="bi bi-calendar-event-fill"></i></div>
                    <div>
                        <h3 class="fw-bold mb-0">5</h3>
                        <small class="text-muted">Upcoming Interviews</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Middle Section (White Cards) -->
        <div class="row g-4">
            
            <!-- Latest Drives Table -->
            <div class="col-lg-8">
                <div class="white-card">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-bold mb-0"><i class="bi bi-briefcase-fill text-primary me-2"></i> Recent Placement Drives</h5>
                        <a href="#" class="btn btn-sm btn-primary rounded-pill">View All Drives</a>
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
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-semibold"><i class="bi bi-building text-info me-2"></i> TCS</td>
                                    <td>Junior Software Engineer</td>
                                    <td>Computer, IT</td>
                                    <td>28 Aug 2026</td>
                                    <td><span class="badge-status badge-active">Active</span></td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold"><i class="bi bi-building text-warning me-2"></i> L&T Construction</td>
                                    <td>Graduate Engineer Trainee</td>
                                    <td>Civil, Mechanical</td>
                                    <td>02 Sep 2026</td>
                                    <td><span class="badge-status badge-active">Active</span></td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold"><i class="bi bi-building text-primary me-2"></i> Infosys</td>
                                    <td>System Engineer Trainee</td>
                                    <td>All Diploma Branches</td>
                                    <td>10 Sep 2026</td>
                                    <td><span class="badge-status badge-pending">Upcoming</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Branch-wise Placement Summary -->
            <div class="col-lg-4">
                <div class="white-card">
                    <h5 class="fw-bold mb-3"><i class="bi bi-bar-chart-fill text-warning me-2"></i> Branch Placement Status</h5>
                    
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

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>