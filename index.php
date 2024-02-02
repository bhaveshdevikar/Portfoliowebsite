<?php
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to" .mysqli_connect_error());
}
echo "Success connecting to the db";

// $sql = "INSERT INTO `tanjiro` ( `name`, `email`, `subject`, `dt`) VALUES ( 'don chandu', 'this.this2gmail.com', 'mera naam chandu hai', '2023-12-23 13:49:37.000000'); "
?>