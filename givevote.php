<?php 
session_start();
require('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
		$sid=$_SESSION['id'];
		$id=$_GET['id'];
		$re=$_GET['coll'];
		$cha=$_GET['nam'];
		//echo $id." ".$re." ".$cha." ".$sid;
		$query="update countings set ".$re."=".$re."+1 where id=".$id."";
	
        $result=mysqli_query($con,$query);

        $query1="update voterlists set ".$cha."=1 where id=".$sid."";
		//echo $query1;
        $result1=mysqli_query($con,$query1);

         header("Refresh:0;URL=election.php");

	?>
</head>
<body>

</body>
</html>