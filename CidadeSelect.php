<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<link rel="stylesheet" href="estilo.css">
<BODY class="body">
<ul class="navbar">
  <li class="navitens"><a class="navlinks" href="index.html">Voltar</a></li>
  <li class="navitens"><a class="navlinks">|</a></li>
  <li class="navitens"><a class="navlinks" href="CidadeFormInserir.php">Cadastrar Cidades</a></li>
</ul>
<br />
<br />
<hr>
<h2 class="title">Atualiza Cidades</h2>  

     <table border = "1" align="center" class="table">
      <tr>
        <td><b>ID</b></td>
        <td><b>Nome</b></td>
        <td><b>UF</b></td>
        <td><b>Editar?</b></td>
        <td><b>Excluir?</b></td>
     </tr>
      
       <?php
            include_once("_conexao.php");

            $conn = conectaBD();

            $select = "SELECT * FROM cidade";
            $resultado = mysqli_query($conn,$select);

            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['IDcidade'];?></td>
                <td><?php echo $i['nome'];?></td>
                <td><?php echo $i['uf'];?></td>
                <td><button class="button"><a class="link" href="<?php echo"CidadeFormularioEditar.php?var_idcidade=". $i['IDcidade']."&var_nome=".$i['nome']."&var_uf=".$i['uf']?>">Alterar</a></button></td> 
                <td><button class="button"><a class="link" href="<?php echo"_delete.php?var_id=". $i['IDcidade']."&tabela=cidade"?>">Excluir</a></button></td>
             </tr> 
            <?php
           }
            ?>
     </table>
     <hr>
     <img height="600px" width="800px" class="imgs" src="imgs/cidadeimg.jpg">
     <hr>
     <br />
        <p class="p">© Copyright, Direitos Reservados by Carlos Oro</p>

</BODY>
</HTML>