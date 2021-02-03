<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/audioplayer.css" />
    <script src="jquery.js"></script>
    <script src="audioplayer.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nova+Flat&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../CSS/APEStyle.css">
    <div id="headerph"></div>
    
</head>
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
    
        $sql = "SELECT review_content, game_UID, rating, rating_user, review_title FROM reviews";
        $result = $conn->query($sql); ?>
        
        <!-- <table>
            <tr>
                <td>Title</td>
                <td>Rating</td>
                <td>User</td>
                <td>Game ID</td>
                <td>The Review</td>
            </tr> -->

        <?php foreach ($result as $review): ?>
                <div class="container container2 container4 row" style="background color: blue;">
                    <div class="col-md-6">
                    <?php echo $review["review_title"]; ?>
                    </div>
                    <div class="col-md-6">
                    <?php echo $review["review_content"]; ?>
                    </div>
                </div>
            <p>This is a joke</p>
            
        <?php endforeach; ?>

    
        
        
        <!-- while($row = $result->fetch_assoc()) {
            echo $row["review_title"];
            echo ("<br>");
            echo $row["rating"];
            echo ("<br>");
            echo $row["rating_user"];
            echo ("<br>");
            echo $row["game_UID"];
            echo ("<br>");
            echo $row["review_content"];
            echo ("<br>");

        } -->
    <!-- ?> -->
</html>