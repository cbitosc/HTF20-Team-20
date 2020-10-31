<?php
session_start();
?>
<?php
$link = mysqli_connect('localhost', 'root' , '', 'hacktober');
if(!$link){
    die('error connection');
}
$name=$_POST["name"];
$email=$_POST["email"];
$rollno=$_POST["rollno"];
$department=$_POST["department"];
$place=$_POST["place"];
$description=$_POST["description"];
$bname=$_POST["bname"];
$bdept=$_POST["bdept"];
$date=$_POST["date"];
$time=$_POST["time"];
$year=$_POST["year"];
$batch=$_POST["batch"];


$_SESSION['email']=$email;
$query="INSERT INTO details(sname,rollno,department,place,comments,idate,itime,bname,bdept,ayear,batch) VALUES ('$name','$rollno','$department','$place','$description','$date','$time','$bname','$bdept','$year','$batch')";
$result=mysqli_query($link,$query);
       header("Location:email.php");
?>
