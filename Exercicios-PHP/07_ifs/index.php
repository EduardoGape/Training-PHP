<?php
if ( 10 < 1 ) {
	echo '<p>we stopped at if</p>';
} else if ( 10 < 4 ) {
	echo '<p>we stopped at the first else if.</p>';
} else if ( 10 < 11 ) {
	echo	'<p>we stopped at the second else if</p>';
} else if ( 10 < 20 ) {
	echo '<p>we stopped at the 3rd else if</p>';
} else {
	echo '<p>None of the conditions are true, we never stopped, so this is the else</p>';
}

$i = 10;

if ( 11 == $i ) {
    echo '<h3>Welcome back, user!</h3>';
} else {
    echo '<h3>Welcome to the site!</h3>';
}