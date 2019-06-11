<?php include('header.php'); ?>

<?php
class khoadeptrai 
{ 
  var $jackpot;
  var $enter;
  var $value;
  var $otp; 
}
?>
</style>
<h2><center>Use ticket for betting!</center></h2>

<center><form method="POST">
<input type="text" name="ticket">
<button type="submit" name="btn-submit" value="Buy Ticket">Bet with 1000$!</button>
</form></center>
<?php
$result ="";
if (isset($_POST['ticket']) && isset($_SESSION['money']) && ($_SESSION['money']>=1000))
{
  	$obj = unserialize(base64_decode($_POST['ticket']));
  if($obj)
  {
    $obj->jackpot = rand(0,9).''.rand(0,9);
    if ((int)$obj->value == 1000)
      $valid = 1;
    else {
      if ($obj->otp == (rand(0,50).'ilovedoge'.rand(0,99999999).'nottrytoguessthis'))
        $valid = 1;
      else $valid = 0;
    }
    if ($valid == 1){
      if ($obj->enter === $obj->jackpot){
    	 $result .= 'Hey, hey, hey you win '.($obj->value);
    	 $_SESSION['money'] += (int)($obj->value);
      }
      else{
    	 $result .= 'You guess '.$obj->enter.', sorry it is '.$obj->jackpot;
    	 $_SESSION['money'] -= (int)($obj->value);
      }
    }
    else {
      $result .='You need a valid OTP to confirm when you want to bet all in what you have';
    }

  }
  else
  {
    $result .='How you think you can hack me? ';
  }
}
  elseif ($_SESSION['money']<1000) {
  	$result='You are out of money dude, I don\'t know why you need to waste your time for betting, I give you more 1000$ for betting and I will continue to read docs about deserialization and some kind of basic encrypting';
  	$_SESSION['money'] = 1000;
  }
?>

<section>
    <div class="container content">
                <div>
            <table class="table is-bordered is-narrow is-hoverable is-fullwidth">
                <tbody>
                                </tbody>
            </table>
                            <h3 class="is-st">Result:</h3>
                <ul class="fa-ul">
                    <li><i class="fa-li fa fa-check fa-green"></i>
                                <?php
                                        echo "<pre>$result</pre>";
                                ?>
                    </li>
                    
                </ul>
                        </div>
        
    </div>

</section>
<div class="copyrights has-text-centered">
            <center>Doge is the bezt , is it right?</center>
        </div>


