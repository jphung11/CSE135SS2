CSE 135 Homework 1

URL: http://138.68.48.65/

Website Authentification:
Username: teamyay
Password: cowsarecool

Quick grader info:
On the website, there are links to test the 403 custom error page below the table with the team information. In addition, there is a link to look at our log analysis and a link to our Github. To test the 404 custom error page, you are able to use any random string to access it by adding that string into the URL. For example, http://138.68.48.65/jafhdauhf . The links will be better described in the explanations below.

Explanation of each task done for HW1:
- Password protect: We have added a username/password combo into an .htpasswd file within the directory /etc/etc/apache2. The username is teamyay and the password is cowsarecool. In order to implement this combo and configure the Apache password authentification, I added code that will restrict directory access to the root within the default config file.

- Status page: We created a status page that indicates the name, email, and PID of our team members with a "Rick and Morty" theme. We employed HTML5 within our index.html and replaced the default index.html in /var/www/html. We also employed CSS by changing the look of our headers and tables as well as centering the image. We then validated our status page by checking the html with http://validator.w3.org.

- Custom error pages: We created our own custom error pages for the 404 errors and 403 errors and edited the config file to use it. In order to use the 403 page, we also added code that would restrict access to a particular directory. For us, we restricted access to a directory called Forbidden within the html directory. The 404 should show from an attempt to access files that don't exist. For example, if one were to go http://138.68.48.65/affuoahf we would go to the 404 page. In addition, the 403 would show up if one were to attempt to access files that they have restricted access to. In this case, we have added two links to test the 403 on our status page. The first link attempts to go to a forbidden directory and the second link attempts to access a file within that forbidden directory. Furthermore, we validated the html files with the same validator used on the status page. 

- Favicon: For the favicon, we got a jpg file and converted it into a .ico and .png file that is 16x16 and 32x32. We added links to this favicon within our html file headers. With this, step we managed to get the favicon to work on Chrome and Firefox. However, our favicon did not show up on internet explorer. After searching around on google, we found that it may be an issue with having our website password protected. In other words, the password protection led to internet explorer to not grab the favicon when it was supposed to. So to show the favicon in internet explorer, we ended up adding code to the config file to grant access to the favicon without having the authentifications. After that edit, the favicon succesfully showed in Chrome, Firefox, and Internet Explorer.

robots.txt : We weren't sure what robots we were supposed to allow/disallow,
so we disallowed all robots. The resulting file is in the root directory 
(/var/www/html).

- Deploy from Github: To deploy from Github, we used Codeship.io. We made an account, connected our Github repository and configured tests in a java environment that should be run before deploying the changes to the web sever. For our test set up and tests, we install java and had it run the html validator for our html files. Then we set up the deployment by adding an ssh key authorization and using custom script. In our custom script, we used scp to clone the tested repository into our root html directory. As a result, any changes we make will be deployed after being committed and tested by our tests. To check our Github repositorywe have a link on our website that says "Link to our GitHub."

Logging configuration and report: By default, Apache has logging enabled and
the logs are stored in /var/log/apache2. We took the access.log and imported
it into a log analyzer and exported the log as an .html file. The resulting
file is the bottom link on our website labeled "Link to Apache log." 

Compression configuration and summary: We enabled compression by enabling the
mod_deflate module and overriding its configuration through our .htaccess. 
For reference, here are some stats of what compression did for a few of our web
pages.

index.html - Original size: 1603 B, Compressed size: 622 B
error_403.html - Original size: 532 B, Compressed size: 305 B  

Server header removal: Due to Apache's design decision, the only way to remove
the server header completely is to edit the source code. Therefore, we have
used the mod_security module to remove the server signature and edit the 
header to contain ' '. 

Quoted post from https://bz.apache.org/bugzilla/show_bug.cgi?id=40026
Jeff Trawick     2014-02-19 17:30:36 UTC  
Please do not reopen the bug.  WONTFIX is the proper status until the 
development community decides otherwise on the dev@httpd mailing list. 
Feel free to provide your input there.  (Personally, I've lost count of the
different ways I have patched different versions of httpd to remove the 
server header.  :(  )

URL Rewriting: We enabled re-writing for .html and .php files. We did this 
by turning on mod_rewrite module and inserting RewriteCond and RewriteRule in
our .htaccess file located in the root directory. 

Extra masking of PHP: We removed the "X-Powered-By" header by adding an 
'expose_php = off' line in the PHP.ini. This hides the version of PHP we are
running in our HTTP response. 

