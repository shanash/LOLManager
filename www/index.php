<html>
<head>
<meta charset="utf-8">
<style>
	#alpaca_table
	{
		align = "center";
		
	}
</style>
<title>R-Pi Apache Test</title>
</head>

<body>
<?php
	$conn = mysqli_connect("localhost", "root", xkdaus1150);
	mysqli_select_db($conn,"lol_test");
	$result = mysqli_query($conn, "SELECT * FROM champions");
?>

<form action="send.php" method="GET">
	<p>이름 : <input type="text" name="name"></p>
	<p>
	포지션1 : 
	<select name="pos1" id="phone1" name="phone1">
		<option value=0></option>
		<option value=1>탑</option>
		<option value=2>정글</option>
		<option value=3>미드</option>
		<option value=4>원딜</option>
		<option value=5>서폿</option>
	</select>
	</p>
	<p>
	포지션2 : 
	<select name="pos2" id="phone1" name="phone1">
		<option value=0></option>
		<option value=1>탑</option>
		<option value=2>정글</option>
		<option value=3>미드</option>
		<option value=4>원딜</option>
		<option value=5>서폿</option>
	</select>
	</p>
	
	<p>
	포지션3 : 
	<select name="pos3" id="phone1" name="phone1">
		<option value=0></option>
		<option value=1>탑</option>
		<option value=2>정글</option>
		<option value=3>미드</option>
		<option value=4>원딜</option>
		<option value=5>서폿</option>
	</select>
	</p>
	
	<p><input type="submit"></p>
</form>

<table border="0">
<tr>
	<td width=30 align="center">id</td>
	<td width=100 align="center">이름</td>
	<td width=70 align="center">포지션1</td>
	<td width=70 align="center">포지션2</td>
	<td width=70 align="center">포지션3</td>
</tr>

<?php
function PrintPosition( $idx )
{
	switch( $idx )
	{
		case 1:
			echo "탑";
			break;
		case 2:
			echo "정글";
			break;
		case 3:
			echo "미드";
			break;
		case 4:
			echo "원딜";
			break;
		case 5:
			echo "서폿";
			break;
	}
}

while( $row = mysqli_fetch_assoc($result) )
{
	echo "	<tr>";
	echo "		<td>";
	echo 		$row['id'];
	echo "		</td>";
	echo "		<td>";
	echo 		$row['name'];
	echo "		</td>";
	echo "		<td>";
	echo 		PrintPosition($row['pos1']);
	echo "		</td>";
	echo "		<td>";
	echo 		PrintPosition($row['pos2']);
	echo "		</td>";
	echo "		<td>";
	echo 		PrintPosition($row['pos3']);
	echo "		</td>";
	echo "	</tr>";
}
?>
</table>
</body>

</html>