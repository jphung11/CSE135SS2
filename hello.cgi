#!/usr/bin/perl 

# Hello world 

print "Content-type: text/html\n\n"; 

$localtime = localtime();
$rand = int rand(3);
print << "EOF";
<HTML>

<HEAD>
<STYLE>
body {background-color: red;}
</STYLE>
<TITLE>Hello, world!</TITLE>
</HEAD>

<BODY>
<H1>Hello Web World from Language Perl on $localtime\n</H1>
</BODY>

</HTML>
EOF

if ($rand == 0) {
	
} 
elsif ($rand == 1) {
	print "<STYLE>body{background-color: white;}</STYLE>";
} 
else {
	print "<STYLE>body{background-color: blue;}</STYLE>";
} 




