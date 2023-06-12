<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<link rel="stylesheet" href="estilo.css">
<BODY class="body">
   <?php
      $get1 = filter_input(INPUT_GET, "var_idcliente");
      $get2 = filter_input(INPUT_GET, "var_cpf");
      $get3 = filter_input(INPUT_GET, "var_nome");
      $get4 = filter_input(INPUT_GET, "var_telefone");
      $get5 = filter_input(INPUT_GET, "var_idcidade")
   ?>
<ul class="navbar">
  <li class="navitens"><a class="navlinks" href="ClienteSelect.php">Voltar</a></li>
</ul>
<br />
<br />
<hr>
<h2 class="title">Alterar Clientes</h2>    

    <form align="center" action="_update.php" method="post">

     <input type=hidden name=tabela value="cliente">

     <b> ID:</b><br /> <input class="inputtext" type="text" name="input_idcliente" size="8" value="<?php echo $get1?>" readonly required>
       </br></br>

    <b> CPF:</b><br /> <input class="inputtext" type="text" name="input_cpf" size="30" value="<?php echo $get2?>" required>
       </br></br>  

    <b> Nome:</b><br /> <input class="inputtext" type="text" name="input_nome" size="50" value="<?php echo $get3?>" required>
       </br></br>
       
    <b> Telefone:</b><br /> <input class="inputtext" type="text" name="input_telefone" size="50" value="<?php echo $get4?>" required>
       </br></br>    

       <b> Cidade</b>
       <br /> 
      <select class="inputtext" name="idcidade">
        <option>Selecione</option>
        <?php
            include_once("_conexao.php");

            $conn = conectaBD();

            $select = "SELECT * FROM cidade order by nome";
            $resultado = mysqli_query($conn, $select);

            while($i = mysqli_fetch_assoc($resultado)){
            ?>
                    <option value="<?php echo $i['IDcidade'];?>">
                                   <?php echo $i['nome'];?>  
                    </option> 
        <?php
           }
        ?>
        </select>
        <br />
        <hr>
    <input class="inputbuttons"type="submit" value="Salvar">
   
   </form>

</BODY>
</HTML>   
