<?php
session_start();
?>
<?php
$link = mysqli_connect('localhost', 'root' , '', 'hacktober');
if(!$link){
    die('error connection');
}

$username = '';
if( isset( $_POST['field3'])) {
    $username = $_POST['field3'];
}

$password = '';
if( isset( $_POST['field6'])) {
    $password = $_POST['field6'];
}


$query = "select * from `users` where username='$username' and password='$password'";
$result = mysqli_query($link,$query);
$row = mysqli_fetch_assoc($result);
if (mysqli_num_rows($result)!=0) 
{
    $department=$row['department'];                         
   $_SESSION["department"]="$department";
   header("Location: inchargehome.php");
}
else {
   header("Location: invalidlogin.html");
}
mysqli_close($link);
?>