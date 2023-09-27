<?php
header('Content-Type; text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "thzjjdpc_seminar1", "hnSTUIeT", "thzjjdpc_seminar1");

if ($mysqli == false) {
  print("error");
} else {
  $name1 = $_POST["name1"];
  $lastname1 = $_POST["lastname1"];
  $phone1 = $_POST["phone1"];
  $email1 = $_POST["email1"];
  $comment1 = $_POST["comment1"];

  $result = $mysqli->query("SELECT * FROM `tabl_seminar1` WHERE `email`='$email1'");
  if ($result->num_rows != 0) {
    print("exist");
  } else {
    $mysqli->query("INSERT INTO `tabl_seminar1`( `name`, `lastmane`, `phone`, `email`, `comment`) VALUES ('$name1', '$lastname1', '$phone1', '$email1', '$comment1')");
    print("ok");
  }
}
