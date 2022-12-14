<?php

$name = "matheus";
$surName = "barbosa";


function soma($valueA, $valueB)
{
    $total = $valueA + $valueB;
    echo "$total ". PHP_EOL;;

}

soma(1, 2);


function multiplicacao($valueA, $valueB, $valueC)
{
    $total = $valueA * $valueB + $valueC;
    echo "$total" . PHP_EOL;;
}

multiplicacao(5, 5, 10);

function divisao($valueA, $valueB, $valueC, $valueD)
{
    $total =  (($valueB * $valueC) + $valueA) / $valueD;
    echo $total . PHP_EOL;

}

divisao(50,30,2, 3);

function resto($valueA,$valueB){
    $total = $valueA % $valueB;

    if($total == 0){
        echo 'esse numero é par';
    }else {
        echo 'esse numero é impar';
    }

}

resto (9, 2);
