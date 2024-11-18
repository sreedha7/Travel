<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="imgg.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body style="margin: 50px;">
    <h1>Bookings </h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>DESTINATION</th>
                <th>START DATE</th>
                <th>END DATE</th>
                <th>FULL NAME</th>
                <th>EMAIL</th>
                <th>PHONE NUMBER</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $servernmae="localhost";
                $username="root";
                $password="";
                $database="sravyaa";
                $con=new mysqli( $servernmae,$username,$password,$database);

                if($con->connect_error){
                    die("connection failed:".$con->connect_error);
                }

                $sql="SELECT *FROM bookingg";
                $result=$con->query($sql);

                if(!$result){
                    die("invalid query:".$con->error);
                }

                while($row=$result->fetch_assoc()){
                    echo "<tr>
                            <td>" . $row["id"] ."</td>
                             <td>" . $row["destination"] ."</td>
                              <td>" . $row["start"] ."</td>
                               <td>" . $row["end"] ."</td>
                                <td>" . $row["name"] ."</td>
                                 <td>" . $row["email"] ."</td>
                                  <td>" . $row["phone"] ."</td>
                            </tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>