# Labs
III-II Lab programs

(R20CSM32L1) Web Technologies Lab

Objectives:

To enable the student to program web applications using the following technologies HTML ,
Javascript ,AJAX ,PHP , Tomcat Server, Servlets ,JSP

WEB TECHNOLOGIES LAB

I. Install the following on the local machine Apache Web Server (if not installed)

• Tomcat Application Server locally

• Install MySQL (if not installed)

• Install PHP and configure it to work with Apache web server and

• MySQL (if not already configured)

2. Write an HTML page including any required Javascript that takes a number from one text field in
the range of 0 to 999 and shows it in another text field in words. If the number is out of range, it
should show "out of range" and if it is not a number, it should show "not a number" message in the
result box.

3. Write an HTML page that has one input, which can take multi-line text and a submit button. Once
the user clicks the submit button, it should show the number of characters, words and lines in the
text entered using an alert message. Words are separated with white space and lines are separated
with new line character.

4. Write an HTML page that contains a selection box with a list of 5 countries. When the user selects a
country, its capital should be printed next to the list. Add CSS to customize the properties of the font of the
capital (color, bold and font size).

5. Create an XML document that contains 10 users information. Write a Java program, which takes
User ld as input and returns the user details by taking the user information from the XML document
using

(a) DOM Parser and

(b) SAX parser

6. Implement the following web applications using

(a) PHP,

(b) Servlets and

(c) JSP:

i) A user validation web application, where user submits the login name and password to server. These are checked against the data already available in database and if the data matches a successful login page is returned. Otherwise a failure message is shown to the user.

(ii). Modify the above program to use an xml file instead of database.

(iii). Modify the above program to use AJAX to show the result on the same page below the submit button.

(iv) A simple calculator web application that takes 2 numbers and an operator (+,-,*,/,%) from an HTML page and returns the result page with the operation performed on the operands.

(v) modify the above program such that it stores each query in a database and checks the database first for the result .if the query is already available in the database, it returns the value that was previously computed or it computes the result and returns it after storing the new query and result in database.

(vi) A web application takes a name as input and on submit it shows a hello<name> page where <name> is taken from the request and it shows a start time at the right top corner of the page and provides the logout button on clicking this button it should shoe a logout page with thank you<name> message with the duration of Usage.

(vii). A web application that takes name and age from an html page. If the age is less than 18, it should send a page with “hello <name>, you are not authorized to visit this site” message where <name> should be replaced with the entered name.  Otherwise it should send “welcome <name> to this site” message.

(viii). A web application for implementation:

the user is first served a login page which takes user’s name and password. After submitting the details the server checks these values against the data from a database and takes the following decisions.

If name and password matches, serves a welcome page with user’s full name.

If name matches and password doesn’t match, then serves “password mismatch” page.

If name is not found in the database, serves a registration page, where user’s full name is asked and on submitting the full name, it stores the login name, password and fullname in the database

ix) A web application that lists all cookies stored in the browser on clicking “list cookies” button, add cookies if necessary
