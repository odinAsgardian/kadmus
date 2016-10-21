<?php
	require_once 'Conexao.php';
	connect();

	$nickname = $_GET['USR_NICKNAME'];
	$sql = "DELETE FROM `jgo_user` WHERE `jgo_user`.`USR_NICKNAME` = '$nickname'";
	$result = mysqli_query($connection, $sql);
	if ($result){
		echo "Success!";
	} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
		}	
	/*$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
	$conexao->delete('jgo_user', 'USR_NICKNAME', $_GET["USR_NICKNAME"]); */
	
	//header("Location: {$_SERVER['HTTP_REFERER']}");
	//exit;
?>
