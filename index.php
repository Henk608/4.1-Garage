<?php
    require "./connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4.1 Garage</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">
                    <img src="./images/logo.png" width="100px" class="logo-img" alt="Logo">
                </a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://contact">Contact</a>
                        </li>
                    </ul>
                </div>
                    <a href="http://login" class="nav-link">Login</a>
            </div>
        </nav>
    </header>
    
    <div class="full-width-background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hero-title">4.1 - Garage</h1>
                </div>
                <div class="col-md-12">
                    <p class="hero-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    </p>
                </div>
                <div class="col-md-6 hero-knoppen-sectie">
                    <a href="#afspraak" class="btn btn-primary">Afspraak maken</a>
                </div>
                <div class="col-md-6">
                    <a href="./contact.php" class="btn btn-secondary">Contact opnemen</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container side-by-side-container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <img src="./images/img-1.jpg" width="100%" alt="afbeelding">
            </div>
            <div class="col-md-6">
                <h2 class="side-by-side-title">Lorem Ipsum</h2>
                <p class="side-by-side-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </div>
    <div class="full-width-background-reviews">
        <div class="container review-container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                    <div class="algemeen-cijfer">
                        <p class="gemiddeld-cijfer-text">Wij worden gemiddeld beoordeeld met:</p>
                        <h2 class="gemiddeld-cijfer"><?= $gemiddeldeRating ?></h2>
                        <a href="./review.php" class="btn btn-info">Laat een review achter</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="review-slider">
                        <?php foreach($reviews as $review): ?>
                            <div class="slide">
                                <p><strong><?= htmlspecialchars($review['first_name'] . ' ' . $review['last_name']) ?></strong></p>
                                <p>Rating: <?= htmlspecialchars($review['ratings']) ?> ⭐</p>
                                <p><?= nl2br(htmlspecialchars($review['description'])) ?></p>
                                <p><small class="date"><?= htmlspecialchars(date('d-m-Y', strtotime($review['date']))) ?></small></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoY9F2k6U6mFQkBxCF2a9nUj/1jz4EoRo94WnWj1yKsB3y+" 
        crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $('.review-slider').slick({
                infinite: true,
                arrows: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoPlaySpeed: 2000
            });
        });
        </script>
</body>
</html>
