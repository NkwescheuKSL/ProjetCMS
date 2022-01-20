<?php

$subject_info = subject::find_subject_by_id($get_the_id);


?>
            <!-- Edit_subject -->
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Subject</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="POST">
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Subject code <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="subject_name" value="<?php echo $subject_info['subject_name'];?>">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>Credit</label>
                                        <input type="text" class="form-control" name="subject_credit" value="<?php echo $subject_info['subject_credit'];?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject_title">Subject title <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="subject_title" value="<?php echo $subject_info['subject_title'];?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Teacher Name</label>
                                        <input class="form-control" type="text" name="teacher" value="<?php echo $subject_info['teacher'];?>">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="subject_branch">Branch</label>
                                        <input type="text" class="form-control" name="subject_branch" value="<?php echo $subject_info['subject_branch'];?>">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="branch_level">level</label>
                                        <input type="text" class="form-control" name="branch_level" value="<?php echo $subject_info['branch_level'];?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
									<div class="form-group semester-select">
										<label class="gen-label">Semester:</label>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="semester" class="form-check-input" value="1">1
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="semester" class="form-check-input" value="2">2
											</label>
										</div>
									</div>
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" name="modify_subject">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end -->