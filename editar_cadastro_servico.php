<?php
include("conexao.php");
if(isset($_POST['editar']))
{
	$user_id=$_POST['edi'];
    $user_name=$_POST['nomeservico'];
	$user_id_produto=$_POST['id_produto'];
	$user_data=$_POST['dataservico'];
	$user_precocusto=$_POST['precocustoserv'];
	$user_precovenda=$_POST['precovendaserv'];
	$user_obs=$_POST['obsservico'];

//insert the user into the database.
    $insert_user="UPDATE servico SET nome='$user_name',id_produto='$user_id_produto',dataservico='$user_data',precocusto='$user_precocusto',precovenda='$user_precovenda',obsservico='$user_obs' where id='$user_id'";
    if(mysqli_query($con,$insert_user))
    {
    	echo "<script>alert('O serviço $user_name foi atualizado com sucesso.')</script>";
        echo"<script>window.open('editar_servico.php?servico=$user_id','_self')</script>";																												

	}
	else{
	echo "<script>alert('O serviço $user_name não foi atualizado, contate o administrador do sistema')</script>";
	echo"<script>window.open('editar_servico.php?servico=$user_id','_self')</script>";	
	}

}


?>