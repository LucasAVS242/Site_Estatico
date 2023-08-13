<?php //tag de abertura

$localhost = "localhost"; //define variavel

$username = "id21030609_admin";

$password = "oW4QYN#$4Boz!n&";

$dbname = "id21030609_db_cadastrousuario";

$con = mysqli_connect($localhost,$username,$password,$dbname);//abre a conexão com o banco de dados

if($con->connect_error){ die("connection failed:".$con->connect_error);}//termina caso a conexão falhe


