#!/usr/bin/perl -wT
use CGI qw(:cgi-lib :standard);
use CGI::Cookie;


&ReadParse(%in); 

$users_name = $in{"name"};

$da_cookie = CGI::Cookie->new(-name=>$users_name, -value=>1337, -expires => '3h');
$da_cookie->bake;

print redirect(-url=>'sessionpage1_CGI.html');

