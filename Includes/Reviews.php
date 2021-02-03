<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!DOCTYPE html>
<body>

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
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<style>table{  text-align:center; background-color:yellow; border: 2px blue solid;} tr{ color: red; border: 2px blue solid;} td{ color: red; border: 2px blue solid;}</style><table><tr><th>ID</th><th>Name</th><th>Age</th>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["review_title"]. "</td><td>" . $row["game_UID"]. "</td><td>" . $row["rating"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$iid=$_POST["Title"];
$name=$_POST["Game ID"];
$age=$_POST["Rating"];

// $sql2="INSERT INTO users (id, name, age) VALUES ('".$iid."','".$name."','".$age."');";
// $sql3="INSERT INTO users (id, name, age) VALUES ('2299', 'Miko Levinsky', 32);";
// $conn->query($sql2);
// $conn->query($sql3);
// $result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<style>table{  text-align:center; background-color:yellow; border: 2px blue solid;} tr{ color: red; border: 2px blue solid;} td{ color: red; border: 2px blue solid;}</style><table><tr><th>ID</th><th>Name</th><th>Age</th>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td> " . $row["age"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
$conn->close();
?>  


<br>
</body>
</html>
