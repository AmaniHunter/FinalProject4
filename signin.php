<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Housify | Sign In</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .right {
            background: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        #welcome {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        #sub-welcome {
            font-size: 1rem;
            margin-bottom: 20px;
        }
        .formfields {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        .button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #45a049;
        }
        #forgotPassword {
            color: #1db954;
            text-decoration: none;
            font-size: 0.9rem;
            margin-bottom: 20px;
            display: inline-block;
        }
        #orSpanp {
            margin: 20px 0;
            font-size: 1rem;
        }
        #signupP {
            font-size: 0.9rem;
        }
        #signupSpan {
            color: #1db954;
            text-decoration: none;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="right">
        <div id="welcome">Welcome back!</div>
        <div id="sub-welcome">Please enter your credentials</div>

        <form action="dashboard.php" method="post">
            <input class="formfields" type="text" name="username" id="username" placeholder="Username" required />
            <input class="formfields" type="password" name="password" id="password" placeholder="Password" required />
            <a id="forgotPassword" href="#"> Forgot Password?</a>
            <input class="button" type="submit" value="Login" />
        </form>

        <p id="orSpanp"><span id="orSpan">or</span></p>

        <button>
            <img id="googleLogo" src="images/google.png" alt="google" />
            Login with Google
        </button>

        <p id="signupP">
            Don't have an account?
            <a href="signup.php">
                <span id="signupSpan">Sign up</span>
            </a>
        </p>
    </div>
</body>
</html>
