<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<link rel="stylesheet" href="estilo.css">
<BODY class="body">
<ul class="navbar">
  <li class="navitens"><a class="navlinks" href="VendedorSelect.php">Voltar</a></li>
</ul>
<br />
<br />
<hr>
<h2 class="title">Cadastrar Vendedor</h2>  
           
    <form align="center" action="_insert.php" method="post">

    <input type=hidden name=tabela value="vendedor">

     <b> ID:</b></br></br> <input class="inputtext" type="text" name="input_idvendedor" size="30" required>
       </br></br>

     <b> Nome:</b></br></br> <input class="inputtext" type="text" name="input_nome" size="30" required>
       </br></br>

     <b> Telefone:</b></br></br> <input class="inputtext" type="text" name="input_telefone" size="30" required>
      </br></br>
      
    <b> Comissão:</b></br></br> <input class="inputtext" type="text" name="input_comissao" size="30">
    </br></br>
    
    </br></br>
    <hr>
    <input class="inputbuttons" type="reset" value="Reset">   <input class="inputbuttons" type="submit" value="Cadastrar">
   
   </form>

</BODY>
</HTML>