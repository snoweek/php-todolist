<?php
    function upload($picture,$filepath){
        $size=sizeof($_FILES['picture']['name']);
        for ($i=0; $i<$size; $i++){
            $picturename=$picture['name'][$i];
            $tmp_file=$picture['tmp_name'][$i];
            $destination=$filepath.$picturename;
            echo '<p>picture:'.$picturename.'</p>';
            echo '<p>tmp_file:'.$tmp_file.'</p>';
            move_uploaded_file($tmp_file,$destination);
        }
    }

?>