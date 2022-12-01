CREATE TABLE users (
    user_id NUMBER GENERATED by default on null as IDENTITY,
    username VARCHAR(15) NOT NULL,
    password_hash BINARY(64) NOT NULL,
    user_email VARCHAR(15) NOT NULL,
    PRIMARY KEY (user_id)
);