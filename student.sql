CREATE DATABASE student;

USE student;

CREATE TABLE info (
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  fathername VARCHAR(50),
  mothername VARCHAR(50),
  dob VARCHAR(50),
  address VARCHAR(50), 
  email VARCHAR(50),
  PASSWORD VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  );
  
