<?php
include('config.php');
$sql="select * from employees";
if($res=mysqli_query($conn,$sql))
{
	if(mysqli_num_rows($res)>0)
	{
		echo "<table>";
		echo "<tr>";
		echo "<th>FirstName</th>";
		echo "<th>LastName</th>";
		echo "<th>Age</th>";
		echo "</tr>";
		while($row=mysqli_fetch_array($res))
		{
			echo "<tr>";
			echo "<td>".$row["firstname"]."</td>";
			echo "<td>".$row["lastname"]."</td>";
			echo "<td>".$row["age"]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	else
	{
		echo "No matching records are found!";
	}
}
else
{
	echo "ERROR:Could not able to execute $sql.".mysqli_error($conn);
}
mysqli_close($conn);
?>
