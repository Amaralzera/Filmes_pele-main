<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }
  .login-container {
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    text-align: center;
    width: 300px;
  }
  h2 {
    color: #333;
  }
  input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  button {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  }
</style>
</head>
<body>
  <div class="login-container">
    <h2>Opa antes de assistir o filme deve fazer o login!</h2>
    <form>
      <input type="text" placeholder="Email">
      <input type="password" placeholder="Senha">
      <button type="submit">Entrar</button>
      <a href="">Entre como Admin</a>
      <a href="{{ route('home') }}">Página Inicial</a>
    </form>
  </div>
</body>
</html>