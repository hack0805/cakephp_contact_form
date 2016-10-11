create database cakephp_contact_form;

use cakephp_contact_form;

create table posts (
  id int not null auto_increment primary key,
  name varchar(32) not null,
  email varchar(100) not null,
  category varchar(20) not null,
  comment text not null,
  created datetime
);