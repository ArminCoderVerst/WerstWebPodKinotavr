<?php
    $uploaddir = $_SERVER[ 'DOCUMENT_ROOT' ] . "/html/img/";
    if (!is_dir($uploaddir)) mkdir($uploaddir);
    $uploadfile = $uploaddir . $_FILES[ 'fileuploadnews' ][ 'name' ];
    if ( move_uploaded_file( $_FILES[ 'fileuploadnews' ][ 'tmp_name' ], $uploadfile ) ) {
        echo "true";
    } else {
        echo "false";
    }
?>