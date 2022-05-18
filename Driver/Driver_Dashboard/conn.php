<?php
     $dsn = 'mysql:host=localhost;dbname=parking_system';
     $username = 'root';
     $password = '';
     $options = [];
     try {
     $connection = new PDO($dsn, $username, $password, $options);
     } catch(PDOException $e) {
     
     }
     ?>