<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>
<body>
    <div class="container">
        <div class="form-box login">
            <form action="">
                @csrf
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" name="username" id="username" placeholder="Username" required> 
                    <i class="bx bxs-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" name="password" id="password" placeholder="Password" required>
                    <i class="bx bxs-lock-alt"></i>
                </div>
                <div class="forgot-link">
                    <a href="">Forgot password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <p>or Login with social platforms</p>
                <div class="social-icons">
                    <a href="" class="bx bxl-google"></a>
                    <a href="" class="bx bxl-facebook"></a>
                    <a href="" class="bx bxl-github"></a>
                    <a href="" class="bx bxl-linkedin"></a>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <form action="">
                @csrf
                <h1>Registration</h1>
                <div class="input-box">
                    <input type="text" name="username" id="username" placeholder="Username" required> 
                    <i class="bx bxs-user"></i>
                </div>
                <div class="input-box">
                    <input type="email" name="email" id="email" placeholder="Email" required> 
                    <i class="bx bxs-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="text" name="password" id="password" placeholder="Password" required>
                    <i class="bx bxs-lock-alt"></i>
                </div>
                <button type="submit" class="btn">Register</button>
                <p>or register with social platforms</p>
                <div class="social-icons">
                    <a href="" class="bx bxl-google"></a>
                    <a href="" class="bx bxl-facebook"></a>
                    <a href="" class="bx bxl-github"></a>
                    <a href="" class="bx bxl-linkedin"></a>
                </div>
            </form>
        </div>

        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Helo, Welcome!</h1>
                <p>Don't have account?</p>
                <button class="btn register-btn">Register</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Welcome Back!</h1>
                <p>Already have an account?</p>
                <button class="btn login-btn">Login</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>