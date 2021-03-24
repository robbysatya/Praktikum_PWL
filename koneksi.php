<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'prak1_pwl';
$base_url = 'http://localhost/Web%20Lanjut/Praktikum%201/';

// Check connection
$pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
