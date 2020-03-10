<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="stylesheet" href="assignment4.css"/>

	<?php
		require("vendorTableData.php");
	?>

</head>

<body>
	
	<table>

		<?php

			CreateVendorTableHeader();
			FillVendorTable();

		?>
	</table>
</body>

</html>


