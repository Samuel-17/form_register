<?php
//conection with database;
try{
    $pdo = new PDO("mysql:dbname=crudpdo;host=localhost","root","");
    echo "connected";
} catch (PDOException $e) {
    echo "Erro no banco ".$e->getMessage();
}catch (Exception $e){
    echo "Erro generico ".$e->getMessage();
}
//Insert data

//mode 1
$user = "joãobatista177@gmail.com";
$password = '8888888888';

$res = $pdo->prepare("INSERT INTO pessoa(nome,senha) VALUES (:n,:p)");

$res->bindValue(":n",$user);
$res->bindValue(":p",$password);
$res->execute();

// //mode 2
// $pdo->query("INSERT INTO pessoa(nome, senha) VALUES ('Vittor','12345')");

?>
