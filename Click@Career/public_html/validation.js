$(document).ready(function(){
	$("#login").click(function(){
		var username = document.forms["login"]["email"].value;
		var password = document.forms["login"]["pwd"].value;

		$.post("login_check.php",
			{
				username: username,
				password: password
			},
			function(data, status){
				alert("Hello, " + data + ". You have been successfully logged in with status" + status);
			}


			);

	});
});

function login(){
	var username = document.forms["login"]["email"].value;
	var password = documetn.forms["login"]["pwd"].value;


}