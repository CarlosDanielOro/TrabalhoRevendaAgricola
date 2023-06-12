<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<link rel="stylesheet" href="estilo.css">
<BODY class="body">
<ul class="navbar">
  <li class="navitens"><a class="navlinks" href="CidadeSelect.php">Voltar</a></li>
</ul>
<br />
<br />
<hr>
<h2 class="title">Cadastrar Cidades</h2>  

    <form align="center" action="_insert.php" method="post">

    <input  type=hidden name=tabela value="cidade">

     <b> ID:</b> <input class="inputtext" type="text" name="input_idcidade" size="30" required>
       </br></br>

     <b> Nome:</b> <input class="inputtext" type="text" name="input_nome" size="30" required>
       </br></br>

     <b> UF:</b> <input class="inputtext" type="text" name="input_uf" size="30" required>
      </br></br>

       </br></br>
       <hr>
    <input class="inputbuttons" type="reset" value="Reset">   <input class="inputbuttons" type="submit" value="Cadastrar">
   
   </form>
  </BODY>
</HTML>