<?php

require_once "Estudante.php";

$aluno1 = new Estudante(001, "James K. Gore", "21/06/1935", 400);
echo $aluno1;

$aluno2 = new Estudante(002, "Gregory Y. Ault", "07/06/1945", 800);
echo "<br/>". $aluno2;

echo "<br/>". $aluno1->getNumEstudantes();