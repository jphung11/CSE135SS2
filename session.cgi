#!/usr/bin/perl 
use CGI qw(:standard);
use CGI::Carp qw(warningsToBrowser fatalsToBrowser);
use strict;

print header;


read(STDIN,$form_info,$ENV('CONTENT_LENGTH'));
($field_name,$name) = split (/=/, $form_info);


print start_html(-title => "Session Page 2",
				 -style => {-src=>'style.css'},);

	print "<h1>Hello $name, nice to meet you!</h1>";
	
print end_html;