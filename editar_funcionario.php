<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Editar Funcionários</title>
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
alert("Obrigado por usar o sistema Controle Embelez!");
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
							$id = $_GET['funcionario'];
							$result = "SELECT *FROM usuario where id= '$id' ";
							$resultado = mysqli_query($con, $result);
							$row = mysqli_fetch_assoc($resultado);
							$campos= $row;	
							
							
				
				?>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Menu</span></li>
					 <li><a href="#" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Editar funcionário</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>					 
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

                  <h5 class="mb-0">Editar o funcionário: <?php echo $campos['nome'];?></h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item"><i class="fa fa-arrow-right" aria-hidden="true"></i> Editar funcionário</a></li>
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
						
<form action="editar_cadastro_funcionario.php" method="POST">
<script language="javascript">   
function moeda(a, e, r, t) {
    let n = ""
      , h = j = 0
      , u = tamanho2 = 0
      , l = ajd2 = ""
      , o = window.Event ? t.which : t.keyCode;
    if (13 == o || 8 == o)
        return !0;
    if (n = String.fromCharCode(o),
    -1 == "0123456789".indexOf(n))
        return !1;
    for (u = a.value.length,
    h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
        ;
    for (l = ""; h < u; h++)
        -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
    if (l += n,
    0 == (u = l.length) && (a.value = ""),
    1 == u && (a.value = "0" + r + "0" + l),
    2 == u && (a.value = "0" + r + l),
    u > 2) {
        for (ajd2 = "",
        j = 0,
        h = u - 3; h >= 0; h--)
            3 == j && (ajd2 += e,
            j = 0),
            ajd2 += l.charAt(h),
            j++;
        for (a.value = "",
        tamanho2 = ajd2.length,
        h = tamanho2 - 1; h >= 0; h--)
            a.value += ajd2.charAt(h);
        a.value += r + l.substr(u - 2, u)
    }
    return !1
}
 </script>	
 
<script>
function show() {
  var senha = document.getElementById("txtSenha");
  if (senha.type === "password") {
    senha.type = "text";
  } else {
    senha.type = "password";
  }
}
</script>
<input type="hidden" name="edi" value="<?php echo $campos['login'];?>"></input>
<input type="hidden" name="id" value="<?php echo $campos['id'];?>"></input>
 <div class="form-group">
  <div class="form-row">
    <div class="form-group col-md-6">
	<label for="exampleFormControlInput1"><b>Nome Completo</b></label>
      <input type="text" name="usuario" class="form-control" placeholder="Nome" value="<?php echo $campos['nome'];?>">
    </div>
	
    <div class="form-group col-md-4">
	<label for="exampleFormControlInput1"><b>Senha</b></label>
      <input type="password" id="txtSenha"name="senha" class="form-control" placeholder="Senha" value="<?php echo $campos['senha'];?>">
    </div>
	 <div class="form-group col-md-2">
	<label for="exampleFormControlInput1"><b>Mostrar senha</b></label>
	<input class="input"type="checkbox" onclick="show()"></input>
	</div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
	<label for="exampleFormControlInput1"><b>Login</b></label>
      <input type="text" name="login" class="form-control" placeholder="Login" value="<?php echo $campos['login'];?>">
    </div>
    <div class="form-group col-md-6">
    <label for="exampleFormControlFile1"><b>Foto</b></label>
    <input type="file" name="foto"class="form-control-file" id="exampleFormControlFile1">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity"><b>Cidade</b></label>
      <input type="text" name="cidade"class="form-control" id="inputCity" value="<?php echo $campos['cidade'];?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip"><b>CEP</b></label>
      <input type="text" name="cep"class="form-control" id="inputZip" value="<?php echo $campos['cep'];?>">
    </div>
  <div class="form-group col-md-4">
    <label for="inputAddress"><b>Endereço</b></label>
    <input type="text" name="endereco"class="form-control" id="inputAddress" value="<?php echo $campos['endereco'];?>">
  </div>
  </div>

	<div class="form-row">
	<div class="form-group col-md-4">
    <label for="exampleFormControlInput1"><b>Email</b></label>
    <input type="email" name="email"class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com" value="<?php echo $campos['email'];?>">
	</div>
	<div class="form-group col-md-4">
      <label><b>Vale Transporte</b></label>
      <input type="text" name="vale" onKeyPress="return(moeda(this,'.',',',event))" class="form-control" value="<?php echo number_format($campos['valetransporte'], 2, ',', '.')?>">
    </div>
	
	<div class="form-group col-md-4">
    <label><b>Telefone</b></label>
      <input type="text" name="telefone"class="form-control" placeholder="Ex.: (00) 00000-0000" value="<?php echo $campos['telefone'];?>">
    </div>
  </div>

  <div class="form-row">
	
    <div class="form-group col-md-4">
      <label><b>Carteira de Trabalho</b></label>
      <input type="text" name="carteira"class="form-control" value="<?php echo $campos['carteira_trabalho'];?>">
    </div>	
    <div class="form-group col-md-4">
      <label><b>PIS</b></label>
      <input type="text" name="pis"class="form-control" value="<?php echo $campos['pis'];?>">
    </div>
    <div class="form-group col-md-4">
      <label><b>Salário</b></label>
      <input type="text" name="salario" onKeyPress="return(moeda(this,'.',',',event))" class="form-control" value="<?php echo number_format($campos['salario'], 2, ',', '.')?>">
    </div>
  </div>

  <div  class="row justify-content-end">
  <button type="submit" name="editar" class="btn btn-success">Salvar</button>
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
