 <!-- teacher list -->
 <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Teachers</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add-doctor.html" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add teacher</a>
                    </div>
                </div>
                <?php
                    $show_all_teacher = teacher::find_all_teachers();
                    while($row = mysqli_fetch_array($show_all_teacher)){
                         $teacher_id =  $row['teacher_id'];
                         $teacher_name =  $row['teacher_name'];
                         $teacher_city =  $row['teacher_city'];
                         $teacher_speciality =  $row['teacher_speciality'];
                ?> 
				<div class="row doctor-grid">
                    <div class="col-md-4 col-sm-4  col-lg-3">
                        <div class="profile-widget">
                            <div class="doctor-img">
                                <a class="avatar" href="teacher.php?source=profil_teacher&id=<?php echo $teacher_id ?>"><img alt="" src="./assets/img/user.jpg"></a>
                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="teacher.php?source=edit_teacher&id=<?php echo $teacher_id ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            <h4 class="doctor-name text-ellipsis"><a href="profile.html"><?php echo $teacher_name ?></a></h4>
                            <div class="doc-prof"><?php echo $teacher_speciality ?></div>
                            <div class="user-country">
                                <i class="fa fa-map-marker"></i> <?php echo $teacher_city ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
				<div class="row">
                    <div class="col-sm-12">
                        <div class="see-all">
                            <a class="see-all-btn" href="javascript:void(0);">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
 <!-- end -->