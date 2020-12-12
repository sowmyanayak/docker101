use example;

CREATE TABLE users (
  id INT NOT NULL AUTO_INCREMENT,
  fname VARCHAR(45) NULL,
  lname VARCHAR(45) NULL,
  email VARCHAR(45) NULL,
  PRIMARY KEY (id)
);

INSERT INTO users (fname, lname, email)
VALUES 
('Chris', 'Johnson', 'cjohnson@example.com'),
('Mary', 'Brown', 'mbrown@example.com')
;