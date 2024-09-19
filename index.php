<?php
/* conexao com o bd */
$servername = "baseteste.srv.br";
$username = "basetestesrv_u_anaclara";
$password = "piorsaladomundo";
$database = "baseteste_anaclaramaria";

$conexao = mysqli_connect($servername, $username,$password,$database);

if(!$conexao){
    die("falhou a conexão".mysqli_connect_error());
}else{
    echo "conectado com sucesso";
}
?>