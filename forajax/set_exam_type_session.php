<?php 
session_start();
include "../connection.php";
$subject_category=$_GET["subject_category"];
$_SESSION["subject_category"]=$subject_category;
$res=mysqli_query($link,"select * from subject_category where category='subject_category'");
while ($row=mysqli_fetch_array($res)) 
{
  $_SESSION["subject_category"]=$row["quiz_time_in_minutes"];
}
$date=date("Y-m-d H:i:s");
$_SESSION["end_time"]=date("Y-m-d H:i:s",strtotime($date."+$_SESSION[exam_time] minutes"));
$_SESSION["exam_start"]="yes";
?>