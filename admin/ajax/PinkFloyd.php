<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $id = trim($_POST["id"]);

    $connect = mysqli_connect("127.0.0.1", "root", '123', "users_admi_kn") or die('Error sql_connect');
    
    $rw = [];

    // $query = mysqli_query($connect, "SELECT * FROM film INNER JOIN raspisanie ON film.id = raspisanie.raspisanie_id INNER JOIN opisaniefilms ON film.id = opisaniefilms.o_films_id WHERE film.id=$id");
    $query = mysqli_query($connect, "SELECT * FROM film, raspisanie, opisaniefilms WHERE film.id=$id AND raspisanie.raspisanie_id=$id AND opisaniefilms.o_films_id=$id");

    echo json_encode($row = mysqli_fetch_assoc($query));

}
?>