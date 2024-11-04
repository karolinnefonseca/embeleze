<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Banco de Talentos</title>
      <!-- Favicon -->
	<link rel="shortcut icon" href="img/usuario.png" type="image/x-icon">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style_indicadores.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
	 <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
	   <script src="js/index.js"></script>
  <script src="js/main.js"></script>
  <script>
  history.forward();
  function funcaodeslogar()
{
alert("Obrigado por usar o sistema RROrtolabor!");
}
  </script>
   </head>
   <body>
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
			    <?php
							include("conexao.php");
							$id = $_GET['edi'];
							$result = "SELECT *FROM usuario where login= '$id' ";
							$resultado = mysqli_query($con, $result);
							$row = mysqli_fetch_assoc($resultado);
							$campos= $row;			
				
				?>
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Menu</span></li>
					 <li class="active"><a href="form_banco_de_talentos.php?edi=<?php echo $campos['login'];?>" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Banco de Talentos</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>
                     <li><a href="form_clientes.php?edi=<?php echo $campos['login'];?>" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Clientes</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>
					 <li><a href="form_estoque.php?edi=<?php echo $campos['login'];?>" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Estoque/Insumos</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>
					 <li><a href="form_funcionarios.php?edi=<?php echo $campos['login'];?>" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Funcionários</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>
					 <li><a href="form_servico.php?edi=<?php echo $campos['login'];?>" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Serviços</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>
					 
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
                     <a href="form_cliente.php" class="logo">
                     <img src="../img/logo_indicadores.png" class="img-fluid" alt="">
                     <span>Indicadores</span>
                     </a>
                  </div>
               </div>
               <div class="navbar-breadcrumb">
                  <h5 class="mb-0">Seja bem vindo(a) <?php echo $campos['nome'];?></h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
                        <li class=""><a href="index_rr_sistema.php?edi=<?php echo $campos['login'];?>"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a></li>
                        <li class=""><i class="fa fa-arrow-right" aria-hidden="true"></i> Área Administrativa</a></li>
						<li class="breadcrumb-item"><i class="fa fa-arrow-right" aria-hidden="true"></i> Cadastrar Banco de Talentos</a></li>
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
				<a class="btn btn-outline-danger" href="sair.php" onclick="funcaodeslogar()"role="button"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
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
                                             <div class="profile-img pr-4">
                                                <?php echo '<img src="data:image/gif;base64,' . base64_encode($campos['foto']) . '" />';?>
                                             </div>
                                             <div class="config_titulo">
                                                <h2><?php echo $campos['nome'];?></h2>
                                                <p class="m-0 pl-3">Proprietário</p>
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
						<form>
<!--FORM NOME--> 
 <div class="form-group">
	<label for="exampleFormControlInput1"><b>Nome</b></label>
  <form>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Nome">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Sobrenome">
    </div>
  </div>
</form>
  <form>
</form>
<form>
  <div class="form-group">
    <label for="exampleFormControlFile1"><b>Foto</b></label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>
<!--FORM ENDEREÇO--> 
<form>
  <div class="form-group">
    <label for="inputAddress"><b>Endereço</b></label>
    <input type="text" class="form-control" id="inputAddress">
  </div>
  <div class="form-group">
    <label for="inputAddress2"><b>Complemento</b></label>
    <input type="text" class="form-control" id="inputAddress2">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity"><b>Cidade</b></label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip"><b>CEP</b></label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
  </div>
</form>
<!--FORM EMAIL--> 
    <label for="exampleFormControlInput1"><b>Email</b></label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
  </div>
  <label><b>Telefone</b></label>
  <form>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="Ex.: (00) 00000-0000">
    </div>
  </div>
</form>
<!--FORM PEDIDOS--> 
    <div class="form-group">
    <label for="exampleFormControlSelect1"><b>Turma</b></label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  	<label for="exampleFormControlInput1"><b>Nome do Treinamento</b></label>
  <form>
  <div class="form-row">
    <div class="formgroup col-md-12">
      <input type="text" class="form-control" placeholder="Treinamento">
    </div>
  </div>
</form>
</form>
	   <form>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label><b>Colocação</b></label>
      <input type="number" class="form-control">
    </div>
	<div class="form-group col-md-6">
      <label for="inputdate"><b>Data do treinamento</b></label>
      <input input id="inputdate" type="date" class="form-control">
    </div>
	</div>
	</form>
  <div  class="row justify-content-end">
  <button type="submit" class="btn btn-primary">Salvar</button>
  <div class="ml-1">
  <button type="reset" class="btn btn-secondary">Apagar</button>
  </div>
</div>
</form>
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
   </body>
</html>