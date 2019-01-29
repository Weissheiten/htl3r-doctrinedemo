<?php

require "./vendor/autoload.php";
require "./Config/Settings.php";

$config = new \Doctrine\DBAL\Configuration();


$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

