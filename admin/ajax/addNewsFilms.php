<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //карточка фильма
        $logofilms = trim($_POST["logofilms"]);
        $vozrast = trim($_POST["vozrast"]);
        $zagolstat = trim($_POST["zagolstat"]);
        $janr = trim($_POST["janr"]);
        $datapokaz = trim($_POST["datapokaz"]);
        $formpokaz = trim($_POST["formpokaz"]);

        //расписание сеансов
        $kr = trim($_POST['kalin_rasp']);
        $or = trim($_POST['octob_rasp']);
        $mr = trim($_POST['mir_rasp']);

        //цены на день - вечер -ночь сеансы калинина
        $dayseanskalin = trim($_POST['dayseanskalin']);
        $vecherseanskalin = trim($_POST['vecherseanskalin']);
        $cennaightkalin = trim($_POST['cennaightkalin']);

        //цены на дневны диваны калинина
        $dayddlskalin = trim($_POST['dayddlskalin']);
        $dayddstkalin = trim($_POST['dayddstkalin']);

        //цены на вечернии диваны калинина
        $vecherddlskalin = trim($_POST['vecherddlskalin']);
        $vecherddstkalin = trim($_POST['vecherddstkalin']);

        //цены на ночные диваны калинина
        $nightddlskalin = trim($_POST['nightddlskalin']);
        $nightddstkalin = trim($_POST['nightddstkalin']);

        //цены на день - вечер -ночь сеансы октябрь
        $dayseansoctob = trim($_POST['dayseansoctob']);
        $vecherseansoctob = trim($_POST['vecherseansoctob']);
        $cennaightoctob = trim($_POST['cennaightoctob']);
        
        //цены на дневны диваны октябрь
        $dayddlsoctob = trim($_POST['dayddlsoctob']);
        $dayddstoctob = trim($_POST['dayddstoctob']);

        //цены на вечернии диваны октябрь
        $vecherddlsoctob = trim($_POST['vecherddlsoctob']);
        $vecherddstoctob = trim($_POST['vecherddstoctob']);

        //цены на ночные диваны октябрь
        $nightddlsoctob = trim($_POST['nightddlsoctob']);
        $nightddstoctob = trim($_POST['nightddstoctob']);

        //цены на день - вечер -ночь сеансы мир
        $dayseansmir = trim($_POST['dayseansmir']);
        $vecherseansmir = trim($_POST['vecherseansmir']);
        $cennaightmir = trim($_POST['cennaightmir']);
        
        //цены на дневны диваны мир
        $dayddlsmir = trim($_POST['dayddlsmir']);
        $dayddstmir = trim($_POST['dayddstmir']);

        //цены на вечернии диваны мир
        $vecherddlsmir = trim($_POST['vecherddlsmir']);
        $vecherddstmir = trim($_POST['vecherddstmir']);

        //цены на ночные диваны мир
        $nightddlsmir = trim($_POST['nightddlsmir']);
        $nightddstmir = trim($_POST['nightddstmir']);

        //А ТУТ МНЕ НАДО ОБЪЯВИТЬ


        $connect = mysqli_connect("127.0.0.1", "root", '123', "users_admi_kn") or die('Error sql_connect');
        
        mysqli_query($connect, "INSERT INTO film(logo_films_id, vozrast_tongue_id, movie_title_id, genre_id, release_date_id, display_form_id, otborka) VALUES('$logofilms', '$vozrast', '$zagolstat', '$janr', '$datapokaz', '$formpokaz', '$otborka')");
        // mysqli_error($connect);
        $q = mysqli_query($connect, "SELECT * FROM film WHERE id=LAST_INSERT_ID();");

        $id = mysqli_fetch_array($q);

        //--> СЮДА ЦЕНЫ ДОБАВИТЬ
        mysqli_query($connect, "INSERT INTO raspisanie(raspisanie_id, cen_day_seans_kalin_id, cen_vecherni_seas_kalin_id, cen_night_seans_kalin_id, day_divan_love_seat_kalin_id, day_divan_stol_vip_kalin_id, vecherni_divan_love_seat_kalin_id, vecherni_divan_stol_vip_kalin_id, night_divan_love_seat_kalin_id, night_divan_stol_vip_kalin_id, cen_day_seans_octob_id, cen_vecherni_seas_octob_id, cen_night_seans_octob_id, day_divan_love_seat_octob_id, day_divan_stol_vip_octob_id, vecherni_divan_love_seat_octob_id, vecherni_divan_stol_vip_octob_id, night_divan_love_seat_octob_id, night_divan_stol_vip_octob_id, cen_day_seans_mir_id, cen_vecherni_seas_mir_id, cen_night_seans_mir_id, day_divan_love_seat_mir_id, day_divan_stol_vip_mir_id, vecherni_divan_love_seat_mir_id, vecherni_divan_stol_vip_mir_id, night_divan_love_seat_mir_id, night_divan_stol_vip_mir_id, seans_october, seans_mir, seans_kalinina) VALUES({$id['id']}, '$dayseanskalin', '$vecherseanskalin', '$cennaightkalin', '$dayddlskalin', '$dayddstkalin', '$vecherddlskalin', '$vecherddstkalin', '$nightddlskalin', '$nightddstkalin', '$dayseansoctob', '$vecherseansoctob', '$cennaightoctob', '$dayddlsoctob', '$dayddstoctob', '$vecherddlsoctob', '$vecherddstoctob', '$nightddlsoctob', '$nightddstoctob', '$dayseansmir', '$vecherseansmir', '$cennaightmir', '$dayddlsmir', '$dayddstmir', '$vecherddlsmir', '$vecherddstmir', '$nightddlsmir', '$nightddlsmir', '$or', '$mr', '$kr')");
    }
?>