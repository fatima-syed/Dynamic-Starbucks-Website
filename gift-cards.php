<?php

    include ('config.php');
    $ImageArray = array();
    $result = mysqli_query($mysqli, "SELECT image FROM giftcard");
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_array($result)){
            $ImageArray[] = $row['image'];
        }
    }
    $mysqli->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Starbucks Coffee Company</title>
    <link rel="icon" href="images/logo.jpg" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="gift-cards.css">
    <script src="gift-cards.js" defer></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"
        defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img class="logo" src="images/logo.jpg" alt="logo" height="65px"
                    width="65px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
                    <li class="nav-item"><a href="gift-cards.php" class="nav-link">Gift Cards</a></li>
                    <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Shop</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="cart.php">Cart</a>
                            <a class="dropdown-item" href="checkout.php">Checkout</a>
                        </div>
                    </li>
                    <li class="nav-item cart"><a href="cart.php" class="nav-link"><span
                                class="icon icon-shopping_cart"></span><span
                                class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->


    <div class="card-heading">FEATURED</div>
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item featured active">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                <?php       
                                    echo "<img src=".$ImageArray[44]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item featured">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[50]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item featured">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[15]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item featured">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[22]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item featured">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[29]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item featured">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[33]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item featured">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[36]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item featured">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[40]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>

    <div class="card-heading">CHRISTMAS</div>
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item christmas active">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[0]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item christmas">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[1]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item christmas">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[2]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item christmas">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[3]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item christmas">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[4]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel2" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel2" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>

    <div class="card-heading">HOLIDAY</div>
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel3" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item holiday active">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[5]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item holiday">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[6]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item holiday">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[7]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item holiday">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[8]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item holiday">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[9]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel3" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel3" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>


    <div class="card-heading">RED CUP</div>
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel4" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item redcup active">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[10]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item redcup">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[11]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item redcup">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[12]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item redcup">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[13]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item redcup">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[14]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel4" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel4" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>


    <div class="card-heading">BIRTHDAY</div>
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel5" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item birthday active">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[15]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item birthday">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[16]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item birthday">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[17]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item birthday">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[18]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item birthday">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[19]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel5" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel5" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>


    <div class="card-heading">THANK YOU</div>
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel6" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item thankyou active">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[20]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item thankyou">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[21]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item thankyou">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[22]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item thankyou">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[23]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel6" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel6" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>


    <div class="card-heading">CELEBRATION</div>
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel7" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item celebration active">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[24]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item celebration">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[25]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item celebration">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[26]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </div>


    <div class="card-heading">APPRECIATION</div>
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel8" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item appreciation active">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[27]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item appreciation">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[28]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item appreciation">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[29]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item appreciation">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[30]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel8" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel8" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>


    <div class="card-heading">HANUKKAH</div>
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel9" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item hanukkah active">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[31]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item hanukkah">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[32]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item hanukkah">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[33]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    <div class="card-heading">KWANZAA</div>
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel10" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item khwanzaa active">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[34]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item khwanzaa">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[35]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item khwanzaa">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[36]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    <div class="card-heading">SPIRITED</div>
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel11" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item spirited active">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[37]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    <div class="card-heading">WORKPLACE</div>
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel12" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item workplace active">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[38]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item workplace">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[39]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item workplace">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[40]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item workplace">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[41]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel12" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel12" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>


    <div class="card-heading">ENCOURAGEMENT</div>
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel13" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item encouragement active">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[42]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item encouragement">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[43]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item encouragement">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[44]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item encouragement">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[45]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel13" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel13" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>


    <div class="card-heading">AFFECTION</div>
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel14" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item affection active">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[46]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item affection">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[47]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item affection">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[48]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item affection">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[49]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item affection">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[50]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel14" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel14" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>


    <div class="card-heading">ANYTIME</div>
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel15" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item anytime active">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[51]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item anytime">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[52]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item anytime">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[53]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item anytime">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[54]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item anytime">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <?php       
                                        echo "<img src=".$ImageArray[55]." style=\"border-radius: 0.5rem;\" class=\"img-fluid\">";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel15" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel15" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
    

    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">About Us</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Our Company</a></li>
                            <li><a href="#" class="py-2 d-block">Our Coffee</a></li>
                            <li><a href="#" class="py-2 d-block">Stories and News</a></li>
                            <li><a href="#" class="py-2 d-block">Starbucks Archieve</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Recent Blog</h2>
						<?php
						include "getRecentBlogs.php";
						?>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Explore</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Careers</a></li>
                            <li><a href="#" class="py-2 d-block">Social Impact</a></li>
                            <li><a href="#" class="py-2 d-block">Business Partner</a></li>
                            <li><a href="#" class="py-2 d-block">Order & Pickup</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">1912 Pike Pl, Seattle,
                                        WA 98101, United States</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span
                                            class="text">800-782-7282</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@starbucks.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          

            <div class="group">
			  <form action="index.php" method="post" name="form1">
                  <div class="mb-3 vertical">
                    <h3 style="margin-bottom: 1rem;">FEEDBACK</h3>
                    <label style="position:relative; top: 1rem; color: white;" for="exampleFormControlInput1" class="form-label">Order ID</label>
                    <input type="text" class="form-control" name="orderID" placeholder="" required>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label" style="color: white; padding-top: 1rem;">Your Comments</label>
                        <textarea class="form-control" name="comment" rows="3" required></textarea>
                    </div>
					<div class="flex">
						<input type="submit" name="Submit" value="Add" id="addbtn"/>
					</div>
                  </div>
				<?php				
					if(isset($_POST['Submit'])) {
						$orderID = mysqli_real_escape_string($mysqli, $_POST['orderID']);
						$comment = mysqli_real_escape_string($mysqli, $_POST['comment']);
							
						// checking empty fields
						if(empty($orderID)) {
							echo "<font color='red'>ID field is empty.</font><br/>";
						}
						else if(empty($comment)) {
							echo "<font color='red'>Comment field is empty.</font><br/>";
						}
						else { 
							// if all the fields are filled (not empty) 
							//insert data to database	
							$result = mysqli_query($mysqli, "INSERT INTO feedback VALUES(NULL, '$orderID','$comment')");
							//display success message
							echo "<font color='#ffc107'>Feedback submitted successfully!";
							echo "<br/><a style=\"text-decoration:none;color:green;\" href='index.php'>Back to top of page</a>";
						}
						
						$mysqli->close();
					}
				?>
				</form>
    
				<ul class="ftco-footer-social list-unstyled mt-5">
					<li class="ftco-animate"><a href="https://open.spotify.com/user/starbucks"><span
								class="icon-spotify"></span></a></li>
					<li class="ftco-animate"><a href="https://www.facebook.com/Starbucks/"><span
								class="icon-facebook"></span></a></li>
					<li class="ftco-animate"><a href="https://www.pinterest.com/starbucks/"><span
								class="icon-pinterest"></span></a></li>
					<li class="ftco-animate"><a href="https://www.instagram.com/starbucks/"><span
								class="icon-instagram"></span></a></li>
					<li class="ftco-animate"><a href="https://www.youtube.com/starbucks"><span
								class="icon-youtube"></span></a></li>
					<li class="ftco-animate"><a href="https://twitter.com/starbucks/"><span class="icon-twitter"></span></a>
					</li>
				</ul>
			</div>
              
            <div class="row">
                <div class="col-md-12 text-center">

                    <ul class="help">
                        <li>Privacy Policy</li>
                        <li>|</li>
                        <li>Terms of Use</li>
                        <li>|</li>
                        <li>CA Supply Chain Act</li>
                        <li>|</li>
                        <li>Cookie Preferences</li>
                    </ul>
                    <p>
                        &copy;
                        <script>document.write(new Date().getFullYear());</script> Starbucks Coffee Company. All rights
                        reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>