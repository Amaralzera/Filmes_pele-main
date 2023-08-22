<!DOCTYPE html>
<html>
<head>
    <title>Bem-Vindo ao Cinema</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            background-image: url('https://static.alphacoders.com/thumbs_categories/20.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
        }
        .welcome-container {
            padding: 100px;
        }
        .welcome-text {
            font-size: 24px;
            margin-bottom: 20px;
            color: #fff;
        }
        .access-button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1 class="welcome-text">Bem-Vindo ao Cinema Movies Pelé</h1>
        <a href="{{ route('login') }}" class="btn btn-primary">Login<button class="access-button">Acesse por aqui!</button></a>
    </div>
</body>
</html>
