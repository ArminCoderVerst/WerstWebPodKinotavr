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
        let kalin_data1 = $("#Kalin-data-pokaz1").val();
        let kalin_tine1 = $("#Kalin-session1").val();

        let kalin_data2 = $("#Kalin-data-pokaz2").val();
        let kalin_tine2 = $("#Kalin-session2").val();

        let kalin_data3 = $("#Kalin-data-pokaz3").val();
        let kalin_tine3 = $("#Kalin-session3").val();
        
        let kalin_data4 = $("#Kalin-data-pokaz4").val();
        let kalin_tine4 = $("#Kalin-session4").val();
        
        let kalin_data5 = $("#Kalin-data-pokaz5").val();
        let kalin_tine5 = $("#Kalin-session5").val();

        let kalin_data6 = $("#Kalin-data-pokaz6").val();
        let kalin_tine6 = $("#Kalin-session6").val();

        let kalin_data7 = $("#Kalin-data-pokaz7").val();
        let kalin_tine7 = $("#Kalin-session7").val();

        let kalin_data8 = $("#Kalin-data-pokaz8").val();
        let kalin_tine8 = $("#Kalin-session8").val();

        let kalin_data9 = $("#Kalin-data-pokaz9").val();
        let kalin_tine9 = $("#Kalin-session9").val();

        let kalin_data10 = $("#Kalin-data-pokaz10").val();
        let kalin_tine10 = $("#Kalin-session10").val();

        // raspisanya cinema october
        let october_data1 = $("#Octob-data-pokaz1").val();
        let october_time1 = ("#Octob-session1").val();

        let october_data2 = $("#Octob-data-pokaz2").val();
        let october_time2 = ("#Octob-session2").val();

        let october_data3 = $("#Octob-data-pokaz3").val();
        let october_time3 = ("#Octob-session3").val();

        let october_data4 = $("#Octob-data-pokaz4").val();
        let october_time4 = ("#Octob-session4").val();

        let october_data5 = $("#Octob-data-pokaz5").val();
        let october_time5 = ("#Octob-session5").val();

        let october_data6 = $("#Octob-data-pokaz6").val();
        let october_time6 = ("#Octob-session6").val();

        let october_data7 = $("#Octob-data-pokaz7").val();
        let october_time7 = ("#Octob-session7").val();

        let october_data8 = $("#Octob-data-pokaz8").val();
        let october_time8 = ("#Octob-session8").val();

        let october_data9 = $("#Octob-data-pokaz9").val();
        let october_time9 = ("#Octob-session9").val();

        let october_data10 = $("#Octob-data-pokaz10").val();
        let october_time10 = ("#Octob-session10").val();

        // raspisanya cinema mir
        let mir_data1 = $("#Mir-data-pokaz1").val();
        let mir_time1 = ("#Mir-session1").val();

        let mir_data2 = $("#Mir-data-pokaz2").val();
        let mir_time2 = ("#Mir-session2").val();

        let mir_data3 = $("#Mir-data-pokaz3").val();
        let mir_time3 = ("#Mir-session3").val();

        let mir_data4 = $("#Mir-data-pokaz4").val();
        let mir_time4 = ("#Mir-session4").val();

        let mir_data5 = $("#Mir-data-pokaz5").val();
        let mir_time5 = ("#Mir-session5").val();

        let mir_data6 = $("#Mir-data-pokaz6").val();
        let mir_time6 = ("#Mir-session6").val();

        let mir_data7 = $("#Mir-data-pokaz7").val();
        let mir_time7 = ("#Mir-session7").val();

        let mir_data8 = $("#Mir-data-pokaz8").val();
        let mir_time8 = ("#Mir-session8").val();

        let mir_data9 = $("#Mir-data-pokaz9").val();
        let mir_time9 = ("#Mir-session9").val();

        let mir_data10 = $("#Mir-data-pokaz10").val();
        let mir_time10 = ("#Mir-session10").val();

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
