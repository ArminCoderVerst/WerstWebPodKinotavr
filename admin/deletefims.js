(function(){
    $(".deleteFilms").click(function(){
        const iid = $(this).attr('id_card_film');

        $.post(
            "ajax/deletefilms.php",
            {
                id: iid,
            },
            (e)=>{
                $(`#kard${iid}`).hide();

                alert("фильм удален!");
                //console.log(e);
            }
        )
    });
})();