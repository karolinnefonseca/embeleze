<?php
include("conexao.php");
if(isset($_POST['resetar']))
{
	$senha=$_POST['senha'];
	$email=$_POST['email'];

	$update_senha="UPDATE usuario SET senha='$senha' where email='$email'";
    if(mysqli_query($con,$update_senha))
    {
	echo "<script>alert('Senha atualizada com sucesso!')</script>";
	echo "<script>window.location.href='index.php'</script>";
	exit();
    }
	else{
	echo "<script>alert('Senha não atualizada, favor contactar o administrador do sistema!')</script>";
	echo "<script>window.location.href='resetar_senha.php?email=$email'</script>";
	}

}
?>