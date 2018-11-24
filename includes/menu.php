    	<div class="title_menu">Sản phẩm</div>
        <ul class="left_menu_top">
			<?php
        		$sql = "SELECT TenSP FROM SanPham";
        		$result = DataProvider::ExecuteQuery($sql);
        		while($row = mysqli_fetch_array($result))
        		{
        			extract($row);
        			echo "<li class='odd'><a href='#'> $TenSP </a></li>";
        		}
        	 ?>
        </ul>
	

		<div class="title_menu">Nhà sản xuất</div>
		<ul class="left_menu_top">
			<?php
        		$sql = "SELECT TenNSX FROM NhaSanXuat";
        		$result = DataProvider::ExecuteQuery($sql);
        		while($row = mysqli_fetch_array($result))
        		{
        			extract($row);
        			echo "<li class='odd'><a href='#'> $TenNSX </a></li>";
        		}
        	 ?>
        </ul>