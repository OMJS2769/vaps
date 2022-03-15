<?php
require '../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();
$connection = pg_connect("host=" . $_ENV['DB_HOST'] . " port=" . $_ENV['DB_PORT'] . " dbname=" . $_ENV['DB_DATABASE'] . " user=" . $_ENV['DB_USERNAME'] . " password=" . $_ENV['DB_PASSWORD'] . "");
