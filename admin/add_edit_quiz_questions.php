                               
  <?php

   include "header1.php";
   include "../connection.php";
   
   ?>

        <div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Select Subjects for Quiz</h1>
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
                             
                               <table class="table table-bordered table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Subject name</th>
                                            <th scope="col">Quiz time</th>
                                            <th scope="col">Add Questions!</th>
                                            
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
                                            <td><a href="add_edit_questions.php?id=<?php echo $row["id"];?>">Select</a></td>
                                           
                                            </tr>
                                            <?php
                                         }

                                       ?>





                                       
                                    </tbody>
                                </table>

                            </div>
                        </div> 

                    </div>
                    <!--/.col-->
                    </div>
                    </div><!-- .animated -->
                    </div><!-- .content -->
                               
  <?php

   include "footer1.php";
   ?>