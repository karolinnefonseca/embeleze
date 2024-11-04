<?php
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = '';
$banco = 'controle_embelez';
$con = new mysqli($servidor, $usuario, $senha, $banco);
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}

//Receber a requisão da pesquisa 
$requestData= $_REQUEST;


//Indice da coluna na tabela visualizar resultado => nome da coluna no banco de dados
$columns = array(
	0 =>'nome', 
	1 => 'telefone',
	2=> 'email',
	3=> 'login',
	4=> 'endereco',
);

//Obtendo registros de número total sem qualquer pesquisa
$result_user = "SELECT id ,nome, telefone, email, login, endereco FROM usuario";
$resultado_user =mysqli_query($con, $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

//Obter os dados a serem apresentados
$result_usuarios = "SELECT id ,nome, telefone, email, login, endereco FROM usuario  WHERE 1=1 ";
if( !empty($requestData['search']['value']) ) {   // se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parâmetro de pesquisa
	$result_usuarios.=" AND ( nome LIKE '".$requestData['search']['value']."%' ";    
	$result_usuarios.=" OR login LIKE '".$requestData['search']['value']."%' )";
}

$resultado_usuarios=mysqli_query($con, $result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);
//Ordenar o resultado
$result_usuarios.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$resultado_usuarios=mysqli_query($con, $result_usuarios);

// Ler e criar o array de dados
$dados = array();
while( $row_usuarios =mysqli_fetch_array($resultado_usuarios) ) {  
	$dado = array(); 
	$dado[] = $row_usuarios["id"];
	$dado[] = $row_usuarios["nome"];
	$dado[] = $row_usuarios["telefone"];
	$dado[] = $row_usuarios["email"];	
	$dado[] = $row_usuarios["login"];	
	$dado[] = $row_usuarios["endereco"];	
    $dado[] ='<td><a target="_blank" href="editar_funcionario.php?funcionario='.$row_usuarios["id"].'"?><button class="btn btn-success btn-hover-green">Editar</button></a></td>';
    $dado[] ='<td><a href="deleta_funcionario.php?del='.$row_usuarios["id"].'"?><button class="btn btn-danger">Excluir</button></a></td>';
	$dados[] = $dado;
}


//Cria o array de informações a serem retornadas para o Javascript
$json_data = array(
	"draw" => intval( $requestData['draw'] ),//para cada requisição é enviado um número como parâmetro
	"recordsTotal" => intval( $qnt_linhas ),  //Quantidade de registros que há no banco de dados
	"recordsFiltered" => intval( $totalFiltered ), //Total de registros quando houver pesquisa
	"data" => $dados   //Array de dados completo dos dados retornados da tabela 
);

echo json_encode($json_data);  //enviar dados como formato json
