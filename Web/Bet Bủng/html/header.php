<?php
@ob_start();
session_start();
if (!isset($_SESSION['money']))
  $_SESSION['money']=1000;
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>I Love Doge</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <span class="navbar-brand">Doge!</span>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
<?php
$nav_pages = ['index.php'=>'Home','bet.php'=>'Bet','buy.php'=>'Buy a ticket','market.php'=>'Doge Shop'];

foreach ($nav_pages as $key => $value) {
  $active = $key == basename($_SERVER['SCRIPT_NAME']) ? 'active' : '';

  echo <<<EOT
            <li class="nav-item $active">
              <a class="nav-link" href="$key">$value</a>
            </li>

EOT;
}
?>
        </ul>
        <span class="user-info">
<?php
  if(isset($_SESSION['money'])){
  $money = '$' . $_SESSION['money'];
  echo <<<EOT
        <span id="money">$money</span>  
EOT;

} 
          
        
?>
        </span>
      </div>
    </nav>
</body>
</html>
