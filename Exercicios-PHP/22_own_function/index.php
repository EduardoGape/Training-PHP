<?php
function is_palindrome( $string ) {
    //Convert string to lowercase and remove spaces
    $string = str_replace( ' ', '', strtolower( $string ) );

    //Check string against that same string reversed.
    return ( $string == strrev( $string ) ); 
}

$check_string = 'Race Car';
if( is_palindrome( $check_string ) ) {
    echo "<p>$check_string is a palindrome</p>";
}