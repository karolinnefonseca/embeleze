			    <?php
							
							include("conexao.php");
							$id = $_GET['edi'];
							$result = "SELECT *FROM usuario where login= '$id' ";
							$resultado = mysqli_query($con, $result);
							$row = mysqli_fetch_assoc($resultado);
							$campos= $row;	
							
							
				
				?>

<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Consulte as agendas</title>
      <!-- Favicon -->
	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style_indicadores.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
	 <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	   <script src="js/index.js"></script>
  <script src="js/main.js"></script>
  <script>
  history.forward();
  function funcaodeslogar()
{
alert("Obrigado por usar o sistema Embelez!");
}
  </script>
   </head>
   <body>
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo">
               <a href="#">
               <img src="img/logo_adm.png" class="img-fluid" alt="">
              
               </a>
            </div>

            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Menu</span></li>
                     <li><a href="form_funcionario.php?edi=<?php echo $campos['login'];?>" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i><span>Cadastrar Cliente</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>
					 <li class="active"><a href="#" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fa fa-calendar-check-o" aria-hidden="true"></i><span>Consultar Agenda</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>			 
                     <li><a href="form_cadastrar_agenda.php?edi=<?php echo $campos['login'];?>" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fa fa-calendar-check-o" aria-hidden="true"></i><span>Cadastrar Agenda</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>
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
                     <a href="form_clientes.php" class="logo">
                     <img src="../img/logo_indicadores.png" class="img-fluid" alt="">
                     </a>
                  </div>
               </div>
			   
               <div class="navbar-breadcrumb">

                  <h5 class="mb-0">Seja bem vindo(a) <?php echo $campos['nome'];?></h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
						<li class=""><a href="form_funcionario.php?edi=<?php echo $campos['login'];?>"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a></li>
						<li class="breadcrumb-item"><i class="fa fa-arrow-right" aria-hidden="true"></i> Consultar Agendas Marcadas</a></li>
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
                                 <img src="img/fundo_adm.jpg" alt="profile-bg" class="rounded img-fluid w-100"/> 
                              </div>
                              <div class="profile-info p-4">
                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                       <div class="user-detail pl-5">
                                          <div class="d-flex flex-wrap align-items-center">
                                             <div class="profile-img pr-4">
                                                <img src="img/foto.png" />
                                             </div>
                                             <div class="config_titulo">
                                                <h2><?php echo $campos['nome'];?></h2>
                                                <p class="m-0 pl-3">Funcionário</p>
                                             </div>
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
						 <h2><i class="fa fa-table" aria-hidden="true"></i> Tabela de Serviços Agendados</h2>
	<div class="section">
		<div id="horizontalTab">
        <ul>
	
        </ul>

 <!-- / INÍCIO DOS DADOS DA TABELA NÚMERO 01------------------------------------------------------------------------------------------------------------------------------------------------------>		
		<div id="tab-1">
		<div class="card mb-3">
			 <div class="card-body">
			  <div class="table-responsive">
			  <table class="table table-striped" id="listar-usuario" class="display" style="width:100%">
			  <thead>
                <tr>
				  <th type="hidden">Id do serviço</th>
				  <th>Nome do Cliente</th>
				  <th>Serviço</th>
				  <th>Data</th>
				  <th>Editar</th>
				  <th>Excluir</th>
                </tr>
              </thead>
<?php
        include("conexao.php");
		$id = $_GET['edi'];
        $view_users_query="SELECT id_agenda, nome_cliente, data_agenda, servico, telefone FROM agenda";	
        $run=mysqli_query($con,$view_users_query);

        while($row=mysqli_fetch_array($run))
        {
			$user_id=$row[0];
			$user_nome=$row[1];
			$user_servico=$row[3];
            $user_data=$row[2];
        ?>
        <tr>
			<td type="hidden"><?php echo $user_id;?></td>
            <td><?php echo $user_nome;?></td>
			<td><?php echo $user_servico;?></td>
           <td><?php echo date("d/m/Y", strtotime($user_data)); ?></td>
		   <td><a href="editar_agenda.php?cliente=<?php echo $user_id?>&edi=<?php echo $id?>" target="_blank"><button class="btn btn-success">Editar</button></a></td>
		   <td><a href="deleta_agenda_func.php?del=<?php echo $user_id?>&edi=<?php echo $id?>"><button class="btn btn-danger">Excluir</button></a></td>
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
                  Copyright 2021 <a href="#">Controle Embelez</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->
   </body>
</html>
