<?php
include_once 'classes/conexao.php';

$conectar = new conexao();
$conectar->dbhost = 'localhost';
$conectar->dbname = 'ed1';
$conectar->dbpass = '';
$conectar->dbuser = 'root';

$conectar->connect();

  //apenas testando a conexao
            if($conectar->connect() == true){
                echo 'Conectou';
            }else{
                echo 'Não conectou';
            }