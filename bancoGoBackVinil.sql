CREATE DATABASE vinil;
USE vinil;

CREATE TABLE clients(
id INT AUTO_INCREMENT,
full_name VARCHAR(50),
phone CHAR(11),
CONSTRAINT pk_clients PRIMARY KEY(id)
);

CREATE TABLE stock(
id INT AUTO_INCREMENT,
album_name VARCHAR(60) NOT NULL,
amount INT NOT NULL,
author VARCHAR(60) NOT NULL,
CONSTRAINT pk_stock PRIMARY KEY(id)
);

CREATE TABLE sale(
id INT AUTO_INCREMENT,
sold_amount INT NOT NULL,
price INT NOT NULL,
clients_id INT,
stock_id INT,
CONSTRAINT pk_sale PRIMARY KEY(id),
CONSTRAINT fk_clients FOREIGN KEY(clients_id) REFERENCES clients(id),
CONSTRAINT fk_stock FOREIGN KEY(stock_id) REFERENCES stock(id)
);

INSERT clients(full_name,phone) VALUES 
('Douglas Ribeiro' ,'11940323212'),
('João Pedro' ,'11967539435'),
('Claudio Costa' ,'11995687235'),
('Felipe Silva' ,'11983123345'),
('Carlos Enrique' ,'11909832332'),
('Critiane Santos' ,'11947338299'),
('Sara Miarnda' ,'11940033433'),
('Isabelly' ,'11943243253');

INSERT discs(album_name, amount,author) VALUES
('Televisão',300,'Titãs'),
('Ten',250,'Pearl Jam'),
('Dois',105,'Legião Urbana'),
('Como se comportar',250,'Moptop'),
('Holocausto urbano',289,'Racionais MCs'),
('Meus caros amigos',173,'Chico Buarque'),
('By the away',100,'Red Hot Chilli Peppers'),
('Carne crua',298,'Barão vermelho');

INSERT client_disc(clients_id,amount,price,discs_id) Values(1,4,20.00,7),(2,3,25.00,8),(3,5,20.00,3),(4,2,17.00,4),(5,3,29.00,2),(6,3,19.00,1),(7,3,20.00,5),(8,2,21.00,6);

SELECT clients.full_name as cliente, album_name as comprou, clients_discs.amount as quantidade, price as preço FROM discs INNER join client_disc on discs.id = client_disc.discs_id INNER JOIN clients ON clients.id = client_disc.clients_id;


SELECT * FROM clients;
SELECT * FROM discs;
SELECT * FROM clients



















