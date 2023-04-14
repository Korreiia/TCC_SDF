<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style_login.css">
    <title>SDF Login</title>
  </head>
  <body>
    
    <div class="container">
      <div class="login">

        <img class="logo" src="img/logo_alternativa.png" alt="fabião">
        
        <form action="/login" method="get">
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit" href="/home">Login</button>
            @csrf
        </form>

        <button type="button" href="/criar_conta.">Criar conta</button>
        a
      </div>
      </div>

  </body>
</html>