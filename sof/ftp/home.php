<?php 

require_once "stack.php";

$ftp = new FtpNew("ftp.jokendar.com");

$ftpSession = $ftp->login("jokendar", "akshay@123");

if (!$ftpSession) die("Failed to connect.");

$errorList = $ftp->send_recursive_directory("ftp/", "public_html/ftp");
print_r($errorList);

$ftp->disconnect();



?>