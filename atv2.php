<?php

$marca = 'marca';
$modelo = 'modelo';
$versao = "versao";

$marca = readline("Digite a marca do automóvel: \n");
    if(($marca == $marca) && ($modelo == $modelo) && ($versao == $versao)){
        echo "Veículo selecionado." .$marca;
    }

$modelo = readline("\nDigite o modelo desejado: \n");
    if(($modelo) != ($modelo)){
        echo "Modelo inexistente na frota!";
    }
?>
 