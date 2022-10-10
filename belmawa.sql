nationalitiesDROP DATABASE IF EXISTS belmawa;

CREATE DATABASE IF NOT EXISTS belmawa;

USE belmawa;

-- CREATE TABLE a (
-- 	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
--     created_at TIMESTAMP,
--     created_by INT UNSIGNED NOT NULL,
--     updated_at TIMESTAMP,
--     updated_by INT UNSIGNED NOT NULL,
--     PRIMARY KEY(id),
-- 	FOREIGN KEY(created_by) REFERENCES users(id) ON UPDATE CASCADE,
-- 	FOREIGN KEY(updated_by) REFERENCES users(id) ON UPDATE CASCADE
-- );


CREATE TABLE users (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    attempt_login TINYINT,
    attempt_login_active DATETIME,
    last_login DATETIME,
    email_confirm_at DATETIME,
    is_active TINYINT,
    created_at TIMESTAMP,
    created_by INT UNSIGNED NOT NULL,
    updated_at TIMESTAMP,
    updated_by INT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(created_by) REFERENCES users(id) ON UPDATE CASCADE,
	FOREIGN KEY(updated_by) REFERENCES users(id) ON UPDATE CASCADE
);

CREATE TABLE provinces (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP,
    created_by INT UNSIGNED NOT NULL,
    updated_at TIMESTAMP,
    updated_by INT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
	FOREIGN KEY(created_by) REFERENCES users(id) ON UPDATE CASCADE,
	FOREIGN KEY(updated_by) REFERENCES users(id) ON UPDATE CASCADE
);

CREATE TABLE cities (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL UNIQUE,
    province_id INT UNSIGNED NOT NULL,
    created_at TIMESTAMP,
    created_by INT UNSIGNED NOT NULL,
    updated_at TIMESTAMP,
    updated_by INT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
	FOREIGN KEY(created_by) REFERENCES users(id) ON UPDATE CASCADE,
	FOREIGN KEY(updated_by) REFERENCES users(id) ON UPDATE CASCADE,
    FOREIGN KEY(province_id) REFERENCES provinces(id) ON UPDATE CASCADE
);

CREATE TABLE nationalities (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL UNIQUE,
    created_at TIMESTAMP,
    created_by INT UNSIGNED NOT NULL,
    updated_at TIMESTAMP,
    updated_by INT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
	FOREIGN KEY(created_by) REFERENCES users(id) ON UPDATE CASCADE,
	FOREIGN KEY(updated_by) REFERENCES users(id) ON UPDATE CASCADE
);

CREATE TABLE profiles (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT UNSIGNED NOT NULL,
    name VARCHAR(255) NOT NULL,
    gender CHAR(1) NOT NULL,
    place_of_birth VARCHAR(255) NOT NULL,
    date_of_birth DATE NOT NULL,
    address VARCHAR(255) NOT NULL,
    city_id INT UNSIGNED NOT NULL,
    phone_number VARCHAR(50) NOT NULL,
	nationality_id INT UNSIGNED NOT NULL,
    identity_number VARCHAR(50) NOT NULL UNIQUE,
    nidn VARCHAR(20) NOT NULL UNIQUE,
    bank_account_number VARCHAR(50) NOT NULL,
    bank_name VARCHAR(50) NOT NULL,
    created_at TIMESTAMP,
    created_by INT UNSIGNED NOT NULL,
    updated_at TIMESTAMP,
    updated_by INT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
	FOREIGN KEY(created_by) REFERENCES users(id) ON UPDATE CASCADE,
	FOREIGN KEY(updated_by) REFERENCES users(id) ON UPDATE CASCADE,
	FOREIGN KEY(user_id) REFERENCES users(id) ON UPDATE CASCADE,
	FOREIGN KEY(city_id) REFERENCES cities(id) ON UPDATE CASCADE,
	FOREIGN KEY(nationality_id) REFERENCES nationalities(id) ON UPDATE CASCADE
);


CREATE TABLE attachment_types (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    created_at TIMESTAMP,
    created_by INT UNSIGNED NOT NULL,
    updated_at TIMESTAMP,
    updated_by INT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
	FOREIGN KEY(created_by) REFERENCES users(id) ON UPDATE CASCADE,
	FOREIGN KEY(updated_by) REFERENCES users(id) ON UPDATE CASCADE
);


-- ALTER TABLE sales
-- ADD FOREIGN KEY (customer_id) REFERENCES customers(customer_id) ON DELETE CASCADE;