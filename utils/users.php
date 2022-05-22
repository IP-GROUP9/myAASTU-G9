<?php
include("db.php");

function create_user($username, $email, $password, $profile_pic)
{
  global $conn;
  $stmt = $conn->prepare("INSERT INTO user (username, email, password, profile_pic) VALUES (?, ?, ?, ?)");
  if (!$profile_pic)
    $profile_pic = "/images/profile/placeholder.png";
  $stmt->bind_param('ssss', $username, $email, $password, $profile_pic);
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

function update_password($password, $user_id) {
  global $conn;
  $stmt = $conn->prepare("UPDATE  user SET password = ? WHERE id = ?");
  $stmt->bind_param('si', $password, $user_id);
  $stmt->execute();
}
