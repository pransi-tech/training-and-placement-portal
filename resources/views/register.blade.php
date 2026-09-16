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
    <style>
        .custom-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
        }
        .section-title {
            font-size: 1.05rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 1.2rem;
            display: flex;
            align-items: center;
            gap: 8px;
            border-bottom: 2px solid #f1f5f9;
            padding-bottom: 0.6rem;
        }
        .skill-tag {
            display: inline-flex;
            align-items: center;
            background: #f8fafc;
            border: 1.5px solid #cbd5e1;
            padding: 6px 14px;
            border-radius: 30px;
            font-size: 0.88rem;
            font-weight: 500;
            color: #334155;
            cursor: pointer;
            transition: all 0.2s ease;
            user-select: none;
        }
        .skill-tag:hover {
            border-color: #3b82f6;
            background: #eff6ff;
        }
        .skill-tag.active {
            background: #2563eb;
            color: #ffffff;
            border-color: #2563eb;
            box-shadow: 0 4px 10px rgba(37, 99, 235, 0.25);
        }
        .skill-tag .remove-btn {
            margin-left: 8px;
            font-size: 0.95rem;
            color: #94a3b8;
            transition: color 0.2s ease;
            cursor: pointer;
            padding: 0 2px;
        }
        .skill-tag.active .remove-btn {
            color: rgba(255, 255, 255, 0.85);
        }
        .skill-tag .remove-btn:hover {
            color: #ef4444 !important;
        }
        .password-notice-box {
            background: #fef2f2;
            border: 1.5px dashed #f87171;
            border-radius: 12px;
            padding: 12px;
        }
        .btn-view-more {
            background: transparent;
            border: none;
            color: #2563eb;
            font-weight: 600;
            font-size: 0.85rem;
            cursor: pointer;
            padding: 0;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Header Branding -->
    <header class="portal-header sticky-top bg-dark py-3">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-3">
                <div class="college-logo text-white fs-3">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <div>
                    <h4 class="fw-bold mb-0 text-white">Training & Placement Portal</h4>
                    <p class="subtitle mb-0 text-white-50 small">K. D. Polytechnic - Student Portal</p>
                </div>
            </div>
            <div>
                <a href="{{ url('/login') }}" class="btn btn-outline-light btn-sm fw-semibold"><i class="fa-solid fa-right-to-bracket me-1"></i> Login</a>
            </div>
        </div>
    </header>

    <main class="container my-4">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <!-- Registration Form Start -->
        <form id="registrationForm" action="{{ url('/student/register') }}" method="POST" enctype="multipart/form-data" onsubmit="return handleFormSubmit(event)">
            @csrf
            <div class="row g-4">
                
                <!-- LEFT COLUMN -->
                <div class="col-lg-6">
                    
                    <!-- Personal Details -->
                    <div class="custom-card">
                        <div class="section-title">
                            <i class="fa-solid fa-user text-primary"></i> Personal Information
                        </div>
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label fw-semibold">Full Name *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-signature"></i></span>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="John Doe" value="{{ old('name') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Enrollment No. *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-id-card"></i></span>
                                    <input type="text" name="enrollment_no" id="enrollment_no" class="form-control" placeholder="226040307001" oninput="checkEnrollmentSecurity(this.value)" required>
                                </div>
                                <small class="text-muted" style="font-size: 0.72rem;">Type to check account security status</small>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Date of Birth (DOB) *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                                    <input type="date" name="dob" id="dob" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold">Profile Picture (Optional)</label>
                                <input type="file" name="profile_pic" id="profile_pic" class="form-control" accept="image/*">
                            </div>
                        </div>
                    </div>

                    <!-- Password Security Setup -->
                    <div class="custom-card">
                        <div class="section-title">
                            <i class="fa-solid fa-key text-primary"></i> Portal Security & Password Setup
                        </div>

                        <!-- First Time Password View -->
                        <div id="firstTimePasswordBox">
                            <label class="form-label fw-semibold">Default Portal Password</label>
                            <div class="input-group mb-2">
                                <span class="input-group-text"><i class="fa-solid fa-lock text-primary"></i></span>
                                <input type="text" class="form-control fw-bold bg-light text-primary" id="initialPasswordDisplay" value="KDP123" readonly>
                                <span class="input-group-text bg-light text-success fw-semibold"><i class="fa-solid fa-circle-check me-1"></i> Default Active</span>
                            </div>
                            <small class="text-muted d-block">
                                <i class="fa-solid fa-circle-info text-primary me-1"></i> First time password for every student is <strong>KDP123</strong>. When you register the second time, you will be forced to change it.
                            </small>
                        </div>

                        <!-- Second Time Password View (Forced Change) -->
                        <div id="secondTimePasswordBox" style="display: none;">
                            <div class="password-notice-box mb-3">
                                <div class="d-flex align-items-center gap-2 text-danger fw-bold mb-1">
                                    <i class="fa-solid fa-triangle-exclamation"></i> Action Required: Change Default Password
                                </div>
                                <small class="text-dark">Enrollment is already recorded with default password <strong>KDP123</strong>. Please create a new personal password to continue.</small>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">New Password *</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa-solid fa-lock text-danger"></i></span>
                                        <input type="password" name="new_password" id="new_password" class="form-control" placeholder="Enter new password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Confirm New Password *</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa-solid fa-shield-halved text-danger"></i></span>
                                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Re-enter password">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="password" id="final_password" value="KDP123">
                    </div>

                    <!-- Contact Details -->
                    <div class="custom-card">
                        <div class="section-title">
                            <i class="fa-solid fa-phone text-primary"></i> Contact Details
                        </div>
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label fw-semibold">Email Address *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="student@college.edu" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Mobile No. *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-mobile-screen"></i></span>
                                    <input type="tel" name="mobile_no" id="mobile_no" class="form-control" placeholder="10 Digits" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">City *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-city"></i></span>
                                    <input type="text" name="city" id="city" class="form-control" placeholder="Patan" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold">Full Address *</label>
                                <textarea name="address" id="address" class="form-control" rows="2" placeholder="Residential Address..." required></textarea>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- RIGHT COLUMN -->
                <div class="col-lg-6">
                    
                    <!-- Academic Information -->
                    <div class="custom-card">
                        <div class="section-title">
                            <i class="fa-solid fa-graduation-cap text-primary"></i> Academic Record (4 Core Branches)
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Branch *</label>
                                <select name="branch" id="branch" class="form-select" required>
                                    <option value="">Select Branch</option>
                                    <option value="Computer Engineering">Computer Engineering</option>
                                    <option value="Civil Engineering">Civil Engineering</option>
                                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                                    <option value="Electrical Engineering">Electrical Engineering</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Semester *</label>
                                <select name="semester" id="semester" class="form-select" required>
                                    <option value="Semester 5">Semester 5</option>
                                    <option value="Semester 6" selected>Semester 6</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label fw-semibold">SSC Percentage (%) *</label>
                                <input type="number" step="0.01" min="0" max="100" name="ssc_percentage" id="ssc_percentage" class="form-control" placeholder="85.50" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Diploma CPI *</label>
                                <input type="number" step="0.01" min="0" max="10" name="diploma_cpi" id="diploma_cpi" class="form-control" placeholder="8.50" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Active Backlogs *</label>
                                <input type="number" name="backlog" id="backlog" class="form-control" min="0" value="0" required>
                            </div>
                        </div>
                    </div>

                    <!-- Area of Expertise (Fixed 6 Primary Skills + View More Mode) -->
                    <div class="custom-card">
                        <div class="section-title">
                            <i class="fa-solid fa-laptop-code text-primary"></i> Area of Expertise
                        </div>
                        <div class="mb-2">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <label class="form-label fw-semibold mb-0">Select or Add Skills *</label>
                                <button type="button" class="btn-view-more" id="viewMoreSkillsBtn" onclick="toggleExtraSkills()">
                                    View More Skills (+)
                                </button>
                            </div>
                            
                            <!-- Skills Container -->
                            <div class="d-flex flex-wrap gap-2 mt-1 mb-3" id="skillsContainer">
                                
                                <!-- 6 Primary Starting Skills (Clean View) -->
                                <div class="skill-tag active" data-value="Web Development" data-icon="fa-code text-primary">
                                    <span><i class="fa-solid fa-code text-primary me-1"></i> Web Development</span>
                                    <span class="remove-btn" title="Remove">&times;</span>
                                </div>
                                <div class="skill-tag" data-value="Python" data-icon="fa-python text-warning brands">
                                    <span><i class="fa-brands fa-python text-warning me-1"></i> Python</span>
                                    <span class="remove-btn" title="Remove">&times;</span>
                                </div>
                                <div class="skill-tag" data-value="Java" data-icon="fa-java text-danger brands">
                                    <span><i class="fa-brands fa-java text-danger me-1"></i> Java</span>
                                    <span class="remove-btn" title="Remove">&times;</span>
                                </div>
                                <div class="skill-tag" data-value="SQL" data-icon="fa-database text-info">
                                    <span><i class="fa-solid fa-database text-info me-1"></i> SQL</span>
                                    <span class="remove-btn" title="Remove">&times;</span>
                                </div>
                                <div class="skill-tag" data-value="Laravel" data-icon="fa-laravel text-danger brands">
                                    <span><i class="fa-brands fa-laravel text-danger me-1"></i> Laravel</span>
                                    <span class="remove-btn" title="Remove">&times;</span>
                                </div>
                                <div class="skill-tag" data-value="Cloud Computing" data-icon="fa-cloud text-primary">
                                    <span><i class="fa-solid fa-cloud text-primary me-1"></i> Cloud Computing</span>
                                    <span class="remove-btn" title="Remove">&times;</span>
                                </div>

                                <!-- Extra Skills (Hidden by default, visible on View More) -->
                                <div class="skill-tag extra-skill d-none" data-value="React JS" data-icon="fa-react text-info brands">
                                    <span><i class="fa-brands fa-react text-info me-1"></i> React JS</span>
                                    <span class="remove-btn" title="Remove">&times;</span>
                                </div>
                                <div class="skill-tag extra-skill d-none" data-value="Flutter & App Dev" data-icon="fa-mobile-screen-button text-primary">
                                    <span><i class="fa-solid fa-mobile-screen-button text-primary me-1"></i> Flutter & App Dev</span>
                                    <span class="remove-btn" title="Remove">&times;</span>
                                </div>
                                <div class="skill-tag extra-skill d-none" data-value="AI & Machine Learning" data-icon="fa-brain text-purple">
                                    <span><i class="fa-solid fa-brain text-purple me-1"></i> AI & ML</span>
                                    <span class="remove-btn" title="Remove">&times;</span>
                                </div>
                                <div class="skill-tag extra-skill d-none" data-value="Cyber Security" data-icon="fa-shield-virus text-danger">
                                    <span><i class="fa-solid fa-shield-virus text-danger me-1"></i> Cyber Security</span>
                                    <span class="remove-btn" title="Remove">&times;</span>
                                </div>
                                <div class="skill-tag extra-skill d-none" data-value="AutoCAD / Design" data-icon="fa-compass-drafting text-warning">
                                    <span><i class="fa-solid fa-compass-drafting text-warning me-1"></i> AutoCAD / Design</span>
                                    <span class="remove-btn" title="Remove">&times;</span>
                                </div>
                                <div class="skill-tag extra-skill d-none" data-value="DevOps" data-icon="fa-gears text-secondary">
                                    <span><i class="fa-solid fa-gears text-secondary me-1"></i> DevOps</span>
                                    <span class="remove-btn" title="Remove">&times;</span>
                                </div>
                            </div>

                            <!-- Add Custom Skill Input with Auto-Correction Datalist -->
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-plus text-primary"></i></span>
                                <input type="text" id="newSkillInput" list="verifiedSkillsList" class="form-control" placeholder="Type skill (e.g. AI, React, Docker, AutoCAD)...">
                                <datalist id="verifiedSkillsList">
                                    <option value="AI & Machine Learning">
                                    <option value="React JS">
                                    <option value="Flutter & App Dev">
                                    <option value="Cyber Security">
                                    <option value="Data Analytics">
                                    <option value="Docker & Kubernetes">
                                    <option value="Node.js & Express">
                                    <option value="AutoCAD / Design">
                                    <option value="PLC & Automation">
                                    <option value="C++ Programming">
                                    <option value="DevOps & CI/CD">
                                </datalist>
                                <button type="button" class="btn btn-primary fw-semibold" id="addSkillBtn" onclick="addNewSkillWithAutoCorrect()">
                                    <i class="fa-solid fa-plus me-1"></i> Add Skill
                                </button>
                            </div>
                            <small id="skillErrorMsg" class="text-danger d-none mt-1 fw-semibold"></small>

                            <!-- Hidden Sync Input -->
                            <input type="hidden" name="area_of_expertise" id="area_of_expertise" value="Web Development">
                        </div>
                    </div>

                    <!-- Consent -->
                    <div class="custom-card">
                        <div class="section-title">
                            <i class="fa-solid fa-shield-halved text-primary"></i> Student Consent
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="consent" id="consent" value="1" required>
                            <label class="form-check-label small text-secondary fw-semibold" for="consent">
                                I declare that all entered academic information is correct and I accept KDP Training & Placement portal policies.
                            </label>
                        </div>
                    </div>

                </div>

                <!-- Action Buttons -->
                <div class="col-12 text-center my-3">
                    <button type="reset" class="btn btn-light border px-4 py-2 me-2 fw-semibold">Reset</button>
                    <button type="submit" class="btn btn-primary px-5 py-2 fw-bold shadow-sm" id="submitBtn">Submit Registration</button>
                </div>

            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Verified Dictionary for Auto-Correction & Icons
        const verifiedSkillsDict = {
            'ai': { name: 'AI & Machine Learning', icon: 'fa-brain text-purple' },
            'ml': { name: 'AI & Machine Learning', icon: 'fa-brain text-purple' },
            'artificial intelligence': { name: 'AI & Machine Learning', icon: 'fa-brain text-purple' },
            'react': { name: 'React JS', icon: 'fa-react text-info brands' },
            'reactjs': { name: 'React JS', icon: 'fa-react text-info brands' },
            'flutter': { name: 'Flutter & App Dev', icon: 'fa-mobile-screen-button text-primary' },
            'app dev': { name: 'Flutter & App Dev', icon: 'fa-mobile-screen-button text-primary' },
            'cyber': { name: 'Cyber Security', icon: 'fa-shield-virus text-danger' },
            'security': { name: 'Cyber Security', icon: 'fa-shield-virus text-danger' },
            'docker': { name: 'Docker & Kubernetes', icon: 'fa-docker text-primary brands' },
            'autocad': { name: 'AutoCAD / Design', icon: 'fa-compass-drafting text-warning' },
            'cad': { name: 'AutoCAD / Design', icon: 'fa-compass-drafting text-warning' },
            'node': { name: 'Node.js & Express', icon: 'fa-node-js text-success brands' },
            'nodejs': { name: 'Node.js & Express', icon: 'fa-node-js text-success brands' },
            'c++': { name: 'C++ Programming', icon: 'fa-code text-primary' },
            'cpp': { name: 'C++ Programming', icon: 'fa-code text-primary' },
            'devops': { name: 'DevOps & CI/CD', icon: 'fa-gears text-secondary' },
            'data': { name: 'Data Analytics', icon: 'fa-chart-line text-success' },
            'plc': { name: 'PLC & Automation', icon: 'fa-bolt text-warning' }
        };

        // View More / View Less Toggle
        let extraSkillsShown = false;
        function toggleExtraSkills() {
            const extras = document.querySelectorAll('.extra-skill');
            const btn = document.getElementById('viewMoreSkillsBtn');
            extraSkillsShown = !extraSkillsShown;

            extras.forEach(el => {
                if (extraSkillsShown) {
                    el.classList.remove('d-none');
                } else {
                    el.classList.add('d-none');
                }
            });

            btn.innerText = extraSkillsShown ? "View Less Skills (-)" : "View More Skills (+)";
        }

        // Add Skill with Auto-Correction and Validation
        function addNewSkillWithAutoCorrect() {
            const input = document.getElementById('newSkillInput');
            const errorMsg = document.getElementById('skillErrorMsg');
            let rawInput = input.value.trim().toLowerCase();

            errorMsg.classList.add('d-none');

            // Block gibberish / empty inputs under 2 chars
            if (!rawInput || rawInput.length < 2) {
                errorMsg.innerText = "Please enter a valid skill name.";
                errorMsg.classList.remove('d-none');
                return;
            }

            // Auto-correct matching
            let resolvedName = '';
            let resolvedIcon = 'fa-tag text-primary';

            if (verifiedSkillsDict[rawInput]) {
                resolvedName = verifiedSkillsDict[rawInput].name;
                resolvedIcon = verifiedSkillsDict[rawInput].icon;
            } else {
                // Check if matches datalist options
                const options = Array.from(document.querySelectorAll('#verifiedSkillsList option')).map(o => o.value);
                const matchedOption = options.find(opt => opt.toLowerCase().includes(rawInput));

                if (matchedOption) {
                    resolvedName = matchedOption;
                    resolvedIcon = 'fa-certificate text-primary';
                } else {
                    // Block random typing like "pra", "asdf"
                    errorMsg.innerText = `Skill "${input.value}" not recognized. Select from suggestions (e.g. AI, React, Docker).`;
                    errorMsg.classList.remove('d-none');
                    return;
                }
            }

            // Check if already exists in container
            let alreadyExists = false;
            document.querySelectorAll('#skillsContainer .skill-tag').forEach(tag => {
                if (tag.getAttribute('data-value').toLowerCase() === resolvedName.toLowerCase()) {
                    alreadyExists = true;
                    tag.classList.add('active');
                    tag.classList.remove('d-none'); // reveal if hidden
                }
            });

            if (!alreadyExists) {
                const isBrand = resolvedIcon.includes('brands') ? 'fa-brands' : 'fa-solid';
                const cleanIcon = resolvedIcon.replace('brands', '').trim();
                
                const newTag = document.createElement('div');
                newTag.className = 'skill-tag active';
                newTag.setAttribute('data-value', resolvedName);
                newTag.innerHTML = `<span><i class="${isBrand} ${cleanIcon} me-1"></i> ${resolvedName}</span>
                                    <span class="remove-btn" title="Remove">&times;</span>`;
                
                document.getElementById('skillsContainer').appendChild(newTag);
            }

            input.value = '';
            syncSelectedSkills();
        }

        // Skills Click & Sync Logic
        document.getElementById('skillsContainer').addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-btn')) {
                e.stopPropagation();
                e.target.closest('.skill-tag').remove();
                syncSelectedSkills();
            } else {
                const tag = e.target.closest('.skill-tag');
                if (tag) {
                    tag.classList.toggle('active');
                    syncSelectedSkills();
                }
            }
        });

        function syncSelectedSkills() {
            const selected = [];
            document.querySelectorAll('#skillsContainer .skill-tag.active').forEach(tag => {
                selected.push(tag.getAttribute('data-value'));
            });
            document.getElementById('area_of_expertise').value = selected.join(', ');
        }

        // Password Security Verification on Enrollment Input
        function checkEnrollmentSecurity(enroll) {
            enroll = enroll.trim();
            if (!enroll) return;

            let registeredStudents = JSON.parse(localStorage.getItem('kdp_registered_students') || '{}');

            if (registeredStudents[enroll]) {
                // SECOND TIME: SHOW MANDATORY PASSWORD CHANGE
                document.getElementById('firstTimePasswordBox').style.display = 'none';
                document.getElementById('secondTimePasswordBox').style.display = 'block';
                document.getElementById('new_password').setAttribute('required', 'required');
                document.getElementById('confirm_password').setAttribute('required', 'required');
                document.getElementById('submitBtn').innerText = "Update Password & Proceed";
            } else {
                // FIRST TIME: SHOW DEFAULT KDP123
                document.getElementById('firstTimePasswordBox').style.display = 'block';
                document.getElementById('secondTimePasswordBox').style.display = 'none';
                document.getElementById('new_password').removeAttribute('required');
                document.getElementById('confirm_password').removeAttribute('required');
                document.getElementById('submitBtn').innerText = "Submit Registration";
                document.getElementById('final_password').value = "KDP123";
            }
        }

        // Form Submit Handler
        function handleFormSubmit(event) {
            const enroll = document.getElementById('enrollment_no').value.trim();
            let registeredStudents = JSON.parse(localStorage.getItem('kdp_registered_students') || '{}');

            if (registeredStudents[enroll]) {
                const newPass = document.getElementById('new_password').value;
                const confirmPass = document.getElementById('confirm_password').value;

                if (!newPass || newPass.length < 4) {
                    alert("New password must be at least 4 characters long.");
                    return false;
                }

                if (newPass === "KDP123") {
                    alert("New password cannot be the default password 'KDP123'. Please choose a secure personal password!");
                    return false;
                }

                if (newPass !== confirmPass) {
                    alert("New Password and Confirm Password do not match!");
                    return false;
                }

                document.getElementById('final_password').value = newPass;
                registeredStudents[enroll] = { hasChangedPassword: true };
                localStorage.setItem('kdp_registered_students', JSON.stringify(registeredStudents));
                alert("Password successfully updated for Enrollment No: " + enroll);
            } else {
                registeredStudents[enroll] = { hasChangedPassword: false };
                localStorage.setItem('kdp_registered_students', JSON.stringify(registeredStudents));
                document.getElementById('final_password').value = "KDP123";
                alert("Registered successfully! Your default portal password is: KDP123");
            }

            return true;
        }

        // Enter key listener for Add Skill input
        document.getElementById('newSkillInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                addNewSkillWithAutoCorrect();
            }
        });
    </script>
</body>
</html>