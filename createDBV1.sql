DROP DATABASE IF EXISTS gym_capacity;
CREATE DATABASE gym_capacity;
USE gym_capacity;

CREATE TABLE members (
    member_id INT AUTO_INCREMENT PRIMARY KEY,
    member_name VARCHAR(100) NOT NULL
);


CREATE TABLE attendance_log (
    id INT AUTO_INCREMENT PRIMARY KEY,
    member_id INT NOT NULL,
    member_name VARCHAR(100) NOT NULL,
    action ENUM('check_in', 'check_out') NOT NULL,
    area VARCHAR(50) DEFAULT NULL,
    membership VARCHAR(50) DEFAULT NULL,
    equipment VARCHAR(255) DEFAULT NULL,
    energy_level INT DEFAULT NULL,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (member_id) REFERENCES members(member_id)
);


CREATE TABLE attendance (
    id INT AUTO_INCREMENT PRIMARY KEY,
    action ENUM('enter','exit') NOT NULL,
    event_time DATETIME DEFAULT CURRENT_TIMESTAMP
);

