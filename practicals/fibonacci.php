<?php

function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Change the value of $n to generate Fibonacci sequence up to a different number
$n = 10;

echo "Fibonacci sequence up to $n terms: ";
for ($i = 0; $i < $n; $i++) {
    echo fibonacci($i) . ", ";
}

?>
