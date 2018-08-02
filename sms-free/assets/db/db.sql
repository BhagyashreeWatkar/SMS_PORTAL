

create table sms_category(
	ca_id  int auto_increment primary key,
	ca_name varchar(100),
	ca_time timestamp
);

create table sms_group(
	gr_id int auto_increment primary key,
	gr_name varchar(100),
	gr_time timestamp
);

create table person_contact(
	per_id int auto_increment primary key,
	per_name varchar(100),
	per_mobile bigint,
	per_grid varchar(100),	
	per_time timestamp
);

create table sms_message(
	sms_id int auto_increment primary key,
	sms_msg varchar(100),
	sms_caid int,
	sms_time timestamp	
);