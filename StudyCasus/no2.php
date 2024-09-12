<?php

for ($r = 1; $r <= 100; $r++) {
    if ( $r % 3 == 0 && $r % 5 == 0 ) {
        echo "fizzBuzz";
    } else if ( $r % 3 == 0 ) {
        echo "fizz";
    } else if ($r % 5 == 0) {
        echo "Buzz";
    } else {
        echo $r;
    }
    echo "<br>";
}

?>