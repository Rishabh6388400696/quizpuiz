                               
  <?php

   include "header1.php";
   include '../connection.php';


   $id=$_GET["id"];
   $res=mysqli_query($link,"select * from subject_category where id=$id");
   while($row=mysqli_fetch_array($res))
   {
    $subject_category=$row["category"];
    $quiz_time=$row["quiz_time_in_minutes"];
   }

   ?>



        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>EDIT QUIZ</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form name="form1" action="" method="post">
                            <div class="card-body">
                             
                               <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">

                                <strong>Subject</strong>


                            </div>
                <div class="card-body card-block">
                                <div class="form-group"><label  class=" form-control-label">New Subject category</label><input type="text" name="subjectname" placeholder="Enter Subject name" class="form-control" required="" value="<?php echo $subject_category;?>"></div>
                                    <div class="form-group"><label  class=" form-control-label">Quiz time(minutes)</label><input type="text"  placeholder="Quiz time" class="form-control" name="quiztime" required="" value="<?php echo $quiz_time;?>" ></div>
                                          <div class="form-group">
                                              
                                              <input type="submit" name="submit1" value="Update Subject" class="btn btn-success">
                                          </div>


                </div>
                                                </div>
                                            </div>


                                    
                            </div>
                        </form>
                        </div> 

                    </div>
                    <!--/.col-->
                    </div>
                    </div><!-- .animated -->
                    </div><!-- .content -->

   <?php

  if(isset($_POST["submit1"]))

      {
          
       mysqli_query($link,"update subject_category set category='$_POST[subjectname]', quiz_time_in_minutes='$_POST[quiztime]' where id=$id") or die(mysqli_error($link));
       ?>
         <script type="text/javascript">
             
       
        window.location="subject_category.php";
         </script>

       <?php

       }
   ?> 

                               
 <?php

   include "footer1.php";

  ?>