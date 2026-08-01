<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Login - Placement Portal</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <style>
        :root {
            --bg-dark: #0b132b;
            --card-dark: #1c2541;
            --input-bg: #0f172a;
            --border-color: #334155;
            --primary-blue: #2563eb;
            --primary-hover: #1d4ed8;
            --text-muted: #94a3b8;
        }

        body {
            background-color: var(--bg-dark);
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 1.5rem;
        }

        .login-card {
            background-color: var(--card-dark);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 2.5rem;
            width: 100%;
            max-width: 440px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.5), 0 8px 10px -6px rgba(0, 0, 0, 0.5);
        }

        .company-badge {
            background-color: rgba(37, 99, 235, 0.2);
            color: #60a5fa;
            border: 1px solid rgba(96, 165, 250, 0.3);
            border-radius: 50px;
            padding: 6px 16px;
            font-size: 0.85rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .form-label {
            color: #e2e8f0;
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .form-control {
            background-color: var(--input-bg);
            border: 1px solid var(--border-color);
            color: #ffffff;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            font-size: 0.95rem;
        }

        .form-control:focus {
            background-color: var(--input-bg);
            border-color: var(--primary-blue);
            color: #ffffff;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.25);
        }

        .form-control::placeholder {
            color: var(--text-muted);
        }

        .password-toggle {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: var(--text-muted);
            background: none;
            border: none;
        }

        .password-toggle:hover {
            color: #ffffff;
        }

        .btn-primary-custom {
            background-color: var(--primary-blue);
            border: none;
            color: #ffffff;
            padding: 0.75rem;
            border-radius: 8px;
            font-weight: 600;
            width: 100%;
            transition: all 0.2s ease;
        }

        .btn-primary-custom:hover {
            background-color: var(--primary-hover);
        }

        .form-check-input {
            background-color: var(--input-bg);
            border-color: var(--border-color);
        }

        .form-check-input:checked {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
        }

        .custom-link {
            color: #60a5fa;
            text-decoration: none;
            font-size: 0.875rem;
        }

        .custom-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="text-center mb-4">
            <span class="company-badge"><i class="fa-solid fa-building me-1"></i> Corporate Recruiter</span>
            <h3 class="fw-bold text-white mb-1">Company Login</h3>
            <p class="text-secondary small">Manage recruitment drives, job openings & applicants</p>
        </div>

        <form action="{{ route('company.login.submit') }}" method="POST">
            @csrf

            <!-- Work Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label">Corporate / Work Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="hr@company.com" required autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Password Field -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="position-relative">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter your password" required>
                    <button type="button" class="password-toggle" onclick="togglePassword()">
                        <i class="fa-regular fa-eye" id="toggleIcon"></i>
                    </button>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label small text-secondary" for="remember">
                        Remember Me
                    </label>
                </div>
                <a href="#" class="custom-link">Forgot Password?</a>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary-custom mb-3">
                <i class="fa-solid fa-right-to-bracket me-2"></i> Login to Portal
            </button>

            <!-- Recruiter Registration Link -->
            <div class="text-center mt-3 pt-2 border-top border-secondary border-opacity-25">
                <p class="small text-secondary mb-0">
                    New recruiter? <a href="#" class="custom-link fw-semibold">Register Company</a>
                </p>
            </div>
        </form>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>