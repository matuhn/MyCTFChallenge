<?php include('header.php'); ?>

<style type="text/css">
.pricing-header {
  max-width: 700px;
}

.card-deck .card {
  min-width: 220px;
}

.border-top { border-top: 1px solid #e5e5e5; }
.border-bottom { border-bottom: 1px solid #e5e5e5; }

.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
</style>
<div id="info"><div class="alert alert-info">Notice: Shiba have my flag, Alaska have my source but Pug and Corgi know my secret!</div></div>
<?php
	if(isset($_POST['money'])){
		if($_POST['money']<=$_SESSION['money']){
			$choice = $_POST['money'];
			switch ($choice){
				case 1000000000:{
					echo "<script>alert('GG! Flag is fuctf{s3r1al1z3_1s_1nt3r3st1ng_r1ght?}')</script>";
					$_SESSION['money'] -= $choice;
					break;
				}
				case 2000:{
					echo "<script>alert('Good! Now try to research more (/s0ur3f0rth1s.zip)')</script>";
					$_SESSION['money'] -= $choice;
					break;
				}
				case 1999:{
					echo "<script>alert('Nothing here again hehe!')</script>";
					$_SESSION['money'] -= $choice;
					break;
				}
				case 1998:{
					echo "<script>alert('Nothing here')</script>";
					$_SESSION['money'] -= $choice;
					break;
				}
				}
        

		}
		elseif($_POST['money']>$_SESSION['money']){
			echo "<script>alert('I think you should research more instead of cheating')</script>";
		}
		}
?>
<h2>All doge</h2>
<div class="row">
	<div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Shiba</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><img src="shiba.jpg" alt="Shiba" width="200"
         height="200"></h1>
        <ul class="list-unstyled mt-3 mb-4">
        	<li>On Sale</li>
        	<li>$1 000 000 000</li>
        </ul>
        <form action="" method="post">
        <button type="submit" name="money" value=1000000000 class="btn btn-lg btn-block btn-success">Buy</button>
    	</form>
      </div>
    </div>
    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Alaska</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><img src="alaska.jpg" alt="alaska" width="200"
         height="200"></h1>
        <ul class="list-unstyled mt-3 mb-4">
        	<li>On Sale</li>
        	<li>$2 000</li>
        </ul>
        <form action="" method="post">
        <button type="submit" name="money" value=2000 class="btn btn-lg btn-block btn-success">Buy</button>
    </form>
      </div>
    </div>
    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Pug</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><img src="pug.jpg" alt="pug" width="200"
         height="200"></h1>
        <ul class="list-unstyled mt-3 mb-4">
        	<li>On Sale</li>
        	<li>$1 999</li>
        </ul>
        <form action="" method="post">
        <button type="submit" name="money" value=1999 class="btn btn-lg btn-block btn-success">Buy</button>
    </form>
      </div>
    </div>
    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Corgi</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><img src="corgi.jpeg" alt="corgi" width="200"
         height="200"></h1>
        <ul class="list-unstyled mt-3 mb-4">
        	<li>On Sale</li>
        	<li>$1 998</li>
        </ul>
        <form action="" method="post">
        <button type="submit" name="money" value=1998 class="btn btn-lg btn-block btn-success">Buy</button>
    </form>
      </div>
    </div>
</div>

