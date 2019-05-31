(function(){

    $("#NewsFilms").click(function(){
        let logofilms = $("#fileNameNewsLogo").val();
        let vozrast = $("#exampleInputVozLeng").val();
        let zagolstat = $("#exampleInputStat").val();
        let janr = $("#exampleInputJanr").val();
        let datapokaz = $("#exampleInputData").val();
        let formpokaz = $("#exampleInputFormDisplay").val();

        if (logofilms == "" || vozrast == "" || zagolstat == "" || janr == "" || datapokaz == "" || formpokaz == "")
            return false;


        // let kalin_rasp = "", octob_rasp = "", mir_rasp = "";

        // raspisanya cinema kalinina
        // let kalin_data1 = $("#Kalin-data-pokaz1").val();
        // let kalin_tine1 = $("#Kalin-session1").val();

        // let kalin_data2 = $("#Kalin-data-pokaz2").val();
        // let kalin_tine2 = $("#Kalin-session2").val();

        // let kalin_data3 = $("#Kalin-data-pokaz3").val();
        // let kalin_tine3 = $("#Kalin-session3").val();
        
        // let kalin_data3 = $("#Kalin-data-pokaz4").val();
        // let kalin_tine3 = $("#Kalin-session4").val();
        
        // let kalin_data3 = $("#Kalin-data-pokaz5").val();
        // let kalin_tine3 = $("#Kalin-session5").val();

        // let kalin_data3 = $("#Kalin-data-pokaz6").val();
        // let kalin_tine3 = $("#Kalin-session6").val();

        // let kalin_data3 = $("#Kalin-data-pokaz7").val();
        // let kalin_tine3 = $("#Kalin-session7").val();

        // let kalin_data3 = $("#Kalin-data-pokaz8").val();
        // let kalin_tine3 = $("#Kalin-session8").val();

        // let kalin_data3 = $("#Kalin-data-pokaz9").val();
        // let kalin_tine3 = $("#Kalin-session9").val();

        // let kalin_data3 = $("#Kalin-data-pokaz10").val();
        // let kalin_tine3 = $("#Kalin-session10").val();

        // raspisanya cinema october


        

        // //aN - дата (с 7 по 16 января)
        // //tN - время (15:29, 18:89)

        // //...

        // if (kalin_data1 !== "" && kalin_time1 !== "")
        //     kalin_rasp += kalin_data1 + ";" + kalin_time1 + "|";

        // //с 7 по 16 января;15:29, 18:89|


        $.post(
            'ajax/addNewsFilms.php',
            {
                logofilms: logofilms,
                vozrast: vozrast,
                zagolstat: zagolstat,
                janr: janr,
                datapokaz: datapokaz,
                formpokaz: formpokaz
                
            },
            (e)=>{
                alert("Добавлено!");
                // console.log(e); 
            }
        )
    });
})();
