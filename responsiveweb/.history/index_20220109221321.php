<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AJCodes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
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
                <img src="image/index.jpg" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/istockphoto-1299765486-170667a.jpg" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/istockphoto-1280385511-170667a.jpg" alt="New York" width="1100" height="500">
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
            <h3 class="text-center">About Us</h3>
        </div>
        <!-- grid system matlab jitna space chahiyae utna  -->
        <div class="container-fluid">
            <!-- container fluid helps to remove the scrollbar in the bottom page -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="image/index.jpg" alt="" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">This is Aniket Jangde</h2>
                    <p class="py-5">This is the content which is provided by dilpesh and the source code is taken from thapa bootstrap</p>
                    <a href="about.php" class="btn btn-success">More Details</a>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h3 class="text-center">Services Provided by Us</h3>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-1">
                    <div class="container">
                        <div class="card">
                            <img class="card-img-top" src="image/cake.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">Pabolo Escobar</h4>
                                <p class="card-text">World's most wanted criminal in drug trafficking</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-1">
                    <div class="container">
                        <div class="card">
                            <img class="card-img-top" src="image/cake1.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">Joseph Stalin</h4>
                                <p class="card-text">World's most dedicted leader</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-1">
                    <div class="container">
                        <div class="card">
                            <img class="card-img-top" src="image/cake2.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">El Chapo</h4>
                                <p class="card-text">World's most scared criminal in drug trafficking</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>

    <section class="my-5">
        <div class="py-5">
            <h3 class="text-center">Gallery</h3>
        </div>
        
    </section>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>



<!-- 
    class="display-4" content ko thoda bada kar deta hai 
    col-lg-6 col-md-6 col-12 matlab 1st wala column windows 2nd wala for mobile and 3rd wala for mobile 
    py-5 padding from upar se and neeche se 
    my-5 for margin 



-->