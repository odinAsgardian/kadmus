<title>Cadastro</title>
<form action="Formulario.php" method="post">
<!-- DADOS DO PLAYER -->
<fieldset>
 <legend>Player's Info</legend>
 <table cellspacing="10">

  <tr>
   <td>
      <label for="name">Name: </label>    
   </td>
   <td align="left">
    <input type="text" name="name" placeholder="EX: Emmiskley"   
   </td>
   <td>
    <label for="nick">Nickname: </label>
   </td>
   <td align="left">
    <input type="text" name="nick" placeholder ="EX: Safaketchum">
   </td>
  </tr>

  <tr>
   <td>
    <label for="imagem">Profile Picture:</label>
   </td>
   <td>
    <input type="file" name="imagem">
   </td>
  </tr>

 <tr>
     <td>
       <label for="passw">Password: </label>
     </td>
     <td>
       <input type="text" name="passw" placeholder="**********">
     </td>
     </tr>    
 </table>
</fieldset>
<br />
<input type="submit" value="Send">
<input type="reset" value="Clear">
</form>