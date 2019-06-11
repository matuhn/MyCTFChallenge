<?php
session_start(); 
?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Guess The Next Number</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link href='https://fonts.googleapis.com/css?family=Raleway:300,200' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="./style.css">

  
</head>

<body>
<button id="findpass">
<?php
$flag="fuctf{th1s_1s_gu3ss_ctf}";
if (isset ($_GET['number'])) {
    if ($_GET['number'] == $_SESSION['number'])
        echo $flag;
    else
        echo '<p>Wrong guess.</p></br>'.$_SESSION['number'];
}
$_SESSION['number'] = (rand(1,999)^rand(1,999)+rand(1,999))/rand(1,999);



?></button>
<div class="form">
  <form action="index.php" method="GET">
  <div class="forceColor"></div>
  <div class="topbar">
    <div class="spanColor"></div>
    <input type="text" class="input" id="number" name="number" placeholder="number"/>
  </div>
  <button class="submit" type="submit" id="submit" >Guess</button></br>
  </form>
  <a href="/source.txt"><button class="submit" type="submit" id="submit" >Source</button></a>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="./script.js"></script>




</body>

</html>
