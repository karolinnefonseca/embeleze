<?php 
// session_start inicia a sessão

  include ("conexao.php");

if(isset($_POST['btnLogin']))  
{  
    $user_login=$_POST['uname'];  
    $user_pass=$_POST['psw'];  
    $user_acesso=$_POST['codacesso']; 
	
	
	if($user_acesso=="Administrador"){
	$check_usuario_query="select * from usuario WHERE login='$user_login' and senha='$user_pass'";
	$run_query=mysqli_query($con,$check_usuario_query);
    if(mysqli_num_rows($run_query))  
    {  
		echo "<script>alert('$user_login seja bem-vindo(a) ao sistema Embelez')</script>"; 
		echo"<script>window.open('index_embelez.php?edi=$user_login','_self')</script>";

  
    }
	}	
	if($user_acesso=="Cliente"){
	$check_cliente_query="select * from cliente WHERE email='$user_login' and senha='$user_pass'";
	$run_cliente=mysqli_query($con,$check_cliente_query);	
    if(mysqli_num_rows($run_cliente))  
    {  
		echo "<script>alert('$user_login seja bem-vindo(a) ao sistema Embelez')</script>"; 
		echo"<script>window.open('form_cliente.php?edi=$user_login','_self')</script>";

  
    }  
	}
	if($user_acesso=="Funcionário"){
	$check_funcionario_query="select * from usuario WHERE login='$user_login' and senha='$user_pass'";
	$run_funcionario=mysqli_query($con,$check_funcionario_query);	
    if(mysqli_num_rows($run_funcionario))  
    {  
		echo "<script>alert('$user_login seja bem-vindo(a) ao sistema Embelez')</script>"; 
		echo"<script>window.open('form_funcionario.php?edi=$user_login','_self')</script>";

  
    }  
	}
	else{
	echo "<script>alert('Usuário ou senha inválidos')</script>";
	echo"<script>window.open('index.php','_self')</script>";		
	}
	}

?>