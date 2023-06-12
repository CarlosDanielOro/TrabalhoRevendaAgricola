<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<link rel="stylesheet" href="estilo.css">
<BODY class="body">
   <?php
      $get1 = filter_input(INPUT_GET, "var_idmarca");
      $get2 = filter_input(INPUT_GET, "var_nome");
   ?>


<ul class="navbar">
  <li class="navitens"><a class="navlinks" href="FabricaSelect.php">Voltar</a></li>
</ul>
<br />
<br />
<hr>
<h2 class="title">Alterar Fabricantes</h2>  
    <form align="center" action="_update.php" method="post">

     <input type=hidden name=tabela value="fabrica">

     <b> ID:</b><br /> <input class="inputtext" type="text" name="input_idmarca" size="8" value="<?php echo $get1?>" readonly required>
       </br></br>

    <b> Nome:</b><br /> <input class="inputtext" type="text" name="input_nome" size="30" value="<?php echo $get2?>" required>
       </br></br>  

       </br></br>
       <hr>        
    <input class="inputbuttons" type="submit" value="Salvar">
   
   </form>

</BODY>
</HTML>   
