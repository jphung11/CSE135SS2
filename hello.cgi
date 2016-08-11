#!/usr/bin/perl 

# Hello world 

print "Content-type: text/html\n\n"; 

@months = qw( Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec );
@days = qw(Sun Mon Tue Wed Thu Fri Sat Sun);
$localtime = localtime();
$rand = int rand(3);

if ($rand == 0) {
print << "EOF"; 
<STYLE>
	body {
		background-color: red;
	}
</STYLE>
EOF
}

if ($rand == 1) {
print << "EOF"; 
<STYLE>
	body {
		background-color: white;
	}
</STYLE>
EOF
}

if ($rand == 2) {
print << "EOF"; 
<STYLE>
	body {
		background-color: blue;
	}
</STYLE>
EOF
}

print "Hello Web World from Language Perl on $localtime\n";

