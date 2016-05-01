<?php 
    $a=array("music","movie","computer","software");
    foreach($a as $value){
        echo $value."<br/>";
    }
    foreach($a as $key=>$value){
        echo $key."=>".$value."<br/>";
    }      
?>