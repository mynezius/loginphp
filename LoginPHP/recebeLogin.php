<?php
require "conexao.php";

$bancoConec=mysqli_query($mysqli,"SELECT nome, senha WHERE ;"); 
if($bancoConec->num_rows>0){
    $user=$bancoConec->fetch_array(MYSQLI_ASSOC);
if($user['nome']==$_POST['nome'] && $user['senha']==$_POST['senha']){
    setcookie('usuario', $user['nome'], time()+111999);
}
}
?>