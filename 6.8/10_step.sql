CREATE TABLE cart_items
( 
  id SERIAL PRIMARY KEY,
  user TEXT NOT NULL,
  item TEXT NOT NULL,
  cost NUMERIC NOT NULL
 );




INSERT INTO cart_items(user, item, cost)
VALUES 
    ('Иван', 'книга', 500),
    ('Иван', 'ручка', 50),
    ('Анна', 'ноутбук', 30000);
