-- Напишите запрос, создающий таблицу users со следующими полями:

-- id — первичный ключ
-- username — уникально и не может быть null
-- email — не может быть null
-- created_at — не может быть null
-- Выберите типы данных самостоятельно.

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)