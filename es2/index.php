<?php 
require_once 'Automobile.php';

$auto1 = new Automobile("FIAT","2008","Panda");
$auto2 = new Automobile("TOYOTA","2019","Yaris");

$AutoTot=array();
array_push($AutoTot,$auto1 ,$auto2);

    echo "<h2> Automobili : </h2>";
foreach($AutoTot as $auto)
{
    $auto->stampaTot();
}
?>