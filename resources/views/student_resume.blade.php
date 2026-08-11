<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Resume</title>

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
            max-width: 1000px;
            margin: auto;
        }

        .back {
            display: inline-block;
            margin-bottom: 25px;
            color: #6334db;
            text-decoration: none;
            font-weight: bold;
        }

        .resume-card {
            background: white;
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }

        .resume-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 25px;
            border-bottom: 2px solid #eee;
        }

        .resume-header h1 {
            color: #4b20a8;
            margin-bottom: 8px;
        }

        .resume-header p {
            color: #777;
        }

        .download-btn {
            background: #6334db;
            color: white;
            padding: 11px 20px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
        }

        .section {
            margin-top: 28px;
        }

        .section h2 {
            color: #4b20a8;
            margin-bottom: 12px;
            font-size: 20px;
        }

        .section p {
            color: #666;
            line-height: 1.7;
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .skill {
            background: #eee5ff;
            color: #4b20a8;
            padding: 8px 14px;
            border-radius: 20px;
            font-size: 14px;
        }

        .education {
            background: #f8f6ff;
            padding: 18px;
            border-radius: 12px;
        }

        @media (max-width: 650px) {
            body {
                padding: 20px;
            }

            .resume-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <a href="/student/dashboard" class="back">
        ← Back to Dashboard
    </a>

    <div class="resume-card">

        <div class="resume-header">

            <div>
                <h1>Student</h1>
                <p>Computer Engineering Student</p>
                <p>student@example.com</p>
            </div>

            <a href="#" class="download-btn">
                📥 Download Resume
            </a>

        </div>


        <div class="section">

            <h2>👤 About Me</h2>

            <p>
                Computer Engineering student interested in software
                development, web technologies and emerging technologies.
            </p>

        </div>


        <div class="section">

            <h2>🎓 Education</h2>

            <div class="education">

                <strong>Diploma in Computer Engineering</strong>

                <p>
                    Semester III<br>
                    K.D. Polytechnic
                </p>

            </div>

        </div>


        <div class="section">

            <h2>💻 Technical Skills</h2>

            <div class="skills">

                <span class="skill">HTML</span>
                <span class="skill">CSS</span>
                <span class="skill">JavaScript</span>
                <span class="skill">PHP</span>
                <span class="skill">Laravel</span>
                <span class="skill">Python</span>
                <span class="skill">SQL</span>
                <span class="skill">Git & GitHub</span>

            </div>

        </div>


        <div class="section">

            <h2>🏆 Projects</h2>

            <p>
                Training and Placement Portal
            </p>

            <p>
                Student dashboard and placement management system.
            </p>

        </div>


        <div class="section">

            <h2>📜 Certifications</h2>

            <p>
                • MongoDB Database Management<br>
                • Google Skills Training<br>
                • Generative AI Training
            </p>

        </div>

    </div>

</div>

</body>
</html>