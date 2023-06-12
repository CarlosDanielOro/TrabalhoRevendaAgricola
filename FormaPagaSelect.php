<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<link rel="stylesheet" href="estilo.css">
<BODY class="body">

<ul class="navbar">
  <li class="navitens"><a class="navlinks" href="index.html">Voltar</a></li>
  <li class="navitens"><a class="navlinks">|</a></li>
  <li class="navitens"><a class="navlinks" href="FormaPagaFormInserir.php">Cadastrar Forma de Pagamento</a></li>
</ul>
<br />
<br />
<hr>
<h2 class="title">Atualiza Forma de Pagamento</h2>
 
     
     <table border = "1" align="center" class="table">
      <tr>
        <td><b>ID</b></td>
        <td><b>Juro</b></td>
        <td><b>Tipo</b></td>
        <td><b>Editar?</b></td>
        <td><b>Excluir?</b></td>
     </tr>
      
       <?php
            include_once("_conexao.php");

            $conn = conectaBD();

            $select = "SELECT * FROM formapaga";
            $resultado = mysqli_query($conn,$select);

            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['IDpaga'];?></td>
                <td><?php echo $i['juro'];?></td>
                <td><?php echo $i['tipo'];?></td>
                <td><button class="button"><a class="link" href="<?php echo"FormaPagaFormularioEditar.php?var_idpaga=". $i['IDpaga']."&var_juro=".$i['juro']."&var_tipo=".$i['tipo']?>">Alterar</a></button></td> 
                <td><button class="button"><a class="link" href="<?php echo"_delete.php?var_id=". $i['IDpaga']."&tabela=formapaga"?>">Excluir</a></button></td>
             </tr> 
            <?php
           }
            ?>
     </table>
     <hr>
     <img heigth="800px" width="800px" class="imgs" src="imgs/formapagaimg.jpg">
     <hr>
     <br />
        <p class="p">© Copyright, Direitos Reservados by Carlos Oro</p>

</BODY>
</HTML>