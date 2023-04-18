# ClassAssignment-Authentication
## 1. index.php
This is the Student Details file that contains the code for students to input their details to be submitted. It will be the index page for the authentication, as the user need to be authenticate forst before they can access this page. This file will act as the home page and user need to enter their login details in order to access this page.
## 2. register.php
This is the file where the user will be asked to sign in when they are a first-time user. They will need to insert their username, email, password and confirmation of their password. The text box have been whitelisted as the user must enter only letters, underscores, hyphens and numbers only. Therefore, it will prevent any attempt of harmful XSS. Any other characters submitted will require the user to match the requested format. Also, the password will be hashed using SHA1 when stored in the database. After the user input their credentials, they can go to the index.php page.
## 3. login.php
This is the page where the user will be authenticate before they go to the index page and they have signed up before. In this page, the text box input also have been whitelisted as they can only enter the valid username that is available in the database. Any attempt in inserting any characters other than the legit username will be denied and they must only enter a legit username.
## 4. server.php
This is the file that helps the login and registration page connects with the database. The input values such as username, email and password will be stored in the database after the user signed up. Furthermore, the database will grant the request from the browser when the user wants to login into the page. If there is a match with the database, then the user will be allowed to access the index page.
## 5. errors.php
errors.php file is there to prevent the user from not entering any input inside the login and register page. If they leave one of the text box input empty, they will not be able to submit their credentials during login and register session.
