<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<link rel="stylesheet" href="estilo.css">
<BODY class="body">
<ul class="navbar">
  <li class="navitens"><a class="navlinks" href="FormaPagaSelect.php">Voltar</a></li>
</ul>
<br />
<br />
<hr>
<h2 class="title">Cadastrar Forma de Pagamento</h2>  
    
    <form align="center" action="_insert.php" method="post">

    <input type=hidden name=tabela value="formapaga">

     <b> ID:</b></br></br> <input class="inputtext" type="text" name="input_idpaga" size="30" required>
       </br></br>

     <b> Juro:</b></br></br> <input class="inputtext" type="text" name="input_juro" size="30" required>
       </br></br>

     <b> Tipo:</b></br></br> <input class="inputtext" type="text" name="input_tipo" size="30" required> 
      </br></br>

       </br></br>
       <hr>
    <input class="inputbuttons" type="reset" value="Reset">   <input class="inputbuttons" type="submit" value="Cadastrar">
   
   </form>

</BODY>
</HTML>

