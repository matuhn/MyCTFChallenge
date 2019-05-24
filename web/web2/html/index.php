<?php
	exec("rm -f tmp/*"); //I have dir tmp/ in WEB ROOT but I don't use it anymore, lazy to del it :(
	$first_part_of_flag='fuctf{LF1__and';
        if (isset($_POST['upload']) && isset($_FILES['file1']) && isset($_FILES['file2'])) {
   	if ($_FILES['file1']['error'] > 0 || $_FILES['file2']['error'] > 0 )
        $result = "Something error when uploading dude!";
    	else {
	$dir = 'younevercanguessthispath2347823748237492739847239847289'; // Now you know the name, what you can do next?
	$pathFile1 = $dir."/".$_FILES['file1']['name'];
	$pathFile2 = $dir."/".$_FILES['file2']['name'];
    	@move_uploaded_file($_FILES['file1']['tmp_name'], $pathFile1);
	@move_uploaded_file($_FILES['file2']['tmp_name'], $pathFile2);
	if(preg_match("/[?<>|=]|php/",@file_get_contents($pathFile1)) or preg_match("/[?<>|=]|php/",@file_get_contents($pathFile2))){
	exec("rm -f ".$pathFile1);
        exec("echo 'hey hey i know what you are doing supriseeeeeeee 1' > ".$pathFile1);
        exec("rm -f ".$pathFile2);
        exec("echo 'hey hey i know what you are doing supriseeeeeeee 2' > ".$pathFile2);
    	}
	$nameFile1 = urldecode($_FILES['file1']['name']);
	$nameFile2 = urldecode($_FILES['file2']['name']);
   	$result = shell_exec("diff ".$dir."/".$nameFile1." ".$dir."/".$nameFile2);
	
	exec("rm -f younevercanguessthispath2347823748237492739847239847289/*");
}
}

?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Diff Online </title>
        <link rel="stylesheet" type="text/css" href="bulma.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
              integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
              crossorigin="anonymous">
        <!--        <link rel="stylesheet" type="text/css" href="/public/css/fa/font-awesome.min.css"/>-->
        <link rel="stylesheet" type="text/css" href="app.css"/>
    </head>
<body>

<section class="bg-nav">
    <div class="container nav has-text-right">
        <a href="https://www.facebook.com/ak.iafu" target="_blank" rel="noopener"><i class="fa fa-info-circle"
                                                                                     aria-hidden="true"></i></a>
        <a href="https://www.facebook.com/ak.iafu" target="_blank" rel="noopener"><i class="fab fa-facebook-f"
                                                                                        aria-hidden="true"></i></a>
        <a href="https://www.facebook.com/ak.iafu" target="_blank" rel="noopener"><i class="fab fa-twitter"
                                                                                  aria-hidden="true"></i></a>
        <a href="https://www.facebook.com/ak.iafu" target="_blank" rel="noopener"><i class="fa fa-envelope"
                                                                                        aria-hidden="true"></i></a>
    </div>
</section>

<section class="bg-header">
    <div class="container header has-text-centered">
        <h1 class="title is-size-1"><a style="color: #000" href="/handler.php?path=index">Diff file Online</a></h1>
        <h2 class="subtitle">This system based on Linux function. Choose 2 file to see the difference!</h2>
    </div>
</section>

<section>
    <div class="container search has-text-centered">
        <form action="index.php" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
            <div class="columns is-mobile">
                <div class="column is-three-fifths is-offset-one-fifth">
                    <div class="field has-addons has-addons-centered">
                        <div id="input_wrapper" class="control is-expanded">
                            <input type="file" name="file1" value="File1"/>
			    <input type="file" name="file2" value="File2"/>
                        </div>
                        <div class="control">
                            <div type="submit" id="waiting" class="waiting_btn hide" disabled="true"><i
                                        id="waiting_icon" class="fa-li fa fa-spinner fa-pulse fa-fw"></i></div>
                            <button type="submit" name="upload" id="dom_submit" class="button is-info">Show me the difference!!!</button>
                        </div>
        </form>
        </div>
        <div class="search-info has-text-left">
            <i class="fa fa-info-circle" aria-hidden="true"></i> TIPS: Sometime you don't need contents to have contents
        </div>
    </div>
    </div>

    </div>
</section>

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
        <div class="copyrights has-text-centered">
            Want some advice? Try to find out what is shell? what is symbolic link?
        </div>
    </div>

</section>

<noscript><p><img src="//pa.tool.domains/piwik.php?idsite=11" style="border:0;" alt=""/></p></noscript>
<!-- End Piwik Code -->

    