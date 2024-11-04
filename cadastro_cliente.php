<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Cliente</title>
	<link rel="stylesheet" type="text/css" href="css/styleforgot.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/user.svg">
		</div>
		<div class="login-content">
			<form action="inserir_cliente.php" method="POST">
				<img src="img/logo.png">
				<h2 class="title">Seja bem-vindo(a)!</h2>
           		
				<div class="input-div one">
				   <a type="button" class="i">
           		   		<i class="fa fa-user" aria-hidden="true"></i>
           		   </a>
				<div class="div">
					<input type="hidden" name="cod" value="2"></input>
					<input type="hidden" name="status" value="ATIVO"></input>
					<input type="text" name="nome" id="nome" placeholder="Informe seu nome" required onkeyup='check();'></input>
				</div>
				</div>
				<div class="input-div one">
           		   <a type="button" class="i" onclick="mostrarSenha1()">
           		   		<i class="fa fa-eye-slash" aria-hidden="true"></i>
           		   </a>
				<div class="div">
					<input type="password" name="senha" id="senha" placeholder="Digite sua Senha" onkeyup='check();' required></input>
				</div>
				</div>
 				<div class="input-div one">
           		   <a type="button" class="i">
           		   		<i class="fa fa-envelope" aria-hidden="true"></i>
           		   </a>
				<div class="div">
					<input type="text" name="email" id="email" placeholder="Informe seu e-mail" onkeyup='check();' required></input>
				</div>
				</div>          		
            	<a href="index.php">Retornar ao site?</a>
            	<input type="submit" name="cadastrar"class="btn" value="Cadastrar">
            </form>
<script>
			function mostrarSenha1(){
				var tipo = document.getElementById("senha");
				if(tipo.type == "password"){
					tipo.type = "text";
				}else{
					tipo.type = "password";
				}
			}
		</script>
        </div>
    </div>
</body>
</html>
