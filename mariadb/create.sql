CREATE TABLE IF NOT EXISTS users(
    username varchar(256) NOT NULL,
    password varchar(256) NOT NULL,
    admin int NOT NULL DEFAULT 0,
    PRIMARY KEY (username)
);