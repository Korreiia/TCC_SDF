<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style_login.css">
    <title>Tela de Login</title>
  </head>
  <body>
    <div class="container">
      <div class="login">

        <img class="logo" src="img/logo_alternativa.png" alt="fabião">
        
        <form action="/login" method="get">
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Login</button>
            @csrf
        </form>

      </div>
      </div>
  </body>
</html>