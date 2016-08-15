#!/usr/bin/perl

print "Content-type: text/html\n\n";
print << "EOF";

<HTML>

<HEAD>
<TITLE>FORMCOLLECT CGI</TITLE>
<STYLE>
body {background-color: gray;}
</STYLE>
</HEAD>

<BODY>
<FORM id="myForm" action="Echo" method="GET">
First name: <input type="text" name="first"><br>
Last name: <input type="text" name="last"><br>
Favorite Color: <select name="color" id="color" SIZE=1>
<option value="RED">Red</option>
<option value="BLUE">Blue</option>
<option value="GREEN">Green</option>
<option value="ORANGE">Orange</option>
<option value="PINK">Pink</option>
<option value="PURPLE">Purple</option>
<option value="cadetblue">Cadet Blue</option>
</select>
Method: <select name="methodselector" onchange="this.form.method = this.options[selectedIndex].value;">
<option>GET</option>
<option>POST</option>
</select>
<input type="submit" value="Send">
</FORM>

</BODY>
</HTML>
EOF
