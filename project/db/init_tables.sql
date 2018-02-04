DROP TABLE IF EXISTS pois;
CREATE TABLE pois(
	id			INT NOT NULL AUTO_INCREMENT,
	user_id		VARCHAR(50) NOT NULL,
	pub_date	INT NOT NULL,
	title		VARCHAR(255) NOT NULL,
	card_type	VARCHAR(50) NOT NULL,
	category	VARCHAR(50) NOT NULL,
	excerpt		TEXT NOT NULL,
	content		MEDIUMTEXT NOT NULL,
	longitude	VARCHAR(50) NOT NULL,
	latitude	VARCHAR(50) NOT NULL,
	elevation	VARCHAR(50) NOT NULL,
	pic_url		VARCHAR(255) NOT NULL,
	ppl_count	INT NOT NULL,
	status		VARCHAR(50) NOT NULL,
	PRIMARY KEY	(id)
);

DROP TABLE IF EXISTS trip;
CREATE TABLE trip (
	id			INT NOT NULL AUTO_INCREMENT,
	user_id		VARCHAR(50) NOT NULL,
	pub_date	INT NOT NULL,
	title		VARCHAR(255) NOT NULL,
	category	VARCHAR(50) NOT NULL,
	excerpt		TEXT NOT NULL,
	content		MEDIUMTEXT NOT NULL,
	poi_num		INT NOT NULL,
	poi_list	VARCHAR(255) NOT NULL,
	ppl_count	INT NOT NULL,
	status		VARCHAR(50) NOT NULL,
	PRIMARY KEY	(id)
);
