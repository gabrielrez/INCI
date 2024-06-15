<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../public/styles/login/login.css">
</head>

<body>
  <header class="header-container">
    <div class="header">
      <a href="../view/lp.php"><img src="../public/img/Frame 94.png" alt="Logo INCI"></a>
    </div>
  </header>

  <main>
    <form class="form-container">
      <div class="header-form">
        <div class="content">
          <h3>Fazer login</h3>
          <p>Use sua Conta INCI</p>
        </div>
        <img src="../public/img/logo-login.png" alt="">
      </div>
      <form action="#" method="post">
        <div class="input">
          <label for="email">E-mail ou telefone</label>
          <input type="text" id="email" name="email" placeholder="thiago@zamply.com" required>
        </div>
        <div class="input">
          <label for="password">Senha</label>
          <input type="password" id="password" name="password" placeholder="********" required>
          <a href="#" class="--c1">Esqueci a senha</a>
        </div>

        <div class="submit">
          <p class="submit-text">Não está no seu computador? Use o modo visitante para fazer login com privacidade.</p>
          <button type="submit" class="submit-hub-btn">Entrar</button>
          <a href="../view/hub.php">Entrar</a>
        </div>
      </form>
    </form>
  </main>
</body>


<script src="../public/script/login.js"></script>

</html>