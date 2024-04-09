<?php
require_once ("clsBicicleta.php");
class MountainBike extends Bicicleta
{
    public $marcha;

    public function __construct($id, $marca, $cor, $marcha)
    {
        parent::__construct($id, $marca, $cor);
        $this->marcha = $marcha;
    }
    public function mudarMarcha($marcha)
    {
        echo "<br>Bicicleta na marcha $marcha";
    }

    public function getMarcha()
    {
        return $this->marcha;
    }

    public function setMarcha($marcha): void
    {
        $this->marcha = $marcha;
    }




}