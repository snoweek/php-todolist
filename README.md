###说明一下表结构
```
CREATE TABLE `usermessage` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  `password` text,
  `email` text,
  PRIMARY KEY (`user_id`)
)
```
```
CREATE TABLE `listmessage` (
  `list_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `content` text,
  `user_id` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`list_id`)
) 
```



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
