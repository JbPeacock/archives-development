/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Justin Peacock
 * Created: Mar 25, 2017
 * This is my forum. I could not have done this without: 
 * https://code.tutsplus.com/tutorials (...)
 * /how-to-create-a-phpmysql-powered-forum-from-scratch--net-10188
 */
/***
 * This section defines the tables that store the data for the forum.
 */
CREATE TABLE users (
user_id     INT(8) NOT NULL AUTO_INCREMENT,
user_name       VARCHAR(30) NOT NULL,
user_pass       VARCHAR(255) NOT NULL,
user_email      VARCHAR(255) NOT NULL,
user_access     INT(3) NOT NULL,
user_date       DATETIME NOT NULL,
UNIQUE INDEX user_name_unique (user_name),
PRIMARY KEY (user_id)     
) ENGINE=INNODB;

CREATE TABLE categories (
cat_id      INT(8) NOT NULL AUTO_INCREMENT,
cat_title   VARCHAR(255) NOT NULL,
cat_summ    VARCHAR(255) NOT NULL,
UNIQUE INDEX cat_title_unique (cat_title),
PRIMARY KEY (cat_id)
) ENGINE=INNODB;

CREATE TABLE topics (
top_id     INT(8) NOT NULL AUTO_INCREMENT,
top_title       VARCHAR(255) NOT NULL,
top_date        DATETIME NOT NULL,        
top_cat     INT(8) NOT NULL,
top_poster      INT(8) NOT NULL,
PRIMARY KEY (top_id) 
) ENGINE=INNODB;

CREATE TABLE posts (
post_id     INT(8) NOT NULL AUTO_INCREMENT,
post_poster     INT(8) NOT NULL,
post_date       DATETIME NOT NULL,
post_topic      INT(8) NOT NULL,
post_data       TEXT NOT NULL,
PRIMARY KEY (post_id)      
) ENGINE=INNODB

/****
 * This section lays out the relationships between the tables. User id, topic,
 * etc.
 * NOTE: I chose to omit the category delete instruction in order to archive the
 * posts, in the event the category be deleted from the forum.
 * ON DELETE RESTRICT prevents the category from being deleted if there are
 * posts.
 */

ALTER TABLE topics
    ADD FOREIGN KEY (top_cat)
        REFERENCES categories(cat_id)
            /* ON DELETE CASCADE */ ON UPDATE CASCADE ON DELETE RESTRICT;
/*****
 * 
 */
ALTER TABLE topics
    ADD FOREIGN KEY(top_poster)
        REFERENCES users(user_id)
            ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE posts
    ADD FOREIGN KEY(post_topic)
        REFERENCES topics(top_id)
            ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE posts
    ADD FOREIGN KEY (post_poster)
        REFERENCES users(user_id)
            ON UPDATE CASCADE ON DELETE RESTRICT;

