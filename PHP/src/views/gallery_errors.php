<?php
if($size==='false') {
    echo "The image is too big (max 1 MB)<br>";
}
if($type==='false') {
    echo "Error, only JPG and PNG files are allowed.<br>";            
}
if ($ifwatermark==='false') {
    echo "Watermark cannot be empty!<br>";
}
if ($iftitle==='false') {
  echo "Title cannot be empty!<br>";
}
if ($ifauthor==='false') {
  echo "Author cannot be empty!<br>";
}
  
    if ($valid==='true') {
     echo "The file ". htmlspecialchars( basename( $_FILES["plik"]["name"])). " has been uploaded.<br>";
    } 
    if ($valid==='false') {
     echo "Sorry, there was an error uploading your file.<br>";
   }
?>