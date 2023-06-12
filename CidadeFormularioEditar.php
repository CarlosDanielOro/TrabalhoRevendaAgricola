<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<link rel="stylesheet" href="estilo.css">
<BODY class="body">
   <?php
      $get1 = filter_input(INPUT_GET, "var_idcidade");
      $get2 = filter_input(INPUT_GET, "var_nome");
      $get3 = filter_input(INPUT_GET, "var_uf");
   ?>
<ul class="navbar">
  <li class="navitens"><a class="navlinks" href="CidadeSelect.php">Voltar</a></li>
</ul>
<br />
<br />
<hr>
<h2 class="title">Alterar Cidades</h2>  

    <form align="center" action="_update.php" method="post">

     <input type=hidden name=tabela value="cidade">

     <b> ID:</b><br /> <input class="inputtext" type="text" name="input_idcidade" size="8" value="<?php echo $get1?>" readonly required>
       </br></br>

    <b> Descrição:</b><br /> <input class="inputtext" type="text" name="input_nome" size="30" value="<?php echo $get2?>" required>
       </br></br>  

    <b> UF:</b><br /> <input class="inputtext" type="text" name="input_uf" size="2" value="<?php echo $get3?>" required>
       </br></br>  
       
    <input class="inputbuttons" type="submit" value="Salvar">
   
   </form>

</BODY>
</HTML>   
