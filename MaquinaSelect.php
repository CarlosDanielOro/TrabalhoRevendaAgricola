<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<link rel="stylesheet" href="estilo.css">
<BODY class="body">
<ul class="navbar">
  <li class="navitens"><a class="navlinks" href="index.html">Voltar</a></li>
  <li class="navitens"><a class="navlinks">|</a></li>
  <li class="navitens"><a class="navlinks" href="MaquinaFormInserir.php">Cadastrar Maquinas</a></li>
</ul>
<br />
<br />
<hr>
<h2 class="title">Atualiza Maquinas</h2>
 
     <table border = "1" align="center" class="table">
      <tr>
        <td><b>ID</b></td>
        <td><b>Nome</b></td>
        <td><b>Ano</b></td>
        <td><b>Modelo</b></td>
        <td><b>Preço</b></td>
        <td><b>Estoque</b></td>
        <td><b>Fabricante</b></td>
        <td><b>Editar?</b></td>
        <td><b>Excluir?</b></td>
     </tr>
      
       <?php
            include_once("_conexao.php");

            $conn = conectaBD();

            $select = "SELECT * FROM maquina";
            $resultado = mysqli_query($conn,$select);

            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['IDmaquina'];?></td>
                <td><?php echo $i['nome'];?></td>
                <td><?php echo $i['anofabri'];?></td>
                <td><?php echo $i['modelo'];?></td>
                <td><?php echo $i['preco'];?></td>
                <td><?php echo $i['qntestoque'];?></td>
                <td><?php echo $i['IDmarca'];?></td>
                <td><button class="button"><a class="link" href="<?php echo"MaquinaFormularioEditar.php?var_idmaquina=". $i['IDmaquina']."&var_nome=".$i['nome']."&var_anofabri=".$i['anofabri']."&var_modelo=".$i['modelo']."&var_preco=".$i['preco']."&var_qntestoque=".$i['qntestoque']."&var_idmarca=".$i['IDmarca']?>">Alterar</a></button></td> 
                <td><button class="button"><a class="link" href="<?php echo"_delete.php?var_id=". $i['IDmaquina']."&tabela=maquina"?>">Excluir</a></button></td>
             </tr> 
            <?php
           }
            ?>
     </table>
     <hr>
     <img class="imgs" src="imgs/maquinasimg.jpg">
     <hr>
     <br />
        <p class="p">© Copyright, Direitos Reservados by Carlos Oro</p>

</BODY>
</HTML>