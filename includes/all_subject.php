            <!-- student list -->
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Subject</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="subject.php?source=add_subject" class="btn btn-primary float-right btn-rounded"><i class="fa fa-plus"></i> Add Subject</a>
                    </div>
                </div>
                <div class="row ">
                    <?php
                            $show_all_subject = subject::find_subject_by_transition($branch_select, $level_select);
                            while($row = mysqli_fetch_array($show_all_subject)){
                                $subject_branch =  $row['subject_branch'];
                                $branch_level =  $row['branch_level'];
                            }
                        ?> 
                        <h4 class="page-title text-center"><?php echo $subject_branch ?> <span><?php echo $branch_level?></span></h4>
                </div>
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">Subject ID</label>
                            <input type="text" class="form-control floating">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">Subject Name</label>
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
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Subject code</th>
                                        <th>Subject credit</th>
                                        <th>Subject title</th>
                                        <th>Semester</th>
                                        <th>Teacher</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $count=0;
                                    $show_all_subject = subject::find_subject_by_transition($branch_select, $level_select);
                                    while($row = mysqli_fetch_array($show_all_subject)){
                                        $subject_id =  $row['subject_id'];
                                        $subject_name =  $row['subject_name'];
                                        $subject_credit =  $row['subject_credit'];
                                        $subject_title =  $row['subject_title'];
                                        $teacher =  $row['teacher'];
                                        $semester =  $row['semester'];
                                        $subject_branch =  $row['subject_branch'];
                                        $branch_level =  $row['branch_level'];
                                        $count++;
                                    ?> 
                                    <tr>
                                        <td ><h2><?php echo $count ?></h2></td>
                                        <td><?php echo $subject_name ?></td>
                                        <td><?php echo $subject_credit ?></td>
                                        <td><?php echo $subject_title ?></td>
                                        <td><?php echo $semester ?></td>
                                        <td><?php echo $teacher ?></td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="actions.php?action=edit_subject&get_id=<?php echo $subject_id ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="subject.php?delete" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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