<!DOCTYPE html>
<html>
<head>
    <title>Login Form - Netflix Style</title>
    <style>
        body {
            background-color: #141414;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .netflix-card {
            background-color: #181818;
            border-radius: 5px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            padding: 30px;
            box-sizing: border-box;
        }

        .netflix-header {
            color: #e50914;
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        .netflix-input {
            background-color: #333;
            border: none;
            border-radius: 5px;
            color: #fff;
            padding: 10px;
            width: 100%;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .netflix-button {
            background-color: #e50914;
            border: none;
            border-radius: 5px;
            color: #fff;
            padding: 10px 0;
            width: 100%;
            cursor: pointer;
        }

        .netflix-button:hover {
            background-color: #b2070e;
        }

        .netflix-register-text {
            text-align: center;
            color: #b9b9b9;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="netflix-card">
            <div class="netflix-header">{{ __('Login') }}</div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input id="email" type="email" class="netflix-input" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email" autofocus>
                <input id="password" type="password" class="netflix-input" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">
                <div>
                    <input class="netflix-button" type="submit" value="{{ __('Login') }}">
                </div>
            </form>
            <p class="netflix-register-text">Se você ainda não tem uma conta, <a href="{{ route('register') }}">registre-se aqui</a></p>
        </div>
    </div>
</body>
</html>
