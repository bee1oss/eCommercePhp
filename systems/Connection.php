<?php

try{
    $db = new PDO("mysql:host=localhost; dbname=blog; charset=utf8;" , "root","");
}catch (PDOException $error){
    echo "<center><b>Could not connect to database!</b></center>"; $error->getMessage();
}