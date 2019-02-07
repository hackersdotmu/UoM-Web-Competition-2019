## moPortal

###  Team members:
1. [Yuvraj Seegolam](https://github.com/yuvraj108c)
2. [Kaviraj Gosaye](https://github.com/kaviraj07)

_ _ _
 
### Installation Instructions
* Install XAMPP from *https://www.apachefriends.org/index.html* if you do not have it.
* Navigate to `C:\xampp\htdocs` on your computer.
* Create a new folder named *"moPortal"*.
* Clone or download the website files to that folder.
* Copy the contents of the file `portal.sql`
* Open Xampp Control Panel from your computer.
* Start Apache and MySql from there.
* Go to *http://localhost/phpmyadmin/* .
* Click on `new` on the left to create a new database.
* Name the database *"portal"* and click on `create`
* Click on the `SQL` tab on the top to create a new query.
* Paste the copied code from `portal.sql` there and click on `Go` to create the required tables for the database.
* Go to *http://localhost:80/*  and open the folder *moPortal* to start the website.
* You can login with these two pre-registered accounts to get an overview of the website:
	* Username1: yuvraj and Password:123456
	* Username2: kaviraj and Password:123456
---
### Introduction to *moPortal*
* Find project and research partners
* Get answers to your questions
* Answer questions related to your field of study
* Advertise and find local jobs

- - -
### Main Features
* Ask questions to users within a specific sector 
* Upvote questions
* Report questions
* Reply to questions
* Share your contact details with other users
* See replies to your questions in your inbox
* Pie chart to display number of users per sectors
- - -
### Additional Features

#### Spam prevention
* *Prevent bots:* Use of reCaptcha v2 during registration
* Prevent repeated upvoting and reporting of questions

#### Security
* MD5 encryption of your password

#### Input Validation and checks
* Error messages are displayed while logging in or registering with wrong information.

- - - 
### Technology Used
* Front-end: HTML5, CSS3, [Semantic-UI](https://semantic-ui.com/), javascript, jquery
* Back-end: Php7, mySql
