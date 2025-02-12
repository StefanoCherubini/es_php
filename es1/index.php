<?php
require_once 'Alunno.php';

$Alunno1 = new Alunno("Gianni","Rossi","33");
$Alunno2 = new Alunno("Marco","Verdiani","48");

$Alunni=array();
array_push($Alunni,$Alunno1 ,$Alunno2);

foreach($Alunni as $Alunno)
{
    $Alunno->stampa();
}
?>