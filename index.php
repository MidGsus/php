<?php
require 'Task.php';
require 'functions.php';


$pdo= ConnectToDB();

$tasks = FetchAllTasks($pdo);//Arreglo de objetos donde cada item del arreglo es un objeto el cual representa a un renglon

require 'index.view.php';

?>