<?php
$file= fopen("demo.txt","r");

if($file){
    echo "File open successfully";
}
else{
    echo "Failed to open the file";
}

?>