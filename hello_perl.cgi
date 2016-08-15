#!/usr/bin/perl 

# Hello world 
$datestring = localtime();
print "Content-type: text/html\n\n"; 
if ($rand == 0) {
	
} 
elsif ($rand == 1) {
print "<STYLE>body{background-color: white;}</STYLE>";
} 
else {
print "<STYLE>body{background-color: blue;}</STYLE>";
} 
print << "EOF";
<HTML>

<HEAD>
<STYLE>

</STYLE>
<TITLE>Hello, world!</TITLE>
</HEAD>

<BODY>
<H1>Hello Web World from Language Perl on $datestring\n</H1>
</BODY>

</HTML>
EOF
