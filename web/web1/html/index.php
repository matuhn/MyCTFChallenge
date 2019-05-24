<?php
        $flag="fuctf{s0m3_t1m3_c0mm4nd_1s_3x3cut3d_but_y0u_c4n't_s33!}";
        if(isset($_POST['domain']) && !empty($_POST["domain"])){
            $domain = @preg_replace("/[^\S\r\n]/","",@preg_replace("/[\\\|;$`&<>]/", "", trim($_POST["domain"])));
            $response = @shell_exec("timeout 5 bash -c 'ping -c 3 ".$domain."'");
            $receive = @preg_match("/3 packets transmitted, (.*) received/s",$response,$out);

            if ($out[1]=="3") 
            {
                $result = "Host alive!";
            }
            elseif ($out[1]=="0")
            {
                $result = "Host die!";
            }
            else
            {
                $result = "Ey,ey don't try to append anything weird like \|`;&<> <b>after</b> domain,ip or use invalid domain,ip heckermen! ";
            }
        }
        
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ping Pong Ping Pongggggg</title>
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
        <h1 class="title is-size-1"><a style="color: #000" href="/">Ping Pong Ping Pong</a></h1>
        <h2 class="subtitle">You can check if website is alive or dead here</h2>
    </div>
</section>

<section>
    <div class="container search has-text-centered">
        <form action="/" method="POST" accept-charset="UTF-8">
            <div class="columns is-mobile">
                <div class="column is-three-fifths is-offset-one-fifth">
                    <div class="field has-addons has-addons-centered">
                        <div id="input_wrapper" class="control is-expanded">
                            <input id="dom_input" class="input" name="domain" type="text"
                                   placeholder="Input domain or ip here!" , value="">
                        </div>
                        <div class="control">
                            <div type="submit" id="waiting" class="waiting_btn hide" disabled="true"><i
                                        id="waiting_icon" class="fa-li fa fa-spinner fa-pulse fa-fw"></i></div>
                            <button type="submit" id="dom_submit" class="button is-info">Submit</button>
                        </div>
        </form>
        </div>
        <div class="search-info has-text-left">
            <i class="fa fa-info-circle" aria-hidden="true"></i> Enter an ip or domain (E.g. 8.8.8.8,pornhub.com)
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
            Somehow you can see, even you are blind!
        </div>
    </div>

</section>

<noscript><p><img src="//pa.tool.domains/piwik.php?idsite=11" style="border:0;" alt=""/></p></noscript>
<!-- End Piwik Code -->

    