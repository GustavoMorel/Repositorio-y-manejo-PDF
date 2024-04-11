<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tep";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$var = 2;

$sql = "SELECT id, subtema_id_tema, subtema_tema_den, subtema_den FROM subtema WHERE subtema_id_tema= $var";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - tema: " . $row["subtema_tema_den"]. " - subtema: " . $row["subtema_den"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>