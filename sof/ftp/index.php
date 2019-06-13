<?php

$ftp_username = "jokendar";
$ftp_userpass = "akshay@123";

// connect and login to FTP server
$ftp_server = "ftp.jokendar.com";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

// then do something...
foreach (glob("ftp/*.*") as $filename)
    echo $filename;
    ftp_put($ftp_conn, basename($filename) , $filename, FTP_BINARY);
// close connection
ftp_close($ftp_conn); 
?>