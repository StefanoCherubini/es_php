<?php 
class indirizzo implements JsonSerializable{
    protected $indirizzo;
    protected $nCiv;
    protected $cap;
   
    function __construct($indirizzo,$nCiv,$cap) {
        $this->indirizzo = $indirizzo;
        $this->nCiv = $nCiv;
        $this->cap = $cap;
    }

    public function jsonSerialize(): array {
        return [
            'ind'=> $this->indirizzo ,
            'nCiv'=> $this->nCiv,   
            'cap'=> $this->cap
        ];
    }

    function get_indirizzo(){
        return  $this->indirizzo;
    }


    function set_indirizzo($indirizzo){
        $this->indirizzo = $indirizzo;
    }


    function get_nCiv(){
        return  $this->nCiv;
    }


    function set_nCiv($nCiv){
        $this->nCiv = $nCiv;
    }


    function get_cap(){
        return  $this->cap;
    }


    function set_cap($cap){
        $this->cap = $cap;
    }



}
?>