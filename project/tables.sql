

CREATE TABLE user(
id INT NOT NULL AUTO_INCREMENT,
username VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL,
role VARCHAR(50) NOT NULL,
PRIMARY KEY (id)
);

INSERT INTO user (username, password, role) VALUES ('user@gmail.com', 'user@123', 'user');

DROP TABLE IF EXISTS page;

CREATE TABLE page (
  or_no int(15) NOT NULL AUTO_INCREMENT,
  image varchar(100) DEFAULT NULL,
  title varchar(100) DEFAULT NULL,
  text varchar(2000) DEFAULT NULL,
  link varchar(100) DEFAULT NULL,
  link_text varchar(100) DEFAULT NULL,
  PRIMARY KEY (or_no)
);

LOCK TABLES page WRITE;

INSERT INTO page VALUES (1,'https://knuth.griffith.ie/~s3022041/project/images/pic5.jpg','New Activities',  'Our after school care is full of fun stuff, Arts & Crafts, Games, Music, Dance, Computers and also the space to unwind and relax with their friends or siblings. We know that modern life can get pretty hectic, and for busy parents, Kiddies can offer the flexibility to help out when you need extra support. For early morning starts we’ll provide a nutritious breakfast and can drop your child to school. We will also collect your child after school with a friendly face.', 'https://knuth.griffith.ie/~s3022041/project/login.php', 'join us know');

UNLOCK TABLES;

INSERT INTO page VALUES (2,'https://knuth.griffith.ie/~s3022041/project/images/gif1.gif','Special Offers',  'We aim to provide quality, affordable childcare to families.  We provide special discounts to families of 2 or more children 
                      availing of full time care. Please contact our accounts department for further details on our special family discount. At Links, 
                      we operate a sibling programme where we encourage children from families of two of more to spend valuable time together throughout 
                      the day. We understand how critically important the ‘sibling bond’ is at a young age.  The sibling relationship is one of the most 
                      important relationships in a child’s life. We believe that sibling time, can enhance a child’s sense of safety and well-being and
                      create a home-away-from-home environment within the crèche. If you wish to avail of our special family discount offer please
                      contact us at 1890 93 00 82.', 'https://knuth.griffith.ie/~s3022041/project/contactUs.php', 'Contact for more information');


INSERT INTO page VALUES (3,'https://knuth.griffith.ie/~s3022041/project/images/pic6.png','New Events',  'Each year a Graduation Ceremony is held for children graduating from our Early Childhood Care and Education (ECCE) classes.
                      Having spent several years in Links Childcare your child has embarked on their first steps on the road to developing as an
                       independent person. We believe it is important to recognise these very important steps by holding a Graduation Ceremony.
                       The graduation ceremony, marks another step in your child’s development as he/she transitions into ‘Big School’.  This event 
                       gives our pre-school graduates and opportunity to put on a show for their family and friends to display their confidence and 
                       skills which they have acquired during their time with us. The graduation marks a very special occasion, it will possibly be the first of many graduation ceremonies which you will attend
                        with your child.  Each child receives their first educational parchment to mark their sense of achievement during their time at
                         Links Childcare.  The Ceremony celebrates children’s journey into “Big School” and gives them the opportunity to dress in their 
                         first cap and gown in front of their family and friends.', 'https://knuth.griffith.ie/~s3022041/project/registration.php', 'Register Now');




CREATE TABLE contact_us(
message_id INT(12) NOT NULL AUTO_INCREMENT,
Name VARCHAR(50) NOT NULL,
Email VARCHAR(50) NOT NULL,
phone_no VARCHAR(50) NOT NULL,
Message VARCHAR(500) NOT NULL,
PRIMARY KEY (message_id)
);