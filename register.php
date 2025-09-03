<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../includes/db.php';

$full_name = trim($_POST['full_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$department = trim($_POST['department'] ?? '');
$matric_number = trim($_POST['matric_number'] ?? '');

if ($full_name === '' || $email === '' || $department === '' || $matric_number === '') {
  http_response_code(400);
  echo json_encode(["success"=>false,"message"=>"All fields are required."]);
  exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(400);
  echo json_encode(["success"=>false,"message"=>"Invalid email format."]);
  exit;
}

$stmt = $conn->prepare("INSERT INTO student_records(full_name,email,department,matric_number) VALUES (?,?,?,?)");
$stmt->bind_param("ssss", $full_name, $email, $department, $matric_number);
if ($stmt->execute()) {
  echo json_encode(["success"=>true,"id"=>$stmt->insert_id]);
} else {
  http_response_code(500);
  echo json_encode(["success"=>false,"message"=>"Insert failed"]);
}
$stmt->close();
$conn->close();
