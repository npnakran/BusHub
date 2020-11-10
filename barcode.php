<html>
<head>
<style>
p.inline {display: inline-block;}
span { font-size: 13px;}
</style>
<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */

    }
</style>
</head>
<body onload="window.print();">
	<div style="margin-left: 5%">
		<?php
		include 'barcode128.php';
		$email = $_POST['email-f2a8'];
		$name = $_POST['name-f2a8'];
		$date = $_POST['date-4441'];
		$phone = $_POST['phone-447e'];

			echo "<p class='inline'><span ><b>NAME: $name</b></span>".bar128(stripcslashes($_POST['phone']))."<span ><b>Email: ".$email." </b><span></p>&nbsp&nbsp&nbsp&nbsp";

		?>
	</div>
</body>
</html>