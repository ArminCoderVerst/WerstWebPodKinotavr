<?php
if ( $_SERVER[ 'REQUEST_METHOD' ] == "POST" ) {
	$connection = mysqli_connect( "localhost", "root", "123", 'users_admi_kn' ) or die( "error" );

	$login = trim( $_POST[ 'login' ] );
	$pass = trim( $_POST[ 'pass' ] );
	$pass = md5(md5($pass));

	$query = mysqli_query( $connection, "SELECT token FROM users WHERE login='$login' AND password='$pass'" );

	if ( mysqli_num_rows( $query ) > 0 ) {
		$row = mysqli_fetch_array($query);
		
		echo $row["token"];
		
	} else {
		echo "error";
	}

}
?>