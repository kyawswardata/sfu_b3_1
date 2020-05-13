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
            <div class="col-md-4">
                <h3>Our Services</h3>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores ex eum, laborum pariatur quasi quae tenetur provident debitis magni repellat illo est esse nisi quam, voluptatum dolor libero sint.</p>
            </div>
            <div class="col-md-4">
                <h3>Our Information</h3>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores ex eum, laborum pariatur quasi quae tenetur provident debitis magni repellat illo est esse nisi quam, voluptatum dolor libero sint.</p>
            </div>
            <div class="col-md-4">
                <h3>Our Products</h3>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores ex eum, laborum pariatur quasi quae tenetur provident debitis magni repellat illo est esse nisi quam, voluptatum dolor libero sint.</p>
            </div>
        </div>
    </div>
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Welcome to SFU</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus reprehenderit mollitia ipsa! Qui magnam tempora iusto dicta possimus veritatis in consequuntur, labore quisquam non? Magni quia commodi quasi hic. Rem.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-info py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/potcake.jpg" alt="pot cake" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <form action="senddata.php" method="post">
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text"
                            class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Enter your name">
                          <small id="helpId" class="form-text text-muted">Enter your name.</small>
                        </div>
                        <div class="form-group">
                          <label for="phonenumber">Phone Number</label>
                          <input type="text"
                            class="form-control" name="phonenumber" id="Phone Number." aria-describedby="helpId" placeholder="Enter your Phone Number.">
                          <small id="helpId" class="form-text text-muted">Enter your Phone Number..</small>
                        </div>
                        <div class="form-group">
                          <label for="message">Your Message</label>
                          <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                        </div>
                        <input type="submit" value="Send" class="btn btn-light">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-dark py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-white text-center">
                        &copy;Copyright 2020. All right reserved. developed by: kst
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>