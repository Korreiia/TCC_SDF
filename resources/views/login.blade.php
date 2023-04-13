<html>
  <head>
    <meta charset="UTF-8">
    <title>Tela de Login</title>
  </head>
  <body>
      <div class="login">

        <img class="logo" src="img/logo_alternativa.png" alt="fabião">
        
        <form action="/login" method="get">
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Login</button>
            @csrf
        </form>

      </div>
  </body>
</html>