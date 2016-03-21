todolist，我们以HTML标记语言和PHP脚本语言完成，同时连接了数据库,完成以下功能

（1）注册

（2）登录

（3）注销

（4）更改密码

（5）显示自己的计划列表，并可以随时添加和更改内容

其中我把各个功能实现的主体部分均抽象为函数，写在了todolist.php中

数据库中包含两个表

（1）usermessage
```
CREATE TABLE `usermessage` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  `password` text,
  `email` text,
  PRIMARY KEY (`user_id`)
)
```
此数据库包含三列，user_id用于记录用户注册的顺序，同时用作主键；

name用于记录用户的名称，password用于记录用户的密码

（2）listmessage

```
CREATE TABLE `listmessage` (
  `list_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `content` text,
  `user_id` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`list_id`)
) 
```
此数据库也包含三列，list_id用于记录计划的条数，content用于记录计划的内容，

user_id用于记录用于记录用户注册的顺序。两个表之间以user_id来连接。

下面来一下项目结构：

bootstrap是我下载的bootstrap库，代码中是直接调用的

image:放了项目的背景图片

js:存放客户端与服务器进行交互的js的文件

html:存放每个页面的导航条部分，因为所有的页面的导航条只有两种，一种是未登录，一种是登录。

为了简化代码与代码重用，

我将其写成两个文件，这样其他页面直接进行调用即可。







# php-todolist
进入todolist的目录

echo "# php-todolist" >> README.md
git init
git add README.md
git add .#
git commit -m "first commit"
git remote add origin https://github.com/snoweek/php-todolist.git
git push -u origin master



git add .#
git commit -m "first commit"
git push -u origin master
