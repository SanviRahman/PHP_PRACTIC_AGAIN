<?php
$merge='';
function message($name,$age){

    $merge = $name.' '. $age;

    return $merge;
}

$merge2=message('Sanvi','25');
echo ($merge2);

?>