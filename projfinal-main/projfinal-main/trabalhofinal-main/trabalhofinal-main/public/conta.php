<?php
use Database\Database;

    if(isset($_POST['nome'])) {
        $nome = $_POST['nome'];
    } else {
        $nome = null;
    }

    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email = null;
    }

    if(isset($_POST['pass'])) {
        $pass = $_POST['pass'];
    } else {
        $pass = null;
    }


    // var_dump($nome);
    // var_dump($email);
    // var_dump($pass);
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

require_once "../src/model/Database.php";
$db = new Database();

$resultDb = $db->insert(
    "INSERT INTO `usuarios`(`nome`, `email`, `senha`) VALUES ('$nome','$email','$pass')"
);

header("Refresh: 3;url=inicio.php");

require_once"../src/views/header.php";
?>

<h1 style="text-align: center; color:red;">CONTA CRIADA COM SUCESSO</h1>

<?php require_once"../src/views/footer.php"; ?>

