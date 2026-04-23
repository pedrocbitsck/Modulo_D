<?php
//Verifique se uma variável $idade = 18 é maior ou igual a 18. Se for, mostre "Maior de idade".

$idade = readline("Digite sua idade: ");

if ($idade >= 18) {
    echo "Maior de idade";
}else{

if ($idade < 18) 
    echo "Menor de idade";
}
?>