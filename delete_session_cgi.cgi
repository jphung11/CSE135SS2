#!/usr/bin/perl -wT
use CGI qw(:cgi-lib :standard);
use CGI::Cookie;

%do_you_haz_cookie = CGI::Cookie->fetch;
$da_cookie = $do_you_haz_cookie{'DA_BEST_COOKIE_EVA'};
if ($da_cookie) { 
	$da_cookie->expires('-1d');
	$da_cookie->value(' ');
}

print redirect(-url=>'sessionpage2_CGI', -cookie=>$da_cookie);
