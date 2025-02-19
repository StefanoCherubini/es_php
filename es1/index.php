<?php
header("Content-Type: application/json");
require_once 'Alunno.php';

$voti = [ 
           new voti ("matematica",7,"bravo ma non si applica"),
           new voti ("italiano",8,"bravo bravo bravo")
        ];

$indirizzo = [ 
                new indirizzo("Via del fossetto","5/a","50145"),
                new indirizzo("Via targioni tozzetti","18","50144")
              ];

  
$Alunni = [
                new Alunno("Stefano","Cherubini",18,$voti[0],$indirizzo[0], true),
                new Alunno("Tommaso","Dell'osa",18,$voti[1],$indirizzo[1], true)
          ];

echo json_encode($Alunni);
?>