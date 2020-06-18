CREATE TABLE artist (
	artist_id SMALLINT(5) NOT NULL AUTO_INCREMENT,
	artist_name CHAR(128) NOT NULL,
	PRIMARY KEY(artist_id) 
);

CREATE TABLE album (
	artist_id SMALLINT(5) NOT NULL,
	album_id SMALLINT(4) NOT NULL AUTO_INCREMENT,
	album_name CHAR(128) NOT NULL,
	PRIMARY KEY(album_id),
	FOREIGN KEY(artist_id) REFERENCES artist(artist_id) 
)

CREATE TABLE track (
	track_id SMALLINT(3) NOT NULL AUTO_INCREMENT,
	track_name CHAR(128) NOT NULL,
	artist_id SMALLINT(5) NOT NULL,
	album_id SMALLINT(4) NOT NULL,
	time DECIMAL(5,2) DEFAULT NULL,
	PRIMARY KEY(track_id),
	FOREIGN KEY(artist_id) REFERENCES artist(artist_id),
	FOREIGN KEY(album_id) REFERENCES album(album_id)  

)

CREATE TABLE played (
	artist_id SMALLINT(5) NOT NULL,
	album_id SMALLINT(4) NOT NULL,
	track_id SMALLINT(3) NOT NULL,
	played TIMESTAMP,
	FOREIGN KEY(artist_id) REFERENCES artist(artist_id),
	FOREIGN KEY(album_id) REFERENCES album(album_id),
	FOREIGN KEY(track_id) REFERENCES track(track_id)	
)


 CREATE TABLE admin (  

  id int(11) NOT NULL AUTO_INCREMENT, 
  nama varchar(255) NOT NULL, 
  email varchar(255) NOT NULL, 
  password varchar(255) NOT NULL, 
  PRIMARY KEY (id_admin)
  )