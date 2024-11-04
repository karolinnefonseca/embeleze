<?php
include("conexao.php");
if(isset($_POST['editar']))
{
	$user_id=$_POST['edi'];
    $user_name=$_POST['nomeproduto'];
	$user_data=$_POST['dataproduto'];
	$user_precocusto=$_POST['precocustoserv'];
	$user_precovenda=$_POST['precovendaserv'];
	$user_obs=$_POST['obs'];

//insert the user into the database.
    $insert_user="UPDATE produto SET nome='$user_name',datacadastro='$user_data',precocusto='$user_precocusto',precovenda='$user_precovenda',obsproduto='$user_obs' where id='$user_id'";
    if(mysqli_query($con,$insert_user))
    {
    	echo "<script>alert('O produto $user_name foi atualizado com sucesso.')</script>";
        echo"<script>window.open('editar_produto.php?produto=$user_id','_self')</script>";																												

	}
	else{
	echo "<script>alert('O produto $user_name não foi atualizado, contate o administrador do sistema')</script>";
	echo"<script>window.open('editar_produto.php?produto=$user_id','_self')</script>";	
	}

}


?>