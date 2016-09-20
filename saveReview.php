<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
$gameTitle=$_GET["gameTitle"];
$releaseDate=$_GET["releaseDate"];
$description=$_GET["description"];
$publisher=$_GET["publisher"];
$developer=$_GET["developer"];
$group=$_GET["group"];
$platform=$_GET["platform"];
$filename = "reviews.txt";
$fp = fopen($filename ,"a");
if($fp) {
     fwrite($fp,  $gameTitle . "|" . $releaseDate . "|" .  $description . "|" .  $publisher  .
            "|" .  $developer . "|" .  $group . "|" .  $platform . "\r\n");
    $status = "Save successful";
}
else
       $status = "Save not successful";
fclose($fp);
echo $status; 
?> 