<?php //tag de abertura

$host = "localhost";

$username = "root";

$password = "";

$dbname = "db_CadastroUsuario";

$con = mysqli_connect($host,$username,$password,$dbname);//abre a conexão com o banco de dados

date_default_timezone_set('America/Sao_Paulo');

if($con->connect_error){ die("connection failed:".$con->connect_error);}//termina caso a conexão falhe

session_start();

if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
    header("Location: ../index.html");
    exit;
}
