            <!-- class list -->
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Class</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
						<div class="table-responsive">
                                <?php                                           
                                    $all_class_level = school_class::find_all_class_level();
                                    while($row = mysqli_fetch_array($all_class_level)){
                                    $branch_name =  $row['class_branch'];
                                    ?>
                                    <table class="table table-striped custom-table">
                                    <h4 class="page-title branch_title"><?php echo $branch_name ?></h4>
                                    <thead>
                                        <tr>
                                            <th>Class ID</th>
                                            <th>Class branch</th>
                                            <th>Class level</th>
                                            <th>UE Count</th>
                                            <th>Student Count</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php
                                $count=0;
                                    $show_all_class = school_class::find_class_by_branch($branch_name);
                                    while($row = mysqli_fetch_array($show_all_class)){
                                        $class_id =  $row['class_id'];
                                        $class_branch =  $row['class_branch'];
                                        $branch_level =  $row['branch_level'];
                                        $subject_count =  $row['subject_count'];
                                        $student_count =  $row['student_count'];
                                        $count++;
                                    ?> 
                                    <!--  -->
                                    <?php
                                        // $school_classes = new school_class();
                                        // $count_student = school_class::branch_student_count($class_branch);
                                        // $school_classes->update_student_count($count_student, $class_branch);
                                        // $level_count_student = school_class::level_student_count($class_branch, $branch_level);
                                        // $school_classes->level_update_student_count($level_count_student, $class_branch, $branch_level);
                                    ?>
                                    <!--  -->
                                    <tr>
                                        <td>
										 <h2><?php echo $count ?></h2>
										</td>
                                        <td><?php echo $class_branch ?></td>
                                        <td><?php echo $branch_level ?></td>
                                        <td><?php echo $subject_count ?></td>
                                        <td><?php echo $student_count ?></td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="actions.php?action=edit_class"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="class.php?delete" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                 <?php } ?>
                                <?php } ?>
                                </tbody>
                            </table>
						</div>
                    </div>
                </div>
            </div>
            <!-- end -->