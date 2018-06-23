/** 
@author evilnapsis
@website http://evilnapsis.com/
**/
create database ejemplo;
use ejemplo;

create table category(
  id int not null auto_increment primary key,
  name varchar(255),
  category_id int,
  foreign key(category_id) references category(id)
);