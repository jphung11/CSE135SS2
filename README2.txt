CSE 135 Homework 2

URL: http://138.68.48.65/

Website Authentification:
Username: teamyay
Password: cowsarecool

Quick grader info:
For CGI with Perl: 
- To test "Hello World", go to http://138.68.48.65/hello_perl and refresh it as many times as you desire to make sure the background color is being randomly chosen. 

- To test "Environment Variable Echo", go to http://138.68.48.65/printenv.cgi and you should see a list of environment variables. 

- To test "Form Collection", go to http://138.68.48.65/formcollect_perl.cgi and enter your first and last name. Then select a color and submit with the GET method. You will know if GET was properly used by looking at the query in the URL. If you see the inputs you made, then it worked correctly. Now to test the POST method of "Form Collection", go back to http://138.68.48.65/formcollect_perl.cgi and enter your first and last name again. Again, you would select a color, however this time you would select POST for the method and submit. To know if POST worked correctly, look at the URL and notice that there is the query there.

- To test "Session Test," go to http://138.68.48.65/sessionpage1_CGI and enter your name. Then the browser will run a CGI script and then return to the same page. Click "Link to second page," which will take you to http://138.68.48.65/sessionpage2_CGI, and it should have the correct output. On the second page, you will have an option to clear the session or go back to page one. 

For PHP:
- To test "Hello World", go to http://138.68.48.65/hello_php.php and refresh it as many times as you desire to make sure the background color is being randomly chosen.

- To test "Environment Variable Echo", go to http://138.68.48.65/printenv_PHP.php and you should see a list of environment variables.

- To test "Form Collection", go to http://138.68.48.65/formcollect_php.php and enter your first and last name. Then choose a color of your choice. Click submit with GET as your method choice and notice on the next screen that the correct string is printed out. Also notice that the color is what you chose. In addition, look at the URL and notice that your inputs are in the query. This is how you will know that the form used GET. To test POST, go baack to http://138.68.48.65/formcollect_php.php and enter your first and last name again. Choose a color again and this time change the method to POST. Click submit and you will see that the your inputs were used and the URL no longer has the query portion. Thus POST correctly worked.

- To test "Session Test", go to http://138.68.48.65/sessionpage1_PHP and enter your name. Then the browser will run a PHP script and then return to the same page. Click "Link to second page", which will take you to http://138.68.48.65/sessionpage2_PHP, and it should have the correct output. On the second page, you will have an option to clear the session or go back to page one. 

#####################################################################################

The explanation section below will further explain what we did for each part of this assignment.


For "Form Collect" for both CGI with Perl and PHP, we didn't manage to fix a bug where if you went back to the form after using post, and used post again, get would be used instead of post. We believe this is due to the onchange attribute, so please avoid this. However, if you went back to the form page after using post, then used get, and went back to use post again, it will work accordingly.

Explanation of each task done for HW2:

1. CGI with Perl:
- "Hello World" : In order to do this we used the function localtime() to get the date time stamp. In addition we used rand() in order to generate a random number which would be used to select the background color. Within our CGI file, we included HTML which would be used to print “Hello Web World from Language Perl on date time stamp”. Within the HTML code we included variables we retrieved from using the Perl functions. In order to change the background color, we had an if-elseif conditional statements. To test this page, go to http://138.68.48.65/hello_perl.cgi and refresh it as many times as you desire to make sure the background color is being randomly chosen.

- "Environment Variable Echo" : To do this we used a loop to go through all the environment variable keys and print them out. To test this page, go to http://138.68.48.65/printenv.cgi and you should see a list of environment variables.

- "Form Collection" : To do this portion of the homework, we created an HTML5 form that collects the user's first and last name with text boxes and their favorite color with a pull down, and a pull down to send the data with a method (get or post). For the pull downs, we used select and options. In order to change the method according to what the user wants, we made it so that the method would change if the choice for select was changed. Furthermore, we created a file called Echo.php which is where the data will be sent. In Echo.php, we parse the query and get the values that we want from the previous form. We then use html to show the string that we want with the localtime. To test "Form Collection", go to http://138.68.48.65/formcollect_perl.cgi and enter your first and last name. Then select a color and submit with the GET method. You will know if GET was properly used by looking at the query in the URL. If you see the inputs you made, then it worked correctly. Now to test the POST method of "Form Collection", go back to http://138.68.48.65/formcollect_perl.cgi and enter your first and last name again. Again, you would select a color, however this time you would select POST for the method and submit. To know if POST worked correctly, look at the URL and notice that there is the query there.

-"Session Test" : On the first page, we created an HTML5 form that collects the user's name with a textbox. On submission, the name gets passed to the server via POST and a CGI script called start_session_cgi.cgi is executed to take the submitted name and create a cookie. Upon going to the second page, if the browser returns a cookie that it was granted from our site, it will print "Hi ____ nice to meet you" (the empty space being the user's submitted name). This behavior will persist until you destroy the session, which is done by clicking the "Clear Session" button on page 2. A CGI script called delete_session_cgi.cgi will be executed and it will expire the cookie that was originally given to the browser and then be rerouted back to page 2. Now the page should show "Howdy stranger...tell me your name on page1!". 

2. PHP:
- "Hello World" : To create the "Hello World" program, we used rand(0,2) in PHP to get a random number for the random background color. Like our CGI "Hello World" program, we used an if-else statement to choose the color based on the random number. We also used echo date(DATE_RFC822) to get the local time for the desired print out string. To test this page, go to http://138.68.48.65/hello_php.php and refresh it as many times as you desire to make sure the background color is being randomly chosen.

- "Environment Variable Echo" : To create this program, we just had a PHP file with html. Within the html, we have php code in the body to go through every environment variable key with a foreach loop. With each loop, a key name and key value gets printed. To test this page, go to http://138.68.48.65/printenv_PHP.php and you should see a list of environment variables.

- "Form Collection" : To create the "Form Collection" program for PHP, we wrote a valid HTML5 form that collects a user’s first and last name with text boxes and their favorite color with a pull down, and a pull down to send the data with a method (get or post) that sends data to a program specifed by the action attribute of the form. In order to make it so that the user can choose the method that the data is sent to the next page, we used an onchange attribute on the select element for the method. The select element is what we used to create the pull downs for the background color and method. Since our implementation of "Form Collection" involves a PHP file for each of the methods, we had two echo files. One which is echo_php_get.php and another that is echo_php_post.php. Our action attribute for the form element will be chosen through a simple javascript function that will be run onsubmit. The function will choose the action based on the form method chosen. For example, if the method was chosen to be post, then the form action would be "echo_php_post". In the echo_php_get.php and echo_php_post.php we have html code that will use get or post to retreive the data depending on the file. So for echo_php_get, we would use $_Get["name"] to get the input. To test "Form Collection", go to http://138.68.48.65/formcollect_php.php and enter your first and last name. Then choose a color of your choice. Click submit with GET as your method choice and notice on the next screen that the correct string is printed out. Also notice that the color is what you chose. In addition, look at the URL and notice that your inputs are in the query. This is how you will know that the form used GET. To test POST, go baack to http://138.68.48.65/formcollect_php.php and enter your first and last name again. Choose a color again and this time change the method to POST. Click submit and you will see that the your inputs were used and the URL no longer has the query portion. Thus POST correctly worked.

-"Session Test" : On the first page, we created an HTML5 form that collects the user's name with a textbox. On submission, the name gets passed to the server via POST and a PHP script called start_session_php.php is executed to take the submitted name and create a cookie and session. Upon going to the second page, if the browser returns a cookie that it was granted from our site, it will print "Hi ____ nice to meet you" (the empty space being the user's submitted name). This behavior will persist until you destroy the session and cookie, which is done by clicking the "Clear Session" button on page 2. A PHP script called delete_session_php.php will be executed and it will expire the cookie that was originally given to the browser and then be rerouted back to page 2. Now the page should show "Howdy stranger...tell me your name on page1!". 