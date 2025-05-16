<?php
$pdo = new PDO("mysql:host=localhost;dbname=4.1_garage", "root", "");

$reviews_sql = "
    SELECT 
        reviews.ratings, 
        reviews.description, 
        reviews.date, 
        user.first_name, 
        user.last_name
    FROM reviews
    JOIN user ON reviews.user_id = user.id
    ORDER BY reviews.date DESC
";
$reviews_stmt = $pdo->query($reviews_sql);
$reviews = $reviews_stmt->fetchAll(PDO::FETCH_ASSOC);

$gemiddeld_sql = "SELECT AVG(ratings) AS gemiddelde_rating FROM reviews";
$gemiddeld_stmt = $pdo->query($gemiddeld_sql);
$gemiddeld_result = $gemiddeld_stmt->fetch(PDO::FETCH_ASSOC);

$gemiddeldeRating = round($gemiddeld_result['gemiddelde_rating'], 1); // afronden op 1 decimaal
?>
