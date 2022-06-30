<?php
$text = file_get_contents( 'treasure-island.txt' );
echo file_put_contents( 'ti-copy.txt', $text, FILE_APPEND );

$list = file('mailing-list.txt');
$file_handle = fopen( 'sub-list.txt', 'a' );
foreach( $list as $entry ) {
    if ( strpos( $entry, 'casabona.org' ) ) {
        fwrite( $file_handle, $entry );
    }
}
fclose( $file_handle );