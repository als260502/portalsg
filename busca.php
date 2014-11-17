<?php
include './bootstrap.php';

use Dao\Dao\Database;

//$_POST['search'] = 'rpg';

$conn = new Database();

$busca = $conn->search($_POST['search']);

echo json_encode($busca);



