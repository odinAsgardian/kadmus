
<?php
	require_once 'conexao.php';
	$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD, DB_FOTO);
	$dados = array('USR_NICKNAME' => $_POST["USR_NICKNAME"], 'USR_NAME' => $_POST["USR_NAME"], 'USR_PASSWORD' => $_POST["USR_PASSWORD"], 'USR_FOTO' => $_POST["USR_FOTO"]);
	$insert = $conexao->insert('jgo_user', $dados); 
	
	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
?>
