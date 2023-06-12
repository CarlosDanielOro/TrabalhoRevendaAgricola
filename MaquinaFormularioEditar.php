<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<link rel="stylesheet" href="estilo.css">
<BODY class="body">
   <?php
      $get1 = filter_input(INPUT_GET, "var_idmaquina");
      $get2 = filter_input(INPUT_GET, "var_nome");
      $get3 = filter_input(INPUT_GET, "var_anofabri");
      $get4 = filter_input(INPUT_GET, "var_modelo");
      $get5 = filter_input(INPUT_GET, "var_preco");
      $get6 = filter_input(INPUT_GET, "var_qntestoque");
      $get7 = filter_input(INPUT_GET, "var_idmarca")
   ?>

<ul class="navbar">
  <li class="navitens"><a class="navlinks" href="MaquinaSelect.php">Voltar</a></li>
</ul>
<br />
<br />
<hr>
<h2 class="title">Alterar Maquina</h2>  
            
      
      <form align="center" action="_update.php" method="post">
  
      <input type=hidden name=tabela value="maquina">
  
       <b> ID:</b><br /> <input class="inputtext" type="text" name="input_idmaquina" size="30" required>
         </br></br>
  
       <b> Nome:</b><br /> <input class="inputtext" type="text" name="input_nome" size="30" required>
         </br></br>
  
       <b> Ano:</b><br /> <input class="inputtext" type="text" name="input_anofabri" size="30" required>
        </br></br>
        
      <b> Modelo:</b><br /> <input class="inputtext" type="text" name="input_modelo" size="30" required>
      </br></br>
      
      <b> Preço:</b><br /> <input class="inputtext" type="text" name="input_preco" size="30" required>
      </br></br>
  
      <b> Estoque:</b><br /> <input class="inputtext" type="text" name="input_qntestoque" size="30" required>
      </br></br>
  
      <b> Fabricante:</b>
      <br /> 
          <select class="inputtext" name="input_idmarca">
          <option>Selecione</option>
          <?php
              include_once("_conexao.php");
  
              $conn = conectaBD();
  
              $select = "SELECT * FROM fabrica order by nome";
              $resultado = mysqli_query($conn, $select);
  
              while($i = mysqli_fetch_assoc($resultado)){
              ?>
                      <option value="<?php echo $i['IDmarca'];?>">
                                     <?php echo $i['nome'];?>  
                      </option> 
          <?php
             }
          ?>
          </select>            
      </br></br>
      <hr>
    <input class="inputbuttons" type="submit" value="Salvar">
   
   </form>

</BODY>
</HTML>   
