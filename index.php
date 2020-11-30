<?php

////get all the info

//ip address
$_ip = $_SERVER['REMOTE_ADDR'];
//end

//host
$_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//end

//browser
$_browser = $_SERVER['HTTP_USER_AGENT'];
//end

//date
$_date = date("r");
//end

////all data have been collected now then we

////make a string to write into file
$_contents = $_ip . "~" . $_host . "~" . $_browser . "~" . $_date . "&";
////end

////enter info into file
$_filename = "logs.txt";
$_handle = fopen($_filename, 'a');
////if the file doesnt exist, script create it and chmod it 777 so we can write on it
@chmod("logs.txt", 0777);
@fwrite($_handle, $_contents);
fclose($_handle);
////end


?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta property="og:type" content="website">
<meta property="og:title" content="Embed title" />
<meta property="og:description" content="Embed description" />
<meta property="og:url" content="https://usefulstuff.ml/" />
<meta property="og:image" content="icon.jpg" />
<meta name="theme-color" content="#01FE2B">
    <head>
        <script data-ad-client="ca-pub-2235454136284515" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <title>Main Page</title>
        <body>
            <h1>
                Hello!
            </h1>
            <a href="https://usefulstuff.ml/privacy-policy/"
        </body>
    </head>
</html>