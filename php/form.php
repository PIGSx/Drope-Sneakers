<?php
 $dbhost = 'Localhost';
 $dbUsername = 'root';
 $dbPassword = 'password';
 $dbName = 'formulario-drope';

 $conexao = new mysqli ($dbhost,$dbUsername,$dbPassword,$dbName);

 if ($conexao->connect_errno) {
    echo "Erro";
 }
  else {
    echo "boooa pigs";
  }
?>