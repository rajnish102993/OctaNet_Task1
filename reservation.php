<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <title>Reservation</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assi";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
 {
  die("Try Again");
}

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];
    $table_no = $_POST['table_no'];

    $sql = "INSERT INTO `reservations` (`name`, `email`, `phone`, `date`, `time`, `guests`, `table_no`)
     VALUES ('$name', '$email', '$phone', '$date', '$time', '$guests', '$table_no');";

if($conn->query($sql)==TRUE)
 {
  
  ?>

<script>
swal({
    title: "Restaurant Booked Successful",
    text: "You clicked the button!",
    icon: "success"
}).then(function() {
    window.location = "index.html";
});
 </script>
   
   <?php
}
 else
  {
  echo "Error"; 
}
$conn->close();


?> 
  
</body>
</html>