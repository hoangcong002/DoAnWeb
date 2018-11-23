<?php
    class DataProvider
    {
        public static function ExecuteQuery($query)
        {
            $con = mysql_connect("localhost","root","","ShopBanHang") or die ("Can not connect Database");
            mysql_query($con,"set name 'utf8'");
            $result = mysql_query($con, $query);
            mysql_query($con);
            return $result;
        }
    }

?>