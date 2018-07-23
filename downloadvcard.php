
<?php
$path = "media/";  
$file='chata-olenderska.vcf';
header('Content-Type: text/x-vcard');
header('Content-Disposition: inline; filename= "'.$file.'"');  
header('Content-Length: '.filesize($path.$file)); 
readfile($path.$file);
exit();
flush();
?>
