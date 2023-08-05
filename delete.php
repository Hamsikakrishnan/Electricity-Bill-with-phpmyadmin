<?php
    $id = $_GET['id'];

    $servername = "localhost";
    $username = "root";
    $passoword = "";
    $database = "elec";
    $connection = new mysqli($servername,$username,$passoword,$database);
    $sql = "DELETE FROM re1 WHERE id=$id";
    $data = mysqli_query($connection,$sql);

    if($data){
        echo "Record Deleted from Database";
    }
    else{
        echo "Faied to delete record from databse";
    }
   header("location: /ElecBill/details.php");
   exit;
?>