use apache_test;
create table test(
id int auto_increment primary key not null,
imie varchar(45) not null,
nazwisko varchar(45) not null
);
insert into test(Id,FirstName, LastName) values
(null, 'User', 'Test'),
(null, 'First User', 'User'),
(null, 'Second User', 'User');
