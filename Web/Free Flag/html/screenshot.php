<?php
require('secret.php');
if(isset($_COOKIE['hash'])){
        $data = base64_decode($_COOKIE['data']);
        $hash = base64_decode($_COOKIE['hash']);
        parse_str($data);
        parse_str($hash); 
        if ( md5($secret.$data) !== $sign ){
            echo 'Invalid Signature';
        }
        else{
            foreach(explode("&",$data) as $single_param){
                parse_str($single_param);   
            }
            if ($username === 'khoabda'){
            if (!empty($_REQUEST['website'])){
                    $website = $_REQUEST['website'];
                    if (!is_string($website)){
                        echo "Please don't try to hack";
                    }
                    elseif (@preg_match("/^.*(35\.240\.138\.83|flag|php|1337|0000|\[::]|localhost|0|spoofed\.burpcollaborator\.net|localtest\.me|nip\.io|mail\.ebc\.apple\.com|bugbounty\.dod\.network|\[0:0:0:0:0:ffff:127\.0\.0\.1]|127|2130706433|602966611|3232235521|3232235777|0177\.0\.0\.1|file|dict|gopher|sftp|tftp|ldap|0|127\.0\.1|127\.1).*$/",$website)){
                    echo "Please don't try to read my secret";
                    }
                    else{
            	$website= json_decode($website,true)['website'];
            	$url_after_parsed = @parse_url($website);
            	if (@$url_after_parsed['host'] === 'stackoverflow.com' || @$url_after_parsed['host'] === 'google.com'  || @$url_after_parsed['host'] === 'www.pastebin.com'){
		if (@$url_after_parsed['scheme'] === 'http' || @$url_after_parsed['scheme'] === 'https'){
                $curl_init = curl_init();
                curl_setopt($curl_init, CURLOPT_URL, $website);
                $output = curl_exec($curl_init);
                curl_close($curl_init);
                        }
				else{
					echo "Sorry we only accept http or https for security!";
			}
			}
                        else {
                            echo "Sorry we only accept our host and valid Json for security!";
                        }
                    }

                }
            }
        }
    }
?>
