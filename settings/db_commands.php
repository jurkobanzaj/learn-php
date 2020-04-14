CREATE TABLE users (userId INT AUTO_INCREMENT, userName VARCHAR(25), firstName VARCHAR(50), lastName VARCHAR(50), email VARCHAR(200), password VARCHAR(32), signUpDate DATETIME, profilePic VARCHAR(500), PRIMARY KEY(userId));

CREATE TABLE Songs (id INT AUTO_INCREMENT, title VARCHAR(250), artist INT, album INT, genre INT, duration VARCHAR(8), path VARCHAR(500), albumOrder INT, plays INT, PRIMARY KEY(id));

CREATE TABLE genres (id INT AUTO_INCREMENT, name VARCHAR(50), PRIMARY KEY(id));

CREATE TABLE artists (id INT AUTO_INCREMENT, name VARCHAR(50), PRIMARY KEY(id));

CREATE TABLE albums (id INT AUTO_INCREMENT, title VARCHAR(250), artist INT, genre INT, artworkPath VARCHAR(500), PRIMARY KEY(id));

CREATE TABLE playlists (id INT AUTO_INCREMENT, name VARCHAR(50), owner VARCHAR(50), dateCreated DATETIME, PRIMARY KEY(id));

CREATE TABLE playlistSongs (id INT AUTO_INCREMENT, songId INT, playlistId INT, playlistOrder INT, PRIMARY KEY(id));

INSERT INTO users (username, firstName, lastName, email, password, signUpDate, profilePic) VALUES('$username', '$firstName', '$lastName', '$email', '$encryptedPassword', '$date', '$profilePic');

INSERT INTO artists (name) VALUE ("Metallica");

INSERT INTO albums (title, artist, genre, artworkPath) VALUE ("Metallica", "1", "1", "assets/images/artwork/MetallicaMetallica.jpg");

$query = mysqli_query($con, "INSERT INTO playlists (name, owner, dateCreated) VALUES('$name', '$username', '$date')");

$query = mysqli_query($con, "INSERT INTO playlistSongs (songId, playlistId, playlistOrder) VALUES('$songId', '$playlistId', '$order')");


sudo service mysql start

mysql -p

SHOW TABLES;

DESCRIBE artists;

SELECT * FROM users

+----+-------------+
| id | name        |
+----+-------------+
|  1 | Rock        |
|  2 | Blues       |
|  3 | Rock-n-Roll |
|  4 | Pop         |
|  5 | Jazz        |
|  6 | Hip Hop     |
+----+-------------+

+----+-----------------------+
| id | name                  |
+----+-----------------------+
|  1 | Metallica             |
|  2 | The Beatles           |
|  3 | Red Hot Chilli Pepers |
|  4 | Pink Floyd            |
|  5 | Depeche Mode          |
+----+-----------------------+

+----+------------------+--------+-------+----------------------------------------------+
| id | title            | artist | genre | artworkPath                                  |
+----+------------------+--------+-------+----------------------------------------------+
|  1 | St Anger         |      1 |     1 | assets/images/artwork/stanger.jpg            |
|  2 | Pesonal Jesus    |      5 |     4 | assets/images/artwork/DM-PersonalJesus.jpg   |
|  3 | Stadium Arcadium |      1 |     3 | assets/images/artwork/StadiumArcadium.jpg    |
|  4 | Metallica        |      1 |     1 | assets/images/artwork/MetallicaMetallica.jpg |
+----+------------------+--------+-------+----------------------------------------------+

INSERT INTO Songs (title, artist, album, genre, duration, path, albumOrder, plays) VALUE ("Snow (Hey Oh)", "3", "3", "1", "5:35", "assets/music/A02 Snow (Hey Oh).mp3", "1", "0");

UPDATE albums SET artist = 3 WHERE id=3;

+-------------+-------------+------+-----+---------+----------------+
| Field       | Type        | Null | Key | Default | Extra          |
+-------------+-------------+------+-----+---------+----------------+
| id          | int(11)     | NO   | PRI | NULL    | auto_increment |
| name        | varchar(50) | YES  |     | NULL    |                |
| owner       | varchar(50) | YES  |     | NULL    |                |
| dateCreated | datetime    | YES  |     | NULL    |                |
+-------------+-------------+------+-----+---------+----------------+

INSERT INTO playlistSongs (songId, playlistId, playlistOrder) VALUE ("3", "1", "2");
