<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Company Registration | K D Polytechnic T&P Portal</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: #eaf6ff;
            color: #13233f;
            min-height: 100vh;
        }

        /* ================= HEADER ================= */

        .header {
            background: #101d38;
            color: white;
            padding: 18px 35px;
            display: flex;
            align-items: center;
            gap: 18px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.15);
        }

        .logo-box {
            width: 58px;
            height: 58px;
            border-radius: 12px;
            background: #1769ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 27px;
            font-weight: bold;
        }

        .header-text h1 {
            font-size: 26px;
            margin-bottom: 3px;
        }

        .header-text p {
            color: #b9c6dc;
            font-size: 15px;
        }

        /* ================= PAGE ================= */

        .container {
            width: 94%;
            max-width: 1250px;
            margin: 30px auto 50px;
        }

        .page-title {
            text-align: center;
            margin-bottom: 25px;
        }

        .page-title h2 {
            color: #173875;
            font-size: 30px;
            margin-bottom: 7px;
        }

        .page-title p {
            color: #61708a;
            font-size: 15px;
        }

        /* ================= FORM GRID ================= */

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .card {
            background: white;
            border-radius: 18px;
            padding: 28px 30px;
            border: 1px solid #cfe7fb;
            box-shadow: 0 5px 20px rgba(31, 91, 140, 0.08);
        }

        .full-card {
            grid-column: 1 / -1;
        }

        .card-title {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #2862d7;
            font-size: 22px;
            font-weight: 700;
            padding-bottom: 15px;
            margin-bottom: 22px;
            border-bottom: 2px solid #d9ecff;
        }

        .card-icon {
            font-size: 22px;
        }

        /* ================= FORM ================= */

        .row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .form-group {
            margin-bottom: 19px;
        }

        label {
            display: block;
            font-size: 15px;
            font-weight: 650;
            color: #172b4d;
            margin-bottom: 8px;
        }

        .required {
            color: #e53935;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 13px 14px;
            border: 1.5px solid #9fd1ff;
            border-radius: 10px;
            outline: none;
            background: #ffffff;
            color: #172b4d;
            font-size: 15px;
            transition: 0.2s ease;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #2878ed;
            box-shadow: 0 0 0 3px rgba(40,120,237,0.10);
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        input::placeholder,
        textarea::placeholder {
            color: #91a5bd;
        }

        /* ================= LOGO ================= */

        .logo-upload {
            border: 2px dashed #acd5fa;
            border-radius: 12px;
            padding: 18px;
            background: #f8fcff;
        }

        .logo-upload input {
            border: none;
            padding: 5px 0;
            background: transparent;
        }

        .small-text {
            font-size: 13px;
            color: #71839a;
            margin-top: 6px;
        }

        /* ================= SKILLS ================= */

        .skills-info {
            color: #60738e;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .selected-skills {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 18px;
            min-height: 10px;
        }

        .selected-skill {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: #e5f2ff;
            color: #1769d2;
            border: 1px solid #8bc5fa;
            padding: 7px 10px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }

        .remove-skill {
            border: none;
            background: transparent;
            color: #e53935;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            line-height: 1;
            padding: 0;
        }

        .skills-visible {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .skill-btn {
            border: 1.5px solid #73b9f5;
            background: white;
            color: #1769d2;
            border-radius: 22px;
            padding: 9px 17px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .skill-btn:hover {
            background: #edf7ff;
            transform: translateY(-1px);
        }

        .skill-btn.selected {
            background: #1769d2;
            color: white;
            border-color: #1769d2;
        }

        .view-more-wrapper {
            margin-top: 15px;
        }

        .view-more-btn {
            border: none;
            background: transparent;
            color: #1769d2;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            padding: 5px 0;
        }

        .view-more-btn:hover {
            text-decoration: underline;
        }

        .more-skills {
            display: none;
            margin-top: 12px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .more-skills.show {
            display: flex;
        }

        /* ================= DECLARATION ================= */

        .declaration {
            background: #f5faff;
            border: 1px solid #c9e4fa;
            border-radius: 12px;
            padding: 18px;
        }

        .check-row {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 12px;
        }

        .check-row input {
            width: auto;
            margin-top: 4px;
            accent-color: #1769d2;
        }

        .check-row label {
            margin: 0;
            font-weight: 500;
            color: #40536d;
            font-size: 14px;
        }

        /* ================= BUTTONS ================= */

        .button-area {
            grid-column: 1 / -1;
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 5px;
        }

        .btn {
            border: none;
            border-radius: 10px;
            padding: 13px 28px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: #1769d2;
            color: white;
        }

        .btn-primary:hover {
            background: #0e55b3;
        }

        .btn-secondary {
            background: #e7eef7;
            color: #34465e;
        }

        .btn-secondary:hover {
            background: #d8e3ef;
        }

        /* ================= ERRORS ================= */

        .error {
            color: #dc3545;
            font-size: 13px;
            margin-top: 5px;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 850px) {

            .form-grid {
                grid-template-columns: 1fr;
            }

            .full-card {
                grid-column: auto;
            }

            .row {
                grid-template-columns: 1fr;
            }

            .button-area {
                grid-column: auto;
                flex-direction: column;
            }

            .btn {
                width: 100%;
                text-align: center;
            }

            .header {
                padding: 15px 20px;
            }

            .header-text h1 {
                font-size: 21px;
            }

            .container {
                width: 92%;
            }
        }
    </style>
</head>

<body>

<!-- ================= HEADER ================= -->

<header class="header">

    <div class="logo-box">
        🏢
    </div>

    <div class="header-text">
        <h1>K D Polytechnic T&P Portal</h1>
        <p>Company Registration</p>
    </div>

</header>


<!-- ================= MAIN ================= -->

<div class="container">

    <div class="page-title">
        <h2>Company Registration</h2>
        <p>Register your company and recruitment requirements with the K D Polytechnic Placement Cell.</p>
    </div>


    <form
        action="{{ url('/company-register') }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf


        <div class="form-grid">


                      <!-- ================= COMPANY REGISTRATION INFORMATION ================= -->

            <div class="card full-card">

                <div class="card-title">
                    <span class="card-icon">🏢</span>
                    Company Registration Information
                </div>


                <!-- Company ID -->
                <div class="row">

                    <div class="form-group">

                        <label for="company_id">
                            Company ID <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="company_id"
                            name="company_id"
                            placeholder="Enter company ID"
                            value="{{ old('company_id') }}"
                            required
                        >

                        @error('company_id')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    <!-- Company Name -->
                    <div class="form-group">

                        <label for="company_name">
                            Company Name <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="company_name"
                            name="company_name"
                            placeholder="Enter company name"
                            value="{{ old('company_name') }}"
                            required
                        >

                        @error('company_name')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>

                </div>


                <!-- Location + Type -->
                <div class="row">

                    <!-- Location -->
                    <div class="form-group">

                        <label for="location">
                            Location <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="location"
                            name="location"
                            placeholder="e.g. Ahmedabad, Gujarat"
                            value="{{ old('location') }}"
                            required
                        >

                        @error('location')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    <!-- Company Type -->
                    <div class="form-group">

                        <label for="type">
                            Company Type <span class="required">*</span>
                        </label>

                        <select id="type" name="type" required>

                            <option value="">Select Company Type</option>

                            <option value="IT"
                                {{ old('type') == 'IT' ? 'selected' : '' }}>
                                IT
                            </option>

                            <option value="Core"
                                {{ old('type') == 'Core' ? 'selected' : '' }}>
                                Core
                            </option>

                            <option value="Manufacturing"
                                {{ old('type') == 'Manufacturing' ? 'selected' : '' }}>
                                Manufacturing
                            </option>

                            <option value="Service"
                                {{ old('type') == 'Service' ? 'selected' : '' }}>
                                Service
                            </option>

                            <option value="Other"
                                {{ old('type') == 'Other' ? 'selected' : '' }}>
                                Other
                            </option>

                        </select>

                        @error('type')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>

                </div>


                <!-- HR Name + HR Contact -->
                <div class="row">

                    <!-- HR Name -->
                    <div class="form-group">

                        <label for="hr_name">
                            HR Name <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="hr_name"
                            name="hr_name"
                            placeholder="Enter HR name"
                            value="{{ old('hr_name') }}"
                            required
                        >

                        @error('hr_name')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    <!-- HR Contact -->
                    <div class="form-group">

                        <label for="hr_contact">
                            HR Contact <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="hr_contact"
                            name="hr_contact"
                            placeholder="Enter HR contact number"
                            value="{{ old('hr_contact') }}"
                            required
                        >

                        @error('hr_contact')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>

                </div>


                <!-- HR Email + Area -->
                <div class="row">

                    <!-- HR Email -->
                    <div class="form-group">

                        <label for="hr_email">
                            HR Email <span class="required">*</span>
                        </label>

                        <input
                            type="email"
                            id="hr_email"
                            name="hr_email"
                            placeholder="hr@company.com"
                            value="{{ old('hr_email') }}"
                            required
                        >

                        @error('hr_email')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    <!-- Area -->
                    <div class="form-group">

                        <label for="area">
                            Area <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="area"
                            name="area"
                            placeholder="Enter company area"
                            value="{{ old('area') }}"
                            required
                        >

                        @error('area')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>

                </div>

            </div>


            <!-- ================= BUTTONS ================= -->

            <div class="button-area">

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Register Company
                </button>

                <a
                    href="{{ url('/') }}"
                    class="btn btn-secondary"
                >
                    Cancel / Back
                </a>

            </div>