 	function fileSelected(){
		var file = $("#img").files[0];
		if (file) {
			var fileSize = 0;
			if (file.size > 1024 * 1024) {
				fileSize = (Math.round(file.size * 100 / (1024 * 1024))/100).toString + 'MB';
			}
			else{
				fileSize = (Math.round(file.size * 100 / 1024)/100).toString + 'KB';
			}
			
		}
        
	}
	
    var name= "";
	function fileUpload(){
		var fd = new FormData();
		fd.append("fileupload", document.getElementById('img').files[0]);
		console.log();
		var xhr = new XMLHttpRequest(); //да, родной XHR, а не от jquery, лол
		
		xhr.upload.addEventListener('progress', uploadProgress, false);
		xhr.addEventListener('load', uploadComplete, false);
		xhr.addEventListener('error', uploadFailed, false);
		xhr.addEventListener('abort', uploadCanceled, false);
		
		xhr.open("POST", "ajax/uploadFile.php");
		xhr.send(fd);
	}
   
	function uploadProgress(evt){
		// $(".determinate").css('width', "0%");
		
		// if (evt.lengthComputable){
		// 	var pc = Math.round(evt.loaded * 100 / evt.total);
			
		// 	$(".determinate").css('width', pc.toString()+"%");
		// }
		// else{
			
		// }
	}
	
	function uploadComplete(evt){
		//$("#pic_news").attr("src", location.protocol+"//"+location.host+"/pictures/tmp/"+name);
	}
	
	function uploadFailed(evt){
		alert('Error uploading files!');
	}
	
	function uploadCanceled(evt){
		alert('Uploading canceled by user!');
	}
	
    // $("#img").each(function() {
    //         var b = $(this).find("input.form-control-file");
    //         $(this).find('input[type="file"]').change(function() {
    //             var file = $(this)[0].files[0];
    //             b.val(file.name);
    //             b.trigger("change");
    //                 fileUpload();
    //                 name = file.name;
    //         });
    //     });