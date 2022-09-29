<?php

// echo __DIR__ . PHP_EOL;
$arrFiles = glob( __DIR__ . '/../doc/*' );
foreach ( $arrFiles as $strFile ) {
    $objFile = (object) pathinfo( $strFile );
    echo ' - [' . $objFile->filename . '](../main/doc/' . $objFile->basename . ')' . PHP_EOL;
    // print_r( $objFile );
    // echo $strFile . PHP_EOL;
    // exit;
}
// - [LDAP](../main/doc/HOWTO-LDAP.md)
