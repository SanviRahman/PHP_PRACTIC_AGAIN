<?php
    $email= "shanto.jh5@gmail.com";

    //remove all illegale characters
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    //validated email
    if(!filter_var($email,FILTER_VALIDATE_EMAIL) === false){
        echo "$email is valid";
    }
    else{
        echo "$email is not valid";
    }
?>