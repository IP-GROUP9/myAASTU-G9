-- create user and set up db
CREATE user IF NOT EXISTS 'aastu'@'localhost' IDENTIFIED BY 'myaastu_pwd';
GRANT ALL ON myaastu.* TO 'aastu'@'localhost';

CREATE DATABASE IF NOT EXISTS myaastu;
use myaastu;

DROP TABLE IF EXISTS post;
DROP TABLE IF EXISTS user;
CREATE TABLE user (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(80) UNIQUE NOT NULL,
    email VARCHAR(80) UNIQUE NOT NULL,
    password VARCHAR(80) NOT NULL
);

CREATE TABLE post (
    id INT PRIMARY KEY AUTO_INCREMENT,
    author_id  INT NOT NULL,
    created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    FOREIGN KEY (author_id) REFERENCES user (id)
);
