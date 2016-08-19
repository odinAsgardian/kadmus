<?php

include ('conexao.php');

$id=0;
$USR_NAME=$_POST['name'];
$USR_NICKNAME=$_POST['nick'];
$USR_FOTO=$_POST['imagem'];
$USR_PASSWORD=$_POST['passw'];

$sql=$mysqli->prepare("insert into JGO_USER values (?, ?, ?, ?)");

$sql->bind_param("inserted", $USR_NAME, $USR_NICKNAME, $USR_FOTO, $USR_PASSWORD);

$sql->execute();

$sql->store_result();

$result=$sql->affected_rows;

if ($resul > 0){
    echo "<script>
        alert('Success!');
        window.location.href='index.html';
    </script>";
} else {
    echo "<script>
        alert('Error!');
        window.location.href='index.html';
    </script>";
}

?>