<?php
header("Content-Type: application/json");
require_once 'Alunno.php';
$alunni_serializzati = file_get_contents("Alunni.json");
$alunni2 = json_decode($alunni_serializzati,true);
$Alunni = [];
foreach($alunni2 as $a)
{
    $var = new Alunno($a["nome"],$a["cognome"],$a["eta"],"" , "", true);
    array_push($Alunni, $var);
}

echo json_encode($Alunni);
?>