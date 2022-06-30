<?php
/**
 * Write equations that evaluate the following: 
 * (14 + 82 - 32 / 2) 2
 * 18 x (3 ÷ 6 -9) x 10
 * 5x (12 ÷2 -8 x 4 +12x6)
 * 
 * Be sure to use additional parentesis to get the right results! 
 */

 $result = array();

 $results[] = (14 + 82 - (32 / 2 ) )**2;

 $results[] = 18 * ( (3/6) - 9 ) * 10;

 $results[] = 5 * ( (12/2) - (8*4) + (12*6) );

 echo '<pre>';
 print_r( $results );
 echo '</pre>';