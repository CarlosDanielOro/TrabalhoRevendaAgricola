<?php
 include_once("_conexao.php");

 $get1 = (string)filter_input(INPUT_GET, "tabela");
 $get2 = filter_input(INPUT_GET, "var_id");

 if($get1 == 'venda'){
   excluirVenda($get2);
   header("Location: VendaSelect.php");
 }
 if($get1 == 'maquina'){
   excluirMaquina($get2);
   header("Location: MaquinaSelect.php");
}
if($get1 == 'cliente'){
   excluirCliente($get2);
   header("Location: ClienteSelect.php");
} 
 if($get1 == 'fabrica'){
   excluirFabrica($get2);
   header("Location: FabricaSelect.php");
} 
 
 if($get1 == 'vendedor'){
   excluirVendedor($get2);
   header("Location: VendedorSelect.php");
}

 if($get1 == 'formapaga'){
    excluirFormaPaga($get2);
    header("Location: FormaPagaSelect.php"); 
 }

 if($get1 == 'cidade'){
    excluirCidade($get2);
    header("Location: CidadeSelect.php");
 }   

//---------------EXCLUIR VENDA--------------------
function excluirVenda($p){
   $conexao = conectaBD();

   $dados= "DELETE FROM venda
            WHERE NumeroVenda = '{$p}'";

   mysqli_query($conexao,$dados) or die(myqsli_error());

   echo "Venda Excluída com Sucesso!";

   desconectaBD($conexao);
}

// --------------EXCLUIR MAQUINA-------------------
function excluirMaquina($p){
   $conexao = conectaBD();  

   $dados= "DELETE FROM maquina 
            WHERE  IDmaquina = '{$p}'";

   mysqli_query($conexao,$dados) or die(mysqli_error());
   
   $dados= "DELETE FROM venda 
            WHERE  IDmaquina = '{$p}'";

   mysqli_query($conexao,$dados) or die(mysqli_error());

   echo "Maquina Excluída com Sucesso!";

   desconectaBD($conexao);
}

// --------------EXCLUIR CLIENTE-------------------
function excluirCliente($p){
   $conexao = conectaBD();  

   $dados= "DELETE FROM cliente 
            WHERE  IDcliente = '{$p}'";

   mysqli_query($conexao,$dados) or die(mysqli_error());

   
   $dados= "DELETE FROM venda 
            WHERE  IDcliente = '{$p}'";

mysqli_query($conexao,$dados) or die(mysqli_error());

   echo "Cliente Excluído com Sucesso!";

   desconectaBD($conexao);
}

 // --------------EXCLUIR FABRICA-------------------
function excluirFabrica($p){
   $conexao = conectaBD();  

   $dados= "DELETE FROM fabrica 
            WHERE  IDmarca = '{$p}'";

   mysqli_query($conexao,$dados) or die(mysqli_error());
   
   $dados= "DELETE FROM maquina 
            WHERE  IDmarca = '{$p}'";

   mysqli_query($conexao,$dados) or die(mysqli_error());

   echo "Fabricante Excluída com Sucesso!";

   desconectaBD($conexao);
}

// --------------EXCLUIR VENDEDOR-------------------
function excluirVendedor($p){
   $conexao = conectaBD();  

   $dados= "DELETE FROM vendedor 
            WHERE  IDVendedor = '{$p}'";

   mysqli_query($conexao,$dados) or die(mysqli_error());

   echo "Vendedor Excluído com Sucesso!";

   desconectaBD($conexao);
}

 // --------------EXCLUIR FORMAPAGA-------------------
 function excluirFormaPaga($p){
   $conexao = conectaBD();  

   $dados= "DELETE FROM formapaga 
            WHERE  IDpaga = '{$p}'";

   mysqli_query($conexao,$dados) or die(mysqli_error());

   $dados= "DELETE FROM venda 
            WHERE  IDpaga = '{$p}'";

   mysqli_query($conexao,$dados) or die(mysqli_error());

   echo "Forma de Pagamento Excluída com Sucesso!";

   desconectaBD($conexao);
}

// --------------EXCLUIR CIDADE-------------------
 function excluirCidade($p){
   $conexao = conectaBD();  

   $dados= "DELETE FROM cidade 
            WHERE  IDcidade = '{$p}'";

   mysqli_query($conexao,$dados) or die(mysqli_error());

   $dados= "DELETE FROM cliente 
            WHERE  IDcidade = '{$p}'";

mysqli_query($conexao,$dados) or die(mysqli_error());

   echo "Cidade Excluída com Sucesso!";

   desconectaBD($conexao);
}

?>