<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $id = trim($_POST['id']);
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

        //описание фильма 
        $vozrastogranch = trim($_POST['vozrastogranch']);
        $janrfilm = trim($_POST['janrfilm']);
        $originalname = trim($_POST['originalname']);
        $year = trim($_POST['year']);
        $country = trim($_POST['country']);
        $aboutfilms = trim($_POST['aboutfilms']);

        //А ТУТ МНЕ НАДО ОБЪЯВИТЬ

        $connect = mysqli_connect("127.0.0.1", "root", '123', "users_admi_kn") or die('Error sql_connect');
        
        //--> СЮДА КАРТОЧКА ФИЛЬМА
        mysqli_query($connect, "UPDATE film SET logo_films_id='$logofilms', vozrast_tongue_id='$vozrast', movie_title_id='$zagolstat', genre_id='$janr', release_date_id='$datapokaz', display_form_id='$formpokaz', otborka='$otborka' WHERE id=$id");
        // mysqli_error($connect);
        
        //$q = mysqli_query($connect, "SELECT * FROM film WHERE id=LAST_INSERT_ID();");
        
        //--> СЮДА ЦЕНЫ ДОБАВИТЬ
        mysqli_query($connect, "UPDATE raspisanie SET cen_day_seans_kalin_id='$dayseanskalin', cen_vecherni_seas_kalin_id='$vecherseanskalin', cen_night_seans_kalin_id='$cennaightkalin', day_divan_love_seat_kalin_id='$dayddlskalin', day_divan_stol_vip_kalin_id='$dayddstkalin', vecherni_divan_love_seat_kalin_id='$vecherddlskalin', vecherni_divan_stol_vip_kalin_id='$vecherddstkalin', night_divan_love_seat_kalin_id='$nightddlskalin', night_divan_stol_vip_kalin_id='$nightddstkalin', cen_day_seans_octob_id='$dayseansoctob', cen_vecherni_seas_octob_id='$vecherseansoctob', cen_night_seans_octob_id='$cennaightoctob', day_divan_love_seat_octob_id='$dayddlsoctob', day_divan_stol_vip_octob_id='$dayddstoctob', vecherni_divan_love_seat_octob_id='$vecherddlsoctob', vecherni_divan_stol_vip_octob_id='$vecherddstoctob', night_divan_love_seat_octob_id='$nightddlsoctob', night_divan_stol_vip_octob_id='$nightddstoctob', cen_day_seans_mir_id='$dayseansmir', cen_vecherni_seas_mir_id='$vecherseansmir', cen_night_seans_mir_id='$cennaightmir', day_divan_love_seat_mir_id='$dayddlsmir', day_divan_stol_vip_mir_id='$dayddstmir', vecherni_divan_love_seat_mir_id='$vecherddlsmir', vecherni_divan_stol_vip_mir_id='$vecherddstmir', night_divan_love_seat_mir_id='$nightddlsmir', night_divan_stol_vip_mir_id='$nightddstmir', seans_october='$or', seans_mir='$mr', seans_kalinina='$kr' WHERE raspisanie_id=$id");

        //--> СЮДА ОПИСАНИЕ
        mysqli_query($connect, "UPDATE opisaniefilms SET vozrast_id='$vozrastogranch', janr_id='$janrfilm', original_name_id='$originalname', year_id='$year', country_id='$country', opisanie_film_id='$aboutfilms' WHERE o_films_id=$id");
    }
?>