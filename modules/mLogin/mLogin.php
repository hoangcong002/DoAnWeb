<?php 
	if(isset($_SESSION["uid"]) == false)
	{
		include "modules/mLogin/frmLogin.php";
	}
	else
	{
		include "modules/mLogin/frmAccountInf.php";
	}
	
 ?>