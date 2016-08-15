#!/usr/bin/perl -wT
use CGI qw(:cgi-lib :standard);
use CGI::Cookie;


&ReadParse(%in); 

$users_name = $in{"name"};


#Create and send cookie
$cookie_name = 'DA_BEST_COOKIE_EVA';
my $da_cookie = CGI::Cookie->new(-name=>$cookie_name, -value=>$users_name, -expires => '3h');

print redirect(-url=>'sessionpage1_CGI.html', -cookie=>$da_cookie);

