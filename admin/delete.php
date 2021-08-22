<?php
include "../connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from subject_category where id=$id");
?>

<script type="text/javascript">
	
	window.location="subject_category.php";
</script>