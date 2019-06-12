(function(){
    $(".renamefilms").click(function(){
        let curID = $(this).attr("id_rename_films");

        $("#hiddenUpdate").val(curID);

        $.post(
            "ajax/PinkFloyd.php",
            {
                id: curID
            },
            (e)=>{
                let data = JSON.parse(e);
                console.log(data);
            }
        )
    });
})();