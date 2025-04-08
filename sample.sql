SELECT * FROM users WHERE id = 5;

SELECT * FROM tweets WHERE user_id = 1;

-- tweets.id = 1 のレコードの users.display_name を取得
SELECT users.display_name FROM users 
JOIN tweets ON users.id = tweets.user_id 
WHERE tweets.id = 1;