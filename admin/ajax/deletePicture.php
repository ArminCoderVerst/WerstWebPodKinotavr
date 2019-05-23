<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $con = mysqli_connect("127.0.0.1", "root", '123', "users_admi_kn") or die('Error sql_connect');

    $id = trim($_POST['id']);

    mysqli_query($con, "DELETE FROM pictures WHERE id=$id");
    
}
?>