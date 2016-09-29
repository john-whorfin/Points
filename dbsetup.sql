DROP DATABASE IF EXISTS points;

CREATE DATABASE points;

USE points;

CREATE TABLE tasks (
	id MEDIUMINT NOT NULL AUTO_INCREMENT, 
	name VARCHAR(30) NOT NULL, 
	points INT NOT NULL, 
	repeat_day BOOL, max_repeat_day INT,  PRIMARY KEY (id));

describe tasks;