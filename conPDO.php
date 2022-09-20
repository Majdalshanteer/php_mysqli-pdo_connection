
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


</head>
<body style="margin:50px;">
    <h1>List of students</h1>
<table class="table border">
  <tr>
    <th>StudentID</th>
    <th>first name</th>
  
  </tr>



<?php

$dsn='mysql:host=localhost;dbname=connectpdo';
$user='root';
$pass='';
$options=array(

   PDO :: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',    //utf8 to write in arabic &english
);

//variable any name =$db
//start new connection with pdo
//try to connect
try{
    $db=new PDO($dsn,$user,$pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //set attribute
    echo'you are connect';


    //query $q
   $q= "INSERT INTO first ( name) VALUES ( 'Majd')";
   $db->exec($q);
   

// $sql = "SELECT * FROM first";
// $result =$db->query($sql);
// foreach($first as $name)
}
catch(PDOException $e){

    echo 'failed'.$e->getMessage();
}

?>