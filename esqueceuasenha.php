<!DOCTYPE html>
<html>
<head>
	<title>Esqueceu a senha?</title>
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
			<img src="img/forgotimg.png">
		</div>
		<div class="login-content">
			<form action="recuperar_senha.php" method="POST">
				<img src="img/logo.png">
				<h2 class="title">Controle Embelez</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		
           		   		<input type="email" name="email" placeholder="digite seu e-mail"class="input">
           		   </div>
           		</div>
            	<a href="index.php">Retornar ao site?</a>
            	<input type="submit" name="resetar"class="btn" value="Enviar email">
            </form>
        </div>
    </div>
</body>
</html>
