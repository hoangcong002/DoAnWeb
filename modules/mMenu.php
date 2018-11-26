<ul>
    <?php 
    	$query = "SELECT MaSP, TenSP FROM SANPHAM";
    	$result = DataProvider::ExecuteQuery($query);
    	while($row = mysqli_fetch_array($result))
    	{
    		extract($row);
    		echo "<li><a href='index.php?a=2&id=$MaSP'> $TenSP </a></li>";
    	}
    ?>
</ul>
