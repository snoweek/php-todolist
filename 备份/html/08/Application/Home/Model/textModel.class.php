<?php
/**
 * Created by PhpStorm.
 * User: sunyan
 * Date: 2015/9/20
 * Time: 19:40
 */
namespace Home\Model;
use Think\Model;
class textModel extends Model{
    protected $connection=array(
        'DB_TYPE'=>'mysql',
        'DB_USER'=>'root',
        'DB_PWD'=>'123456',
        'DB_HOST'=>'localhost',
        'DB_PORT'=>'3306',
        'DB_NAME'=>'todolist',
        'DB_CHARSET'=>'utf8',
        'DB_PREFIX'=>' ',

    );
    protected $tablePrefix='';
}