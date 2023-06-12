<!DOCTYPE HTML>
<HTML>
<link rel="stylesheet" href="estilo.css">
<BODY class="body">
   <?php
      $get1 = filter_input(INPUT_GET, "var_numerovenda");
      $get2 = filter_input(INPUT_GET, "var_data");
      $get3 = filter_input(INPUT_GET, "var_idpaga");
      $get4 = filter_input(INPUT_GET, "var_idcliente");
      $get5 = filter_input(INPUT_GET, "var_idvendedor");
      $get6 = filter_input(INPUT_GET, "var_idmaquina")
   ?>

<ul class="navbar">
  <li class="navitens"><a class="navlinks" href="VendaSelect.php">Voltar</a></li>
</ul>
<br />
<br />
<hr>
<h2 class="title">Alterar Venda</h2>  
      <form align="center" action="_update.php" method="post">
  
      <input type=hidden name=tabela value="venda">
  
       <b> Numero:</b><br /> <input class="inputtext" type="text" name="input_numerovenda" size="30" required>
         </br></br>
  
       <b> Data:</b><br /> <input class="inputtext" type="date" name="input_data" size="30" required>
         </br></br>

      <b> Pagamento:</b>
      </br></br> 
          <select class="inputtext" name="input_idpaga">
          <option>Selecione</option>
          <?php
              include_once("_conexao.php");
  
              $conn = conectaBD();
  
              $select = "SELECT * FROM formapaga order by tipo";
              $resultado = mysqli_query($conn, $select);
  
              while($i = mysqli_fetch_assoc($resultado)){
              ?>
                      <option value="<?php echo $i['IDpaga'];?>">
                                     <?php echo $i['tipo'];?>  
                      </option> 
          <?php
             }
          ?>
      </select>
      </br></br>

      <b> Cliente:</b>
      </br></br> 
          <select class="inputtext" name="input_idcliente">
          <option>Selecione</option>
          <?php
              include_once("_conexao.php");
  
              $conn = conectaBD();
  
              $select = "SELECT * FROM cliente order by nome";
              $resultado = mysqli_query($conn, $select);
  
              while($i = mysqli_fetch_assoc($resultado)){
              ?>
                      <option value="<?php echo $i['IDcliente'];?>">
                                     <?php echo $i['nome'];?>  
                      </option> 
          <?php
             }
          ?>
      </select>
      </br></br>

      <b> Vendedor:</b>
      </br></br>
          <select class="inputtext" name="input_idvendedor">
          <option>Selecione</option>
          <?php
              include_once("_conexao.php");
  
              $conn = conectaBD();
  
              $select = "SELECT * FROM vendedor order by nome";
              $resultado = mysqli_query($conn, $select);
  
              while($i = mysqli_fetch_assoc($resultado)){
              ?>
                      <option value="<?php echo $i['IDvendedor'];?>">
                                     <?php echo $i['nome'];?>  
                      </option> 
          <?php
             }
          ?>
      </select>
      </br></br>

      <b> Maquina:</b>
      </br></br> 
          <select class="inputtext" name="input_idmaquina">
          <option>Selecione</option>
          <?php
              include_once("_conexao.php");
  
              $conn = conectaBD();
  
              $select = "SELECT * FROM maquina order by nome";
              $resultado = mysqli_query($conn, $select);
  
              while($i = mysqli_fetch_assoc($resultado)){
              ?>
                      <option value="<?php echo $i['IDmaquina'];?>">
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
