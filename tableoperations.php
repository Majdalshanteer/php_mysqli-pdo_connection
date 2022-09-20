
<?php

include("header.php");

?> 

<?php

include("footer.php");
?>


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
    <h1>List of employees</h1>
<table class="table border">
  <tr>
    <th>employee_id</th>
    <th>fname</th>
    <th>mobile_number</th>
    <th>hire_date</th>
    <th>address_name</th>

  </tr>
  <?php
// Create connection(variable)
// $connection = new mysqli($servername, $username, $password ,"database name");

  $connection =new mysqli("localhost", "root", "", "new");

// Check connection
  if($connection->connect_error){
    die("connection failed: ". $connection->connect_error);
  }
//edit on table on data in mySQL ( insert, update , delete)

  // $sq = "INSERT INTO employees (employee_id , fname,mobile_number,hire_date,address_name)
  // VALUES ('', 'majd', '0777777','2021-05-02','amman');";
  // $connection->query($sq);

  // $sq2 = "UPDATE employees SET fname='omer' WHERE employee_id=2";
  // $connection->query($sq2);

  // $sq3 = "DELETE FROM employees WHERE employee_id=2";
  // $connection->query($sq3);




  //print table $sql(variable any name)


  $sql = "SELECT * FROM employees";


  $result =$connection->query($sql);
  if(!$result){
    die("Invalid query: ". $connection->error);
  }
  while($row=$result->fetch_assoc()){

    echo" <tr>
    <td>".$row["employee_id"] ."</td>
    <td>".$row["fname"]."</td>
    <td>".$row["mobile_number"]."</td>
    <td>".$row["hire_date"]."</td>
    <td>".$row["address_name"]."</td>

  </tr>";
  }
 
 ?>
</table>
<br>
<br>

    
</body>
</html>