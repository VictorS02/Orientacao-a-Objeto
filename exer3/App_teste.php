<?php

require_once "App.php";

$app1 = new App("AppMap", 2);
echo $app1;

echo "<br>Baixado(s): " . $app1->getDownloaded();