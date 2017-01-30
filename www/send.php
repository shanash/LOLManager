<?php
	$conn = mysqli_connect("localhost", "root", xkdaus1150);
	mysqli_select_db($conn,"lol_test");
	if ( $_GET['name'] == "" )
	{	
		echo "이름업ㅂ어";
	}
	else if ( $_GET['pos1'] == 0 )
	{
		echo "포지션업ㅂ어";
	}
	else if ( $_GET['pos2'] == 0 )
	{
		$sql="INSERT INTO champions (name,pos1) VALUES('".$_GET['name']."',".$_GET['pos1'].")";
		echo $sql;
		$result = mysqli_query($conn,$sql);
	}
	else if ( $_GET['pos3'] == 0 )
	{
		$sql="INSERT INTO champions (name,pos1,pos2) VALUES('".$_GET['name']."',".$_GET['pos1'].",".$_GET['pos2'].")";
		echo $sql;
		$result = mysqli_query($conn,$sql);
	}
	else
	{
		$sql="INSERT INTO champions (name,pos1,pos2,pos3) VALUES('".$_GET['name']."',".$_GET['pos1'].",".$_GET['pos2'].",".$_GET['pos3'].")";
		echo $sql;
		$result = mysqli_query($conn,$sql);
	}
	
	echo "<meta http-equiv='refresh' content='1; url=index.php'>";
	
?>