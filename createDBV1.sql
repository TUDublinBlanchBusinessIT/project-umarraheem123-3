CREATE DATABASE gymcapacitydb;

USE gymcapacitydb;

CREATE TABLE visits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    person_name VARCHAR(100),
    check_in_time DATETIME,
    check_out_time DATETIME
);
