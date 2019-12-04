<?php

require_once "Produto.php";
            
$produto = new Produto("235", "Urânio");
$produto->setCustoProduto("3600");
$produto->setQuantidadeEstoque(10);
$quantiaEstoque =  $produto->poeEstoque(5);