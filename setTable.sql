create database 5d;
use 5d;
CREATE TABLE identifients (
    passwords VARCHAR(255),
    identifients VARCHAR(255),
    active BOOLEAN DEFAULT FALSE,
    color VARCHAR(255) DEFAULT '#000000'
);
CREATE TABLE messagerie (
    message VARCHAR(255),
    user VARCHAR(255),  
    color VARCHAR(255) DEFAULT '#000000',
    id INT NOT NULL
);
INSERT INTO identifients (passwords, identifients, active) VALUES ('password', 'john doe', true);
INSERT INTO identifients (passwords, identifients, active, color) VALUES ('password', 'admin', true, '#FF0000');
INSERT INTO messagerie (message, user, color, id) VALUES ("hello, i don't find my password" , 'john doe', '#000000', 1);
INSERT INTO messagerie (message, user, color, id) VALUES ("it's password" , 'admin', '#FF0000', 2);

DROP TABLE messagerie;
DROP TABLE identifients;

