<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Training & Courses</title>

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

        .courses {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .course-card {
            background: white;
            padding: 25px;
            border-radius: 18px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        .course-icon {
            font-size: 38px;
            margin-bottom: 15px;
        }

        .course-card h2 {
            color: #4b20a8;
            margin-bottom: 10px;
        }

        .course-card p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 18px;
        }

        .course-info {
            color: #777;
            line-height: 1.8;
            margin-bottom: 18px;
        }

        .start-btn {
            display: inline-block;
            padding: 11px 22px;
            background: #6334db;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
        }

        .start-btn:hover {
            opacity: 0.9;
        }

        @media (max-width: 700px) {
            body {
                padding: 20px;
            }

            .courses {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <a href="/student/dashboard" class="back">
        ← Back to Dashboard
    </a>

    <h1>🎓 Training & Courses</h1>

    <p class="subtitle">
        Improve your skills with training programs and courses.
    </p>

    <div class="courses">

        <div class="course-card">
            <div class="course-icon">💻</div>

            <h2>Web Development</h2>

            <p>
                Learn HTML, CSS, JavaScript and build modern websites.
            </p>

            <div class="course-info">
                ⏱ Duration: 6 Weeks<br>
                📚 Level: Beginner
            </div>

            <a href="#" class="start-btn">Start Course</a>
        </div>


        <div class="course-card">
            <div class="course-icon">🐍</div>

            <h2>Python Programming</h2>

            <p>
                Learn Python fundamentals, programming concepts and projects.
            </p>

            <div class="course-info">
                ⏱ Duration: 8 Weeks<br>
                📚 Level: Beginner
            </div>

            <a href="#" class="start-btn">Start Course</a>
        </div>


        <div class="course-card">
            <div class="course-icon">🤖</div>

            <h2>Machine Learning</h2>

            <p>
                Understand machine learning concepts and basic algorithms.
            </p>

            <div class="course-info">
                ⏱ Duration: 10 Weeks<br>
                📚 Level: Intermediate
            </div>

            <a href="#" class="start-btn">Start Course</a>
        </div>


        <div class="course-card">
            <div class="course-icon">🗄️</div>

            <h2>Database Management</h2>

            <p>
                Learn SQL, database concepts and database management.
            </p>

            <div class="course-info">
                ⏱ Duration: 5 Weeks<br>
                📚 Level: Intermediate
            </div>

            <a href="#" class="start-btn">Start Course</a>
        </div>

    </div>

</div>

</body>
</html>