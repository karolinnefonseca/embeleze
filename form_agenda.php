			    <?php
							
							include("conexao.php");
							$id = $_GET['edi'];
							$result = "SELECT *FROM cliente where email= '$id' ";
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
      <title>Marque sua agenda</title>
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
                     <li><a href="form_cliente.php?edi=<?php echo $campos['email'];?>" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i><span>Área do Cliente</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>
					 <li class="active"><a href="#" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fa fa-calendar-check-o" aria-hidden="true"></i><span>Marque sua agenda</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>			 
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

                  <h5 class="mb-0">Seja bem vindo(a) <?php echo $campos['nome_cliente'];?></h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
						<li class=""><a href="form_cliente.php?edi=<?php echo $campos['email'];?>"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a></li>
						<li class="breadcrumb-item"><i class="fa fa-arrow-right" aria-hidden="true"></i> Marque sua Agenda</a></li>
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
                                                <h2><?php echo $campos['nome_cliente'];?></h2>
                                                <p class="m-0 pl-3">Cliente</p>
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
<form action="inserir_agenda.php" method="POST">
<!--FORM NOME--> 
 <input type="hidden" name="nome" value="<?php echo $campos['nome_cliente'];?>"></input>
  <input type="hidden" name="edi" value="<?php echo $campos['email'];?>"></input>


  <label for="exampleFormControlInput1"><b>Nome do Cliente (Mude o nome caso o agendamento seja para outra pessoa):</b></label>

  <div class="form-row">
    <div class="form-group col-md-12">
      <input type="text" name="nomedentista"class="form-control" value="<?php echo $campos['nome_cliente'];?>">
    </div>
    <div class="form-group col-md-6">
	<label for="exampleFormControlInput1"><b>Serviço:</b></label>
										<select class="form-control" name="servico" id="servico">
										<option value="" selected = selected>Selecione...</option>
										<?php
										include("conexao.php");
										$resultstatus = "SELECT *from servico ORDER BY nome ASC ";
										$resultado = mysqli_query($con, $resultstatus);
										while($dados = mysqli_fetch_array($resultado)){
										$codigo = $dados['id'];
										$nome = $dados['nome'];
										echo "<option value='$nome'>$nome</option>";
										}
										
										?>
										
										</select>
	 
    </div>
    <div class="form-group col-md-6">
      <label for="inputdate"><b>Data do Agendamento:</b></label>
      <input input name="data"id="inputdate" type="date" class="form-control">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputdate"><b>Telefone de Contato:</b></label>
      <input input name="tel"id="inputTEL" type="text" class="form-control" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);">
    </div>
    <div class="form-group col-md-6">
    <label for="exampleFormControlTextarea1"><b>Observação:</b></label>
    <textarea class="form-control" name="obs"id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </div>

  <div  class="row justify-content-end">
  <button type="submit" name="salvar"class="btn btn-success">Cadastrar Agendamento</button>
</div> 

</div>
</form>        
<script>
function mask(o, f) {
  setTimeout(function() {
    var v = mphone(o.value);
    if (v != o.value) {
      o.value = v;
    }
  }, 1);
}

function mphone(v) {
  var r = v.replace(/\D/g, "");
  r = r.replace(/^0/, "");
  if (r.length > 10) {
    r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
  } else if (r.length > 5) {
    r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
  } else if (r.length > 2) {
    r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
  } else {
    r = r.replace(/^(\d*)/, "($1");
  }
  return r;
}
</script>            
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
