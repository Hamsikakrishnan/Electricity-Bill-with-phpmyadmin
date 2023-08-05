<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details of Registration</title>
    
    <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="details.css">
</head>
<body>
    <div class="container my-5">
        <h2>Electricity Bills</h2>
        <br>
        <a class="btn btn-danger" class="hbtn" href="/ElecBill/index.html" role="button">Home</a>
        <a class="btn btn-primary" class="hbtn" href="/ElecBill/register.html" role="button">New Electricity Bill </a>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>USC Number</th>
                    <th>Name</th>
                    <th>Area Code</th>
                    <th>No of Units</th>
                    <th>Delete</th>
                <tr>
            </thead>
            <tbody>
                <?php
                
                   $connection = new mysqli('localhost','root','','elec');
                   if($connection->connect_error){
                    die("Conenction failed: ".$connection->connect_error);
                   }
                   $sql = "SELECT * FROM re1";
                   $result = $connection->query($sql);
                   if(!$result){
                    die("Invalid Query: ".$conn->error);
                   }
                   while($row = $result->fetch_assoc()){
                    echo"
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[Sname]</td>
                            <td>$row[rollnum]</td>
                            <td>$row[cid]</td>
                           
                            <td>
                            <a class='btn btn-danger btn-sm' href='/ElecBill/delete.php?id=$row[id]'>Delete</a>
                            
                            </td>
                        </tr>
                    ";
                   }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>