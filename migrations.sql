CREATE DATABASE blog;
USE blog;

CREATE TABLE posts(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
content varchar(5200) NOT NULL
);

INSERT INTO posts
(content)
VALUES
("Lieldienas nāk"),
("Otrais bloga ieraksts");

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(25) NOT NULL
);

INSERT INTO categories (category_name) VALUES
('Svētki'),
('Mūzika'),
('Sports');



