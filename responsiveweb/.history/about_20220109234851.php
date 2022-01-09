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

    <div class="jumbotron">
        <h1>AJCodes</h1>
        <p>This is the website created by Aniket Jangde </p>
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

</body>

</html>