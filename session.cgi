#!/usr/bin/perl 
use CGI qw(:standard);
use CGI::Carp qw(warningsToBrowser fatalsToBrowser);
use strict;

print header;
print start_html(-title => "Session Page 2",
				 -style => {-src=>'style.css'},);

my %form;
#foreach my $p (param()) {
 #   $form{$p} = param($p);
  #  print "$p = $form{$p}<br>\n";
#}
print "<h1>Hi $form{'name'} nice to meet you!</h1>";

print end_html;