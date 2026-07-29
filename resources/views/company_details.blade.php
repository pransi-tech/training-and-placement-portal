<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Details</title>
    <meta name="description" content="Detailed placement opportunity information for a company.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --bg: #0F172A;
            --surface: #111C33;
            --surface-2: #17294A;
            --primary: #2563EB;
            --primary-2: #3B82F6;
            --text: #F8FAFC;
            --muted: #94A3B8;
            --border: rgba(255,255,255,0.12);
        }

        body {
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            background: linear-gradient(135deg, #020617 0%, var(--bg) 100%);
            color: var(--text);
            min-height: 100vh;
        }

        .page-shell {
            padding: 6.5rem 0 4rem;
        }

        .glass-card {
            background: linear-gradient(145deg, rgba(17, 28, 51, 0.95), rgba(15, 23, 42, 0.9));
            border: 1px solid var(--border);
            border-radius: 20px;
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.25);
        }

        .back-link {
            position: fixed;
            top: 1.25rem;
            left: 1.25rem;
            width: 42px;
            height: 42px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: var(--text);
            background: rgba(255,255,255,0.05);
            border: 1px solid var(--border);
            text-decoration: none;
            transition: transform 0.25s ease, background-color 0.25s ease, color 0.25s ease;
            z-index: 10;
        }

        .back-link:hover {
            transform: translateY(-2px);
            background: rgba(37, 99, 235, 0.16);
            color: var(--primary-2);
        }

        .company-hero {
            padding: 1.75rem;
            margin-bottom: 1.5rem;
        }

        .company-logo {
            width: 78px;
            height: 78px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 20px;
            font-size: 1.4rem;
            font-weight: 700;
            background: linear-gradient(135deg, rgba(37,99,235,0.2), rgba(59,130,246,0.15));
            color: white;
            border: 1px solid rgba(255,255,255,0.12);
        }

        .section-title {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 0.8rem;
        }

        .muted-text {
            color: var(--muted);
        }

        .detail-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .detail-list li {
            padding: 0.55rem 0;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .detail-list li:last-child {
            border-bottom: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-2));
            border: none;
            box-shadow: 0 10px 25px rgba(37, 99, 235, 0.24);
            border-radius: 999px;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
        }

        .similar-card {
            background: rgba(255,255,255,0.04);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 1rem;
            height: 100%;
            transition: transform 0.25s ease, background-color 0.25s ease;
        }

        .similar-card:hover {
            transform: translateY(-4px);
            background: rgba(37, 99, 235, 0.12);
        }

        @media (max-width: 576px) {
            .page-shell {
                padding: 5.5rem 0 3rem;
            }
        }
    </style>
</head>
<body>
    <a href="{{ url('/explore-opportunities') }}" class="back-link" aria-label="Back to explore opportunities">
        <i class="bi bi-arrow-left"></i>
    </a>

    <div class="page-shell">
        <div class="container">
            @php
                $companyKey = strtolower($company ?? '');
                $companyLogo = 'M';
                $companyName = 'Microsoft';
                $companyDescription = 'Microsoft is seeking ambitious and innovative graduates to join its engineering teams.';
                $jobRole = 'Software Developer';
                $eligibility = 'B.E. / B.Tech in Computer Science, IT, or related disciplines with a minimum CGPA of 6.5 and no active backlogs.';
                $salary = '₹18 LPA';
                $location = 'Hyderabad';
                $employmentType = 'Full Time';
                $skills = 'Java, Python, C#, Data Structures, SQL, Git, Problem Solving, Communication Skills.';
                $selectionProcess = 'Online Assessment, Technical Interview, HR Round';
                $documents = 'Resume, Marksheet, ID Proof';
                $deadline = '05 Aug 2026';
                $website = 'microsoft.com';
                $email = 'careers@microsoft.com';
            @endphp

            @if ($companyKey === 'tcs')
                @php
                    $companyLogo = 'T';
                    $companyName = 'TCS';
                    $companyDescription = 'TCS is inviting fresh graduates to work on enterprise solutions and digital transformation initiatives.';
                    $jobRole = 'Software Engineer';
                    $eligibility = 'B.E. / B.Tech in Computer Science, IT, or related disciplines with a minimum CGPA of 6.0.';
                    $salary = '₹7 LPA';
                    $location = 'Pune';
                    $employmentType = 'Full Time';
                    $skills = 'Java, Spring Boot, SQL, Data Structures, Problem Solving, Teamwork.';
                    $selectionProcess = 'Aptitude Test, Technical Interview, HR Discussion';
                    $documents = 'Resume, Degree Certificate, ID Proof';
                    $deadline = '30 Jul 2026';
                    $website = 'tcs.com';
                    $email = 'careers@tcs.com';
                @endphp
            @elseif ($companyKey === 'infosys')
                @php
                    $companyLogo = 'I';
                    $companyName = 'Infosys';
                    $companyDescription = 'Infosys offers a dynamic platform for graduates interested in software development and digital consulting.';
                    $jobRole = 'System Engineer';
                    $eligibility = 'Any graduate from a recognized university with a minimum aggregate of 60%.';
                    $salary = '₹6.5 LPA';
                    $location = 'Bengaluru';
                    $employmentType = 'Full Time';
                    $skills = 'Programming, SQL, Linux, Analytical Thinking, Communication.';
                    $selectionProcess = 'Online Test, Technical Interview, Manager Round';
                    $documents = 'Resume, Academic Records, ID Proof';
                    $deadline = '02 Aug 2026';
                    $website = 'infosys.com';
                    $email = 'hiring@infosys.com';
                @endphp
            @elseif ($companyKey === 'microsoft')
                @php
                    $companyLogo = 'M';
                    $companyName = 'Microsoft';
                    $companyDescription = 'Microsoft is seeking ambitious and innovative graduates to join its engineering teams.';
                    $jobRole = 'Software Developer';
                    $eligibility = 'B.E. / B.Tech in Computer Science, IT, or related disciplines with a minimum CGPA of 6.5 and no active backlogs.';
                    $salary = '₹18 LPA';
                    $location = 'Hyderabad';
                    $employmentType = 'Full Time';
                    $skills = 'Java, Python, C#, Data Structures, SQL, Git, Problem Solving, Communication Skills.';
                    $selectionProcess = 'Online Assessment, Technical Interview, HR Round';
                    $documents = 'Resume, Marksheet, ID Proof';
                    $deadline = '05 Aug 2026';
                    $website = 'microsoft.com';
                    $email = 'careers@microsoft.com';
                @endphp
            @elseif ($companyKey === 'wipro')
                @php
                    $companyLogo = 'W';
                    $companyName = 'Wipro';
                    $companyDescription = 'Wipro is looking for bright graduates to contribute to cutting-edge software delivery and support projects.';
                    $jobRole = 'Project Engineer';
                    $eligibility = 'Diploma or graduate in relevant disciplines with a strong academic profile.';
                    $salary = '₹5.5 LPA';
                    $location = 'Remote';
                    $employmentType = 'Full Time';
                    $skills = 'Java, Web Technologies, Database Basics, Analytical Skills, Teamwork.';
                    $selectionProcess = 'Written Test, Technical Interview, HR Interview';
                    $documents = 'Resume, Certificates, ID Proof';
                    $deadline = '08 Aug 2026';
                    $website = 'wipro.com';
                    $email = 'careers@wipro.com';
                @endphp
            @elseif ($companyKey === 'accenture')
                @php
                    $companyLogo = 'A';
                    $companyName = 'Accenture';
                    $companyDescription = 'Accenture offers opportunities for emerging talent to work with global technology and consulting teams.';
                    $jobRole = 'Associate Software Engineer';
                    $eligibility = 'B.E. / B.Tech graduates in relevant streams with a minimum CGPA of 6.0.';
                    $salary = '₹4.5 LPA';
                    $location = 'Mumbai';
                    $employmentType = 'Full Time';
                    $skills = 'C, C++, Java, SQL, Communication, Analytical Skills.';
                    $selectionProcess = 'Aptitude Test, Technical Round, HR Interaction';
                    $documents = 'Resume, Academic Proof, ID Proof';
                    $deadline = '10 Aug 2026';
                    $website = 'accenture.com';
                    $email = 'recruitment@accenture.com';
                @endphp
            @else
                @php
                    $companyLogo = 'C';
                    $companyName = 'Capgemini';
                    $companyDescription = 'Capgemini is seeking fresh graduates to contribute to digital transformation and engineering initiatives.';
                    $jobRole = 'Data Engineer';
                    $eligibility = 'B.E. / B.Tech in relevant disciplines with good academic performance and no backlog.';
                    $salary = '₹6 LPA';
                    $location = 'Chennai';
                    $employmentType = 'Full Time';
                    $skills = 'Python, SQL, ETL Concepts, Data Modeling, Communication.';
                    $selectionProcess = 'Assessment, Technical Interview, HR Round';
                    $documents = 'Resume, Certificates, ID Proof';
                    $deadline = '12 Aug 2026';
                    $website = 'capgemini.com';
                    $email = 'careers@capgemini.com';
                @endphp
            @endif

            <div class="glass-card company-hero mb-4">
                <div class="row g-4 align-items-center">
                    <div class="col-md-auto">
                        <div class="company-logo">{{ $companyLogo }}</div>
                    </div>
                    <div class="col-md">
                        <h1 class="display-6 fw-bold mb-2">{{ $companyName }}</h1>
                        <p class="muted-text mb-3">{{ $jobRole }} - {{ $employmentType }} opportunity for 2026 graduates.</p>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="#" class="btn btn-primary">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="glass-card p-4 h-100">
                        <h3 class="section-title">Company Description</h3>
                        <p class="muted-text mb-4">{{ $companyDescription }}</p>

                        <h3 class="section-title">Job Role</h3>
                        <p class="muted-text mb-4">{{ $jobRole }}</p>

                        <h3 class="section-title">Responsibilities</h3>
                        <ul class="muted-text mb-4">
                            <li>Develop, test, and deploy modern software solutions.</li>
                            <li>Collaborate with cross-functional teams to deliver high-quality outcomes.</li>
                            <li>Support performance optimization and issue resolution.</li>
                        </ul>

                        <h3 class="section-title">Required Skills</h3>
                        <p class="muted-text mb-4">{{ $skills }}</p>

                        <h3 class="section-title">Eligibility Criteria</h3>
                        <p class="muted-text mb-4">{{ $eligibility }}</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="glass-card p-4 h-100">
                        <h3 class="section-title">Opportunity Details</h3>
                        <ul class="detail-list muted-text">
                            <li><strong class="text-white">Salary Package / Stipend:</strong> {{ $salary }}</li>
                            <li><strong class="text-white">Job Location:</strong> {{ $location }}</li>
                            <li><strong class="text-white">Employment Type:</strong> {{ $employmentType }}</li>
                            <li><strong class="text-white">Selection Process:</strong> {{ $selectionProcess }}</li>
                            <li><strong class="text-white">Required Documents:</strong> {{ $documents }}</li>
                            <li><strong class="text-white">Application Deadline:</strong> {{ $deadline }}</li>
                            <li><strong class="text-white">HR Contact Email:</strong> {{ $email }}</li>
                            <li><strong class="text-white">Company Website:</strong> {{ $website }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="glass-card p-4 mt-4">
                <h3 class="section-title">Similar Opportunities</h3>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="similar-card">
                            <div class="fw-semibold mb-2">TCS</div>
                            <div class="muted-text small mb-2">Software Engineer</div>
                            <div class="muted-text small">Location: Pune</div>
                            <a href="{{ url('/company-details/tcs') }}" class="btn btn-primary btn-sm rounded-pill mt-3">View Details</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="similar-card">
                            <div class="fw-semibold mb-2">Infosys</div>
                            <div class="muted-text small mb-2">System Engineer</div>
                            <div class="muted-text small">Location: Bengaluru</div>
                            <a href="{{ url('/company-details/infosys') }}" class="btn btn-primary btn-sm rounded-pill mt-3">View Details</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="similar-card">
                            <div class="fw-semibold mb-2">Accenture</div>
                            <div class="muted-text small mb-2">Associate Engineer</div>
                            <div class="muted-text small">Location: Mumbai</div>
                            <a href="{{ url('/company-details/accenture') }}" class="btn btn-primary btn-sm rounded-pill mt-3">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
