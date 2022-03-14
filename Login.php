<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<head>
	<title>
		GamersList
	</title>
	<link rel="stylesheet" href="estilos.css">
</head><body>
    <?php
        require_once 'navbar.php';
       ?>
    <?php
$connect = mysqli_connect('localhost','ricardo','123','gamerslist');
if(isset($_POST['login'])){ 
            $nome =$_POST['nome'];
            $password =$_POST['password'];
            $_SESSION['nome'] = $nome;
            $_SESSION['password'] = $password;
    $query ="SELECT * FROM utilizador WHERE nome_utilizador ='$nome' AND palavra_passe = '$password'";
    $verifica = mysqli_query($connect,$query) or die("erro ao selecionar");
    if ($nome=="admin" && $password ="admin123") {

      header("Location:adicionarjogos.php"); 
      exit;

    }
        elseif (mysqli_num_rows($verifica) ==1){
        echo"<script language='javascript' type='text/javascript'
        alert('Bem Vindo $nome!');
        window.location.href='HomePage.php';        
        </script>"; 
        header("Location:HomePage.php"); 
        exit;
        }else{
       
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='Login.php';</script>"; 
        die();
      }
  }
?> 
 <?php
    
//formulario de login
echo <<<_FORM
	<div  class="row col-12 formback2">
		<form method="post" action="Login.php">
			<h2 class="form-titulo"><u>Lo</u>g<u>in</u></h2>
			<div class="input-icons">
			<i class="material-icons iconz">&#xe7fd;</i>
			<input class="nome-form" style="text-align:center;" type="text" name="nome" required autocomplete="off" placeholder="Nome   ">
			<br>
			</br>
      </div>
      <div class="input-icons">
			<i class="material-icons iconz">&#xe897;</i>
			<input class="nome-form" style="text-align:center;"  type="password" name="password" required placeholder="Password">
			<br>
			</br>
</div>
			<input  class="button" type="submit" name="login" id="login" value="Login"><br/><br>	
			<p class="links";>Se não tem conta <a  href="Registo.php"><u class="links">clique aqui!</u></a></p><br/><br/>
		</form>
	</div>
_FORM;

    ?>
</body>
<?php 
include 'footer.php';
	?>
</html>