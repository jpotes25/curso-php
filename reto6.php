<?php 

function calculadora($num1, $num2, $operador)
{
    switch ($operador) {
        case '*':
            $resultado = $num1*$num2;
            echo " El resultado de " . $num1 . " multiplicado por " . $num2 . " es: " . $resultado;
            break;
        case '/':
            $resultado = $num1/$num2;
            echo " El resultado de " . $num1 . " dividido en " . $num2 . " es: " . $resultado;
            break;
        case '+':
            $resultado = $num1+$num2;
            echo " El resultado de " . $num1 . " mas " . $num2 . " es: " . $resultado;
            break;
        case '-':
            $resultado = $num1-$num2;
            echo " El resultado de " . $num1 . " menos " . $num2 . " es: " . $resultado;
            break;
        case '%':
            $resultado = $num1%$num2;
            echo " El resultado de " . $num1 . " modulo " . $num2 . " es: " . $resultado;
            break;
        case '**':
            $resultado = $num1**$num2;
            echo " El resultado de " . $num1 . " elevado a " . $num2 . " es: " . $resultado;
            break;
        default:
            echo "Ese no es un operador conocido";
            break;
    }
}

calculadora(2,2,'/');
calculadora(2,2,'*');
calculadora(2,2,'+');
calculadora(2,2,'-');
calculadora(2,2,'%');
calculadora(2,2,'**');
