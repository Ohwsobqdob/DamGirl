<?php
$dir = $_SERVER['DOCUMENT_ROOT'];
$baseStorage = $_SERVER['DOCUMENT_ROOT'].getenv('RAILWAY_VOLUME_MOUNT_PATH')."/storage";
// Sort in ascending order - this is default
$a = scandir($dir);

// Sort in descending order
$b = scandir($dir,1);

//print_r($a);
//print_r($b);
echo $baseStorage;
?>
