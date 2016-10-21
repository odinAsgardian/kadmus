
<?php
	require_once 'conexao.php';
	$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
	$conexao->delete('jgo_user', 'USR_NICKNAME', $_GET["USR_NICKNAME"]); 
	
	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
?>
