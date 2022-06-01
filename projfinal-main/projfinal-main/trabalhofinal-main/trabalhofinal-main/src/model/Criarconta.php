<?php

namespace Model;

class Criarconta {
    private $cod;
    public $nome;
    public $email;
    public $senha;

    public function __construct() {
        echo $this->gerarCodigo();
    }

    private function gerarCodigo()
    {
        $this->codPedido = random_int(100, 300);
        return $this->codPedido;
    }
}