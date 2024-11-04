<!DOCTYPE html>
<html>
<head>
	<title>Resetar a senha</title>
	<link rel="stylesheet" type="text/css" href="css/styleforgot.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>
			    <?php
							
							include("conexao.php");
							$email = $_GET['email'];
							$result = "SELECT * FROM usuario where email= '$email'";
							$resultado = mysqli_query($con, $result);
							$row = mysqli_fetch_assoc($resultado);
							$campos= $row;	
							
							
				
				?>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/forgotimg.png">
		</div>
		<div class="login-content">
			<form action="update_senha.php" method="POST">
				<img src="img/logo.png">
				<h2 class="title">Controle Embelez</h2>
				<div class="input-div one">
           		   <a type="button" class="i" onclick="mostrarSenha1()" value="Clique para conferir a senha">
           		   		<i class="fa fa-eye-slash" aria-hidden="true"></i>
           		   </a>
				<input type="hidden" name="email" value="<?php echo $campos['email'];?>"></input>
				<div class="div">
					<input type="password" name="senha" id="senha" placeholder="Digite a Senha" required onkeyup='check();'></input>
				</div>
				</div>
				<div class="input-div one">
           		   <a type="button" class="i" onclick="mostrarSenha2()">
           		   		<i class="fa fa-eye-slash" aria-hidden="true"></i>
           		   </a>
				<div class="div">
					<input type="password" name="senha2" id="senha2" placeholder="Digite novamente sua Senha" onkeyup='check();' required></input>
				</div>
				</div>
				<span id='message'></span>
            	<input type="submit" name="resetar" class="btn" value="Alterar senha"></input>
            </form>
        </div>
    </div>
<script>
var check = function() {
  if (document.getElementById('senha').value ==
    document.getElementById('senha2').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'As senhas digitas são iguais.';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'As senhas digitas são diferentes, favor corrigir!';
  }
}
</script>
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
<script>
			function mostrarSenha2(){
				var tipo = document.getElementById("senha2");
				if(tipo.type == "password"){
					tipo.type = "text";
				}else{
					tipo.type = "password";
				}
			}
		</script>
</body>
</html>
