<?php
    $uploaddir = $_SERVER[ 'DOCUMENT_ROOT' ] . "/html/pictures/";
    if (!is_dir($uploaddir)) mkdir($uploaddir);
    $uploadfile = $uploaddir . $_FILES[ 'fileupload' ][ 'name' ];
    if ( move_uploaded_file( $_FILES[ 'fileupload' ][ 'tmp_name' ], $uploadfile ) ) {
        echo "true";
    } else {
        echo "false";
    }
?>