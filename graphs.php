<?php
session_start();
?>
<?php
$link = mysqli_connect('localhost', 'root' , '', 'hacktober');
if(!$link){
    die('error connection');
}
$department=$_SESSION["department"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="theme-color" content="black">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="basestyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .asteriskField {
            display: none;
        }

        body {
          font-size: 16px;
          color: black;
          background-color: white;
          font-family: 'Oxygen', sans-serif;
        }


         #mynav{
          background-color: #800000;
        }


        form .alert ul li {
            list-style: none;
        }

        form .alert ul {
            padding: 0;
            margin: 0;
        }

        img{
            padding-right: 5px;
        }

    
       
.btn-link{
	color: #006600 !important;
}

.btn-outline-light{
    padding-right: : 15px;
    margin: 5px;

}


}
/* content of the 3 rows */
.col-md-7{
  padding: 20px;

}

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -.05rem;
}
.navbar-text{
  float: right;
}
/* img */
.impact{
  height: 100%;
  width: 100%;
  transition: 0.5s all ease-in-out;
}

.impact:hover {
   transform: scale(1.10);
}

.mission{
  transition: 0.5s all ease-in-out;
}

.mission:hover{
  transform: scale(1.10);
}
/* image zooming */

i{
  padding-left: 7.5px;
  padding-right: 7.5px;
}
</style>
<link href="incharge.css" rel="stylesheet" type="text/css">
   
 </head>
 <body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark mb-4" id="mynav">
        <div class="container">
            <img src="logoanti.png" width="50px" height="50px"><a class="navbar-brand" href="#">Anti Ragging Cell</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav mr-auto">
                   
                    
                </ul>
                
                <ul class="navbar-nav">
                   
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a href="index.html" class="btn btn-outline-light">Home</a>
                    <a href="inchargehome.php" class="btn btn-outline-light">Filed complaints</a>
                    <a href="viewed.php" class="btn btn-outline-light">Viewed complaints</a>
                    <a href="graphs.php" class="btn btn-outline-light active">Statistical analysis</a>
                    <a href="login.html" class="btn btn-outline-light">Sign Out</a>
                   
                    
                </form>
                
            </div>
        </div>
    </nav>
    <?php
$connect =  mysqli_connect('localhost', 'root' , '', 'hacktober');
$query11 = "SELECT count(sname)  as c11 from `details` where ayear=2020 and batch=1";
$result11 = mysqli_query($connect , $query11);
$row11 = mysqli_fetch_assoc($result11);


$query12 = "SELECT count(sname) as c12 from `details` where ayear=2020 and batch=2";
$result12 = mysqli_query($connect , $query12);
$row12 = mysqli_fetch_assoc($result12);

$query13 = "SELECT count(sname) as c13 from `details`  where ayear=2020 and batch=3";
$result13 = mysqli_query($connect , $query13);
$row13 = mysqli_fetch_assoc($result13);


$query21 = "SELECT count(ayear) as c21 from `details`where ayear=2019 and batch=1";
$result21 = mysqli_query($connect , $query21);
$row21 = mysqli_fetch_assoc($result21);


$query22 = "SELECT count(sname) as c22 from `details` where ayear=2019 and batch=2";
$result22 = mysqli_query($connect , $query22);
$row22 = mysqli_fetch_assoc($result22);

$query23 = "SELECT count(sname) as c23  from `details` where ayear=2019 and batch=3";
$result23 = mysqli_query($connect , $query23);
$row23 = mysqli_fetch_assoc($result23);


$color = ['#dc7877','#9cbb73','#9ee2d9','#9f9ee2','#e29eba'];
$scores = ['1','2','3'];
$test1 = array();
$test2 = array();

//for($i=0;$i<5;$i++)
 {
     //echo $result11['c11'];
    $test1[0] = $row11["c11"];
    $test1[1]= $row12["c12"];
    $test1[2]=$row13["c13"];
    //$test1[3]=$result14["c14"];

}

$test2[0] = $row21['c21'];
    $test2[1]= $row22["c22"];
    $test2[2]=$row23["c23"];
    //$test1[3]=$result24["c24"];
    

?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['scores','2020','2019'],
        <?php
        for($i=0;$i<3;$i++){
          ?>[<?php 
    
		echo "'".$scores[$i]."',".$test1[$i].", ".$test2[$i]." "?>],  <?php } 
        ?>
        ]);

        var options = {
          title: 'Comparison of filed complaints from past 2 years',
          hAxis: {title: 'Batches',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0,title: 'No. of complaints filed'}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 1000px; height: 500px;margin-left:200px"></div>
  </body>
</html>
