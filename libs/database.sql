CREATE TABLE user
(
id VARCHAR(100) CHARSET utf8  primary key,
pass VARCHAR(100) CHARSET utf8,
name VARCHAR(100) CHARSET utf8,
email VARCHAR(100) CHARSET utf8,
delete_flg VARCHAR(100) CHARSET utf8
);


insert into user values('admin','admin','thang','123@gmail.com','1');


CREATE TABLE category
(
id integer AUTO_INCREMENT primary key,
name VARCHAR(100) CHARSET utf8,
name2 VARCHAR(100) CHARSET utf8,
delete_flg integer
);

insert into category values(null,'test1','test2',0);
insert into category values(null,'test3','test4',0);


CREATE TABLE location
(
id integer AUTO_INCREMENT primary key,
name VARCHAR(100) CHARSET utf8,
name2 VARCHAR(100) CHARSET utf8,
delete_flg integer
);

insert into location values(null,'test1','test2',0);
insert into location values(null,'test3','test4',0);


Create table product
(
id integer AUTO_INCREMENT primary key,
idcategory_id integer,
idlocation integer,
name VARCHAR(100) CHARSET utf8,
namevi VARCHAR(100) CHARSET utf8,
address VARCHAR(100) CHARSET utf8,
datepost date,
image VARCHAR(100) CHARSET utf8,
price integer,
bathroom integer,
bedroom integer,
forsale integer,
hot integer,
square integer,
description VARCHAR(1000) CHARSET utf8,
descriptionvi VARCHAR(1000) CHARSET utf8,
map VARCHAR(1000) CHARSET utf8,
delete_flg integer
);

create table image
(
id integer AUTO_INCREMENT primary key,
idproduct integer,
name VARCHAR(100) CHARSET utf8,
delete_flg integer
);

insert into product values(null,'1','1','test','test','diachi',CURDATE(),'1.jpg',200,2,2,1,1,60,'tes','tes','map',0);