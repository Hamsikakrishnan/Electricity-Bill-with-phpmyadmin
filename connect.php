<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&display=swap" rel="stylesheet">
  <title>Electricity Bill</title>
  <link rel="stylesheet" href="ind.css">
</head>
<body>
  <div class="wrapper">
    <div class="cont">
    <?php
    $id = $_POST['id'];
    $rollnum = $_POST['rollnum'];
    $Sname = $_POST['Sname'];
    $cid = $_POST['cid'];
    
    //Database connection
    $conn = new mysqli('localhost','root','','elec');
    if($conn->connect_error){
      die('Connection Failed : '.$conn->connect_error);
    } 
    else{
      $stmt = $conn->prepare('insert into re1(id,rollnum,Sname,cid) values(?,?,?,?)');
      $stmt->bind_param("issi",$id,$rollnum,$Sname,$cid);
      $stmt->execute();
      $res = (($cid*5.45));
      echo "
          <h2>Your USC Number: $id </h2>
          <h2>Your name: $Sname</h2>
          <h2>Area Code: $rollnum</h2>
          <h1>Electricity Bill: $res</h1>
      ";       
    exit;
      $stmt->close();
      $conn->close();
    }
  ?>
    </div>
  </div>
 
</body>
</html>
