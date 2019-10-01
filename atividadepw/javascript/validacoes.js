$(function(){
	$('#login').submit(function(){
		var obj = this;
		var form = $(obj);
		var dados = new FormData(obj);
		$.ajax({
			url: form.attr('action'),
			type: form.attr('method'),
			data: dados,
			processData: false,
			cache: false,
			contentType: false,
			success: function(data){
				if (data == "ErroLogin") {
					var titulo = document.getElementById("inputUser");

					titulo.className = "form-control col-8 is-invalid";

					var exibirerro = document.getElementById("userErro");

					exibirerro.className = "invalid-feedback d-block col-8";

					titulo.focus();
				}
				else
				{
					var titulo = document.getElementById("inputUser");
					titulo.className = "form-control col-8";
					var exibirerro = document.getElementById("userErro");
					exibirerro.className = "invalid-feedback d-none col-8";
				}

				if (data == "errosenha") 
				{
					var titulo = document.getElementById("inputPass");

					titulo.className = "form-control col-8 is-invalid";

					var exibirerro = document.getElementById("passErro");

					exibirerro.className = "invalid-feedback d-block col-8";

					titulo.focus();
				}
				else
				{
					var titulo = document.getElementById("inputPass");
					titulo.className = "form-control col-8";
					var exibirerro = document.getElementById("passErro");
					exibirerro.className = "invalid-feedback d-none col-8";
				}
				if (data == "Falhalogin") 
				{
					var titulo = document.getElementById("erroLogin");	
					titulo.className = "invalid-feedback d-block col-5";
				}
				else
				{
					var titulo = document.getElementById("erroLogin");
					titulo.className = "invalid-feedback d-none col-5";
				}
				if(data == "sucees")
				{
					window.location.replace("../home.php");

				}
				if(data == "sucessoadm")
				{
					window.location.replace("../adm.php");
				}
			},
		});
		return false;
	});
});