<?php
    $db_user     = "root";
    $db_password = "root";
    $db_name     = "Users";
    
    
    $db = new PDO ('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_password);
    $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>