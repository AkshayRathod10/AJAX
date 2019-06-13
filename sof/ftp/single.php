<?php 


foreach (glob("ftp/*.*") as $filename){
    echo $filename."<br>";
}
    
    // ftp_put($ftp_stream, basename($filename) , $filename, FTP_BINARY);



?>