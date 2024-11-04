<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Editar Clientes</title>
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
               <a href="index.php">
               <img src="img/logo_adm.png" class="img-fluid" alt="">
              
               </a>
            </div>
			    <?php
							
							include("conexao.php");
							$id = $_GET['cliente'];
							$result = "SELECT *FROM cliente where id_cliente= '$id' ";
							$resultado = mysqli_query($con, $result);
							$row = mysqli_fetch_assoc($resultado);
							$campos= $row;	
							
							
				
				?>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Menu</span></li>
					 <li><a href="#" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Editar Clientes</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>					 
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
                     <span>Indicadores</span>
                     </a>
                  </div>
               </div>
			   
               <div class="navbar-breadcrumb">

                  <h5 class="mb-0">Editar cliente: <?php echo $campos['nome_dentista'];?></h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item"><i class="fa fa-arrow-right" aria-hidden="true"></i> Editar Clientes</a></li>
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
                                 <img src="img/fundo_adm.jpg" alt="profile-bg" class="rounded img-fluid w-100"/> 
                              </div>
                              <div class="profile-info p-4">
                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                       <div class="user-detail pl-5">
                                          <div class="d-flex flex-wrap align-items-center">
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
<form action="editar_cadastro_cliente.php" method="POST">
<!--FORM NOME--> 
 <input type="hidden" name="edi" value="<?php echo $campos['id_cliente'];?>"></input>
 <div class="form-group">

  <label for="exampleFormControlInput1"><b>Nome do Cliente</b></label>

  <div class="form-row">
    <div class="col">
      <input type="text" name="nomedentista"class="form-control" value="<?php echo $campos['nome_dentista'];?>">
	 
    </div>
  </div>  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputdate"><b>Data de Aniversário do Cliente</b></label>
      <input input name="data_niver_dentista"id="inputdate" type="date" value="<?php echo $campos['data_niver_dentista'];?>" class="form-control">
    </div>
    <div class="form-group col-md-6">
      <label for="inputdate"><b>Telefone</b></label>
      <input input name="tel"id="inputTEL" type="text" class="form-control" value="<?php echo $campos['telefone_responsavel'];?>">
    </div>
  </div>

<!--FORM EMAIL--> 
 <div class="form-row">
	<div class="form-group col-md-6">
    <label for="exampleFormControlInput1"><b>Email 01</b></label>
    <input type="email" name="email"class="form-control" id="exampleFormControlInput1" value="<?php echo $campos['email'];?>">
	</div>
	
	<div class="form-group col-md-6">
    <label for="exampleFormControlInput1"><b>Email 02</b></label>
    <input type="email" name="email2"class="form-control" id="exampleFormControlInput1" value="<?php echo $campos['email2'];?>">
	</div>
</div>

  
<!--FORM ENDEREÇO--> 
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress"><b>Endereço</b></label>
    <input type="text" name="endereco" class="form-control" id="inputAddress" value="<?php echo $campos['endereco'];?>">
  </div>
  <div class="form-group col-md-6">
   <label for="inputAddress2"><b>Complemento</b></label>
    <input type="text" name="complemento"class="form-control" id="inputAddress2" value="<?php echo $campos['complemento'];?>">
  </div>
 </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity"><b>Cidade</b></label>
      <input type="text" name="cidade"class="form-control" id="inputCity" value="<?php echo $campos['cidade'];?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip"><b>CEP</b></label>
      <input type="text" name="cep"class="form-control" id="inputZip" value="<?php echo $campos['cep'];?>">
    </div>
  </div>

<!--FORM PEDIDOS--> 
  <div class="form-row">
  <div class="form-group col-md-6">
     <label for="exampleFormControlSelect1"><b>Status do Cliente</b></label>
    <select class="form-control" name="status" id="status">
      <option><?php echo $campos['status'];?></option>
	  <option>ATIVO</option>
	  <option>INATIVO</option>
	</select>
	</div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
     <label for="exampleFormControlSelect1"><b>Contrato de Fidelidade</b></label>
    <select class="form-control" name="fidelidade" id="fidelidade">
      <option><?php echo $campos['fidelidade'];?></option>
	  <option>SIM</option>
	  <option>NÃO</option>
	</select>
	</div>
    <div class="form-group col-md-6">
      <label for="inputdate"><b>Data do contrato</b></label>
      <input input name="data_contrato"id="inputdate" type="date" class="form-control" value="<?php echo $campos['datacontrato'];?>">
    </div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1"><b>Lembretes</b></label>
    <textarea class="form-control" name="lembrete"id="exampleFormControlTextarea1" rows="3"><?php echo $campos['lembretes'];?></textarea>
  </div>

  <div  class="row justify-content-end">
  <button type="submit" name="editar"class="btn btn-success">Salvar</button>
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
