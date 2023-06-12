<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<link rel="stylesheet" href="estilo.css">
<BODY class="body">
   <?php
      $get1 = filter_input(INPUT_GET, "var_idpaga");
      $get2 = filter_input(INPUT_GET, "var_juro");
      $get3 = filter_input(INPUT_GET, "var_tipo");
   ?>

<ul class="navbar">
  <li class="navitens"><a class="navlinks" href="FormaPagaSelect.php">Voltar</a></li>
</ul>
<br />
<br />
<hr>
<h2 class="title">Alterar Forma de Pagamento</h2>  

    <form align="center" action="_update.php" method="post">

     <input type=hidden name=tabela value="formapaga">

     <b> ID:</b><br /> <input class="inputtext" type="text" name="input_idpaga" size="8" value="<?php echo $get1?>" readonly required>
       </br></br>

    <b> Juro:</b><br /> <input class="inputtext" type="text" name="input_juro" size="30" value="<?php echo $get2?>" required>
       </br></br>  

    <b> Tipo:</b><br /> <input class="inputtext" type="text" name="input_tipo" size="50" value="<?php echo $get3?>" required>
       </br></br>  
       <hr>
    <input class="inputbuttons" type="submit" value="Salvar">
   
   </form>

</BODY>
</HTML>   
