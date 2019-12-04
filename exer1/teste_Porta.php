<?php

require_once "Porta.php";
require_once "PortaEletrica.php";

$porta1 = new Porta("FabriPortas", 2, 7.5);
echo $porta1 . "<br>";

$porta2 = new PortaEletrica("Tecnoportas", 2.5, 6, 220);
echo $porta2 . "<br>";

echo "Total de Portas = " . $porta1->getTotalPortas();