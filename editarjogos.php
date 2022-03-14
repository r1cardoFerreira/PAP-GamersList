<style type="text/css">
            #jogos{
                  font-family: Arial, Helvetica, sans-serif;
                  border-collapse: collapse;
            }
            #jogos th {
                  border:2px solid black;
                  padding:12px;
                  text-align: center;
                  background-color: navy;
                  color: white;
            }                 
            #jogos tr:nth-child(even){background-color: #f2f2f2;}
		td{
			border: 2px solid black;
			font-size: 1em;
                  vertical-align: center;
                  text-align:center;
                 
		}
</style>
<?php
include 'menu.php';
      if(isset($_GET['alter']) ){
            if ($_GET['alter']== "true" ) {
                  echo "<p>Os dados foram alterados<p>";
            }else{
                  echo "<p> Erro ao alterar os dados</p>";
            }
      }
      ?>
      <div>
      <table id="jogos" style="margin-top:50px">
            <tr>
                  <th>Nome</th>
                  <th>Empresa</th>
                  <th>Data_estreia</th>
                  <th>Descrição</th>
                  <th>categoria1</th>
                  <th>categoria2</th>
                  <th>categoria3</th>
                  <th></th>
            </tr>

            <?php
            //Estableça a ligação com o mysql ALTERNATIVA AO LOGIN COM INCLUDE
            $ligacao = mysqli_connect("localhost","ricardo","123","gamerslist");
            mysqli_set_charset($ligacao,"utf8");//resolve a questão dos acentos 
            if (!$ligacao) {
                  echo "Erro na ligação à base de dados";
                  exit;
            }
            $sql = "SELECT * FROM jogos ORDER BY nome_jogo";
            $consulta = mysqli_query($ligacao,$sql);
            if (!$consulta) {
                  echo "Erro ao realizar a consulta.";
                  exit;
            }
            while ($dados = mysqli_fetch_assoc($consulta)) {
                  echo "<tr>";
                  echo "<td>".$dados["nome_jogo"]."</td>";
                  echo "<td>".$dados["empresa"]."</td>";
                  echo "<td>".$dados["data_estreia"]."</td>";
                  echo "<td>".$dados["desc_jogo"]."</td>";
                  echo "<td>".$dados["categoria1"]."</td>";
                  echo "<td>".$dados["categoria2"]."</td>";
                  echo "<td>".$dados["categoria3"]."</td>";
                  echo "<td>";
                  //Chama o ficheiro editar.php
                  echo "<form action='editar.php' method='post'>";
                  echo "<input name='ID' type='hidden' value='".$dados['ID']."'>";
                  echo "<input name='nome_jogo' type='hidden' value='".$dados['nome_jogo']."'>";
                  echo "<input name='empresa' type='hidden' value='".$dados['empresa']."'>";
                  echo "<input name='data_estreia' type='hidden' value='".$dados['data_estreia']."'>";
                  echo "<input name='desc_jogo' type='hidden' value='".$dados['desc_jogo']."'>";
                  echo "<input name='categoria1' type='hidden' value='".$dados['categoria1']."'>";
                  echo "<input name='categoria2' type='hidden' value='".$dados['categoria2']."'>";
                  echo "<input name='categoria3' type='hidden' value='".$dados['categoria3']."'>";
                  echo "<button class='button' style='heitgh:100%'>Editar</button>";
                  echo "</td>";
                  echo "</tr>";
                  echo "</form>";
            }
            ?>
      </table>
</body>
</html>