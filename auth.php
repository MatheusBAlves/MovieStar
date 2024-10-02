<?php
require_once("./templates/header.php");
?>
<div id="main-container" class="container-fluid">
  <div class="col-md-12">
    <div class="row" id="auth-row">
      <div class="col-md-4" id="login-container">
        <h2>Entrar</h2>
        <form action="" method="POST">
          <div class="form-group">
            <input type="hidden" name="type" value="login">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" placeholder="Digite seu e-mail" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" placeholder="Digite seu senha" id="password" name="password">
          </div>
          <input type="submit" value="Entrar" class="btn card-btn">
        </form>
      </div>
      <div class="col-md-4" id="register-container">
        <h2>Criar conta</h2>
        <form action="<?= $BASE_URL ?>auth_process.php" method="POST">
          <input type="hidden" name="type" value="register">
          <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" placeholder="Digite seu e-mail" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" placeholder="Digite seu nome" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="lastname">Sobrenome:</label>
            <input type="text" class="form-control" placeholder="Digite seu sobrenome" id="lastname" name="lastname">
          </div>
          <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" placeholder="Digite seu senha" id="password" name="password">
          </div>
          <div class="form-group">
            <label for="confirmpassword">Confirmação de senha:</label>
            <input type="password" class="form-control" placeholder="Confirme sua senha" id="confirmpassword" name="confirmpassword">
          </div>
          <input type="submit" value="Cadastrar" class="btn card-btn">
        </form>
      </div>
    </div>
  </div>
</div>
<?php
require_once("./templates/footer.php");
?>