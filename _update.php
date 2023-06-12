<?php
 include_once("_conexao.php");

 if($_POST["tabela"] == 'venda'){
     editaVenda($_POST["input_numerovenda"], $_POST["input_data"], $_POST["input_idpaga"], $_POST["input_idcliente"], $_POST["input_idvendedor"], $_POST["input_idmaquina"]);
     header("Location: VendaSelect.php");
 }

 if($_POST["tabela"] == 'maquina'){
     editaMaquina($_POST["input_idmaquina"], $_POST["input_nome"], $_POST["input_anofabri"], $_POST["input_modelo"], $_POST["input_preco"], $_POST["input_qntestoque"], $_POST["input_idmarca"]);
     header("Location: MaquinaSelect.php");
 }

if($_POST["tabela"] == 'cliente'){
     editaCliente($_POST["input_idcliente"], $_POST["input_cpf"], $_POST["input_nome"], $_POST["input_telefone"], $_POST["idcidade"]);
     header("Location: ClienteSelect.php");
 }

if($_POST["tabela"] == 'fabrica'){
     editaFabrica($_POST["input_idmarca"], $_POST["input_nome"]);
     header("Location: FabricaSelect.php"); 
}
if($_POST["tabela"] == 'vendedor'){
     editaVendedor($_POST["input_idvendedor"], $_POST["input_nome"], $_POST["input_telefone"], $_POST["input_comissao"]);
     header("Location: VendedorSelect.php");
 }

 if($_POST["tabela"] == 'formapaga'){
      editaFormaPaga($_POST["input_idpaga"], $_POST["input_juro"], $_POST["input_tipo"]);
      header("Location: FormaPagaSelect.php"); 
 }

 if($_POST["tabela"] == 'cidade'){
      editaCidade($_POST["input_idcidade"], $_POST["input_nome"], $_POST["input_uf"]);
      header("Location: CidadeSelect.php");
 }
 // ------------EDITA MAQUINA---------------------
function editaVenda($p1, $p2, $p3, $p4, $p5, $p6){
     $conexao = conectaBD();  
  
     $dados= "UPDATE venda
              SET    data = ('{$p2}')
              WHERE  NumeroVenda = '{$p1}'";
  
     echo $dados;
  
     $dados= "UPDATE venda
              SET    data = '{$p2}', IDpaga = {$p3}, IDcliente = {$p4}, IDvendedor = {$p5}, IDmaquina = {$p6}
              WHERE  NumeroVenda = '{$p1}'";
  
     echo $dados;
     
     mysqli_query($conexao, $dados) or die(mysqli_error());
  
     echo "Editado com Sucesso!";
  
     desconectaBD($conexao);
   }

// ------------EDITA MAQUINA---------------------
function editaMaquina($p1, $p2, $p3, $p4, $p5, $p6, $p7){
     $conexao = conectaBD();  
  
     $dados= "UPDATE maquina
              SET    nome = ('{$p2}')
              WHERE  IDmaquina = '{$p1}'";
  
     echo $dados;
  
     $dados= "UPDATE maquina
              SET    nome = '{$p2}', anofabri = {$p3}, modelo = '{$p4}', preco = '{$p5}', qntestoque = {$p6}, idmarca = {$p7}
              WHERE  IDmaquina = '{$p1}'";
  
     echo $dados;
     
     mysqli_query($conexao, $dados) or die(mysqli_error());
  
     echo "Editado com Sucesso!";
  
     desconectaBD($conexao);
   }

// ------------EDITA CLIENTE---------------------
function editaCliente($p1, $p2, $p3, $p4, $p5){
     $conexao = conectaBD();  
  
     $dados= "UPDATE cliente
              SET    cpf = ('{$p2}')
              WHERE  IDcliente = '{$p1}'";
  
     echo $dados;
  
     $dados= "UPDATE cliente
              SET    cpf = '{$p2}', nome = '{$p3}', telefone = '{$p4}', idcidade = '{$p5}'
              WHERE  IDcliente = '{$p1}'";
  
     echo $dados;
     
     mysqli_query($conexao, $dados) or die(mysqli_error());
  
     echo "Editado com Sucesso!";
  
     desconectaBD($conexao);
   }

// ------------EDITA FABRICA---------------------
function editaFabrica($p1, $p2){
     $conexao = conectaBD();  
  
     $dados= "UPDATE fabrica
              SET    nome = ('{$p2}')
              WHERE  IDmarca = '{$p1}'";
  
     echo $dados;
  
     $dados= "UPDATE fabrica
              SET    nome = '{$p2}'
              WHERE  IDmarca = '{$p1}'";
  
     echo $dados;
     
     mysqli_query($conexao, $dados) or die(mysqli_error());
  
     echo "Editado com Sucesso!";
  
     desconectaBD($conexao);
   }

// ---------------EDITA CIDADE------------------
 function editaCidade($p1, $p2, $p3){
   $conexao = conectaBD();  

   $dados= "UPDATE cidade 
            SET    nome = ('{$p2}')
            WHERE  IDcidade = '{$p1}'";

   echo $dados;

   $dados= "UPDATE cidade
            SET    nome = '{$p2}', uf = '{$p3}'
            WHERE  IDcidade = '{$p1}'";

   echo $dados;
   
   mysqli_query($conexao, $dados) or die(mysqli_error());

   echo "Editado com Sucesso!";

   desconectaBD($conexao);
 }
// ------------EDITA FORMAPAGA---------------------
function editaFormaPaga($p1, $p2, $p3){
     $conexao = conectaBD();  
  
     $dados= "UPDATE formapaga 
              SET    juro = ('{$p2}')
              WHERE  IDpaga = '{$p1}'";
  
     echo $dados;
  
     $dados= "UPDATE formapaga
              SET    juro = '{$p2}', tipo = '{$p3}'
              WHERE  IDpaga = '{$p1}'";
  
     echo $dados;
     
     mysqli_query($conexao, $dados) or die(mysqli_error());
  
     echo "Editado com Sucesso!";
  
     desconectaBD($conexao);
   }
// ------------EDITA VENDEDOR---------------------
function editaVendedor($p1, $p2, $p3, $p4){
     $conexao = conectaBD();  
  
     $dados= "UPDATE vendedor 
              SET    nome = ('{$p2}')
              WHERE  IDvendedor = '{$p1}'";
  
     echo $dados;
  
     $dados= "UPDATE vendedor
              SET    nome = '{$p2}', telefone = '{$p3}', comissao = '{$p4}'
              WHERE  IDvendedor = '{$p1}'";
  
     echo $dados;
     
     mysqli_query($conexao, $dados) or die(mysqli_error());
  
     echo "Editado com Sucesso!";
  
     desconectaBD($conexao);
   }
  

?>