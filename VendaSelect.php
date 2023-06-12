<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<link rel="stylesheet" href="estilo.css">
<BODY class="body">
<ul class="navbar">
  <li class="navitens"><a class="navlinks" href="index.html">Voltar</a></li>
  <li class="navitens"><a class="navlinks">|</a></li>
  <li class="navitens"><a class="navlinks" href="VendaFormInserir.php">Cadastrar Vendas</a></li>
</ul>
<br />
<br />
<hr>
<h2 class="title">Atualiza Cidades</h2>  

     <table border = "1" align="center" class="table">
      <tr>
        <td><b>Numero</b></td>
        <td><b>Data</b></td>
        <td><b>F.Pagamento</b></td>
        <td><b>Cliente</b></td>
        <td><b>Vendedor</b></td>
        <td><b>Maquina</b></td>
        <td><b>Editar?</b></td>
        <td><b>Excluir?</b></td>
     </tr>
      
       <?php
            include_once("_conexao.php");

            $conn = conectaBD();

            $select = "SELECT * FROM venda";
            $resultado = mysqli_query($conn,$select);

            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['NumeroVenda'];?></td>
                <td><?php echo $i['data'];?></td>
                <td><?php echo $i['IDpaga'];?></td>
                <td><?php echo $i['IDcliente'];?></td>
                <td><?php echo $i['IDvendedor'];?></td>
                <td><?php echo $i['IDmaquina'];?></td>
                <td><button class="button"> <a class="link" href="<?php echo"VendaFormularioEditar.php?var_NumeroVenda=". $i['NumeroVenda']."&var_data=".$i['data']."&var_idpaga=".$i['IDpaga']
                ."&var_idcliente=".$i['IDcliente']."&var_idvendedor=".$i['IDvendedor']."&var_idmaquina=".$i['IDmaquina']?>">Alterar</a></button></td> 
                <td><button class="button"> <a class="link" href="<?php echo"_delete.php?var_id=". $i['NumeroVenda']."&tabela=venda"?>">Excluir</a></button></td>
             </tr> 
            <?php
           }
            ?>
     </table>
     <hr>
     <img heigth="800px" width="800px" class="imgs" src="imgs/vendaimg.jpg">
     <hr>
     <br />
        <p class="p">© Copyright, Direitos Reservados by Carlos Oro</p>
</BODY>
</HTML>