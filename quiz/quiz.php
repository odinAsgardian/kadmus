<?php
session_start();
ob_start();

if (!isset($_SESSION['indx'])) {
	$_SESSION['indx'] = 0;
	$indice = 0;
} else {
	$indice = $_SESSION['indx'];
}

if (!isset($_SESSION['erros'])) {
	$_SESSION['erros'] = 0;
	$erros = 0;
} else {
	$erros = $_SESSION['erros'];
}

if (!isset($_SESSION['acertos'])) {
	$_SESSION['acertos'] = 0;
	$acertos = 0;
} else {
	$acertos = $_SESSION['acertos'];
}

if(!isset($_SESSION['questions'])) {
	$_SESSION['questions'] = $questions;
	$options = $questions;
} else {
	$options = $_SESSION['questions'];
}
?>
<html>
	<head>
		<style>
			.itens {
				list-style: none;
				
			}
			body {
	background-color: #eeeeee ;
}




		</style>
	</head>
	<body>
		<?php
			$questions = [
				['caderno.jpg','a book','a notebook','a backpack', 'an eraser', '2', 'What’s this?'],
				['carteira.jpg','a wallet','a wastebasket','a briefcase','an earring','1', 'What’s this?'],
				['relogio.jpg','It’s ten after two','It’s ten two','It’s ten to two','It’s a quarter after two','3', 'What time is it?'],
				['menino.jpg','He’s swimming','He’s writing','He’s running','He’s studying','4', ' What’s he doing?'],
				['blusa.jpg','It’s navy blue','It’s purple','It’s gray','It’s beige','3', 'What color is this blouse?']
			];

			function resetContext() {
				unset($_SESSION['indx']);
				unset($_SESSION['acertos']);
				unset($_SESSION['erros']);
				unset($_SESSION['questions']);
			}

			if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["reset"])) {
				$_POST['contexto'] = 'default';
				resetContext();
				$indice = 0;
				$id = 0;
				header("location: quiz.php");
			}

			if (isset($_POST["resposta"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
			$resposta = $_POST["resposta"];
				if($resposta === $questions[$indice][5]){
					$indice++;
					$acertos++;
					if($indice === sizeof($questions)){
						$indice = 0;
						echo "O jogo acabou!!<br>";
						echo "Acertos: " . $acertos . "<br>";
						echo "Erros: " . $erros . "<br>";
						$acertos = 0;
						$erros = 0;
						unset($_SESSION['questions']);
					}
				}else{
					$erros++;
				}
			}
			$_SESSION['indx'] = $indice;
			$_SESSION['acertos'] = $acertos;
			$_SESSION['erros'] = $erros;
			$_SESSION['questions'] = $questions;
		?>
		<h2>Selecione a resposta correta</h2>
		
		<h1>Pergunta: <?= $indice+1; ?></h1>
		<h2><?=$questions[$indice][6]?></h2>
		<table>
			<tr>
				<td>
					<img src="img/<?= $questions[$indice][0] ?>" alt="Img" width="300" height="300">
				</td>
			</tr>
		</table>

		<form method="POST" action="<?= ($_SERVER["PHP_SELF"])?>"> 
			<div class="content">
				<ul class="itens">
					<?php	
					for($i = 1 ; $i <= 4 ; $i++){
						echo "
							<li>
								<input type='radio' value='" . $i . "' name='resposta'>" . $questions[$indice][$i] . "
							</li>
						";
						}
						?>
					</ul>
				</div>
				<input class="large" type="submit" name="enviar" value="Responder"> 
			</form>
			<form method="POST" action="<?= ($_SERVER["PHP_SELF"])?>"> 
				<br/>
				<input class="large" type="submit" name="reset" value="Reset"> 
			</form>
	</body>
</html>
<?php
ob_end_flush();
?>