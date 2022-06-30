<?php
class Person {
    var $first_name;
    var $last_name;

    function __construct( $fn, $ln ) {
        $this->first_name = $fn;
        $this->last_name = $ln;
    }

    public function get_first_name() {
        return $this->first_name;
    }

    public function get_last_name() {
        return $this->last_name;
    }
}

// Challenge: Sort this array of Person objects by last, then first name! 

$rob = new Person( 'Rob', 'Casabona' );
$joe = new Person( 'Joe', 'Casabona' );
$erin = new Person( 'Erin', 'Casabona' );
$steve = new Person( 'Steve', 'Wozniack' );
$bill = new Person( 'Bill', 'Gates' );
$walt = new Person( 'Walt', 'Disney' );
$bob = new Person( 'Bob', 'Iger' );

$people = array( $rob, $joe, $erin, $steve, $bill, $walt, $bob );

