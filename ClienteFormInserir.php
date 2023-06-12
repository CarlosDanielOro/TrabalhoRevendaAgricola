<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<link rel="stylesheet" href="estilo.css">
<BODY class="body">
<ul class="navbar">
  <li class="navitens"><a class="navlinks" href="ClienteSelect.php">Voltar</a></li>
</ul>
<br />
<br />
<hr>
<h2 class="title">Cadastrar Clientes</h2>  

    <form align="center" action="_insert.php" method="post">

    <input type=hidden name=tabela value="cliente">

     <b> ID:</b><br></br><input class="inputtext" type="text" name="input_idcliente" size="30" required>
       </br></br>

     <b> CPF:</b><br></br> <input class="inputtext" type="text" name="input_cpf" size="30" required>
       </br></br>
       
    <b> Nome:</b><br></br> <input class="inputtext" type="text" name="input_nome" size="30" required>
    </br></br>

    <b> Telefone:</b><br></br> <input class="inputtext" type="text" name="input_telefone" size="30" required>
      </br></br>
    
      <b>Selecione a Cidade</b> 
      <br></br>
        <select class="inputtext" name="input_idcidade">
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
    </br></br>
    <hr>
    <input class="inputbuttons" type="reset" value="Reset">   <input class="inputbuttons" type="submit" value="Cadastrar">
   
   </form>

</BODY>
</HTML>