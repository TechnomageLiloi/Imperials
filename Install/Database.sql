create table imperials_imperials
(
    key_imperial bigint unsigned auto_increment,
    title varchar(250) not null,
    status tinyint unsigned not null,
    program text null,
    credits bigint signed not null default 0,
    constraint imperials_imperials_pk
        primary key (key_imperial)
);

