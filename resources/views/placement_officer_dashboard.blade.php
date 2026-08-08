<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Placement Officer Dashboard | TPMS Dark Portal</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-dark: #0b1329;
            --bg-gradient: linear-gradient(135deg, #0b1329 0%, #111c38 50%, #0d1527 100%);
            --glass-bg: rgba(22, 33, 62, 0.85);
            --glass-border: rgba(255, 255, 255, 0.12);
            --glass-hover-border: rgba(16, 185, 129, 0.45);
            --primary-green: #10b981;
            --primary-green-hover: #059669;
            --light-green: #34d399;
            --text-main: #f8fafc;
            --text-secondary: #cbd5e1;
            --text-muted: #94a3b8;
            --sidebar-width: 260px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--bg-gradient);
            background-attachment: fixed;
            color: var(--text-main);
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* Glassmorphism Cards */
        .glass-card {
            background: var(--glass-bg);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid var(--glass-border);
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
            overflow: hidden;
        }

        .glass-card:hover {
            border-color: var(--glass-hover-border);
            box-shadow: 0 14px 35px rgba(16, 185, 129, 0.18);
        }

        /* Sidebar Styling */
        #sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-right: 1px solid var(--glass-border);
            z-index: 1040;
            transition: all 0.3s ease;
        }

        .sidebar-brand {
            padding: 24px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 1px solid var(--glass-border);
        }

        .sidebar-brand-icon {
            width: 42px;
            height: 42px;
            background: linear-gradient(135deg, var(--primary-green), #059669);
            color: #ffffff;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);
        }

        .sidebar-brand-text h6 {
            margin: 0;
            font-weight: 700;
            color: #ffffff;
            letter-spacing: -0.3px;
        }

        .sidebar-brand-text span {
            font-size: 0.75rem;
            color: var(--light-green);
            display: block;
            font-weight: 500;
        }

        .sidebar-menu {
            padding: 20px 12px;
            list-style: none;
            margin: 0;
        }

        .sidebar-menu .menu-header {
            font-size: 0.72rem;
            font-weight: 600;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 10px 12px 6px;
        }

        .sidebar-menu li a {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 12px 16px;
            color: #e2e8f0;
            text-decoration: none;
            border-radius: 10px;
            font-size: 0.92rem;
            font-weight: 500;
            transition: all 0.25s ease;
            margin-bottom: 4px;
            cursor: pointer;
        }

        .sidebar-menu li a i {
            font-size: 1.15rem;
            width: 22px;
            text-align: center;
            color: #cbd5e1;
            transition: color 0.25s ease;
        }

        .sidebar-menu li a:hover {
            background: rgba(16, 185, 129, 0.18);
            color: #ffffff;
        }

        .sidebar-menu li a:hover i {
            color: var(--light-green);
        }

        .sidebar-menu li.active a {
            background: linear-gradient(135deg, var(--primary-green), var(--primary-green-hover));
            color: #ffffff !important;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);
        }

        .sidebar-menu li.active a i {
            color: #ffffff !important;
        }

        /* Main Content Area */
        #main-content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            transition: all 0.3s ease;
        }

        /* Top Navbar */
        .top-navbar {
            background: rgba(15, 23, 42, 0.92);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            padding: 18px 28px;
            border-bottom: 1px solid var(--glass-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 1030;
            min-height: 75px;
        }

        .navbar-title-box h5 {
            color: #ffffff;
            font-weight: 700;
            margin: 0;
            font-size: 1.15rem;
        }

        .navbar-title-box p {
            color: var(--text-secondary);
            font-size: 0.85rem;
            margin: 2px 0 0 0;
            font-weight: 400;
        }

        .toggle-sidebar-btn {
            background: transparent;
            border: none;
            font-size: 1.3rem;
            color: #ffffff;
            cursor: pointer;
            padding: 4px 8px;
            border-radius: 6px;
            display: none;
        }

        .date-badge {
            background: rgba(16, 185, 129, 0.18);
            color: var(--light-green);
            border: 1px solid rgba(16, 185, 129, 0.35);
            padding: 7px 16px;
            border-radius: 50rem;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .notification-btn {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: rgba(30, 41, 59, 0.8);
            border: 1px solid var(--glass-border);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            position: relative;
            cursor: pointer;
            transition: all 0.25s;
        }

        .notification-btn:hover {
            background: rgba(16, 185, 129, 0.25);
            color: var(--light-green);
            border-color: var(--primary-green);
        }

        .notification-badge {
            position: absolute;
            top: 4px;
            right: 4px;
            width: 10px;
            height: 10px;
            background-color: #ef4444;
            border: 2px solid #0f172a;
            border-radius: 50%;
        }

        /* Metric Dashboard Cards */
        .metric-card {
            padding: 24px;
            position: relative;
        }

        .metric-icon-box {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 16px;
        }

        .metric-icon-box.green { background: rgba(16, 185, 129, 0.2); color: #34d399; border: 1px solid rgba(16, 185, 129, 0.4); }
        .metric-icon-box.blue { background: rgba(59, 130, 246, 0.2); color: #60a5fa; border: 1px solid rgba(59, 130, 246, 0.4); }
        .metric-icon-box.orange { background: rgba(245, 158, 11, 0.2); color: #fbbf24; border: 1px solid rgba(245, 158, 11, 0.4); }
        .metric-icon-box.purple { background: rgba(168, 85, 247, 0.2); color: #c084fc; border: 1px solid rgba(168, 85, 247, 0.4); }

        .metric-value {
            font-size: 2.1rem;
            font-weight: 700;
            color: #ffffff;
            line-height: 1;
            margin-bottom: 6px;
        }

        .metric-title {
            font-size: 0.9rem;
            color: var(--text-secondary);
            margin: 0;
            font-weight: 500;
        }

        /* Section Cards & Headers */
        .card-header-custom {
            padding: 20px 24px;
            border-bottom: 1px solid var(--glass-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: transparent;
        }

        .card-title-custom {
            font-size: 1.1rem;
            font-weight: 600;
            color: #ffffff;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .card-title-custom i {
            color: var(--light-green);
        }

        /* Table Styling with High Contrast */
        .glass-table {
            margin: 0;
            color: #f1f5f9;
        }

        .glass-table th {
            background: rgba(15, 23, 42, 0.85);
            color: #cbd5e1;
            font-size: 0.82rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            padding: 15px 20px;
            border-bottom: 1px solid var(--glass-border);
            white-space: nowrap;
        }

        .glass-table td {
            padding: 15px 20px;
            font-size: 0.92rem;
            vertical-align: middle;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            color: #f1f5f9;
        }

        .glass-table tbody tr {
            transition: background-color 0.2s ease;
        }

        .glass-table tbody tr:hover {
            background-color: rgba(255, 255, 255, 0.05);
        }

        /* Form Controls & Inputs */
        .form-control, .form-select {
            background: rgba(15, 23, 42, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.18);
            color: #ffffff;
            border-radius: 8px;
            padding: 9px 14px;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .form-control:focus, .form-select:focus {
            background: rgba(15, 23, 42, 0.95);
            border-color: var(--primary-green);
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.3);
            color: #ffffff;
        }

        .form-control::placeholder {
            color: #94a3b8;
        }

        .input-group-text {
            background: rgba(15, 23, 42, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.18);
            color: #cbd5e1;
        }

        /* Badges */
        .badge-status {
            padding: 6px 14px;
            border-radius: 50rem;
            font-size: 0.8rem;
            font-weight: 600;
            display: inline-block;
        }

        .badge-eligible, .badge-open, .badge-placed {
            background: rgba(16, 185, 129, 0.2);
            color: #34d399;
            border: 1px solid rgba(16, 185, 129, 0.4);
        }

        .badge-applied, .badge-ongoing, .badge-pending {
            background: rgba(245, 158, 11, 0.2);
            color: #fbbf24;
            border: 1px solid rgba(245, 158, 11, 0.4);
        }

        .badge-closed, .badge-not-eligible, .badge-rejected {
            background: rgba(239, 68, 68, 0.2);
            color: #f87171;
            border: 1px solid rgba(239, 68, 68, 0.4);
        }

        /* Buttons with High Contrast Hover States */
        .btn-green {
            background: linear-gradient(135deg, var(--primary-green), var(--primary-green-hover));
            color: #ffffff !important;
            border: none;
            font-weight: 600;
            padding: 9px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.35);
            transition: all 0.25s ease;
        }

        .btn-green:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.5);
            color: #ffffff !important;
        }

        .btn-outline-green {
            background: transparent;
            color: var(--light-green) !important;
            border: 1px solid rgba(16, 185, 129, 0.5);
            font-weight: 600;
            padding: 7px 16px;
            border-radius: 8px;
            transition: all 0.25s ease;
        }

        .btn-outline-green:hover {
            background: var(--primary-green);
            color: #ffffff !important;
            border-color: var(--primary-green);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.35);
        }

        .btn-outline-light {
            border-color: rgba(255, 255, 255, 0.25);
            color: #e2e8f0 !important;
            font-weight: 500;
        }

        .btn-outline-light:hover {
            background: rgba(255, 255, 255, 0.15);
            color: #ffffff !important;
            border-color: rgba(255, 255, 255, 0.4);
        }

        /* Events & Company Cards */
        .event-card, .company-card {
            background: rgba(30, 41, 59, 0.7);
            border: 1px solid var(--glass-border);
            border-radius: 14px;
            padding: 20px;
            transition: all 0.3s ease;
            height: 100%;
        }

        .event-card:hover, .company-card:hover {
            transform: translateY(-4px);
            border-color: var(--glass-hover-border);
            box-shadow: 0 8px 25px rgba(16, 185, 129, 0.18);
        }

        .event-date-box {
            width: 52px;
            height: 52px;
            background: rgba(16, 185, 129, 0.2);
            color: var(--light-green);
            border: 1px solid rgba(16, 185, 129, 0.4);
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            line-height: 1.1;
            flex-shrink: 0;
        }

        .event-date-box span {
            font-size: 0.7rem;
            text-transform: uppercase;
            font-weight: 600;
        }

        /* Notification Dropdown Custom Width & Scroll */
        .notification-dropdown-menu {
            width: 380px !important;
            max-height: 420px;
            overflow-y: auto;
            background: rgba(15, 23, 42, 0.98) !important;
            border: 1px solid var(--glass-border);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6);
            border-radius: 14px;
        }

        /* Custom Scrollbar for Dropdowns */
        .notification-dropdown-menu::-webkit-scrollbar {
            width: 6px;
        }

        .notification-dropdown-menu::-webkit-scrollbar-thumb {
            background: rgba(16, 185, 129, 0.4);
            border-radius: 10px;
        }

        /* Profile Dropdown Custom */
        .profile-dropdown-menu {
            background: rgba(15, 23, 42, 0.98) !important;
            border: 1px solid var(--glass-border);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6);
            border-radius: 14px;
            min-width: 200px;
        }

        /* Progress Bar Customization */
        .progress {
            height: 10px;
            border-radius: 50rem;
            background: rgba(15, 23, 42, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        /* Glass Modal */
        .modal-content.glass-modal {
            background: rgba(15, 23, 42, 0.98);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            color: var(--text-main);
            border-radius: 16px;
            box-shadow: 0 25px 60px rgba(0,0,0,0.7);
        }

        .modal-header, .modal-footer {
            border-color: var(--glass-border);
        }

        /* Mobile Sidebar Overlay */
        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1035;
            display: none;
        }

        /* SPA Section Hiding */
        .dashboard-section {
            display: none;
            animation: fadeIn 0.35s ease-in-out;
        }

        .dashboard-section.active-section {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(8px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 991.98px) {
            #sidebar { left: calc(-1 * var(--sidebar-width)); }
            #sidebar.show-sidebar { left: 0; }
            #main-content { margin-left: 0; }
            .toggle-sidebar-btn { display: block; }
            .sidebar-overlay.active { display: block; }
            .notification-dropdown-menu { width: 310px !important; }
        }
    </style>
</head>
<body>

    <!-- Mobile Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- SIDEBAR NAVIGATION -->
    <aside id="sidebar">
        <div class="sidebar-brand">
            <div class="sidebar-brand-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="sidebar-brand-text">
                <h6>K D Polytechnic</h6>
                <span>T&P Portal</span>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Main Menu</li>
            <li class="active" data-section="dashboard">
                <a onclick="switchSection('dashboard')"><i class="fas fa-chart-pie"></i> <span>Dashboard</span></a>
            </li>
            <li data-section="students">
                <a onclick="switchSection('students')"><i class="fas fa-user-graduate"></i> <span>Students</span></a>
            </li>
            <li data-section="companies">
                <a onclick="switchSection('companies')"><i class="fas fa-building"></i> <span>Companies</span></a>
            </li>
            <li data-section="drives">
                <a onclick="switchSection('drives')"><i class="fas fa-briefcase"></i> <span>Placement Drives</span></a>
            </li>
            <li data-section="applications">
                <a onclick="switchSection('applications')"><i class="fas fa-file-signature"></i> <span>Applications</span></a>
            </li>

            <li class="menu-header mt-3">Activities & Reports</li>
            <li data-section="events">
                <a onclick="switchSection('events')"><i class="fas fa-calendar-alt"></i> <span>Events</span></a>
            </li>
            <li data-section="reports">
                <a onclick="switchSection('reports')"><i class="fas fa-chart-line"></i> <span>Reports</span></a>
            </li>
            <li class="mt-4">
                <a href="{{ url('/logout') }}" class="text-danger"><i class="fas fa-right-from-bracket text-danger"></i> <span>Logout</span></a>
            </li>
        </ul>
    </aside>

    <!-- MAIN CONTENT AREA -->
    <div id="main-content">

        <!-- TOP NAVBAR -->
        <header class="top-navbar">
            <div class="d-flex align-items-center gap-3">
                <button class="toggle-sidebar-btn" id="toggleSidebar">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="navbar-title-box">
                    <h5>Welcome, Placement Officer 👋</h5>
                    <p>Manage campus drives, student applications & recruitment</p>
                </div>
            </div>

            <div class="d-flex align-items-center gap-3">
                <!-- Date Badge -->
                <div class="date-badge d-none d-md-flex align-items-center gap-2">
                    <i class="fas fa-calendar-day"></i>
                    <span>{{ date('D, d M Y') }}</span>
                </div>

                <!-- Notifications Dropdown -->
                <div class="dropdown">
                    <button class="notification-btn" type="button" id="notificationDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell"></i>
                        <span class="notification-badge"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end notification-dropdown-menu p-2 mt-2" aria-labelledby="notificationDropdown">
                        <li class="px-3 py-2 border-bottom border-secondary border-opacity-25 d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-white fs-7">Notifications</span>
                            <span class="badge bg-success rounded-pill px-2 py-1">4 New</span>
                        </li>
                        <li>
                            <a class="dropdown-item text-white py-2.5 border-bottom border-secondary border-opacity-25 rounded-2" href="#">
                                <div class="d-flex gap-3 align-items-start">
                                    <div class="p-2 rounded-circle bg-success bg-opacity-25 text-success mt-1"><i class="fas fa-building fs-7"></i></div>
                                    <div class="text-wrap">
                                        <p class="mb-1 small fw-semibold text-white">New Company Registered</p>
                                        <p class="text-secondary fs-7 mb-0">Tata Consultancy Services signed up for 2026 drive.</p>
                                        <span class="text-muted fs-7">10 mins ago</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-white py-2.5 border-bottom border-secondary border-opacity-25 rounded-2" href="#">
                                <div class="d-flex gap-3 align-items-start">
                                    <div class="p-2 rounded-circle bg-warning bg-opacity-25 text-warning mt-1"><i class="fas fa-briefcase fs-7"></i></div>
                                    <div class="text-wrap">
                                        <p class="mb-1 small fw-semibold text-white">Drive Alert</p>
                                        <p class="text-secondary fs-7 mb-0">L&T Campus Recruitment registration deadline tomorrow.</p>
                                        <span class="text-muted fs-7">2 hours ago</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-white py-2.5 border-bottom border-secondary border-opacity-25 rounded-2" href="#">
                                <div class="d-flex gap-3 align-items-start">
                                    <div class="p-2 rounded-circle bg-info bg-opacity-25 text-info mt-1"><i class="fas fa-calendar-check fs-7"></i></div>
                                    <div class="text-wrap">
                                        <p class="mb-1 small fw-semibold text-white">Interview Schedule Updated</p>
                                        <p class="text-secondary fs-7 mb-0">Infosys Technical Round shortlisted candidates list released.</p>
                                        <span class="text-muted fs-7">5 hours ago</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-white py-2.5 rounded-2" href="#">
                                <div class="d-flex gap-3 align-items-start">
                                    <div class="p-2 rounded-circle bg-primary bg-opacity-25 text-primary mt-1"><i class="fas fa-user-plus fs-7"></i></div>
                                    <div class="text-wrap">
                                        <p class="mb-1 small fw-semibold text-white">New Student Registered</p>
                                        <p class="text-secondary fs-7 mb-0">25 Computer department students verified profiles.</p>
                                        <span class="text-muted fs-7">1 day ago</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Profile Dropdown (Updated Profile Name: Patel Pransi) -->
                <div class="dropdown">
                    <button class="d-flex align-items-center gap-2 bg-transparent border-0 p-0 cursor-pointer" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle fs-2 text-success"></i>
                        <div class="text-start d-none d-sm-block">
                            <span class="d-block fw-bold text-white fs-7">Patel Pransi</span>
                            <span class="d-block text-secondary fs-7">Placement Officer</span>
                        </div>
                        <i class="fas fa-chevron-down text-muted small ms-1"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end profile-dropdown-menu p-2 mt-2" aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item text-white rounded-2 py-2" href="#"><i class="fas fa-user-circle me-2 text-success"></i> My Profile</a></li>
                        <li><a class="dropdown-item text-white rounded-2 py-2" href="#"><i class="fas fa-sliders me-2 text-success"></i> System Settings</a></li>
                        <li><hr class="dropdown-divider border-secondary"></li>
                        <li><a class="dropdown-item text-danger rounded-2 py-2" href="{{ url('/logout') }}"><i class="fas fa-right-from-bracket me-2"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- DASHBOARD SPA MAIN CONTAINER -->
        <main class="p-4">

            <!-- ====================================================== -->
            <!-- 1. DASHBOARD SECTION (DEFAULT ACTIVE) -->
            <!-- ====================================================== -->
            <section id="sec-dashboard" class="dashboard-section active-section">
                <!-- TOP 4 METRIC CARDS -->
                <div class="row g-3 mb-4">
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="glass-card metric-card">
                            <div class="metric-icon-box green"><i class="fas fa-user-graduate"></i></div>
                            <div class="metric-value">450</div>
                            <p class="metric-title">Total Students</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="glass-card metric-card">
                            <div class="metric-icon-box blue"><i class="fas fa-building"></i></div>
                            <div class="metric-value">38</div>
                            <p class="metric-title">Registered Companies</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="glass-card metric-card">
                            <div class="metric-icon-box orange"><i class="fas fa-briefcase"></i></div>
                            <div class="metric-value">12</div>
                            <p class="metric-title">Active Placement Drives</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="glass-card metric-card">
                            <div class="metric-icon-box purple"><i class="fas fa-award"></i></div>
                            <div class="metric-value">285</div>
                            <p class="metric-title">Students Placed</p>
                        </div>
                    </div>
                </div>

                <!-- MIDDLE GRID: LATEST DRIVES + PLACEMENT STATS -->
                <div class="row g-4 mb-4">
                    <!-- Latest 5 Placement Drives -->
                    <div class="col-12 col-xl-8">
                        <div class="glass-card h-100">
                            <div class="card-header-custom">
                                <h5 class="card-title-custom"><i class="fas fa-briefcase"></i> Latest Placement Drives</h5>
                                <button class="btn btn-sm btn-outline-green" onclick="switchSection('drives')">View All Drives <i class="fas fa-arrow-right ms-1"></i></button>
                            </div>
                            <div class="table-responsive">
                                <table class="table glass-table">
                                    <thead>
                                        <tr>
                                            <th>Company</th>
                                            <th>Position</th>
                                            <th>Package (CTC)</th>
                                            <th>Last Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="fw-bold text-white">Tata Consultancy Services</span></td>
                                            <td>Software Trainee</td>
                                            <td><span class="text-success fw-bold">4.2 LPA</span></td>
                                            <td>15 Aug 2026</td>
                                            <td><span class="badge-status badge-open">Open</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="fw-bold text-white">Larsen & Toubro Ltd.</span></td>
                                            <td>Graduate Trainee</td>
                                            <td><span class="text-success fw-bold">5.0 LPA</span></td>
                                            <td>18 Aug 2026</td>
                                            <td><span class="badge-status badge-open">Open</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="fw-bold text-white">Infosys Limited</span></td>
                                            <td>Systems Engineer</td>
                                            <td><span class="text-success fw-bold">4.5 LPA</span></td>
                                            <td>05 Aug 2026</td>
                                            <td><span class="badge-status badge-closed">Closed</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="fw-bold text-white">Wipro Technologies</span></td>
                                            <td>Project Associate</td>
                                            <td><span class="text-success fw-bold">3.8 LPA</span></td>
                                            <td>22 Aug 2026</td>
                                            <td><span class="badge-status badge-open">Open</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="fw-bold text-white">Accenture Solutions</span></td>
                                            <td>Associate Developer</td>
                                            <td><span class="text-success fw-bold">4.8 LPA</span></td>
                                            <td>28 Aug 2026</td>
                                            <td><span class="badge-status badge-ongoing">Ongoing</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Placement Statistics Progress Bars -->
                    <div class="col-12 col-xl-4">
                        <div class="glass-card h-100">
                            <div class="card-header-custom">
                                <h5 class="card-title-custom"><i class="fas fa-chart-pie"></i> Placement Statistics</h5>
                            </div>
                            <div class="p-4">
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="small fw-semibold text-white">Placed</span>
                                        <span class="small fw-bold text-success">63% (285)</span>
                                    </div>
                                    <div class="progress"><div class="progress-bar bg-success" style="width: 63%"></div></div>
                                </div>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="small fw-semibold text-white">Applied</span>
                                        <span class="small fw-bold text-info">22% (99)</span>
                                    </div>
                                    <div class="progress"><div class="progress-bar bg-info" style="width: 22%"></div></div>
                                </div>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="small fw-semibold text-white">Pending</span>
                                        <span class="small fw-bold text-warning">10% (45)</span>
                                    </div>
                                    <div class="progress"><div class="progress-bar bg-warning" style="width: 10%"></div></div>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="small fw-semibold text-white">Rejected</span>
                                        <span class="small fw-bold text-danger">5% (21)</span>
                                    </div>
                                    <div class="progress"><div class="progress-bar bg-danger" style="width: 5%"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BOTTOM GRID: LATEST 5 EVENTS + LIVE NOTIFICATIONS -->
                <div class="row g-4">
                    <!-- Latest 5 Events -->
                    <div class="col-12 col-xl-8">
                        <div class="glass-card h-100">
                            <div class="card-header-custom">
                                <h5 class="card-title-custom"><i class="fas fa-calendar-check"></i> Latest Upcoming Events</h5>
                                <button class="btn btn-sm btn-outline-green" onclick="switchSection('events')">View All Events <i class="fas fa-arrow-right ms-1"></i></button>
                            </div>
                            <div class="p-3">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="event-card d-flex align-items-center gap-3">
                                            <div class="event-date-box">12 <span>AUG</span></div>
                                            <div class="flex-grow-1">
                                                <h6 class="fw-bold mb-1 text-white fs-7">AI & Machine Learning Masterclass</h6>
                                                <span class="text-secondary small"><i class="far fa-clock me-1 text-success"></i>10:00 AM - 01:00 PM | Hall A</span>
                                            </div>
                                            <button class="btn btn-sm btn-outline-green" onclick="showEventDetails('AI & Machine Learning Masterclass', '12 Aug 2026', '10:00 AM - 01:00 PM', 'Sem-Hall A, Computer Dept', 'Workshop', 'Dr. S. K. Gupta (IIT Bombay Alumnus)')">Details</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="event-card d-flex align-items-center gap-3">
                                            <div class="event-date-box">18 <span>AUG</span></div>
                                            <div class="flex-grow-1">
                                                <h6 class="fw-bold mb-1 text-white fs-7">Resume Building & Portfolio Workshop</h6>
                                                <span class="text-secondary small"><i class="far fa-clock me-1 text-success"></i>02:00 PM - 04:30 PM | Auditorium</span>
                                            </div>
                                            <button class="btn btn-sm btn-outline-green" onclick="showEventDetails('Resume Building & Portfolio Workshop', '18 Aug 2026', '02:00 PM - 04:30 PM', 'Auditorium Block B', 'Workshop', 'HR Team, TCS Ltd.')">Details</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="event-card d-flex align-items-center gap-3">
                                            <div class="event-date-box">22 <span>AUG</span></div>
                                            <div class="flex-grow-1">
                                                <h6 class="fw-bold mb-1 text-white fs-7">Mock HR Interview Practice Session</h6>
                                                <span class="text-secondary small"><i class="far fa-clock me-1 text-success"></i>11:00 AM - 04:00 PM | TPO Conference Room</span>
                                            </div>
                                            <button class="btn btn-sm btn-outline-green" onclick="showEventDetails('Mock HR Interview Practice Session', '22 Aug 2026', '11:00 AM - 04:00 PM', 'TPO Cell', 'Mock Interview', 'Placement Cell Experts')">Details</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="event-card d-flex align-items-center gap-3">
                                            <div class="event-date-box">26 <span>AUG</span></div>
                                            <div class="flex-grow-1">
                                                <h6 class="fw-bold mb-1 text-white fs-7">Aptitude & Technical Screening Bootcamp</h6>
                                                <span class="text-secondary small"><i class="far fa-clock me-1 text-success"></i>09:30 AM - 12:30 PM | Computer Lab 3</span>
                                            </div>
                                            <button class="btn btn-sm btn-outline-green" onclick="showEventDetails('Aptitude & Technical Screening Bootcamp', '26 Aug 2026', '09:30 AM - 12:30 PM', 'Lab 3', 'Seminar', 'Prof. M. N. Joshi')">Details</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="event-card d-flex align-items-center gap-3">
                                            <div class="event-date-box">30 <span>AUG</span></div>
                                            <div class="flex-grow-1">
                                                <h6 class="fw-bold mb-1 text-white fs-7">Cyber Security Career Guidance Webinar</h6>
                                                <span class="text-secondary small"><i class="far fa-clock me-1 text-success"></i>04:00 PM - 06:00 PM | Online Zoom</span>
                                            </div>
                                            <button class="btn btn-sm btn-outline-green" onclick="showEventDetails('Cyber Security Career Guidance Webinar', '30 Aug 2026', '04:00 PM - 06:00 PM', 'Online Zoom', 'Webinar', 'QuickHeal Security Specialist')">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Live Notifications Card (Added View All Button) -->
                    <div class="col-12 col-xl-4">
                        <div class="glass-card h-100">
                            <div class="card-header-custom">
                                <h5 class="card-title-custom"><i class="fas fa-bullhorn"></i> Live Updates</h5>
                                <button class="btn btn-sm btn-outline-light" onclick="showToast('Showing all notifications...')">View All</button>
                            </div>
                            <div class="p-3">
                                <div class="p-3 mb-2 rounded border border-secondary border-opacity-25 bg-dark bg-opacity-60">
                                    <div class="d-flex align-items-center gap-2 mb-1">
                                        <i class="fas fa-building text-success fs-7"></i>
                                        <span class="fw-bold text-white fs-7">New Company Registration</span>
                                    </div>
                                    <p class="text-secondary small mb-1">Tata Consultancy Services signed up for 2026 campus recruitment.</p>
                                    <span class="text-muted fs-7">10 mins ago</span>
                                </div>
                                <div class="p-3 mb-2 rounded border border-secondary border-opacity-25 bg-dark bg-opacity-60">
                                    <div class="d-flex align-items-center gap-2 mb-1">
                                        <i class="fas fa-clock text-warning fs-7"></i>
                                        <span class="fw-bold text-white fs-7">Drive Alert</span>
                                    </div>
                                    <p class="text-secondary small mb-1">L&T Construction drive application deadline tomorrow.</p>
                                    <span class="text-muted fs-7">2 hours ago</span>
                                </div>
                                <div class="p-3 mb-2 rounded border border-secondary border-opacity-25 bg-dark bg-opacity-60">
                                    <div class="d-flex align-items-center gap-2 mb-1">
                                        <i class="fas fa-calendar-check text-info fs-7"></i>
                                        <span class="fw-bold text-white fs-7">Interview Schedule</span>
                                    </div>
                                    <p class="text-secondary small mb-1">Infosys Technical Round shortlisted candidates list released.</p>
                                    <span class="text-muted fs-7">5 hours ago</span>
                                </div>
                                <div class="p-3 rounded border border-secondary border-opacity-25 bg-dark bg-opacity-60">
                                    <div class="d-flex align-items-center gap-2 mb-1">
                                        <i class="fas fa-user-plus text-primary fs-7"></i>
                                        <span class="fw-bold text-white fs-7">Student Registration</span>
                                    </div>
                                    <p class="text-secondary small mb-1">25 Computer department students verified profiles.</p>
                                    <span class="text-muted fs-7">1 day ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ====================================================== -->
            <!-- 2. STUDENTS SECTION -->
            <!-- ====================================================== -->
            <section id="sec-students" class="dashboard-section">
                <div class="glass-card mb-4">
                    <div class="card-header-custom">
                        <h5 class="card-title-custom"><i class="fas fa-user-graduate"></i> Student Placement Directory</h5>
                        <button class="btn btn-sm btn-green" onclick="showToast('Add Student Modal Triggered')"><i class="fas fa-plus me-1"></i> Add Student</button>
                    </div>

                    <!-- Filter Controls -->
                    <div class="p-3 border-bottom border-secondary border-opacity-25 bg-dark bg-opacity-25">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    <input type="text" id="studentSearch" class="form-control" placeholder="Search student name or enrollment..." onkeyup="filterStudents()">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select id="studentDeptFilter" class="form-select" onchange="filterStudents()">
                                    <option value="">All Departments</option>
                                    <option value="Computer">Computer</option>
                                    <option value="IT">IT</option>
                                    <option value="Mechanical">Mechanical</option>
                                    <option value="Electrical">Electrical</option>
                                    <option value="Civil">Civil</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="studentSemFilter" class="form-select" onchange="filterStudents()">
                                    <option value="">All Semesters</option>
                                    <option value="Sem 5">Sem 5</option>
                                    <option value="Sem 6">Sem 6</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="studentStatusFilter" class="form-select" onchange="filterStudents()">
                                    <option value="">All Status</option>
                                    <option value="Eligible">Eligible</option>
                                    <option value="Placed">Placed</option>
                                    <option value="Applied">Applied</option>
                                    <option value="Not Eligible">Not Eligible</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Students Table -->
                    <div class="table-responsive">
                        <table class="table glass-table" id="studentsTable">
                            <thead>
                                <tr>
                                    <th>Enrollment No</th>
                                    <th>Student Name</th>
                                    <th>Department</th>
                                    <th>Semester</th>
                                    <th>CGPA</th>
                                    <th>Resume</th>
                                    <th>Status</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold text-white">216040307001</td>
                                    <td><span class="fw-semibold text-white">Aarav Sharma</span></td>
                                    <td>Computer</td>
                                    <td>Sem 6</td>
                                    <td><span class="fw-bold text-success">8.75</span></td>
                                    <td><a href="#" class="text-info text-decoration-none small fw-semibold" onclick="showToast('Downloading Resume...')"><i class="fas fa-file-pdf me-1"></i>View CV</a></td>
                                    <td><span class="badge-status badge-placed">Placed</span></td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-outline-green me-1" onclick="showStudentDetails('Aarav Sharma', '216040307001', 'Computer', 'Sem 6', '8.75', 'Placed', 'aarav.sharma@kdpoly.ac.in', '9876543210')"><i class="fas fa-eye"></i> View</button>
                                        <button class="btn btn-sm btn-outline-light" onclick="showEditStudentModal('Aarav Sharma', '216040307001')"><i class="fas fa-edit"></i> Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-white">216040307012</td>
                                    <td><span class="fw-semibold text-white">Priya Patel</span></td>
                                    <td>IT</td>
                                    <td>Sem 6</td>
                                    <td><span class="fw-bold text-success">9.10</span></td>
                                    <td><a href="#" class="text-info text-decoration-none small fw-semibold" onclick="showToast('Downloading Resume...')"><i class="fas fa-file-pdf me-1"></i>View CV</a></td>
                                    <td><span class="badge-status badge-placed">Placed</span></td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-outline-green me-1" onclick="showStudentDetails('Priya Patel', '216040307012', 'IT', 'Sem 6', '9.10', 'Placed', 'priya.patel@kdpoly.ac.in', '9876543211')"><i class="fas fa-eye"></i> View</button>
                                        <button class="btn btn-sm btn-outline-light" onclick="showEditStudentModal('Priya Patel', '216040307012')"><i class="fas fa-edit"></i> Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-white">216040307025</td>
                                    <td><span class="fw-semibold text-white">Rohan Mehta</span></td>
                                    <td>Computer</td>
                                    <td>Sem 5</td>
                                    <td><span class="fw-bold text-warning">7.80</span></td>
                                    <td><a href="#" class="text-info text-decoration-none small fw-semibold" onclick="showToast('Downloading Resume...')"><i class="fas fa-file-pdf me-1"></i>View CV</a></td>
                                    <td><span class="badge-status badge-applied">Applied</span></td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-outline-green me-1" onclick="showStudentDetails('Rohan Mehta', '216040307025', 'Computer', 'Sem 5', '7.80', 'Applied', 'rohan.m@kdpoly.ac.in', '9876543212')"><i class="fas fa-eye"></i> View</button>
                                        <button class="btn btn-sm btn-outline-light" onclick="showEditStudentModal('Rohan Mehta', '216040307025')"><i class="fas fa-edit"></i> Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-white">216040319005</td>
                                    <td><span class="fw-semibold text-white">Karan Desai</span></td>
                                    <td>Mechanical</td>
                                    <td>Sem 6</td>
                                    <td><span class="fw-bold text-success">8.20</span></td>
                                    <td><a href="#" class="text-info text-decoration-none small fw-semibold" onclick="showToast('Downloading Resume...')"><i class="fas fa-file-pdf me-1"></i>View CV</a></td>
                                    <td><span class="badge-status badge-eligible">Eligible</span></td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-outline-green me-1" onclick="showStudentDetails('Karan Desai', '216040319005', 'Mechanical', 'Sem 6', '8.20', 'Eligible', 'karan.d@kdpoly.ac.in', '9876543213')"><i class="fas fa-eye"></i> View</button>
                                        <button class="btn btn-sm btn-outline-light" onclick="showEditStudentModal('Karan Desai', '216040319005')"><i class="fas fa-edit"></i> Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-white">216040309018</td>
                                    <td><span class="fw-semibold text-white">Neha Verma</span></td>
                                    <td>Electrical</td>
                                    <td>Sem 5</td>
                                    <td><span class="fw-bold text-danger">6.40</span></td>
                                    <td><a href="#" class="text-muted text-decoration-none small"><i class="fas fa-file-excel me-1"></i>Pending</a></td>
                                    <td><span class="badge-status badge-not-eligible">Not Eligible</span></td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-outline-green me-1" onclick="showStudentDetails('Neha Verma', '216040309018', 'Electrical', 'Sem 5', '6.40', 'Not Eligible', 'neha.v@kdpoly.ac.in', '9876543214')"><i class="fas fa-eye"></i> View</button>
                                        <button class="btn btn-sm btn-outline-light" onclick="showEditStudentModal('Neha Verma', '216040309018')"><i class="fas fa-edit"></i> Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-white">216040306030</td>
                                    <td><span class="fw-semibold text-white">Siddharth Shah</span></td>
                                    <td>Civil</td>
                                    <td>Sem 6</td>
                                    <td><span class="fw-bold text-warning">7.95</span></td>
                                    <td><a href="#" class="text-info text-decoration-none small fw-semibold" onclick="showToast('Downloading Resume...')"><i class="fas fa-file-pdf me-1"></i>View CV</a></td>
                                    <td><span class="badge-status badge-applied">Applied</span></td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-outline-green me-1" onclick="showStudentDetails('Siddharth Shah', '216040306030', 'Civil', 'Sem 6', '7.95', 'Applied', 'siddharth.s@kdpoly.ac.in', '9876543215')"><i class="fas fa-eye"></i> View</button>
                                        <button class="btn btn-sm btn-outline-light" onclick="showEditStudentModal('Siddharth Shah', '216040306030')"><i class="fas fa-edit"></i> Edit</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="p-3 border-top border-secondary border-opacity-25 d-flex justify-content-between align-items-center">
                        <span class="text-secondary small fw-medium">Showing 1 to 6 of 450 students</span>
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled"><a class="page-link bg-dark text-muted border-secondary" href="#">Prev</a></li>
                            <li class="page-item active"><a class="page-link bg-success border-success text-white" href="#">1</a></li>
                            <li class="page-item"><a class="page-link bg-dark text-white border-secondary" href="#">2</a></li>
                            <li class="page-item"><a class="page-link bg-dark text-white border-secondary" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </section>


            <!-- ====================================================== -->
            <!-- 3. COMPANIES SECTION -->
            <!-- ====================================================== -->
            <section id="sec-companies" class="dashboard-section">
                <div class="glass-card mb-4">
                    <div class="card-header-custom">
                        <h5 class="card-title-custom"><i class="fas fa-building"></i> Registered Companies Directory</h5>
                        <button class="btn btn-sm btn-green" onclick="showToast('Register Company Form Triggered')"><i class="fas fa-plus me-1"></i> Add Company</button>
                    </div>

                    <!-- Controls -->
                    <div class="p-3 border-bottom border-secondary border-opacity-25 bg-dark bg-opacity-25">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    <input type="text" id="companySearch" class="form-control" placeholder="Search company name or industry..." onkeyup="filterCompanies()">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <select id="companyStatusFilter" class="form-select" onchange="filterCompanies()">
                                    <option value="">All Company Status</option>
                                    <option value="Active">Active Recruiter</option>
                                    <option value="Pending">Verification Pending</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Companies Cards Grid -->
                    <div class="p-4">
                        <div class="row g-3" id="companyGrid">
                            <!-- Company Card 1 -->
                            <div class="col-12 col-md-6 col-lg-4 company-card-item" data-name="tata consultancy services tcs" data-status="active">
                                <div class="company-card">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="p-2.5 bg-success bg-opacity-15 border border-success border-opacity-30 rounded-3 text-success fw-bold">TCS</div>
                                            <div>
                                                <h6 class="fw-bold text-white mb-0 fs-7">Tata Consultancy Services</h6>
                                                <span class="text-secondary fs-7">IT / Software Services</span>
                                            </div>
                                        </div>
                                        <span class="badge-status badge-open">Active</span>
                                    </div>
                                    <p class="text-secondary small mb-3">Global IT consulting & software solutions leader recruiting computer diploma engineers.</p>
                                    <div class="d-flex justify-content-between align-items-center pt-2 border-top border-secondary border-opacity-25">
                                        <span class="text-success small fw-bold"><i class="fas fa-briefcase me-1"></i> 3 Active Drives</span>
                                        <button class="btn btn-sm btn-outline-green" onclick="showCompanyDetails('Tata Consultancy Services', 'IT / Software', 'Mumbai, India', 'hr@tcs.com', 'https://www.tcs.com', 'Active')">View Details</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Company Card 2 -->
                            <div class="col-12 col-md-6 col-lg-4 company-card-item" data-name="larsen & toubro l&t" data-status="active">
                                <div class="company-card">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="p-2.5 bg-warning bg-opacity-15 border border-warning border-opacity-30 rounded-3 text-warning fw-bold">L&T</div>
                                            <div>
                                                <h6 class="fw-bold text-white mb-0 fs-7">Larsen & Toubro Ltd.</h6>
                                                <span class="text-secondary fs-7">Engineering & Construction</span>
                                            </div>
                                        </div>
                                        <span class="badge-status badge-open">Active</span>
                                    </div>
                                    <p class="text-secondary small mb-3">Premier Indian multinational EPC company hiring mechanical & civil diploma holders.</p>
                                    <div class="d-flex justify-content-between align-items-center pt-2 border-top border-secondary border-opacity-25">
                                        <span class="text-success small fw-bold"><i class="fas fa-briefcase me-1"></i> 2 Active Drives</span>
                                        <button class="btn btn-sm btn-outline-green" onclick="showCompanyDetails('Larsen & Toubro Ltd.', 'Engineering', 'Vadodara, Gujarat', 'hr@lnt.com', 'https://www.larsentoubro.com', 'Active')">View Details</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Company Card 3 -->
                            <div class="col-12 col-md-6 col-lg-4 company-card-item" data-name="infosys limited" data-status="active">
                                <div class="company-card">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="p-2.5 bg-info bg-opacity-15 border border-info border-opacity-30 rounded-3 text-info fw-bold">INF</div>
                                            <div>
                                                <h6 class="fw-bold text-white mb-0 fs-7">Infosys Limited</h6>
                                                <span class="text-secondary fs-7">IT / Cloud Services</span>
                                            </div>
                                        </div>