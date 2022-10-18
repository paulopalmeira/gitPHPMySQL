<?php

// Sample file: Never send your credentials to git

// host
$host = 'http://localhost/gitPHPMysql/';

// db
$db_name = 'user_db';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

try {
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
} catch (\Throwable $th) {
  throw $th;
}
