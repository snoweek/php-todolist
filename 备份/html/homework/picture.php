<?php 

    for($i=1;$i<=3;$i++){
    for($j=1;$j<=3-$i;$j++){
    echo"&nbsp;";
    }
    for($k=1;$k<=2*$i-1;$k++){
    echo"*";
    }
    echo"<br/>";
}
for($i=2;$i>=0;$i--){
    for($j=1;$j<=3-$i;$j++){
    echo"&nbsp;";
    }
    for($k=1;$k<=2*$i-1;$k++){
    echo"*";
    }
    echo"<br/>";
}




   /* class Test{
        function getTest($num){
            $num=md5(md5($num));
            return $num;
        }
    }
    $test=new Test();
    echo $test->getTest("123456");
    define("name","sunyan");
    echo name;
    echo __FILE__;
    echo PHP_OS;
    $i=0;
    for ($j=0;$j<100;$j++){
        $i=$i++;
    }
    echo $i;
    echo"<br/>";
    @print $d;
    echo"<br/>";
    @print  $d;
    $cmd=`netstat -aon`;
    print_r($cmd);*/

    ?>