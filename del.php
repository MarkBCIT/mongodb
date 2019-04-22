<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");  
$bulk = new MongoDB\Driver\BulkWrite;
$writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);

//delete
$bulk->delete(['index' => ['$gt' => 3]]);

$manager->executeBulkWrite('todo.list', $bulk, $writeConcern);


header("location:index.php")

?>