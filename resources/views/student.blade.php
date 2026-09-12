<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login | Training & Placement Portal</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: "Inter", sans-serif;
        }

        body{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:#050d1c;
        }

        .login-box{
            width:520px;
            padding:40px 36px;
            border-radius:28px;
            background:rgba(20,32,52,0.75);
            border:1px solid rgba(255,255,255,0.12);
            box-shadow:
            0 20px 50px rgba(0,0,0,0.4),
            inset 0 0 30px rgba(255,255,255,0.02);
            backdrop-filter:blur(15px);
        }

        h1{
            text-align:center;
            color:#c8d0dd;
            font-size:32px;
            margin-bottom:25px;
            font-weight:700;
        }

        .alert-error {
            background: rgba(239, 68, 68, 0.15);
            border: 1px solid #ef4444;
            color: #fca5a5;
            padding: 12px 16px;
            border-radius: 12px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .alert-success {
            background: rgba(34, 197, 94, 0.15);
            border: 1px solid #22c55e;
            color: #86efac;
            padding: 12px 16px;
            border-radius: 12px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        label{
            color:#aeb8c8;
            font-size:17px;
            display:block;
            margin-bottom:12px;
        }

        .input-box{
            width:100%;
            height:58px;
            background:rgba(255,255,255,0.03);
            border:1px solid rgba(255,255,255,0.12);
            border-radius:16px;
            padding:0 18px;
            color:white;
            font-size:16px;
            outline:none;
            margin-bottom:25px;
        }

        .input-box:focus {
            border-color: #3b82f6;
            background: rgba(255,255,255,0.06);
        }

        .input-box::placeholder{
            color:#78859a;
        }

        .password-box{
            position:relative;
        }

        .show{
            position:absolute;
            right:20px;
            top:18px;
            color:#7d8ba3;
            cursor: pointer;
            user-select: none;
        }

        .options{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin:10px 0 35px;
            color:#7f8ba0;
        }

        .remember{
            display:flex;
            gap:10px;
            align-items:center;
        }

        .remember input{
            width:18px;
            height:18px;
            accent-color:#2870d6;
            cursor: pointer;
        }

        a{
            color:#2870d6;
            text-decoration:none;
        }

        a:hover {
            text-decoration: underline;
        }

        button{
            width:100%;
            height:58px;
            border:none;
            border-radius:30px;
            background:linear-gradient(90deg,#2870d6,#3b82f6);
            color:#e5edff;
            font-size:18px;
            cursor:pointer;
            box-shadow:0 10px 25px rgba(40,100,220,.35);
            font-weight: 600;
        }

        button:hover{
            background:linear-gradient(90deg,#3b82f6,#2870d6);
        }

        .register-link {
            text-align: center;
            margin-top: 25px;
            color: #7f8ba0;
            font-size: 15px;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h1>Student Login</h1>

    <!-- Success / Error Alert Messages -->
    @if(session('error'))
        <div class="alert-error">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ url('/student/login') }}" method="POST">
        @csrf

        <label>Email Address</label>
        <input
            type="email"
            name="email"
            class="input-box"
            placeholder="Enter your email"
            value="{{ old('email') }}"
            required>

        <label>Password</label>
        <div class="password-box">
            <input
                type="password"
                name="password"
                id="passwordInput"
                class="input-box"
                placeholder="Enter your password"
                required>
            <span class="show" id="togglePassword">Show</span>
        </div>

        <div class="options">
            <div class="remember">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember" style="margin-bottom:0; cursor:pointer; color:#7f8ba0; font-size:15px;">Remember Me</label>
            </div>
            <a href="#">Forgot Password?</a>
        </div>

        <button type="submit">
            Login
        </button>

        <div class="register-link">
            Don't have an account? <a href="{{ url('/register') }}">Register here</a>
        </div>
    </form>
</div>

<script>
    // Password Show/Hide Toggle Logic
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('passwordInput');

    if (togglePassword && passwordInput) {
        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.textContent = type === 'password' ? 'Show' : 'Hide';
        });
    }
</script>

</body>
</html>