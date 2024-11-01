create table sellers(
    id int PRIMARY key auto_increment,
    name varchar(32),
    email varchar(32),
    phone varchar(10)
);

CREATE table propierties(
    id int primary key auto_increment,
    tittle varchar(64),
    price decimal(10,2),
    image varchar(256),
    description longtext,
    num_rooms int,
    num_wc int,
    num_garage int,
    create date,
    seller_id int
);

create table sold(
    id int PRIMARy key aunto_increment,
    own_names varchar(64),
    own_lastname varchar(64),
    date_sold date,
    seller_id int,
    propiertie int
);