<!DOCTYPE html>
<HTML>

<HEAD>
<STYLE>
body {background-color: <?php echo $_POST["color"]; ?>}
</STYLE>
<TITLE>Form Results</TITLE>
</HEAD>

<BODY>
<H2>Hello <?php echo $_POST["first"]; ?> <?php echo $_POST["last"]; ?> from a Web app written with PHP on <?php echo date(DATE_RFC822) ?></H2>
</BODY>

</HTML>

