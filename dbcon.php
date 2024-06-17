<?php 

 $con = mysqli_connect('localhost','root','','blog_system');

 if ($con) {
 	?>
 	<script>
 		alert("Connection Successful");
 	</script>
 	<?php 
 }else{
 	?>
 	<script>
 		alert("Connection Failed");
 	</script>
 	<?php

 }

 ?>