<?php 
	if(isset($_POST["us"]))
	{
		$us = $_POST["us"];
		$pw = $_POST["pw"];
		$sql = "SELECT MaTaiKhoan, TenHienThi, MaLoaiTaiKhoan FROM TaiKhoan WHERE  TenDangNhap = '$us' AND MatKhau = '$pw' AND BiXoa = 0";
		$result = DataProvider::ExecuteQuery($sql);
		if($result == null)
		{
			header("location:index.php?a=404");
		}
		else
		{
			$row = mysqli_fetch_array($result);
			extract($row);

			$_SESSION["uid"] =  $MaTaiKhoan;
			$_SESSION["TenHienThi"] = $TenHienThi;
			$_SESSION["TypeAccount"]= $MaLoaiTaiKhoan;

			header("location:index.php");
		}
	}
	else
	{
		header("location:index.php?a=404");
	}

 ?>