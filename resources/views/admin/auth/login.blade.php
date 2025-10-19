
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shinta Bakery's Admin</title>
    <style>
        :root {
            --primary-color: #8B4513;
            --secondary-color: #FF99CC;
            --text-color: #333;
            --background-color: #FFF5E6;
            --border-color: #DDD;
            --accent-color: #6A5ACD;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html, body { height: 100%; }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            justify-content: center;
            padding: 20px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            border-bottom: 2px solid var(--border-color);
            margin-bottom: 30px;
        }

        .logo {
            font-size: 2rem;
            font-weight: bold;
            color: var(--accent-color);
            font-family: 'Comic Sans MS', cursive;
        }
         .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
            color: #999;
        }

        .divider:before,
        .divider:after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #ccc;
            margin: 0 10px;
        }
        .google-login {
            background-color: var(--secondary-color);
            color: white;
            padding: 15px 20px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        .login-form { flex: 1; max-width: 400px; }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .welcome { font-size: 1.2rem; margin-bottom: 30px; }

        .form-group { margin-bottom: 20px; }

        label { display: block; margin-bottom: 8px; font-weight: bold; }

        input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            background-color: var(--secondary-color);
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        input:focus { outline: none; border-color: var(--accent-color); }

        .password-container { position: relative; }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 1.2rem;
        }

        .login-btn {
            width: 100%;
            background-color: var(--primary-color);
            color: white;
            padding: 15px;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .login-btn:hover { background-color: #7a3d0c; }
         .remember {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .remember input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: var(--accent-color);
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

         .forgot-password {
            color: var(--accent-color);
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: #553da8;
            text-decoration: underline;
        }
        .alert { padding: 10px; border-radius: 6px; margin-bottom: 15px; }
        .alert-danger { background-color: #f8d7da; color: #842029; }

        .illustration {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
         .signup-link {
            text-align: center;
            font-size: 0.9rem;
        }

        .signup-link a {
            color: var(--accent-color);
            text-decoration: underline;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .signup-link a:hover {
            color: #553da8;
        }

        .illustration img {
            max-width: 100%;
            max-height: 55vh;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .login-container { flex-direction: column; }
            .illustration { display: none; }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">Shinta Bakery's Admin</div>
        </header>

        <div class="login-container">
            <div class="login-form">
                <h1>Login now</h1>
                <div class="welcome">Hi, Welcome back 👋</div>

                <div class="google-login">
                    <div class="google-icon">
                        <!-- Google G logo -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M12.545 10.239v3.821h5.445c-.712 2.315-2.647 3.972-5.445 3.972-3.332 0-6.033-2.701-6.033-6.032s2.701-6.032 6.033-6.032c1.498 0 2.866.549 3.921 1.453L12.545 10.239z" fill="#EA4335"/>
                            <path d="M23.713 12.826c0-1.12-.097-2.22-.299-3.288H12.545v3.821h6.377a5.328 5.328 0 01-2.37 3.972l-.036.028 2.777 2.144a9.568 9.568 0 005.185-8.677z" fill="#FBBC05"/>
                            <path d="M5.514 15.557a5.985 5.985 0 010-6.114L2.545 7.174A12.07 12.07 0 000 12.826c0 2.082.656 4.047 1.783 5.636l2.931-2.275z" fill="#4CAF50"/>
                            <path d="M12.545 2.788a6.032 6.032 0 016.032 6.032l.001-.001 2.978 2.298a12.07 12.07 0 00-14.678-9.454l-2.931 2.275a5.985 5.985 0 015.598-1.148z" fill="#4285F4"/>
                        </svg>
                    </div>
                    Login with Google
                </div>

                <div class="divider">or Login with Email</div>

                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form method="POST" action="{{ route('admin.login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}" 
                            placeholder="Enter your email id"
                            required 
                            autofocus
                        >
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="password-container">
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                placeholder="Enter your password" 
                                required
                            >
                            <span class="toggle-password">👁️</span>
                        </div>
                    </div>

                          <div class="remember-forgot">
                        <div class="remember">
                            <input type="checkbox" id="remember">
                            <label for="remember">Remember Me</label>
                        </div>
                        <a href="#" class="forgot-password">Forgot Password?</a>
                    </div>

                    <button type="submit" class="login-btn">Login</button>

                     <div class="signup-link">
                        Not registered yet? <a href="#">Create an account SignUp</a>
                    </div>
                </form>
            </div>

            <div class="illustration">
               <img src="{{ asset('images/ilustration.png') }}" alt="Illustration">
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.toggle-password').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                this.textContent = '🙈';
            } else {
                passwordInput.type = 'password';
                this.textContent = '👁️';
            }
        });
    </script>
</body>
</html>

