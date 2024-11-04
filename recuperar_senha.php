<?php
include("conexao.php");
if(isset($_POST['resetar']))
{
	$email=$_POST['email'];

	$check_email_query="select * from usuario WHERE email='$email'";
    $run_query=mysqli_query($con,$check_email_query);
    if(mysqli_num_rows($run_query)<1)
    {
	echo "<script>alert('Por favor digite um e-mail válido!')</script>";
	echo "<script>window.location.href='esqueceuasenha.php'</script>";
	exit();
    }
	
	else{
	echo "<script>alert('E-mail localizado, favor atualize sua senha!')</script>";
	echo "<script>window.location.href='resetar_senha.php?email=$email'</script>";		
		
	}

}
?>