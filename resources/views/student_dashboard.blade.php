<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Dashboard</title>

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
            padding: 15px 18px;
            border-radius: 9px;
            text-align: left;
            font-size: 16px;
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

        .student-box {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #f6f6fb;
            border-radius: 10px;
            padding: 10px 17px;
            min-width: 210px;
        }

        .student-avatar {
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

        .student-info strong {
            display: block;
            font-size: 16px;
            color: #11164b;
        }

        .student-info span {
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
            padding: 35px 31px;
            margin-bottom: 24px;
            box-shadow: 0 8px 22px rgba(36, 28, 108, .18);
        }

        .welcome-box h2 {
            font-size: 30px;
            margin-bottom: 12px;
        }

        .welcome-box p {
            font-size: 17px;
            line-height: 1.6;
        }

        .welcome-note {
            margin-top: 17px;
            display: inline-block;
            padding: 10px 15px;
            background: rgba(255,255,255,.12);
            border-radius: 8px;
            font-size: 14px;
        }

        /* ================= ACTION CARDS ================= */

        .action-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            margin-bottom: 28px;
        }

        .action-card {
            background: white;
            border-radius: 14px;
            padding: 23px;
            min-height: 170px;
            box-shadow: 0 5px 18px rgba(21,16,82,.07);
            cursor: pointer;
            transition: .2s;
        }

        .action-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 9px 24px rgba(21,16,82,.12);
        }

        .card-icon {
            width: 49px;
            height: 49px;
            background: #f0f0f8;
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            margin-bottom: 13px;
        }

        .action-card h3 {
            font-size: 17px;
            margin-bottom: 8px;
            color: #11164b;
        }

        .action-card p {
            color: #737789;
            line-height: 1.5;
            font-size: 14px;
        }

        /* ================= STAT CARDS ================= */

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            margin-bottom: 28px;
        }

        .stat-card {
            background: white;
            border-radius: 14px;
            padding: 24px;
            min-height: 175px;
            box-shadow: 0 5px 18px rgba(21,16,82,.07);
        }

        .stat-card .card-icon {
            margin-bottom: 13px;
        }

        .stat-card h3 {
            font-size: 16px;
            color: #555b70;
            margin-bottom: 7px;
        }

        .stat-number {
            font-size: 34px;
            font-weight: bold;
            color: #11164b;
            margin-bottom: 8px;
        }

        .stat-card p {
            color: #737789;
            font-size: 13px;
            line-height: 1.4;
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

        .view-all {
            border: none;
            background: transparent;
            color: #382d83;
            font-weight: bold;
            font-size: 14px;
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
            padding: 15px 13px;
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
            transition: .2s;
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
            padding: 8px 13px;
            font-size: 12px;
        }

        /* ================= BADGES ================= */

        .badge {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 12px;
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

        /* ================= JOB CARDS ================= */

        .job-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .job-card {
            border: 1px solid #ededf4;
            border-radius: 12px;
            padding: 20px;
            background: white;
            transition: .2s;
        }

        .job-card:hover {
            border-color: #cfcbed;
            box-shadow: 0 5px 15px rgba(21,16,82,.07);
        }

        .job-top {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 15px;
        }

        .company-logo {
            width: 47px;
            height: 47px;
            background: #f0f0f8;
            border-radius: 9px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 21px;
        }

        .job-title {
            flex: 1;
        }

        .job-title h3 {
            color: #11164b;
            font-size: 17px;
            margin-bottom: 5px;
        }

        .job-title p {
            color: #737789;
            font-size: 13px;
        }

        .job-details {
            display: flex;
            flex-wrap: wrap;
            gap: 9px;
            margin: 15px 0;
        }

        .job-detail {
            background: #f6f6fa;
            padding: 7px 9px;
            border-radius: 6px;
            color: #5d6174;
            font-size: 12px;
        }

        .job-description {
            color: #737789;
            font-size: 13px;
            line-height: 1.5;
            margin-bottom: 16px;
        }

        .job-actions {
            display: flex;
            gap: 9px;
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

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #6559ae;
        }

        .form-actions {
            margin-top: 22px;
            display: flex;
            gap: 10px;
        }

        /* ================= COURSE ================= */

        .course-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .course-card {
            background: white;
            border: 1px solid #ededf4;
            border-radius: 12px;
            padding: 21px;
        }

        .course-icon {
            width: 48px;
            height: 48px;
            border-radius: 9px;
            background: #f0f0f8;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-bottom: 13px;
        }

        .course-card h3 {
            color: #11164b;
            font-size: 17px;
            margin-bottom: 7px;
        }

        .course-card p {
            color: #737789;
            font-size: 13px;
            line-height: 1.5;
            margin-bottom: 14px;
        }

        .course-info-row {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 15px;
        }

        .course-info-item {
            background: #f6f6fa;
            padding: 7px 9px;
            border-radius: 6px;
            font-size: 12px;
            color: #5d6174;
        }

        .progress {
            height: 8px;
            background: #ececf4;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 7px;
        }

        .progress-bar {
            height: 100%;
            background: #382d83;
            border-radius: 10px;
            width: 0%;
            transition: .4s;
        }

        .progress-text {
            color: #737789;
            font-size: 12px;
            margin-bottom: 14px;
            display: block;
        }

        /* ================= EVENTS ================= */

        .event-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .event-card {
            background: white;
            border: 1px solid #ededf4;
            border-radius: 12px;
            padding: 21px;
            display: flex;
            gap: 17px;
        }

        .event-date {
            width: 65px;
            min-width: 65px;
            height: 72px;
            background: #f0f0f8;
            border-radius: 10px;
            text-align: center;
            padding-top: 9px;
        }

        .event-date strong {
            display: block;
            color: #382d83;
            font-size: 23px;
        }

        .event-date span {
            font-size: 11px;
            color: #737789;
            font-weight: bold;
        }

        .event-content h3 {
            color: #11164b;
            font-size: 17px;
            margin-bottom: 7px;
        }

        .event-content p {
            color: #737789;
            font-size: 13px;
            line-height: 1.5;
            margin-bottom: 8px;
        }

        .event-meta {
            color: #555b70;
            font-size: 12px;
            margin-bottom: 5px;
        }

        /* ================= INTERVIEW ================= */

        .interview-highlight {
            background: linear-gradient(135deg, #2a226f, #32277d);
            color: white;
            border-radius: 14px;
            padding: 24px;
            margin-bottom: 22px;
        }

        .interview-highlight h2 {
            font-size: 22px;
            margin-bottom: 8px;
        }

        .interview-highlight p {
            color: #e3e1fa;
            font-size: 14px;
        }

        .interview-info-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
            margin-top: 18px;
        }

        .interview-info {
            background: rgba(255,255,255,.11);
            padding: 12px;
            border-radius: 8px;
        }

        .interview-info small {
            display: block;
            color: #c9c6ed;
            font-size: 11px;
            margin-bottom: 4px;
        }

        .interview-info strong {
            font-size: 13px;
        }

        /* ================= NOTIFICATIONS ================= */

        .notification-item {
            display: flex;
            gap: 15px;
            padding: 16px 0;
            border-bottom: 1px solid #eeeeF4;
        }

        .notification-item:last-child {
            border-bottom: none;
        }

        .notification-icon {
            width: 43px;
            height: 43px;
            min-width: 43px;
            border-radius: 9px;
            background: #f0f0f8;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
        }

        .notification-content h3 {
            color: #11164b;
            font-size: 15px;
            margin-bottom: 5px;
        }

        .notification-content p {
            color: #737789;
            font-size: 13px;
            line-height: 1.4;
        }

        .notification-time {
            color: #9295a4 !important;
            margin-top: 5px;
            font-size: 11px !important;
        }

        /* ================= RESUME ================= */

        .resume-box {
            text-align: center;
            padding: 40px;
            border: 2px dashed #d7d5e7;
            border-radius: 12px;
            background: #fafafe;
        }

        .resume-icon {
            font-size: 45px;
            margin-bottom: 13px;
        }

        .resume-box h2 {
            color: #11164b;
            font-size: 21px;
            margin-bottom: 8px;
        }

        .resume-box p {
            color: #737789;
            font-size: 14px;
            margin-bottom: 20px;
        }

        #resumeInput {
            display: none;
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
            max-width: 680px;
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
            color: #33384f;
        }

        .modal-details {
            color: #5e6275;
            line-height: 1.7;
            font-size: 14px;
        }

        .modal-details strong {
            color: #11164b;
        }

        .modal-section {
            margin-top: 17px;
        }

        .modal-section h3 {
            color: #11164b;
            font-size: 15px;
            margin-bottom: 7px;
        }

        .modal-list {
            margin-left: 20px;
            color: #737789;
        }

        .modal-list li {
            margin-bottom: 5px;
        }

        /* ================= APPLICATION FORM ================= */

        .application-form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }

        .application-form-group {
            display: flex;
            flex-direction: column;
        }

        .application-form-group.full {
            grid-column: 1 / -1;
        }

        .application-form-group label {
            font-size: 13px;
            font-weight: bold;
            color: #44495f;
            margin-bottom: 7px;
        }

        .application-form-group input,
        .application-form-group select,
        .application-form-group textarea {
            border: 1px solid #ddddE7;
            border-radius: 7px;
            padding: 11px 12px;
            outline: none;
            color: #33384f;
            font-size: 14px;
        }

        .application-form-group input:focus,
        .application-form-group select:focus,
        .application-form-group textarea:focus {
            border-color: #6559ae;
        }

        .form-note {
            background: #f5f4fb;
            padding: 12px;
            border-radius: 8px;
            color: #555b70;
            font-size: 12px;
            line-height: 1.5;
            margin: 17px 0;
        }

        /* ================= EMPTY ================= */

        .empty-state {
            text-align: center;
            padding: 45px 20px;
            color: #737789;
        }

        .empty-state .empty-icon {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .empty-state h3 {
            color: #11164b;
            margin-bottom: 7px;
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
            animation: toastIn .25s ease;
        }

        @keyframes toastIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 1200px) {
            .action-grid,
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .job-grid,
            .course-grid,
            .event-grid {
                grid-template-columns: 1fr;
            }

            .interview-info-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 900px) {

            .sidebar {
                width: 230px;
            }

            .main {
                margin-left: 230px;
                padding: 18px;
            }

            .profile-layout,
            .settings-grid {
                grid-template-columns: 1fr;
            }

            .topbar {
                align-items: flex-start;
                gap: 15px;
            }
        }

        @media (max-width: 700px) {

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
            }

            .student-box {
                width: 100%;
            }

            .action-grid,
            .stats-grid,
            .form-grid,
            .application-form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full,
            .application-form-group.full {
                grid-column: auto;
            }

            .interview-info-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- =========================================================
         SIDEBAR
    ========================================================= -->

    <aside class="sidebar">

        <div class="logo-box">

            <h2>
                K D <span>Polytechnic</span>
            </h2>

            <p>
                Training & Placement Portal
            </p>

        </div>

        <div class="menu-title">
            MAIN MENU
        </div>

        <ul class="menu">

            <li>
                <button class="menu-btn active" data-page="dashboard">
                    <span class="menu-icon">🏠</span>
                    Dashboard
                </button>
            </li>

            <li>
                <button class="menu-btn" data-page="profile">
                    <span class="menu-icon">👤</span>
                    My Profile
                </button>
            </li>

            <li>
                <button class="menu-btn" data-page="opportunities">
                    <span class="menu-icon">💼</span>
                    Jobs & Opportunities
                </button>
            </li>

            <li>
                <button class="menu-btn" data-page="applications">
                    <span class="menu-icon">📄</span>
                    My Applications
                </button>
            </li>

            <li>
                <button class="menu-btn" data-page="drives">
                    <span class="menu-icon">📅</span>
                    Upcoming Drives
                </button>
            </li>

            <li>
                <button class="menu-btn" data-page="events">
                    <span class="menu-icon">🗓️</span>
                    Upcoming Events
                </button>
            </li>

            <li>
                <button class="menu-btn" data-page="interviews">
                    <span class="menu-icon">🎯</span>
                    Interviews
                </button>
            </li>

            <li>
                <button class="menu-btn" data-page="courses">
                    <span class="menu-icon">🎓</span>
                    Training & Courses
                </button>
            </li>

            <li>
                <button class="menu-btn" data-page="resume">
                    <span class="menu-icon">📋</span>
                    Resume
                </button>
            </li>

            <li>
                <button class="menu-btn" data-page="notifications">
                    <span class="menu-icon">🔔</span>
                    Notifications
                </button>
            </li>

            <li>
                <button class="menu-btn" data-page="settings">
                    <span class="menu-icon">⚙️</span>
                    Settings
                </button>
            </li>

            <li>
                <button class="menu-btn logout-btn" id="logoutBtn">
                    <span class="menu-icon">↪</span>
                    Logout
                </button>
            </li>

        </ul>

    </aside>


    <!-- =========================================================
         MAIN
    ========================================================= -->

    <main class="main">

        <!-- TOPBAR -->

        <div class="topbar">

            <div>

                <h1 id="pageTitle">
                    Student Dashboard
                </h1>

                <p id="pageSubtitle">
                    Manage your placement journey and career preparation.
                </p>

            </div>

            <div class="student-box">

                <div class="student-avatar">
                    👤
                </div>

                <div class="student-info">

                    <strong id="topStudentName">
                        Student
                    </strong>

                    <span id="topStudentDepartment">
                        Computer Engineering
                    </span>

                </div>

            </div>

        </div>


        <!-- =====================================================
             DASHBOARD
        ===================================================== -->

        <section class="page active" id="dashboard">

            <div class="welcome-box">

                <h2>
                    Welcome, Student! 👋
                </h2>

                <p>
                    Welcome to K D Polytechnic Training & Placement Portal.
                    Explore placement opportunities, apply for jobs, complete
                    your training and prepare yourself for your career.
                </p>

                <div class="welcome-note">
                    🎯 Keep your profile and resume updated for better opportunities.
                </div>

            </div>


            <!-- QUICK ACTIONS -->

            <div class="action-grid">

                <div class="action-card" data-goto="opportunities">

                    <div class="card-icon">
                        💼
                    </div>

                    <h3>
                        Explore Opportunities
                    </h3>

                    <p>
                        View available placement jobs and apply for suitable
                        positions.
                    </p>

                </div>


                <div class="action-card" data-goto="applications">

                    <div class="card-icon">
                        📄
                    </div>

                    <h3>
                        Track Applications
                    </h3>

                    <p>
                        Check your submitted applications and their current
                        status.
                    </p>

                </div>


                <div class="action-card" data-goto="courses">

                    <div class="card-icon">
                        🎓
                    </div>

                    <h3>
                        Training & Courses
                    </h3>

                    <p>
                        Improve your technical and placement preparation skills.
                    </p>

                </div>


                <div class="action-card" data-goto="profile">

                    <div class="card-icon">
                        👤
                    </div>

                    <h3>
                        Complete Profile
                    </h3>

                    <p>
                        Keep your academic information, skills and career
                        preferences updated.
                    </p>

                </div>

            </div>


            <!-- STATISTICS -->

            <div class="stats-grid">

                <div class="stat-card">

                    <div class="card-icon">
                        💼
                    </div>

                    <h3>
                        Available Opportunities
                    </h3>

                    <div class="stat-number">
                        12
                    </div>

                    <p>
                        Placement opportunities available for students.
                    </p>

                </div>


                <div class="stat-card">

                    <div class="card-icon">
                        📄
                    </div>

                    <h3>
                        My Applications
                    </h3>

                    <div
                        class="stat-number"
                        id="applicationsCount">
                        0
                    </div>

                    <p>
                        Applications submitted by you.
                    </p>

                </div>


                <div class="stat-card">

                    <div class="card-icon">
                        🎓
                    </div>

                    <h3>
                        Training Courses
                    </h3>

                    <div class="stat-number">
                        5
                    </div>

                    <p>
                        Technical and placement preparation courses.
                    </p>

                </div>


                <div class="stat-card">

                    <div class="card-icon">
                        🔔
                    </div>

                    <h3>
                        Notifications
                    </h3>

                    <div
                        class="stat-number"
                        id="notificationsCount">
                        5
                    </div>

                    <p>
                        Latest placement and training updates.
                    </p>

                </div>

            </div>


            <!-- UPCOMING INTERVIEW -->

            <div
                class="interview-highlight"
                id="dashboardInterview">

                <h2>
                    🎯 Upcoming Interview
                </h2>

                <p>
                    You have an upcoming interview. Make sure you are prepared.
                </p>

                <div class="interview-info-grid">

                    <div class="interview-info">

                        <small>
                            COMPANY
                        </small>

                        <strong>
                            TCS
                        </strong>

                    </div>

                    <div class="interview-info">

                        <small>
                            ROLE
                        </small>

                        <strong>
                            Software Developer
                        </strong>

                    </div>

                    <div class="interview-info">

                        <small>
                            ROUND
                        </small>

                        <strong>
                            Technical Interview
                        </strong>

                    </div>

                    <div class="interview-info">

                        <small>
                            DATE & TIME
                        </small>

                        <strong>
                            30 Aug 2026, 11:00 AM
                        </strong>

                    </div>

                </div>

                <div style="margin-top:18px;">

                    <button
                        class="secondary-btn"
                        data-goto="interviews">
                        View Interview Details
                    </button>

                </div>

            </div>


            <!-- UPCOMING DRIVES -->

            <div class="section-card">

                <div class="section-header">

                    <div>

                        <h2>
                            Upcoming Placement Drives
                        </h2>

                        <p>
                            Don't miss important recruitment opportunities.
                        </p>

                    </div>

                    <button
                        class="view-all"
                        data-goto="drives">
                        View All →
                    </button>

                </div>


                <div class="table-container">

                    <table>

                        <thead>

                            <tr>
                                <th>Company</th>
                                <th>Job Role</th>
                                <th>Date</th>
                                <th>Mode</th>
                                <th>Status</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>
                                    <strong>TCS</strong>
                                </td>

                                <td>
                                    Software Developer
                                </td>

                                <td>
                                    28 Aug 2026
                                </td>

                                <td>
                                    Campus
                                </td>

                                <td>
                                    <span class="badge badge-green">
                                        Open
                                    </span>
                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>Infosys</strong>
                                </td>

                                <td>
                                    Graduate Engineer
                                </td>

                                <td>
                                    02 Sep 2026
                                </td>

                                <td>
                                    Campus
                                </td>

                                <td>
                                    <span class="badge badge-blue">
                                        Upcoming
                                    </span>
                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>Wipro</strong>
                                </td>

                                <td>
                                    Project Engineer
                                </td>

                                <td>
                                    08 Sep 2026
                                </td>

                                <td>
                                    Online
                                </td>

                                <td>
                                    <span class="badge badge-purple">
                                        Upcoming
                                    </span>
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>


            <!-- UPCOMING EVENTS -->

            <div class="section-card">

                <div class="section-header">

                    <div>

                        <h2>
                            Upcoming Events
                        </h2>

                        <p>
                            Important placement and career preparation events.
                        </p>

                    </div>

                    <button
                        class="view-all"
                        data-goto="events">
                        View All →
                    </button>

                </div>


                <div class="event-grid">

                    <div class="event-card">

                        <div class="event-date">
                            <strong>25</strong>
                            <span>AUG</span>
                        </div>

                        <div class="event-content">

                            <h3>
                                Resume Building Workshop
                            </h3>

                            <p>
                                Learn how to create an effective resume for
                                placement opportunities.
                            </p>

                            <div class="event-meta">
                                🕐 10:00 AM - 12:00 PM
                            </div>

                            <div class="event-meta">
                                📍 Seminar Hall
                            </div>

                        </div>

                    </div>


                    <div class="event-card">

                        <div class="event-date">
                            <strong>27</strong>
                            <span>AUG</span>
                        </div>

                        <div class="event-content">

                            <h3>
                                Mock Interview Session
                            </h3>

                            <p>
                                Practice technical and HR interview questions
                                with placement trainers.
                            </p>

                            <div class="event-meta">
                                🕐 2:00 PM - 4:00 PM
                            </div>

                            <div class="event-meta">
                                📍 Placement Cell
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- NOTIFICATIONS -->

            <div class="section-card">

                <div class="section-header">

                    <div>

                        <h2>
                            Recent Notifications
                        </h2>

                        <p>
                            Latest updates from the placement department.
                        </p>

                    </div>

                    <button
                        class="view-all"
                        data-goto="notifications">
                        View All →
                    </button>

                </div>


                <div>

                    <div class="notification-item">

                        <div class="notification-icon">
                            📢
                        </div>

                        <div class="notification-content">

                            <h3>
                                New placement opportunity available
                            </h3>

                            <p>
                                A new Software Developer position has been
                                added to Jobs & Opportunities.
                            </p>

                            <p class="notification-time">
                                Today
                            </p>

                        </div>

                    </div>


                    <div class="notification-item">

                        <div class="notification-icon">
                            🎯
                        </div>

                        <div class="notification-content">

                            <h3>
                                Technical interview scheduled
                            </h3>

                            <p>
                                Your TCS technical interview is scheduled for
                                30 August 2026.
                            </p>

                            <p class="notification-time">
                                Yesterday
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             PROFILE
        ===================================================== -->

        <section class="page" id="profile">

            <div class="profile-layout">

                <div class="profile-side">

                    <div class="large-avatar">
                        👤
                    </div>

                    <h2 id="profileNameDisplay">
                        Student
                    </h2>

                    <p id="profileDepartmentDisplay">
                        Computer Engineering
                    </p>

                    <p style="margin-top:7px;">
                        Student Profile
                    </p>

                </div>


                <div class="profile-form">

                    <div class="section-header">

                        <div>

                            <h2>
                                My Profile
                            </h2>

                            <p>
                                Update your academic and personal information.
                            </p>

                        </div>

                    </div>


                    <form id="profileForm">

                        <div class="form-grid">

                            <div class="form-group">

                                <label>
                                    Full Name
                                </label>

                                <input
                                    type="text"
                                    id="studentName"
                                    value="Student"
                                    required>

                            </div>


                            <div class="form-group">

                                <label>
                                    Enrollment Number
                                </label>

                                <input
                                    type="text"
                                    id="enrollment"
                                    value="KD2026CE001">

                            </div>


                            <div class="form-group">

                                <label>
                                    Email Address
                                </label>

                                <input
                                    type="email"
                                    id="studentEmail"
                                    value="student@example.com"
                                    required>

                            </div>


                            <div class="form-group">

                                <label>
                                    Mobile Number
                                </label>

                                <input
                                    type="tel"
                                    id="studentMobile"
                                    value="+91 9876543210">

                            </div>


                            <div class="form-group">

                                <label>
                                    Department
                                </label>

                                <select id="department">

                                    <option selected>
                                        Computer Engineering
                                    </option>

                                    <option>
                                        Information Technology
                                    </option>

                                    <option>
                                        Mechanical Engineering
                                    </option>

                                    <option>
                                        Civil Engineering
                                    </option>

                                    <option>
                                        Electrical Engineering
                                    </option>

                                </select>

                            </div>


                            <div class="form-group">

                                <label>
                                    Semester
                                </label>

                                <select id="semester">

                                    <option>
                                        4th Semester
                                    </option>

                                    <option selected>
                                        5th Semester
                                    </option>

                                    <option>
                                        6th Semester
                                    </option>

                                </select>

                            </div>


                            <div class="form-group">

                                <label>
                                    CGPA / CPI
                                </label>

                                <input
                                    type="text"
                                    id="cpi"
                                    value="8.20">

                            </div>


                            <div class="form-group">

                                <label>
                                    Graduation Year
                                </label>

                                <input
                                    type="text"
                                    id="graduationYear"
                                    value="2027">

                            </div>


                            <div class="form-group full">

                                <label>
                                    Skills
                                </label>

                                <input
                                    type="text"
                                    id="skills"
                                    value="HTML, CSS, JavaScript, PHP, MySQL">

                            </div>


                            <div class="form-group full">

                                <label>
                                    Career Preference
                                </label>

                                <textarea
                                    id="careerPreference"
                                    rows="4">Interested in software development, web development and IT roles.</textarea>

                            </div>

                        </div>


                        <div class="form-actions">

                            <button
                                type="submit"
                                class="primary-btn">
                                Save Profile
                            </button>

                            <button
                                type="button"
                                class="secondary-btn"
                                id="resetProfile">
                                Reset
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </section>


        <!-- =====================================================
             JOBS & OPPORTUNITIES
        ===================================================== -->

        <section class="page" id="opportunities">

            <div class="section-card">

                <div class="section-header">

                    <div>

                        <h2>
                            Jobs & Opportunities
                        </h2>

                        <p>
                            Explore placement opportunities suitable for you.
                        </p>

                    </div>

                    <span class="badge badge-green">
                        12 Opportunities
                    </span>

                </div>


                <div class="job-grid">


                    <!-- TCS -->

                    <div class="job-card">

                        <div class="job-top">

                            <div class="company-logo">
                                🏢
                            </div>

                            <div class="job-title">

                                <h3>
                                    Software Developer
                                </h3>

                                <p>
                                    TCS
                                </p>

                            </div>

                            <span class="badge badge-green">
                                Eligible
                            </span>

                        </div>


                        <div class="job-details">

                            <span class="job-detail">
                                💰 4.5 LPA
                            </span>

                            <span class="job-detail">
                                📍 Ahmedabad
                            </span>

                            <span class="job-detail">
                                🎓 Diploma
                            </span>

                        </div>


                        <p class="job-description">
                            Develop and maintain software applications and
                            work with modern development technologies.
                        </p>


                        <div class="job-actions">

                            <button
                                class="secondary-btn small-btn"
                                onclick="showJobDetails('tcs')">
                                View Details
                            </button>

                            <button
                                class="primary-btn small-btn apply-btn"
                                data-company="TCS"
                                data-role="Software Developer">
                                Apply Now
                            </button>

                        </div>

                    </div>


                    <!-- INFOSYS -->

                    <div class="job-card">

                        <div class="job-top">

                            <div class="company-logo">
                                🏢
                            </div>

                            <div class="job-title">

                                <h3>
                                    Graduate Engineer
                                </h3>

                                <p>
                                    Infosys
                                </p>

                            </div>

                            <span class="badge badge-green">
                                Eligible
                            </span>

                        </div>


                        <div class="job-details">

                            <span class="job-detail">
                                💰 4.2 LPA
                            </span>

                            <span class="job-detail">
                                📍 Pune
                            </span>

                            <span class="job-detail">
                                🎓 Diploma
                            </span>

                        </div>


                        <p class="job-description">
                            Join the engineering team and work on enterprise
                            applications and technology solutions.
                        </p>


                        <div class="job-actions">

                            <button
                                class="secondary-btn small-btn"
                                onclick="showJobDetails('infosys')">
                                View Details
                            </button>

                            <button
                                class="primary-btn small-btn apply-btn"
                                data-company="Infosys"
                                data-role="Graduate Engineer">
                                Apply Now
                            </button>

                        </div>

                    </div>


                    <!-- WIPRO -->

                    <div class="job-card">

                        <div class="job-top">

                            <div class="company-logo">
                                🏢
                            </div>

                            <div class="job-title">

                                <h3>
                                    Project Engineer
                                </h3>

                                <p>
                                    Wipro
                                </p>

                            </div>

                            <span class="badge badge-green">
                                Eligible
                            </span>

                        </div>


                        <div class="job-details">

                            <span class="job-detail">
                                💰 4.0 LPA
                            </span>

                            <span class="job-detail">
                                📍 Bengaluru
                            </span>

                            <span class="job-detail">
                                🎓 Diploma
                            </span>

                        </div>


                        <p class="job-description">
                            Work with project teams to develop, test and
                            implement technology solutions.
                        </p>


                        <div class="job-actions">

                            <button
                                class="secondary-btn small-btn"
                                onclick="showJobDetails('wipro')">
                                View Details
                            </button>

                            <button
                                class="primary-btn small-btn apply-btn"
                                data-company="Wipro"
                                data-role="Project Engineer">
                                Apply Now
                            </button>

                        </div>

                    </div>


                    <!-- TECH MAHINDRA -->

                    <div class="job-card">

                        <div class="job-top">

                            <div class="company-logo">
                                🏢
                            </div>

                            <div class="job-title">

                                <h3>
                                    Web Developer
                                </h3>

                                <p>
                                    Tech Mahindra
                                </p>

                            </div>

                            <span class="badge badge-green">
                                Eligible
                            </span>

                        </div>


                        <div class="job-details">

                            <span class="job-detail">
                                💰 3.8 LPA
                            </span>

                            <span class="job-detail">
                                📍 Pune
                            </span>

                            <span class="job-detail">
                                🎓 Diploma
                            </span>

                        </div>


                        <p class="job-description">
                            Build responsive websites and web applications
                            using modern web technologies.
                        </p>


                        <div class="job-actions">

                            <button
                                class="secondary-btn small-btn"
                                onclick="showJobDetails('techmahindra')">
                                View Details
                            </button>

                            <button
                                class="primary-btn small-btn apply-btn"
                                data-company="Tech Mahindra"
                                data-role="Web Developer">
                                Apply Now
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             APPLICATIONS
        ===================================================== -->

        <section class="page" id="applications">

            <div class="section-card">

                <div class="section-header">

                    <div>

                        <h2>
                            My Applications
                        </h2>

                        <p>
                            Track all your submitted placement applications.
                        </p>

                    </div>

                </div>


                <div class="table-container">

                    <table>

                        <thead>

                            <tr>
                                <th>Company</th>
                                <th>Job Role</th>
                                <th>Applied Date</th>
                                <th>Candidate Email</th>
                                <th>Status</th>
                            </tr>

                        </thead>

                        <tbody id="applicationsTable">
                        </tbody>

                    </table>

                </div>


                <div
                    class="empty-state"
                    id="applicationEmpty">

                    <div class="empty-icon">
                        📄
                    </div>

                    <h3>
                        No applications yet
                    </h3>

                    <p>
                        Apply for a job from Jobs & Opportunities to see
                        your application here.
                    </p>

                    <button
                        class="primary-btn"
                        style="margin-top:15px;"
                        data-goto="opportunities">
                        Explore Jobs
                    </button>

                </div>

            </div>

        </section>


        <!-- =====================================================
             UPCOMING DRIVES
        ===================================================== -->

        <section class="page" id="drives">

            <div class="section-card">

                <div class="section-header">

                    <div>

                        <h2>
                            Upcoming Placement Drives
                        </h2>

                        <p>
                            Stay updated with upcoming company recruitment drives.
                        </p>

                    </div>

                </div>


                <div class="table-container">

                    <table>

                        <thead>

                            <tr>
                                <th>Company</th>
                                <th>Position</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Mode</th>
                                <th>Eligibility</th>
                                <th>Status</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>
                                <td><strong>TCS</strong></td>
                                <td>Software Developer</td>
                                <td>28 Aug 2026</td>
                                <td>10:00 AM</td>
                                <td>Campus</td>
                                <td>Diploma / BE</td>
                                <td>
                                    <span class="badge badge-green">
                                        Open
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Infosys</strong></td>
                                <td>Graduate Engineer</td>
                                <td>02 Sep 2026</td>
                                <td>11:00 AM</td>
                                <td>Campus</td>
                                <td>Diploma / BE</td>
                                <td>
                                    <span class="badge badge-blue">
                                        Upcoming
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Wipro</strong></td>
                                <td>Project Engineer</td>
                                <td>08 Sep 2026</td>
                                <td>2:00 PM</td>
                                <td>Online</td>
                                <td>Computer / IT</td>
                                <td>
                                    <span class="badge badge-purple">
                                        Upcoming
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Tech Mahindra</strong></td>
                                <td>Web Developer</td>
                                <td>15 Sep 2026</td>
                                <td>10:30 AM</td>
                                <td>Campus</td>
                                <td>Computer</td>
                                <td>
                                    <span class="badge badge-blue">
                                        Upcoming
                                    </span>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </section>


        <!-- =====================================================
             UPCOMING EVENTS
        ===================================================== -->

        <section class="page" id="events">

            <div class="section-card">

                <div class="section-header">

                    <div>

                        <h2>
                            Upcoming Events
                        </h2>

                        <p>
                            Important placement and career preparation events.
                        </p>

                    </div>

                </div>


                <div class="event-grid">


                    <div class="event-card">

                        <div class="event-date">

                            <strong>
                                25
                            </strong>

                            <span>
                                AUG
                            </span>

                        </div>


                        <div class="event-content">

                            <h3>
                                Resume Building Workshop
                            </h3>

                            <p>
                                Learn how to create an effective resume and
                                improve your profile for placement opportunities.
                            </p>

                            <div class="event-meta">
                                🕐 10:00 AM - 12:00 PM
                            </div>

                            <div class="event-meta">
                                📍 Seminar Hall
                            </div>

                            <span class="badge badge-purple">
                                Workshop
                            </span>

                        </div>

                    </div>


                    <div class="event-card">

                        <div class="event-date">

                            <strong>
                                27
                            </strong>

                            <span>
                                AUG
                            </span>

                        </div>


                        <div class="event-content">

                            <h3>
                                Mock Interview Session
                            </h3>

                            <p>
                                Practice technical and HR interview questions
                                with placement trainers.
                            </p>

                            <div class="event-meta">
                                🕐 2:00 PM - 4:00 PM
                            </div>

                            <div class="event-meta">
                                📍 Placement Cell
                            </div>

                            <span class="badge badge-blue">
                                Interview Preparation
                            </span>

                        </div>

                    </div>


                    <div class="event-card">

                        <div class="event-date">

                            <strong>
                                01
                            </strong>

                            <span>
                                SEP
                            </span>

                        </div>


                        <div class="event-content">

                            <h3>
                                Aptitude Test Preparation
                            </h3>

                            <p>
                                Practice quantitative aptitude, logical
                                reasoning and verbal ability.
                            </p>

                            <div class="event-meta">
                                🕐 11:00 AM - 1:00 PM
                            </div>

                            <div class="event-meta">
                                📍 Computer Lab 2
                            </div>

                            <span class="badge badge-green">
                                Training
                            </span>

                        </div>

                    </div>


                    <div class="event-card">

                        <div class="event-date">

                            <strong>
                                05
                            </strong>

                            <span>
                                SEP
                            </span>

                        </div>


                        <div class="event-content">

                            <h3>
                                Communication Skills Session
                            </h3>

                            <p>
                                Improve professional communication and HR
                                interview confidence.
                            </p>

                            <div class="event-meta">
                                🕐 10:30 AM - 12:30 PM
                            </div>

                            <div class="event-meta">
                                📍 Seminar Hall
                            </div>

                            <span class="badge badge-yellow">
                                Career Development
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             INTERVIEWS
        ===================================================== -->

        <section class="page" id="interviews">

            <div class="section-card">

                <div class="section-header">

                    <div>

                        <h2>
                            My Interviews
                        </h2>

                        <p>
                            View interviews and selection rounds assigned to you.
                        </p>

                    </div>

                </div>


                <div class="table-container">

                    <table>

                        <thead>

                            <tr>

                                <th>
                                    Company
                                </th>

                                <th>
                                    Role
                                </th>

                                <th>
                                    Round
                                </th>

                                <th>
                                    Date
                                </th>

                                <th>
                                    Time
                                </th>

                                <th>
                                    Mode
                                </th>

                                <th>
                                    Venue
                                </th>

                                <th>
                                    Status
                                </th>

                            </tr>

                        </thead>


                        <tbody id="interviewTable">

                            <tr>

                                <td>
                                    <strong>
                                        TCS
                                    </strong>
                                </td>

                                <td>
                                    Software Developer
                                </td>

                                <td>
                                    Technical Interview
                                </td>

                                <td>
                                    30 Aug 2026
                                </td>

                                <td>
                                    11:00 AM
                                </td>

                                <td>
                                    Campus
                                </td>

                                <td>
                                    Placement Cell
                                </td>

                                <td>
                                    <span class="badge badge-yellow">
                                        Scheduled
                                    </span>
                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>
                                        Infosys
                                    </strong>
                                </td>

                                <td>
                                    Graduate Engineer
                                </td>

                                <td>
                                    Aptitude Test
                                </td>

                                <td>
                                    03 Sep 2026
                                </td>

                                <td>
                                    10:00 AM
                                </td>

                                <td>
                                    Online
                                </td>

                                <td>
                                    Online Test
                                </td>

                                <td>
                                    <span class="badge badge-blue">
                                        Upcoming
                                    </span>
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </section>


        <!-- =====================================================
             COURSES
        ===================================================== -->

        <section class="page" id="courses">

            <div class="section-card">

                <div class="section-header">

                    <div>

                        <h2>
                            Training & Courses
                        </h2>

                        <p>
                            Improve your technical and placement preparation skills.
                        </p>

                    </div>

                </div>


                <div class="course-grid">


                    <!-- COURSE 1 -->

                    <div class="course-card">

                        <div class="course-icon">
                            💻
                        </div>

                        <h3>
                            Web Development
                        </h3>

                        <p>
                            Learn HTML, CSS, JavaScript and responsive web
                            development fundamentals.
                        </p>

                        <div class="course-info-row">

                            <span class="course-info-item">
                                ⏱ 6 Weeks
                            </span>

                            <span class="course-info-item">
                                📚 12 Modules
                            </span>

                            <span class="course-info-item">
                                🎯 Beginner
                            </span>

                        </div>

                        <div class="progress">

                            <div
                                class="progress-bar"
                                id="course1Progress">
                            </div>

                        </div>

                        <span
                            class="progress-text"
                            id="course1Text">
                            Not Started
                        </span>

                        <button
                            class="primary-btn course-info-btn"
                            data-course="course1">
                            View Course
                        </button>

                    </div>


                    <!-- COURSE 2 -->

                    <div class="course-card">

                        <div class="course-icon">
                            🐘
                        </div>

                        <h3>
                            PHP & Laravel
                        </h3>

                        <p>
                            Learn PHP, Laravel framework, routing, controllers,
                            Blade and database integration.
                        </p>

                        <div class="course-info-row">

                            <span class="course-info-item">
                                ⏱ 5 Weeks
                            </span>

                            <span class="course-info-item">
                                📚 10 Modules
                            </span>

                            <span class="course-info-item">
                                🎯 Intermediate
                            </span>

                        </div>

                        <div class="progress">

                            <div
                                class="progress-bar"
                                id="course2Progress">
                            </div>

                        </div>

                        <span
                            class="progress-text"
                            id="course2Text">
                            Not Started
                        </span>

                        <button
                            class="primary-btn course-info-btn"
                            data-course="course2">
                            View Course
                        </button>

                    </div>


                    <!-- COURSE 3 -->

                    <div class="course-card">

                        <div class="course-icon">
                            🗄️
                        </div>

                        <h3>
                            Database & MySQL
                        </h3>

                        <p>
                            Understand database design, SQL queries, tables,
                            relationships and MySQL.
                        </p>

                        <div class="course-info-row">

                            <span class="course-info-item">
                                ⏱ 4 Weeks
                            </span>

                            <span class="course-info-item">
                                📚 8 Modules
                            </span>

                            <span class="course-info-item">
                                🎯 Beginner
                            </span>

                        </div>

                        <div class="progress">

                            <div
                                class="progress-bar"
                                id="course3Progress">
                            </div>

                        </div>

                        <span
                            class="progress-text"
                            id="course3Text">
                            Not Started
                        </span>

                        <button
                            class="primary-btn course-info-btn"
                            data-course="course3">
                            View Course
                        </button>

                    </div>


                    <!-- COURSE 4 -->

                    <div class="course-card">

                        <div class="course-icon">
                            🧠
                        </div>

                        <h3>
                            Programming Fundamentals
                        </h3>

                        <p>
                            Strengthen logical thinking, programming concepts
                            and problem-solving skills.
                        </p>

                        <div class="course-info-row">

                            <span class="course-info-item">
                                ⏱ 6 Weeks
                            </span>

                            <span class="course-info-item">
                                📚 14 Modules
                            </span>

                            <span class="course-info-item">
                                🎯 Beginner
                            </span>

                        </div>

                        <div class="progress">

                            <div
                                class="progress-bar"
                                id="course4Progress">
                            </div>

                        </div>

                        <span
                            class="progress-text"
                            id="course4Text">
                            Not Started
                        </span>

                        <button
                            class="primary-btn course-info-btn"
                            data-course="course4">
                            View Course
                        </button>

                    </div>


                    <!-- COURSE 5 -->

                    <div class="course-card">

                        <div class="course-icon">
                            🎯
                        </div>

                        <h3>
                            Placement Preparation
                        </h3>

                        <p>
                            Prepare for aptitude tests, technical interviews,
                            HR rounds and communication.
                        </p>

                        <div class="course-info-row">

                            <span class="course-info-item">
                                ⏱ 3 Weeks
                            </span>

                            <span class="course-info-item">
                                📚 9 Modules
                            </span>

                            <span class="course-info-item">
                                🎯 All Students
                            </span>

                        </div>

                        <div class="progress">

                            <div
                                class="progress-bar"
                                id="course5Progress">
                            </div>

                        </div>

                        <span
                            class="progress-text"
                            id="course5Text">
                            Not Started
                        </span>

                        <button
                            class="primary-btn course-info-btn"
                            data-course="course5">
                            View Course
                        </button>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             RESUME
        ===================================================== -->

        <section class="page" id="resume">

            <div class="section-card">

                <div class="section-header">

                    <div>

                        <h2>
                            My Resume
                        </h2>

                        <p>
                            Keep your latest resume ready for placement applications.
                        </p>

                    </div>

                </div>


                <div class="resume-box">

                    <div class="resume-icon">
                        📄
                    </div>

                    <h2 id="resumeTitle">
                        Upload Your Resume
                    </h2>

                    <p id="resumeStatus">
                        PDF, DOC or DOCX files are supported.
                    </p>

                    <input
                        type="file"
                        id="resumeInput"
                        accept=".pdf,.doc,.docx">

                    <button
                        class="primary-btn"
                        id="uploadResumeBtn">
                        Upload Resume
                    </button>

                    <button
                        class="secondary-btn"
                        id="viewResumeBtn"
                        style="display:none;margin-left:8px;">
                        View Resume
                    </button>

                </div>

            </div>

        </section>


        <!-- =====================================================
             NOTIFICATIONS
        ===================================================== -->

        <section class="page" id="notifications">

            <div class="section-card">

                <div class="section-header">

                    <div>

                        <h2>
                            Notifications
                        </h2>

                        <p>
                            Latest placement, application and training updates.
                        </p>

                    </div>

                    <button
                        class="secondary-btn"
                        id="markAllRead">
                        Mark All as Read
                    </button>

                </div>


                <div id="notificationList">

                    <div class="notification-item">

                        <div class="notification-icon">
                            📢
                        </div>

                        <div class="notification-content">

                            <h3>
                                New Software Developer opportunity
                            </h3>

                            <p>
                                TCS has posted a new Software Developer
                                placement opportunity.
                            </p>

                            <p class="notification-time">
                                Today, 9:00 AM
                            </p>

                        </div>

                    </div>


                    <div class="notification-item">

                        <div class="notification-icon">
                            🎯
                        </div>

                        <div class="notification-content">

                            <h3>
                                Interview scheduled
                            </h3>

                            <p>
                                Your TCS technical interview is scheduled
                                for 30 August 2026.
                            </p>

                            <p class="notification-time">
                                Yesterday
                            </p>

                        </div>

                    </div>


                    <div class="notification-item">

                        <div class="notification-icon">
                            🎓
                        </div>

                        <div class="notification-content">

                            <h3>
                                New placement preparation course
                            </h3>

                            <p>
                                Placement Preparation course is now available
                                in Training & Courses.
                            </p>

                            <p class="notification-time">
                                2 days ago
                            </p>

                        </div>

                    </div>


                    <div class="notification-item">

                        <div class="notification-icon">
                            📄
                        </div>

                        <div class="notification-content">

                            <h3>
                                Keep your resume updated
                            </h3>

                            <p>
                                Upload your latest resume to apply for placement
                                opportunities.
                            </p>

                            <p class="notification-time">
                                3 days ago
                            </p>

                        </div>

                    </div>


                    <div class="notification-item">

                        <div class="notification-icon">
                            🗓️
                        </div>

                        <div class="notification-content">

                            <h3>
                                Mock Interview Session
                            </h3>

                            <p>
                                Mock Interview Session is scheduled for
                                27 August 2026.
                            </p>

                            <p class="notification-time">
                                4 days ago
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             SETTINGS
        ===================================================== -->

        <section class="page" id="settings">

            <div class="settings-grid">


                <div class="settings-card">

                    <h2>
                        Account Settings
                    </h2>

                    <p>
                        Manage your account and authentication information.
                    </p>


                    <div class="setting-row">

                        <label>
                            Account Email
                        </label>

                        <input
                            type="email"
                            id="settingsEmail"
                            value="student@example.com"
                            style="width:100%;padding:10px;border:1px solid #dddde8;border-radius:7px;">

                    </div>


                    <div class="setting-row">

                        <label>
                            Change Password
                        </label>

                        <input
                            type="password"
                            id="currentPassword"
                            placeholder="Current Password"
                            style="width:100%;padding:10px;border:1px solid #dddde8;border-radius:7px;margin-bottom:8px;">

                        <input
                            type="password"
                            id="newPassword"
                            placeholder="New Password"
                            style="width:100%;padding:10px;border:1px solid #dddde8;border-radius:7px;margin-bottom:8px;">

                        <input
                            type="password"
                            id="confirmPassword"
                            placeholder="Confirm New Password"
                            style="width:100%;padding:10px;border:1px solid #dddde8;border-radius:7px;">

                        <button
                            class="primary-btn"
                            id="changePasswordBtn"
                            style="margin-top:12px;">
                            Update Password
                        </button>

                    </div>

                </div>


                <div class="settings-card">

                    <h2>
                        Notification Settings
                    </h2>

                    <p>
                        Choose which placement updates you want to receive.
                    </p>


                    <div class="setting-row">

                        <label>
                            Placement Notifications
                        </label>

                        <small>
                            Receive updates about new job opportunities.
                        </small>

                        <div style="margin-top:10px;">

                            <label style="display:flex;align-items:center;gap:8px;font-weight:normal;">

                                <input
                                    type="checkbox"
                                    checked>

                                Enable placement updates

                            </label>

                        </div>

                    </div>


                    <div class="setting-row">

                        <label>
                            Interview Notifications
                        </label>

                        <small>
                            Receive notifications about interviews and rounds.
                        </small>

                        <div style="margin-top:10px;">

                            <label style="display:flex;align-items:center;gap:8px;font-weight:normal;">

                                <input
                                    type="checkbox"
                                    checked>

                                Enable interview updates

                            </label>

                        </div>

                    </div>


                    <div class="setting-row">

                        <label>
                            Training Notifications
                        </label>

                        <small>
                            Receive updates about new courses and training.
                        </small>

                        <div style="margin-top:10px;">

                            <label style="display:flex;align-items:center;gap:8px;font-weight:normal;">

                                <input
                                    type="checkbox"
                                    checked>

                                Enable training updates

                            </label>

                        </div>

                    </div>

                </div>


                <div class="settings-card">

                    <h2>
                        Security
                    </h2>

                    <p>
                        Keep your student account secure.
                    </p>


                    <div class="setting-row">

                        <label>
                            Password Authentication
                        </label>

                        <small>
                            Your account is protected using password authentication.
                        </small>

                    </div>


                    <div class="setting-row">

                        <label>
                            Login Security
                        </label>

                        <small>
                            Never share your account password with anyone.
                        </small>

                    </div>

                </div>


                <div class="settings-card">

                    <h2>
                        Account Actions
                    </h2>

                    <p>
                        Manage your student portal session.
                    </p>


                    <div class="setting-row">

                        <label>
                            Logout
                        </label>

                        <small>
                            Sign out from your student dashboard.
                        </small>

                        <br><br>

                        <button
                            class="danger-btn"
                            id="settingsLogout">
                            Logout
                        </button>

                    </div>

                </div>

            </div>

        </section>

    </main>


    <!-- =========================================================
         JOB DETAILS MODAL
    ========================================================= -->

    <div
        class="modal"
        id="jobModal">

        <div class="modal-content">

            <button
                class="close-modal"
                data-close="jobModal">
                ×
            </button>

            <h2 id="modalJobTitle">
                Software Developer
            </h2>

            <div class="modal-details">

                <p>
                    <strong>
                        Company:
                    </strong>

                    <span id="modalCompany">
                        TCS
                    </span>
                </p>


                <div class="modal-section">

                    <h3>
                        Job Description
                    </h3>

                    <p id="modalDescription">
                    </p>

                </div>


                <div class="modal-section">

                    <h3>
                        Required Skills
                    </h3>

                    <p id="modalSkills">
                    </p>

                </div>


                <div class="modal-section">

                    <h3>
                        Eligibility
                    </h3>

                    <p>
                        Diploma / Degree students with relevant technical
                        skills and academic performance.
                    </p>

                </div>


                <div class="modal-section">

                    <h3>
                        Package
                    </h3>

                    <p id="modalPackage">
                    </p>

                </div>


                <div class="modal-section">

                    <h3>
                        Location
                    </h3>

                    <p id="modalLocation">
                    </p>

                </div>


                <div style="margin-top:22px;">

                    <button
                        class="primary-btn"
                        id="modalApplyBtn">
                        Apply Now
                    </button>

                </div>

            </div>

        </div>

    </div>


    <!-- =========================================================
         APPLICATION FORM MODAL
    ========================================================= -->

    <div
        class="modal"
        id="applicationModal">

        <div class="modal-content">

            <button
                class="close-modal"
                data-close="applicationModal">
                ×
            </button>

            <h2>
                Apply for Job
            </h2>

            <div class="form-note">

                <strong id="applicationCompanyName">
                    TCS
                </strong>

                -
                
                <span id="applicationRoleName">
                    Software Developer
                </span>

                <br>

                Please fill in your information before submitting
                your job application.

            </div>


            <form id="applicationForm">

                <div class="application-form-grid">


                    <div class="application-form-group">

                        <label>
                            Full Name *
                        </label>

                        <input
                            type="text"
                            id="applicationName"
                            value="Student"
                            required>

                    </div>


                    <div class="application-form-group">

                        <label>
                            Email *
                        </label>

                        <input
                            type="email"
                            id="applicationEmail"
                            value="student@example.com"
                            required>

                    </div>


                    <div class="application-form-group">

                        <label>
                            Mobile Number *
                        </label>

                        <input
                            type="tel"
                            id="applicationMobile"
                            value="+91 9876543210"
                            required>

                    </div>


                    <div class="application-form-group">

                        <label>
                            Enrollment Number *
                        </label>

                        <input
                            type="text"
                            id="applicationEnrollment"
                            value="KD2026CE001"
                            required>

                    </div>


                    <div class="application-form-group">

                        <label>
                            Department *
                        </label>

                        <select
                            id="applicationDepartment"
                            required>

                            <option selected>
                                Computer Engineering
                            </option>

                            <option>
                                Information Technology
                            </option>

                            <option>
                                Mechanical Engineering
                            </option>

                            <option>
                                Civil Engineering
                            </option>

                            <option>
                                Electrical Engineering
                            </option>

                        </select>

                    </div>


                    <div class="application-form-group">

                        <label>
                            Semester *
                        </label>

                        <select
                            id="applicationSemester"
                            required>

                            <option>
                                4th Semester
                            </option>

                            <option selected>
                                5th Semester
                            </option>

                            <option>
                                6th Semester
                            </option>

                        </select>

                    </div>


                    <div class="application-form-group">

                        <label>
                            CPI / CGPA *
                        </label>

                        <input
                            type="text"
                            id="applicationCpi"
                            value="8.20"
                            required>

                    </div>


                    <div class="application-form-group">

                        <label>
                            Graduation Year *
                        </label>

                        <input
                            type="text"
                            id="applicationGraduation"
                            value="2027"
                            required>

                    </div>


                    <div class="application-form-group full">

                        <label>
                            Skills *
                        </label>

                        <input
                            type="text"
                            id="applicationSkills"
                            value="HTML, CSS, JavaScript, PHP, MySQL"
                            required>

                    </div>


                    <div class="application-form-group full">

                        <label>
                            Cover Note / Message
                        </label>

                        <textarea
                            id="applicationMessage"
                            rows="4"
                            placeholder="Write a short message to the company..."></textarea>

                    </div>

                </div>


                <div class="form-note">

                    📄 <strong>Resume:</strong>

                    <span id="applicationResumeStatus">
                        Please upload your resume from the Resume section.
                    </span>

                </div>


                <div style="display:flex;gap:10px;justify-content:flex-end;">

                    <button
                        type="button"
                        class="secondary-btn"
                        data-close="applicationModal">
                        Cancel
                    </button>

                    <button
                        type="submit"
                        class="primary-btn">
                        Submit Application
                    </button>

                </div>

            </form>

        </div>

    </div>


    <!-- =========================================================
         COURSE INFORMATION MODAL
    ========================================================= -->

    <div
        class="modal"
        id="courseModal">

        <div class="modal-content">

            <button
                class="close-modal"
                data-close="courseModal">
                ×
            </button>

            <h2 id="courseModalTitle">
                Web Development
            </h2>

            <div class="modal-details">

                <p id="courseModalDescription">
                </p>


                <div class="modal-section">

                    <h3>
                        Course Information
                    </h3>

                    <p>
                        <strong>
                            Duration:
                        </strong>

                        <span id="courseModalDuration">
                        </span>
                    </p>

                    <p>
                        <strong>
                            Modules:
                        </strong>

                        <span id="courseModalModules">
                        </span>
                    </p>

                    <p>
                        <strong>
                            Level:
                        </strong>

                        <span id="courseModalLevel">
                        </span>
                    </p>

                </div>


                <div class="modal-section">

                    <h3>
                        What You Will Learn
                    </h3>

                    <ul
                        class="modal-list"
                        id="courseModalTopics">
                    </ul>

                </div>


                <div class="modal-section">

                    <h3>
                        Skills You Will Gain
                    </h3>

                    <p id="courseModalSkills">
                    </p>

                </div>


                <div class="modal-section">

                    <h3>
                        Course Outcome
                    </h3>

                    <p id="courseModalOutcome">
                    </p>

                </div>


                <div style="margin-top:22px;">

                    <button
                        class="primary-btn"
                        id="startLearningBtn">
                        Start Learning
                    </button>

                </div>

            </div>

        </div>

    </div>


    <!-- =========================================================
         TOAST
    ========================================================= -->

    <div
        class="toast"
        id="toast">
    </div>


    <!-- =========================================================
         JAVASCRIPT
    ========================================================= -->

    <script>

        /* =========================================================
           DATA
        ========================================================= */

        let applications = [];

        let unreadNotifications = 5;

        let selectedJob = null;

        let selectedCourse = null;

        let resumeUploaded = false;


        /* =========================================================
           PAGE INFORMATION
        ========================================================= */

        const pageInformation = {

            dashboard: {
                title: "Student Dashboard",
                subtitle: "Manage your placement journey and career preparation."
            },

            profile: {
                title: "My Profile",
                subtitle: "Update your personal and academic information."
            },

            opportunities: {
                title: "Jobs & Opportunities",
                subtitle: "Explore placement opportunities suitable for you."
            },

            applications: {
                title: "My Applications",
                subtitle: "Track your submitted placement applications."
            },

            drives: {
                title: "Upcoming Placement Drives",
                subtitle: "Stay updated with upcoming company recruitment drives."
            },

            events: {
                title: "Upcoming Events",
                subtitle: "Important placement and career preparation events."
            },

            interviews: {
                title: "My Interviews",
                subtitle: "View your upcoming interviews and selection rounds."
            },

            courses: {
                title: "Training & Courses",
                subtitle: "Improve your technical and placement preparation skills."
            },

            resume: {
                title: "My Resume",
                subtitle: "Keep your latest resume ready for placement applications."
            },

            notifications: {
                title: "Notifications",
                subtitle: "Latest placement, application and training updates."
            },

            settings: {
                title: "Settings",
                subtitle: "Manage your account, security and notifications."
            }

        };


        /* =========================================================
           NAVIGATION
        ========================================================= */

        function openPage(pageName) {

            document.querySelectorAll(".page").forEach(function(page) {

                page.classList.remove("active");

            });


            const page =
                document.getElementById(pageName);

            if (page) {

                page.classList.add("active");

            }


            document.querySelectorAll(".menu-btn").forEach(function(button) {

                button.classList.remove("active");

            });


            const menu =
                document.querySelector(
                    '.menu-btn[data-page="' + pageName + '"]'
                );

            if (menu) {

                menu.classList.add("active");

            }


            if (pageInformation[pageName]) {

                document.getElementById("pageTitle").textContent =
                    pageInformation[pageName].title;

                document.getElementById("pageSubtitle").textContent =
                    pageInformation[pageName].subtitle;

            }


            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });

        }


        document.querySelectorAll(".menu-btn[data-page]").forEach(function(button) {

            button.addEventListener("click", function() {

                openPage(
                    this.getAttribute("data-page")
                );

            });

        });


        document.querySelectorAll("[data-goto]").forEach(function(button) {

            button.addEventListener("click", function() {

                openPage(
                    this.getAttribute("data-goto")
                );

            });

        });


        /* =========================================================
           TOAST
        ========================================================= */

        function showToast(message) {

            const toast =
                document.getElementById("toast");

            toast.textContent =
                message;

            toast.classList.add("show");

            setTimeout(function() {

                toast.classList.remove("show");

            }, 3000);

        }


        /* =========================================================
           MODAL CLOSE
        ========================================================= */

        document.querySelectorAll("[data-close]").forEach(function(button) {

            button.addEventListener("click", function() {

                const modalId =
                    this.getAttribute("data-close");

                document.getElementById(modalId)
                    .classList.remove("show");

            });

        });


        document.querySelectorAll(".modal").forEach(function(modal) {

            modal.addEventListener("click", function(event) {

                if (event.target === this) {

                    this.classList.remove("show");

                }

            });

        });


        /* =========================================================
           PROFILE
        ========================================================= */

        document.getElementById("profileForm").addEventListener(
            "submit",
            function(event) {

                event.preventDefault();

                const name =
                    document.getElementById("studentName")
                        .value.trim();

                const department =
                    document.getElementById("department")
                        .value;


                if (!name) {

                    showToast(
                        "Please enter your name."
                    );

                    return;

                }


                document.getElementById("topStudentName")
                    .textContent = name;

                document.getElementById("topStudentDepartment")
                    .textContent = department;

                document.getElementById("profileNameDisplay")
                    .textContent = name;

                document.getElementById("profileDepartmentDisplay")
                    .textContent = department;


                document.getElementById("applicationName")
                    .value = name;

                document.getElementById("applicationEmail")
                    .value =
                    document.getElementById("studentEmail").value;

                document.getElementById("applicationMobile")
                    .value =
                    document.getElementById("studentMobile").value;

                document.getElementById("applicationEnrollment")
                    .value =
                    document.getElementById("enrollment").value;

                document.getElementById("applicationDepartment")
                    .value = department;

                document.getElementById("applicationSemester")
                    .value =
                    document.getElementById("semester").value;

                document.getElementById("applicationCpi")
                    .value =
                    document.getElementById("cpi").value;

                document.getElementById("applicationGraduation")
                    .value =
                    document.getElementById("graduationYear").value;

                document.getElementById("applicationSkills")
                    .value =
                    document.getElementById("skills").value;


                showToast(
                    "Profile updated successfully!"
                );

            }
        );


        /* =========================================================
           PROFILE RESET
        ========================================================= */

        document.getElementById("resetProfile")
            .addEventListener("click", function() {

                document.getElementById("studentName").value =
                    "Student";

                document.getElementById("enrollment").value =
                    "KD2026CE001";

                document.getElementById("studentEmail").value =
                    "student@example.com";

                document.getElementById("studentMobile").value =
                    "+91 9876543210";

                document.getElementById("department").value =
                    "Computer Engineering";

                document.getElementById("semester").value =
                    "5th Semester";

                document.getElementById("cpi").value =
                    "8.20";

                document.getElementById("graduationYear").value =
                    "2027";

                document.getElementById("skills").value =
                    "HTML, CSS, JavaScript, PHP, MySQL";

                document.getElementById("careerPreference").value =
                    "Interested in software development, web development and IT roles.";

                showToast(
                    "Profile reset."
                );

            });


        /* =========================================================
           JOB DATA
        ========================================================= */

        const jobs = {

            tcs: {

                company: "TCS",

                role: "Software Developer",

                package: "4.5 LPA",

                location: "Ahmedabad",

                skills: "HTML, CSS, JavaScript, PHP, MySQL",

                description:
                    "Develop and maintain software applications, participate in development activities and work with the engineering team."

            },


            infosys: {

                company: "Infosys",

                role: "Graduate Engineer",

                package: "4.2 LPA",

                location: "Pune",

                skills: "Java, Python, SQL, Problem Solving",

                description:
                    "Join the engineering team and work on enterprise applications and technology solutions."

            },


            wipro: {

                company: "Wipro",

                role: "Project Engineer",

                package: "4.0 LPA",

                location: "Bengaluru",

                skills: "Java, Python, SQL, Communication",

                description:
                    "Work with project teams to develop, test and implement technology solutions."

            },


            techmahindra: {

                company: "Tech Mahindra",

                role: "Web Developer",

                package: "3.8 LPA",

                location: "Pune",

                skills: "HTML, CSS, JavaScript, PHP",

                description:
                    "Build responsive websites and web applications using modern web technologies."

            }

        };


        /* =========================================================
           JOB DETAILS
        ========================================================= */

        function showJobDetails(jobId) {

            const job =
                jobs[jobId];

            if (!job) {
                return;
            }


            selectedJob =
                job;


            document.getElementById("modalJobTitle")
                .textContent =
                job.role;

            document.getElementById("modalCompany")
                .textContent =
                job.company;

            document.getElementById("modalDescription")
                .textContent =
                job.description;

            document.getElementById("modalSkills")
                .textContent =
                job.skills;

            document.getElementById("modalPackage")
                .textContent =
                job.package;

            document.getElementById("modalLocation")
                .textContent =
                job.location;


            document.getElementById("jobModal")
                .classList.add("show");

        }


        /* =========================================================
           APPLY BUTTON
        ========================================================= */

        document.querySelectorAll(".apply-btn").forEach(function(button) {

            button.addEventListener("click", function() {

                openApplicationForm(
                    this.getAttribute("data-company"),
                    this.getAttribute("data-role")
                );

            });

        });


        document.getElementById("modalApplyBtn")
            .addEventListener("click", function() {

                if (!selectedJob) {
                    return;
                }

                document.getElementById("jobModal")
                    .classList.remove("show");

                openApplicationForm(
                    selectedJob.company,
                    selectedJob.role
                );

            });


        /* =========================================================
           APPLICATION FORM OPEN
        ========================================================= */

        function openApplicationForm(company, role) {

            document.getElementById("applicationCompanyName")
                .textContent =
                company;

            document.getElementById("applicationRoleName")
                .textContent =
                role;


            document.getElementById("applicationName")
                .value =
                document.getElementById("studentName").value;

            document.getElementById("applicationEmail")
                .value =
                document.getElementById("studentEmail").value;

            document.getElementById("applicationMobile")
                .value =
                document.getElementById("studentMobile").value;

            document.getElementById("applicationEnrollment")
                .value =
                document.getElementById("enrollment").value;

            document.getElementById("applicationDepartment")
                .value =
                document.getElementById("department").value;

            document.getElementById("applicationSemester")
                .value =
                document.getElementById("semester").value;

            document.getElementById("applicationCpi")
                .value =
                document.getElementById("cpi").value;

            document.getElementById("applicationGraduation")
                .value =
                document.getElementById("graduationYear").value;

            document.getElementById("applicationSkills")
                .value =
                document.getElementById("skills").value;


            if (resumeUploaded) {

                document.getElementById("applicationResumeStatus")
                    .textContent =
                    "Resume is uploaded and ready to submit.";

            } else {

                document.getElementById("applicationResumeStatus")
                    .textContent =
                    "Please upload your resume from the Resume section.";

            }


            selectedJob = {

                company: company,

                role: role

            };


            document.getElementById("applicationModal")
                .classList.add("show");

        }


        /* =========================================================
           SUBMIT APPLICATION
        ========================================================= */

        document.getElementById("applicationForm")
            .addEventListener("submit", function(event) {

                event.preventDefault();


                if (!resumeUploaded) {

                    showToast(
                        "Please upload your resume before applying."
                    );

                    openPage("resume");

                    return;

                }


                const company =
                    selectedJob.company;

                const role =
                    selectedJob.role;


                const alreadyApplied =
                    applications.some(function(application) {

                        return application.company === company &&
                            application.role === role;

                    });


                if (alreadyApplied) {

                    showToast(
                        "You have already applied for this job."
                    );

                    return;

                }


                const application = {

                    company: company,

                    role: role,

                    name:
                        document.getElementById("applicationName")
                            .value,

                    email:
                        document.getElementById("applicationEmail")
                            .value,

                    mobile:
                        document.getElementById("applicationMobile")
                            .value,

                    enrollment:
                        document.getElementById("applicationEnrollment")
                            .value,

                    department:
                        document.getElementById("applicationDepartment")
                            .value,

                    semester:
                        document.getElementById("applicationSemester")
                            .value,

                    cpi:
                        document.getElementById("applicationCpi")
                            .value,

                    skills:
                        document.getElementById("applicationSkills")
                            .value,

                    date:
                        new Date().toLocaleDateString(
                            "en-IN",
                            {
                                day: "2-digit",
                                month: "short",
                                year: "numeric"
                            }
                        ),

                    status:
                        "Applied"

                };


                applications.push(application);


                updateApplications();

                addApplicationNotification(
                    company,
                    role
                );


                document.getElementById("applicationModal")
                    .classList.remove("show");


                document.getElementById("applicationForm")
                    .reset();


                showToast(
                    "Application submitted successfully!"
                );


                setTimeout(function() {

                    openPage("applications");

                }, 700);

            });


        /* =========================================================
           APPLICATION TABLE
        ========================================================= */

        function updateApplications() {

            const table =
                document.getElementById("applicationsTable");

            const empty =
                document.getElementById("applicationEmpty");


            table.innerHTML = "";


            if (applications.length === 0) {

                empty.style.display =
                    "block";

            } else {

                empty.style.display =
                    "none";

            }


            applications.forEach(function(application) {

                const row =
                    document.createElement("tr");


                let badgeClass =
                    "badge-blue";


                if (application.status === "Selected") {

                    badgeClass =
                        "badge-green";

                }


                if (application.status === "Rejected") {

                    badgeClass =
                        "badge-red";

                }


                row.innerHTML = `

                    <td>
                        <strong>
                            ${application.company}
                        </strong>
                    </td>

                    <td>
                        ${application.role}
                    </td>

                    <td>
                        ${application.date}
                    </td>

                    <td>
                        ${application.email}
                    </td>

                    <td>
                        <span class="badge ${badgeClass}">
                            ${application.status}
                        </span>
                    </td>

                `;


                table.appendChild(row);

            });


            document.getElementById("applicationsCount")
                .textContent =
                applications.length;

        }


        /* =========================================================
           APPLICATION NOTIFICATION
        ========================================================= */

        function addApplicationNotification(company, role) {

            unreadNotifications++;


            document.getElementById("notificationsCount")
                .textContent =
                unreadNotifications;


            const list =
                document.getElementById("notificationList");


            const item =
                document.createElement("div");


            item.className =
                "notification-item";


            item.innerHTML = `

                <div class="notification-icon">
                    📄
                </div>

                <div class="notification-content">

                    <h3>
                        Application submitted
                    </h3>

                    <p>
                        Your application for ${role}
                        at ${company}
                        has been submitted successfully.
                    </p>

                    <p class="notification-time">
                        Just now
                    </p>

                </div>

            `;


            list.insertBefore(
                item,
                list.firstChild
            );

        }


        /* =========================================================
           COURSE DATA
        ========================================================= */

        const courses = {

            course1: {

                title: "Web Development",

                description:
                    "Learn the complete fundamentals of modern web development and create responsive websites using HTML, CSS and JavaScript.",

                duration: "6 Weeks",

                modules: "12 Modules",

                level: "Beginner",

                topics: [
                    "HTML5 and semantic elements",
                    "CSS styling and layouts",
                    "Responsive web design",
                    "JavaScript fundamentals",
                    "DOM manipulation",
                    "Forms and validation",
                    "Basic web project development"
                ],

                skills:
                    "HTML, CSS, JavaScript, Responsive Design",

                outcome:
                    "After completing this course, students will be able to create responsive and interactive websites."

            },


            course2: {

                title: "PHP & Laravel",

                description:
                    "Learn PHP programming and Laravel framework concepts required for building dynamic web applications.",

                duration: "5 Weeks",

                modules: "10 Modules",

                level: "Intermediate",

                topics: [
                    "PHP fundamentals",
                    "Variables and functions",
                    "Forms and validation",
                    "MySQL integration",
                    "Laravel routing",
                    "Controllers and models",
                    "Blade templates",
                    "CRUD applications"
                ],

                skills:
                    "PHP, Laravel, MySQL, MVC, Blade",

                outcome:
                    "Students will be able to create database-driven web applications using Laravel."

            },


            course3: {

                title: "Database & MySQL",

                description:
                    "Understand relational databases, SQL queries, database design and MySQL database management.",

                duration: "4 Weeks",

                modules: "8 Modules",

                level: "Beginner",

                topics: [
                    "Database fundamentals",
                    "Tables and relationships",
                    "Primary and foreign keys",
                    "SQL SELECT queries",
                    "INSERT, UPDATE and DELETE",
                    "Joins",
                    "Normalization",
                    "MySQL database management"
                ],

                skills:
                    "SQL, MySQL, Database Design",

                outcome:
                    "Students will be able to design databases and write SQL queries for applications."

            },


            course4: {

                title: "Programming Fundamentals",

                description:
                    "Build strong programming logic and problem-solving skills required for software development and placement tests.",

                duration: "6 Weeks",

                modules: "14 Modules",

                level: "Beginner",

                topics: [
                    "Programming basics",
                    "Variables and data types",
                    "Conditions",
                    "Loops",
                    "Functions",
                    "Arrays",
                    "Object-oriented programming",
                    "Problem solving"
                ],

                skills:
                    "Programming Logic, Problem Solving, OOP",

                outcome:
                    "Students will develop stronger programming logic and become more confident in technical tests."

            },


            course5: {

                title: "Placement Preparation",

                description:
                    "Prepare yourself for campus placements through aptitude practice, technical interview preparation and HR interview training.",

                duration: "3 Weeks",

                modules: "9 Modules",

                level: "All Students",

                topics: [
                    "Quantitative aptitude",
                    "Logical reasoning",
                    "Verbal ability",
                    "Technical interview questions",
                    "Coding interview basics",
                    "Resume preparation",
                    "HR interview questions",
                    "Communication skills"
                ],

                skills:
                    "Aptitude, Communication, Interview Skills, Resume Building",

                outcome:
                    "Students will become better prepared for aptitude tests, technical interviews and HR rounds."

            }

        };


        /* =========================================================
           COURSE INFORMATION BUTTON
        ========================================================= */

        document.querySelectorAll(".course-info-btn")
            .forEach(function(button) {

                button.addEventListener("click", function() {

                    const courseId =
                        this.getAttribute("data-course");

                    showCourseInformation(courseId);

                });

            });


        function showCourseInformation(courseId) {

            const course =
                courses[courseId];


            if (!course) {
                return;
            }


            selectedCourse =
                courseId;


            document.getElementById("courseModalTitle")
                .textContent =
                course.title;


            document.getElementById("courseModalDescription")
                .textContent =
                course.description;


            document.getElementById("courseModalDuration")
                .textContent =
                course.duration;


            document.getElementById("courseModalModules")
                .textContent =
                course.modules;


            document.getElementById("courseModalLevel")
                .textContent =
                course.level;


            document.getElementById("courseModalSkills")
                .textContent =
                course.skills;


            document.getElementById("courseModalOutcome")
                .textContent =
                course.outcome;


            const topicList =
                document.getElementById("courseModalTopics");


            topicList.innerHTML = "";


            course.topics.forEach(function(topic) {

                const li =
                    document.createElement("li");

                li.textContent =
                    topic;

                topicList.appendChild(li);

            });


            document.getElementById("courseModal")
                .classList.add("show");

        }


        /* =========================================================
           START LEARNING
        ========================================================= */

        document.getElementById("startLearningBtn")
            .addEventListener("click", function() {

                if (!selectedCourse) {
                    return;
                }


                const progress =
                    document.getElementById(
                        selectedCourse + "Progress"
                    );


                const text =
                    document.getElementById(
                        selectedCourse + "Text"
                    );


                progress.style.width =
                    "25%";


                text.textContent =
                    "Started - 25% completed";


                document.getElementById("courseModal")
                    .classList.remove("show");


                showToast(
                    "Course started successfully!"
                );

            });


        /* =========================================================
           COURSE PROGRESS - CLICKING VIEW COURSE AGAIN
        ========================================================= */

        document.querySelectorAll(".course-info-btn")
            .forEach(function(button) {

                button.addEventListener("dblclick", function() {

                    const courseId =
                        this.getAttribute("data-course");

                    const progress =
                        document.getElementById(
                            courseId + "Progress"
                        );

                    const text =
                        document.getElementById(
                            courseId + "Text"
                        );


                    if (progress.style.width === "25%") {

                        progress.style.width =
                            "50%";

                        text.textContent =
                            "50% completed";

                    }

                    else if (progress.style.width === "50%") {

                        progress.style.width =
                            "75%";

                        text.textContent =
                            "75% completed";

                    }

                    else if (progress.style.width === "75%") {

                        progress.style.width =
                            "100%";

                        text.textContent =
                            "Course Completed";

                    }

                });

            });


        /* =========================================================
           RESUME
        ========================================================= */

        document.getElementById("uploadResumeBtn")
            .addEventListener("click", function() {

                document.getElementById("resumeInput")
                    .click();

            });


        document.getElementById("resumeInput")
            .addEventListener("change", function() {

                if (this.files.length === 0) {
                    return;
                }


                const file =
                    this.files[0];


                const extension =
                    file.name.split(".").pop().toLowerCase();


                if (
                    extension !== "pdf" &&
                    extension !== "doc" &&
                    extension !== "docx"
                ) {

                    showToast(
                        "Please upload PDF, DOC or DOCX file."
                    );

                    this.value = "";

                    return;

                }


                resumeUploaded =
                    true;


                document.getElementById("resumeTitle")
                    .textContent =
                    file.name;


                document.getElementById("resumeStatus")
                    .textContent =
                    "Resume uploaded successfully.";


                document.getElementById("uploadResumeBtn")
                    .textContent =
                    "Replace Resume";


                document.getElementById("viewResumeBtn")
                    .style.display =
                    "inline-block";


                document.getElementById("applicationResumeStatus")
                    .textContent =
                    "Resume is uploaded and ready to submit.";


                showToast(
                    "Resume uploaded successfully!"
                );

            });


        document.getElementById("viewResumeBtn")
            .addEventListener("click", function() {

                const input =
                    document.getElementById("resumeInput");


                if (input.files.length > 0) {

                    const url =
                        URL.createObjectURL(
                            input.files[0]
                        );


                    window.open(
                        url,
                        "_blank"
                    );

                } else {

                    showToast(
                        "Please upload a resume first."
                    );

                }

            });


        /* =========================================================
           MARK ALL NOTIFICATIONS READ
        ========================================================= */

        document.getElementById("markAllRead")
            .addEventListener("click", function() {

                unreadNotifications =
                    0;


                document.getElementById("notificationsCount")
                    .textContent =
                    "0";


                showToast(
                    "All notifications marked as read."
                );

            });


        /* =========================================================
           PASSWORD
        ========================================================= */

        document.getElementById("changePasswordBtn")
            .addEventListener("click", function() {

                const current =
                    document.getElementById("currentPassword")
                        .value;

                const newPassword =
                    document.getElementById("newPassword")
                        .value;

                const confirmPassword =
                    document.getElementById("confirmPassword")
                        .value;


                if (
                    !current ||
                    !newPassword ||
                    !confirmPassword
                ) {

                    showToast(
                        "Please fill all password fields."
                    );

                    return;

                }


                if (newPassword.length < 6) {

                    showToast(
                        "New password must contain at least 6 characters."
                    );

                    return;

                }


                if (newPassword !== confirmPassword) {

                    showToast(
                        "New password and confirm password do not match."
                    );

                    return;

                }


                document.getElementById("currentPassword")
                    .value = "";

                document.getElementById("newPassword")
                    .value = "";

                document.getElementById("confirmPassword")
                    .value = "";


                showToast(
                    "Password updated successfully!"
                );

            });


        /* =========================================================
           EMAIL SYNC
        ========================================================= */

        document.getElementById("studentEmail")
            .addEventListener("input", function() {

                document.getElementById("settingsEmail")
                    .value =
                    this.value;

            });


        document.getElementById("settingsEmail")
            .addEventListener("input", function() {

                document.getElementById("studentEmail")
                    .value =
                    this.value;

            });


        /* =========================================================
           LOGOUT
        ========================================================= */

        function logoutStudent() {

            const confirmation =
                confirm(
                    "Are you sure you want to logout?"
                );


            if (!confirmation) {
                return;
            }


            showToast(
                "You have been logged out."
            );

        }


        document.getElementById("logoutBtn")
            .addEventListener(
                "click",
                logoutStudent
            );


        document.getElementById("settingsLogout")
            .addEventListener(
                "click",
                logoutStudent
            );


        /* =========================================================
           INITIALIZE
        ========================================================= */

        updateApplications();

    </script>

</body>

</html>