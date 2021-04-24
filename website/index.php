<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <title>Ikhtiar's IT Firm</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Ikhtiar Uddin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>


    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/nature.jpg" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/nature.jpg" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/nature.jpg" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>


    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/Ikhtiar's IT Firm.png" class="img-fluid aboutimg" alt="beauty">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h1 class="display-4"> Welcome Ikhtiar's IT</h1>
                    <p class="py-3">This is Ikhtiar's IT.<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Blanditiis
                        veniam
                        iure
                        aspernatur deleniti rerum non tenetur facilis nobis voluptatem rem commodi, consequatur
                        molestiae tempore incidunt vitae, doloribus, ea atque neque eaque eum adipisci iste, Repudiandae
                        non tempore dicta architecto deserunt deleniti!</p>
                    <a href="about.php" class="btn btn-success">check more</a>
                </div>

            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center"> Our Services</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card">
                        <img class="card-img-top" src="images/webdev.png" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Web Development</h4>
                            <p class="card-text">Learn and earn</p>
                            <a href="service.php" class="btn btn-primary">See more</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card">
                        <img class="card-img-top" src="images/webdesign.png" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Web Design</h4>
                            <p class="card-text">Learn and earn</p>
                            <a href="contact.php" class="btn btn-primary">See more</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card">
                        <img class="card-img-top" src="images/javascript.png" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">JavaScript</h4>
                            <p class="card-text">Learn and earn</p>
                            <a href="#" class="btn btn-primary">See more</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Gallery</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nature1.png" class="img-fluid pb-3" alt="beauty">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nature1.png" class="img-fluid pb-4" alt="beauty">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nature1.png" class="img-fluid pb-4" alt="beauty">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nature1.png" class="img-fluid pb-4" alt="beauty">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nature1.png" class="img-fluid pb-4" alt="beauty">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nature1.png" class="img-fluid pb-4" alt="beauty">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nature1.png" class="img-fluid pb-4" alt="beauty">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nature1.png" class="img-fluid pb-4" alt="beauty">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nature1.png" class="img-fluid pb-4" alt="beauty">
                </div>
            </div>
        </div>
    </section>


    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Contact</h2>
        </div>

        <div class="w-50 m-auto">
            <form method="post" action="userinfo.php">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control" placeholder="Enter your name"
                        required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" autocomplete="off" class="form-control"
                        placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control"
                        placeholder="Enter your mobile" required>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>

    <footer>
        <p class="p-3 bg-dark text-white text-center">Copyright © 2020-2021 Green University of Bangladesh || All rights
            reserved.</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>