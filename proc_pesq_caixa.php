<?php
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = '';
$banco = 'rrorto45_produto';
$con = new mysqli($servidor, $usuario, $senha, $banco);
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}

//Receber a requisão da pesquisa 
$requestData= $_REQUEST;


//Indice da coluna na tabela visualizar resultado => nome da coluna no banco de dados
$columns = array(
	0 =>'especificacao', 
	1 => 'faturamento',
	2=> 'despesa',
	3=> 'despesapaga',
	4=>	'formapagamento',
	5=> 'datacadastro',
);

//Obtendo registros de número total sem qualquer pesquisa
$result_user = "SELECT id, especificacao, faturamento, despesa, despesapaga, formapagamento, datacadastro FROM caixa";
$resultado_user =mysqli_query($con, $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

//Obter os dados a serem apresentados
$result_usuarios = "SELECT id, especificacao, faturamento, despesa, despesapaga, formapagamento, datacadastro FROM caixa ";
if( !empty($requestData['search']['value']) ) {   // se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parâmetro de pesquisa
	$result_usuarios.=" AND ( datacadastro LIKE '".$requestData['search']['value']."%' ";    
	$result_usuarios.=" OR formapagamento LIKE '".$requestData['search']['value']."%' )";
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
	$dado[] = $row_usuarios["especificacao"];
	$dado[] = number_format($row_usuarios['faturamento'], 2, ',', '.');
	$dado[] = number_format($row_usuarios['despesa'], 2, ',', '.');
	$dado[] = number_format($row_usuarios['despesapaga'], 2, ',', '.');	
	$dado[] = $row_usuarios["formapagamento"];		
	$dado[] = date("d/m/yy", strtotime($row_usuarios["datacadastro"])); 	
    $dado[] ='<td><a target="_blank" href="editar_caixa.php?caixa='.$row_usuarios["id"].'"?><button class="btn btn-success btn-hover-green">Editar</button></a></td>';
    $dado[] ='<td><a href="deleta_caixa.php?del='.$row_usuarios["id"].'"?><button class="btn btn-danger">Excluir</button></a></td>';
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