-- create user and set up db
CREATE user IF NOT EXISTS 'aastu'@'localhost' IDENTIFIED BY 'myaastu_pwd';
GRANT ALL ON myaastu.* TO 'aastu'@'localhost';

CREATE DATABASE IF NOT EXISTS myaastu;
use myaastu;

DROP TABLE IF EXISTS post;
DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS events;
DROP TABLE IF EXISTS images;
CREATE TABLE user (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(80) UNIQUE NOT NULL,
    email VARCHAR(80) UNIQUE NOT NULL,
    profile_pic VARCHAR(255) DEFAULT 'https://picsum.photos/400/250';
    password VARCHAR(80) NOT NULL
);

CREATE TABLE post (
    id INT PRIMARY KEY AUTO_INCREMENT,
    author_id  INT NOT NULL,
    created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    profile_pic VARCHAR(80) DEFAULT '/images/profile/placeholder.png',
    FOREIGN KEY (author_id) REFERENCES user (id)
);
<<<<<<< Updated upstream
CREATE TABLE events (
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    eventHost VARCHAR(255) NOT NULL,
    descriptions TEXT NOT NULL,
    eventData VARCHAR(255) NOT NULL,
    locations VARCHAR(255) NOT NULL
);


 CREATE TABLE images (
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    imageName VARCHAR(128) NOT NULL,
    imgDir VARCHAR(128) NOT NULL
);
=======




>>>>>>> Stashed changes
