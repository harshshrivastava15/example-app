<?php

function calculateFactorial($n) {
    $factorial = 1;

    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}

// Change the value of $num to calculate the factorial of a different number
$num = 5;
$result = calculateFactorial($num);

echo "Factorial of $num is: $result\n";

?>
