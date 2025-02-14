<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmConnect - Votre Communauté Agricole Florissante</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --primary: #22BA00;
            --secondary: #97bc62;
            --accent: #fca311;
            --text-dark:rgb(0, 0, 0);
            --text-light: #7f8c8d;
            --white: #ffffff;
            --background: #f0f4f0;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--background);
            padding: 20px;
            transition: background 0.3s ease;
        }

        .container {
            background: var(--white);
            width: 100%;
            max-width: 1200px;
            height: 700px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            display: flex;
            overflow: hidden;
            position: relative;
            transition: all 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.15);
        }

        .left-side {
            flex: 1;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 60px;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: var(--white);
            transition: all 0.3s ease;
        }

        .left-side::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("pexels-tomfisk-1483880.jpg") no-repeat center center;
            background-size: cover;
            opacity: 0.2;
            animation: zoomEffect 30s infinite alternate;
        }

        @keyframes zoomEffect {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
        }

        .logo {
            transform: translate(-45px,-85px);
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            fill: var(--white);
            transition: transform 0.3s ease;
        }

        .logo:hover .logo-icon {
            transform: rotate(15deg);
        }

        .welcome-text {
            position: relative;
            z-index: 1;
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 20px;
            line-height: 1.2;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .subtitle {
            position: relative;
            z-index: 1;
            font-size: 18px;
            line-height: 1.6;
            max-width: 400px;
            opacity: 0.9;
        }

        .right-side {
            flex: 1;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .leaf-bg {
            position: absolute;
            top: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 80 80'%3E%3Cpath fill='%2322BA00' fill-opacity='0.1' d='M52.1 47.2c-1.3 2.8-6.3 4.1-11.8 3-5.5-1.1-8.9-4.3-7.6-7.1 1.3-2.8 6.3-4.1 11.8-3 5.5 1.1 8.9 4.3 7.6 7.1z'/%3E%3C/svg%3E") no-repeat center center;
            opacity: 0.5;
            transform: rotate(45deg);
            transition: all 0.3s ease;
        }

        .container:hover .leaf-bg {
            transform: rotate(60deg) scale(1.1);
        }

        .form-container {
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        h2 {
            font-size: 36px;
            margin-bottom: 40px;
            color: var(--primary);
            position: relative;
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--accent);
            border-radius: 2px;
            transition: width 0.3s ease;
        }

        .form-container:hover h2::after {
            width: 100px;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-group input {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e1e1e1;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: var(--white);
        }

        .form-group input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(34, 186, 0, 0.1);
            outline: none;
        }

        .form-group label {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            padding: 0 5px;
            color: var(--text-light);
            font-size: 16px;
            transition: all 0.3s ease;
            pointer-events: none;
        }

        .form-group input:focus + label,
        .form-group input:not(:placeholder-shown) + label {
            top: 0;
            font-size: 14px;
            color: var(--primary);
            background: var(--white);
        }

        .password-toggle {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: var(--text-light);
            transition: color 0.3s ease;
        }

        .password-toggle:hover {
            color: var(--primary);
        }

        .signup-btn {
            width: 100%;
            padding: 16px;
            background: var(--primary);
            color: var(--white);
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(34, 186, 0, 0.2);
            position: relative;
            overflow: hidden;
        }

        .signup-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: all 0.6s;
        }

        .signup-btn:hover::before {
            left: 100%;
        }

        .signup-btn:hover {
            background: #1e9c00;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(34, 186, 0, 0.3);
        }

        .login-link {
            text-align: center;
            margin-top: 25px;
            font-size: 15px;
            color: var(--text-light);
        }

        .login-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            color: var(--secondary);
        }

        .social-login {
            margin-top: 35px;
            text-align: center;
        }

        .social-text {
            color: var(--text-light);
            font-size: 15px;
            margin-bottom: 20px;
            position: relative;
        }

        .social-text::before,
        .social-text::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 60px;
            height: 1px;
            background: #e1e1e1;
        }

        .social-text::before {
            left: 50px;
        }

        .social-text::after {
            right: 50px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            background: var(--white);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .social-icon i {
            font-size: 22px;
            color: var(--primary);
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            transform: translateY(-5px) rotate(360deg);
            background: var(--primary);
        }

        .social-icon:hover i {
            color: var(--white);
        }

        .theme-toggle {
            position: absolute;
            top: 20px;
            right: 20px;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 24px;
            color: var(--text-dark);
            transition: all 0.3s ease;
        }

        .theme-toggle:hover {
            transform: rotate(180deg);
        }

        body.dark-theme {
            --background: #1a1a2e;
            --white:rgb(0, 0, 0);
            --text-dark: #e1e1e1;
            --text-light: #b0b0b0;
        }

        @media (max-width: 968px) {
            .container {
                flex-direction: column;
                height: auto;
                max-width: 500px;
            }

            .left-side {
                padding: 40px;
                text-align: center;
            }

            .welcome-text, .subtitle {
                max-width: 100%;
            }

            .right-side {
                padding: 40px;
            }

            .social-text::before {
                left: 20px;
            }

            .social-text::after {
                right: 20px;
            }
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .floating {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-side">
            <div>
                <div class="logo">
                   <img src="vegetale rm.png" width="250px">
                </div>
                <h1 class="welcome-text floating">Connectez-vous et cultivez votre succès</h1>
                <p class="subtitle">Rejoignez notre communauté florissante d'agriculteurs, de jardiniers et d'innovateurs agricoles. Partagez vos connaissances, échangez des conseils et grandissez ensemble.</p>
            </div>
        </div>
        <div class="right-side">
            <div class="leaf-bg"></div>
            <div class="form-container">
                <h2>Accédez à votre espace en un clic</h2>
                <form>
                    <div class="form-group">
                        <input type="text" id="name" placeholder=" " required>
                        <label for="name">Nom</label>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" placeholder=" " required>
                        <label for="email">Email/Numéro téléphone</label>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" placeholder=" " required>
                        <label for="password">Mot de passe</label>
                        <span class="password-toggle" onclick="togglePassword()">
                            <i class="far fa-eye"></i>
                        </span>
                    </div>
                    <button type="submit" class="signup-btn">Se connecter</button>
                </form>
                <div class="login-link">
                    Pas encore de compte ? <a href="#">S'inscrire</a>
                </div>
                <div class="social-login">
                    <p class="social-text">ou se connecter avec</p>
                    <div class="social-icons">
                        <div class="social-icon">
                            <i class="fab fa-google"></i>
                        </div>
                        <div class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="theme-toggle" onclick="toggleTheme()">
            <i class="fas fa-moon"></i>
        </button>
    </div>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordToggle = document.querySelector('.password-toggle i');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordToggle.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                passwordToggle.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }

        function toggleTheme() {
            document.body.classList.toggle('dark-theme');
            const themeIcon = document.querySelector('.theme-toggle i');
            themeIcon.classList.toggle('fa-moon');
            themeIcon.classList.toggle('fa-sun');
        }
    </script>
</body>
</html>