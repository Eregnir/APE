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
    
    
</head>
    <body>
        <div id="headerph"></div>
        <div>

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

        
            $sql = "SELECT title, image, review_content, game_UID, rating, rating_user, review_title, imag, datetime FROM reviews INNER JOIN products on products.UID = reviews.game_UID";

            $result = $conn->query($sql);?>
            <!--Reviews Intro-->
        
            <div class="container container2_2">
                <center>
                    <h1>x</h1>
                    <h1>Game Reviews</h1>
                    <h3>The biggest reviews library in the world.<br> it will be a blast!</h3>
                    <img src ="../Images/mario.gif" style="width: 10%;">
                    <button class="btn btn-primary lolo" style="margin:15px;" onclick="openForm()";><h3>Add your own review!</h3></button>
                </center>            
            </div>
            
            <!--Add a review form-->
            <div id="createform" style="margin-top:100px;">
                
            </div>

            <div class="container container2 container4">
                <center>
                    <h1>Game Reviews</h1>
                </center>
                <br>
                <?php foreach ($result as $review): ?>

                    <div class="container6 row" id="single podcast">
                        <!--This should contain the image from the DB of the review-->
                        <div class="btn col-sm-2" style="margin: auto; cursor:alias;">
                            <img id="pd1" class="center center5" src="<?php $review["imag"];?>.png" style=" width: 150px; border-radius: 50%;">   
                        </div>
                        <!--This will contain the review itself-->
                        <div class="col-lg-10">
                            <h3><?php $review["review_title"];?></h3>
                            <h5>Reviewed by <?php echo $review["rating_user"].' | '.$review["datetime"];?> </h5>
                            <p><b>Review:</b><br>
                            <?php echo $review["review_content"]; ?></p>
                        </div>
                </div>
                <p>This is to know it works</p>
                
                <?php endforeach; ?>

                <br>

            </div>

        </div>
        <div id="footerph"></div>

        <script type="text/javascript">
        $(function(){
            $("#headerph").load("header.html");
        });
        $(function(){
            $("#footerph").load("footer.html");
        });
        
        function openForm(){
            $("#createform").load("Review_Form.html");
        };
        </script>

    </body>
</html>