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
// ==============================================================================>
//Insert data
//mode 1
// $user = "samuelvittor27@gmail.com";
// $password = '12345';

// $res = $pdo->prepare("INSERT INTO pessoa(nome,senha) VALUES (:n,:p)");

// $res->bindValue(":n",$user);
// $res->bindValue(":p",$password);
// $res->execute();

// //mode 2
// $pdo->query("INSERT INTO pessoa(nome, senha) VALUES ('Vittor','12345')");
// ==============================================================================>

// ====================================DELETE==========================================>

//mode 1
// $databasecomand=$pdo->prepare("DELETE FROM pessoa WHERE id = :id");
// $id = 2;
// $databasecomand->bindValue(":id",$id);
// $databasecomand->execute();

//mode 2
// $databasecomand=$pdo->query("DELETE FROM pessoa WHERE id='3'");
// ====================================UPDATE==========================================>
//mode 1
// $databasecomand = $pdo->prepare("UPDATE pessoa SET nome = :nam WHERE id = :id");
// $databasecomand->bindValue(":nam","Vittor22@gmail.com");
// $databasecomand->bindValue(":id","5");
// $databasecomand->execute();

//mode 2
// $databasecomand = $pdo->query("UPDATE pessoa SET nome = 'vittor' WHERE id = '4' ");

// ====================================SELECT==========================================>





?>
