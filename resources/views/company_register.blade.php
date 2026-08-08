<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Registration | K D Polytechnic T&P Portal</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Tom Select Bootstrap 5 Theme CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.bootstrap5.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Existing CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fe;
            color: #2b3674;
        }

        .registration-card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            background: #ffffff;
            overflow: hidden;
        }

        .header-banner {
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            color: #ffffff;
            padding: 35px 20px;
            text-align: center;
            position: relative;
        }

        .header-banner h2 {
            font-weight: 700;
            letter-spacing: -0.5px;
            margin-bottom: 6px;
        }

        .header-banner p {
            font-weight: 400;
            opacity: 0.9;
            font-size: 1.05rem;
            margin-bottom: 0;
        }

        .progress-wrapper {
            background: #ffffff;
            padding: 20px 30px 10px;
            border-bottom: 1px solid #e9ecef;
        }

        .section-header {
            display: flex;
            align-items: center;
            margin-bottom: 22px;
            padding-bottom: 10px;
            border-bottom: 2px solid #eef2f6;
        }

        .section-header h5 {
            font-weight: 600;
            color: #1b2559;
            margin: 0;
        }

        .section-header i {
            font-size: 1.25rem;
            color: #0d6efd;
            margin-right: 12px;
        }

        .form-label {
            font-weight: 500;
            font-size: 0.9rem;
            color: #485568;
            margin-bottom: 6px;
        }

        .form-control, .form-select {
            border-radius: 8px;
            padding: 10px 14px;
            border: 1px solid #dce0e5;
            font-size: 0.93rem;
            transition: all 0.2s ease-in-out;
        }

        .form-control:focus, .form-select:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.12);
        }

        /* Tom Select Compact Styling & Scrollable Options Dropdown */
        .ts-wrapper.multi .ts-control {
            border-radius: 8px !important;
            padding: 6px 12px !important;
            border: 1px solid #dce0e5 !important;
            font-size: 0.93rem !important;
            min-height: 45px;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 4px;
        }

        .ts-wrapper.multi.focus .ts-control {
            border-color: #0d6efd !important;
            box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.12) !important;
        }

        .ts-wrapper.multi .ts-control > div {
            background-color: #e7f1ff !important;
            color: #0d6efd !important;
            border: 1px solid #b6d4fe !important;
            border-radius: 50rem !important;
            padding: 4px 12px !important;
            font-weight: 500 !important;
            font-size: 0.85rem !important;
            display: inline-flex;
            align-items: center;
            margin: 2px !important;
        }

        .ts-wrapper.multi .ts-control > div .remove {
            border-left: 1px solid #b6d4fe !important;
            margin-left: 8px !important;
            padding-left: 8px !important;
            color: #0d6efd !important;
            opacity: 0.7;
            font-weight: bold;
            text-decoration: none;
        }

        .ts-wrapper.multi .ts-control > div .remove:hover {
            opacity: 1;
            color: #dc3545 !important;
        }

        .ts-dropdown {
            border-radius: 8px !important;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1) !important;
            border: 1px solid #dce0e5 !important;
            margin-top: 4px !important;
            max-height: 200px !important;
            overflow-y: auto !important;
        }

        .ts-dropdown .option {
            padding: 8px 14px !important;
            font-size: 0.9rem !important;
        }

        .ts-dropdown .option.active {
            background-color: #0d6efd !important;
            color: #ffffff !important;
        }

        .file-upload-box {
            border: 2px dashed #dce0e5;
            border-radius: 10px;
            padding: 15px;
            background-color: #fafbfc;
            transition: border-color 0.2s;
        }

        .file-upload-box:hover {
            border-color: #0d6efd;
        }

        .btn-register {
            background-color: #0d6efd;
            border-color: #0d6efd;
            padding: 12px 32px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.25s ease;
        }

        .btn-register:hover {
            background-color: #0b5ed7;
            border-color: #0a58ca;
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(13, 110, 253, 0.3);
        }

        .btn-reset {
            padding: 12px 28px;
            font-weight: 500;
            border-radius: 8px;
        }
    </style>
</head>
<body class="py-4 py-md-5">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">

                <!-- Main Card -->
                <div class="card registration-card">
                    
                    <!-- Header -->
                    <div class="header-banner">
                        <div class="mb-2">
                            <i class="fas fa-building-columns fa-2x"></i>
                        </div>
                        <h2>K D Polytechnic T&P Portal</h2>
                        <p>Company Registration Form</p>
                    </div>

                    <!-- Progress Bar -->
                    <div class="progress-wrapper">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="small fw-semibold text-muted">Form Progress</span>
                            <span class="small fw-bold text-primary" id="progressPercentage">0%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" 
                                 id="formProgressBar" 
                                 role="progressbar" 
                                 style="width: 0%;" 
                                 aria-valuenow="0" 
                                 aria-valuemin="0" 
                                 aria-valuemax="100"></div>
                        </div>
                    </div>

                    <!-- Form Body -->
                    <div class="card-body p-4 p-md-5">

                        <!-- Global Laravel Session Alerts -->
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                                <i class="fas fa-exclamation-triangle me-2"></i><strong>Please correct the errors below before submitting:</strong>
                                <ul class="mb-0 mt-2">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ url('/company/register') }}" method="POST" enctype="multipart/form-data" id="companyRegistrationForm" class="needs-validation" novalidate>
                            @csrf

                            <!-- SECTION 1: Company Information -->
                            <div class="section-block mb-5">
                                <div class="section-header">
                                    <i class="fas fa-building"></i>
                                    <h5>Section 1: Company Information</h5>
                                </div>
                                <div class="row g-3">
                                    <!-- Company Name -->
                                    <div class="col-md-6">
                                        <label for="company_name" class="form-label">Company Name <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="fas fa-briefcase text-muted"></i></span>
                                            <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name" name="company_name" value="{{ old('company_name') }}" placeholder="e.g. Acme Technologies Ltd." required>
                                            <div class="invalid-feedback">Please enter the company name.</div>
                                        </div>
                                        @error('company_name')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Industry Type -->
                                    <div class="col-md-6">
                                        <label for="industry_type" class="form-label">Industry Type <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="fas fa-industry text-muted"></i></span>
                                            <select class="form-select @error('industry_type') is-invalid @enderror" id="industry_type" name="industry_type" required>
                                                <option value="" disabled {{ old('industry_type') == '' ? 'selected' : '' }}>Select Industry Type</option>
                                                <option value="Information Technology / Software" {{ old('industry_type') == 'Information Technology / Software' ? 'selected' : '' }}>Information Technology / Software</option>
                                                <option value="Manufacturing" {{ old('industry_type') == 'Manufacturing' ? 'selected' : '' }}>Manufacturing</option>
                                                <option value="Electronics & Communication" {{ old('industry_type') == 'Electronics & Communication' ? 'selected' : '' }}>Electronics & Communication</option>
                                                <option value="Civil & Infrastructure" {{ old('industry_type') == 'Civil & Infrastructure' ? 'selected' : '' }}>Civil & Infrastructure</option>
                                                <option value="Automobile" {{ old('industry_type') == 'Automobile' ? 'selected' : '' }}>Automobile</option>
                                                <option value="Electrical Engineering" {{ old('industry_type') == 'Electrical Engineering' ? 'selected' : '' }}>Electrical Engineering</option>
                                                <option value="Chemical & Processing" {{ old('industry_type') == 'Chemical & Processing' ? 'selected' : '' }}>Chemical & Processing</option>
                                                <option value="Banking & Finance" {{ old('industry_type') == 'Banking & Finance' ? 'selected' : '' }}>Banking & Finance</option>
                                                <option value="Healthcare & Life Sciences" {{ old('industry_type') == 'Healthcare & Life Sciences' ? 'selected' : '' }}>Healthcare & Life Sciences</option>
                                                <option value="Education & EdTech" {{ old('industry_type') == 'Education & EdTech' ? 'selected' : '' }}>Education & EdTech</option>
                                                <option value="Other" {{ old('industry_type') == 'Other' ? 'selected' : '' }}>Other</option>
                                            </select>
                                            <div class="invalid-feedback">Please select an industry type.</div>
                                        </div>
                                        @error('industry_type')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Company Registration Number -->
                                    <div class="col-md-6">
                                        <label for="registration_number" class="form-label">Company Registration Number <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="fas fa-hashtag text-muted"></i></span>
                                            <input type="text" class="form-control @error('registration_number') is-invalid @enderror" id="registration_number" name="registration_number" value="{{ old('registration_number') }}" placeholder="CIN / UIN / Reg No." required>
                                            <div class="invalid-feedback">Please enter company registration number.</div>
                                        </div>
                                        @error('registration_number')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- GST Number (Optional) -->
                                    <div class="col-md-6">
                                        <label for="gst_number" class="form-label">GST Number <span class="text-muted fs-7">(Optional)</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="fas fa-file-invoice text-muted"></i></span>
                                            <input type="text" class="form-control @error('gst_number') is-invalid @enderror" id="gst_number" name="gst_number" value="{{ old('gst_number') }}" placeholder="22AAAAA0000A1Z5">
                                        </div>
                                        @error('gst_number')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Company Website -->
                                    <div class="col-md-6">
                                        <label for="company_website" class="form-label">Company Website <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="fas fa-globe text-muted"></i></span>
                                            <input type="url" class="form-control @error('company_website') is-invalid @enderror" id="company_website" name="company_website" value="{{ old('company_website') }}" placeholder="https://www.company.com" required>
                                            <div class="invalid-feedback">Please enter a valid website URL (e.g. https://example.com).</div>
                                        </div>
                                        @error('company_website')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Year Established -->
                                    <div class="col-md-3">
                                        <label for="year_established" class="form-label">Year Established <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="fas fa-calendar-alt text-muted"></i></span>
                                            <input type="number" min="1800" max="{{ date('Y') }}" class="form-control @error('year_established') is-invalid @enderror" id="year_established" name="year_established" value="{{ old('year_established') }}" placeholder="YYYY" required>
                                            <div class="invalid-feedback">Please enter a valid year.</div>
                                        </div>
                                        @error('year_established')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Company Size -->
                                    <div class="col-md-3">
                                        <label for="company_size" class="form-label">Company Size</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="fas fa-users text-muted"></i></span>
                                            <select class="form-select @error('company_size') is-invalid @enderror" id="company_size" name="company_size">
                                                <option value="" disabled {{ old('company_size') == '' ? 'selected' : '' }}>Select Size</option>
                                                <option value="1–50 Employees" {{ old('company_size') == '1–50 Employees' ? 'selected' : '' }}>1–50 Employees</option>
                                                <option value="51–200 Employees" {{ old('company_size') == '51–200 Employees' ? 'selected' : '' }}>51–200 Employees</option>
                                                <option value="201–500 Employees" {{ old('company_size') == '201–500 Employees' ? 'selected' : '' }}>201–500 Employees</option>
                                                <option value="500+ Employees" {{ old('company_size') == '500+ Employees' ? 'selected' : '' }}>500+ Employees</option>
                                            </select>
                                        </div>
                                        @error('company_size')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- SECTION 2: HR Contact Details -->
                            <div class="section-block mb-5">
                                <div class="section-header">
                                    <i class="fas fa-user-tie"></i>
                                    <h5>Section 2: HR Contact Details</h5>
                                </div>
                                <div class="row g-3">
                                    <!-- HR Name -->
                                    <div class="col-md-6">
                                        <label for="hr_name" class="form-label">HR Name <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="fas fa-user text-muted"></i></span>
                                            <input type="text" class="form-control @error('hr_name') is-invalid @enderror" id="hr_name" name="hr_name" value="{{ old('hr_name') }}" placeholder="e.g. Rajesh Kumar" required>
                                            <div class="invalid-feedback">Please enter HR contact name.</div>
                                        </div>
                                        @error('hr_name')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- HR Designation -->
                                    <div class="col-md-6">
                                        <label for="hr_designation" class="form-label">HR Designation <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="fas fa-id-badge text-muted"></i></span>
                                            <input type="text" class="form-control @error('hr_designation') is-invalid @enderror" id="hr_designation" name="hr_designation" value="{{ old('hr_designation') }}" placeholder="e.g. HR Manager / Campus Recruiter" required>
                                            <div class="invalid-feedback">Please enter HR designation.</div>
                                        </div>
                                        @error('hr_designation')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Official Company Email -->
                                    <div class="col-md-12">
                                        <label for="hr_email" class="form-label">Official Company Email <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="fas fa-envelope text-muted"></i></span>
                                            <input type="email" class="form-control @error('hr_email') is-invalid @enderror" id="hr_email" name="hr_email" value="{{ old('hr_email') }}" placeholder="hr@company.com" required>
                                            <div class="invalid-feedback" id="emailFeedback">Please enter a valid email address.</div>
                                        </div>
                                        @error('hr_email')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Password -->
                                    <div class="col-md-6">
                                        <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="fas fa-lock text-muted"></i></span>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" minlength="8" placeholder="Minimum 8 characters" required>
                                            <button class="btn btn-outline-secondary" type="button" onclick="togglePasswordVisibility('password', this)">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <div class="invalid-feedback" id="passwordFeedback">Password must be at least 8 characters.</div>
                                        </div>
                                        @error('password')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="col-md-6">
                                        <label for="password_confirmation" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="fas fa-shield-alt text-muted"></i></span>
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" minlength="8" placeholder="Re-enter password" required>
                                            <button class="btn btn-outline-secondary" type="button" onclick="togglePasswordVisibility('password_confirmation', this)">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <div class="invalid-feedback" id="confirmPasswordFeedback">Passwords do not match.</div>
                                        </div>
                                    </div>

                                    <!-- HR Mobile Number -->
                                    <div class="col-md-6">
                                        <label for="hr_mobile" class="form-label">HR Mobile Number <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="fas fa-phone text-muted"></i></span>
                                            <input type="tel" class="form-control @error('hr_mobile') is-invalid @enderror" id="hr_mobile" name="hr_mobile" value="{{ old('hr_mobile') }}" pattern="[0-9]{10}" maxlength="10" placeholder="10-digit mobile number" required>
                                            <div class="invalid-feedback" id="mobileFeedback">Mobile number must contain exactly 10 digits.</div>
                                        </div>
                                        @error('hr_mobile')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Alternate Contact Number -->
                                    <div class="col-md-6">
                                        <label for="alt_mobile" class="form-label">Alternate Contact Number <span class="text-muted fs-7">(Optional)</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="fas fa-phone-alt text-muted"></i></span>
                                            <input type="tel" class="form-control @error('alt_mobile') is-invalid @enderror" id="alt_mobile" name="alt_mobile" value="{{ old('alt_mobile') }}" placeholder="Landline or alt mobile">
                                        </div>
                                        @error('alt_mobile')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- SECTION 3: Company Address -->
                            <div class="section-block mb-5">
                                <div class="section-header">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <h5>Section 3: Company Address</h5>
                                </div>
                                <div class="row g-3">
                                    <!-- Address -->
                                    <div class="col-12">
                                        <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                                        <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="2" placeholder="Street, Building, Suite/Floor" required>{{ old('address') }}</textarea>
                                        <div class="invalid-feedback">Please enter the company address.</div>
                                        @error('address')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- City -->
                                    <div class="col-md-6 col-lg-3">
                                        <label for="city" class="form-label">City <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" value="{{ old('city') }}" placeholder="e.g. Patan / Ahmedabad" required>
                                        <div class="invalid-feedback">Please enter city.</div>
                                        @error('city')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- State -->
                                    <div class="col-md-6 col-lg-3">
                                        <label for="state" class="form-label">State <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('state') is-invalid @enderror" id="state" name="state" value="{{ old('state', 'Gujarat') }}" placeholder="e.g. Gujarat" required>
                                        <div class="invalid-feedback">Please enter state.</div>
                                        @error('state')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Country -->
                                    <div class="col-md-6 col-lg-3">
                                        <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" value="{{ old('country', 'India') }}" placeholder="e.g. India" required>
                                        <div class="invalid-feedback">Please enter country.</div>
                                        @error('country')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- PIN Code -->
                                    <div class="col-md-6 col-lg-3">
                                        <label for="pincode" class="form-label">PIN Code <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('pincode') is-invalid @enderror" id="pincode" name="pincode" value="{{ old('pincode') }}" pattern="[0-9]{6}" maxlength="6" placeholder="6-digit PIN" required>
                                        <div class="invalid-feedback" id="pinFeedback">PIN Code must contain exactly 6 digits.</div>
                                        @error('pincode')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- SECTION 4: Company Profile -->
                            <div class="section-block mb-5">
                                <div class="section-header">
                                    <i class="fas fa-building-flag"></i>
                                    <h5>Section 4: Company Profile</h5>
                                </div>
                                <div class="row g-3">
                                    <!-- Company Type -->
                                    <div class="col-md-6">
                                        <label for="company_type" class="form-label">Company Type</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="fas fa-layer-group text-muted"></i></span>
                                            <select class="form-select @error('company_type') is-invalid @enderror" id="company_type" name="company_type">
                                                <option value="" disabled {{ old('company_type') == '' ? 'selected' : '' }}>Select Company Type</option>
                                                <option value="Private Limited" {{ old('company_type') == 'Private Limited' ? 'selected' : '' }}>Private Limited</option>
                                                <option value="Public Limited" {{ old('company_type') == 'Public Limited' ? 'selected' : '' }}>Public Limited</option>
                                                <option value="Startup" {{ old('company_type') == 'Startup' ? 'selected' : '' }}>Startup</option>
                                                <option value="MNC" {{ old('company_type') == 'MNC' ? 'selected' : '' }}>MNC</option>
                                                <option value="Government" {{ old('company_type') == 'Government' ? 'selected' : '' }}>Government</option>
                                                <option value="Other" {{ old('company_type') == 'Other' ? 'selected' : '' }}>Other</option>
                                            </select>
                                        </div>
                                        @error('company_type')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Company Description -->
                                    <div class="col-12">
                                        <label for="company_description" class="form-label">Company Description</label>
                                        <textarea class="form-control @error('company_description') is-invalid @enderror" id="company_description" name="company_description" rows="4" placeholder="Brief overview of company business domain, products, services, and work culture...">{{ old('company_description') }}</textarea>
                                        @error('company_description')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- SECTION 5: Required Skills -->
                            <div class="section-block mb-5">
                                <div class="section-header">
                                    <i class="fas fa-laptop-code"></i>
                                    <h5>Section 5: Required Skills</h5>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="required_skills" class="form-label">Required Skills <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="fas fa-tags text-muted"></i></span>
                                        <select id="required_skills" name="required_skills[]" class="form-select @error('required_skills') is-invalid @enderror" multiple placeholder="Search and select required skills..." autocomplete="off">
                                            @php
                                                $skillsList = [
                                                    'Java', 'Python', 'C', 'C++', 'PHP', 'Laravel', 
                                                    'HTML', 'CSS', 'JavaScript', 'React.js', 'Angular', 
                                                    'Vue.js', 'Node.js', 'Express.js', 'MySQL', 'MongoDB', 
                                                    'SQL', 'Cloud Computing', 'Machine Learning', 'Cyber Security'
                                                ];
                                                $selectedSkills = old('required_skills', []);
                                            @endphp

                                            @foreach($skillsList as $skill)
                                                <option value="{{ $skill }}" {{ in_array($skill, $selectedSkills) ? 'selected' : '' }}>
                                                    {{ $skill }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-text text-muted">
                                        <i class="fas fa-info-circle me-1"></i>Type to search and select required skills. Click the <strong>&times;</strong> on any tag to remove it.
                                    </div>
                                    @error('required_skills')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- SECTION 6: Verification Documents -->
                            <div class="section-block mb-5">
                                <div class="section-header">
                                    <i class="fas fa-file-upload"></i>
                                    <h5>Section 6: Verification Documents</h5>
                                </div>
                                <div class="alert alert-light border small text-muted mb-4">
                                    <i class="fas fa-file-invoice me-2 text-primary"></i><strong>Accepted file formats:</strong> PDF, PNG, JPG, JPEG. (Max file size: 5MB per document)
                                </div>
                                
                                <div class="row g-3">
                                    <!-- Company Logo -->
                                    <div class="col-md-4">
                                        <div class="file-upload-box h-100">
                                            <label for="company_logo" class="form-label fw-semibold">
                                                <i class="fas fa-image me-1 text-primary"></i> Company Logo
                                            </label>
                                            <input type="file" class="form-control @error('company_logo') is-invalid @enderror" id="company_logo" name="company_logo" accept=".pdf,.png,.jpg,.jpeg">
                                            <span class="form-text text-muted d-block mt-1">Recommended PNG / JPG image.</span>
                                            @error('company_logo')
                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Company Registration Certificate -->
                                    <div class="col-md-4">
                                        <div class="file-upload-box h-100">
                                            <label for="registration_certificate" class="form-label fw-semibold">
                                                <i class="fas fa-certificate me-1 text-primary"></i> Registration Certificate
                                            </label>
                                            <input type="file" class="form-control @error('registration_certificate') is-invalid @enderror" id="registration_certificate" name="registration_certificate" accept=".pdf,.png,.jpg,.jpeg">
                                            <span class="form-text text-muted d-block mt-1">CIN / Incorporation proof.</span>
                                            @error('registration_certificate')
                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- GST Certificate (Optional) -->
                                    <div class="col-md-4">
                                        <div class="file-upload-box h-100">
                                            <label for="gst_certificate" class="form-label fw-semibold">
                                                <i class="fas fa-file-contract me-1 text-primary"></i> GST Certificate <span class="text-muted fw-normal">(Optional)</span>
                                            </label>
                                            <input type="file" class="form-control @error('gst_certificate') is-invalid @enderror" id="gst_certificate" name="gst_certificate" accept=".pdf,.png,.jpg,.jpeg">
                                            <span class="form-text text-muted d-block mt-1">Official GST Registration doc.</span>
                                            @error('gst_certificate')
                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SECTION 7: Company Declaration -->
                            <div class="section-block mb-4 p-4 rounded-3 bg-light border">
                                <div class="section-header border-0 pb-0 mb-3">
                                    <i class="fas fa-file-signature"></i>
                                    <h5>Section 7: Company Declaration</h5>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('declaration') is-invalid @enderror" type="checkbox" id="declaration" name="declaration" required {{ old('declaration') ? 'checked' : '' }}>
                                    <label class="form-check-label ms-2 text-dark" for="declaration">
                                        I hereby declare that all information provided by our company is true and authentic. <span class="text-danger">*</span>
                                    </label>
                                    <div class="invalid-feedback">You must agree to the declaration before submitting.</div>
                                </div>
                                @error('declaration')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Form Action Buttons -->
                            <div class="d-flex justify-content-end align-items-center gap-3 pt-3">
                                <button type="reset" class="btn btn-outline-secondary btn-reset" id="resetBtn">
                                    <i class="fas fa-undo me-2"></i>Reset
                                </button>
                                <button type="submit" class="btn btn-primary btn-register shadow-sm">
                                    <i class="fas fa-building-circle-check me-2"></i>Register Company
                                </button>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tom Select JS -->
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>

    <!-- Form Interactive & Validation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('companyRegistrationForm');
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('password_confirmation');
            const mobileInput = document.getElementById('hr_mobile');
            const pinInput = document.getElementById('pincode');
            const websiteInput = document.getElementById('company_website');
            const emailInput = document.getElementById('hr_email');
            const progressBar = document.getElementById('formProgressBar');
            const progressPercentage = document.getElementById('progressPercentage');

            // Initialize Tom Select for Required Skills multi-select dropdown with search, auto-close, & chip tags
            const skillsTomSelect = new TomSelect('#required_skills', {
                plugins: {
                    remove_button: {
                        title: 'Remove skill',
                    }
                },
                create: false,
                maxItems: null,
                placeholder: 'Search and select required skills...',
                persist: false,
                closeAfterSelect: true,
                onChange: function() {
                    updateProgress();
                }
            });

            // Toggle password visibility
            window.togglePasswordVisibility = function(inputId, btn) {
                const input = document.getElementById(inputId);
                const icon = btn.querySelector('i');
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            };

            // Progress bar calculation based on required inputs
            const trackableInputs = form.querySelectorAll('input[required], select[required], textarea[required]');
            function updateProgress() {
                let filledCount = 0;
                trackableInputs.forEach(input => {
                    if (input.type === 'checkbox') {
                        if (input.checked) filledCount++;
                    } else if (input.id === 'required_skills') {
                        if (skillsTomSelect.getValue().length > 0) filledCount++;
                    } else if (input.value.trim() !== '') {
                        filledCount++;
                    }
                });
                const percentage = Math.round((filledCount / trackableInputs.length) * 100);
                progressBar.style.width = percentage + '%';
                progressBar.setAttribute('aria-valuenow', percentage);
                progressPercentage.textContent = percentage + '%';
            }

            form.addEventListener('input', updateProgress);
            form.addEventListener('change', updateProgress);
            updateProgress();

            // Client-side Custom Validation logic
            form.addEventListener('submit', function (event) {
                let isValid = true;

                // Reset standard HTML5 custom states
                mobileInput.setCustomValidity('');
                pinInput.setCustomValidity('');
                passwordInput.setCustomValidity('');
                confirmPasswordInput.setCustomValidity('');
                websiteInput.setCustomValidity('');
                emailInput.setCustomValidity('');

                // Validate Mobile (exactly 10 digits)
                const mobileRegex = /^[0-9]{10}$/;
                if (!mobileRegex.test(mobileInput.value.trim())) {
                    mobileInput.setCustomValidity('Invalid mobile number');
                    isValid = false;
                }

                // Validate PIN Code (exactly 6 digits)
                const pinRegex = /^[0-9]{6}$/;
                if (!pinRegex.test(pinInput.value.trim())) {
                    pinInput.setCustomValidity('Invalid PIN code');
                    isValid = false;
                }

                // Validate Password Minimum 8 characters
                if (passwordInput.value.length < 8) {
                    passwordInput.setCustomValidity('Password too short');
                    isValid = false;
                }

                // Validate Password Confirmation Match
                if (passwordInput.value !== confirmPasswordInput.value) {
                    confirmPasswordInput.setCustomValidity('Passwords do not match');
                    isValid = false;
                }

                // Validate Website format
                if (websiteInput.value.trim() !== '') {
                    try {
                        const url = new URL(websiteInput.value.trim());
                        if (!['http:', 'https:'].includes(url.protocol)) {
                            websiteInput.setCustomValidity('Invalid URL protocol');
                            isValid = false;
                        }
                    } catch (_) {
                        websiteInput.setCustomValidity('Invalid URL');
                        isValid = false;
                    }
                }

                // Check form validity using Bootstrap styles
                if (!form.checkValidity() || !isValid) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            }, false);

            // Handle Reset button click
            document.getElementById('resetBtn').addEventListener('click', function() {
                form.classList.remove('was-validated');
                setTimeout(() => {
                    skillsTomSelect.clear();
                    updateProgress();
                }, 50);
            });
        });
    </script>

</body>
</html>