<!-- student list -->
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Student</h4> 
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="student.php?source=add_student" class="btn btn-primary float-right btn-rounded"><i class="fa fa-plus"></i> Add Student</a>
                    </div>
                </div>
                <div class="row">
                    <?php
                             $found = student::find_student_by_transition($branch_select, $level_select);
                            while($row = mysqli_fetch_array($found)){
                                $student_branch =  $row['student_branch'];
                                $student_level =  $row['student_level'];
                            }
                        ?> 
                        <h4 class="page-title text-center"><?php echo $student_branch ?> <span><?php echo $student_level?></span></h4>
                </div>
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">Student ID</label>
                            <input type="text" class="form-control floating">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">Student Name</label>
                            <input type="text" class="form-control floating">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="btn btn-success btn-block"> Search </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
						<div class="table-responsive">
                            <table class="table table-bordered custom-table">
                                <thead>
                                    <tr>
                                        <th>Registration ID</th>
                                        <th>Full Name (First_name & Last_name) </th>
                                        <th>Gender</th>
                                        <th>Birth Day</th>
                                        <th>City</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $show_all_student = student::find_student_by_transition($branch_select, $level_select);
                                    while($row = mysqli_fetch_array($show_all_student)){
                                        $student_id =  $row['student_id'];
                                        $student_key =  $row['student_key'];
                                        $student_name =  $row['student_name'];
                                        $student_birthday =  $row['student_birthday'];
                                        $student_gender =  $row['student_gender'];
                                        $student_city =  $row['student_city'];
                                        $student_mobile =  $row['student_phone'];
                                        $student_email =  $row['student_email'];
                                    ?>  
                                    <tr>
                                        <td><?php echo $student_key ?></td>
                                        <td><h2><?php echo $student_name ?></h2></td>
                                        <td><?php echo $student_gender ?></td>
                                        <td><?php echo $student_birthday ?></td>
                                        <td><?php echo $student_city ?></td>
                                        <td><?php echo $student_mobile ?></td>
                                        <td><?php echo $student_email ?></td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="actions.php?action=student_profil&get_id=<?php echo $student_id ?>"><i class="fa fa-user m-r-5"></i> Profil</a>
                                                    <a class="dropdown-item" href="actions.php?action=edit_student&get_id=<?php echo $student_id ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="student.php?delete" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
						</div>
                    </div>
                </div>
            </div>
<!-- end -->