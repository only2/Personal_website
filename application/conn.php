<?php
	@mysql_connect("localhost","root","") or die("数据库连接失败");
	@mysql_select_db("user") or die("选择数据库失败");
	
?>