<?php //tag de abertura

$localhost = "localhost"; //define variavel

$username = "root";

$password = "";

$dbname = "samueldb";

$con = mysqli_connect($localhost,$username,$password,$dbname);//abre a conexão com o banco de dados

if($con->connect_error){ die("connection failed:".$con->connect_error);}//termina caso a conexão falhe


