<?php

require_once "ContaTelefone.php";

$telef = new ContaTelefone("Loki", "555-555-5555");
echo $telef;

echo "<br>Total de Contas: " . ContaTelefone::$totalContas;