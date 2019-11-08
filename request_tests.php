<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "./connection.php";

$connection = mysqli_connect($url, $userName, $password, $dbName)or die("die");
mysqli_set_charset($connection, "utf8");
$get_users = "select * from User";
$response_get_users = mysqli_query($connection, $get_users);
$array_response_users = mysqli_fetch_array($response_get_users);
$my_array = array();

while ($row = mysqli_fetch_array($response_get_users)) {
  $id = $row["id"];
  $userName = $row["userName"];
  $password = $row["password"];
  $my_array[] = array(
    "id" => $id,
    "userName" => $userName,
    "password" => $password
  );
};
var_dump($my_array);
echo ("<br/>");
echo ("<br/>");
echo json_encode($my_array);
echo ("<br/>");
echo ("<br/>");
echo json_encode($array_response_users);
echo ("<br/>");
echo ("<br/>");
printf($array_response_users["userName"]);
echo ("<br/>");
echo ("<br/>");
print_r($array_response_users);
echo ("<br/>");
echo ("<br/>");
var_dump($array_response_users);
 ?>
