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
        
            $sql = "SELECT review_content, game_UID, rating, rating_user, review_title FROM reviews";
            $result = $conn->query($sql); ?>

            <!--Reviews Intro-->
            <div class="container container2_2">
                <center>
                    <h1>Game Reviews</h1>
                    <h3>The biggest reviews library in the world.<br> it will be a blast!</h3>
                    <img src ="../Images/mario.gif" style="width: 40%;">
                </center>            
            </div>
            <div class="container container2 container4">
                <br>
                <div class="container6 row" id="single podcast">
                    <div class="btn col-sm-2" style="margin: auto; cursor:alias;">
                        <img id="pd1" class="center center5" src="../images/Abba.png" style=" width: 150px; border-radius: 50%;">   
                    </div>
                    <div class="col-lg-10">
                        <h3>Gaming with APE - Assaf, Pearl and Elor discuss hookers and drugs</h3>
                        <br><audio class="audio" src="../Audio/PC1.mp3" preload="auto" controls></audio><br>
                        <p><b>Description:</b><br>
                        Lorem Ipsum dolor sit amet</p>
                    </div>
                </div>
                <br>
                <div class="container6 row" id="single podcast">
                    <div class="col-sm-2" style="margin: auto;">
                        <img class="center center5" src="../images/Abba.png" style="width: 150px; border-radius: 50%;">
                    </div>
                    <div class="col-lg-10">
                        <h3>Gaming with APE - Pearl solo masturbation on latest NBA, featuring Dani Avdja</h3>
                        <br><audio class="audio" src="../Audio/PC1.mp3" preload="auto" controls></audio><br>
                        <p><b>Description:</b><br>
                        Lorem Ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>

        </div>

        
            
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
        <div id="footerph"></div>

        <script type="text/javascript">
        $(function(){
            $("#headerph").load("header.html");
        });
        $(function(){
            $("#footerph").load("footer.html");
        });
        </script>

    </body>
</html>