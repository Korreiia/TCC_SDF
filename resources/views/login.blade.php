<html>
  <head>
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style_login.css">
    <title>Doa ETEC</title>
  </head>
  <body>
    
    <div class="container">
      <div class="login">

        <img class="logo" src="img/logoR.png" alt="logo">
            
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
            @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
            @endforeach
                </ul>
                </div>
            @endif

            @if(session('danger'))
              <div>
                {{ session('danger') }}
              </div>
            @endif
            
        <form action="{{ route('fazerLogin') }}" method="post">
            <input type="email" name="email" placeholder="E-mail">
            <input type="password" name="senha" placeholder="Senha">
            <label for="senha"></label>
              <i class="fa fa-eye" aria-hidden="true" onclick="mostrarSenha()"></i>
            <button type="submit">Login</button>
            @csrf
        </form>
        
        <a href="/criar_conta">Criar Conta</a>
        
      </div>
      </div>

  </body>
</html>