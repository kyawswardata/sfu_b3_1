<?php
    $id = $_GET['id'];
    
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'php_b3');

    $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

    if($con === false){
       die("Error:". mysqli_connect_error());
    }

    $sql = "SELECT * FROM user WHERE id=".$id;
    $resultData = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($resultData);
    // print_r($row);
    
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
   <div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="update.php" method="post">
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text"
            class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Enter your name" value="<?php echo $row['name'];?>">
        <small id="helpId" class="form-text text-muted">Enter your name.</small>
        </div>
        <div class="form-group">
        <label for="phonenumber">Phone Number</label>
        <input type="text"
            class="form-control" name="phonenumber" id="Phone Number." aria-describedby="helpId" placeholder="Enter your Phone Number." value="<?php echo $row['phonenumber'];?>">
        <small id="helpId" class="form-text text-muted" >Enter your Phone Number..</small>
        </div>
        <div class="form-group">
        <label for="message">Your Message</label>
        <textarea class="form-control" name="message" id="message" rows="3">
        <?php echo $row['name'];?>
        </textarea>
        </div>
        <input type="submit" value="Send" class="btn btn-light">
    </form>
</body>
        </div>
    </div>
   </div>
</html>