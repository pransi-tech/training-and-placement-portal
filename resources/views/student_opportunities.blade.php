<!DOCTYPE html>
<html>
<head>
    <title>Opportunities</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f7f5ff;
            color: #24134d;
            padding: 35px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
        }

        .back {
            display: inline-block;
            margin-bottom: 25px;
            color: #6334db;
            text-decoration: none;
            font-weight: bold;
        }

        h1 {
            color: #4b20a8;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #777;
            margin-bottom: 30px;
        }

        .jobs {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .job-card {
            background: white;
            padding: 25px;
            border-radius: 18px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        }

        .company {
            color: #6334db;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .job-card h2 {
            margin-bottom: 12px;
        }

        .info {
            color: #666;
            line-height: 1.8;
            margin-bottom: 18px;
        }

        .apply-btn {
            display: inline-block;
            padding: 11px 22px;
            background: #6334db;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
        }

        .apply-btn:hover {
            opacity: 0.9;
        }

        @media (max-width: 700px) {
            .jobs {
                grid-template-columns: 1fr;
            }

            body {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <a href="/student/dashboard" class="back">
        ← Back to Dashboard
    </a>

    <h1>💼 Opportunities</h1>

    <p class="subtitle">
        Explore available jobs and placement opportunities.
    </p>

    <div class="jobs">

        <div class="job-card">
            <div class="company">TCS</div>
            <h2>Software Developer</h2>

            <div class="info">
                📍 Location: Ahmedabad<br>
                💼 Full Time<br>
                🎓 Diploma / Graduate
            </div>

            <a href="#" class="apply-btn">Apply</a>
        </div>

        <div class="job-card">
            <div class="company">Infosys</div>
            <h2>Junior Developer</h2>

            <div class="info">
                📍 Location: Pune<br>
                💼 Full Time<br>
                🎓 Diploma / Graduate
            </div>

            <a href="#" class="apply-btn">Apply</a>
        </div>

        <div class="job-card">
            <div class="company">Wipro</div>
            <h2>Web Developer</h2>

            <div class="info">
                📍 Location: Bengaluru<br>
                💼 Full Time<br>
                🎓 Diploma / Graduate
            </div>

            <a href="#" class="apply-btn">Apply</a>
        </div>

        <div class="job-card">
            <div class="company">Accenture</div>
            <h2>Associate Software Engineer</h2>

            <div class="info">
                📍 Location: Mumbai<br>
                💼 Full Time<br>
                🎓 Diploma / Graduate
            </div>

            <a href="#" class="apply-btn">Apply</a>
        </div>

    </div>

</div>

</body>
</html>