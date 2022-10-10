create database if not exists php_test1;
create user if not exists php_user1 identified by 'php_user1';

grant all privileges on php_test1.* to 'php_user1';

use php_test1;

create table if not exists `person` (
    `id` int primary key auto_increment,
    `name` varchar(255) not null,
    `dni` char(9) not null,
    `email` varchar(255) not null,
    constraint `dni_uindex` unique (`dni`)
);

create table if not exists `student` (
    `id` int primary key auto_increment,
    `person_id` int not null,
    `enroll_code` varchar(100) not null,
    `course` varchar(100) not null,
    constraint `student_person_id_fk` foreign key (`person_id`)
        references `person` (`id`) on update cascade on delete cascade
);

insert into `person` (`name`, `dni`, `email`) values ('Name 1', '23232323A', 'email1@person.com');
insert into `person` (`name`, `dni`, `email`) values ('Name 2', '23232324A', 'email2@person.com');
insert into `person` (`name`, `dni`, `email`) values ('Name 3', '23232325A', 'email3@person.com');

insert into `student` (`person_id`, `enroll_code`, `course`) values (1, 'code1', '1daw3');
insert into `student` (`person_id`, `enroll_code`, `course`) values (2, 'code2', '2daw3');
insert into `student` (`person_id`, `enroll_code`, `course`) values (3, 'code3', '2daw3');
