<?php 
class voti implements JsonSerializable{
    protected $materia;
    protected $voto;
    protected $giudizio;
   
    function __construct($materia,$voto,$giudizio) {
        $this->materia = $materia;
        $this->voto = $voto;
        $this->giudizio = $giudizio;
    }

    public function jsonSerialize(): array {
        return [
            'subject'=> $this->materia ,
            'mark'=> $this->voto,
            'text'=> $this->giudizio
        ];
    }

    function get_materia(){
        return  $this->materia;
    }


    function set_materia($materia){
        $this->materia = $materia;
    }


    function get_voto(){
        return  $this->voto;
    }


    function set_voto($voto){
        $this->voto = $voto;
    }


    function get_giudizio(){
        return  $this->giudizio;
    }


    function set_giudizio($giudizio){
        $this->giudizio = $giudizio;
    }



}
?>