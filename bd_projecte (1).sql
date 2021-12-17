create database empresa;
use empresa;

create table empresa (
nif varchar(9) primary key,
dirección varchar(255),
nom varchar(30)
);
insert into empresa values
 ('98436387F','Av. de Catalunya 13, Tàrrega, Lleida','Moltmobil');



CREATE TABLE PROVEÏDOR(
nif VARCHAR (9) primary key,
NOMBRE VARCHAR (50),
NUM_TELEFON INT (9),
CIUDAD VARCHAR (30)
);
insert into PROVEÏDOR values
 ('46787369F', 'Apple', 889582859, 'Barcelona' ),
 ('75463868F', 'Samsung', 732276523, 'Barcelona'),
 ('95552452F', 'Xiaomi', 389852392, 'Barcelona'),
 ('22649634F', 'Oneplus', 893394282, 'Tarragona');



create table movil (
nif varchar(30),
num_telefon int(9),
foreign key (nif) references empresa(nif)
);
insert into movil (num_telefon) values 
(573843622),
(582952512);



create table categorias(
co_cat int primary key,
nom varchar (30)
);
insert into categorias values
(23651,'smartphones'),
(36524,'tablets');




create table producto(
codi int primary key,
nom varchar (40),
marca varchar (20),
preu varchar(40),
estoc varchar(10),
da_porta date references porta (da_porta),
quantitat varchar(10) references porta(quantitat),
nif varchar (9) references PROVEÍDOR(nif),
categoria varchar(30),
material varchar(30),
co_cat int(30),
foreign key (nif) references PROVEÏDOR (nif),
foreign key (co_cat) references categorias (co_cat)    
);
insert into producto (codi, nom, marca, preu, estoc, categoria, material, nif)  values
 (88026,'Apple iPhone 13 Pro','Apple', 1153, 49, 'smartphone','acero inoxidable y cristal', '46787369F'),
 (98568,'Apple iPhone 12','Apple',809, 38, 'smartphone','aluminio y vidrio cerámico', '46787369F'),
 (23836,'Apple iPad Pro 2021','Apple',879, 23, 'tablet','aluminio', '46787369F'),
 (52559,'Samsung Galaxy S21','Samsung',859, 14, 'smartphone','plastico', '75463868F'),
 (20206,'Samsung Galaxy Note 20','Samsung',738.90, 19, 'smartphone','metal', '75463868F'),
 (24706,'Samsung Galaxy Tab S7','Samsung',699, 55, 'tablet','aluminio', '75463868F'),
 (63631,'Xiaomi Mi 11','Xiaomi',749.99, 25, 'smartphone','vidrio y aluminio', '95552452F'),
 (30227,'Xiaomi Redmi note 10 Pro','Xiaomi',299.99, 4, 'smartphone','cristal y plastico', '95552452F'),
 (99076,'Oneplus 8T','Oneplus',599, 71, 'smartphone', 'aluminio y vidrio', '22649634F'),
 (88453,'Poco X3 Pro','Poco',269.99, 62, 'smartphone','plastico y aluminio', '95552452F');
 
 
 SET FOREIGN_KEY_CHECKS=0;


create table porta (
da_porta date,
quantitat int(10),
codi int (10) primary key,
nif varchar (9),
foreign key (codi) references PRODUCTO (codi),
foreign key (nif) references PROVEÏDOR (nif)
);
insert into porta (da_porta, quantitat, codi, nif)  values
 ('2021/11/22' , 65, 1, '46787369F'),
 ('2021/11/22' , 50, 2, '75463868F');



create table material (
codi int,
tipo varchar(50),
primary key (codi),
foreign key (codi) references producto(codi)
);
insert into material (codi, tipo) values
(1, 'Plastico'),
(2, 'Aluminio'),
(3, 'Cristal');



create table similar (
codi int,
foreign key (codi) references producto (codi)
);

SELECT * FROM proveïdor;
