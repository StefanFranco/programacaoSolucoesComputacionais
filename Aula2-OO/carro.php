<?php
class carro{
    public $ano;
    public $marca;
    public $modelo;
    public $cor;

    public function __construct($ano, $marca, $modelo, $cor){
        $this->ano = $ano;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
    }


//metodos
public function status(){
    echo "<h2>Dados do Veiculo</h2>";
    echo "<p>Ano:" . $this->ano . "</p>";
    echo "<p>Marca:" . $this->marca . "</p>";
    echo "<p>Modelo:" . $this->modelo . "</p>";
    echo "<p>cor:" . $this->cor . "</p>";
}
public function vender($valor){
    echo $this->marca . " " . $this->modelo .
    " vendido por " . $valor;



}
public function contar($carros){
    retur


}






