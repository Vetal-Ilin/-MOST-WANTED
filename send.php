<?php
$phone = $_POST['phone'];
$name = $_POST['name'];
$phone = htmlspecialchars($phone);
$name = htmlspecialchars($name);
$phone = urldecode($phone);
$name = urldecode($name);
$phone = trim($phone);
$name = trim($name);
echo $phone;
echo "<br>";
echo $name;?>