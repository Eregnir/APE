<?php
    $servername = "localhost";
    $username = "assafye";
    $password = "1forall!";
    $dbname = "assafye_ApeGaming";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
    } 

    $review_title = $_POST['review_title'];
    $review_content = $_POST['review_content'];
    $rating = $_POST['rating'];

    $sql="INSERT INTO reviews (review_ID, review_content, game_UID, rating, rating_user, review_title, datetime) VALUES ('123', '".$review_content."', '2', '".$rating."', 'Papi', '".$review_title."', CURRENT_TIMESTAMP)";
    
    $conn->query($sql);

    echo $review_title;
?>