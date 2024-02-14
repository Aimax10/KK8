<?php
$servername = "localhost";
$username = "root";
$password = "";//tiada semicolon
$database = "farmasi";//letakkan nama database yang hendak disambungkan

// Create connection
$conn = mysqli_connect("localhost","root","","farmasi");//tambah database
$database = mysqli_select_db($conn,"farmasi");// tiada variable "$conn"

?>