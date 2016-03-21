# todolist
todolist是一个基于php和mysql的代办清单网站，可以完成以下功能  
* 注册  
* 登录  
* 注销
* 更改密码
* 显示自己的代办清单，并可以随时添加和更改内容

##项目结构
* bootstrap:css框架，代码中是直接调用的。
* image:放了项目的背景图片。
* js:存放客户端与服务器进行交互的js的文件。
* html:存放每个页面的导航条部分，因为所有的页面的导航条只有两种，一种是未登录，一种是登录。  
为了简化代码与代码重用，我将其写成两个文件，以便其他页面进行直接调用。
* todolist.php:各个功能的实现均写成函数。

##数据库todolist表信息
如果数据连接信息，例如数据库名或密码发生变化，可以到todolist.php中的connect_mysql()函数中修改
* usermessage
```
CREATE TABLE `usermessage` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  `password` text,
  `email` text,
  PRIMARY KEY (`user_id`)
)
```
usermessage数据库包含三列，user_id用于记录用户注册的顺序，同时用作主键,    
name用于记录用户的名称，password用于记录用户的密码。

* listmessage

```
CREATE TABLE `listmessage` (
  `list_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `content` text,
  `user_id` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`list_id`)
) 
```
listmessage数据库包含三列，list_id用于记录计划的条数，content用于记录计划的内容，
user_id用于记录用于记录用户注册的顺序。两个表之间以user_id来连接。









