<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            margin:0;
            padding:0;
            background:#07101f;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            font-family:Arial,sans-serif;
        }

        .login-box{
            width:420px;
            background:#1b2435;
            padding:40px;
            border-radius:20px;
            box-shadow:0 0 25px rgba(0,0,0,.4);
        }

        h2{
            color:white;
            text-align:center;
            margin-bottom:30px;
            font-weight:bold;
        }

        label{
            color:#d6d6d6;
            margin-bottom:8px;
        }

        .form-control{
            background:#202b3d;
            border:1px solid #374357;
            color:white;
            height:48px;
        }

        .form-control::placeholder{
            color:#9aa4b2;
        }

        .btn-login{
            width:100%;
            background:#3b82f6;
            color:white;
            border:none;
            border-radius:30px;
            padding:12px;
            font-size:18px;
            margin-top:20px;
        }

        .btn-login:hover{
            background:#2563eb;
        }

        a{
            color:#4da3ff;
            text-decoration:none;
        }

        a:hover{
            text-decoration:underline;
        }
    </style>
</head>
<body>

<div class="login-box">

    <h2>Admin Login</h2>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ url('/admin/login') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Email Address</label>
            <input type="email"
                   name="email"
                   class="form-control"
                   placeholder="Enter your email"
                   required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password"
                   name="password"
                   class="form-control"
                   placeholder="Enter your password"
                   required>
        </div>

        <div class="d-flex justify-content-between mb-3">
            <div>
                <input type="checkbox" name="remember">
                <label>Remember Me</label>
            </div>

            <a href="#">Forgot Password?</a>
        </div>

        <button class="btn-login" type="submit">
            Login
        </button>

    </form>

</div>

</body>
</html>