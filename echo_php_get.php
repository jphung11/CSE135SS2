<!DOCTYPE html>
<HTML>

<HEAD>
<STYLE>
body {background-color: <?php echo $_GET["color"]; ?>}
</STYLE>
<TITLE>Form Results</TITLE>
</HEAD>

<BODY>
<H2>Hello <?php echo $_GET["first"]; ?> <?php echo $_GET["last"]; ?> from a Web app written with PHP on <?php echo date(DATE_RFC822) ?></H2>
</BODY>

</HTML>

