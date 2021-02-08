<html></html>
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

        
            $sql = "SELECT title, image, review_content, game_UID, rating, rating_user, review_title, imag, datetime FROM reviews INNER JOIN products on products.UID = reviews.game_UID  ORDER BY datetime DESC";

            $result = $conn->query($sql);?>
            <!--Reviews Intro-->
        
            <div class="container container2_2">
                <center>
                    <h1>Game Reviews</h1>
                    <h3>The biggest reviews library in the world.<br> it will be a blast!</h3>
                    <img src ="../Images/mario.gif" style="width: 10%;">
                    <button class="btn btn-primary lolo" style="margin:15px;" onclick="openForm()";><h3>Add your own review!</h3></button>
                </center>            
            </div>
            
            <!--Add a review form-->

            <div id="addyourown" class ="container container2" style="margin-top:25px;">
        <div class="row">
            <div class="col-sm-6">
            <form onsubmit="alertme()" name="Add a review!" method="post" action="Review_Form.php">
                <!--Reviewed game-->

                    <label for="title"></label><br>
                    
                    <div>
                    <div class="input-group-text">Reviewed Game:</div>
                        <select class="form-control" id="title" name="title">
                            <option value="2">Cyberpunk 2077</option>
                            <option value="3">Tony Hawk's Pro Skater 1+2</option>
                            <option value="1">GTA V</option>
                          </select><br>
                    </div>

                    <!--Review Title-->
                    <label for="review_title"></label><br>
                    <div>
                        <div class="input-group-text">Title:</div>
                        <input placeholder="Short, yet informative!" type="text" class="form-control" id="review_title" name="review_title" minlength="3" maxlength="200" required><br>
                    </div>
                    
                    <!--Review Content-->
                    
                    <div class="input-group-text">
                        <label for="review_content">Review:</label><br></div>
                        
                        <div class="input-group">
                            <textarea class="form-control" id="reiew_content" name="review_content" rows="8" cols="50" placeholder="Is it good? Is it horrible? tell us!" minlength="10" maxlength="2500" required></textarea>
                        </div> 
                                        
                    <br>
                    <!--Review Score-->
                    <label for="rating">Game Score:<br>
                    <input type="range" min="1.0" max="10.0" value="5" step="0.5" id="rating" name="rating" onchange=updateSlider(this.value)>
                    <button class="btn" id="rangeslider">5</button>
                    </label><br>
                </div>
                <div class="col-sm-6">
                    <h2 class = "center add-topp" style="font-family: cursive;">So, You want to add a review, eh?</h2>
                        <img  src="../Images/type_gif.gif" style="max-width: 60%; margin:auto; margin-top:3%;"> 
                </div>
                <center>
                    <button class="btn btn-primary" type="submit">Submit</button><br><br>
                </center>
        </div>
            
        </form>
    </div>

            <div class="container container2 container4">
                <center>
                    <h1>Game Reviews</h1>
                </center>
                <br>

                <?php foreach ($result as $review): ?>

                    <div class="container6 row" id="single podcast">
                        <!--This should contain the image from the DB of the review-->
                        <div class="btn col-lg-2" style="margin: auto; cursor:alias;">
                            <h3 class="center"> User Rating: <span style="font-family: cursive;"><?php echo $review['rating'];?>/10 </span></h3>
                            <?php echo '<img style=" width: 100%;" src="data:image/jpeg;base64,'.base64_encode( $review['image'] ).'"/>';?>
                        </div>

                        <!--This will contain the review itself-->
                        <div class="col-lg-10">
                            <h3><?php $review["review_title"];?></h3>
                            <h5>Reviewed by <?php echo $review["rating_user"].' | '.$review["datetime"];?> </h5>
                            <p><b>Review:</b><br>
                            <?php echo $review["review_content"]; ?></p>
                        </div>
                </div>
                
                <?php endforeach; ?>

                <br>
                <button onclick="scrollToTop()" style="margin-bottom:1px;" class="center btn btn-outline-dark" type="button">Back to top</button>

            </div>

        </div>
        <div id="footerph"></div>
    <script type="text/javascript" src="../JS/GJS.js"></script>
    </body>
</html>