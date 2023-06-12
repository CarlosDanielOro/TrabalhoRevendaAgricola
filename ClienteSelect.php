<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<link rel="stylesheet" href="estilo.css">
<BODY class="body">
<ul class="navbar">
  <li class="navitens"><a class="navlinks" href="index.html">Voltar</a></li>
  <li class="navitens"><a class="navlinks">|</a></li>
  <li class="navitens"><a class="navlinks" href="ClienteFormInserir.php">Cadastrar Cliente</a></li>
</ul>
<br />
<br />
<hr>
<h2 class="title">Atualiza Clientes</h2>  

     <table border = "1" align="center" class="table">
      <tr>
        <td><b>ID</b></td>
        <td><b>CPF</b></td>
        <td><b>Nome</b></td>
        <td><b>Telefone</b></td>
        <td><b>Cidade</b></td>
        <td><b>Editar?</b></td>
        <td><b>Excluir?</b></td>
     </tr>
      
       <?php
            include_once("_conexao.php");

            $conn = conectaBD();

            $select = "SELECT * FROM cliente";
            $resultado = mysqli_query($conn,$select);

            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['IDcliente'];?></td>
                <td><?php echo $i['cpf'];?></td>
                <td><?php echo $i['nome'];?></td>
                <td><?php echo $i['telefone'];?></td>
                <td><?php echo $i['IDcidade'];?></td>
                <td><button class="button"><a class="link" href="<?php echo"ClienteFormularioEditar.php?var_idcliente=". $i['IDcliente']."&var_cpf=".$i['cpf']."&var_nome=".$i['nome']."&var_telefone=".$i['telefone']."&var_idcidade=".$i['IDcidade']?>">Alterar</a></button></td> 
                <td><button class="button"><a class="link" href="<?php echo"_delete.php?var_id=". $i['IDcliente']."&tabela=cliente"?>">Excluir</a></button></td>
             </tr> 
            <?php
           }
            ?>
     </table>
     <hr>
     <img heigth="800px" width="800px" class="imgs" src="imgs/clienteimg.jpg">
     <hr>
     <br />
        <p class="p">© Copyright, Direitos Reservados by Carlos Oro</p>

</BODY>
</HTML>