<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<link rel="stylesheet" href="estilo.css">
<BODY class="body">

<ul class="navbar">
  <li class="navitens"><a class="navlinks" href="index.html">Voltar</a></li>
  <li class="navitens"><a class="navlinks">|</a></li>
  <li class="navitens"><a class="navlinks" href="VendedorFormInserir.php">Cadastrar Vendedor</a></li>
</ul>
<br />
<br />
<hr>
<h2 class="title">Atualiza Vendedores</h2>
 
     
     <table border = "2" align="center" class="table">
      <tr>
        <td><b>ID</b></td>
        <td><b>Nome</b></td>
        <td><b>Telefone</b></td>
        <td><b>Comissão</b></td>
        <td><b>Editar?</b></td>
        <td><b>Excluir?</b></td>
     </tr>
      
       <?php
            include_once("_conexao.php");

            $conn = conectaBD();

            $select = "SELECT * FROM vendedor";
            $resultado = mysqli_query($conn,$select);

            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['IDvendedor'];?></td>
                <td><?php echo $i['nome'];?></td>
                <td><?php echo $i['telefone'];?></td>
                <td><?php echo $i['comissao'];?></td>
                <td><button class="button"><a class="link" href="<?php echo"VendedorFormularioEditar.php?var_idvendedor=". $i['IDvendedor']."&var_nome=".$i['nome']."&var_telefone=".$i['telefone']."&var_comissao=".$i['comissao']?>">Alterar</a></button></td> 
                <td><button class="button"><a class="link" href="<?php echo"_delete.php?var_id=". $i['IDvendedor']."&tabela=vendedor"?>">Excluir</a></button></td>
             </tr> 
            <?php
           }
            ?>
     </table>
     <hr>
     <img class="imgs" src="imgs/vendedorimg.jpg">
     <hr>
     <br />
        <p class="p">© Copyright, Direitos Reservados by Carlos Oro</p>

</BODY>
</HTML>