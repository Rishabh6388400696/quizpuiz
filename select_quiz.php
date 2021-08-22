<?php 
session_start();
?>


<?php
include "connection.php";
include "header.php";
?>


        <div class="row" style="....">

            <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">

            	<?php
            	$res=mysqli_query($link,"select * from subject_category");
            	while($row=mysqli_fetch_array($res))
            	{
                 ?>
                 <input type="button" class="btn btn-success form-control" value="<?php echo $row["category"];?>" style="margin-top: 10px; background-color: blue; color: white;" onclick="set_exam_type_session(this.value);">

                 <?php
            	}
              
              ?>

            </div>
        </div>



<?php
include "footer.php";
?>

<script type="text/javascript">
	function set_exam_type_session(subject_category)
	{
		var xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function()
		{
			if(xmlhttp.readystate==4 && xmlhttp.status==200)
			{

				alert(xmlhttp.responseText);
				window.location="dashboard.php";
			}
		};
		xmlhttp.open("GET","forajax/set_exam_type_session.php?subject_category="+subject_category,true);
		xmlhttp.send(null);
	}

</script>
