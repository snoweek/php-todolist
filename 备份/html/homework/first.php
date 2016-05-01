<?php
    header("Content-Type:text/html;charset=utf-8");
   /* $string1='string';
    $string2="string";
    $string3='$string1$string2';
    $string4="$string1$string2";
    echo $string1."<br/>";
    echo $string2."<br/>";
    echo $string3."<br/>";
    echo $string4."<br/>";*/
    $numbers=array(5,4,3,2,1);
    $words=array("browser","database"=>"mysql");
    echo $numbers[2]."<br/>";
    echo $words["database"]."<br/>";
    echo $words[0]."<br/>";
    echo $numbers;
    print_r($numbers);


    class Student{
        public $name;
        public $sex;
        function getName(){
            return $this->name;
        }
        function setName($name){
            $this->name=$name;
        }
    }
    $student=new Student();
    $student->setName("张三");
    echo $student->getName()."<br/>";


     //$dbc=@mysqli_connect('127.0.0.1', 'root','123456','todolist');
     //var_dump($dbc)."<br/><br/>";

     //$iostream=fopen("picture.php","r");
     //var_dump($iostream)."<br/>";
     $a=null;
     echo $a;
     var_dump($a);
     exho getType($a);








?>