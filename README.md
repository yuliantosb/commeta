# Commeta v.1.0.0
Multilevel comment meta, using PHP mySQL and JQuery, easy multilevel comment meta, with bootstrap.
# Usage
create database 
<pre>
CREATE DATABASE `commeta`
</pre>
Create table `comment` on database `commeta`
<pre>
CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  primary key (`id`)
)
</pre>
Ready to use
