
<?php
$student = new student();

$student_info = student::find_student_by_id($get_the_id);



?>
<!-- edit_studet -->
<div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">edit Student</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="registration">Registration ID <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="registration" value="<?php echo $student_info['student_key'];?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="full_name">Full Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="full_name" value="<?php echo $student_info['student_name'];?>">
                                    </div>
                                </div>
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="birthday">Date of Birth</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" name="birthday" value="<?php echo $student_info['student_birthday'];?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" name="city" value="<?php echo $student_info['student_city'];?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" name="email" value="<?php echo $student_info['student_email'];?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Phone </label>
                                        <input class="form-control" type="text" name="phone" value="<?php echo $student_info['student_phone'];?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="text" name="password" value="<?php echo $student_info['student_password'];?>">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="branch">Branch</label>
                                        <input type="text" class="form-control" name="branch" value="<?php echo $student_info['student_branch'];?>">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="level">level</label>
                                        <input type="text" class="form-control" name="level" value="<?php echo $student_info['student_level'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" name="modify_student">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
</div>
            <!-- end -->
           
