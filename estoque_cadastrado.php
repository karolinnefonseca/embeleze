<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Estoque e insumos cadastrados</title>
      <!-- Favicon -->
	<link rel="shortcut icon" href="img/usuario.png" type="image/x-icon">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery-3.3.1.js"></script>
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style_indicadores.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
	 <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
	    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
		 <link href="css/sb-admin.css" rel="stylesheet">
	   <script src="js/index.js"></script>
     <script src="js/main.js"></script>
	 			    <?php
							
							include("conexao.php");
							$id = $_GET['edi'];
							$result = "SELECT *FROM usuario where login= '$id' ";
							$resultado = mysqli_query($con, $result);
							$row = mysqli_fetch_assoc($resultado);
							$campos= $row;	
							
							
				
				?>
		<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('#listar-estoque').DataTable({			
				"processing": true,
				"serverSide": false,
				"order": [[ 8, "desc" ]],
				'columnDefs' : [
				//hide the second & fourth column
				{ 'visible': false, 'targets': [0] }
			],
			});
		} 
		);
		
		</script>
  <script>
  function funcaodeslogar()
{
alert("Obrigado por usar o sistema RROrtolabor!");
}
  </script>
   </head>
   <body>
   <main>
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo">
               <a href="https://rrortolabor.com.br/">
               <img src="img/ortolabor.png" class="img-fluid" alt="">
              
               </a>
            </div>

            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Menu</span></li>
                     <li class="active"><a href="#" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Movimento de Caixa</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
		 <div class="navbar">
            <div class="iq-navbar-custom">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">

                     </a>
                  </div>
               </div>
               <div class="navbar-breadcrumb">

                  <h5 class="mb-0">Detalhamento dos estoques</h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
						<li><i class="fa fa-usd" aria-hidden="true"></i> Estoques e insumos</li>
                     </ul>
                  </nav>
               </div>
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="line-menu half start"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu half end"></div>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  </div>
               </nav>
            </div>
			<div class="float-right">
				<a class="btn btn-outline-danger" href="sair.php" onclick="funcaodeslogar()" role="button"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
            </div>
			</div>
         </div>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body profile-page p-0">
                           <div class="profile-header">
                              <div class="cover-container">
                                 <img src="img/banner2.png" alt="profile-bg" class="rounded img-fluid w-100"/> 
                              </div>
                              <div class="profile-info p-4">
                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                       <div class="user-detail pl-5">
                                          <div class="d-flex flex-wrap align-items-center">
                                            
                                                <h2><i class="fa fa-table" aria-hidden="true"></i> Tabela de estoque e insumos</h2>
                                             
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="row">
                        <div class="col-lg-12 profile-center">

	<div class="section">
		<div id="horizontalTab">
        <ul>
	
        </ul>

 <!-- / INÍCIO DOS DADOS DA TABELA NÚMERO 01------------------------------------------------------------------------------------------------------------------------------------------------------>		
		<div id="tab-1">
		<div class="card mb-3">
			 <div class="card-body">
			  <div class="table-responsive">
			  <table class="table table-striped" id="listar-estoque" class="display" style="width:100%">
			  <thead>
                <tr>
				<th>id</th>
				<th>id</th>
                  <th>Código do material</th>
                  <th>Nome</th>
                  <th>Quantidade</th>
				  <th>Preço</th>
				  <th>Observação</th>
				  <th>Data do cadastro</th>
				  <th>Editar</th>
				  <th>Excluir</th>
                </tr>
              </thead>

			  <tfoot>
                <tr>
				<th>id</th>
				<th>id</th>
                  <th>Código do material</th>
                  <th>Nome</th>
                  <th>Quantidade</th>
				  <th>Preço</th>
				  <th>Observação</th>
				  <th>Data do cadastro</th>
				  <th>Editar</th>
				  <th>Excluir</th>
                </tr>
              </tfoot>
<?php
        include("conexao.php");	
        $view_users_query="SELECT id_estoque, cod_material,data, aparelhoestoque, quantidade, preco, observacao FROM estoque ORDER BY cod_material DESC";	
        $run=mysqli_query($con,$view_users_query);

        while($row=mysqli_fetch_array($run))
        {
			$user_codigo=$row[0];
			$user_cod_material=$row[1];
			$user_aparelho=$row[3];
			$user_data=$row[2];
			$user_quantidade=$row[4];
			$user_preco=$row[5];
			$user_observacao=$row[6];
 
        ?>

        <tr>
			
            <td><?php echo $user_codigo;?></td>
			<td><?php echo $user_codigo;?></td>
			<td><?php echo $user_cod_material;?></td>
			<td><?php echo $user_aparelho;?></td>
			<td><?php echo $user_quantidade;?></td>
			<td><?php echo number_format($user_preco, 2, ',', '.');?></td>
			<td><?php echo $user_observacao;?></td>
			<td><?php echo date("d/m/yy", strtotime($user_data));?></td>
			<td><a target="_self" href="editar_estoque.php?estoque=<?php echo $user_codigo;?>" button class="btn btn-success btn-hover-green">Editar</button></a></td>
            <td><a target="_self" href="deleta_estoque.php?del=<?php echo $user_codigo?>" button class="btn btn-danger btn-hover-red">Excluir</button></a></td>
		</tr>

        <?php } ?>			  
			 </table> <!--FIM DA TABELA-->	
			  </div><!--FIM DA TABLE-RESPONSIVE-->	
			  </div><!--FIM DO CARD BODY-->		 
			 </div>	 <!--FIM DO CARD MB3-->
		</div><!-- / FIM DOS DADOS DA TABELA NÚMERO 01------------------------------------------------------------------------------------------------------------------------------------------------------> 
		</div><!--FIM DO HORIZONTAL TAB-->
		
		
        </div><!--FIM DA SECTION-->
            </div>
         </div>
      </div>
	  </div>
	  </div>
	  </div>

      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="bg-white iq-footer">
         <div class="container-fluid">
            <div class="row">

               <div class="col-lg-6 text-right">
                  Copyright 2020 <a href="#">R&R Ortolabor</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->
   
    <script src="vendor/datatables/jquery.dataTables.js"></script>
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <script src="js/sb-admin-datatables.min.js"></script>
	</main>
	</body>
</html>
