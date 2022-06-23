<?php

include_once("db.php");

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

function get_user_email($email)
{
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM user WHERE email = ?");
  $stmt->bind_param('s', $email);
  $stmt->execute();
  return $stmt->get_result()->fetch_assoc();
}

function insert_pass_reset($email, $key, $expDate) {
  global $conn;
  $stmt = $conn->prepare("INSERT INTO password_reset_temp (email, `key`, expDate) VALUES (?, ?, ?)");
  $stmt->bind_param('sss', $email, $key, $expDate);
  $stmt->execute();
}

function get_reset_pass($email, $key) {
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM password_reset_temp WHERE email = ? AND `key` = ?");
  $stmt->bind_param('ss', $email, $key);
  $stmt->execute();
  $result = $stmt->get_result();
  return $result->fetch_assoc();
}

function delete_reset_pass($email) {
  global $conn;
  $stmt = $conn->prepare("DELETE password_reset_temp WHERE email = ?");
  $stmt->bind_param('ss', $email, $key);
  $stmt->execute();
  return $stmt->get_result()->fetch_assoc();
}
