<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Applications</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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

        .applications {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .application-card {
            background: white;
            padding: 25px;
            border-radius: 18px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);

            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .company {
            color: #6334db;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 7px;
        }

        .application-card h2 {
            margin-bottom: 10px;
        }

        .details {
            color: #666;
            line-height: 1.7;
        }

        .status {
            padding: 9px 18px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: bold;
            white-space: nowrap;
        }

        .pending {
            background: #fff4d6;
            color: #9a6a00;
        }

        .shortlisted {
            background: #e5f8ec;
            color: #218838;
        }

        .rejected {
            background: #ffe5e5;
            color: #c62828;
        }

        .empty {
            background: white;
            padding: 50px;
            border-radius: 18px;
            text-align: center;
            color: #777;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        .empty-icon {
            font-size: 45px;
            margin-bottom: 15px;
        }

        @media (max-width: 700px) {
            body {
                padding: 20px;
            }

            .application-card {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <a href="/student/dashboard" class="back">
        ← Back to Dashboard
    </a>

    <h1>📋 My Applications</h1>

    <p class="subtitle">
        Track the jobs and placement opportunities you have applied for.
    </p>

    <div class="applications">

        <!-- Application 1 -->
        <div class="application-card">

            <div>
                <div class="company">TCS</div>

                <h2>Software Developer</h2>

                <div class="details">
                    📍 Ahmedabad<br>
                    📅 Applied: 10 August 2026
                </div>
            </div>

            <div class="status pending">
                Pending
            </div>

        </div>


        <!-- Application 2 -->
        <div class="application-card">

            <div>
                <div class="company">Infosys</div>

                <h2>Junior Developer</h2>

                <div class="details">
                    📍 Pune<br>
                    📅 Applied: 8 August 2026
                </div>
            </div>

            <div class="status shortlisted">
                Shortlisted
            </div>

        </div>


        <!-- Application 3 -->
        <div class="application-card">

            <div>
                <div class="company">Wipro</div>

                <h2>Web Developer</h2>

                <div class="details">
                    📍 Bengaluru<br>
                    📅 Applied: 5 August 2026
                </div>
            </div>

            <div class="status rejected">
                Not Selected
            </div>

        </div>

    </div>

</div>

</body>
</html>