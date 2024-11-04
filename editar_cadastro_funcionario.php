<?php
include("conexao.php");
if(isset($_POST['editar']))
{
	$user_edi=$_POST['edi'];
	$user_id=$_POST['id'];
    $user_nome=$_POST['usuario'];
	$user_senha=$_POST['senha'];
	$user_login=$_POST['login'];
	$user_foto=$_POST['foto'];
	$user_cidade=$_POST['cidade'];
	$user_cep=$_POST['cep'];
	$user_endereco=$_POST['endereco'];
	$user_email=$_POST['email'];
	$user_vale=floatval(str_replace(',','.', str_replace('.','', $_POST['vale'])));
	$user_telefone=$_POST['telefone'];
	$user_carteira=$_POST['carteira'];
	$user_pis=$_POST['pis'];
	$user_salario=floatval(str_replace(',','.', str_replace('.','', $_POST['salario'])));

//insert the user into the database.
    $insert_user="UPDATE usuario SET nome='$user_nome',senha='$user_senha',telefone='$user_telefone',email='$user_email',login='$user_login', foto='$user_foto',endereco='$user_endereco',cidade='$user_cidade',cep='$user_cep',pis='$user_pis',carteira_trabalho='$user_carteira',salario='$user_salario',valetransporte='$user_vale' WHERE id='$user_id'  ";
    if(mysqli_query($con,$insert_user))
    {
    	echo "<script>alert('Funcionário $user_nome foi atualizado com sucesso.')</script>";
        echo"<script>window.open('editar_funcionario.php?funcionario=$user_id','_self')</script>";																												

	}
	else{
	echo "<script>alert('Funcionário $user_nome não foi atualizado, contate o administrador do sistema')</script>";
	echo"<script>window.open('editar_funcionario.php?funcionario=$user_id','_self')</script>";	
	}

}


?>