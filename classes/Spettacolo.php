<?php

class Spettacolo{
    private $data;
    private $orario;
    private $sala;

    public function __construct($_data,$_orario,$_sala){
        $this-> data = $_data;
        $this-> orario = $_orario;
        $this-> sala = $_sala;
    }
}
?>