CREATE SCHEMA sistem_penjualan_buku;

CREATE TABLE sistem_penjualan_buku.detail_transaction ( 
	detail_transaction_id int UNSIGNED NOT NULL  AUTO_INCREMENT  PRIMARY KEY,
	transaction_id       int UNSIGNED NOT NULL    ,
	book_id              int UNSIGNED NOT NULL    ,
	quantity_purchased   int UNSIGNED NOT NULL    ,
	total_purchase       int UNSIGNED NOT NULL    
 ) engine=InnoDB;

CREATE INDEX detail_transaction_book_id ON sistem_penjualan_buku.detail_transaction ( book_id );

CREATE INDEX detail_transaction_transaction_id ON sistem_penjualan_buku.detail_transaction ( transaction_id );

CREATE TABLE sistem_penjualan_buku.transaction ( 
	transaction_id       int UNSIGNED NOT NULL  AUTO_INCREMENT  PRIMARY KEY,
	admin_id             int UNSIGNED NOT NULL    ,
	customer_id          int UNSIGNED NOT NULL    ,
	type_of_payment_id   int UNSIGNED NOT NULL    ,
	transaction_date     datetime  NOT NULL    ,
	transaction_total    int UNSIGNED NOT NULL    ,
	created_at           datetime  NOT NULL    ,
	updated_at           datetime  NOT NULL    ,
	deleted_at           datetime  NOT NULL    
 ) engine=InnoDB;

CREATE INDEX transaction_customer_id ON sistem_penjualan_buku.transaction ( customer_id );

CREATE INDEX transaction_type_of_payment_id ON sistem_penjualan_buku.transaction ( type_of_payment_id );

CREATE INDEX transaction_admin_id ON sistem_penjualan_buku.transaction ( admin_id );

CREATE TABLE sistem_penjualan_buku.type_of_payment ( 
	type_of_payment_id   int UNSIGNED NOT NULL  AUTO_INCREMENT  PRIMARY KEY,
	payment_type         varchar(255)  NOT NULL    
 ) engine=InnoDB;

CREATE TABLE sistem_penjualan_buku.admin ( 
	admin_id             int UNSIGNED NOT NULL  AUTO_INCREMENT  PRIMARY KEY,
	admin_name           varchar(255)  NOT NULL    ,
	admin_email          varchar(255)  NOT NULL    ,
	admin_password       varchar(255)  NOT NULL    ,
	created_at           datetime  NOT NULL    ,
	updated_at           datetime  NOT NULL    ,
	deleted_at           datetime  NOT NULL    
 ) engine=InnoDB;

CREATE TABLE sistem_penjualan_buku.book ( 
	book_id              int UNSIGNED NOT NULL  AUTO_INCREMENT  PRIMARY KEY,
	book_category_id     int UNSIGNED NOT NULL    ,
	book_name            varchar(255)  NOT NULL    ,
	book_author          varchar(255)  NOT NULL    ,
	book_publisher       varchar(255)  NOT NULL    ,
	book_price           int UNSIGNED NOT NULL    ,
	created_at           datetime  NOT NULL    ,
	updated_at           datetime  NOT NULL    ,
	deleted_at           datetime  NOT NULL    
 ) engine=InnoDB;

CREATE INDEX book_book_category_id ON sistem_penjualan_buku.book ( book_category_id );

CREATE TABLE sistem_penjualan_buku.book_category ( 
	book_category_id     int UNSIGNED NOT NULL  AUTO_INCREMENT  PRIMARY KEY,
	book_category        varchar(255)  NOT NULL    
 ) engine=InnoDB;

CREATE TABLE sistem_penjualan_buku.costumer ( 
	costumer_id          int UNSIGNED NOT NULL  AUTO_INCREMENT  PRIMARY KEY,
	costumer_name        varchar(255)  NOT NULL    ,
	costumer_address     varchar(255)  NOT NULL    ,
	costumer_phone_number varchar(14)  NOT NULL    ,
	costumer_email       varchar(255)  NOT NULL    ,
	costumer_password    varchar(255)  NOT NULL    ,
	created_at           datetime  NOT NULL    ,
	updated_at           datetime  NOT NULL    ,
	deleted_at           datetime  NOT NULL    
 ) engine=InnoDB;

ALTER TABLE sistem_penjualan_buku.admin ADD CONSTRAINT fk_admin_transaction FOREIGN KEY ( admin_id ) REFERENCES sistem_penjualan_buku.transaction( admin_id ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE sistem_penjualan_buku.book ADD CONSTRAINT fk_book_transaction FOREIGN KEY ( book_id ) REFERENCES sistem_penjualan_buku.detail_transaction( book_id ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE sistem_penjualan_buku.book_category ADD CONSTRAINT fk_book_category_book FOREIGN KEY ( book_category_id ) REFERENCES sistem_penjualan_buku.book( book_category_id ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE sistem_penjualan_buku.costumer ADD CONSTRAINT fk_costumer_transaction FOREIGN KEY ( costumer_id ) REFERENCES sistem_penjualan_buku.transaction( customer_id ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE sistem_penjualan_buku.transaction ADD CONSTRAINT fk_transaction FOREIGN KEY ( transaction_id ) REFERENCES sistem_penjualan_buku.detail_transaction( transaction_id ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE sistem_penjualan_buku.type_of_payment ADD CONSTRAINT fk_type_of_payment_transaction FOREIGN KEY ( type_of_payment_id ) REFERENCES sistem_penjualan_buku.transaction( type_of_payment_id ) ON DELETE CASCADE ON UPDATE CASCADE;

