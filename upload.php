<?php
    if($_FILES['file']['name']){
        $temp = explode('.', $_FILES['file']['name']);
        $ext = end($temp);
        $id = rand(000000, 999999);
        $name = "image" . $id . "." . $ext;
        $location = "./images/" .$name;
        move_uploaded_file($_FILES['file']['tmp_name'], $location);
        echo $location;
    }
?>