<?php
header("Content-Type: application/json");

    $ID = "";
    $Password = "";

    $ID = $_POST['ID'];
    $Password = $_POST['Password'];

    $i = 0;
    if( $ID == 'tjrnjsaud'){
        if($Password == '123123')
        {
            $i = 1;
        }else {
            $i = 2;
        }
    }


echo(json_encode(array("ID" => $ID, "Password" => $Password, "i" => $i)));


?>