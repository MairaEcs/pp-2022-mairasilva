<?php
session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['local'];
$latitude = $_POST['lat'];
$longitude = $_POST['lng'];

//$estado = $_POST['estado'];
//$cidade = $_POST['cidade'];

echo $nome;

$host = "localhost";
$user = "root";
$pass = "";
$db = "cadastro_descarte";

$conn = mysqli_connect($host, $user, $pass, $db);

if($conn){
    //consulta
    $sql = "insert into locaisdescarte (nome, email, telefone, endereco, latitude, longitude) values ('" . $nome . "', '" . $email . "', '" . $telefone . "', '" . $endereco . "', '" . $latitude . "', '" . $longitude . "')"; 
    //resultado
    //$sql = "select nome from pontosdescarte";
    $result = mysqli_query($conn, $sql);

    if(!$result){
        echo "Ocorreu um erro na consulta: " . mysqli_error($conn);
        $_SESSION['msgcadastro'] = "<p style='color:red;'>Erro no cadastro!</p>";
        header("Location: index.php");
    }else{
        $_SESSION['msgcadastro'] = "<b class='inf-cadastro' style='color:green;'> ----- Cadastro feito com sucesso! ----- (As informações vão ser checadas e após isso, serão inseridas no mapa.)</p>";
        header("Location: index.php");
    }

}else{
    die("Conexão com o SGBD falhou." . mysqli_connect_error());
}

/*
CREATE TABLE pontosDescarte (
    id INTEGER NOT NULL auto_increment,
    nome VARCHAR(40) NOT NULL,
    email VARCHAR(40),
    telefone VARCHAR(30),
    endereco VARCHAR(60) NOT NULL,
    estado VARCHAR(20) NOT NULL,
    cidade VARCHAR(30) NOT NULL,
    PRIMARY KEY (id)
);


CREATE TABLE locaisdescarte (
    id INTEGER NOT NULL auto_increment,
    nome VARCHAR(60) NOT NULL,
    email VARCHAR(40),
    telefone VARCHAR(30),
    endereco VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);

*/

?>