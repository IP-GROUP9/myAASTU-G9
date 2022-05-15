<?php
include("db.php");

function create_user($username, $email, $password)
{
  global $conn;
  $stmt = $conn->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
  $stmt->bind_param('sss', $username, $email, $password);
  $stmt->execute();
}

function get_user($username)
{
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
  $stmt->bind_param('s', $username);
  $stmt->execute();
  return $stmt->get_result()->fetch_assoc();
}
