<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<link rel="stylesheet" href="estilo.css">
<BODY class="body">
   <?php
      $get1 = filter_input(INPUT_GET, "var_idvendedor");
      $get2 = filter_input(INPUT_GET, "var_nome");
      $get3 = filter_input(INPUT_GET, "var_telefone");
      $get4 = filter_input(INPUT_GET, "var_comissao");
   ?>

<ul class="navbar">
  <li class="navitens"><a class="navlinks" href="VendedorSelect.php">Voltar</a></li>
</ul>
<br />
<br />
<hr>
<h2 class="title">Alterar Vendedor</h2>    

    <form align="center" action="_update.php" method="post">

     <input type=hidden name=tabela value="vendedor">

     <b> ID:</b></br></br> <input class="inputtext" type="text" name="input_idvendedor" size="8" value="<?php echo $get1?>" readonly required>
       </br></br>

    <b> Nome:</b></br></br> <input class="inputtext" type="text" name="input_nome" size="30" value="<?php echo $get2?>" required>
       </br></br>  

    <b> Telefone:</b></br></br> <input class="inputtext" type="text" name="input_telefone" size="50" value="<?php echo $get3?>" required>
       </br></br>
       
    <b> Comissão:</b></br></br> <input class="inputtext" type="text" name="input_comissao" size="50" value="<?php echo $get4?>">
       </br></br>    
    <hr>
    <input class="inputbuttons" type="submit" value="Salvar">
   
   </form>

</BODY>
</HTML>   
