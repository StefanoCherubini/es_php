<?php
require_once 'Veicolo.php';
class Automobile extends Veicolo implements JsonSerializable
{
    public $marca;
    public $anno;
    public $modello;

    function __construct($marca,$anno,$modello)
    {
         $this-> marca = $marca;
         $this-> anno = $anno;
         $this-> modello = $modello;
    } 

    public function jsonSerialize(): array {
        return [
            'brand'=> $this->$zmarca,
            'year'=> $this->anno,
            'model'=> $this->modello
        ];
    }

    function set_modello($modello)
    {
        $this-> modello = $modello;
    }

    function get_modello()
    {
        return $this->modello;
    }

    function stampaTot()
    {
        echo "{$this->marca} {$this->anno} {$this->modello} <br>";
    }
}
?>