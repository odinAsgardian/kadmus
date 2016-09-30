<?php

include ('conexao.php');

$USR_NAME=$_POST['name'];
$USR_NICKNAME=$_POST['nick'];
$USR_FOTO=$_POST['imagem'];
$USR_PASSWORD=$_POST['passw'];

$sql="insert into 'jgo_user' ('USR_NICKNAME','USR_NAME', 'USR_PASSWORD','USR_FOTO' ) values ('$USR_NICKNAME','$USR_NAME', '$USR_PASSWORD', '$USR_FOTO'";

// $sql->bind_param("inserted", $USR_NAME, $USR_NICKNAME, $USR_FOTO, $USR_PASSWORD);

// $sql->execute();

// $sql->store_result();

/*$result=$sql->affected_rows;

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
}*/
$result=mysqli_query($connect, $sql);
if ($result){
    echo "<script>
        alert('Success!');
        /*window.location.href='index.html';*/
    </script>";
} else {
    echo "<script>
        alert('Error!');
        /* window.location.href='index.html';*/
    </script>";
}



?>