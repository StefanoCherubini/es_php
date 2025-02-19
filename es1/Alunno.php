<?php 
require_once 'voti.php';
require_once 'indirizzo.php';
class Alunno implements JsonSerializable{
    protected $nome;
    protected $cognome;
    protected $eta;
    protected $voti = [];
    protected $indirizzo;
    protected $promosso;

   
    function __construct($nome,$cognome,$eta,$voti,$indirizzo,$promosso) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->voti = $voti;
        $this->indirizzo = $indirizzo;
        $this->promosso = $promosso;
    }


    public function jsonSerialize(): array {
        return [
            'nome'=> $this->nome,
            'cognome'=> $this->cognome,
            'eta'=> $this->eta,
            //'voti'=> $this->voti,
            //'indirizzo'=> $this->indirizzo,
            'promosso' => $this-> promosso
        ];
    }

    
    function set_nome($nome){
        $this->nome = $nome;
    }

    function get_nome(){
        return $this->nome;
    }

    function set_cognome($cognome){
        $this->cognome = $cognome;
    }

    function get_cognome(){
        return $this->cognome;
    }

    function set_eta($eta){
        $this->eta = $eta;
    }

    function get_eta(){
        return $this->eta;
    }

    
}



?>