<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<link rel="stylesheet" href="estilo.css">
<BODY class="body">

<ul class="navbar">
  <li class="navitens"><a class="navlinks" href="index.html">Voltar</a></li>
  <li class="navitens"><a class="navlinks">|</a></li>
  <li class="navitens"><a class="navlinks" href="FabricaFormInserir.php">Cadastrar Fabrica</a></li>
</ul>
<br />
<br />
<hr>
<h2 class="title">Atualiza Fabricante</h2>

     
     <table border = "1" align="center" class="table">
      <tr>
        <td><b>ID</b></td>
        <td><b>Nome</b></td>
        <td><b>Editar?</b></td>
        <td><b>Excluir?</b></td>
     </tr>
      
       <?php
            include_once("_conexao.php");

            $conn = conectaBD();

            $select = "SELECT * FROM fabrica";
            $resultado = mysqli_query($conn,$select);

            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['IDmarca'];?></td>
                <td><?php echo $i['nome'];?></td>
                <td><button class="button"> <a class="link" href="<?php echo"FabricaFormularioEditar.php?var_idmarca=". $i['IDmarca']."&var_nome=".$i['nome']?>">Alterar</a></button></td> 
                <td><button class="button"> <a class="link" href="<?php echo"_delete.php?var_id=". $i['IDmarca']."&tabela=fabrica"?>">Excluir</a></button></td>
             </tr> 
            <?php
           }
            ?>
     </table>
     <hr>
     <img class="imgs" src="imgs/fabricaimg.jpg">
     <hr>
     <br />
        <p class="p">© Copyright, Direitos Reservados by Carlos Oro</p>
</BODY>
</HTML>