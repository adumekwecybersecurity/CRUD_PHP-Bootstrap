# FIRST PHP PROJECT IN UNITEN. THE SYSTEM WAS DESIGNED USING PHP AND BOOTSTRAP TEMPLATING. 

The Web-based system, involves the student choosing any event of their choice they wish to organise for the school,
and develop the system using PHP and BOOTSTRAP.  For example: If you organise a Professional Lecture 
series, the web page shall apply formal CSS design template. 

- The student is required to create one static html page (index.html or home.html), that describes information about 
the event when a visitor accesses the website. 

# SYSTEM FUNCTIONALITY FOR THE ADMINISTRATOR e.g Organisers, Lecturer , or Super-user must have the following criteria:

- CREATE default account for admin using MYSQL.
- Login/Logout SESSION (authentication)for the Administrator accessing the system. 

- NOTE: Use "required" form attributes or javascript function check(), to ensure all fields needed were entered before 
submitting the form. 

# FUNCTIONS TO BE PERFORMED BY THE ADMINISTRATOR:

- VIEW FUNCTION : This allows the admin to view the registered participants details, individually by specifying their ID or all registered users.

-DELETE FUNCTION: This allows the admin to delete registered users from the system. 


# PROJECT FOLDERS 

- myproject : contains all the bootstrap files and php files created. The content of the folders are:

- Exported Database: contain the exported database for you to import in your wamp-server and then access the project folder 
via establish an SQL connection. 


# STEPS TO USE PROJECT :

- clone Repo into the public directory of your wamp-server via terminal ie C:\wamp64\www> 
-  Launch wamp-server
- go to phpmyadmin login to MySQL 
- click on New to create a new database name it "biaportal", and on the tabs click on import and import the database file found 
in the Exported Database folder. 

-To access admin login page via browser end the path with  "/Admin_Login.php


# INTERFACES AND VIEWS OF THE SYSTEM: 

- Configuring Database

![](snapshots/snapshot01.jpg)

- Setting Up virtual-Host

![](snapshots/snapshot02.jpg)

- Homepage or index.html page

![](snapshots/snapshot03.jpg)

- Registration Page

![](snapshots/snapshot04.jpg)

- User Login Form

![](snapshots/snapshot05.jpg)

- Users Dashboard after successful Login

![](snapshots/snapshot06.jpg)

- User session expired After Logged Out.

![](snapshots/snapshot07.jpg)

- Administrator Login Form

![](snapshots/snapshot08.jpg)

- Administrator Dashboard and Information

![](snapshots/snapshot09.jpg)

- View Specific User by Administrator

![](snapshots/snapshot10.jpg)

- Information of Specific user return view to Administrator

![](snapshots/snapshot11.jpg)

- View Information of All users in the Database or Registered for the Event.

![](snapshots/snapshot12.jpg)

- Delete User by their ID or Delete specific User

![](snapshots/snapshot13.jpg)

- Admin Logout Session time out. 

![](snapshots/snapshot14.jpg)

*******Enjoy ***************
