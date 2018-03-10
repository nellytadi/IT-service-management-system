<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles.css">
<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		tr:hover
		{
background-color: blue;
cursor: pointer;
color: white;
		}
	</style>

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
	//when i click it should auto fil the form
		$(document).ready(function()
		{
		$('table tbody tr').click(function()
		{
		alert($(this).text());
	}
	);
}
);

	</script>
</head>
<body>
<form action="uploading_db.php" method="POST" enctype="multipart/form-data">
<input type="file" name="passport" >
<input type="submit" value="submit">
<table colpan="1" border="10px">
<thead>
	<tr>
		<th>NAME</th>
		<th>PHONE NUMBER</th>
		<th>EMAIL</th>
		<th>ADDRESS</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>nelly</td>
		<td>0213</td>
		<td>14852</td>
		<td>sfdxgcfhvh</td>
	</tr>
		<tr>
		<td>dgfchgv</td>
		<td>8521</td>
		<td>cgfvgbh</td>
		<td>rtb</td>
	</tr>

	<tr>
		<td>zssdxcfhg</td>
		<td>845521</td>
		<td>dcgfvh</td>
		<td>xcvbn</td>
	</tr>

	<tr>
		<td>dxgcfhgvjhk</td>
		<td>87645321</td>
		<td>xdfgcfhgvjhb</td>
		<td>ssrxdcf</td>
	</tr>
</tbody>
</table>

<?php
echo 'version: '.phpversion();
?>
</form>
</body>
</html>
