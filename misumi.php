<?php

    date_default_timezone_set('Asia/Tokyo');
    $now_year=(int)date("Y");
    

function isLeap($year) {
    $result="";
    
    if($year%4==0){
        $result="うるう年";
    }
    
    elseif($year/100==0){
        $result="うるう年ではない";
        
    }
    
    else{
        $result="うるう年ではない";
    }

return $result;

}

?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>うるう年</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="misumi.css">
    
    </head>
    
    <body>
        <span class="label">速報</span>
        <p>今年は<?php print $now_year;?>年です</p>
        <p><?php print isLeap($now_year);?>ですよ、みはなさん<span class="glyphicon glyphicon-volume-off></span></p>
        
        <img src="Picture1.png" alt="panda">
         
    </body>
</html>



