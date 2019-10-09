<?php 
    function d($ar){
        echo "<pre>";
        print_r($ar);
        echo "</pre>";
    }

    $db = mysqli_connect('localhost', 'root', '', 'onetwotrip');
    mysqli_set_charset($db, 'utf8');
?>