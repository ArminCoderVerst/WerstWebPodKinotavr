<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $logofilms = trim($_POST["logofilms"]);

        $vozrast = trim($_POST["vozrast"]);
        $zagolstat = trim($_POST["zagolstat"]);
        $janr = trim($_POST["janr"]);
        $datapokaz = trim($_POST["datapokaz"]);
        $formpokaz = trim($_POST["formpokaz"]);

        $kr = trim($_POST['kalin_rasp']);
        $or = trim($_POST['octob_rasp']);
        $mr = trim($_POST['mir_rasp']);
        //А ТУТ МНЕ НАДО ОБЪЯВИТЬ


        $connect = mysqli_connect("127.0.0.1", "root", '123', "users_admi_kn") or die('Error sql_connect');
        
        mysqli_query($connect, "INSERT INTO film(logo_films_id, vozrast_tongue_id, movie_title_id, genre_id, release_date_id, display_form_id, otborka) VALUES('$logofilms', '$vozrast', '$zagolstat', '$janr', '$datapokaz', '$formpokaz', '$otborka')");
        // mysqli_error($connect);
        $q = mysqli_query($connect, "SELECT * FROM film WHERE id=LAST_INSERT_ID();");

        $id = mysqli_fetch_array($q);

        //--> СЮДА ЦЕНЫ ДОБАВИТЬ
        mysqli_query($connect, "INSERT INTO raspisanie(raspisanie_id, seans_october, seans_mir, seans_kalinina) VALUES({$id['id']}, '$or', '$mr', '$kr')");
    }
?>