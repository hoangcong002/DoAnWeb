<?php 
	if(isset($_GET["id"]) == false)
	{
		header("location: index.php?a=404");
	}
	$id = $_GET["id"];
	$sql = "SELECT TenSP FROM SANPHAM WHERE MaSP = $id";
	$result = DataProvider::ExecuteQuery($sql);

	if($result == null)
	{
		header("location: index.php");
	}
	else
	{
		$row = mysqli_fetch_array($result);
		extract($row);
		echo "<h1> $id . $TenSP </h1>";
	}

 ?>

