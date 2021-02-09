<?php 
	include "db_connect.php";
	include "functions.php";
	$query = "select * from visitors order by name,surname";
	$results = select($query);

	$buttonValue = "Check In";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Check In</title>
	<meta name="description" content="fill in your temparature and answer covid related questions">
	<?php include "head.php";?>
</head>
<body>
	<nav>
		<div class="container">	
			<h1>Covid Check-in</h1>
		</div>
	</nav>
	<section class="visitor_list">
		<h3>Date 09 February 2021</h3>
		<div class="container">
			<table class="table">	
			<tr>
				<th>Firstname</th>
				<th>Surname</th>
				<th>Contact no</th>
				<th>Wearing Mask</th>
				<th>Covid Symptons</th>
				<th>Temperature</th>
				<th>Time-in</th>
				<th></th>
			</tr>
			<?php 
				if($results->num_rows)
				{
					while($visitor = mysqli_fetch_array($results))
					{
						echo "<tr>
							<td>$visitor[name]</td>
							<td>$visitor[surname]</td>
							<td>$visitor[contact_no]</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type=\"button\" value=\"$buttonValue\" class=\"buttons\" onclick=\"location.href='check_in.php?id=$visitor[id]'\"></td>
						</tr>";		
					}
				}
			?>
			<tr>
				<td colspan="100%" style="text-align: center"><input type="button" class="buttons" name="" value="Add New Record" onclick="location.href='new_record.php'"></td>
			</tr>
			</table>
		</div>
	</section>
</body>
</html>
