
<?php
$student = new student();

$teacher_info = teacher::find_teacher_by_id($get_the_id);



?>
<!-- edit_teacher -->
<div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit teacher</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="full_name">Full Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="full_name" value="<?php echo $teacher_info['teacher_name'];?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="speciality">Speciality</label>
                                        <input class="form-control" type="text" name="speciality" value="<?php echo $teacher_info['teacher_speciality'];?>">
                                    </div>
                                </div>
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="birthday">Date of Birth</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" name="birthday" value="<?php echo $teacher_info['teacher_birthday'];?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" name="city" value="<?php echo $teacher_info['teacher_city'];?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" name="email" value="<?php echo $teacher_info['teacher_email'];?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Phone </label>
                                        <input class="form-control" type="text" name="phone" value="<?php echo $teacher_info['teacher_phone'];?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="text" name="password" value="<?php echo $teacher_info['teacher_password'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" name="modify_teacher">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
</div>
            <!-- end -->
           
