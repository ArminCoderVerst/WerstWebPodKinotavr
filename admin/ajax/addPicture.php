<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = trim($_POST["name"]);
    $nameFile = trim($_POST["nameFile"]);
    $txt = trim($_POST["txt"]);
    $link = trim($_POST["link"]);

    $con = mysqli_connect("127.0.0.1", "root", '123', "users_admi_kn") or die('Error sql_connect');

    mysqli_query($con, "INSERT INTO pictures(slide_id, zagolovok_id, text_id, link_films_id) VALUES('$nameFile', '$name', '$txt', '$link')");
}
?>