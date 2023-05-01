USE db;

CREATE TABLE `usernames` (
    `username` varchar(255) not null,
    `password` varchar(255) not null,
    PRIMARY KEY (`username`)
);

INSERT INTO `usernames` ( `username`, `password` )
VALUES ( 'admin', 'admin' );