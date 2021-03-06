<?php


function areaTriangulo ($base, $altura)
{
    return ($base*$altura)/2;
}

function tipoTriangulo($lado1, $lado2, $lado3)
{
    if ($lado1 === $lado2 && $lado1 === $lado3) {
        echo "Es un triangulo equilatero";
    }else if($lado1 !== $lado2 && $lado1 !== $lado3){
        echo "Es un triangulo escaleno";
    }else {
        echo "Es un triangulo Isoceles";
    }
}


$base = 15;
$altura = 20;
$lado1 = 13;
$lado2 = 111;
$lado3 = 12;


echo areaTriangulo($base, $altura);

echo tipoTriangulo($lado1, $lado2, $lado3);