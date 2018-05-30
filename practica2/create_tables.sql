CREATE DATABASE centro_deportivo;

USE centro_deportivo;

CREATE TABLE users (
user_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
mobile_phone VARCHAR(15) NOT NULL,
telephone VARCHAR(15) NOT NULL,
first_name VARCHAR(20) NOT NULL,
family_name VARCHAR(50) NOT NULL,
address TEXT NOT NULL,
population VARCHAR(20) NOT NULL,
province VARCHAR(20) NOT NULL,
image VARCHAR(20) NOT NULL,
reference VARCHAR(10)
);

CREATE TABLE forum_threads (
thread_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(100) NOT NULL,
description TEXT NOT NULL,
user_id INT UNSIGNED NOT NULL,
FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE TABLE forum_responses (
response_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
response TEXT NOT NULL,
user_id INT UNSIGNED NOT NULL,
thread_id INT UNSIGNED NOT NULL,
FOREIGN KEY (user_id) REFERENCES users(user_id),
FOREIGN KEY (thread_id) REFERENCES forum_threads(thread_id)
)
