<?php 
    $servidor = "localhost"; 
    $usuario = "root"; 
    $senha = ""; 
    $dbname = "hospital"; 
     
    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname); 
     
    if(!$conexao){ 
        die("Falha na conexao: " . mysqli_connect_error()); 
    }  
?> 