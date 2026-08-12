<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Company Registration | K D Polytechnic T&P Portal</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <style>

        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            min-height: 100%;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #e3f4ff;
            color: #102a43;
            overflow-x: hidden;
        }


        /* =========================================
           HEADER
        ========================================== */

        .portal-header {
            width: 100%;
            background: #101a2f;
            padding: 16px 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .portal-header .container {
            max-width: 1480px;
        }

        .college-logo {
            width: 56px;
            height: 56px;
            border-radius: 14px;
            background: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 25px;
            flex-shrink: 0;
        }

        .portal-title {
            color: white;
            font-size: 25px;
            font-weight: 700;
            margin: 0;
            line-height: 1.2;
        }

        .portal-subtitle {
            color: #aebbd0;
            font-size: 14px;
            margin: 3px 0 0;
        }


        /* =========================================
           MAIN
        ========================================== */

        .main-container {
            width: 100%;
            max-width: 1480px;
            margin: 28px auto;
            padding: 0 20px;
        }


        /* =========================================
           FORM GRID
        ========================================== */

        .form-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            gap: 26px;
            align-items: start;
            width: 100%;
        }

        .form-grid > div {
            min-width: 0;
        }


        /* =========================================
           CARD
        ========================================== */

        .custom-card,
        .declaration-card {
            width: 100%;
            background: #ffffff;
            border-radius: 18px;
            border: 1px solid #b8e0ff;
            box-shadow: 0 5px 18px rgba(35, 88, 120, 0.08);
        }

        .custom-card {
            padding: 25px 28px;
            margin-bottom: 26px;
        }

        .declaration-card {
            padding: 23px 28px;
            margin-top: 0;
        }


        /* =========================================
           SECTION TITLE
        ========================================== */

        .section-title {
            color: #2563eb;
            font-size: 20px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
            padding-bottom: 13px;
            margin-bottom: 22px;
            border-bottom: 2px solid #b9ddfa;
        }

        .section-title i {
            font-size: 19px;
        }


        /* =========================================
           LABEL
        ========================================== */

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #102a43;
            margin-bottom: 7px;
        }


        /* =========================================
           INPUTS
        ========================================== */

        .form-control,
        .form-select {
            min-height: 48px;
            width: 100%;
            border: 1px solid #8bd0ff;
            border-radius: 9px;
            font-size: 14px;
            padding: 10px 13px;
            color: #102a43;
            background: #ffffff;
        }

        .form-control::placeholder {
            color: #8a9aad;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.12);
        }

        textarea.form-control {
            min-height: 95px;
            resize: vertical;
        }


        /* =========================================
           INPUT GROUP - FIXED
        ========================================== */

        .input-group {
            width: 100%;
            display: flex;
            flex-wrap: nowrap;
            align-items: stretch;
        }

        .input-group > .input-group-text {
            flex: 0 0 48px;
            width: 48px;
            min-width: 48px;
            min-height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            border: 1px solid #8bd0ff;
            background: #f5fbff;
            color: #167dcc;
            border-radius: 9px 0 0 9px;
        }

        .input-group > .form-control,
        .input-group > .form-select {
            flex: 1 1 auto;
            width: 1%;
            min-width: 0;
            min-height: 48px;
            border: 1px solid #8bd0ff;
            border-left: 0;
            border-radius: 0;
        }

        .input-group > .form-control:focus,
        .input-group > .form-select:focus {
            border-color: #2563eb;
            box-shadow: none;
        }

        .input-group > .form-control:focus + .password-toggle {
            border-color: #2563eb;
        }


        /* =========================================
           PASSWORD BUTTON - FIXED
        ========================================== */

        .password-toggle {
            flex: 0 0 48px;
            width: 48px;
            min-width: 48px;
            min-height: 48px;
            padding: 0;
            border: 1px solid #8bd0ff !important;
            border-left: 0 !important;
            border-radius: 0 9px 9px 0 !important;
            background: #ffffff;
            color: #53657a;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .password-toggle:hover {
            background: #f0f7ff;
            color: #2563eb;
        }

        .password-toggle i {
            font-size: 15px;
        }


        /* =========================================
           SKILLS
        ========================================== */

        .skills-container {
            display: flex;
            flex-wrap: wrap;
            gap: 9px;
            margin-top: 8px;
            width: 100%;
        }

        .skill-checkbox {
            display: none;
        }

        .skill-label {
            cursor: pointer;
            border: 1px solid #65c5ff;
            color: #1669a5;
            background: #ffffff;
            border-radius: 25px;
            padding: 8px 15px;
            font-size: 13px;
            font-weight: 500;
            transition: 0.2s;
            user-select: none;
        }

        .skill-label:hover {
            background: #eef8ff;
        }

        .skill-checkbox:checked + .skill-label {
            background: #e4f4ff;
            border-color: #168bd3;
            color: #075b91;
            box-shadow: 0 2px 7px rgba(22, 139, 211, 0.12);
        }

        .selected-skills {
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
            margin-top: 14px;
        }

        .selected-skill {
            background: #e8f4ff;
            color: #156ba4;
            border: 1px solid #9bd6ff;
            border-radius: 20px;
            padding: 6px 10px 6px 12px;
            font-size: 12px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 7px;
        }

        .remove-skill {
            cursor: pointer;
            color: #dc3545;
            font-weight: bold;
            font-size: 15px;
            line-height: 1;
        }

        .remove-skill:hover {
            color: #a71d2a;
        }

        .skills-note {
            font-size: 12px;
            color: #718096;
            margin-top: 9px;
        }


        /* =========================================
           FILE UPLOAD
        ========================================== */

        .file-box {
            width: 100%;
            border: 1px solid #8bd0ff;
            border-radius: 10px;
            padding: 14px;
            background: #fbfdff;
            height: 100%;
        }

        .file-box .form-control {
            border: 1px solid #c5e6fa;
            padding: 8px;
            min-height: 44px;
        }

        .file-help {
            font-size: 11px;
            color: #718096;
            margin-top: 6px;
        }


        /* =========================================
           DECLARATION
        ========================================== */

        .declaration-label {
            font-size: 13px;
            color: #53657a;
            font-weight: 500;
            line-height: 1.7;
            cursor: pointer;
        }

        .form-check-input {
            border-color: #8bd0ff;
        }

        .form-check-input:checked {
            background-color: #2563eb;
            border-color: #2563eb;
        }


        /* =========================================
           BUTTONS
        ========================================== */

        .action-area {
            width: 100%;
            text-align: center;
            padding: 5px 0 35px;
        }

        .btn-reset {
            border: none;
            background: #6c757d;
            color: white;
            padding: 11px 25px;
            border-radius: 8px;
            font-weight: 600;
            margin-right: 8px;
        }

        .btn-reset:hover {
            background: #565e64;
            color: white;
        }

        .btn-register {
            border: none;
            background: #2563eb;
            color: white;
            padding: 11px 28px;
            border-radius: 8px;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(37, 99, 235, 0.22);
        }

        .btn-register:hover {
            background: #1d4ed8;
            color: white;
            transform: translateY(-1px);
        }


        /* =========================================
           ALERTS
        ========================================== */

        .alert {
            border-radius: 10px;
            font-size: 13px;
        }


        /* =========================================
           RESPONSIVE
        ========================================== */

        @media (max-width: 991px) {

            .form-grid {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .custom-card {
                margin-bottom: 22px;
            }

            .portal-title {
                font-size: 21px;
            }

            .college-logo {
                width: 50px;
                height: 50px;
            }
        }


        @media (max-width: 576px) {

            .main-container {
                padding: 0 12px;
                margin-top: 18px;
            }

            .portal-header {
                padding: 12px 0;
            }

            .portal-subtitle {
                font-size: 12px;
            }

            .portal-title {
                font-size: 17px;
            }

            .college-logo {
                width: 43px;
                height: 43px;
                font-size: 19px;
            }

            .custom-card,
            .declaration-card {
                padding: 20px 17px;
                border-radius: 14px;
            }

            .section-title {
                font-size: 17px;
            }

            .login-btn {
                padding: 7px 11px;
                font-size: 12px;
            }

            .password-toggle {
                flex-basis: 45px;
                width: 45px;
                min-width: 45px;
            }

            .input-group > .input-group-text {
                flex-basis: 45px;
                width: 45px;
                min-width: 45px;
            }
        }

    </style>
</head>


<body>


    <!-- =========================================
         HEADER
    ========================================== -->

    <header class="portal-header">

        <div class="container d-flex align-items-center justify-content-between">

            <div class="d-flex align-items-center gap-3">

                <div class="college-logo">
                    <i class="fa-solid fa-building"></i>
                </div>

                <div>

                    <h4 class="portal-title">
                        K D Polytechnic T&P Portal
                    </h4>

                    <p class="portal-subtitle">
                        Company Registration Form
                    </p>

                </div>

            </div>

        </div>

    </header>


    <!-- =========================================
         MAIN
    ========================================== -->

    <main class="main-container">


        <!-- SUCCESS MESSAGE -->

        @if (session('success'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">

                <i class="fa-solid fa-circle-check me-2"></i>

                <strong>Success!</strong>

                {{ session('success') }}

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert">
                </button>

            </div>

        @endif


        <!-- ERROR MESSAGE -->

        @if ($errors->any())

            <div class="alert alert-danger alert-dismissible fade show" role="alert">

                <i class="fa-solid fa-triangle-exclamation me-2"></i>

                <strong>Please correct the following errors:</strong>

                <ul class="mb-0 mt-2">

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert">
                </button>

            </div>

        @endif


        <!-- =========================================
             FORM
        ========================================== -->

        <form action="{{ url('/company/register') }}"
              method="POST"
              enctype="multipart/form-data"
              id="companyRegistrationForm">

            @csrf


            <div class="form-grid">


                <!-- =================================
                     LEFT COLUMN
                ================================= -->

                <div>


                    <!-- COMPANY INFORMATION -->

                    <div class="custom-card">

                        <div class="section-title">

                            <i class="fa-solid fa-building"></i>

                            Company Information

                        </div>


                        <div class="row g-3">


                            <!-- Company Name -->

                            <div class="col-12">

                                <label class="form-label">
                                    Company Name *
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="fa-solid fa-building"></i>
                                    </span>

                                    <input type="text"
                                           name="company_name"
                                           id="company_name"
                                           class="form-control"
                                           value="{{ old('company_name') }}"
                                           placeholder="e.g. TCS, Infosys, Microsoft"
                                           required>

                                </div>

                            </div>


                            <!-- Industry -->

                            <div class="col-md-6">

                                <label class="form-label">
                                    Industry Type *
                                </label>

                                <select name="industry_type"
                                        id="industry_type"
                                        class="form-select"
                                        required>

                                    <option value="">
                                        Select Industry
                                    </option>

                                    <option value="Information Technology / Software">
                                        Information Technology / Software
                                    </option>

                                    <option value="Manufacturing">
                                        Manufacturing
                                    </option>

                                    <option value="Electronics & Communication">
                                        Electronics & Communication
                                    </option>

                                    <option value="Civil & Infrastructure">
                                        Civil & Infrastructure
                                    </option>

                                    <option value="Automobile">
                                        Automobile
                                    </option>

                                    <option value="Electrical Engineering">
                                        Electrical Engineering
                                    </option>

                                    <option value="Banking & Finance">
                                        Banking & Finance
                                    </option>

                                    <option value="Healthcare & Life Sciences">
                                        Healthcare & Life Sciences
                                    </option>

                                    <option value="Education & EdTech">
                                        Education & EdTech
                                    </option>

                                    <option value="Other">
                                        Other
                                    </option>

                                </select>

                            </div>


                            <!-- Registration Number -->

                            <div class="col-md-6">

                                <label class="form-label">
                                    Registration Number *
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="fa-solid fa-id-card"></i>
                                    </span>

                                    <input type="text"
                                           name="registration_number"
                                           id="registration_number"
                                           class="form-control"
                                           value="{{ old('registration_number') }}"
                                           placeholder="CIN / UIN / Reg. No."
                                           required>

                                </div>

                            </div>


                            <!-- GST -->

                            <div class="col-md-6">

                                <label class="form-label">
                                    GST Number
                                    <span class="text-muted">
                                        (Optional)
                                    </span>
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="fa-solid fa-file-invoice"></i>
                                    </span>

                                    <input type="text"
                                           name="gst_number"
                                           id="gst_number"
                                           class="form-control"
                                           value="{{ old('gst_number') }}"
                                           placeholder="22AAAAA0000A1Z5">

                                </div>

                            </div>


                            <!-- Website -->

                            <div class="col-md-6">

                                <label class="form-label">
                                    Company Website *
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="fa-solid fa-globe"></i>
                                    </span>

                                    <input type="url"
                                           name="company_website"
                                           id="company_website"
                                           class="form-control"
                                           value="{{ old('company_website') }}"
                                           placeholder="https://www.company.com"
                                           required>

                                </div>

                            </div>


                            <!-- Year -->

                            <div class="col-md-6">

                                <label class="form-label">
                                    Year Established *
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="fa-solid fa-calendar"></i>
                                    </span>

                                    <input type="number"
                                           name="year_established"
                                           id="year_established"
                                           class="form-control"
                                           value="{{ old('year_established') }}"
                                           placeholder="YYYY"
                                           min="1800"
                                           max="{{ date('Y') }}"
                                           required>

                                </div>

                            </div>


                            <!-- Company Size -->

                            <div class="col-md-6">

                                <label class="form-label">
                                    Company Size
                                </label>

                                <select name="company_size"
                                        id="company_size"
                                        class="form-select">

                                    <option value="">
                                        Select Company Size
                                    </option>

                                    <option value="1–50 Employees">
                                        1–50 Employees
                                    </option>

                                    <option value="51–200 Employees">
                                        51–200 Employees
                                    </option>

                                    <option value="201–500 Employees">
                                        201–500 Employees
                                    </option>

                                    <option value="500+ Employees">
                                        500+ Employees
                                    </option>

                                </select>

                            </div>

                        </div>

                    </div>


                    <!-- HR CONTACT -->

                    <div class="custom-card">

                        <div class="section-title">

                            <i class="fa-solid fa-user-tie"></i>

                            HR Contact Details

                        </div>


                        <div class="row g-3">


                            <!-- HR Name -->

                            <div class="col-md-6">

                                <label class="form-label">
                                    HR Name *
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="fa-solid fa-user"></i>
                                    </span>

                                    <input type="text"
                                           name="hr_name"
                                           id="hr_name"
                                           class="form-control"
                                           value="{{ old('hr_name') }}"
                                           placeholder="e.g. Rajesh Kumar"
                                           required>

                                </div>

                            </div>


                            <!-- HR Designation -->

                            <div class="col-md-6">

                                <label class="form-label">
                                    HR Designation *
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="fa-solid fa-id-badge"></i>
                                    </span>

                                    <input type="text"
                                           name="hr_designation"
                                           id="hr_designation"
                                           class="form-control"
                                           value="{{ old('hr_designation') }}"
                                           placeholder="HR Manager / Recruiter"
                                           required>

                                </div>

                            </div>


                            <!-- Email -->

                            <div class="col-12">

                                <label class="form-label">
                                    Official Company Email *
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="fa-solid fa-envelope"></i>
                                    </span>

                                    <input type="email"
                                           name="hr_email"
                                           id="hr_email"
                                           class="form-control"
                                           value="{{ old('hr_email') }}"
                                           placeholder="hr@company.com"
                                           required>

                                </div>

                            </div>


                            <!-- PASSWORD -->

                            <div class="col-md-6">

                                <label class="form-label">
                                    Password *
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="fa-solid fa-lock"></i>
                                    </span>

                                    <input type="password"
                                           name="password"
                                           id="password"
                                           class="form-control"
                                           placeholder="Create Password"
                                           minlength="8"
                                           required>

                                    <button type="button"
                                            class="password-toggle"
                                            onclick="togglePassword('password', this)"
                                            aria-label="Show password">

                                        <i class="fa-solid fa-eye"></i>

                                    </button>

                                </div>

                            </div>


                            <!-- CONFIRM PASSWORD -->

                            <div class="col-md-6">

                                <label class="form-label">
                                    Confirm Password *
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="fa-solid fa-shield-halved"></i>
                                    </span>

                                    <input type="password"
                                           name="password_confirmation"
                                           id="password_confirmation"
                                           class="form-control"
                                           placeholder="Re-enter Password"
                                           minlength="8"
                                           required>

                                    <button type="button"
                                            class="password-toggle"
                                            onclick="togglePassword('password_confirmation', this)"
                                            aria-label="Show password">

                                        <i class="fa-solid fa-eye"></i>

                                    </button>

                                </div>

                            </div>


                            <!-- MOBILE -->

                            <div class="col-md-6">

                                <label class="form-label">
                                    HR Mobile Number *
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="fa-solid fa-mobile-screen"></i>
                                    </span>

                                    <input type="tel"
                                           name="hr_mobile"
                                           id="hr_mobile"
                                           class="form-control"
                                           value="{{ old('hr_mobile') }}"
                                           placeholder="10 Digit Mobile Number"
                                           maxlength="10"
                                           required>

                                </div>

                            </div>


                            <!-- ALTERNATE -->

                            <div class="col-md-6">

                                <label class="form-label">
                                    Alternate Contact
                                    <span class="text-muted">
                                        (Optional)
                                    </span>
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="fa-solid fa-phone"></i>
                                    </span>

                                    <input type="tel"
                                           name="alt_mobile"
                                           id="alt_mobile"
                                           class="form-control"
                                           value="{{ old('alt_mobile') }}"
                                           placeholder="Alternate Number">

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- COMPANY ADDRESS -->

                    <div class="custom-card">

                        <div class="section-title">

                            <i class="fa-solid fa-location-dot"></i>

                            Company Address

                        </div>


                        <div class="row g-3">


                            <div class="col-12">

                                <label class="form-label">
                                    Full Address *
                                </label>

                                <textarea name="address"
                                          id="address"
                                          class="form-control"
                                          rows="3"
                                          placeholder="Company street, building, area..."
                                          required>{{ old('address') }}</textarea>

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    City *
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="fa-solid fa-city"></i>
                                    </span>

                                    <input type="text"
                                           name="city"
                                           id="city"
                                           class="form-control"
                                           value="{{ old('city') }}"
                                           placeholder="Ahmedabad / Patan"
                                           required>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    State *
                                </label>

                                <input type="text"
                                       name="state"
                                       id="state"
                                       class="form-control"
                                       value="{{ old('state', 'Gujarat') }}"
                                       placeholder="Gujarat"
                                       required>

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    Country *
                                </label>

                                <input type="text"
                                       name="country"
                                       id="country"
                                       class="form-control"
                                       value="{{ old('country', 'India') }}"
                                       placeholder="India"
                                       required>

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    PIN Code *
                                </label>

                                <input type="text"
                                       name="pincode"
                                       id="pincode"
                                       class="form-control"
                                       value="{{ old('pincode') }}"
                                       placeholder="6 Digit PIN"
                                       maxlength="6"
                                       required>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- =================================
                     RIGHT COLUMN
                ================================= -->

                <div>


                    <!-- COMPANY PROFILE -->

                    <div class="custom-card">

                        <div class="section-title">

                            <i class="fa-solid fa-building-circle-check"></i>

                            Company Profile

                        </div>


                        <div class="row g-3">


                            <div class="col-12">

                                <label class="form-label">
                                    Company Type
                                </label>

                                <select name="company_type"
                                        id="company_type"
                                        class="form-select">

                                    <option value="">
                                        Select Company Type
                                    </option>

                                    <option value="Private Limited">
                                        Private Limited
                                    </option>

                                    <option value="Public Limited">
                                        Public Limited
                                    </option>

                                    <option value="Startup">
                                        Startup
                                    </option>

                                    <option value="MNC">
                                        MNC
                                    </option>

                                    <option value="Government">
                                        Government
                                    </option>

                                    <option value="Other">
                                        Other
                                    </option>

                                </select>

                            </div>


                            <div class="col-12">

                                <label class="form-label">
                                    Company Description
                                </label>

                                <textarea name="company_description"
                                          id="company_description"
                                          class="form-control"
                                          rows="5"
                                          placeholder="Briefly describe your company, products, services and work culture...">{{ old('company_description') }}</textarea>

                            </div>

                        </div>

                    </div>


                    <!-- REQUIRED SKILLS -->

                    <div class="custom-card">

                        <div class="section-title">

                            <i class="fa-solid fa-laptop-code"></i>

                            Required Skills

                        </div>


                        <label class="form-label">
                            Select Skills Required for Recruitment *
                        </label>


                        @php

                            $skills = [
                                'Java',
                                'Python',
                                'C',
                                'C++',
                                'PHP',
                                'Laravel',
                                'HTML',
                                'CSS',
                                'JavaScript',
                                'React.js',
                                'Angular',
                                'Vue.js',
                                'Node.js',
                                'Express.js',
                                'MySQL',
                                'MongoDB',
                                'SQL',
                                'Cloud Computing',
                                'Machine Learning',
                                'Cyber Security'
                            ];

                        @endphp


                        <div class="skills-container">

                            @foreach ($skills as $index => $skill)

                                <input type="checkbox"
                                       class="skill-checkbox"
                                       id="skill{{ $index }}"
                                       name="required_skills[]"
                                       value="{{ $skill }}"
                                       {{ in_array($skill, old('required_skills', [])) ? 'checked' : '' }}>

                                <label for="skill{{ $index }}"
                                       class="skill-label">

                                    {{ $skill }}

                                </label>

                            @endforeach

                        </div>


                        <div id="selectedSkills"
                             class="selected-skills">
                        </div>


                        <div class="skills-note">

                            <i class="fa-solid fa-circle-info me-1"></i>

                            Select one or more skills required by your company.

                        </div>

                    </div>


                    <!-- VERIFICATION DOCUMENTS -->

                    <div class="custom-card">

                        <div class="section-title">

                            <i class="fa-solid fa-file-arrow-up"></i>

                            Verification Documents

                        </div>


                        <div class="row g-3">


                            <!-- LOGO -->

                            <div class="col-12">

                                <div class="file-box">

                                    <label class="form-label">

                                        <i class="fa-solid fa-image me-1 text-primary"></i>

                                        Company Logo

                                        <span class="text-muted">
                                            (Optional)
                                        </span>

                                    </label>

                                    <input type="file"
                                           name="company_logo"
                                           id="company_logo"
                                           class="form-control"
                                           accept=".png,.jpg,.jpeg">

                                    <div class="file-help">
                                        Recommended: PNG or JPG image.
                                    </div>

                                </div>

                            </div>


                            <!-- REGISTRATION CERTIFICATE -->

                            <div class="col-md-6">

                                <div class="file-box">

                                    <label class="form-label">

                                        <i class="fa-solid fa-certificate me-1 text-primary"></i>

                                        Registration Certificate

                                    </label>

                                    <input type="file"
                                           name="registration_certificate"
                                           id="registration_certificate"
                                           class="form-control"
                                           accept=".pdf,.png,.jpg,.jpeg">

                                    <div class="file-help">
                                        CIN / Incorporation proof.
                                    </div>

                                </div>

                            </div>


                            <!-- GST CERTIFICATE -->

                            <div class="col-md-6">

                                <div class="file-box">

                                    <label class="form-label">

                                        <i class="fa-solid fa-file-invoice me-1 text-primary"></i>

                                        GST Certificate

                                        <span class="text-muted">
                                            (Optional)
                                        </span>

                                    </label>

                                    <input type="file"
                                           name="gst_certificate"
                                           id="gst_certificate"
                                           class="form-control"
                                           accept=".pdf,.png,.jpg,.jpeg">

                                    <div class="file-help">
                                        Official GST registration document.
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- DECLARATION -->

                    <div class="declaration-card">

                        <div class="section-title">

                            <i class="fa-solid fa-shield-halved"></i>

                            Company Declaration

                        </div>


                        <div class="form-check">

                            <input class="form-check-input"
                                   type="checkbox"
                                   name="declaration"
                                   id="declaration"
                                   value="1"
                                   required>

                            <label class="form-check-label declaration-label"
                                   for="declaration">

                                I hereby declare that all information provided
                                by our company is true and authentic. I agree
                                to participate in the training and placement
                                activities conducted by the institute.

                            </label>

                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================
                 ACTION BUTTONS
            ================================= -->

            <div class="action-area">

                <button type="reset"
                        class="btn-reset">

                    <i class="fa-solid fa-rotate-left me-1"></i>

                    Reset

                </button>


                <button type="submit"
                        class="btn-register">

                    <i class="fa-solid fa-building-circle-check me-1"></i>

                    Register Company

                </button>

            </div>


        </form>

    </main>


    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <script>


        /* =========================================
           PASSWORD SHOW / HIDE
        ========================================== */

        function togglePassword(id, button) {

            const input = document.getElementById(id);
            const icon = button.querySelector('i');

            if (input.type === "password") {

                input.type = "text";

                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");

            } else {

                input.type = "password";

                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");

            }

        }


        /* =========================================
           SELECTED SKILLS
        ========================================== */

        const skillCheckboxes =
            document.querySelectorAll('.skill-checkbox');

        const selectedSkillsContainer =
            document.getElementById('selectedSkills');


        function updateSelectedSkills() {

            selectedSkillsContainer.innerHTML = "";


            skillCheckboxes.forEach(function (checkbox) {

                if (checkbox.checked) {

                    const tag =
                        document.createElement('div');

                    tag.className = 'selected-skill';


                    const text =
                        document.createElement('span');

                    text.textContent = checkbox.value;


                    const remove =
                        document.createElement('span');

                    remove.className = 'remove-skill';

                    remove.innerHTML = '&times;';


                    remove.addEventListener('click', function () {

                        checkbox.checked = false;

                        updateSelectedSkills();

                    });


                    tag.appendChild(text);
                    tag.appendChild(remove);

                    selectedSkillsContainer.appendChild(tag);

                }

            });

        }


        skillCheckboxes.forEach(function (checkbox) {

            checkbox.addEventListener(
                'change',
                updateSelectedSkills
            );

        });


        updateSelectedSkills();


        /* =========================================
           MOBILE NUMBER
        ========================================== */

        const mobileInput =
            document.getElementById('hr_mobile');

        if (mobileInput) {

            mobileInput.addEventListener('input', function () {

                this.value =
                    this.value
                        .replace(/[^0-9]/g, '')
                        .slice(0, 10);

            });

        }


        /* =========================================
           ALTERNATE MOBILE
        ========================================== */

        const alternateMobile =
            document.getElementById('alt_mobile');

        if (alternateMobile) {

            alternateMobile.addEventListener('input', function () {

                this.value =
                    this.value
                        .replace(/[^0-9]/g, '')
                        .slice(0, 10);

            });

        }


        /* =========================================
           PIN CODE
        ========================================== */

        const pinInput =
            document.getElementById('pincode');

        if (pinInput) {

            pinInput.addEventListener('input', function () {

                this.value =
                    this.value
                        .replace(/[^0-9]/g, '')
                        .slice(0, 6);

            });

        }


        /* =========================================
           PASSWORD MATCH
        ========================================== */

        const form =
            document.getElementById('companyRegistrationForm');


        if (form) {

            form.addEventListener('submit', function (event) {

                const password =
                    document.getElementById('password').value;

                const confirmation =
                    document.getElementById('password_confirmation').value;


                if (password !== confirmation) {

                    event.preventDefault();

                    alert(
                        "Password and Confirm Password must match."
                    );

                    return false;

                }


                if (password.length < 8) {

                    event.preventDefault();

                    alert(
                        "Password must contain at least 8 characters."
                    );

                    return false;

                }

            });

        }

    </script>


</body>

</html>