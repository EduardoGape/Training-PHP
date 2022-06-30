<?php
setcookie( 'visited', true );

if( isset( $_COOKIE['visited'] ) ) :
    setcookie( 'visited', false, time() - 3600 );
?>
<h1>Welcome back!</h1>
<?php else: ?>
<h1>Welcome!</h1>
<?php endif; ?>