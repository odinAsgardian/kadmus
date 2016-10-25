<?php
	require_once 'Conexao.php'
	?>
<!DOCTYPE html> 
<html>
	<head>
		<title>HTML5 Storage com JSON</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<link href="estilos_1.css" rel="stylesheet" type="text/css">				
	</head>
	<body>
		<form id="kadmus" action="cadastrar.php" method="POST">
			<label for="USR_NICKNAME">Nickname:</label>
				<input type="text" name="USR_NICKNAME" id="USR_NICKNAME" required/> 
			<label for="USR_NAME">Name:</label>
				<input type="text" name="USR_NAME"/> 
			<label for="USR_PASSWORD">Password:</label>
				<input type="password" name="USR_PASSWORD"/> 
			<label for="USR_FOTO">Picture:</label>
				<input type="file" name="USR_FOTO">
			<input type="submit" value="Salvar" id="btnSalvar" name="submit"/> 
		</form>
		
		<table id="jgo_user">
			<caption>Usuários</caption>
			<thead>
				<tr> 
					<th> Nickname </th> <th> Name </th> <th> Password </th> <th> Foto </th> <th> Deletar </th>
				</tr>
			</thead>
			<tbody id="corpo">
				 <?php
				 		connect();
				 		$sql = "SELECT * FROM jgo_user";
				 		$result = mysqli_query($connection, $sql);
				 		while($array = mysqli_fetch_array($result)){
				 			echo "<tr><td>".$array['USR_NICKNAME']."</td>";
							echo "<td>".$array['USR_NAME']."</td>";
							echo "<td>".$array['USR_PASSWORD']."</td>";
							echo "<td>".$array['USR_FOTO']."</td>";
							echo "<td><a href='deletar.php?USR_NICKNAME=".$array['USR_NICKNAME']."' ><img src='deletar.gif'></a></td></tr>";
				 		}
						/*require_once 'Conexao.php';
					
						$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
					
						$select = $conexao->select('jgo_user');
						if($select){
							foreach ($select as $pessoa) {						
								echo "<tr><td>".$pessoa['USR_NICKNAME']."</td>";
								echo "<td>".$pessoa['USR_NAME']."</td>";
								echo "<td>".$pessoa['USR_PASSWORD']."</td>";
								echo "<td>".$pessoa['USR_FOTO']."</td>";
								echo "<td><a href='deletar.php?USR_NICKNAME=".$pessoa['USR_NICKNAME']."' ><img src='deletar.gif'></a></td></tr>";
							}
						}*/
					?>	 	
				
				
			</tbody>
		</table>
	</body>
</html>
