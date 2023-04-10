CREATE TABLE users(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username varchar(50), 
	password varchar(50), 
	email varchar(50)
);

CREATE TABLE product(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	product varchar(50), 
	description longtext, 
	price int
);

CREATE TABLE order_table(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	user_id int NOT NULL, 
	product_id NOT NULL, 
	shiipingAddress varchar(50), 
	billingAddress varchar(50), 
	paymentMethod varchar(50), 
);

CREATE TABLE basket(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	product_id int NOT NULL,
	user_id int NOT NULL,
	quantity int NOT NULL,
	FOREIGN KEY (product_id) REFERENCES product(id),
	FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE ordered_products(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	product_id int NOT NULL,
	user_id int NOT NULL,
	quantity int NOT NULL,
	FOREIGN KEY (product_id) REFERENCES product(id),
	FOREIGN KEY (user_id) REFERENCES users(id)
);
