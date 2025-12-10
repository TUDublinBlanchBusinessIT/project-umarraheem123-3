DROP DATABASE IF EXISTS gym_capacity;
CREATE DATABASE gym_capacity;
USE gym_capacity;

CREATE TABLE attendance (
    id INT AUTO_INCREMENT PRIMARY KEY,
    action ENUM('enter','exit') NOT NULL,
    event_time DATETIME DEFAULT CURRENT_TIMESTAMP
);
