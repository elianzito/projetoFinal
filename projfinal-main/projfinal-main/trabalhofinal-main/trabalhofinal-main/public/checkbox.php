<?php

use Database\Database;
use Model\Pedido;

    require_once '../vendor/autoload.php';

    $ped = new Pedido();


    if(isset($_GET['ingredientes']) ) {
        $ped->itens = $_GET['ingredientes'];
    } else {
        $ped->itens = null;
    }

    if(isset($_GET['qtde']) ) {
        $ped->qtde = $_GET['qtde'];
    } else {
        $ped->qtde = null;
    }

    if(isset($_GET['pgto']) ) {
        $ped->pgto = $_GET['pgto'];
    } else {
        $ped->pgto = null;
    }

    if(isset($_GET['entrega']) ) {
        $ped->entrega = $_GET['entrega'];
    } else {
        $ped->entrega = null;
    }

    $listaItens = null;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../public/assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/assets/css/style.css">
    <title>Listagem de dados</title>
</head>
<body>
    <?php if($ped->itens != null) : ?>
        <?php foreach($ped->itens as $i) :  ?>
        <h3 style="font-family: courrier;">
            <?php 
                echo $i;
                $listaItens .= $i . ', ';
             ?> 
        </h3><hr>
        <?php endforeach ?>
    <?php else : echo "<h1 style='text-align: center; ;'><a href='receba.php' style='color:red;' > Sem ingredientes. </a></h1><hr>"; endif ?>
    <hr>
    <h3 style="font-family: courrier;"> <?= $ped->qtde ?> </h3>
    <hr>
    <h3 style="font-family: courrier;"> <?= $ped->pgto ?> </h3>
    <hr>
    <h3 style="font-family: courrier;"> <?= $ped->entrega ?> </h3>
    <h3>
        <hr>
        <?= $ped->desconto() ?>
    </h3>

<?php
/////////////////////////////////////////////////////////////////////////////////////////////
require_once "../src/model/Database.php";
$db = new Database();

$db->insert(
    "INSERT INTO pedidos(`data_hora`, `itens`, `pgto`, `qtde`, `entrega`)
    VALUES ('$ped->dataHora','$listaItens','$ped->pgto', $ped->qtde, '$ped->entrega');"
);
///////////////////////////////////////////////////////////////////////
?>

</body>
</html>