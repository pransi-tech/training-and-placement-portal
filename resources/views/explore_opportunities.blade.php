<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Opportunities</title>
    <meta name="description" content="Explore placement opportunities for students across top companies.">
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

        .navbar {
            background: rgba(2, 6, 23, 0.92);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid var(--border);
        }

        .nav-link {
            color: var(--text) !important;
            transition: 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-2) !important;
        }

        .navbar-back-link {
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
        }

        .navbar-back-link:hover {
            transform: translateY(-2px);
            background: rgba(37, 99, 235, 0.16);
            color: var(--primary-2);
        }

        .page-shell {
            padding: 7rem 0 4rem;
        }

        .hero-card, .glass-card {
            background: linear-gradient(145deg, rgba(17, 28, 51, 0.95), rgba(15, 23, 42, 0.9));
            border: 1px solid var(--border);
            border-radius: 20px;
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.25);
        }

        .hero-card {
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.8rem;
        }

        .section-subtitle {
            color: var(--muted);
            max-width: 720px;
            margin: 0 auto 2rem;
        }

        .search-input, .filter-select {
            background: rgba(255,255,255,0.04);
            color: var(--text);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 0.8rem 1rem;
        }

        .search-input::placeholder, .filter-select::placeholder {
            color: var(--muted);
        }

        .search-input:focus, .filter-select:focus {
            background: rgba(255,255,255,0.06);
            color: var(--text);
            border-color: rgba(59, 130, 246, 0.6);
            box-shadow: 0 0 0 0.2rem rgba(59, 130, 246, 0.2);
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

        .company-card {
            background: rgba(255,255,255,0.04);
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 1.25rem;
            transition: transform 0.25s ease, box-shadow 0.25s ease, background-color 0.25s ease;
            height: 100%;
        }

        .company-card:hover {
            transform: translateY(-4px);
            background: rgba(37, 99, 235, 0.12);
            box-shadow: 0 16px 36px rgba(37, 99, 235, 0.18);
        }

        .company-logo {
            width: 56px;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            font-size: 1.2rem;
            font-weight: 700;
            background: linear-gradient(135deg, rgba(37,99,235,0.2), rgba(59,130,246,0.15));
            color: white;
            border: 1px solid rgba(255,255,255,0.12);
            margin-bottom: 0.85rem;
        }

        .company-name {
            font-size: 1.05rem;
            font-weight: 700;
            margin-bottom: 0.2rem;
        }

        .company-meta {
            color: var(--muted);
            font-size: 0.92rem;
            margin-bottom: 0.45rem;
        }

        .company-list {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1.25rem;
        }

        @media (max-width: 992px) {
            .company-list {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 576px) {
            .page-shell {
                padding: 6.5rem 0 3rem;
            }

            .company-list {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container position-relative">
            <a href="{{ url('/') }}" class="navbar-back-link" aria-label="Back to Home">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
    </nav>

    <div class="page-shell">
        <div class="container">
            <div class="hero-card">
                <div class="text-center mb-4">
                    <h1 class="section-title">Explore Opportunities</h1>
                    <p class="section-subtitle">Discover placement drives from leading companies and find the right opportunity for your career journey.</p>
                </div>

                <div class="row g-3 align-items-end">
                    <div class="col-lg-4 col-md-6">
                        <label class="form-label small text-light-emphasis">Search</label>
                        <input type="text" class="form-control search-input" placeholder="Search companies or roles">
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <label class="form-label small text-light-emphasis">Company</label>
                        <select class="form-select filter-select">
                            <option selected>All</option>
                            <option>TCS</option>
                            <option>Infosys</option>
                            <option>Microsoft</option>
                            <option>Wipro</option>
                            <option>Accenture</option>
                            <option>Capgemini</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <label class="form-label small text-light-emphasis">Branch</label>
                        <select class="form-select filter-select">
                            <option selected>All</option>
                            <option>CSE</option>
                            <option>ECE</option>
                            <option>ME</option>
                            <option>CE</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <label class="form-label small text-light-emphasis">Job Type</label>
                        <select class="form-select filter-select">
                            <option selected>All</option>
                            <option>Full Time</option>
                            <option>Internship</option>
                            <option>Contract</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <label class="form-label small text-light-emphasis">Location</label>
                        <select class="form-select filter-select">
                            <option selected>All</option>
                            <option>Pune</option>
                            <option>Bengaluru</option>
                            <option>Hyderabad</option>
                            <option>Remote</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="glass-card p-4 p-lg-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="fw-semibold mb-0">Featured Companies</h3>
                    <span class="text-light-emphasis small">6 opportunities available</span>
                </div>

                <div class="company-list">
                    @php
                        $companies = [
                            ['name' => 'TCS', 'logo' => 'T', 'role' => 'Software Engineer', 'location' => 'Pune', 'package' => '₹7 LPA', 'eligibility' => 'B.E / B.Tech', 'date' => '30 Jul 2026', 'link' => url('/company-details/tcs')],
                            ['name' => 'Infosys', 'logo' => 'I', 'role' => 'System Engineer', 'location' => 'Bengaluru', 'package' => '₹6.5 LPA', 'eligibility' => 'Any Graduate', 'date' => '02 Aug 2026', 'link' => url('/company-details/infosys')],
                            ['name' => 'Microsoft', 'logo' => 'M', 'role' => 'Software Developer', 'location' => 'Hyderabad', 'package' => '₹18 LPA', 'eligibility' => 'B.E / B.Tech', 'date' => '05 Aug 2026', 'link' => url('/company-details/microsoft')],
                            ['name' => 'Wipro', 'logo' => 'W', 'role' => 'Project Engineer', 'location' => 'Remote', 'package' => '₹5.5 LPA', 'eligibility' => 'Diploma / Graduate', 'date' => '08 Aug 2026', 'link' => url('/company-details/wipro')],
                            ['name' => 'Accenture', 'logo' => 'A', 'role' => 'Associate Software Engineer', 'location' => 'Mumbai', 'package' => '₹4.5 LPA', 'eligibility' => 'B.E / B.Tech', 'date' => '10 Aug 2026', 'link' => url('/company-details/accenture')],
                            ['name' => 'Capgemini', 'logo' => 'C', 'role' => 'Data Engineer', 'location' => 'Chennai', 'package' => '₹6 LPA', 'eligibility' => 'B.E / B.Tech', 'date' => '12 Aug 2026', 'link' => url('/company-details/capgemini')],
                        ];
                    @endphp

                    @foreach ($companies as $company)
                        <div class="company-card">
                            <div class="company-logo">{{ $company['logo'] }}</div>
                            <div class="company-name">{{ $company['name'] }}</div>
                            <div class="company-meta"><i class="bi bi-briefcase-fill me-2 text-primary"></i>{{ $company['role'] }}</div>
                            <div class="company-meta"><i class="bi bi-geo-alt-fill me-2 text-primary"></i>{{ $company['location'] }}</div>
                            <div class="company-meta"><i class="bi bi-cash-stack me-2 text-primary"></i>{{ $company['package'] }}</div>
                            <div class="company-meta"><i class="bi bi-mortarboard-fill me-2 text-primary"></i>{{ $company['eligibility'] }}</div>
                            <div class="company-meta"><i class="bi bi-calendar2-week me-2 text-primary"></i>Last Date: {{ $company['date'] }}</div>
                            <a href="{{ $company['link'] }}" class="btn btn-primary btn-sm rounded-pill mt-3">View Details</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
