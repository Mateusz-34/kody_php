<?php 

function move_image($file) {
    $filename = md5(time().uniqid());
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $filepath = 'images/'.$filename.'.'.$extension;
    
    
    move_uploaded_file($file["tmp_name"],$filepath);
    return $filepath;
}