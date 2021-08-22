                               
  <?php

   include "header1.php";
   include '../connection.php';

   ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>ADD QUIZ</h1>
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
                                <div class="form-group"><label  class=" form-control-label">New Subject category</label><input type="text" name="subjectname" placeholder="Enter Subject name" class="form-control" required=""></div>
                                    <div class="form-group"><label  class=" form-control-label">Quiz time(minutes)</label><input type="text"  placeholder="Quiz time" class="form-control" name="quiztime" required="" ></div>
                                          <div class="form-group">
                                              
                                              <input type="submit" name="submit1" value="Add Subject" class="btn btn-success">
                                          </div>


                </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Subject Categories</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Subject name</th>
                                            <th scope="col">Quiz time</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                       <?php
                                         $count=0;
                                         $res=mysqli_query($link,"select * from subject_category");
                                         while ($row=mysqli_fetch_array($res))

                                          {
                                            
                                            $count=$count+1;

                                            ?>
                                            <tr>
                                            <th scope="row"><?php echo $count; ?></th>
                                            <td><?php echo $row["category"]; ?></td>
                                            <td><?php echo $row["quiz_time_in_minutes"]; ?></td>
                                            <td><a href="edit.php?id=<?php echo $row["id"];?>">edit</a></td>
                                            <td><a href="delete.php?id=<?php echo $row["id"];?>">Delete</a></td>
                                            </tr>
                                            <?php
                                         }

                                       ?>





                                       
                                    </tbody>
                                </table>
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
          
       mysqli_query($link,"insert into subject_category values (NULL,'$_POST[subjectname]','$_POST[quiztime]')") or die(mysqli_error($link));
       ?>
         <script type="text/javascript">
             
          alert("Subject added succesfully");
        window.location=window.location.href;
         </script>

       <?php

       }
   ?> 

                               
 <?php

   include "footer1.php";

  ?>