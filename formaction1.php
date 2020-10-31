<?php
session_start();
?>
<?php
$link = mysqli_connect('localhost', 'root' , '', 'hacktober');
if(!$link){
    die('error connection');
}

$query="select max(token) as c from `details`";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_assoc($result);

$c=$c+1;

$department=$_POST["department"];
$place=$_POST["place"];
$description=$_POST["description"];
$bname=$_POST["bname"];
$bdept=$_POST["bdept"];
$date=$_POST["date"];
$time=$_POST["time"];

$query="INSERT INTO details(department,place,comments,bname,bdept,token,idate,itime) VALUES ('$department','$place','$description','$bname','$bdept','$c','$date','$time')";
$result=mysqli_query($link,$query);
       header("Location:index.html");
?>
