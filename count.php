<?php 
session_start();
require('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
		
		$id=$_GET['id'];
//	echo $id;

		$query="select * from countings where id=".$id."";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result))//these loops help to bring one by one record in row wise
{
	
		$name=$row[1];
        $vote1=$row[4];
        $can1=$row[3];
         $vote2=$row[6];
        $can2=$row[5];
        $vote3=$row[8];
        $can3=$row[7];
       
        
    }
    $cid=0;
    $count=0;
    $cname='';
    $bio='';
    echo $can1." ".$can2." ".$can3;
    if($vote1>=$vote2){
    	if($vote1>=$vote3){
    		$cid=$can1;
    		$count=$vote1;
    	}
    	else{
    		$cid=$can3;
    		$count=$vote3;
    	}
    }
    else{
    	if($vote2>=$vote3){
    		$cid=$can2;
    		$count=$vote2;
    	}
    	else{
    		$cid=$can3;
    		$count=$vote3;
    	}
    }
    echo $cid." ".$count;
    $query="select * from candidatelists where id=".$cid."";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result))//these loops help to bring one by one record in row wise
{
	
		$cname=$row[1];
        $bio=$row[7];
    }
    echo $cname." ".$bio;
    $db1="insert into olderelections(name,winnername,votes,bio) values('".$name."','".$cname."','".$count."','".$bio."')";  
                                    $r=mysqli_query($con,$db1);
                    				 $db1="delete from countings where id='".$id."'";  
                                     $r=mysqli_query($con,$db1);
            							if(!$r){
             								   echo "<script>alert('deleted successfully')";
            							}                
     									 header("Refresh:1;URL=admin.php");
 ?>
</head>
<body>

</body>
</html>