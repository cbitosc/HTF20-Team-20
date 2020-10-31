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
                    <a href="viewed.php" class="btn btn-outline-light active">Viewed complaints</a>
                    <a href="graphs.php" class="btn btn-outline-light">Statistical analysis</a>
                    <a href="login.html" class="btn btn-outline-light">Sign Out</a>
                   
                    
                </form>
                
            </div>
        </div>
    </nav>

<section class="s3" id="projects">

<br>
<center><h2>Viewed Complaints</h2></center>
                        <?php
                        function detect_sentiment($string){
                            $string = urlencode($string);
                            $api_key = "4d751af312bc9898816ee85d03c952";
                            $url = 'https://api.paysify.com/sentiment?api_key='.$api_key.'&string='.$string.'';
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            $result = curl_exec($ch);
                            $response = json_decode($result,true);
                            curl_close($ch);
                            return $response;
                            }
                        $department=$_SESSION['department'];
                        $query="select * from `details` where department='$department' and checked='yes'";
                        $result=mysqli_query($link,$query);
                        $c=mysqli_num_rows($result);
                        //echo $c;
                        $i=0;
                        if(mysqli_num_rows($result) > 0)
                        {
                            
                            echo "<div class='container'>";
                            echo "<div class='row'>";
                            
                            
                                while($res2 = mysqli_fetch_assoc($result))
                                {
                                    if($res2["token"]==0)
                                    {
                                        echo "
                                        <div class='card col-md-4'>
                                        <div class='face face1'>
                                        <div class='content'>
                                        <img src='anon.jpeg'><br>
                                        <h4>".$res2['sname']."</h4>
                                        </div>
                                        </div>
                                        <div class='face face2'>
                                        <div class='content'>";

                                        $string = $res2["comments"];
                                        $data = detect_sentiment($string);
                                        echo $data['data']['state'];
                                        echo " ";
                                        echo $data['data']['scores']['neg']*100;echo "%";
                                        echo "<br><a href=viewform1.php?myNumber=".$res2['sname'].">View Form</a>
                                        </div>
                                        </div>
                                        </div>
                                    
                                        " ;
                                    }
                                    else{
                                        echo "
                                    
                                    <div class='card col-md-4'>
                                    <div class='face face1'>
                                    <div class='content'>
                                    <img src='anon.jpeg'>
                                    <h4>".$res2['token']."</h4>
                                    </div>
                                    </div>
                                    <div class='face face2'>
                                    <div class='content'>";

                                    $string = $res2["comments"];
                                        $data = detect_sentiment($string);
                                        echo $data['data']['state'];
                                        echo " ";
                                        echo $data['data']['scores']['neg']*100;echo "%";
                                        echo "<br><a href=viewform1.php?myNumber=".$res2['sname'].">View Form</a>
                                        </div>
                                        </div>
                                        </div>
                                        " ;
                                }
                            }
                            echo "</div></div>";
                    }
                    

                    
                    
                
                    else{
                        echo "<div style='margin-left:10px'>";
                        echo "No new complaints";
                        echo "</div>";}
                             ?>
</div>
</div>
</div>
</div>


</section>
</body>

</html>