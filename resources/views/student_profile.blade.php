<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>

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
            padding: 40px;
        }

        .profile-container {
            max-width: 900px;
            margin: auto;
        }

        .back {
            display: inline-block;
            margin-bottom: 20px;
            color: #6334db;
            text-decoration: none;
            font-weight: bold;
        }

        .profile-card {
            background: white;
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
        }

        .profile-header {
            display: flex;
            align-items: center;
            gap: 20px;
            padding-bottom: 25px;
            border-bottom: 1px solid #eee;
        }

        .avatar {
            width: 75px;
            height: 75px;
            border-radius: 50%;
            background: #eee5ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 35px;
        }

        .profile-header h1 {
            color: #4b20a8;
            margin-bottom: 5px;
        }

        .profile-header p {
            color: #777;
        }

        .details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
            margin-top: 30px;
        }

        .detail {
            background: #f8f6ff;
            padding: 18px;
            border-radius: 12px;
        }

        .label {
            font-size: 13px;
            color: #777;
            margin-bottom: 6px;
        }

        .value {
            font-size: 16px;
            font-weight: bold;
        }

        @media (max-width: 650px) {
            .details {
                grid-template-columns: 1fr;
            }

            body {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

<div class="profile-container">

    <a href="/student/dashboard" class="back">
        ← Back to Dashboard
    </a>

    <div class="profile-card">

        <div class="profile-header">

            <div class="avatar">
                👤
            </div>

            <div>
                <h1>Student</h1>
                <p>Student Profile</p>
            </div>

        </div>

        <div class="details">

            <div class="detail">
                <div class="label">Full Name</div>
                <div class="value">Student</div>
            </div>

            <div class="detail">
                <div class="label">Enrollment Number</div>
                <div class="value">Not Available</div>
            </div>

            <div class="detail">
                <div class="label">Email</div>
                <div class="value">student@example.com</div>
            </div>

            <div class="detail">
                <div class="label">Mobile Number</div>
                <div class="value">Not Available</div>
            </div>

            <div class="detail">
                <div class="label">Semester</div>
                <div class="value">Semester III</div>
            </div>

            <div class="detail">
                <div class="label">Branch</div>
                <div class="value">Computer Engineering</div>
            </div>

            <div class="detail">
                <div class="label">Area of Expertise</div>
                <div class="value">Not Available</div>
            </div>

            <div class="detail">
                <div class="label">LinkedIn</div>
                <div class="value">Not Added</div>
            </div>

        </div>

    </div>

</div>

</body>
</html>