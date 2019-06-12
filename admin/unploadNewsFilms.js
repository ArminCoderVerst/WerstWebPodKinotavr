(function(){

    $("#NewsFilms").click(function(){

        let hd = $("#hiddenUpdate").val();

        //карточка фильма
        let logofilms = $("#fileNameNewsLogo").val();
        let vozrast = $("#exampleInputVozLeng").val();
        let zagolstat = $("#exampleInputStat").val();
        let janr = $("#exampleInputJanr").val();
        let datapokaz = $("#exampleInputData").val();
        let formpokaz = $("#exampleInputFormDisplay").val();

        //цены на день - вечер -ночь сеансы калинина
        let dayseanskalin = $("#dayseanskalin").val();
        let vecherseanskalin = $("#vecherseanskalin").val();
        let cennaightkalin = $("#cennaightkalin").val();

        //цены на дневны диваны калинина
        let dayddlskalin = $("#dayddlskalin").val();
        let dayddstkalin = $("#dayddstkalin").val();

        //цены на вечернии диваны калинина
        let vecherddlskalin = $("#vecherddlskalin").val();
        let vecherddstkalin = $("#vecherddstkalin").val();

        //цены на ночные диваны калинина
        let nightddlskalin = $("#nightddlskalin").val();
        let nightddstkalin = $("#nightddstkalin").val();

        //цены на день - вечер -ночь сеансы октябрь
        let dayseansoctob = $("#dayseansoctob").val();
        let vecherseansoctob = $("#vecherseansoctob").val();
        let cennaightoctob = $("#cennaightoctob").val();

        //цены на дневны диваны октябрь
        let dayddlsoctob = $("#dayddlsoctob").val();
        let dayddstoctob = $("#dayddstoctob").val();

        //цены на вечернии диваны октябрь
        let vecherddlsoctob = $("#vecherddlsoctob").val();
        let vecherddstoctob = $("#vecherddstoctob").val();

        //цены на ночные диваны октябрь
        let nightddlsoctob = $("#nightddlsoctob").val();
        let nightddstoctob = $("#nightddstoctob").val();

        //цены на день - вечер -ночь сеансы мир
        let dayseansmir = $("#dayseansmir").val();
        let vecherseansmir = $("#vecherseansmir").val();
        let cennaightmir = $("#cennaightmir").val();

        //цены на дневны диваны мир
        let dayddlsmir = $("#dayddlsmir").val();
        let dayddstmir = $("#dayddstmir").val();

        //цены на вечернии диваны мир
        let vecherddlsmir = $("#vecherddlsmir").val();
        let vecherddstmir = $("#vecherddstmir").val();

        //цены на ночные диваны мир
        let nightddlsmir = $("#nightddlsmir").val();
        let nightddstmir = $("#nightddstmir").val();

        //описание фильма
        let vozrastogranch = $("#vozrastogranch").val();
        let janrfilm = $("#janr").val();
        let originalname = $("#originalname").val();
        let year = $("#year").val();
        let country = $("#country").val();
        let aboutfilms = $("#aboutfilms").val();

        if (logofilms == "" || vozrast == "" || zagolstat == "" || janr == "" || datapokaz == "" || formpokaz == "")
            return false;


        let kalin_rasp = "", octob_rasp = "", mir_rasp = "";

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
        let october_time1 = $("#Octob-session1").val();

        let october_data2 = $("#Octob-data-pokaz2").val();
        let october_time2 = $("#Octob-session2").val();

        let october_data3 = $("#Octob-data-pokaz3").val();
        let october_time3 = $("#Octob-session3").val();

        let october_data4 = $("#Octob-data-pokaz4").val();
        let october_time4 = $("#Octob-session4").val();

        let october_data5 = $("#Octob-data-pokaz5").val();
        let october_time5 = $("#Octob-session5").val();

        let october_data6 = $("#Octob-data-pokaz6").val();
        let october_time6 = $("#Octob-session6").val();

        let october_data7 = $("#Octob-data-pokaz7").val();
        let october_time7 = $("#Octob-session7").val();

        let october_data8 = $("#Octob-data-pokaz8").val();
        let october_time8 = $("#Octob-session8").val();

        let october_data9 = $("#Octob-data-pokaz9").val();
        let october_time9 = $("#Octob-session9").val();

        let october_data10 = $("#Octob-data-pokaz10").val();
        let october_time10 = $("#Octob-session10").val();

        // raspisanya cinema mir
        let mir_data1 = $("#Mir-data-pokaz1").val();
        let mir_time1 = $("#Mir-session1").val();

        let mir_data2 = $("#Mir-data-pokaz2").val();
        let mir_time2 = $("#Mir-session2").val();

        let mir_data3 = $("#Mir-data-pokaz3").val();
        let mir_time3 = $("#Mir-session3").val();

        let mir_data4 = $("#Mir-data-pokaz4").val();
        let mir_time4 = $("#Mir-session4").val();

        let mir_data5 = $("#Mir-data-pokaz5").val();
        let mir_time5 = $("#Mir-session5").val();

        let mir_data6 = $("#Mir-data-pokaz6").val();
        let mir_time6 = $("#Mir-session6").val();

        let mir_data7 = $("#Mir-data-pokaz7").val();
        let mir_time7 = $("#Mir-session7").val();

        let mir_data8 = $("#Mir-data-pokaz8").val();
        let mir_time8 = $("#Mir-session8").val();

        let mir_data9 = $("#Mir-data-pokaz9").val();
        let mir_time9 = $("#Mir-session9").val();

        let mir_data10 = $("#Mir-data-pokaz10").val();
        let mir_time10 = $("#Mir-session10").val();

        // //aN - дата (с 7 по 16 января)
        // //tN - время (15:29, 18:89)

        // //...

        if (kalin_data1 !== "" && kalin_tine1 !== "")
            kalin_rasp += kalin_data1 + ";" + kalin_tine1 + "|";

        if (kalin_data2 !== "" && kalin_tine2 !== "")
            kalin_rasp += kalin_data2 + ";" + kalin_tine2 + "|";

        if (kalin_data3 !== "" && kalin_tine3 !== "")
            kalin_rasp += kalin_data3 + ";" + kalin_tine3 + "|";
        
        if (kalin_data4 !== "" && kalin_tine4 !== "")
            kalin_rasp += kalin_data4 + ";" + kalin_tine4 + "|";

        if (kalin_data5 !== "" && kalin_tine5 !== "")
            kalin_rasp += kalin_data5 + ";" + kalin_tine5 + "|";

        if (kalin_data6 !== "" && kalin_tine6 !== "")
            kalin_rasp += kalin_data6 + ";" + kalin_tine6 + "|";

        if (kalin_data7 !== "" && kalin_tine7 !== "")
            kalin_rasp += kalin_data2 + ";" + kalin_tine2 + "|"; 
            
        if (kalin_data8 !== "" && kalin_tine8 !== "")
            kalin_rasp += kalin_data2 + ";" + kalin_tine2 + "|";
            
        if (kalin_data9 !== "" && kalin_tine9 !== "")
            kalin_rasp += kalin_data2 + ";" + kalin_tine2 + "|";
        
        if (kalin_data10 !== "" && kalin_tine10 !== "")
            kalin_rasp += kalin_data10 + ";" + kalin_tine10 + "|";
        
        //end kalin
        
        if(october_data1 !== "" && october_time1 !== "")
           octob_rasp += october_data1 + ";" + october_time1 + "|";

        if(october_data2 !== "" && october_time2 !== "")
        octob_rasp += october_data2 + ";" + october_time2 + "|";

        if(october_data3 !== "" && october_time3 !== "")
        octob_rasp += october_data3 + ";" + october_time3 + "|";
        
        if(october_data4 !== "" && october_time4 !== "")
        octob_rasp += october_data4 + ";" + october_time4 + "|";

        if(october_data5 !== "" && october_time5 !== "")
        octob_rasp += october_data5 + ";" + october_time5 + "|";

        if(october_data6 !== "" && october_time6 !== "")
        octob_rasp += october_data6 + ";" + october_time6 + "|";

        if(october_data7 !== "" && october_time7 !== "")
        octob_rasp += october_data7 + ";" + october_time7 + "|";

        if(october_data8 !== "" && october_time8 !== "")
        octob_rasp += october_data8 + ";" + october_time8 + "|";

        if(october_data9 !== "" && october_time9 !== "")
        octob_rasp += october_data9 + ";" + october_time9 + "|";

        if(october_data10 !== "" && october_time10 !== "")
        octob_rasp += october_data10 + ";" + october_time10 + "|";

        // end october

        if(mir_data1 !== "" && mir_time1 !== "")
        mir_rasp += mir_data1 + ";" + mir_time1 + "|";

        if(mir_data2 !== "" && mir_time2 !== "")
        mir_rasp += mir_data2 + ";" + mir_time2 + "|";

        if(mir_data3 !== "" && mir_time3 !== "")
        mir_rasp += mir_data3 + ";" + mir_time3 + "|";

        if(mir_data4 !== "" && mir_time4 !== "")
        mir_rasp += mir_data4 + ";" + mir_time4 + "|";

        if(mir_data5 !== "" && mir_time5 !== "")
        mir_rasp += mir_data5 + ";" + mir_time5 + "|";

        if(mir_data6 !== "" && mir_time6 !== "")
        mir_rasp += mir_data6 + ";" + mir_time6 + "|";

        if(mir_data7 !== "" && mir_time7 !== "")
        mir_rasp += mir_data7 + ";" + mir_time7 + "|";

        if(mir_data8 !== "" && mir_time8 !== "")
        mir_rasp += mir_data8 + ";" + mir_time8 + "|";

        if(mir_data9 !== "" && mir_time9 !== "")
        mir_rasp += mir_data9 + ";" + mir_time9 + "|";

        if(mir_data10 !== "" && mir_time10 !== "")
        mir_rasp += mir_data10 + ";" + mir_time10 + "|";

        // end mir

        console.log(kalin_rasp);
        console.log(octob_rasp);
        console.log(mir_rasp);

        // //с 7 по 16 января;15:29, 18:89|

        $("#hiddenUpdate").val("-1");

        $.post(
            hd == -1 ? 'ajax/addNewsFilms.php' : 'ajax/LedZeppelin.php',
            {
                id: hd,
                logofilms: logofilms,
                vozrast: vozrast,
                zagolstat: zagolstat,
                janr: janr,
                datapokaz: datapokaz,
                formpokaz: formpokaz,
                kalin_rasp: kalin_rasp,
                octob_rasp: octob_rasp,
                mir_rasp: mir_rasp,
                dayseanskalin: dayseanskalin,
                vecherseanskalin: vecherseanskalin,
                cennaightkalin: cennaightkalin,
                dayddlskalin: dayddlskalin,
                dayddstkalin: dayddstkalin,
                vecherddlskalin: vecherddlskalin,
                vecherddstkalin: vecherddstkalin,
                nightddlskalin: nightddlskalin,
                nightddstkalin: nightddstkalin,
                dayseansoctob: dayseansoctob,
                vecherseansoctob: vecherseansoctob,
                cennaightoctob: cennaightoctob,
                dayddlsoctob: dayddlsoctob,
                dayddstoctob: dayddstoctob,
                vecherddlsoctob: vecherddlsoctob,
                vecherddstoctob: vecherddstoctob,
                nightddlsoctob: nightddlsoctob,
                nightddstoctob: nightddstoctob,
                dayseansmir: dayseansmir,
                vecherseansmir: vecherseansmir,
                cennaightmir: cennaightmir,
                dayddlsmir: dayddlsmir,
                dayddstmir: dayddstmir,
                vecherddlsmir: vecherddlsmir,
                vecherddstmir: vecherddstmir,
                nightddlsmir: nightddlsmir,
                nightddstmir: nightddstmir,
                vozrastogranch: vozrastogranch,
                janrfilm: janrfilm,
                originalname: originalname,
                year: year,
                country: country,
                aboutfilms: aboutfilms
                
            },
            (e)=>{
                alert("фильм добавлен!");
                console.log(e); 
            }
        )
    });
})();
