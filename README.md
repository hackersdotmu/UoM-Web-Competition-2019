#Team Nexus
Mo lavenir website for webcompetitoon.

UOM Web Competition 2019


A website that will connect and give various opportunities to many tertiary educated students in Mauritius.



 
MO LAVENIR





Developed & Designed by:
•	Khidir Peeroo
•	Zafir Sk-heerah
•	Ismail Imrit
•	Zuhairah Basgeeth
(BSc Software Engineering Year 1)





OVERVIEW
“MO LAVENIR” has been designed to allow students from tertiary education to learn in new fields and also by helping others. This website is a place where a student can communicate with another person who acquire the appropriate skill(s) he/she is looking for using the search engine where a list of people will be shown.
Moreover, companies can also post jobs in it where interested candidates can send them their Curriculum Vitae and motivation letter for recruitment.
A sign up is needed to access the website and thus there is a database that will store people’s personal information which they can log in or edit their profile on their next visit.

FEATURES
•	The sign up page is compulsory to access the website which include inserting personal information as well as identifying the user’s location to avoid any sort of spamming.

•	Only then will users be able to view the various fields or type of people they are searching for (the feed).

•	User can also edit their profile afterwards where the skills sector is required to be filled.

•	A query option is also available where any queries concerning anything can be answered by any other users or admins

•	A pie chart is present on the home page to indicate a percentage of the number of people of different fields using the website 

•	At the footer, there are all the necessary information that the user needs to know about the “Mo Lavenir“ website. (Terms & conditions, Privacy and so on.)

•	The user-interface is really simple and straight to the point in order to allow IT or non IT students to use it.

DESIGNING TOOLS
The front-end development has been performed by using the following tools:
Bootstrap Studio, Photoshop, Figma.
Programming languages used : HTML, PHP, CSS
The back-end development has been performed by using the following tools:
Oracle Database, MySQL
Programming language : SQL, PHP (XAMPP)


Since the database used is local, the website ‘Mo lavenir’ need to be accessed by the admin as follows: 
•	Install XAMPP and start MySQL and Apache.
•	Copy contents of the website in C:\xampp\htdocs
•	Enter your browser and type in the address bar: localhost/phpmyadmin.
•	Enter in SQL commands window
•	Copy and Paste the SQL commands found below in SQL command window
•	Type in the address bar: localhost/nexus/index.html

The SQL commands are:
CREATE TABLE `user` (
 `email` varchar(255) NOT NULL,
 `pass_word` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `userprofile` (
 `photo` blob NOT NULL,
 `firstname` varchar(255) NOT NULL,
 `lastname` varchar(255) NOT NULL,
 `courses` varchar(255) NOT NULL,
 `add_ress` varchar(255) NOT NULL,
 `email` varchar(255) NOT NULL,
 `bio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1
