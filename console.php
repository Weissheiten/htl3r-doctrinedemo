<?php

require "./vendor/autoload.php";
require "./Config/Settings.php";

$config = new \Doctrine\DBAL\Configuration();

$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

// $sql = "SELECT ID, name FROM demo";
// $stmt = $conn->query($sql); // Simple, but has several drawbacks

$queryBuilder = $conn->createQueryBuilder();

$queryBuilder
    ->select('ID', 'name')
    ->from('demo')
;

$results = $queryBuilder->execute()->fetchAll();


foreach($results as $result){
    echo "ID: ".$result['ID']." - Name: ".$result['name']."\n";

}