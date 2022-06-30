<?php
if( ! empty( $_POST ) ) {
    foreach( $_POST as &$value ) {
       //$value = trim( $value );
    }
    echo  $_POST['email'] . ' ' . $_POST['message'];

    $_POST['email'] = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL );
    $_POST['message'] = strip_tags( filter_var( $_POST['message'], FILTER_SANITIZE_ADD_SLASHES ) );

    echo '<br/>' . $_POST['email'];
    echo '<br/>' . $_POST['message'];
}