<head>
<title>GamersList</title>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" href="estilos.css">
</head>

<?php 
$ligacao = mysqli_connect("localhost","ricardo","123","gamerslist");
$query ="SELECT empresas FROM empresa";
$query2="SELECT cats   FROM categoria";
$result =mysqli_query($ligacao,$query);
$result2=mysqli_query($ligacao,$query2);
$result3=mysqli_query($ligacao,$query2);
$result4=mysqli_query($ligacao,$query2);

include "menu.php";
?>
<div class="row col-12 formback2"> 
      <form method="post" action="adicionarjogos.php" >
      <div class="input-icons">
            <input class="nome-form" type="text" name="nome" required autocomplete="off" maxlength="35" placeholder="Nome">
            </br>
      </div>
      <select class="nome-form " name="empresa">
      <option value="">Selecionar empresa</option> 
    
      <?php  while($row1 = mysqli_fetch_array($result)):;?>
      <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?><br></option>

      <?php
      endwhile;?></select>
      <div class="input-icons">
            <input class="nome-form" type="text" name="data" maxlength="10" required placeholder="data" >
            </br>
      </div>     
      <div class="input-icons">
            <select class="nome-form " name="cat1">
            <option value="">Selecionar categoria1</option> 
            <?php  while($row1 = mysqli_fetch_array($result2)):;?>
            <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?><br></option>
             <?php endwhile;?></select>            </br>
      </div> 
      <div class="input-icons">
            <select class="nome-form " name="cat2">
            <option value="">Selecionar categoria2</option> 
            <?php  while($row1 = mysqli_fetch_array($result3)):;?>
            <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?><br></option>
             <?php endwhile;?></select>            </br>
      </div> 
      <div class="input-icons">
            <select class="nome-form " name="cat3">
            <option value="">Selecionar categoria3</option> 
            <?php  while($row1 = mysqli_fetch_array($result4)):;?>
            <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?><br></option>
             <?php endwhile;?></select></br>
      </div> 
      <div class="input-icons">
            <textarea class="nome-form"  name="desc" maxlength="1200" placeholder="Descrição"></textarea>
            </br>
      </div> 
      <input type="submit" value="Submeter" name="add" class="button">
</form>
<?php
if(isset($_POST['add'])){
$nome_jogo = $_POST['nome'];
$empresa =   $_POST['empresa'];
$data =      $_POST['data'];
$cat1 =      $_POST['cat1'];
$cat2 =      $_POST['cat2'];
$cat3 =      $_POST['cat3'];
$desc =      $_POST['desc'];
      }else{
$nome_jogo ="";
$empresa = "";
$data =    ""; 
$cat1 =    ""; 
$cat2 =    ""; 
$cat3 =    ""; 
$desc =    ""; 
      }
 
      if($nome_jogo =="" || $data ="" || $cat1 =="" || $desc ==""){
}else{
$query=("INSERT INTO jogos (nome_jogo, empresa, data_estreia, desc_jogo, categoria1,categoria2,categoria3,img) VALUES('$nome_jogo','$empresa','$data','$desc','$cat1','$cat2','$cat3','./img_dir/noimage.jpg')");
$insert = mysqli_query($ligacao,$query);
}

?>



