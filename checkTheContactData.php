<?php
$conn = new mysqli("localhost","root","","maruthipharma_db");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
	?>
		<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>ADMIN</title>
	</head>
	<body>
	<form action="" method="post">
		<input type='hidden' name='operation' value ='sort' >
		<select name="type">
			<option>name</option>
			<option>email</option>
			<option>phone</option>
			<input type="submit" value="Sort">
		</select>
	</form><br>
	<form action="" method="post">
		<input type='hidden' name='operation' value ='search' >
		<input type="text" name="search_text">
		<select name="type">
			<option>name</option>
			<option>email</option>
			<option>phone</option>
			<input type="submit" value="Check">
		</select>
	</form><br>
	
	
	<?php
	if($_SERVER['REQUEST_METHOD']==="POST"){
		$operation = $_POST['operation'];
		if($operation == "delete"){
			$id = $_POST["delete_id"];
			$delete_query = "delete from contactus where id = '$id'";
			if($conn->query($delete_query) === TRUE){
				echo "<script>alert('deleted successfully')</script>";
				$query = "select * from contactus";
				$result = $conn->query($query);
				?>
			<table>
		<tr>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Subject</th>
			<th>Message</th>
		</tr>
	
		<?php
		if ($result->num_rows > 0) {
  			while($row = $result->fetch_assoc()) {
  				echo "<tr>
			<td>".$row["name"]."</td>
			<td>".$row["phone"]."</td>
			<td>".$row["email"]."</td>
			<td>".$row["subject"]."</td>
			<td>".$row["message"]."</td>
			<td>
				<form action='' method='post'>
					<input type='hidden' name='delete_id' value =".$row["id"]." >
					<input type='hidden' name='operation' value ='delete' >
					<input type='submit' value='Delete'>
				</form>
			</td>
			</tr>";
  			}
		} else {
  			echo "0 results";
		}
		?>
		</table>
		<?php
			}else{
				echo "<script>alert('Error occured')</script>";
			}

		}else if ($operation == "sort"){
			$type = $_POST['type'];
			$sort_query = "SELECT * FROM contactus ORDER BY $type";
			$result = $conn->query($sort_query);
			?>
			<table>
		<tr>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Subject</th>
			<th>Message</th>
		</tr>
	
		<?php
		if ($result->num_rows > 0) {
  			while($row = $result->fetch_assoc()) {
  				echo "<tr>
			<td>".$row["name"]."</td>
			<td>".$row["phone"]."</td>
			<td>".$row["email"]."</td>
			<td>".$row["subject"]."</td>
			<td>".$row["message"]."</td>
			<td>
				<form action='' method='post'>
					<input type='hidden' name='delete_id' value =".$row["id"]." >
					<input type='hidden' name='operation' value ='delete' >
					<input type='submit' value='Delete'>
				</form>
			</td>
			</tr>";
  			}
		} else {
  			echo "0 results";
		}
		?>
		</table>
		<?php
		}else if($operation == "search"){
			$type = $_POST['type'];
			$search_text = $_POST['search_text'];
			if(strlen($search_text)===0){
				echo "<script>alert('please fill the text field')</script>";
			}else{
			$search_query = "SELECT * from contactus where $type = '$search_text'";
			$result = $conn->query($search_query);
			?>
			<table>
		<tr>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Subject</th>
			<th>Message</th>
		</tr>
	
		<?php
		if ($result->num_rows > 0) {
  			while($row = $result->fetch_assoc()) {
  				echo "<tr>
			<td>".$row["name"]."</td>
			<td>".$row["phone"]."</td>
			<td>".$row["email"]."</td>
			<td>".$row["subject"]."</td>
			<td>".$row["message"]."</td>
			<td>
				<form action='' method='post'>
					<input type='hidden' name='delete_id' value =".$row["id"]." >
					<input type='hidden' name='operation' value ='delete' >
					<input type='submit' value='Delete'>
				</form>
			</td>
			</tr>";
  			}
		} else {
  			echo "0 results";
		}
		?>
		</table>
		<?php
		}
		
	}
 }else{
		$query = "select * from contactus";
		$result = $conn->query($query);
		?>

			<table>
		<tr>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Subject</th>
			<th>Message</th>
		</tr>
	
		<?php
		if ($result->num_rows > 0) {
  			while($row = $result->fetch_assoc()) {
  				echo "<tr>
			<td>".$row["name"]."</td>
			<td>".$row["phone"]."</td>
			<td>".$row["email"]."</td>
			<td>".$row["subject"]."</td>
			<td>".$row["message"]."</td>
			<td>
				<form action='' method='post'>
					<input type='hidden' name='delete_id' value =".$row["id"]." >
					<input type='hidden' name='operation' value ='delete' >
					<input type='submit' value='Delete'>
				</form>
			</td>
			</tr>";
  			}
		} else {
  			echo "0 results";
		}
		?>
		</table>
		<?php
	}		
}
?>
</body>
</html>