<?php
// Подключение к базе данных
$host = '127.0.0.1'; 
$username = 'root'; 
$password = 'root';
$database = 'hotelsDB'; 

// Создание подключения
$db = mysqli_connect($host, $username, $password, $database);

// Проверка подключения
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}