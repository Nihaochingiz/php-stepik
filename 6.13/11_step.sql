-- Напишите запрос, создающий таблицу topics со следующими полями:

-- id — первичный ключ
-- user_id — внешний ключ
-- body — не может быть null
-- created_at — не может быть null
-- Выберите типы данных самостоятельно.

-- При выполнении задания считаем, что в базе данных уже есть таблица users


CREATE TABLE topics (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    body TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL
)