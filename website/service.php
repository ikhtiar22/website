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

    <section class="my-4">
        <div class="py-4">
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
                            <a href="#" class="btn btn-primary">See more</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card">
                        <img class="card-img-top" src="images/webdesign.png" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Web Design</h4>
                            <p class="card-text">Learn and earn</p>
                            <a href="#" class="btn btn-primary">See more</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card">
                        <img class="card-img-top" src="images/javascript.png" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">JavaScript</h4>
                            <p class="card-text">Learn and earn</p>
                            <a href="service.php" class="btn btn-primary">See more</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>

</body>

</html>