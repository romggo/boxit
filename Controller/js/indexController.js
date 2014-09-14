$(document).ready(function(){
	$("#data").submit(function(event){
		$username = $("#username").value();
		$password = $("#password").value();

				$.ajax({
			type: "POST",
			url: "../php/loginProcess.php",
			data: {username:username, password:password},
			success: function(data){
				if(data == 1)
					alert("exito");
				else
					alert("Algo salio mal");
			},
			error:function(data){
				alert("Ocurrio un error");
			},
		});
	}
});