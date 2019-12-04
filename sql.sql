create database db1 character set = utf8

create table usedLink(
id int primary KEY auto_increment,
link varchar(2083),
keyword varchar(6),
zhuangtai int
)

insert into usedLink values(null,"http://baidu.com","AAAAAA",1)

