<?php

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'php_b3');

    $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

    if($con === false){
       die("Error:". mysqli_connect_error());
    }

    $name = $_POST['name'];
    $phonenumber = $_POST['phonenumber'];
    $message = $_POST['message'];

    $sql = "INSERT INTO user(name,phonenumber,message) VALUES('$name','$phonenumber','$message')";
    $result = mysqli_query($con,$sql);

    // if($result){
    //     echo "Save Successfully.";
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css">
</head>
<body>
    <?php include('nav.php');?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Message</th>
                    </tr>
                    <?php 

                        $readData = "SELECT * FROM user";
                        $resultData = mysqli_query($con,$readData);
                        $rowCount = mysqli_num_rows($resultData);
                        
                        if($rowCount > 0){   
                            while($row = mysqli_fetch_assoc($resultData))   
                            {
                                                     
                    ?>
                    <tr>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['phonenumber'];?></td>
                        <td><?php echo $row['message'];?></td>
                    </tr>
                    <?php
                    
                     } 
                        }
                        else{
                            echo "There is no record!";
                        }
                    ?>  
                </table>
            </div>
        </div>
    </div>
    <section class="bg-info py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione maxime sunt commodi! Doloremque aspernatur amet, commodi deserunt autem cupiditate laudantium cum. Reprehenderit magnam officiis sapiente quos, nesciunt architecto expedita mollitia?</p>
                </div>
                <div class="col-md-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione maxime sunt commodi! Doloremque aspernatur amet, commodi deserunt autem cupiditate laudantium cum. Reprehenderit magnam officiis sapiente quos, nesciunt architecto expedita mollitia?</p>
                </div>
                <div class="col-md-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione maxime sunt commodi! Doloremque aspernatur amet, commodi deserunt autem cupiditate laudantium cum. Reprehenderit magnam officiis sapiente quos, nesciunt architecto expedita mollitia?</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>