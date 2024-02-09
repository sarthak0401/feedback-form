# feedback-form
This repository contains the feedback form which is connected to the MySQL database with PHP. 

By downloading the XAMPP app, start the APACHE SERVER and the MySQL database.
Then configure the database MySQL, by first, Creating the database named form-backendphp
Then create a table named feedback, then enter the attributes of the feedback table, which are as follows:

**Field** **Type** **Null** **Key** **Default** **Extra** => 
**Fname** text NO NULL, 
**Phone** text NO NULL, 
**Email** text NO NULL, 
**Gender** text NO NULL, 
**DOB** text NO NULL, 
**MathsRating** text NO NULL,
**EnglishRating** text NO NULL, 
**CodingClubRating** text NO NULL, 
**MusicClubRating** text NO NULL, 
**DanceClubRating** text NO NULL, 
**Suggestion** varchar(100) NO NULL



Then finally run the program from the APACHE server localhost/ API and then submit the form to store it to the MySQL database. 
