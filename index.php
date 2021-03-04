<?php

class Answer
{
    protected $clients = []; 
    
    protected $insurers = [];
    
}

//Asignacion

$num = 9;
$lang = 
[
    'es' => 'español',
    'en' => 'ingles'
];

//Aritmetica

echo "Suma 2 + 2 " . ((int)2 + (int)2) . "\n";
echo "Resta 2 - 2 " . ((int)2 - (int)2) . "\n";
echo "Multiplica 2 * 2 " . ((int)2 * (int)2) . "\n";
echo "Division 2 / 2 " . ((int)2 / (int)2) . "\n";
echo "Modulo 2 % 2 " . ((int)2 % (int)2) . "\n";
echo "Exponencial 2 ** 2 " . ((int)2 ** (int)2) . "\n";

//Comparacion

//Igual ==, compara valores

if ('9' == 9) {
    echo "true \n";
}

//Igual ===, no solo compara valores, sino tambien tipos

if ('9' === 9) {
    echo "No compara tipos \n";
}else{
    echo "Si compara tipos \n";
}
if (9 === 9){
    echo "Esta linea es igual en valor y en tipo \n";
}

//Diferencia !=, solo compara valores

if ('9' != 9)
{
    echo "Aqui compararia tipo y valor \n";
}else
{ 
    echo "Aqui solo compara valor \n";
}

//Diferencia !==, compara valores y tipos

if ('9' !== 9)
{
    echo "Aqui compararia tipo y valor \n";
}else
{
    echo "Aqui solo compararia valor \n";
}

// Otros signos "<, >, <=, >="

//Variables variables

$app = 'name';
$name = 'platzi';

echo $$app; //Platzi
echo $app;  //Name

