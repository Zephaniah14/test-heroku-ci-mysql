<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<div id="container">
	<h1>Showing data from business_category table!</h1>

	<table width="600" border="1" cellspacing="5" cellpadding="5">
	  <tr style="background:#CCC">
	    <th>Sr No</th>
	    <th>Name</th>
	  </tr>
	  <?php
	  $i=1;
	  foreach($data as $row)
	  {
	  echo "<tr>";
	  echo "<td>".$i."</td>";
	  echo "<td>".$row->name."</td>";
	  echo "</tr>";
	  $i++;
	  }
	   ?>
	</table>

</div>

</body>
</html>
