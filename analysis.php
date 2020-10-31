<?php
session_start();
?>
<?php
$link = mysqli_connect('localhost', 'root' , '', 'hacktober');
if(!$link){
    die('error connection');
}
$string="$_SESSION["desc"]";
?>
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
	  
      //$string = "This Sentiment analysis api is very good!";
      $data = detect_sentiment($string);
      //echo "<pre>";
      //print_r($data);
      //echo "</pre>";
      echo $data['data']['state'];
      echo $data['data']['scores']['neg'];
?>