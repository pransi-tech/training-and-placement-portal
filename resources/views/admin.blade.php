<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>

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
            margin-bottom:35px;
            font-weight:700;
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
        }


        a{
            color:#2870d6;
            text-decoration:none;
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
        }


        button:hover{
            background:linear-gradient(90deg,#3b82f6,#2870d6);
        }

    </style>

</head>


<body>


<div class="login-box">

    <h1>Student Login</h1>


    <form>


        <label>Email Address</label>

        <input type="email" 
        class="input-box" 
        placeholder="Enter your email">


        <label>Password</label>

        <div class="password-box">

            <input type="password" 
            class="input-box" 
            placeholder="Enter your password">

            <span class="show">
                Show
            </span>

        </div>



        <div class="options">

            <div class="remember">

                <input type="checkbox">

                <span>
                    Remember Me
                </span>

            </div>


            <a href="#">
                Forgot Password?
            </a>

        </div>



        <button>
            Login
        </button>


    </form>


</div>


</body>
</html>