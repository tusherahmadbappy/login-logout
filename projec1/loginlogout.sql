create database registration;
use registration;

create table users(
	id int not null auto_increment,
	firstname varchar(100) not null default'',
    lastname varchar(100) not null default'',
    email varchar(100) not null unique,
    password varchar(100) not null,
    confirmpassword varchar(100) not null,
    primary key(id),
    unique index index_email(email),
	index index_password(password)
);
create table login(

	id int not null auto_increment primary key,
    email varchar(100) not null,
	password varchar(100) not null,
    
	CONSTRAINT FK_Email FOREIGN KEY (email) REFERENCES users(email),
	CONSTRAINT FK_Password FOREIGN KEY (password) REFERENCES users(password)

);

