# ClassAssignment-Authorization
## 1. studentDetails.php
- For this assignment, I want to protect this page, which is the Student Details form from the previous assignment. In this form, I have put an authorization layer thus the user that wants to access this form must be authorized first. 
- In order to be authorized, the user are required to log in first, hence they will be redirected back to the login page where they will enter their credentials to be authenticated on whether they are a legit user that exists within the applications record in the database. 
- After they enter their username and password, they will be allowed based on roles and functions. But since the registration form does not have any administrator to monitor, every users that login only can insert their details.
## 2. login.php
- This is the Login page for the user, where they input their username and password if they are existing user or they will be redirect to Sign Up page if they are a first time user.
- The Login details provided by the user in this page will be verified by the database. Once they are authenticated, they will have a valid authentication and so the system will not have to ask for authentication after they have register their details in the studentDetails.php form. 
- After that, a Session ID is created for the user and stored at the user's browser as a Cookie. When the user wants to submit the details, the server will determine whether the user is eligible to enter details based on the Session ID given. Since there are no other privilege, hence the function is authorized and the user input in the registration form is successful.
