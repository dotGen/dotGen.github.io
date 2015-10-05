<?php
    
    $ext_img=".jpg";
    $ext_audio=".mp3";
    
    $target_dir_img = "uploads/img/";
    $target_dir_audio = "uploads/audio/";

    /*Get text and coordsl*/

    $text = $_POST['text'];
    $coords = $_POST['pos'];

    /*Store Image*/

    $filename_img = "";

    if (isset($_FILES['photo'])) {
        $temp = explode(".", $_FILES["photo"]["name"]);
        $filename_img = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir_img.$filename_img.$ext_img);
    }

    /*Store Audio*/

    $filename_audio = "";

    if (isset($_FILES['audio'])) {
        $temp = explode(".", $_FILES["audio"]["name"]);
        $filename_audio = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES["audio"]["tmp_name"], $target_dir_audio.$filename_audio.$ext_audio);
    }


    /*Add entry to database*/
    
        // Add $text, $coords, $filename_audio, $filename_img
    
    /***********************/


?> 
