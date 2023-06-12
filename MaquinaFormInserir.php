<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<link rel="stylesheet" href="estilo.css">
<BODY class="body">
<ul class="navbar">
  <li class="navitens"><a class="navlinks" href="MaquinaSelect.php">Voltar</a></li>
</ul>
<br />
<br />
<hr>
<h2 class="title">Cadastrar Maquina</h2>  
      
    <form align="center" action="_insert.php" method="post">

    <input type=hidden name=tabela value="maquina">

     <b> ID:</b></br></br> <input class="inputtext" type="text" name="input_idmaquina" size="30" required>
       </br></br>

     <b> Nome:</b></br></br> <input class="inputtext" type="text" name="input_nome" size="30" required>
       </br></br>

     <b> Ano:</b></br></br> <input class="inputtext" type="text" name="input_anofabri" size="30" required>
      </br></br>
      
    <b> Modelo:</b></br></br> <input class="inputtext" type="text" name="input_modelo" size="30" required>
    </br></br>
    
    <b> Preço:</b></br></br> <input class="inputtext" type="text" name="input_preco" size="30" required>
    </br></br>

    <b> Estoque:</b></br></br> <input class="inputtext" type="text" name="input_qntestoque" size="30" required>
    </br></br>

    <b> Selecione a Fabricante</b> 
    </br></br>
        <select class="inputtext" name="input_idmarca" >
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
    <input class="inputbuttons" type="reset" value="Reset">   <input class="inputbuttons" type="submit" value="Cadastrar">
   
   </form>

</BODY>
</HTML>