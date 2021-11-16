<?php
$file = "buttonStatusFan.txt";
$handle = fopen($file,'w+');
if ( isset($_POST['onFan'])) {
    $onstring = "ON";
    fwrite($handle,$onstring);
    fcolse($handle);
    print "
    <html>
    <head>
    <title> IOT Home Automation</title>
    </head>
    <body>
    <style type="text/css">
    h1{
    padding-left: 300px;
    }
    h2{
    position: absolute;
    top: 100px;
    left: 450px;
    }
    </style>
    <h1> IOT Implemented</h1>
    <h2> Fan is on</h2>
    </body>
    </html>
    ";
}
elseif( isset($_POST['offFan'])){
    $offstring = "OFF";
    fwrite($handle,$offstring)
    fclose($handle)
    print"
    <html>
    <head>
    <title> IOT Home Automation</title>
    </head>
    <body>
    <style type="text/css">
    h1{
    padding-left: 300px;
    }
    h2{
    position: absolute;
    top: 100px;
    left: 450px;
    }
    </style>
    <h1> IOT Implemented</h1>
    <h2> Fan is off</h2>
    </body>
    </html>    
    ";
}
?>