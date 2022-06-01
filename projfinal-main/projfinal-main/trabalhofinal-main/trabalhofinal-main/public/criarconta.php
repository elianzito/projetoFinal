<?php

use Database\Database;

require_once"../src/views/header.php";

require_once "../src/model/Database.php";

$db = new Database(); ?>

<div class="login-center">

    <H1 style="color: red;">Criar conta</H1>
        <form method="post" action="conta.php">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">
                        

                        <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" required>
                        <br>
                        <input type="email" class="form-control" name="email" placeholder="Digite seu email" required>
                        <br>
                        <input type="password" class="form-control" name="pass" placeholder="Digite sua senha" required>
                        <br><br>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-6 offset-3"> -->
                        <input type="submit" value="Enviar dados" class="btn btn-success col-lg-5 offset-lg-1 col-sm-12">
                        &nbsp;
                        <input type="reset" value="Limpar dados" class="btn btn-outline-success col-lg-5 col-sm-12">
                    <!-- </div> -->
                </div>
            </div>
        </form>
</div>

<?php require_once"../src/views/footer.php"; ?>