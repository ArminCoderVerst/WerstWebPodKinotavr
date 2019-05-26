(function(){
    $(".deletePic").click(function(){
        const iid = $(this).attr('id_pic');

        $.post(
            "ajax/deletePicture.php",
            {
                id: iid,
            },
            (e)=>{
                $(`#pic${iid}`).hide();

                alert("Удалено!");
                //console.log(e);
            }
        )
    });
})();