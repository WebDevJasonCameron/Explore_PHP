CREATE TABLE posts(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO posts (title, body) VALUES ('Post One', 'This is a post of many many words!');
INSERT INTO posts (title, body) VALUES ('Post Two', 'This is a post of many many words!');
INSERT INTO posts (title, body) VALUES ('Post Three', 'This is a post of many many words!');


SELECT * FROM posts WHERE id = 2;

UPDATE posts SET body = 'This is an update post' WHERE id = 2;

DELETE FROM posts WHERE id = 2;


INSERT INTO posts (title, body) VALUES
                                    ('Post Four', 'This is the fourth post'),
                                    ('Post Five', 'This is the fifth post');