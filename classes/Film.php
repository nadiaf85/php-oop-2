<?php 
class Film{
    private $titolo;
    private $regista;
    private $genere;
    private $anno;


    public function __construct($_titolo,$_regista,$_genere,$_anno){
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->genere = $_genere;
        $this->anno = $_anno;
    }

    public function getInfo(){
        return "{$this->titolo}<br> {$this->regista}<br> {$this->genere}<br> [{$this->anno}]";
    }
}

?>

