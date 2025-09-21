<?php
function my_callback($item) {
    return strlen($item);
}
$str = ["apple", "orange", "angur", "banana"];
$length = array_map("my_callback", $str);
print_r($length);