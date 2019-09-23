<?php
 function ConnectToDB() {
    try{
        return new PDO('mysql:hots=127.0.0.1;dbname=mytodo', 'root','');
    } catch (PDOException $e){
        die('No se puede conectar.');
    }
}

function FetchAllTasks($pdo){
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS,'Task');//sacando todos los renglones
//Cada renglon que sacamos lo sacamos como un objeto del cual podemos obtener un dato
}
?>