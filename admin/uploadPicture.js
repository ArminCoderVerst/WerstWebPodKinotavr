(function(){

    $("#upload").click(function(){
        let name = $("#exampleInputZagolovok").val();
        let nameFile = $("#fileName").val();
        let txt = $("#exampleInputText").val();
        let libk = $("#exampleInputLink").val();

        if (name == "" || nameFile == "" || txt == "" || libk == "")
            return false;

        $.post(
            'ajax/addPicture.php',
            {
                nameFile: nameFile,
                name: name,
                txt: txt,
                link: libk

            },
            (e)=>{
                alert("Добавлено!");
                // console.log(e); 
            }
        )
    });
})();