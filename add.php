<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");  
$bulk = new MongoDB\Driver\BulkWrite;
$writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);

//insert
$document = ['_id' => new MongoDB\BSON\ObjectID, 'name' => 'code', 'index' => 4];
$bulk->insert($document);
$manager->executeBulkWrite('todo.list', $bulk, $writeConcern);


header("location:index.php")

?>