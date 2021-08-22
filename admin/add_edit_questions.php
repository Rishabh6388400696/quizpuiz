  <?php

   include "header1.php";
   include "../connection.php";
   $id=$_GET["id"];
   $subject_category='';
   $res=mysqli_query($link,"select * from subject_category where id=$id");
   while($row=mysqli_fetch_array($res))
   {
       $subject_category=$row["category"];
   }
   
   ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Question inside <?php echo  $subject_category; ?></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                             
                               <div class="col-lg-8">
                                <form name="form1" action="" method="post">
                        <div class="card">
                            <div class="card-header">

                                <strong>Add New Questions</strong>


                            </div>
                <div class="card-body card-block">
                                <div class="form-group"><label  class=" form-control-label">Question</label><input type="text" name="question" placeholder="Add Question" class="form-control" required=""></div>
                                  <div class="form-group"><label  class=" form-control-label">Add opt1</label><input type="text" name="opt1" placeholder="opt1" class="form-control" required=""></div>
                                  <div class="form-group"><label  class=" form-control-label">Add opt2</label><input type="text" name="opt2" placeholder="opt2" class="form-control" required=""></div>
                                  <div class="form-group"><label  class=" form-control-label">Add opt3</label><input type="text" name="opt3" placeholder="opt3" class="form-control" required=""></div>
                                  <div class="form-group"><label  class=" form-control-label">Add opt4</label><input type="text" name="opt4" placeholder="opt4" class="form-control" required=""></div>
                                  <div class="form-group"><label  class=" form-control-label">Add Answer</label><input type="text" name="answer" placeholder="answer" class="form-control" required=""></div>
                                          <div class="form-group">
                                              
                                              <input type="submit" name="submit1" value="Add Question" class="btn btn-success">
                                          </div>


                </div>
                                                </div>
                                              </form>
                                            </div>

                            </div>
                        </div> 

                    </div>
                    <!--/.col-->
                    </div>
                    </div><!-- .animated -->
                    </div><!-- .content -->


<?php

if(isset($_POST["submit1"]))
{
  $loop=0;
  $count=0;
  $res=mysqli_query($link,"select * from questions where category='$subject_category' order by id asc") or die(mysqli_error($link));
  $count=mysqli_num_rows($res);
  if ($count==0)
   {

    
  }
  else
  {
     while ($row=mysqli_fetch_array($res))
      {
        $loopp=$loop+1;
        mysqli_query($link,"update questions set question_no='$loop' where id=$row(id)");
     }
  }

  $loop=$loop+1;
   mysqli_query($link,"insert into questions values(NULL,'$loop','$_POST[question]','$_POST[opt1]','$_POST[opt2]','$_POST[opt3]','$_POST[opt4]','$_POST[answer]','$subject_category')") or die(mysqli_error($link));

   ?>
   <script type="text/javascript">
     
     alert("Question added Succesfully");
     window.location=window.location.href;
   </script>

   <?php

}


?>
                               
  <?php

   include "footer1.php";
   ?>
