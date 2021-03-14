<?php

    $number = $_POST['number'];

    function multiplyTwoNumbers($number1, $number2) : float{
        return $number1 * $number2;
    }

    function printMultiplyTable($number){
        for ($i = 0; $i <= 10; $i++){
            echo "<tr>";
            echo "<td>$number x $i</td>";
            echo "<td>", multiplyTwoNumbers($number, $i), "</td>";
            echo "</tr>";
        }
    }

    function factorialOfANumber($number) : float{
        $factorial = 1;
        for ($f = $number; $f >= 1; $f--) {
            $factorial *= $f;
        }
        return $factorial;
    }

    function printFactorialResult($factorial, $number)
    {
        echo "<tr>";
        echo "<td> $number!</td>";
        echo "<td> $factorial </td>";
        echo "<tr>";
    }
?>

<table border="1">
    <?php
        printMultiplyTable($number);
        printFactorialResult(factorialOfANumber($number), $number);
    ?>
</table>