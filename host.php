<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (file_put_contents('txts/users.txt', $username.' '.$password. '   '.'<br>', FILE_APPEND)){
        echo '<h1 align ="center">login success</h1>';

    }
    else{
        echo 'failed to login';
    }
?>