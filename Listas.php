<?php
require_once 'navbar.php';
$nome = $_SESSION['nome'];
$connect = mysqli_connect('localhost','ricardo','123','gamerslist');
$sql =("SELECT jogos FROM listas WHERE Utilizador ='$nome'");
$result = mysqli_query($connect,$sql);
?>
<table class='tabela' >
      <tr>
            <th>Jogos</th>
            <th>Remover Da lista</th>
      </tr>
<?php
while ($dados = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>".$dados["jogos"]."</td>";
      echo "<td><form><button class='button'>Remover</button></from></td>";
      echo "<tr>";
      }
?>