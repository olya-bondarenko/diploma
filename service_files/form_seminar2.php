<?php
header('Content-Type; text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "thzjjdpc_seminar1", "hnSTUIeT", "thzjjdpc_seminar1");

if ($mysqli == false) {
  print("error");
} else {
  $name2 = $_POST["name2"];
  $lastname2 = $_POST["lastname2"];
  $phone2 = $_POST["phone2"];
  $email2 = $_POST["email2"];
  $comment2 = $_POST["comment2"];

  $result = $mysqli->query("SELECT * FROM `tabl_seminar2` WHERE `email`='$email2'");
  if ($result->num_rows != 0) {
    print("exist");
  } else {
    $mysqli->query("INSERT INTO `tabl_seminar2`( `name`, `lastmane`, `phone`, `email`, `comment`) VALUES ('$name2', '$lastname2', '$phone2', '$email2', '$comment2')");
    print("ok");
  }
};
