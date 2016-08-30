#!/usr/bin/perl 
use CGI qw(:cgi-lib :standard);
use CGI::Cookie;

%do_you_haz_cookie = CGI::Cookie->fetch;
$da_cookie = $do_you_haz_cookie{'DA_BEST_COOKIE_EVA'};
if ($da_cookie) { 
	$users_name = $da_cookie->value;
	$output_msg = "Hi $users_name nice to meet you";
}
else {
	$output_msg = "Howdy stranger...tell me your name on page1!";
}

print "Content-type: text/html\n\n"; 

print << "EOF";
<HTML>

<HEAD>
<meta charset="utf-8">
<title>Session Page 2</title>
<link rel="stylesheet" href="http://138.68.48.65/style.css" type="text/css">
<link rel="icon" type="image/png" href="http://138.68.48.65/favicon.png"> 
<link rel="icon" href="http://138.68.48.65/icons/favicon.ico" type="image/x-icon">
<link rel="icon" type="image/png" href="http://138.68.48.65/icons/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="http://138.68.48.65/icons/favicon-16x16.png" sizes="16x16" /> 
</HEAD>

<BODY>
<H1>$output_msg</H1>
<a href="sessionpage1_CGI.html">Back to page one</a><br>
<a href="delete_session_cgi">Clear Session</a>
</BODY>

</HTML>
EOF
