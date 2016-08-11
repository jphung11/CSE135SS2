#!/usr/bin/perl 

# Hello world 

print "Content-type: text/html\n\n"; 

$localtime = localtime();
$rand = int rand(3);
print "Hello Web World from Language Perl on $localtime\n";
if ($rand == 0) {
	print "<STYLE>body{background-color: red;}</STYLE>";
} 
elsif ($rand == 1) {
	print "<STYLE>body{background-color: white;}</STYLE>";
} 
else {
	print "<STYLE>body{background-color: blue;}</STYLE>";
} 




