<?php  
session_start();  
?>  
<?php
$link = mysqli_connect('localhost', 'root' , '', 'hacktober');
if(!$link){
    die('error connection');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>View form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                    <style type="text/css">
                        .slidecontainer {
                            width: 50%;
                        }
                   
                    .slider {
                        -webkit-appearance: none;
                        width: 100%;
                        height: 15px;
                        border-radius: 5px;
                        background: #d3d3d3;
                        outline: none;
                        opacity: 0.7;
                        -webkit-transition: .2s;
                        transition: opacity .2s;
                    }
                   
                    .slider:hover {
                        opacity: 1;
                    }

                     .pad{
                        padding-left:350px;
                    }

                     .pad1{
                        padding-left:50px;
                    }


                     .pad2{
                        padding-left:50px;
                    }
                    .slider::-webkit-slider-thumb {
                        -webkit-appearance: none;
                        appearance: none;
                        width: 25px;
                        height: 25px;
                        border-radius: 50%;
                        background: #2196F3;
                        cursor: pointer;
                    }
                   
                    .slider::-moz-range-thumb {
                        width: 25px;
                        height: 25px;
                        border-radius: 50%;
                        background: #2196F3;
                        cursor: pointer;
                    }
                    input[type=text]:focus, input[type=password]:focus {
                        background-color: #ddd;
                        outline: none;
                    }
                    .slider-value {
                        padding-left: 2vh;
                        font-weight: bold;
                    }
                    hr {
                        border: 1px solid #f1f1f1;
                        margin-bottom: 25px;
                    }
                    /* Set a style for all buttons */
                    button {
                        background-color: #4CAF50;
                        color: white;
                        padding: auto;
                        height: 6vh;
                        border: none;
                        cursor: pointer;
                        width: 100%;
                        opacity: 0.9;
                    }
                    button:hover {
                        opacity:1;
                    }
                    .cancelbtn {
                        padding: auto;
                        background-color: #f44336;
                    }
                   
                    /* Float cancel and signup buttons and add an equal width */
                    .cancelbtn, .signupbtn {
                        float: left;
                        width: 50%;
                    }
                    .container {
                        padding: 14px 14px 6px 14px;
                    }
                   
                    /* Clear floats */
                    .clearfix::after {
                        content: "";
                        clear: both;
                        display: table;
                    }
                   
                    /* Change styles for cancel button and signup button on extra small screens */
                    @media screen and (max-width: 300px) {
                        .cancelbtn, .signupbtn {
                            width: 100%;
                        }
                    }
                    ul {
                        li: right;
                    }
                   
                    .navbar-default .navbar-nav > li > a {
                        color: black;
                        font-weight: bold;
                        margin: 0;
                    }
                   
                    .navbar-header > a {
                        color: black;
                        font-weight: bold;
                    }
                   
                    .navbar {
                        margin:0;
                    }
                   
                        </style>
                    </head>
                    <body style="margin-top:100px">
    
                    <div class="col-sm-15" style="height:100%;display:flex; flex-direction:column; align-items:center; justify-content:center; background:#F8F9FA;">
                        <div style="width:70%; height:100%; background:#FFF; display:flex; flex-direction:column; overflow-y:auto; overflow-x:hidden; box-shadow:2px 2px 20px #AAA;">
                            <div style="height:5%;"></div>
                            <b>  <p align = "center" style="margin-top:20px"><font size="5" color="#800000">Form details</font></p></b>
                        <hr>
                         <center>
                        <table border = "0"  cellspacing="10" align="center" style="margin-left:50px" bgcolor= "#FFFAFA" >
<center>
<tr height="30"><td><b></b></td>
<td><b>Date</b></td><td><b>:</b>  <?php
                             $value1= $_GET["myNumber"];
                             $query = "select * from `details` where token='$value1' ";
                              $result = mysqli_query($link,$query);
                              $row = mysqli_fetch_assoc($result);
                                    $_SESSION["idate"] = "$value1";
                                      echo " " .$row["idate"]. " ";
                                   ?> </td>
</tr>
<tr height="30"><td><b></b></td>
<td><b>Time</b></td><td><b>:</b>  <?php
                             $value1= $_GET["myNumber"];
                             $query = "select * from `details` where token='$value1' ";
                              $result = mysqli_query($link,$query);
                              $row = mysqli_fetch_assoc($result);
                                    $_SESSION["itime"] = "$value1";
                                      echo " " .$row["itime"]. " ";
                                   ?> </td>
</tr>
<tr height="30"><td><b></b></td>
<td><b>Place</b></td><td><b>:</b>  <?php
                             $value1= $_GET["myNumber"];
                             $query = "select * from `details` where token='$value1' ";
                              $result = mysqli_query($link,$query);
                              $row = mysqli_fetch_assoc($result);
                                    $_SESSION["place"] = "$value1";
                                      echo " " .$row["place"]. " ";
                                   ?> </td>
</tr>
<tr height="60"><td><b></b></td>
<td><b>Description</b></td><td><b>:</b>  <?php
                             $value1= $_GET["myNumber"];
                             $query = "select * from `details` where token='$value1' ";
                              $result = mysqli_query($link,$query);
                              $row = mysqli_fetch_assoc($result);
                                    $_SESSION["desc"] = "$value1";
                                      echo " " .$row["comments"]. " ";
                                   ?> </td>
</tr>
<tr height="30"><td><b></b></td>
<td width=125px><b>Bullier Name</b></td><td><b>:</b>  <?php
                             $value1= $_GET["myNumber"];
                             $query = "select * from `details` where token='$value1' ";
                              $result = mysqli_query($link,$query);
                              $row = mysqli_fetch_assoc($result);
                                    $_SESSION["bname"] = "$value1";
                                      echo " " .$row["bname"]. " ";
                                   ?> </td>
</tr>
<tr height="30"><td><b></b></td>
<td><b>Bullier department</b></td><td><b>:</b>  <?php
                             $value1= $_GET["myNumber"];
                             $query = "select * from `details` where token='$value1' ";
                              $result = mysqli_query($link,$query);
                              $row = mysqli_fetch_assoc($result);
                                    $_SESSION["bdept"] = "$value1";
                                      echo " " .$row["bdept"]. " ";
                                   ?> </td>
</tr>
</table>
                
                   
                <a href="viewed.php"><input style="background-color:#800000; color:white; margin-top:20px;margin-bottom:50px" type="button" value="Ok"/></a>
                </center>
    </body>
</html>
