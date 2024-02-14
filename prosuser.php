<?php include("config.php");//kesalahan nama fail

$nama = $_POST['name'];//salah ejaan variable
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO user VALUES ('','$nama','$username','$email','$password','2')";//tiada tanda ""
$result = mysqli_query($conn,$sql);//tiada "$conn"


?>