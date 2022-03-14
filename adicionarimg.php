<title>GamersList</title>
<?php
include "menu.php";
$ligacao = mysqli_connect("localhost","ricardo","123","gamerslist");
$query ="SELECT nome_jogo FROM jogos";
$result =mysqli_query($ligacao,$query);
?>
<div class="row col-12 formback2">
            <form action="" method="Post" >
            <select class="nome-form" name="nomejogo">
            <option value="">Selecionar Jogo</option> 
          
            <?php  while($row1 = mysqli_fetch_array($result)):;?>
            <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>

            <?php
            endwhile;?></select><br>
            
            <input type="file"class="nome-form" name="fileUpload" value="" ><br><br>
             <?php  
            //print_r($_POST);?>
            <button type="submit" class="button" name="submit" >Submeter</button>
      </form>
      </div>
      <?php 
    $jogo ="";
    $target_file = "";

    $img = "./img_dir/$target_file";
    if(!empty($_POST['nomejogo'])){
        $jogo = $_POST['nomejogo'];  
    }
    if(!empty($_POST['fileupload'])){
    $target_file = $_POST['fileupload'];  
    }
            
            if($target_file = "" && $jogo = "" || $jogo ==='Selecionar Jogo' ){}
            else{
            $sql="UPDATE jogos SET img = '$img' Where nome_jogo = '$jogo' ";
            $resultado= mysqli_query($ligacao,$sql);

}
        
?>