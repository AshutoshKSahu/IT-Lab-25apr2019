<?php
include('config.php');
$id=$_POST['id'];
$sql="delete from emp where id=$id";
if(mysqli_query($conn,$sql))
{
	echo "Record was deleted successfully!";
} else {
echo "ERROR: Could not able to execute $sql!".mysqli_roor($conn);
}
mysqli_close($conn);
?>
