<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Notifications</title>

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
            max-width: 900px;
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

        .notification {
            background: white;
            padding: 22px;
            border-radius: 16px;
            margin-bottom: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.07);

            display: flex;
            align-items: flex-start;
            gap: 16px;
        }

        .icon {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: #eee5ff;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 22px;
            flex-shrink: 0;
        }

        .content h3 {
            margin-bottom: 7px;
            color: #4b20a8;
        }

        .content p {
            color: #666;
            line-height: 1.5;
        }

        .time {
            margin-top: 8px;
            font-size: 13px;
            color: #999;
        }
    </style>
</head>

<body>

<div class="container">

    <a href="/student/dashboard" class="back">
        ← Back to Dashboard
    </a>

    <h1>🔔 Notifications</h1>

    <p class="subtitle">
        Stay updated with placement and training activities.
    </p>


    <div class="notification">

        <div class="icon">
            💼
        </div>

        <div class="content">

            <h3>New Job Opportunity</h3>

            <p>
                A new Software Developer position is available at TCS.
            </p>

            <div class="time">
                Today
            </div>

        </div>

    </div>


    <div class="notification">

        <div class="icon">
            🎓
        </div>

        <div class="content">

            <h3>New Training Course</h3>

            <p>
                A new Web Development training course has been added.
            </p>

            <div class="time">
                Yesterday
            </div>

        </div>

    </div>


    <div class="notification">

        <div class="icon">
            📋
        </div>

        <div class="content">

            <h3>Application Update</h3>

            <p>
                Your application status for Infosys has been updated to
                Shortlisted.
            </p>

            <div class="time">
                2 days ago
            </div>

        </div>

    </div>


    <div class="notification">

        <div class="icon">
            📢
        </div>

        <div class="content">

            <h3>Placement Announcement</h3>

            <p>
                Keep checking the portal for upcoming placement drives.
            </p>

            <div class="time">
                3 days ago
            </div>

        </div>

    </div>

</div>

</body>
</html>