<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
$servername = "10.0.11.2";
$username = "user";
$password = "password";
$dbname = "apache_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Checked connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Take records with table test
$sql = "SELECT Id, FirstName, LastName FROM test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $answers = array();
  while($row = $result->fetch_assoc()) {
    $answers[] = array(
      "Id" => $row["Id"],
      "FirstName" => $row["FirstName"],
      "LastName" => $row["LastName"]
    );
  }
  echo json_encode(
    $answers
  );

} else {
  echo "Erro 422 (brak danych)";
}
$conn->close();

?>
