#!/usr/bin/perl 
use CGI qw(:cgi-lib :standard);

print header;

print "Content-type: text/html\n\n"; 

$ReadParse(%in); 

$name = $in("name");

print << "EOF";
<HTML>

<HEAD>
<TITLE>Session Page 2</TITLE>
<STYLE>
<link rel="stylesheet" href="style.css" type="text/css">
</STYLE>
</HEAD>

<BODY>
<H1>Hello $name, nice to meet you!\n</H1>
</BODY>

</HTML>
EOF
