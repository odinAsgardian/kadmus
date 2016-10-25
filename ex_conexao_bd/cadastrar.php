<?php
	require_once 'Conexao.php';
	connect();

	$nick = $_POST["USR_NICKNAME"];
	$name = $_POST["USR_NAME"];
	$pass = md5($_POST["USR_PASSWORD"]);
	$pic = $_POST["USR_FOTO"];

	$sql = "INSERT INTO `jgo_user` (`USR_NICKNAME`, `USR_NAME`, `USR_PASSWORD`, `USR_FOTO`) values ('$nick', '$name','$pass', '$pic')";
	$result = mysqli_query($connection, $sql);
	if ($result){
		echo "Success!";
	} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
	/*// $conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD, DB_FOTO);
	$dados = array('USR_NICKNAME' => $_POST["USR_NICKNAME"], 'USR_NAME' => $_POST["USR_NAME"], 'USR_PASSWORD' => $_POST["USR_PASSWORD"], 'USR_FOTO' => $_POST["USR_FOTO"]);
	$insert = $conexao->insert('jgo_user', $dados);  */
	
	//header("Location: {$_SERVER['HTTP_REFERER']}");
	header("location: ../jogo_do_celle.html");
	exit;


?>