#!/usr/bin/perl -wT
use CGI qw(:cgi-lib :standard);

print "Content-type: text/html\n\n"; 

&ReadParse(%in); 

$name = $in{"name"};

print << "EOF";
<HTML>

<HEAD>
<TITLE>Session Page 2</TITLE>
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="icon" type="image/png" href="http://138.68.48.65/favicon.png"> 

	     <link rel="icon" href="http://138.68.48.65/icons/favicon.ico" type="image/x-icon">
	     <link rel="icon" type="image/png" href="http://138.68.48.65/icons/favicon-32x32.png" sizes="32x32" />
	    <link rel="icon" type="image/png" href="http://138.68.48.65/icons/favicon-16x16.png" sizes="16x16" /> 
</HEAD>

<BODY>
<h1>Hello $name, nice to meet you!</h1> 
</BODY>

</HTML>
EOF
