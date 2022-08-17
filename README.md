# php-crud-2022

# criando o database
CREATE DATABASE blog;


# criando a tabela estudante
CREATE TABLE students (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(100) NOT NULL,
    course VARCHAR(100) NOT NULL
)
