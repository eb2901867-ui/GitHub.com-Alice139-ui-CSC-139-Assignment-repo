<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  http_response_code(500);
  die(json_encode(["success"=>false,"message"=>"DB connection failed"]));
}
$conn->set_charset("utf8mb4");
?>