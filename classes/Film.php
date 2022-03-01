<?php 
class Film{
    public $titolo;
    private $regista;
    private $genere;
    private $anno;
    public $durata;
    private $attori;


    public function __construct($_titolo,$_regista,$_genere,$_anno,$_durata,$_attori=[]){
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->genere = $_genere;
        $this->anno = $_anno;
        $this->durata = $_durata;
        $this->attori = $_attori;
    }

    // public function getInfo(){
    //     return "{$this->titolo}<br> {$this->regista}<br> {$this->genere}<br> [{$this->anno}]";
    // }
}

?>

