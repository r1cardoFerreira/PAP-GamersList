<?php
      include 'menu.php';
      $ligacao = mysqli_connect("localhost","ricardo","123","gamerslist");
?>
<div class="row col-12 formback2">
				<form method="post" action="" >
                              <input class="nome-form" type="text" name="empresa" required autocomplete="off" maxlength="35" placeholder="Empresa">
                        </br>
                        <input type="submit" value="adicionar" class="button" name="add">
</form>
<?php

if(!empty($_POST['empresa'])){
      $empresa = $_POST['empresa'];
}else{
      $empresa ="";
}

if($empresa != null){
      $sql ="INSERT INTO empresa VALUES ('$empresa')";
      $result = mysqli_query($ligacao,$sql);
      echo "<p>Empresa adicionada com sucesso</p>";
}