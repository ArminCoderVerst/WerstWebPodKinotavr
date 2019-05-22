(function () {
	$("#enter").click(function () {
		let login = $("#exampleInputEmail1").val();
		let pass = $("#exampleInputPassword1").val();

		if (login.length == 0 || pass.length == 0) {
			$("#error").css('display', 'block');
			return false;
		}

		$.post(
			'authorization.php', {
				login: login,
				pass: pass

			},
			(e) => {
				if (e !== "error") {
					setCookie("token", "/admin/", e, 365);
					location.reload();
					
				//console.log(e);
				} else {
					$("#error").css('display', 'block');
				}
			}
		);
	});
	
	$("#exit").click(function(){
		setCookie("token", "/admin/", "", 0);
		location.reload();
	});

function setCookie(cookieName, path, cookieValue, expdays) {
	var d = new Date();
	d.setTime(d.getTime() + (expdays * 24 * 60 * 60 * 1000));
	var expires = "expires=" + d.toUTCString();
	document.cookie = cookieName + "=" + cookieValue + "; " + expires;
}

function getCookie(cookieName) {
	var name = cookieName + "=";
	var ca = document.cookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') c = c.substring(1);
		if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
	}
	return "";
}


})();

