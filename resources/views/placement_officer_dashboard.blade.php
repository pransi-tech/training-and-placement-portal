<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Placement Officer Dashboard - K. D. Polytechnic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
=======
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Placement Officer Dashboard | K D Polytechnic</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

>>>>>>> e43828a (Updated company dashboard interview section)
    <style>

        :root {
<<<<<<< HEAD
            --bg-light: #F4F6FA; /* Clean light background */
            --sidebar-bg: #121829;
            --card-white: #FFFFFF;
            --primary-purple: #6366F1;
            --text-dark: #1E293B;
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

        /* Original Sidebar Styling */
        .sidebar {
            width: 260px;
            height: 100vh;
=======
            --sidebar-width: 245px;

            --bg: #0b1329;
            --sidebar: #101a31;
            --card: rgba(22, 33, 62, 0.82);

            --border: rgba(255,255,255,0.10);

            --green: #10b981;
            --green-light: #34d399;

            --white: #f8fafc;
            --text: #cbd5e1;
            --muted: #94a3b8;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;

            font-family: 'Poppins', sans-serif;

            color: var(--white);

            background:
                radial-gradient(circle at top right, rgba(16,185,129,0.08), transparent 30%),
                linear-gradient(135deg, #0b1329, #111c38, #0d1527);

            background-attachment: fixed;

            overflow-x: hidden;
        }

        /* =========================================================
           SIDEBAR
        ========================================================= */

        #sidebar {
>>>>>>> e43828a (Updated company dashboard interview section)
            position: fixed;

            top: 0;
            left: 0;
<<<<<<< HEAD
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

        .btn-action-dark {
            background: #1E1B4B;
            color: #FFFFFF;
            font-size: 0.78rem;
            font-weight: 600;
            padding: 0.35rem 0.85rem;
            border-radius: 8px;
            border: none;
            transition: all 0.2s ease;
        }

        .btn-action-dark:hover {
            background: #312E81;
            color: #FFFFFF;
        }

        @media (max-width: 768px) {
            .sidebar { width: 100%; height: auto; position: relative; }
            .main-content { margin-left: 0; }
=======

            width: var(--sidebar-width);
            height: 100vh;

            background: rgba(15,23,42,0.97);

            border-right: 1px solid var(--border);

            z-index: 1050;

            transition: 0.3s ease;

            overflow-y: auto;
        }

        .sidebar-brand {
            height: 78px;

            display: flex;
            align-items: center;

            padding: 0 20px;

            border-bottom: 1px solid var(--border);
        }

        .brand-icon {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: linear-gradient(
                135deg,
                var(--green),
                #059669
            );

            border-radius: 11px;

            font-size: 19px;

            margin-right: 11px;

            box-shadow:
                0 5px 18px rgba(16,185,129,0.30);
        }

        .brand-title {
            margin: 0;

            color: #fff;

            font-size: 14px;

            font-weight: 700;
        }

        .brand-subtitle {
            display: block;

            color: var(--green-light);

            font-size: 11px;

            margin-top: 2px;
        }

        .sidebar-menu {
            list-style: none;

            margin: 0;

            padding: 18px 12px;
        }

        .menu-title {
            color: #64748b;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 1px;

            text-transform: uppercase;

            padding: 12px 12px 7px;
        }

        .sidebar-menu li {
            margin-bottom: 3px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;

            gap: 12px;

            padding: 10px 13px;

            color: #cbd5e1;

            text-decoration: none;

            border-radius: 9px;

            font-size: 13px;

            font-weight: 500;

            transition: 0.2s ease;

            cursor: pointer;
        }

        .sidebar-menu a i {
            width: 20px;

            text-align: center;

            font-size: 14px;

            color: #94a3b8;
        }

        .sidebar-menu a:hover {
            background: rgba(16,185,129,0.10);

            color: #fff;
        }

        .sidebar-menu a:hover i {
            color: var(--green-light);
        }

        .sidebar-menu li.active a {
            background: linear-gradient(
                135deg,
                var(--green),
                #059669
            );

            color: #fff;

            box-shadow:
                0 5px 16px rgba(16,185,129,0.25);
        }

        .sidebar-menu li.active a i {
            color: #fff;
        }

        .logout-link {
            color: #f87171 !important;
        }

        .logout-link i {
            color: #f87171 !important;
        }

        /* =========================================================
           MAIN
        ========================================================= */

        #main-content {
            margin-left: var(--sidebar-width);

            min-height: 100vh;

            transition: 0.3s ease;
        }

        /* =========================================================
           TOP BAR
        ========================================================= */

        .topbar {
            height: 72px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 25px;

            background: rgba(15,23,42,0.94);

            border-bottom: 1px solid var(--border);

            position: sticky;

            top: 0;

            z-index: 1000;
        }

        .toggle-btn {
            display: none;

            background: transparent;

            border: 0;

            color: #fff;

            font-size: 20px;

            margin-right: 10px;
        }

        .page-heading h5 {
            margin: 0;

            font-size: 17px;

            font-weight: 700;

            color: #fff;
        }

        .page-heading p {
            margin: 2px 0 0;

            color: var(--muted);

            font-size: 11px;
        }

        .top-actions {
            display: flex;

            align-items: center;

            gap: 13px;
        }

        .date-badge {
            padding: 7px 12px;

            border-radius: 30px;

            color: var(--green-light);

            background: rgba(16,185,129,0.10);

            border: 1px solid rgba(16,185,129,0.25);

            font-size: 11px;

            font-weight: 600;
        }

        .icon-btn {
            width: 38px;
            height: 38px;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #fff;

            background: rgba(30,41,59,0.8);

            border: 1px solid var(--border);

            cursor: pointer;

            position: relative;
        }

        .icon-btn:hover {
            color: var(--green-light);

            border-color: var(--green);
        }

        .notification-dot {
            width: 8px;
            height: 8px;

            position: absolute;

            top: 4px;
            right: 4px;

            border-radius: 50%;

            background: #ef4444;

            border: 1px solid #0f172a;
        }

        .profile-button {
            border: 0;

            background: transparent;

            color: #fff;

            display: flex;

            align-items: center;

            gap: 8px;

            cursor: pointer;
        }

        .profile-icon {
            font-size: 31px;

            color: var(--green);
        }

        .profile-name {
            font-size: 12px;

            font-weight: 600;

            display: block;
        }

        .profile-role {
            color: var(--muted);

            font-size: 10px;
        }

        .dropdown-menu {
            background: #111c38 !important;

            border: 1px solid var(--border) !important;

            border-radius: 11px;

            box-shadow: 0 15px 40px rgba(0,0,0,0.5);
        }

        .dropdown-item {
            color: #e2e8f0 !important;

            font-size: 12px;

            padding: 9px 12px;

            border-radius: 7px;
        }

        .dropdown-item:hover {
            background: rgba(16,185,129,0.12);

            color: #fff !important;
        }

        /* =========================================================
           PAGE
        ========================================================= */

        .page-container {
            padding: 24px;
        }

        .dashboard-section {
            display: none;

            animation: fadeIn 0.25s ease;
        }

        .dashboard-section.active-section {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* =========================================================
           CARDS
        ========================================================= */

        .glass-card {
            background: var(--card);

            border: 1px solid var(--border);

            border-radius: 14px;

            box-shadow: 0 8px 25px rgba(0,0,0,0.25);

            overflow: hidden;
>>>>>>> e43828a (Updated company dashboard interview section)
        }

        .glass-card:hover {
            border-color: rgba(16,185,129,0.25);
        }

        .section-header {
            padding: 17px 20px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            border-bottom: 1px solid var(--border);
        }

        .section-title {
            margin: 0;

            font-size: 14px;

            font-weight: 600;

            color: #fff;
        }

        .section-title i {
            color: var(--green-light);

            margin-right: 7px;
        }

        /* =========================================================
           METRICS
        ========================================================= */

        .metric-card {
            padding: 18px;
        }

        .metric-icon {
            width: 43px;
            height: 43px;

            border-radius: 11px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-bottom: 13px;

            font-size: 17px;
        }

        .green-icon {
            color: #34d399;
            background: rgba(16,185,129,0.13);
        }

        .blue-icon {
            color: #60a5fa;
            background: rgba(59,130,246,0.13);
        }

        .orange-icon {
            color: #fbbf24;
            background: rgba(245,158,11,0.13);
        }

        .purple-icon {
            color: #c084fc;
            background: rgba(168,85,247,0.13);
        }

        .metric-number {
            font-size: 25px;

            line-height: 1;

            font-weight: 700;

            margin-bottom: 5px;
        }

        .metric-label {
            color: var(--muted);

            font-size: 11px;

            margin: 0;
        }

        /* =========================================================
           TABLE
        ========================================================= */

        .table {
            margin: 0;

            color: #e2e8f0;
        }

        .table th {
            color: #94a3b8;

            background: rgba(15,23,42,0.55);

            font-size: 10px;

            text-transform: uppercase;

            letter-spacing: .5px;

            padding: 12px 16px;

            border-color: var(--border);

            white-space: nowrap;
        }

        .table td {
            color: #cbd5e1;

            font-size: 12px;

            padding: 13px 16px;

            vertical-align: middle;

            border-color: rgba(255,255,255,0.06);
        }

        .table tbody tr:hover {
            background: rgba(255,255,255,0.025);
        }

        /* =========================================================
           BUTTONS
        ========================================================= */

        .btn-green {
            border: 0;

            color: #fff !important;

            background: linear-gradient(
                135deg,
                var(--green),
                #059669
            );

            font-size: 11px;

            font-weight: 600;

            border-radius: 7px;

            padding: 7px 12px;
        }

        .btn-green:hover {
            background: linear-gradient(
                135deg,
                #34d399,
                var(--green)
            );
        }

        .btn-outline-green {
            color: var(--green-light) !important;

            border: 1px solid rgba(16,185,129,0.35);

            background: transparent;

            font-size: 11px;

            font-weight: 600;

            border-radius: 7px;

            padding: 6px 11px;
        }

        .btn-outline-green:hover {
            color: #fff !important;

            background: var(--green);

            border-color: var(--green);
        }

        /* =========================================================
           BADGES
        ========================================================= */

        .status {
            display: inline-block;

            padding: 4px 9px;

            border-radius: 20px;

            font-size: 10px;

            font-weight: 600;
        }

        .status-green {
            color: #34d399;

            background: rgba(16,185,129,0.13);
        }

        .status-yellow {
            color: #fbbf24;

            background: rgba(245,158,11,0.13);
        }

        .status-red {
            color: #f87171;

            background: rgba(239,68,68,0.13);
        }

        .status-blue {
            color: #60a5fa;

            background: rgba(59,130,246,0.13);
        }

        /* =========================================================
           EVENT
        ========================================================= */

        .event-item {
            display: flex;

            align-items: center;

            gap: 13px;

            padding: 13px 0;

            border-bottom: 1px solid rgba(255,255,255,0.06);
        }

        .event-item:last-child {
            border-bottom: 0;
        }

        .event-date {
            width: 43px;
            height: 43px;

            flex-shrink: 0;

            border-radius: 10px;

            display: flex;
            flex-direction: column;

            justify-content: center;
            align-items: center;

            color: var(--green-light);

            background: rgba(16,185,129,0.12);

            border: 1px solid rgba(16,185,129,0.22);

            font-weight: 700;

            font-size: 14px;

            line-height: 1.1;
        }

        .event-date span {
            font-size: 8px;

            margin-top: 2px;
        }

        .event-name {
            font-size: 12px;

            font-weight: 600;

            color: #fff;

            margin-bottom: 3px;
        }

        .event-info {
            color: var(--muted);

            font-size: 10px;
        }

        /* =========================================================
           QUICK ACTIONS
        ========================================================= */

        .quick-action {
            padding: 14px;

            border: 1px solid var(--border);

            border-radius: 10px;

            background: rgba(15,23,42,0.45);

            text-decoration: none;

            color: #fff;

            display: flex;

            align-items: center;

            gap: 11px;

            transition: 0.2s;
        }

        .quick-action:hover {
            color: #fff;

            border-color: rgba(16,185,129,0.4);

            background: rgba(16,185,129,0.08);

            transform: translateY(-2px);
        }

        .quick-action i {
            width: 35px;
            height: 35px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 8px;

            color: var(--green-light);

            background: rgba(16,185,129,0.12);
        }

        .quick-action span {
            font-size: 11px;

            font-weight: 600;
        }

        /* =========================================================
           SEARCH / FILTER
        ========================================================= */

        .filter-area {
            padding: 15px;

            background: rgba(15,23,42,0.25);

            border-bottom: 1px solid var(--border);
        }

        .form-control,
        .form-select {
            color: #fff !important;

            background: rgba(15,23,42,0.8) !important;

            border: 1px solid rgba(255,255,255,0.13);

            font-size: 11px;

            border-radius: 7px;
        }

        .form-control::placeholder {
            color: #64748b;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--green);

            box-shadow: 0 0 0 2px rgba(16,185,129,0.12);
        }

        .form-select option {
            background: #111c38;

            color: #fff;
        }

        .input-group-text {
            color: #94a3b8;

            background: rgba(15,23,42,0.8);

            border-color: rgba(255,255,255,0.13);
        }

        /* =========================================================
           COMPANY CARDS
        ========================================================= */

        .company-card {
            height: 100%;

            padding: 17px;

            border: 1px solid var(--border);

            border-radius: 11px;

            background: rgba(30,41,59,0.55);

            transition: 0.2s;
        }

        .company-card:hover {
            transform: translateY(-3px);

            border-color: rgba(16,185,129,0.35);
        }

        .company-logo {
            width: 42px;
            height: 42px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 9px;

            color: var(--green-light);

            background: rgba(16,185,129,0.12);

            font-size: 12px;

            font-weight: 700;
        }

        .company-name {
            color: #fff;

            font-size: 12px;

            font-weight: 600;

            margin: 0;
        }

        .company-type {
            color: var(--muted);

            font-size: 9px;
        }

        .company-description {
            color: #94a3b8;

            font-size: 10px;

            line-height: 1.6;
        }

        /* =========================================================
           EMPTY / SIMPLE PAGE
        ========================================================= */

        .simple-page {
            padding: 40px 20px;

            text-align: center;
        }

        .simple-page-icon {
            width: 65px;
            height: 65px;

            display: flex;

            align-items: center;
            justify-content: center;

            margin: 0 auto 15px;

            border-radius: 15px;

            color: var(--green-light);

            background: rgba(16,185,129,0.10);

            font-size: 26px;
        }

        .simple-page h4 {
            font-size: 18px;

            margin-bottom: 7px;
        }

        .simple-page p {
            color: var(--muted);

            font-size: 12px;

            margin-bottom: 20px;
        }

        /* =========================================================
           MODAL
        ========================================================= */

        .modal-content {
            background: #111c38;

            color: #fff;

            border: 1px solid var(--border);

            border-radius: 14px;
        }

        .modal-header,
        .modal-footer {
            border-color: var(--border);
        }

        .modal-title {
            font-size: 15px;
        }

        .modal-body {
            color: #cbd5e1;

            font-size: 12px;
        }

        .detail-row {
            display: flex;

            justify-content: space-between;

            padding: 9px 0;

            border-bottom: 1px solid rgba(255,255,255,0.06);
        }

        .detail-label {
            color: #64748b;
        }

        .detail-value {
            color: #fff;

            font-weight: 500;
        }

        /* =========================================================
           MOBILE
        ========================================================= */

        .sidebar-overlay {
            display: none;

            position: fixed;

            inset: 0;

            background: rgba(0,0,0,0.65);

            z-index: 1040;
        }

        @media (max-width: 991px) {

            #sidebar {
                left: calc(-1 * var(--sidebar-width));
            }

            #sidebar.show {
                left: 0;
            }

            #main-content {
                margin-left: 0;
            }

            .toggle-btn {
                display: block;
            }

            .sidebar-overlay.show {
                display: block;
            }

            .date-badge {
                display: none !important;
            }
        }

        @media (max-width: 575px) {

            .page-container {
                padding: 14px;
            }

            .topbar {
                padding: 0 14px;
            }

            .profile-name,
            .profile-role,
            .profile-arrow {
                display: none;
            }

            .page-heading h5 {
                font-size: 14px;
            }

            .page-heading p {
                display: none;
            }
        }

    </style>
</head>

<body>

<<<<<<< HEAD
    <!-- Sidebar Menu (Original Simple Style) -->
    <aside class="sidebar">
        <div>
            <a href="#" class="sidebar-brand">
                <img src="{{ asset('logo.jpeg') }}" onerror="this.onerror=null; this.src='https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/KD_Polytechnic_Patan_Logo.png/600px-KD_Polytechnic_Patan_Logo.png';" alt="KD Logo">
                <span>Placement Cell</span>
            </a>
            <ul class="nav-menu">
                <li><a href="{{ url('/placement-officer/dashboard') }}" class="nav-item-link active"><i class="bi bi-grid-fill"></i> Dashboard</a></li>
                <li><a href="{{ url('/placement-officer/students') }}" class="nav-item-link"><i class="bi bi-people-fill"></i> Students List</a></li>
                <li><a href="{{ url('/placement-officer/companies') }}" class="nav-item-link"><i class="bi bi-building-fill"></i> Company Drives</a></li>
                <li><a href="{{ url('/placement-officer/applications') }}" class="nav-item-link"><i class="bi bi-file-earmark-text-fill"></i> Applications</a></li>
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
                <h3 class="fw-bold mb-1" style="color: #0F172A;">Welcome, TPO Officer 👋</h3>
                <p class="text-muted small mb-0">Kilachand Devchand Polytechnic Placement Dashboard</p>
            </div>
            <div class="d-flex align-items-center gap-3">
                <div class="user-profile">
                    <div class="user-avatar">PO</div>
                    <div>
                        <div class="fw-semibold small" style="color: #0F172A;">Placement Officer</div>
                        <small class="text-muted" style="font-size: 0.75rem;">K. D. Polytechnic, Patan</small>
                    </div>
                </div>
=======
<!-- =========================================================
     SIDEBAR
========================================================= -->

<div class="sidebar-overlay" id="sidebarOverlay"></div>

<aside id="sidebar">

    <div class="sidebar-brand">

        <div class="brand-icon">
            <i class="fas fa-graduation-cap"></i>
        </div>

        <div>
            <p class="brand-title">K D Polytechnic</p>
            <span class="brand-subtitle">T&P Portal</span>
        </div>

    </div>


    <ul class="sidebar-menu">

        <li class="menu-title">Main Menu</li>

        <li class="active" data-section="dashboard">
            <a onclick="switchSection('dashboard')">
                <i class="fas fa-chart-pie"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li data-section="students">
            <a onclick="switchSection('students')">
                <i class="fas fa-user-graduate"></i>
                <span>Students</span>
            </a>
        </li>

        <li data-section="companies">
            <a onclick="switchSection('companies')">
                <i class="fas fa-building"></i>
                <span>Company Profile</span>
            </a>
        </li>

        <li data-section="drives">
            <a onclick="switchSection('drives')">
                <i class="fas fa-briefcase"></i>
                <span>Upcoming Drives</span>
            </a>
        </li>

        <li data-section="applications">
            <a onclick="switchSection('applications')">
                <i class="fas fa-file-signature"></i>
                <span>Applications</span>
            </a>
        </li>


        <li class="menu-title">Management</li>

        <li data-section="events">
            <a onclick="switchSection('events')">
                <i class="fas fa-calendar-alt"></i>
                <span>Events</span>
            </a>
        </li>

        <li data-section="reports">
            <a onclick="switchSection('reports')">
                <i class="fas fa-chart-line"></i>
                <span>Reports</span>
            </a>
        </li>

        <li data-section="quick">
            <a onclick="switchSection('quick')">
                <i class="fas fa-bolt"></i>
                <span>Quick Actions</span>
            </a>
        </li>


        <li class="menu-title">Account</li>

        <li data-section="profile">
            <a onclick="switchSection('profile')">
                <i class="fas fa-user-circle"></i>
                <span>My Profile</span>
            </a>
        </li>

        <li data-section="settings">
            <a onclick="switchSection('settings')">
                <i class="fas fa-sliders"></i>
                <span>Settings</span>
            </a>
        </li>

        <li>
            <a href="{{ url('/logout') }}" class="logout-link">
                <i class="fas fa-right-from-bracket"></i>
                <span>Logout</span>
            </a>
        </li>

    </ul>

</aside>


<!-- =========================================================
     MAIN CONTENT
========================================================= -->

<div id="main-content">


    <!-- TOP BAR -->

    <header class="topbar">

        <div class="d-flex align-items-center">

            <button class="toggle-btn" id="toggleSidebar">
                <i class="fas fa-bars"></i>
            </button>

            <div class="page-heading">

                <h5 id="topPageTitle">
                    Placement Officer Dashboard
                </h5>

                <p id="topPageSubtitle">
                    Manage students, companies and placement activities
                </p>

            </div>

        </div>


        <div class="top-actions">


            <div class="date-badge">

                <i class="fas fa-calendar-day me-1"></i>

                {{ date('D, d M Y') }}

            </div>


            <!-- NOTIFICATIONS -->

            <div class="dropdown">

                <button
                    class="icon-btn"
                    type="button"
                    data-bs-toggle="dropdown"
                >

                    <i class="fas fa-bell"></i>

                    <span class="notification-dot"></span>

                </button>


                <ul class="dropdown-menu dropdown-menu-end p-2">

                    <li class="px-2 py-2">

                        <strong class="text-white">
                            Notifications
                        </strong>

                    </li>

                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-building text-success me-2"></i>
                            New company registered
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-briefcase text-warning me-2"></i>
                            Placement drive updated
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user-plus text-info me-2"></i>
                            New student profile
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-calendar-check text-primary me-2"></i>
                            Interview schedule updated
                        </a>
                    </li>

                </ul>

            </div>


            <!-- PROFILE -->

            <div class="dropdown">

                <button
                    class="profile-button"
                    type="button"
                    data-bs-toggle="dropdown"
                >

                    <i class="bi bi-person-circle profile-icon"></i>

                    <div class="text-start">

                        <span class="profile-name">
                            Patel Pransi
                        </span>

                        <span class="profile-role">
                            Placement Officer
                        </span>

                    </div>

                    <i class="fas fa-chevron-down profile-arrow text-muted small"></i>

                </button>


                <ul class="dropdown-menu dropdown-menu-end p-2">

                    <li>
                        <a
                            class="dropdown-item"
                            href="#"
                            onclick="switchSection('profile')"
                        >
                            <i class="fas fa-user-circle text-success me-2"></i>
                            My Profile
                        </a>
                    </li>

                    <li>
                        <a
                            class="dropdown-item"
                            href="#"
                            onclick="switchSection('settings')"
                        >
                            <i class="fas fa-sliders text-success me-2"></i>
                            Settings
                        </a>
                    </li>

                    <li>
                        <hr class="dropdown-divider border-secondary">
                    </li>

                    <li>
                        <a
                            class="dropdown-item text-danger"
                            href="{{ url('/logout') }}"
                        >
                            <i class="fas fa-right-from-bracket me-2"></i>
                            Logout
                        </a>
                    </li>

                </ul>

>>>>>>> e43828a (Updated company dashboard interview section)
            </div>

<<<<<<< HEAD
        <!-- Stats Grid (4 White Cards) -->
        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="white-card stat-card">
                    <div class="stat-icon stat-purple"><i class="bi bi-building"></i></div>
                    <div>
                        <h3 class="fw-bold mb-0">18</h3>
                        <small class="text-muted">Active Hiring Drives</small>
=======
        </div>

    </header>


    <main class="page-container">


        <!-- =====================================================
             DASHBOARD
        ====================================================== -->

        <section
            id="sec-dashboard"
            class="dashboard-section active-section"
        >


            <!-- METRICS -->

            <div class="row g-3 mb-4">

                <div class="col-12 col-sm-6 col-xl-3">

                    <div class="glass-card metric-card">

                        <div class="metric-icon green-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>

                        <div class="metric-number">
                            450
                        </div>

                        <p class="metric-label">
                            Total Students
                        </p>

>>>>>>> e43828a (Updated company dashboard interview section)
                    </div>

                </div>
<<<<<<< HEAD
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
                        <a href="{{ url('/placement-officer/companies') }}" class="btn btn-sm btn-primary rounded-pill">View All Drives</a>
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
=======


                <div class="col-12 col-sm-6 col-xl-3">

                    <div class="glass-card metric-card">

                        <div class="metric-icon blue-icon">
                            <i class="fas fa-building"></i>
                        </div>

                        <div class="metric-number">
                            38
                        </div>

                        <p class="metric-label">
                            Registered Companies
                        </p>

                    </div>

                </div>


                <div class="col-12 col-sm-6 col-xl-3">

                    <div class="glass-card metric-card">

                        <div class="metric-icon orange-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>

                        <div class="metric-number">
                            12
                        </div>

                        <p class="metric-label">
                            Active Placement Drives
                        </p>

                    </div>

                </div>


                <div class="col-12 col-sm-6 col-xl-3">

                    <div class="glass-card metric-card">

                        <div class="metric-icon purple-icon">
                            <i class="fas fa-award"></i>
                        </div>

                        <div class="metric-number">
                            285
                        </div>

                        <p class="metric-label">
                            Students Placed
                        </p>

                    </div>

                </div>

            </div>


            <!-- LATEST DRIVES + QUICK ACTIONS -->

            <div class="row g-3 mb-4">


                <!-- DRIVES -->

                <div class="col-12 col-xl-8">

                    <div class="glass-card">

                        <div class="section-header">

                            <h5 class="section-title">
                                <i class="fas fa-briefcase"></i>
                                Upcoming Placement Drives
                            </h5>

                            <button
                                class="btn btn-outline-green"
                                onclick="switchSection('drives')"
                            >
                                View All
                            </button>

>>>>>>> e43828a (Updated company dashboard interview section)
                        </div>


                        <div class="table-responsive">

                            <table class="table">

                                <thead>

                                    <tr>
                                        <th>Company</th>
                                        <th>Position</th>
                                        <th>Package</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>

                                </thead>


                                <tbody>

                                    <tr>

                                        <td class="fw-semibold text-white">
                                            Tata Consultancy Services
                                        </td>

                                        <td>
                                            Software Trainee
                                        </td>

                                        <td class="text-success fw-semibold">
                                            4.2 LPA
                                        </td>

                                        <td>
                                            25 Aug 2026
                                        </td>

                                        <td>
                                            <span class="status status-green">
                                                Open
                                            </span>
                                        </td>

                                    </tr>


                                    <tr>

                                        <td class="fw-semibold text-white">
                                            Larsen & Toubro
                                        </td>

                                        <td>
                                            Graduate Trainee
                                        </td>

                                        <td class="text-success fw-semibold">
                                            5.0 LPA
                                        </td>

                                        <td>
                                            28 Aug 2026
                                        </td>

                                        <td>
                                            <span class="status status-green">
                                                Open
                                            </span>
                                        </td>

                                    </tr>


                                    <tr>

                                        <td class="fw-semibold text-white">
                                            Infosys Limited
                                        </td>

                                        <td>
                                            Systems Engineer
                                        </td>

                                        <td class="text-success fw-semibold">
                                            4.5 LPA
                                        </td>

                                        <td>
                                            30 Aug 2026
                                        </td>

                                        <td>
                                            <span class="status status-yellow">
                                                Ongoing
                                            </span>
                                        </td>

                                    </tr>


                                    <tr>

                                        <td class="fw-semibold text-white">
                                            Wipro Technologies
                                        </td>

                                        <td>
                                            Project Associate
                                        </td>

                                        <td class="text-success fw-semibold">
                                            3.8 LPA
                                        </td>

                                        <td>
                                            02 Sep 2026
                                        </td>

                                        <td>
                                            <span class="status status-green">
                                                Open
                                            </span>
                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

<<<<<<< HEAD
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
=======
                </div>


                <!-- QUICK ACTIONS -->

                <div class="col-12 col-xl-4">

                    <div class="glass-card">

                        <div class="section-header">

                            <h5 class="section-title">
                                <i class="fas fa-bolt"></i>
                                Quick Actions
                            </h5>

                        </div>


                        <div class="p-3">

                            <div class="row g-2">

                                <div class="col-6">

                                    <a
                                        href="#"
                                        class="quick-action"
                                        onclick="switchSection('students'); return false;"
                                    >

                                        <i class="fas fa-user-plus"></i>

                                        <span>
                                            Students
                                        </span>

                                    </a>

                                </div>


                                <div class="col-6">

                                    <a
                                        href="#"
                                        class="quick-action"
                                        onclick="switchSection('companies'); return false;"
                                    >

                                        <i class="fas fa-building"></i>

                                        <span>
                                            Companies
                                        </span>

                                    </a>

                                </div>


                                <div class="col-6">

                                    <a
                                        href="#"
                                        class="quick-action"
                                        onclick="switchSection('drives'); return false;"
                                    >

                                        <i class="fas fa-briefcase"></i>

                                        <span>
                                            Drives
                                        </span>

                                    </a>

                                </div>


                                <div class="col-6">

                                    <a
                                        href="#"
                                        class="quick-action"
                                        onclick="switchSection('applications'); return false;"
                                    >

                                        <i class="fas fa-file-alt"></i>

                                        <span>
                                            Applications
                                        </span>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- EVENTS + LIVE UPDATES -->

            <div class="row g-3">


                <!-- EVENTS -->

                <div class="col-12 col-xl-7">

                    <div class="glass-card">

                        <div class="section-header">

                            <h5 class="section-title">
                                <i class="fas fa-calendar-check"></i>
                                Upcoming Events
                            </h5>

                            <button
                                class="btn btn-outline-green"
                                onclick="switchSection('events')"
                            >
                                View All
                            </button>

                        </div>


                        <div class="px-3">

                            <div class="event-item">

                                <div class="event-date">
                                    22
                                    <span>AUG</span>
                                </div>

                                <div class="flex-grow-1">

                                    <div class="event-name">
                                        Mock HR Interview Practice
                                    </div>

                                    <div class="event-info">
                                        11:00 AM - 04:00 PM · T&P Cell
                                    </div>

                                </div>

                                <button
                                    class="btn btn-outline-green"
                                    onclick="showEvent('Mock HR Interview Practice','22 Aug 2026','11:00 AM - 04:00 PM','T&P Cell')"
                                >
                                    Details
                                </button>

                            </div>


                            <div class="event-item">

                                <div class="event-date">
                                    26
                                    <span>AUG</span>
                                </div>

                                <div class="flex-grow-1">

                                    <div class="event-name">
                                        Aptitude & Technical Bootcamp
                                    </div>

                                    <div class="event-info">
                                        09:30 AM - 12:30 PM · Computer Lab 3
                                    </div>

                                </div>

                                <button
                                    class="btn btn-outline-green"
                                    onclick="showEvent('Aptitude & Technical Bootcamp','26 Aug 2026','09:30 AM - 12:30 PM','Computer Lab 3')"
                                >
                                    Details
                                </button>

                            </div>


                            <div class="event-item">

                                <div class="event-date">
                                    30
                                    <span>AUG</span>
                                </div>

                                <div class="flex-grow-1">

                                    <div class="event-name">
                                        Cyber Security Career Webinar
                                    </div>

                                    <div class="event-info">
                                        04:00 PM - 06:00 PM · Online
                                    </div>

                                </div>

                                <button
                                    class="btn btn-outline-green"
                                    onclick="showEvent('Cyber Security Career Webinar','30 Aug 2026','04:00 PM - 06:00 PM','Online')"
                                >
                                    Details
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- LIVE UPDATES -->

                <div class="col-12 col-xl-5">

                    <div class="glass-card">

                        <div class="section-header">

                            <h5 class="section-title">
                                <i class="fas fa-bullhorn"></i>
                                Live Updates
                            </h5>

                        </div>


                        <div class="p-3">

                            <div class="mb-3">

                                <div class="d-flex gap-2">

                                    <i class="fas fa-building text-success mt-1"></i>

                                    <div>

                                        <div class="event-name">
                                            New Company Registration
                                        </div>

                                        <div class="event-info">
                                            TCS registered for campus recruitment.
                                        </div>

                                    </div>

                                </div>

                            </div>


                            <div class="mb-3">

                                <div class="d-flex gap-2">

                                    <i class="fas fa-clock text-warning mt-1"></i>

                                    <div>

                                        <div class="event-name">
                                            Drive Alert
                                        </div>

                                        <div class="event-info">
                                            L&T application deadline is approaching.
                                        </div>

                                    </div>

                                </div>

                            </div>


                            <div>

                                <div class="d-flex gap-2">

                                    <i class="fas fa-user-plus text-info mt-1"></i>

                                    <div>

                                        <div class="event-name">
                                            Student Registration
                                        </div>

                                        <div class="event-info">
                                            New student profiles were verified.
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             STUDENTS
        ====================================================== -->

        <section id="sec-students" class="dashboard-section">

            <div class="glass-card">

                <div class="section-header">

                    <h5 class="section-title">
                        <i class="fas fa-user-graduate"></i>
                        Students
                    </h5>

                    <button class="btn btn-green">
                        <i class="fas fa-plus me-1"></i>
                        Add Student
                    </button>

                </div>


                <div class="filter-area">

                    <div class="row g-2">

                        <div class="col-md-5">

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="fas fa-search"></i>
                                </span>

                                <input
                                    type="text"
                                    id="studentSearch"
                                    class="form-control"
                                    placeholder="Search student..."
                                    onkeyup="filterStudents()"
                                >

                            </div>

                        </div>


                        <div class="col-md-3">

                            <select
                                id="studentDept"
                                class="form-select"
                                onchange="filterStudents()"
                            >

                                <option value="">
                                    All Departments
                                </option>

                                <option value="Computer">
                                    Computer
                                </option>

                                <option value="IT">
                                    IT
                                </option>

                                <option value="Mechanical">
                                    Mechanical
                                </option>

                                <option value="Electrical">
                                    Electrical
                                </option>

                                <option value="Civil">
                                    Civil
                                </option>

                            </select>

                        </div>


                        <div class="col-md-4">

                            <select
                                id="studentStatus"
                                class="form-select"
                                onchange="filterStudents()"
                            >

                                <option value="">
                                    All Status
                                </option>

                                <option value="Placed">
                                    Placed
                                </option>

                                <option value="Applied">
                                    Applied
                                </option>

                                <option value="Eligible">
                                    Eligible
                                </option>

                                <option value="Not Eligible">
                                    Not Eligible
                                </option>

                            </select>

                        </div>

                    </div>

                </div>


                <div class="table-responsive">

                    <table class="table" id="studentsTable">

                        <thead>

                            <tr>

                                <th>Enrollment No.</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Semester</th>
                                <th>CGPA</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>

                        </thead>


                        <tbody>

                            <tr>

                                <td>216040307001</td>

                                <td class="fw-semibold text-white">
                                    Aarav Sharma
                                </td>

                                <td>Computer</td>

                                <td>Sem 6</td>

                                <td class="text-success fw-bold">
                                    8.75
                                </td>

                                <td>
                                    <span class="status status-green">
                                        Placed
                                    </span>
                                </td>

                                <td>

                                    <button
                                        class="btn btn-outline-green"
                                        onclick="showStudent('Aarav Sharma','216040307001','Computer','Sem 6','8.75','Placed')"
                                    >
                                        View
                                    </button>

                                </td>

                            </tr>


                            <tr>

                                <td>216040307012</td>

                                <td class="fw-semibold text-white">
                                    Priya Patel
                                </td>

                                <td>IT</td>

                                <td>Sem 6</td>

                                <td class="text-success fw-bold">
                                    9.10
                                </td>

                                <td>
                                    <span class="status status-green">
                                        Placed
                                    </span>
                                </td>

                                <td>

                                    <button
                                        class="btn btn-outline-green"
                                        onclick="showStudent('Priya Patel','216040307012','IT','Sem 6','9.10','Placed')"
                                    >
                                        View
                                    </button>

                                </td>

                            </tr>


                            <tr>

                                <td>216040307025</td>

                                <td class="fw-semibold text-white">
                                    Rohan Mehta
                                </td>

                                <td>Computer</td>

                                <td>Sem 5</td>

                                <td class="text-warning fw-bold">
                                    7.80
                                </td>

                                <td>
                                    <span class="status status-yellow">
                                        Applied
                                    </span>
                                </td>

                                <td>

                                    <button
                                        class="btn btn-outline-green"
                                        onclick="showStudent('Rohan Mehta','216040307025','Computer','Sem 5','7.80','Applied')"
                                    >
                                        View
                                    </button>

                                </td>

                            </tr>


                            <tr>

                                <td>216040319005</td>

                                <td class="fw-semibold text-white">
                                    Karan Desai
                                </td>

                                <td>Mechanical</td>

                                <td>Sem 6</td>

                                <td class="text-success fw-bold">
                                    8.20
                                </td>

                                <td>
                                    <span class="status status-green">
                                        Eligible
                                    </span>
                                </td>

                                <td>

                                    <button
                                        class="btn btn-outline-green"
                                        onclick="showStudent('Karan Desai','216040319005','Mechanical','Sem 6','8.20','Eligible')"
                                    >
                                        View
                                    </button>

                                </td>

                            </tr>


                            <tr>

                                <td>216040309018</td>

                                <td class="fw-semibold text-white">
                                    Neha Verma
                                </td>

                                <td>Electrical</td>

                                <td>Sem 5</td>

                                <td class="text-danger fw-bold">
                                    6.40
                                </td>

                                <td>
                                    <span class="status status-red">
                                        Not Eligible
                                    </span>
                                </td>

                                <td>

                                    <button
                                        class="btn btn-outline-green"
                                        onclick="showStudent('Neha Verma','216040309018','Electrical','Sem 5','6.40','Not Eligible')"
                                    >
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
             COMPANY PROFILE
        ====================================================== -->

        <section id="sec-companies" class="dashboard-section">

            <div class="glass-card">

                <div class="section-header">

                    <h5 class="section-title">
                        <i class="fas fa-building"></i>
                        Company Profile
                    </h5>

                    <button class="btn btn-green">
                        <i class="fas fa-plus me-1"></i>
                        Add Company
                    </button>

                </div>


                <div class="filter-area">

                    <div class="row g-2">

                        <div class="col-md-7">

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="fas fa-search"></i>
                                </span>

                                <input
                                    type="text"
                                    id="companySearch"
                                    class="form-control"
                                    placeholder="Search company..."
                                    onkeyup="filterCompanies()"
                                >

                            </div>

                        </div>


                        <div class="col-md-5">

                            <select
                                id="companyStatus"
                                class="form-select"
                                onchange="filterCompanies()"
                            >

                                <option value="">
                                    All Companies
                                </option>

                                <option value="active">
                                    Active
                                </option>

                                <option value="pending">
                                    Verification Pending
                                </option>

                            </select>

                        </div>

                    </div>

                </div>


                <div class="p-3">

                    <div class="row g-3" id="companyGrid">


                        <!-- TCS -->

                        <div
                            class="col-12 col-md-6 col-xl-4 company-item"
                            data-name="tata consultancy services tcs"
                            data-status="active"
                        >

                            <div class="company-card">

                                <div class="d-flex justify-content-between align-items-start mb-3">

                                    <div class="d-flex align-items-center gap-2">

                                        <div class="company-logo">
                                            TCS
                                        </div>

                                        <div>

                                            <p class="company-name">
                                                Tata Consultancy Services
                                            </p>

                                            <span class="company-type">
                                                IT / Software
                                            </span>

                                        </div>

                                    </div>

                                    <span class="status status-green">
                                        Active
                                    </span>

                                </div>


                                <p class="company-description">
                                    IT services and software solutions company recruiting diploma students.
                                </p>


                                <div class="d-flex justify-content-between align-items-center">

                                    <span class="text-success small">
                                        <i class="fas fa-briefcase me-1"></i>
                                        3 Drives
                                    </span>

                                    <button
                                        class="btn btn-outline-green"
                                        onclick="showCompany('Tata Consultancy Services','IT / Software','Mumbai, India','Active')"
                                    >
                                        View
                                    </button>

                                </div>

                            </div>

                        </div>


                        <!-- L&T -->

                        <div
                            class="col-12 col-md-6 col-xl-4 company-item"
                            data-name="larsen toubro l&t"
                            data-status="active"
                        >

                            <div class="company-card">

                                <div class="d-flex justify-content-between align-items-start mb-3">

                                    <div class="d-flex align-items-center gap-2">

                                        <div class="company-logo">
                                            L&T
                                        </div>

                                        <div>

                                            <p class="company-name">
                                                Larsen & Toubro
                                            </p>

                                            <span class="company-type">
                                                Engineering
                                            </span>

                                        </div>

                                    </div>

                                    <span class="status status-green">
                                        Active
                                    </span>

                                </div>


                                <p class="company-description">
                                    Engineering and construction company recruiting diploma engineers.
                                </p>


                                <div class="d-flex justify-content-between align-items-center">

                                    <span class="text-success small">
                                        <i class="fas fa-briefcase me-1"></i>
                                        2 Drives
                                    </span>

                                    <button
                                        class="btn btn-outline-green"
                                        onclick="showCompany('Larsen & Toubro','Engineering','Vadodara, Gujarat','Active')"
                                    >
                                        View
                                    </button>

                                </div>

                            </div>

                        </div>


                        <!-- INFOSYS -->

                        <div
                            class="col-12 col-md-6 col-xl-4 company-item"
                            data-name="infosys limited"
                            data-status="active"
                        >

                            <div class="company-card">

                                <div class="d-flex justify-content-between align-items-start mb-3">

                                    <div class="d-flex align-items-center gap-2">

                                        <div class="company-logo">
                                            INF
                                        </div>

                                        <div>

                                            <p class="company-name">
                                                Infosys Limited
                                            </p>

                                            <span class="company-type">
                                                IT / Cloud
                                            </span>

                                        </div>

                                    </div>

                                    <span class="status status-green">
                                        Active
                                    </span>

                                </div>


                                <p class="company-description">
                                    Technology and digital services company hiring for software roles.
                                </p>


                                <div class="d-flex justify-content-between align-items-center">

                                    <span class="text-success small">
                                        <i class="fas fa-briefcase me-1"></i>
                                        2 Drives
                                    </span>

                                    <button
                                        class="btn btn-outline-green"
                                        onclick="showCompany('Infosys Limited','IT / Cloud Services','Pune, India','Active')"
                                    >
                                        View
                                    </button>

                                </div>

                            </div>

                        </div>


                        <!-- WIPRO -->

                        <div
                            class="col-12 col-md-6 col-xl-4 company-item"
                            data-name="wipro technologies"
                            data-status="active"
                        >

                            <div class="company-card">

                                <div class="d-flex justify-content-between align-items-start mb-3">

                                    <div class="d-flex align-items-center gap-2">

                                        <div class="company-logo">
                                            WIP
                                        </div>

                                        <div>

                                            <p class="company-name">
                                                Wipro Technologies
                                            </p>

                                            <span class="company-type">
                                                IT Services
                                            </span>

                                        </div>

                                    </div>

                                    <span class="status status-green">
                                        Active
                                    </span>

                                </div>


                                <p class="company-description">
                                    Global technology services company offering entry-level opportunities.
                                </p>


                                <div class="d-flex justify-content-between align-items-center">

                                    <span class="text-success small">
                                        <i class="fas fa-briefcase me-1"></i>
                                        1 Drive
                                    </span>

                                    <button
                                        class="btn btn-outline-green"
                                        onclick="showCompany('Wipro Technologies','IT Services','Bengaluru, India','Active')"
                                    >
                                        View
                                    </button>

                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             UPCOMING DRIVES
        ====================================================== -->

        <section id="sec-drives" class="dashboard-section">

            <div class="glass-card">

                <div class="section-header">

                    <h5 class="section-title">
                        <i class="fas fa-briefcase"></i>
                        Upcoming Drives
                    </h5>

                    <button class="btn btn-green">
                        <i class="fas fa-plus me-1"></i>
                        Add Drive
                    </button>

                </div>


                <div class="table-responsive">

                    <table class="table">

                        <thead>

                            <tr>
                                <th>Company</th>
                                <th>Position</th>
                                <th>Eligibility</th>
                                <th>Package</th>
                                <th>Drive Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                        </thead>


                        <tbody>

                            <tr>

                                <td class="fw-semibold text-white">
                                    TCS
                                </td>

                                <td>
                                    Software Trainee
                                </td>

                                <td>
                                    Diploma / 7 CGPA+
                                </td>

                                <td class="text-success fw-bold">
                                    4.2 LPA
                                </td>

                                <td>
                                    25 Aug 2026
                                </td>

                                <td>
                                    <span class="status status-green">
                                        Open
                                    </span>
                                </td>

                                <td>
                                    <button class="btn btn-outline-green">
                                        View
                                    </button>
                                </td>

                            </tr>


                            <tr>

                                <td class="fw-semibold text-white">
                                    L&T
                                </td>

                                <td>
                                    Graduate Trainee
                                </td>

                                <td>
                                    Mechanical / Civil
                                </td>

                                <td class="text-success fw-bold">
                                    5.0 LPA
                                </td>

                                <td>
                                    28 Aug 2026
                                </td>

                                <td>
                                    <span class="status status-green">
                                        Open
                                    </span>
                                </td>

                                <td>
                                    <button class="btn btn-outline-green">
                                        View
                                    </button>
                                </td>

                            </tr>


                            <tr>

                                <td class="fw-semibold text-white">
                                    Infosys
                                </td>

                                <td>
                                    Systems Engineer
                                </td>

                                <td>
                                    Computer / IT
                                </td>

                                <td class="text-success fw-bold">
                                    4.5 LPA
                                </td>

                                <td>
                                    30 Aug 2026
                                </td>

                                <td>
                                    <span class="status status-yellow">
                                        Ongoing
                                    </span>
                                </td>

                                <td>
                                    <button class="btn btn-outline-green">
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

        <section id="sec-applications" class="dashboard-section">

            <div class="glass-card">

                <div class="section-header">

                    <h5 class="section-title">
                        <i class="fas fa-file-signature"></i>
                        Applications
                    </h5>

                </div>


                <div class="table-responsive">

                    <table class="table">

                        <thead>

                            <tr>
                                <th>Student</th>
                                <th>Company</th>
                                <th>Position</th>
                                <th>Applied On</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                        </thead>


                        <tbody>

                            <tr>

                                <td class="fw-semibold text-white">
                                    Rohan Mehta
                                </td>

                                <td>
                                    TCS
                                </td>

                                <td>
                                    Software Trainee
                                </td>

                                <td>
                                    20 Aug 2026
                                </td>

                                <td>
                                    <span class="status status-yellow">
                                        Pending
                                    </span>
                                </td>

                                <td>
                                    <button class="btn btn-outline-green">
                                        Review
                                    </button>
                                </td>

                            </tr>


                            <tr>

                                <td class="fw-semibold text-white">
                                    Priya Patel
                                </td>

                                <td>
                                    Infosys
                                </td>

                                <td>
                                    Systems Engineer
                                </td>

                                <td>
                                    18 Aug 2026
                                </td>

                                <td>
                                    <span class="status status-green">
                                        Selected
                                    </span>
                                </td>

                                <td>
                                    <button class="btn btn-outline-green">
                                        View
                                    </button>
                                </td>

                            </tr>


                            <tr>

                                <td class="fw-semibold text-white">
                                    Siddharth Shah
                                </td>

                                <td>
                                    L&T
                                </td>

                                <td>
                                    Graduate Trainee
                                </td>

                                <td>
                                    19 Aug 2026
                                </td>

                                <td>
                                    <span class="status status-blue">
                                        Shortlisted
                                    </span>
                                </td>

                                <td>
                                    <button class="btn btn-outline-green">
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
             EVENTS
        ====================================================== -->

        <section id="sec-events" class="dashboard-section">

            <div class="glass-card">

                <div class="section-header">

                    <h5 class="section-title">
                        <i class="fas fa-calendar-alt"></i>
                        Events
                    </h5>

                    <button class="btn btn-green">
                        <i class="fas fa-plus me-1"></i>
                        Add Event
                    </button>

                </div>


                <div class="p-3">

                    <div class="event-item">

                        <div class="event-date">
                            22
                            <span>AUG</span>
                        </div>

                        <div class="flex-grow-1">

                            <div class="event-name">
                                Mock HR Interview Practice
                            </div>

                            <div class="event-info">
                                11:00 AM - 04:00 PM · T&P Cell
                            </div>

                        </div>

                        <span class="status status-blue">
                            Upcoming
                        </span>

                    </div>


                    <div class="event-item">

                        <div class="event-date">
                            26
                            <span>AUG</span>
                        </div>

                        <div class="flex-grow-1">

                            <div class="event-name">
                                Aptitude & Technical Bootcamp
                            </div>

                            <div class="event-info">
                                09:30 AM - 12:30 PM · Computer Lab 3
                            </div>

                        </div>

                        <span class="status status-blue">
                            Upcoming
                        </span>

                    </div>


                    <div class="event-item">

                        <div class="event-date">
                            30
                            <span>AUG</span>
                        </div>

                        <div class="flex-grow-1">

                            <div class="event-name">
                                Cyber Security Career Webinar
                            </div>

                            <div class="event-info">
                                04:00 PM - 06:00 PM · Online
                            </div>

                        </div>

                        <span class="status status-blue">
                            Upcoming
                        </span>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             REPORTS
        ====================================================== -->

        <section id="sec-reports" class="dashboard-section">

            <div class="row g-3">

                <div class="col-md-4">

                    <div class="glass-card metric-card">

                        <div class="metric-icon green-icon">
                            <i class="fas fa-award"></i>
                        </div>

                        <div class="metric-number">
                            63%
                        </div>

                        <p class="metric-label">
                            Overall Placement Rate
                        </p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="glass-card metric-card">

                        <div class="metric-icon blue-icon">
                            <i class="fas fa-users"></i>
                        </div>

                        <div class="metric-number">
                            285
                        </div>

                        <p class="metric-label">
                            Students Placed
                        </p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="glass-card metric-card">

                        <div class="metric-icon orange-icon">
                            <i class="fas fa-building"></i>
                        </div>

                        <div class="metric-number">
                            38
                        </div>

                        <p class="metric-label">
                            Recruiting Companies
                        </p>

                    </div>

                </div>

            </div>


            <div class="glass-card mt-3">

                <div class="section-header">

                    <h5 class="section-title">
                        <i class="fas fa-chart-line"></i>
                        Placement Report
                    </h5>

                    <button
                        class="btn btn-green"
                        onclick="showToast('Report download started')"
                    >
                        <i class="fas fa-download me-1"></i>
                        Download Report
                    </button>

                </div>


                <div class="p-4">

                    <div class="mb-3">

                        <div class="d-flex justify-content-between mb-1">

                            <span class="small">
                                Students Placed
                            </span>

                            <span class="small text-success">
                                63%
                            </span>

                        </div>

                        <div class="progress bg-dark">

                            <div
                                class="progress-bar bg-success"
                                style="width:63%"
                            ></div>

                        </div>

                    </div>


                    <div>

                        <div class="d-flex justify-content-between mb-1">

                            <span class="small">
                                Applications
                            </span>

                            <span class="small text-info">
                                78%
                            </span>

                        </div>

                        <div class="progress bg-dark">

                            <div
                                class="progress-bar bg-info"
                                style="width:78%"
                            ></div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             QUICK ACTIONS
        ====================================================== -->

        <section id="sec-quick" class="dashboard-section">

            <div class="glass-card">

                <div class="section-header">

                    <h5 class="section-title">
                        <i class="fas fa-bolt"></i>
                        Quick Actions
                    </h5>

                </div>


                <div class="p-4">

                    <div class="row g-3">

                        <div class="col-12 col-md-4">

                            <a
                                href="#"
                                class="quick-action"
                                onclick="switchSection('students'); return false;"
                            >

                                <i class="fas fa-user-graduate"></i>

                                <span>
                                    Manage Students
                                </span>

                            </a>

                        </div>


                        <div class="col-12 col-md-4">

                            <a
                                href="#"
                                class="quick-action"
                                onclick="switchSection('companies'); return false;"
                            >

                                <i class="fas fa-building"></i>

                                <span>
                                    Manage Companies
                                </span>

                            </a>

                        </div>


                        <div class="col-12 col-md-4">

                            <a
                                href="#"
                                class="quick-action"
                                onclick="switchSection('drives'); return false;"
                            >

                                <i class="fas fa-briefcase"></i>

                                <span>
                                    Manage Drives
                                </span>

                            </a>

                        </div>


                        <div class="col-12 col-md-4">

                            <a
                                href="#"
                                class="quick-action"
                                onclick="switchSection('applications'); return false;"
                            >

                                <i class="fas fa-file-signature"></i>

                                <span>
                                    Review Applications
                                </span>

                            </a>

                        </div>


                        <div class="col-12 col-md-4">

                            <a
                                href="#"
                                class="quick-action"
                                onclick="switchSection('events'); return false;"
                            >

                                <i class="fas fa-calendar"></i>

                                <span>
                                    Manage Events
                                </span>

                            </a>

                        </div>


                        <div class="col-12 col-md-4">

                            <a
                                href="#"
                                class="quick-action"
                                onclick="switchSection('reports'); return false;"
                            >

                                <i class="fas fa-chart-line"></i>

                                <span>
                                    View Reports
                                </span>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             PROFILE
        ====================================================== -->

        <section id="sec-profile" class="dashboard-section">

            <div class="glass-card">

                <div class="section-header">

                    <h5 class="section-title">
                        <i class="fas fa-user-circle"></i>
                        My Profile
                    </h5>

                    <button class="btn btn-outline-green">
                        Edit Profile
                    </button>

                </div>


                <div class="p-4">

                    <div class="row g-4">

                        <div class="col-md-3 text-center">

                            <i
                                class="bi bi-person-circle"
                                style="
                                    font-size:90px;
                                    color:#10b981;
                                "
                            ></i>

                            <h5 class="mt-2 mb-1">
                                Patel Pransi
                            </h5>

                            <small class="text-secondary">
                                Placement Officer
                            </small>

                        </div>


                        <div class="col-md-9">

                            <div class="detail-row">

                                <span class="detail-label">
                                    Name
                                </span>

                                <span class="detail-value">
                                    Patel Pransi
                                </span>

                            </div>


                            <div class="detail-row">

                                <span class="detail-label">
                                    Role
                                </span>

                                <span class="detail-value">
                                    Placement Officer
                                </span>

                            </div>


                            <div class="detail-row">

                                <span class="detail-label">
                                    Institution
                                </span>

                                <span class="detail-value">
                                    K D Polytechnic
                                </span>

                            </div>


                            <div class="detail-row">

                                <span class="detail-label">
                                    Department
                                </span>

                                <span class="detail-value">
                                    Training & Placement
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             SETTINGS
        ====================================================== -->

        <section id="sec-settings" class="dashboard-section">

            <div class="glass-card">

                <div class="section-header">

                    <h5 class="section-title">
                        <i class="fas fa-sliders"></i>
                        Settings
                    </h5>

                </div>


                <div class="p-4">

                    <div class="detail-row">

                        <div>

                            <div class="text-white small fw-semibold">
                                Email Notifications
                            </div>

                            <div class="text-secondary small">
                                Receive placement updates by email.
                            </div>

                        </div>

                        <div class="form-check form-switch">

                            <input
                                class="form-check-input"
                                type="checkbox"
                                checked
                            >

                        </div>

                    </div>


                    <div class="detail-row">

                        <div>

                            <div class="text-white small fw-semibold">
                                Drive Alerts
                            </div>

                            <div class="text-secondary small">
                                Get alerts for upcoming drives.
                            </div>

                        </div>

                        <div class="form-check form-switch">

                            <input
                                class="form-check-input"
                                type="checkbox"
                                checked
                            >

                        </div>

                    </div>


                    <div class="detail-row">

                        <div>

                            <div class="text-white small fw-semibold">
                                Student Updates
                            </div>

                            <div class="text-secondary small">
                                Receive notifications for student activities.
                            </div>

                        </div>

                        <div class="form-check form-switch">

                            <input
                                class="form-check-input"
                                type="checkbox"
                                checked
                            >

                        </div>

                    </div>

                </div>

            </div>

        </section>


    </main>

</div>


<!-- =========================================================
     DETAILS MODAL
========================================================= -->

<div
    class="modal fade"
    id="detailsModal"
    tabindex="-1"
>

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5
                    class="modal-title"
                    id="detailsTitle"
                >
                    Details
                </h5>

                <button
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal"
                ></button>

            </div>


            <div
                class="modal-body"
                id="detailsBody"
            >
            </div>


            <div class="modal-footer">

                <button
                    type="button"
                    class="btn btn-outline-green"
                    data-bs-dismiss="modal"
                >
                    Close
                </button>

>>>>>>> e43828a (Updated company dashboard interview section)
            </div>

        </div>

<<<<<<< HEAD
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
=======
    </div>

</div>


<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<script>

    /* =========================================================
       SECTION SWITCHING
    ========================================================= */

    function switchSection(section) {

        const sections =
            document.querySelectorAll('.dashboard-section');

        const menuItems =
            document.querySelectorAll('.sidebar-menu li[data-section]');


        sections.forEach(function(item) {

            item.classList.remove('active-section');

        });


        menuItems.forEach(function(item) {

            item.classList.remove('active');

        });


        const selectedSection =
            document.getElementById('sec-' + section);

        const selectedMenu =
            document.querySelector(
                '.sidebar-menu li[data-section="' + section + '"]'
            );


        if (selectedSection) {

            selectedSection.classList.add('active-section');

        }


        if (selectedMenu) {

            selectedMenu.classList.add('active');

        }


        const titles = {

            dashboard: [
                'Placement Officer Dashboard',
                'Manage students, companies and placement activities'
            ],

            students: [
                'Students',
                'Manage student placement records'
            ],

            companies: [
                'Company Profile',
                'View and manage registered companies'
            ],

            drives: [
                'Upcoming Drives',
                'Manage campus placement drives'
            ],

            applications: [
                'Applications',
                'Review student placement applications'
            ],

            events: [
                'Events',
                'Manage placement related events'
            ],

            reports: [
                'Reports',
                'View placement performance'
            ],

            quick: [
                'Quick Actions',
                'Frequently used placement management actions'
            ],

            profile: [
                'My Profile',
                'Placement officer account information'
            ],

            settings: [
                'Settings',
                'Manage portal notification preferences'
            ]

        };


        if (titles[section]) {

            document.getElementById('topPageTitle').innerText =
                titles[section][0];

            document.getElementById('topPageSubtitle').innerText =
                titles[section][1];

        }


        /* Close mobile sidebar */

        document
            .getElementById('sidebar')
            .classList.remove('show');

        document
            .getElementById('sidebarOverlay')
            .classList.remove('show');


        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

    }


    /* =========================================================
       MOBILE SIDEBAR
    ========================================================= */

    document
        .getElementById('toggleSidebar')
        .addEventListener('click', function() {

            document
                .getElementById('sidebar')
                .classList.toggle('show');

            document
                .getElementById('sidebarOverlay')
                .classList.toggle('show');

        });


    document
        .getElementById('sidebarOverlay')
        .addEventListener('click', function() {

            document
                .getElementById('sidebar')
                .classList.remove('show');

            document
                .getElementById('sidebarOverlay')
                .classList.remove('show');

        });


    /* =========================================================
       STUDENT FILTER
    ========================================================= */

    function filterStudents() {

        const search =
            document
                .getElementById('studentSearch')
                .value
                .toLowerCase();

        const department =
            document
                .getElementById('studentDept')
                .value
                .toLowerCase();

        const status =
            document
                .getElementById('studentStatus')
                .value
                .toLowerCase();


        const rows =
            document.querySelectorAll(
                '#studentsTable tbody tr'
            );


        rows.forEach(function(row) {

            const text =
                row.innerText.toLowerCase();

            const matchesSearch =
                text.includes(search);

            const matchesDepartment =
                department === '' ||
                text.includes(department);

            const matchesStatus =
                status === '' ||
                text.includes(status);


            row.style.display =
                matchesSearch &&
                matchesDepartment &&
                matchesStatus
                    ? ''
                    : 'none';

        });

    }


    /* =========================================================
       COMPANY FILTER
    ========================================================= */

    function filterCompanies() {

        const search =
            document
                .getElementById('companySearch')
                .value
                .toLowerCase();

        const status =
            document
                .getElementById('companyStatus')
                .value
                .toLowerCase();


        const companies =
            document.querySelectorAll(
                '.company-item'
            );


        companies.forEach(function(company) {

            const name =
                company.dataset.name.toLowerCase();

            const companyStatus =
                company.dataset.status.toLowerCase();


            const matchesSearch =
                name.includes(search);

            const matchesStatus =
                status === '' ||
                companyStatus === status;


            company.style.display =
                matchesSearch && matchesStatus
                    ? ''
                    : 'none';

        });

    }


    /* =========================================================
       MODAL
    ========================================================= */

    function openDetails(title, html) {

        document.getElementById(
            'detailsTitle'
        ).innerText = title;


        document.getElementById(
            'detailsBody'
        ).innerHTML = html;


        const modal =
            new bootstrap.Modal(
                document.getElementById('detailsModal')
            );


        modal.show();

    }


    /* =========================================================
       STUDENT DETAILS
    ========================================================= */

    function showStudent(
        name,
        enrollment,
        department,
        semester,
        cgpa,
        status
    ) {

        openDetails(

            'Student Details',

            `
                <div class="detail-row">
                    <span class="detail-label">Name</span>
                    <span class="detail-value">${name}</span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Enrollment No.</span>
                    <span class="detail-value">${enrollment}</span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Department</span>
                    <span class="detail-value">${department}</span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Semester</span>
                    <span class="detail-value">${semester}</span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">CGPA</span>
                    <span class="detail-value">${cgpa}</span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Status</span>
                    <span class="detail-value">${status}</span>
                </div>
            `

        );

    }


    /* =========================================================
       COMPANY DETAILS
    ========================================================= */

    function showCompany(
        name,
        type,
        location,
        status
    ) {

        openDetails(

            'Company Profile',

            `
                <div class="detail-row">
                    <span class="detail-label">Company</span>
                    <span class="detail-value">${name}</span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Industry</span>
                    <span class="detail-value">${type}</span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Location</span>
                    <span class="detail-value">${location}</span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Status</span>
                    <span class="detail-value">${status}</span>
                </div>
            `

        );

    }


    /* =========================================================
       EVENT DETAILS
    ========================================================= */

    function showEvent(
        name,
        date,
        time,
        venue
    ) {

        openDetails(

            'Event Details',

            `
                <div class="detail-row">
                    <span class="detail-label">Event</span>
                    <span class="detail-value">${name}</span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Date</span>
                    <span class="detail-value">${date}</span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Time</span>
                    <span class="detail-value">${time}</span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Venue</span>
                    <span class="detail-value">${venue}</span>
                </div>
            `

        );

    }


    /* =========================================================
       TOAST
    ========================================================= */

    function showToast(message) {

        const toast =
            document.createElement('div');


        toast.innerText = message;


        toast.style.position = 'fixed';

        toast.style.bottom = '20px';

        toast.style.right = '20px';

        toast.style.zIndex = '9999';

        toast.style.padding = '11px 16px';

        toast.style.borderRadius = '8px';

        toast.style.background = '#111c38';

        toast.style.color = '#fff';

        toast.style.border =
            '1px solid rgba(16,185,129,0.4)';

        toast.style.fontSize = '12px';

        toast.style.boxShadow =
            '0 10px 30px rgba(0,0,0,0.4)';


        document.body.appendChild(toast);


        setTimeout(function() {

            toast.remove();

        }, 2500);

    }

</script>

>>>>>>> e43828a (Updated company dashboard interview section)
</body>
</html>