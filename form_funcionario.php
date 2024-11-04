			    <?php
							
							include("conexao.php");
							$id = $_GET['edi'];
							$result = "SELECT *FROM usuario where login= '$id'";
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
      <title>Funcionário</title>
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
                     <li class="active"><a href="#" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i><span>Cadastrar Cliente</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>
					 <li><a href="form_consultar_agenda.php?edi=<?php echo $campos['login'];?>" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fa fa-calendar-check-o" aria-hidden="true"></i><span>Consultar Agenda</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>			 
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
                     <a href="form_funcionario.php?edi=<?php echo $campos['login'];?>" class="logo">
                     <img src="img/logo_adm.png" class="img-fluid" alt="">
                     <span></span>
                     </a>
                  </div>
               </div>
			   
               <div class="navbar-breadcrumb">

                  <h5 class="mb-0">Seja bem vindo(a) <?php echo $campos['nome'];?></h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
						<li class=""><a href="form_cliente.php?edi=<?php echo $campos['email'];?>"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a></li>
                        <li class=""><i class="fa fa-arrow-right" aria-hidden="true"></i> Área do Funcionário</li>
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
<form action="inserir_cadastro_cliente.php" method="POST">
<!--FORM NOME--> 
 <input type="hidden" name="edi" value="<?php echo $campos['login'];?>"></input>
 <input type="hidden" name="codcliente" value="1"></input>
 <div class="form-group">

  <label for="exampleFormControlInput1"><b>Nome do Cliente</b></label>

  <div class="form-row">
    <div class="col">
      <input type="text" name="nomedentista"class="form-control" placeholder="Nome do Cliente">
	 
    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputdate"><b>Data de Aniversário do Cliente</b></label>
      <input input name="data_niver_dentista"id="inputdate" type="date" class="form-control">
    </div>
    <div class="form-group col-md-6">
      <label for="inputdate"><b>Telefone</b></label>
      <input input name="tel"id="inputTEL" type="text" class="form-control">
    </div>
  </div>

<!--FORM EMAIL--> 
 <div class="form-row">
	<div class="form-group col-md-6">
    <label for="exampleFormControlInput1"><b>Email 01</b></label>
    <input type="email" name="email"class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
	</div>
	
	<div class="form-group col-md-6">
    <label for="exampleFormControlInput1"><b>Email 02</b></label>
    <input type="email" name="email2"class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
	</div>
</div>
  
<!--FORM ENDEREÇO--> 
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress"><b>Endereço</b></label>
    <input type="text" name="endereco" class="form-control" id="inputAddress">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2"><b>Complemento</b></label>
    <input type="text" name="complemento"class="form-control" id="inputAddress2">
  </div> 
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity"><b>Cidade</b></label>
      <input type="text" name="cidade"class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip"><b>CEP</b></label>
      <input type="text" name="cep"class="form-control" id="inputZip">
    </div>
  </div>

<!--FORM PEDIDOS--> 
  <div class="form-row">

  <div class="form-group col-md-6">
     <label for="exampleFormControlSelect1"><b>Status do Cliente</b></label>
    <select class="form-control" name="status" id="status">
      <option>ATIVO</option>
	  <option>INATIVO</option>
	</select>
	</div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
     <label for="exampleFormControlSelect1"><b>Contrato de Fidelidade</b></label>
    <select class="form-control" name="fidelidade" id="fidelidade">
      <option>SIM</option>
	  <option>NÃO</option>
	</select>
	</div>
    <div class="form-group col-md-6">
      <label for="inputdate"><b>Data do contrato</b></label>
      <input input name="data_contrato"id="inputdate" type="date" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1"><b>Lembretes</b></label>
    <textarea class="form-control" name="lembrete"id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div  class="row justify-content-end">
  <button type="submit" name="salvar"class="btn btn-success">Salvar</button>
  <div class="ml-1">
  <a href="clientes_cadastrados.php?edi=<?php echo $campos['login'];?>" target="_blank" type="submit" class="btn btn-primary">Pesquisar</a>    
  </div>
  <div class="ml-1">
  <button type="reset" class="btn btn-secondary">Apagar</button>
  </div>
</div> 
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
                  Copyright 2021 <a href="#">Controle Embelez</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->
   </body>
</html>
