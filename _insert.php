<?php
 include_once("_conexao.php");

 if($_POST["tabela"] == 'venda'){
     cadastraVenda($_POST["input_numerovenda"],$_POST["input_data"], $_POST["input_idpaga"], $_POST["input_idcliente"], $_POST["input_idvendedor"], $_POST["input_idmaquina"]);
     header("Location: VendaSelect.php"); 
}

if($_POST["tabela"] == 'maquina'){
     cadastraMaquina($_POST["input_idmaquina"],$_POST["input_nome"], $_POST["input_anofabri"], $_POST["input_modelo"], $_POST["input_preco"], $_POST["input_qntestoque"], $_POST["input_idmarca"]);
     header("Location: MaquinaSelect.php"); 
}

if($_POST["tabela"] == 'cliente'){
     cadastraCliente($_POST["input_idcliente"],$_POST["input_cpf"], $_POST["input_nome"], $_POST["input_telefone"], $_POST["input_idcidade"]);
     header("Location: ClienteSelect.php"); 
}

if($_POST["tabela"] == 'fabrica'){
     cadastraFabrica($_POST["input_idmarca"], $_POST["input_nome"]);
     header("Location: FabricaSelect.php"); 
}

 if($_POST["tabela"] == 'vendedor'){
     cadastraVendedor($_POST["input_idvendedor"], $_POST["input_nome"], $_POST["input_telefone"], $_POST["input_comissao"]);
     header("Location: VendedorSelect.php"); 
}

 if($_POST["tabela"] == 'formapaga'){
      cadastraFormaPaga($_POST["input_idpaga"], $_POST["input_juro"], $_POST["input_tipo"]);
      header("Location: FormaPagaSelect.php"); 
 }

 if($_POST["tabela"] == 'cidade'){
      cadastraCidade($_POST["input_idcidade"], $_POST["input_nome"], $_POST["input_uf"]);
      header("Location: CidadeSelect.php"); 
 }


//--------------------CADASTRA VENDA--------------------
function cadastraVenda($Numero, $data, $paga, $cliente, $vendedor, $maquina){
     $conexao = conectaBD();  
  
     $dados= "INSERT INTO venda(NumeroVenda, data, IDpaga, IDcliente, IDvendedor, IDmaquina) VALUES ({$Numero}, '{$data}', {$paga}, {$cliente}, {$vendedor}, {$maquina})";
     mysqli_query($conexao,$dados) or die(mysqli_error());
  
     echo "Nova venda cadastrado com sucesso!";
  
     desconectaBD($conexao);
     }

//--------------------CADASTRA MAQUINA--------------------
function cadastraMaquina($id, $nome, $anofabri, $modelo, $preco, $qntestoque, $idmarca){
     $conexao = conectaBD();  
  
     $dados= "INSERT INTO maquina(IDmaquina, nome, anofabri, modelo, preco, qntestoque, IDmarca) VALUES ({$id}, '{$nome}', {$anofabri}, '{$modelo}', '{$preco}', {$qntestoque}, {$idmarca})";
     mysqli_query($conexao,$dados) or die(mysqli_error());
  
     echo "Nova maquina cadastrada com sucesso!";
  
     desconectaBD($conexao);
     }


//--------------------CADASTRA FABRICANTE--------------------
function cadastraFabrica($id, $nome){
     $conexao = conectaBD();  
  
     $dados= "INSERT INTO fabrica(IDmarca, nome) VALUES ({$id}, '{$nome}')";
     mysqli_query($conexao,$dados) or die(mysqli_error());
  
     echo "Nova fabricante cadastrada com sucesso!";
  
     desconectaBD($conexao);
     }

//--------------------CADASTRA CLIENTE--------------------
function cadastraCliente($id, $cpf, $nome, $telefone, $idcidade){
     $conexao = conectaBD();  
  
     $dados= "INSERT INTO cliente(IDcliente, cpf, nome, telefone, idcidade) VALUES ({$id}, {$cpf}, '{$nome}', {$telefone}, {$idcidade})";
     mysqli_query($conexao,$dados) or die(mysqli_error());
  
     echo "Novo cliente cadastrado com sucesso!";
  
     desconectaBD($conexao);
     }

//--------------------CADASTRA VENDEDOR--------------------
function cadastraVendedor($id, $nome, $telefone, $comissao){
     $conexao = conectaBD();  
  
     $dados= "INSERT INTO vendedor(IDvendedor, nome, telefone, comissao) VALUES ({$id}, '{$nome}', {$telefone}, {$comissao})";
     mysqli_query($conexao,$dados) or die(mysqli_error());
  
     echo "Novo vendedor cadastrado com sucesso!";
  
     desconectaBD($conexao);
     }

//--------------------CADASTRA FORMA PAGA--------------------
function cadastraFormaPaga($id, $juro, $tipo){
   $conexao = conectaBD();  

   $dados= "INSERT INTO formapaga(IDpaga, juro, tipo) VALUES ({$id}, {$juro}, '{$tipo}')";
   mysqli_query($conexao,$dados) or die(mysqli_error());

   echo "Nova forma de pagamento cadastrada com sucesso!";

   desconectaBD($conexao);
   }
//---------------------- CADASTRA CIDADE--------------------
function cadastraCidade($id, $nome, $uf){
      $conexao = conectaBD();  
   
      $dados= "INSERT INTO cidade(IDcidade, nome, uf) VALUES ({$id},'{$nome}','{$uf}')";
      mysqli_query($conexao,$dados) or die(mysqli_error());
   
      echo "Nova cidade cadastrada com Sucesso!";
   
      desconectaBD($conexao);
      }
?>