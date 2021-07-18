create database diagram;
use diagram;

create table admins(
id int primary key,
name varchar(255),
email varchar(255),
pass varchar(20),
phone varchar(15),
created_at datetime,
updated_at datetime
);

create table users(
id int primary key,
name varchar(255),
email varchar(255),
phone varchar(15),
address varchar(255),
created_at datetime,
updated_at datetime
);

create table news_type(
id int primary key,
type varchar(255),
created_at datetime,
updated_at datetime
);

create table news(
id int primary key,
news_type_id int,
title varchar(255),
shortContent varchar(255),
content varchar(255),
img varchar(255),
users_like int,
created_at datetime,
updated_at datetime,
foreign key (news_type_id) references news_type(id) on delete cascade on update cascade
);

create table news_comments(
id int primary key,
news_id int,
users_id int,
content varchar(255),
created_at datetime,
updated_at datetime,
foreign key (news_id) references news(id) on delete cascade on update cascade,
foreign key (users_id) references users(id) on delete cascade on update cascade
);

create table classes(
id int primary key,
name varchar(50),
created_at datetime,
updated_at datetime
);

create table achievements(
id int primary key,
classes_id int,
authorName varchar(255),
topic varchar(255),
technology varchar(255),
img varchar(255),
shortContent varchar(255),
content varchar(255),
link varchar(255),
created_at datetime,
updated_at datetime,
foreign key (classes_id) references classes(id) on delete cascade on update cascade
);

create table banner(
id int primary key,
title varchar(255),
content varchar(255),
img varchar(255),
video varchar(255),
background varchar(255),
created_at datetime,
updated_at datetime
);

create table contacts(
id int primary key,
users_id int,
title varchar(255),
message varchar(255),
created_at datetime,
updated_at datetime,
foreign key (users_id) references users(id) on delete cascade on update cascade
);

create table donation(
id int primary key,
users_id int,
money int,
message varchar(255),
created_at datetime,
updated_at datetime,
foreign key (users_id) references users(id) on delete cascade on update cascade
);

create table events(
id int primary key,
title varchar(255),
img varchar(255),
content varchar(255),
created_at datetime,
updated_at datetime
);

create table gallery_type(
id int primary key,
type varchar(255),
created_at datetime,
updated_at datetime
);

create table gallery(
id int primary key,
gallery_type_id int,
title varchar(255),
img varchar(255),
content varchar(255),
created_at datetime,
updated_at datetime,
foreign key (gallery_type_id) references gallery_type(id) on delete cascade on update cascade
);

create table partners(
id int primary key,
name varchar(255),
link varchar(255),
img varchar(255),
content varchar(255),
created_at datetime,
updated_at datetime
);

create table staffs_type(
id int primary key,
type varchar(255),
created_at datetime,
updated_at datetime
);

create table staffs(
id int primary key,
staffs_type_id int,
name varchar(255),
content varchar(255),
facebook varchar(255),
linkin varchar(255),
twitter varchar(255),
instagram varchar(255),
created_at datetime,
updated_at datetime,
foreign key (staffs_type_id) references staffs_type(id) on delete cascade on update cascade
);

















