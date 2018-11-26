<?php
    class DataProvider
    {
        public static function ExecuteQuery($query)
        {	
            $con = mysqli_connect("localhost","hhc","hhc","ShopBanHang") or die("Can not connect!");
            mysqli_query($con,"set name 'utf8'");
            $result = mysqli_query($con, $query);
            mysqli_close($con);
            return $result;
        }
    }

?>