<?php

$student_info = student::find_student_by_id($get_the_id);


?>
<div class="content">
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">My Profile</h4>
                    </div>

                    <div class="col-sm-5 col-6 text-right m-b-30">
                        <a href="actions.php?action=edit_student" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a>
                    </div>
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img class="avatar" src="assets/img/user.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0"><?php echo $student_info['student_name'];?></h3><br>
                                                <div class="text-muted"><p>Branch : <span><?php echo $student_info['student_branch'];?></span> </p></div>
                                                <div class="text-muted"><p>Level : <span><?php echo $student_info['student_level'];?></span></p></div>
                                                <div class="staff-id"><p>registration ID : <span><?php echo $student_info['student_key'];?></span></p></div>
                                                <div class="staff-msg"><a href="chat.php?source=std_mail&id=<?php echo $student_info['student_id']?>" class="btn btn-primary">Send Message</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><a href="#"><?php echo $student_info['student_phone'];?></a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href="#"><?php echo $student_info['student_email'];?></a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Birthday:</span>
                                                    <span class="text"><?php echo $student_info['student_birthday'];?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text"><?php echo $student_info['student_city'];?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Gender:</span>
                                                    <span class="text"><?php echo $student_info['student_gender'];?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
				<div class="profile-tabs">
					<ul class="nav nav-tabs nav-tabs-bottom">
						<li class="nav-item"><a class="nav-link active" href="#about-cont" data-toggle="tab">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#bottom-tab2" data-toggle="tab">Result</a></li>
						<li class="nav-item"><a class="nav-link" href="#bottom-tab3" data-toggle="tab">Time table</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane show active" id="about-cont">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h3 class="card-title"> Informations</h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Semester 1</a>
                                                <div>Number of UE : <span></span> </div>
                                                <div>Semester statut : <span></span> </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Semester 2</a>
                                                <div>Number of UE : <span></span> </div>
                                                <div>Semester statut : <span></span> </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
				</div>
					<div class="tab-pane" id="bottom-tab2">
                     <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Subject code</th>
                                            <th>Subject credit</th>
                                            <th>CC_mark</th>
                                            <th>TP_mark</th>
                                            <th>EE_mark</th>
                                            <th>TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $count=0;
                                        $show_all_subject = subject::find_subject_by_transition($student_info['student_branch'],$student_info['student_level']);
                                        while($row = mysqli_fetch_array($show_all_subject)){
                                            $subject_id =  $row['subject_id'];
                                            $subject_name =  $row['subject_name'];
                                            $subject_credit =  $row['subject_credit'];
                                            $count++;
                                        ?> 
                                          <?php
                                          $result = new mark();
                                          $std_key=$student_info['student_key'];
                                            $find_mark = mark::find_mark_by_key($std_key);
                                          ?>
                                        <tr>
                                            <td ><h2><?php echo $count ?></h2></td>
                                            <td><?php echo $subject_name ?></td>
                                            <td><?php echo $subject_credit ?></td>
                                            <td>
                                            <?php $result->cc_table_test($find_mark) ?>
                                            </td>
                                            <td>
                                            <?php $result->tp_table_test($find_mark) ?>
                                            </td>
                                            <td>
                                            <?php $result->ee_table_test($find_mark) ?>
                                            </td>
                                            <td>
                                            <?php $result->ee_table_test($find_mark) ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
						</div>
						<div class="tab-pane" id="bottom-tab3">
                           <div class="row">
                           <?php
                                $test = new time_table();
                                $branch_select=$student_info['student_branch'];
                                 $level_select=$student_info['student_level'];
                                $found = time_table::find_time_table_by_transition($branch_select, $level_select );
                                while($row = mysqli_fetch_array($found)){
                                    $branch =  $row['branch'];
                                    $branch_level =  $row['branch_level'];
                                }
                            ?> 
                            <p>Semester 1</p>
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered custom-table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Hours</th>
                                                <th class="text-center">MONDAY</th>
                                                <th class="text-center">TUESDAY</th>
                                                <th class="text-center">WENESDAY</th>
                                                <th class="text-center">THURSDAY</th>
                                                <th class="text-center">FRIDAY</th>
                                                <th class="text-center">SATURDAY</th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
        
                                            <tr>
                                                <td class="text-center">7H00 - 9H55</td>
                                                <!-- monday -->
                                                <?php
                                                    $monday_course1 = time_table::find_course($branch_select, $level_select, '7H00 - 9H55', 'monday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($monday_course1) ?></td>
                                                <!-- tuesday -->
                                                <?php
                                                    $tuesday_course1 = time_table::find_course($branch_select, $level_select, '7H00 - 9H55', 'tuesday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($tuesday_course1) ?></td>
                                                <!-- wenesday -->
                                                <?php
                                                    $wenesday_course1 = time_table::find_course($branch_select, $level_select, '7H00 - 9H55', 'wenesday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($wenesday_course1) ?></td>
                                                <!-- thursday -->
                                                <?php
                                                    $thursday_course1 = time_table::find_course($branch_select, $level_select, '7H00 - 9H55', 'thursday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($thursday_course1) ?></td>
                                                <!-- friday -->
                                                <?php
                                                    $friday_course1 = time_table::find_course($branch_select, $level_select, '7H00 - 9H55', 'friday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($friday_course1) ?></td>
                                                <!-- saturday -->
                                                <?php
                                                    $saturday_course1 = time_table::find_course($branch_select, $level_select, '7H00 - 9H55', 'saturday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($saturday_course1) ?></td>
                                            </tr>
                                            <tr>
                                            <td class="text-center">10H00 - 12H55</td>
                                            <?php
                                                    $monday_course2 = time_table::find_course($branch_select, $level_select, '10H00 - 12H55', 'monday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($monday_course2) ?></td>
                                                <!-- tuesday -->
                                                <?php
                                                    $tuesday_course2 = time_table::find_course($branch_select, $level_select, '10H00 - 12H55', 'tuesday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($tuesday_course2) ?></td>
                                                <!-- wenesday -->
                                                <?php
                                                    $wenesday_course2 = time_table::find_course($branch_select, $level_select, '10H00 - 12H55', 'wenesday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($wenesday_course2) ?></td>
                                                <!-- thursday -->
                                                <?php
                                                    $thursday_course2 = time_table::find_course($branch_select, $level_select, '10H00 - 12H55', 'thursday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($thursday_course2) ?></td>
                                                <!-- friday -->
                                                <?php
                                                    $friday_course2 = time_table::find_course($branch_select, $level_select, '10H00 - 12H55', 'friday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($friday_course2) ?></td>
                                                <!-- saturday -->
                                                <?php
                                                    $saturday_course2 = time_table::find_course($branch_select, $level_select, '10H00 - 12H55', 'saturday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($saturday_course2) ?></td>
                                            </tr>
                                            <tr>
                                            <td class="text-center">13H00 - 15H55</td>
                                            <?php
                                                    $monday_course3 = time_table::find_course($branch_select, $level_select, '13H00 - 15H55', 'monday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($monday_course3) ?></td>
                                                <!-- tuesday -->
                                                <?php
                                                    $tuesday_course3 = time_table::find_course($branch_select, $level_select, '13H00 - 15H55', 'tuesday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($tuesday_course3) ?></td>
                                                <!-- wenesday -->
                                                <?php
                                                    $wenesday_course3 = time_table::find_course($branch_select, $level_select, '13H00 - 15H55', 'wenesday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($wenesday_course3) ?></td>
                                                <!-- thursday -->
                                                <?php
                                                    $thursday_course3 = time_table::find_course($branch_select, $level_select, '13H00 - 15H55', 'thursday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($thursday_course3) ?></td>
                                                <!-- friday -->
                                                <?php
                                                    $friday_course3 = time_table::find_course($branch_select, $level_select, '13H00 - 15H55', 'friday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($friday_course3) ?></td>
                                                <!-- saturday -->
                                                <?php
                                                    $saturday_course3 = time_table::find_course($branch_select, $level_select, '13H00 - 15H55', 'saturday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($saturday_course3) ?></td>
                                            </tr>
                                            <tr>
                                            <td class="text-center">16H00 - 18H55</td>
                                            <?php
                                                    $monday_course4 = time_table::find_course($branch_select, $level_select, '16H00 - 18H55', 'monday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($monday_course4) ?></td>
                                                <!-- tuesday -->
                                                <?php
                                                    $tuesday_course4 = time_table::find_course($branch_select, $level_select, '16H00 - 18H55', 'tuesday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($tuesday_course4) ?></td>
                                                <!-- wenesday -->
                                                <?php
                                                    $wenesday_course4 = time_table::find_course($branch_select, $level_select, '16H00 - 18H55', 'wenesday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($wenesday_course4) ?></td>
                                                <!-- thursday -->
                                                <?php
                                                    $thursday_course4 = time_table::find_course($branch_select, $level_select, '16H00 - 18H55', 'thursday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($thursday_course4) ?></td>
                                                <!-- friday -->
                                                <?php
                                                    $friday_course4 = time_table::find_course($branch_select, $level_select, '16H00 - 18H55', 'friday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($friday_course4) ?></td>
                                                <!-- saturday -->
                                                <?php
                                                    $saturday_course4 = time_table::find_course($branch_select, $level_select, '16H00 - 18H55', 'saturday');
                                                ?> 
                                                <td class="text-center"><?php $test->ue_table_test($saturday_course4) ?></td>
                                            </tr>
        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						</div>
					</div>
				</div>
            </div>