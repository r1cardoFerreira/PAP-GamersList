<?php
$ligacao = mysqli_connect("localhost","ricardo","123","gamerslist");
mysqli_set_charset($ligacao,"utf8");//resolve a questão dos acentos 

$ID = filter_input(INPUT_POST, 'ID');
$nome_jogo = filter_input(INPUT_POST, 'nome_jogo');

session_start();
if(isset($_SESSION['nome'])){
      $utilizador = $_SESSION['nome'];
}

$check = "SELECT * FROM listas WHERE Utilizador = '$utilizador' AND jogos = '$nome_jogo'";
$sql ="INSERT INTO listas VALUES ('$utilizador','$nome_jogo')";

$src =mysqli_query($ligacao,$check);      

if($utilizador != null){
if(isset($_POST['submit'])){
      /*if($src = TRUE){
            echo "<script>window.alert('O jogo Selecionado já foi adicionado á sua Lista');window.location.
            href='HomePage.php</script>";
            header("Location:Login.php");
            exit;*/
      //}else{
            $result=mysqli_query($ligacao,$sql);
            header("Location:HomePage.php"); 
            exit;
    //  }
}
}else{      
      echo "<script>alert('Sessão Não encontrada');window.location.
      href='HomePage.php</script>";
}
?>
