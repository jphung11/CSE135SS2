#!/usr/bin/perl -wT
use CGI qw(:cgi-lib :standard);
use CGI::Cookie;
use CGI;


&ReadParse(%in); 

$users_name = $in{"name"};

#create CGI object 

$baker = new CGI; 

#Create and send cookie
$cookie_name = 'DA_BEST_COOKIE_EVA';
$da_cookie = CGI::Cookie->new(-name=>$cookie_name, -value=>$users_name, -expires => '3h');
$da_cookie->bake;

print redirect(-url=>'sessionpage1_CGI.html');

