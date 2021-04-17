create database BankSystem;
create table Customers(
ID int not null primary key,
name varchar(255),
email varchar(255),
current_balance int(255)
);
alter table customers 
modify current_balance varchar(255);

insert into customers values(6,'Rajesh','rajesh_rastogi@gmail.com','8000');
insert into customers values(7,'Shaji','shaji.tapulli@gmail.com','85000');
insert into customers values(8,'Nidhi','nidhi1311@gmail.com','38000');
insert into customers values(9,'Kunal','kunal.babbar@gmail.com','60000');
insert into customers values(10,'Mayur','Mayur.sapkal@gmail.com','15000');

create table transaction(
ID int not null primary key,
transfer_from varchar(255),
transfer_to varchar(255),
amount varchar(255)

);