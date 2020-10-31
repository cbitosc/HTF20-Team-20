<?php
session_start();
?>
<?php
$link = mysqli_connect('localhost', 'root' , '', 'hacktober');
if(!$link){
    die('error connection');
}
$name=$_SESSION['sname'];
$query="select * from `details` where sname='$name'";
$result=mysqli_query($link,$query);
if(mysqli_num_rows($result)>0){
        $query="update `details` set checked='yes' where sname='$name'";
        $result=mysqli_query($link,$query);
        header("Location:inchargehome.php");
}
else{
    echo "Error";
}
?>