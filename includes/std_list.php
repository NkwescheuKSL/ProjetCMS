<!-- student list -->
<div class="content">
                <div class="row">
                    <?php
                             $count =0;
                             $found = student::find_student_by_transition($branch_select, $level_select);
                            while($row = mysqli_fetch_array($found)){
                                $student_branch =  $row['student_branch'];
                                $student_level =  $row['student_level'];
                            }
                        ?> 
                        <h4 class="page-title text-center">Student <span><?php echo $student_branch ?></span> <span><?php echo $student_level?></span></h4>
                </div>
                <form action=""method="POST">
                <div class="row">
                    <div class="form_subject">
                                <p>Please Choose SUBJECT</p>
                                <div>
                                <select name="subject">
                                <?php
                                    $subject_list = subject::find_subject_by_transition($branch_select, $level_select);
                                    while($row = mysqli_fetch_array($subject_list)){
                                        $subject_name =  $row['subject_name'];
                                        $subject_branch =  $row['subject_branch'];
                                        $branch_level =  $row['branch_level'];
                                   ?> 
                                    <option value="<?php echo $subject_name ?>"><?php echo $subject_name ?></option>
                                    <?php } ?>
                                </select>
                                </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
						<div class="table-responsive">
                            <table class="table table-bordered custom-table">
                                <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Student ID</th>
                                        <th>Full Name</th>
                                        <th>CC</th>
                                        <th>TP</th>
                                        <th>EE</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                             $result = new mark();
                                    $show_all_student = student::find_student_by_transition($branch_select, $level_select);
                                    while($row = mysqli_fetch_array($show_all_student)){
                                        $student_id =  $row['student_id'];
                                        $student_key =  $row['student_key'];
                                        $student_name =  $row['student_name'];
                                        $count++
                                    ?>  
                                    <tr>
                                        <td><?php echo $count ?></td>
                                        <td><?php echo $student_key ?></td>
                                        <td><h2><?php echo $student_name ?></h2></td>
                                        <td>
                                            <?php
                                            $find_mark = mark::find_mark_by_key($student_key);
                                            ?>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="enter CC mark" name="<?php echo $student_key ?>_CC_mark" value="<?php $result->cc_table_test($find_mark) ?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="enter TP mark" name="<?php echo $student_key ?>_TP_mark" value="<?php $result->tp_table_test($find_mark) ?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="enter EE mark" name="<?php echo $student_key ?>_EE_mark" value="<?php $result->ee_table_test($find_mark) ?>">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                        <button name="save_mark" value="<?php echo $student_key?>" class="btn-mark">save</button>
                                        </td>
                                    </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
						</div>
                    </div>
                    </form>
                </div>
            </div>
<!-- end -->
