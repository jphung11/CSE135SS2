#!/usr/bin/perl 

# Hello world 
$datestring = localtime();
print "Content-type: text/html\n\n"; 
if ($rand == 0) {
$color = "red";
} 
elsif ($rand == 1) {
$color = "white";
} 
else {
$color = "blue";
} 
print << "EOF";
<HTML>

<HEAD>
<STYLE>
body {background-color: $color;}
</STYLE>
<TITLE>Hello, world!</TITLE>
</HEAD>

<BODY>
<H1>Hello Web World from Language Perl on $datestring\n</H1>
</BODY>

</HTML>
EOF
