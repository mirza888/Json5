<html>
<title>WebService</title>
<h2>Data Alamat Costumer</h2>
</html>
<?php 
 $host = "localhost";
 $user = "root";
 $pass = "";
 $database = "json";
 $conn = mysqli_connect($host, $user, $pass, $database);
 $sql = "Select * from alamat";
 $query = mysqli_query($conn, $sql);
 $rows=array();
 while($data = mysqli_fetch_assoc($query))
 {
 $rows[] = $data;
 $rows[] = "<br>";
 }
 echo json_encode($rows);
?>