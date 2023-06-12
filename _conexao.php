<?php

 function conectaBD(){
   $servername = "localhost";
   $database = "revendaagricola"; 
   $username = "root";
   $password = "";

   // criar conexão
   $conexao= mysqli_connect($servername,$username,$password,$database);
   if(!$conexao){
     die("Conexão falhou! ".mysqli_connect_error()); 
   }

   return ($conexao);
  
  }// final da Função  
   
//-----------------------------//
   function desconectaBD($conexao){
      mysqli_close($conexao);
  }

?>



