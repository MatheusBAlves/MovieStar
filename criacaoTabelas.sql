create table users (
id int unsigned auto_increment primary key,
name varchar(100),
lastname varchar(100),
email varchar(200),
password varchar(200),
image varchar(200),
token varchar(200),
bio text
);

create table movies (
id int unsigned auto_increment primary key,
title varchar(100),
description text,
image varchar(200),
trailer varchar(150),
category varchar(50),
length varchar(50),
user_id int unsigned,
foreign key(user_id) references users(id)
);

create table reviews(
id int unsigned auto_increment primary key,
raiting int,
review text,
user_id int unsigned,
movie_id int unsigned,
foreign key(user_id) references users(id),
foreign key(movie_id) references movies(id)
);