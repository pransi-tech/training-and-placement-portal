<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement Officer Login</title>
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

        * {
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            background: linear-gradient(135deg, #020617 0%, var(--bg) 100%);
            color: var(--text);
            min-height: 100vh;
            margin: 0;
        }

        .auth-shell {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        .auth-card {
            width: 100%;
            max-width: 460px;
            padding: 2rem;
            border-radius: 24px;
            background: linear-gradient(145deg, rgba(17, 28, 51, 0.95), rgba(15, 23, 42, 0.9));
            border: 1px solid var(--border);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(12px);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .auth-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 30px 70px rgba(37, 99, 235, 0.16);
        }

        .auth-title {
            font-size: 1.7rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .form-label {
            color: #E2E8F0;
            font-size: 0.95rem;
            margin-bottom: 0.5rem;
        }

        .form-control {
            background: rgba(255,255,255,0.04);
            color: var(--text);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 0.8rem 1rem;
            transition: border-color 0.25s ease, box-shadow 0.25s ease;
        }

        .form-control::placeholder {
            color: var(--muted);
        }

        .form-control:focus {
            background: rgba(255,255,255,0.06);
            color: var(--text);
            border-color: rgba(59, 130, 246, 0.6);
            box-shadow: 0 0 0 0.2rem rgba(59, 130, 246, 0.2);
        }

        .password-group {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            right: 0.8rem;
            transform: translateY(-50%);
            border: none;
            background: transparent;
            color: var(--muted);
            font-size: 0.9rem;
            padding: 0;
        }

        .password-toggle:hover {
            color: var(--text);
        }

        .form-check-input {
            background-color: rgba(255,255,255,0.08);
            border: 1px solid var(--border);
        }

        .form-check-input:checked {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .form-check-label {
            color: var(--muted);
            font-size: 0.92rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-2));
            border: none;
            box-shadow: 0 10px 25px rgba(37, 99, 235, 0.24);
            border-radius: 999px;
            padding: 0.8rem 1rem;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 28px rgba(37, 99, 235, 0.28);
        }

        .auth-back-link {
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

        .auth-back-link:hover {
            transform: translateY(-2px);
            background: rgba(37, 99, 235, 0.16);
            color: var(--primary-2);
        }

        .forgot-password {
            font-size: 0.9rem;
            color: var(--primary-2);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .forgot-password:hover {
            color: #93C5FD;
            text-decoration: underline;
        }

        @media (max-width: 576px) {
            .auth-card {
                padding: 1.5rem;
            }

            .auth-title {
                font-size: 1.45rem;
            }
        }
    </style>
</head>
<body>
    <a href="{{ url('/') }}" class="auth-back-link" aria-label="Back to Home">
        <i class="bi bi-arrow-left"></i>
    </a>

    <div class="auth-shell">
        <div class="auth-card">
            <h2 class="auth-title">Officer Sign In</h2>

            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="password-group">
                        <input type="password" class="form-control pe-5" id="password" placeholder="Enter your password" required>
                        <button type="button" class="password-toggle" id="passwordToggle">Show</button>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember Me</label>
                    </div>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const passwordInput = document.getElementById('password');
        const passwordToggle = document.getElementById('passwordToggle');

        passwordToggle.addEventListener('click', () => {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';
            passwordToggle.textContent = isPassword ? 'Hide' : 'Show';
        });
    </script>
</body>
</html>
