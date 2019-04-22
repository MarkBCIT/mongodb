<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");  
$bulk = new MongoDB\Driver\BulkWrite;
$writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);

//update
$bulk->update(
    ['name' => 'code'],
    ['$set' => ['name' => 'code2', 'index' => 5]],
    ['multi' => true, 'upsert' => false]
);
$manager->executeBulkWrite('todo.list', $bulk, $writeConcern);


header("location:index.php")

?>