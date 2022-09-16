<?php
	        $servername="localhost";
            $username="root";
            $conn= @mysql_connect($servername,$username)or die(mysql_error());
             mysql_select_db("Tech_world",$conn) or die(mysql_error());//EK is my Database
             
?>