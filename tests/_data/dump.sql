DROP TABLE IF EXISTS users, comments, pictures;

CREATE TABLE `users` (
		`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		`username` varchar(100) NOT NULL,
		`name` varchar(100) NOT NULL,
		`surname` varchar(100) NOT NULL,
		`email` varchar(100) NOT NULL,
		`password` varchar(255) NOT NULL,
		`activated` enum('Y','N') NOT NULL DEFAULT 'N',
		`notify` enum('Y','N') NOT NULL DEFAULT 'Y',
		`activation_code` varchar(100) NOT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=latin1;

	
CREATE TABLE pictures (
		pic_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		username VARCHAR(255) NOT NULL,
		pic LONGTEXT NOT NULL,
		title VARCHAR(255) NOT NULL,
		description VARCHAR(255) NOT NULL,
		likes INT(100) UNSIGNED NOT NULL DEFAULT 0,
		sub_datetime TIMESTAMP NOT NULL default CURRENT_TIMESTAMP
		);

	
CREATE TABLE comments (
		pic_id INT(11) UNSIGNED NOT NULL,
		username varchar(100) NOT NULL,
		comment VARCHAR(500) NOT NULL,
		sub_datetime TIMESTAMP
		);

INSERT INTO
		users (username, name, surname, email, password, activated, notify, activation_code) 
	VALUES 
		('steve', 'Sean', 'McDee', 'sean.mcdee+1@yahoo.com', '007d5872d8f8806c8055d9e4c7f944d66ff1b2dfd1759e8ce946e100d8c9a0af6a9fe19d6a8668c619a728f446eb8327b91d57e4a8897d29ebddbffc49c8cdd1', 'Y', 'N', '1');