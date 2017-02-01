<?php
include_once '../classes/conexao.php';
include_once '../classes/crud.class.php';

$conectar = new conexao();
$conectar->dbhost = 'localhost';
$conectar->dbname = 'ed1';
$conectar->dbpass = '';
$conectar->dbuser = 'root';

$conectar->connect();


/* @var $_POST type */
$status = $_POST["botao"];
$nome = $_POST['nome'];
$endereco = $_POST["end"];
$telefone = $_POST["telefone"];
$cpf = $_POST["cpf"];
$hospital = $_POST["hospital"];


switch ($status) {

    case 'cadastrar':

        $cad = new crud('cliente');  // instancia classe com as operaçoes crud, passando o nome da tabela como parametro
        $cad->inserir('nome,endereco,telefone,cpf,hospital', "'$nome','$endereco','$telefone','$cpf','$hospital'"); // utiliza a funçao INSERIR da classe crud
       
        echo("<script type='text/javascript'> alert('Dado gravado com sucesso !!!'
                ); location.href='../interno.php';</script>");
       

        break;
   
}