<?php include('header.php'); ?>

</style>
<div class="info-container">
<div id="dust">
<h2><center>GET OUT!</center></h2>

<center><form method="POST" action="">
<input type="text" name="ticket" id="numbers" minlength="2" maxlength="2" pattern="\d{2}" required placeholder="2 numbers" >
<button id="baymau">Buy Ticket For Nothing</button>
</form>
<form method="POST" action="">
<h2>Bet more than $1000(Under Maintenance)</h2></br>
<input  type="text" name="value" placeholder="Value" >
<input type="text" name="otp" placeholder="OTP code" >
<button type="submit" name="btn-submit" value="Buy Ticket" disabled="">Confirm OTP</button>
</form>
</center>
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
</div>
	</div>