(function(){
    $(".renamefilms").click(function(){
        let curID = $(this).attr("id_rename_films");

        $("#hiddenUpdate").val(curID);

        $.post(
            "ajax/addValue.php",
            {
                id: curID
            },
            (e)=>{
                let data = JSON.parse(e);
                //udpade card film
                $("#img-preview-news").attr('src', '../html/img/'+ data.logo_films_id);
                $("#fileNameNewsLogo").val(data.logo_films_id);
                $("#exampleInputVozLeng").val(data.vozrast_tongue_id);
                $("#exampleInputStat").val(data.movie_title_id);
                $("#exampleInputJanr").val(data.genre_id);
                $("#exampleInputData").val(data.release_date_id);
                $("#exampleInputFormDisplay").val(data.display_form_id);

                //updete raspisanie kalinina
                $("#dayseanskalin").val(data.cen_day_seans_kalin_id);
                $("#vecherseanskalin").val(data.cen_vecherni_seas_kalin_id);
                $("#cennaightkalin").val(data.cen_night_seans_kalin_id);
                //updete day divan kalin
                $("#dayddlskalin").val(data.day_divan_love_seat_kalin_id);
                $("#dayddstkalin").val(data.day_divan_stol_vip_kalin_id);
                //update vecher divan kalin
                $("#vecherddlskalin").val(data.vecherni_divan_love_seat_kalin_id);
                $("#vecherddstkalin").val(data.vecherni_divan_stol_vip_kalin_id);
                //update night divan kalin
                $("#nightddlskalin").val(data.night_divan_love_seat_kalin_id);
                $("#nightddstkalin").val(data.night_divan_stol_vip_kalin_id);

                //update raspisanie october
                $("#dayseansoctob").val(data.cen_day_seans_octob_id);
                $("#vecherseansoctob").val(data.cen_vecherni_seas_octob_id);
                $("#cennaightoctob").val(data.cen_night_seans_octob_id);
                //updete day divan october
                $("#dayddlsoctob").val(data.day_divan_love_seat_octob_id);
                $("#dayddstoctob").val(data.day_divan_stol_vip_octob_id);
                //update vecher divan october
                $("#vecherddlsoctob").val(data.vecherni_divan_love_seat_octob_id);
                $("#vecherddstoctob").val(data.vecherni_divan_stol_vip_octob_id);
                //update night divan october
                $("#nightddlsoctob").val(data.night_divan_love_seat_octob_id);
                $("#nightddstoctob").val(data.night_divan_stol_vip_octob_id);

                //update raspisanie mir
                $("#dayseansmir").val(data.cen_day_seans_mir_id);  
                $("#vecherseansmir").val(data.cen_vecherni_seas_mir_id);
                $("#cennaightmir").val(data.cen_night_seans_mir_id);
                //update day divan mir
                $("#dayddlsmir").val(data.day_divan_love_seat_mir_id);
                $("#dayddstmir").val(data.day_divan_stol_vip_mir_id);
                //update vecher divan mir
                $("#vecherddlsmir").val(data.vecherni_divan_love_seat_mir_id);
                $("#vecherddstmir").val(data.vecherni_divan_stol_vip_mir_id);
                //update night divan mir
                $("#nightddlsmir").val(data.night_divan_love_seat_mir_id);
                $("#nightddstmir").val(data.night_divan_stol_vip_mir_id);

                //update opisanie films cinema
                $("#vozrastogranch").val(data.vozrast_id);
                $("#janr").val(data.janr_id);
                $("#originalname").val(data.original_name_id);
                $("#year").val(data.year_id);
                $("#country").val(data.country_id);
                $("#aboutfilms").val(data.opisanie_film_id);

                data.seans_kalinina.split('|').forEach((el, il) => {
                    let dd1 = el.split(';');
                    let i = il+1;
                    $("#Kalin-data-pokaz"+i).val(dd1[0]);
                    $("#Kalin-session"+i).val(dd1[1]);
                });

                data.seans_october.split('|').forEach((el, il) => {
                    let dd1 = el.split(';');
                    let i = il+1;
                    $("#Octob-data-pokaz"+i).val(dd1[0]);
                    $("#Octob-session"+i).val(dd1[1]);
                });

                
                data.seans_mir.split('|').forEach((el, il) => {
                    let dd1 = el.split(';');
                    let i = il+1;
                    $("#Mir-data-pokaz"+i).val(dd1[0]);
                    $("#Mir-session"+i).val(dd1[1]);

                    
                });
            }
        )
    });
})();