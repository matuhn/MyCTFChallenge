<?php include('header.php'); ?>

<?php
class khoadeptrai 
{ 
  var $jackpot;
  var $enter;
  var $value; 
}
?>

<h2><center>Buy a ticket!</center></h2>
<center><form method="POST">
<input type="text" name="ticket" id="numbers" minlength="2" maxlength="2" pattern="\d{2}" required placeholder="2 numbers">
<button type="submit" name="btn-submit" value="Buy Ticket">Buy Ticket For Nothing</button>
</form>
<form method="POST" action="#">
<h2>Bet more than $1000(Under Maintenance)</h2></br>
<input  type="text" name="value" placeholder="Value" disabled>
<input type="text" name="otp" placeholder="OTP code" disabled>
<button type="submit" name="btn-submit" value="Buy Ticket" disabled>Confirm!</button>
</form>
</center>

<?php

if (isset($_POST['ticket']) && !empty($_POST['ticket']))
{
  	$temp = new khoadeptrai;
  	$temp->enter=$_POST['ticket'];
  	$temp->value=1000;
  	$code=serialize($temp);
  	$code=base64_encode($code);
  	$result='Use this ticket\'s code for betting: <strong>'.$code.'</strong>';
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