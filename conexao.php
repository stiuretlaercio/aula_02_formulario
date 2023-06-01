<?php
$host="localhost";
$user="root";
$sen="";
$bd="formulario";

$conexao=mysqli_connect($host, $user, $sen, $bd);
if(!$conexao){
    echo"houve um erro: ".mysqli_connect_error();
}
else{
    echo"deu certo mano aproveite!";
}

?>