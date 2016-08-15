#!/usr/bin/perl -wT

use CGI qw(:cgi-lib :standard);

print "Content-type: text/html\n\n";

&ReadParse(%in);

$first = $in{"first"};
$last = $in{"last"};
$color = $in{"color"};

print << "EOF";
<HTML>

<HEAD>
<STYLE>
body {background-color: $color;}
</STYLE>
<TITLE>Form Results</TITLE>
</HEAD>

<BODY>
<H2>Hello $first $last from a Web app written in CGI with Perl on data time\n</H2>
</BODY>

</HTML>
EOF
