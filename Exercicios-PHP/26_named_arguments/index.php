<?php
function math( $a, $b = 2, $op = 'multiply' ) {
    if ( 'add' == $op ) {
        return $a + $b;
    } else if ( 'sub' == $op ) {
        return $a - $b;
    } else if ( 'divide' == $op ) {
        return $a / $b;
    }

    return $a * $b;
}

echo math( 12, op: 'add', b: 12 );