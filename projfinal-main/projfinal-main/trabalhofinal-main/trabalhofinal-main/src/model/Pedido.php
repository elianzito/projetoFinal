<?php

namespace Model;

class Pedido 
{
    //att
    private $codPedido;
    public $dataHora;
    public $itens;
    public $pgto;
    public $qtde;
    public $entrega;

    //mtds
    public function __construct()
    {
        //Executa assim que um novo
        //objeto dessa classe for criado
        echo $this->gerarCodigo();
        echo $this->informarData();
    }

    private function informarData()
    {
     date_default_timezone_set ("america/sao_paulo");
     $this->dataHora = date('Y-m-d H:i:s');
     return "<br>Data e hora do pedido: " . date("d/m/y - H:i:s"); 
    }

    private function gerarCodigo()
    {
        $this->codPedido = random_int(100, 300);
        return $this->codPedido;
    }

    public function desconto()
    {
        if($this->qtde >= 5 && $this->entrega == 'Viamão'){
            echo "Desconto de 10%off";
        }
    }

}