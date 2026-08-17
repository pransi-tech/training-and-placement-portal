<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration | Training & Placement Portal</title>

   <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS (Laravel Asset Helper) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Header Branding -->
    <header class="portal-header sticky-top">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-3">
                <div class="college-logo">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <div>
                    <h4 class="fw-bold mb-0 text-white">Training & Placement Portal</h4>
                    <p class="subtitle mb-0">Student Registration Form</p>
                </div>
            </div>
            <div>
                <a href="login.html" class="btn btn-outline-light btn-sm fw-semibold"><i class="fa-solid fa-right-to-bracket me-1"></i> Login</a>
            </div>
        </div>
    </header>

    <main class="container my-4">
        <!-- Success Alert Message -->
        <div id="successAlert" class="alert alert-success alert-dismissible fade show d-none" role="alert">
            <i class="fa-solid fa-circle-check me-2"></i> <strong>Registration Successful!</strong> Your placement profile has been registered. Redirecting...
        </div>

        <!-- Completion Progress Bar -->
        <div class="card p-3 shadow-sm mb-4 rounded-4 border-0">
            <div class="d-flex justify-content-between align-items-center mb-1">
                <span class="fw-semibold text-secondary small">Profile Completion Status</span>
                <span id="progressText" class="fw-bold text-primary small">0%</span>
            </div>
            <div class="progress" style="height: 8px;">
                <div id="progressBar" class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 0%;"></div>
            </div>
        </div>

        <!-- Registration Form Start -->
        <form id="registrationForm" novalidate enctype="multipart/form-data">
            <div class="row g-4">
                
                <!-- LEFT COLUMN -->
                <div class="col-lg-6">
                    
                    <!-- Personal Details -->
                    <div class="custom-card">
                        <div class="section-title">
                            <i class="fa-solid fa-user"></i> Personal Information
                        </div>
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Full Name *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-signature"></i></span>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="John Doe" required>
                                </div>
                                <div class="invalid-feedback">Only alphabets allowed.</div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Enrollment No. *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-id-card"></i></span>
                                    <input type="text" name="enrollment_no" id="enrollment_no" class="form-control" placeholder="EN2026101" required>
                                </div>
                                <div class="invalid-feedback">Enrollment number is required.</div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Date of Birth (DOB) *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                                    <input type="date" name="dob" id="dob" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Profile Picture (Optional)</label>
                                <input type="file" name="profile_pic" id="profile_pic" class="form-control" accept="image/*">
                            </div>
                        </div>
                    </div>

                    <!-- Contact Details -->
                    <div class="custom-card">
                        <div class="section-title">
                            <i class="fa-solid fa-phone"></i> Contact Details
                        </div>
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Email Address *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="student@college.edu" required>
                                </div>
                                <div class="invalid-feedback">Please enter a valid email.</div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Mobile No. *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-mobile-screen"></i></span>
                                    <input type="tel" name="mobile_no" id="mobile_no" class="form-control" placeholder="10 Digits" required>
                                </div>
                                <div class="invalid-feedback">Must be exactly 10 digits.</div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">City *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-city"></i></span>
                                    <input type="text" name="city" id="city" class="form-control" placeholder="Surat" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Full Address *</label>
                                <textarea name="address" id="address" class="form-control" rows="2" placeholder="Residential Address..." required></textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">LinkedIn ID (Optional)</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-brands fa-linkedin text-primary"></i></span>
                                    <input type="url" name="linkedin_id" id="linkedin_id" class="form-control" placeholder="https://linkedin.com/in/username">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- RIGHT COLUMN -->
                <div class="col-lg-6">
                    
                    <!-- Academic Information -->
                    <div class="custom-card">
                        <div class="section-title">
                            <i class="fa-solid fa-graduation-cap"></i> Academic Record
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Branch *</label>
                                <select name="branch" id="branch" class="form-select" required>
                                    <option value="">Select Branch</option>
                                    <option value="Computer Engineering">Computer Engineering</option>
                                    <option value="Information Technology">Information Technology</option>
                                    <option value="Electronics & Comm">Electronics & Comm</option>
                                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Semester *</label>
                                <select name="semester" id="semester" class="form-select" required>
                                    <option value="">Select Sem</option>
                                    <option value="Semester 5" selected>Semester 5</option>
                                    <option value="Semester 6">Semester 6</option>
                                    <option value="Semester 7">Semester 7</option>
                                    <option value="Semester 8">Semester 8</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">SSC Percentage (%) *</label>
                                <input type="number" step="0.01" min="0" max="100" name="ssc_percentage" id="ssc_percentage" class="form-control" placeholder="85.50" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">HSC Percentage (%)</label>
                                <input type="number" step="0.01" min="0" max="100" name="hsc_percentage" id="hsc_percentage" class="form-control" placeholder="Optional">
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Diploma CPI *</label>
                                <input type="number" step="0.01" min="0" max="10" name="diploma_cpi" id="diploma_cpi" class="form-control" placeholder="8.50" required>
                                <div class="invalid-feedback">CPI must be between 0 and 10.</div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Active Backlogs *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-triangle-exclamation"></i></span>
                                    <input type="number" name="backlog" id="backlog" class="form-control" min="0" value="0" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Skills & Expertise -->
                    <div class="custom-card">
                        <div class="section-title">
                            <i class="fa-solid fa-laptop-code"></i> Area of Expertise
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Select Primary Expertise / Skills *</label>
                            <div class="d-flex flex-wrap gap-2 mt-1">
                                <input type="checkbox" id="e1" class="skill-checkbox" value="Web Development"><label for="e1" class="skill-label"><i class="fa-solid fa-code text-primary me-1"></i> Web Development</label>
                                <input type="checkbox" id="e2" class="skill-checkbox" value="Python Development"><label for="e2" class="skill-label"><i class="fa-brands fa-python text-warning me-1"></i> Python</label>
                                <input type="checkbox" id="e3" class="skill-checkbox" value="Java Programming"><label for="e3" class="skill-label"><i class="fa-brands fa-java text-danger me-1"></i> Java</label>
                                <input type="checkbox" id="e4" class="skill-checkbox" value="Database / SQL"><label for="e4" class="skill-label"><i class="fa-solid fa-database text-info me-1"></i> SQL</label>
                                <input type="checkbox" id="e5" class="skill-checkbox" value="Laravel Framework"><label for="e5" class="skill-label"><i class="fa-brands fa-laravel text-danger me-1"></i> Laravel</label>
                            </div>
                            <input type="hidden" name="area_of_expertise" id="area_of_expertise">
                        </div>
                    </div>

                    <!-- Consent -->
                    <div class="custom-card">
                        <div class="section-title">
                            <i class="fa-solid fa-shield-halved"></i> Student Consent
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="consent" id="consent" value="1" required>
                            <label class="form-check-label small text-secondary fw-semibold" for="consent">
                                ☑ I hereby declare that all the provided details (CPI, Percentage, Backlogs) are accurate and I consent to participate in campus placement drives.
                            </label>
                            <div class="invalid-feedback">You must give consent to proceed.</div>
                        </div>
                    </div>

                </div>

                <!-- Action Buttons -->
                <div class="col-12 text-center my-4">
                    <button type="reset" class="btn btn-secondary-custom me-2" onclick="resetProgress()"><i class="fa-solid fa-rotate-left me-1"></i> Reset</button>
                    <button type="submit" class="btn btn-primary-custom shadow"><i class="fa-solid fa-paper-plane me-1"></i> Submit Registration</button>
                </div>

            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>