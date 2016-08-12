#!/usr/bin/perl

print "Content-type: text/html\n\n"; 

print << "EOF";
<HTML>

<HEAD>
<STYLE>
body {background-color: red;}
</STYLE>
<TITLE>Hello, world!</TITLE>
</HEAD>

<BODY>
<form>
  First name:<br>
  <input type="text" name="firstname"><br>
  Last name:<br>
  <input type="text" name="lastname">
</form> 
</BODY>

</HTML>
EOF