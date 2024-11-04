<?php
include("conexao.php");
if(isset($_POST['salvar']))
{
	$user_id=$_POST['edi'];	
    $user_cod_material=$_POST['codmaterial'];
	$user_material=$_POST['material'];
	$user_quantidade=$_POST['quantidade'];
	$user_data=$_POST['data'];
	$user_preco= floatval(str_replace(',','.', str_replace('.','', $_POST['valor'])));
	$user_obs=$_POST['obs'];

//insert the user into the database.
    $insert_user="UPDATE estoque SET cod_material='$user_cod_material', aparelhoestoque='$user_material',data='$user_data',quantidade='$user_quantidade',preco='$user_preco',observacao='$user_obs' where id_estoque='$user_id'";
    if(mysqli_query($con,$insert_user))
    {
    	echo "<script>alert('O estoque $user_material foi atualizado com sucesso.')</script>";
		echo"<script>window.open('editar_estoque.php?estoque=$user_id','_self')</script>";     																											

	}
	else{
	echo "<script>alert('O estoque $user_material não foi atualizado, contate o administrador do sistema')</script>";
	echo"<script>window.open('editar_estoque.php?estoque=$user_id','_self')</script>";	
	}

}


?>