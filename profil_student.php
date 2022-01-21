

<?php
					function connecter(){
						try
						{
							$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
							$bdd = new PDO('mysql:host=localhost;dbname=school_manage', 'root', '', $pdo_options);
							//echo "Connexion reussi";
							$bdd->query("SET NAMES UTF8");
							return $bdd;
						}
						catch (Exception $e)
						{
								die('Erreur : ' . $e->getMessage());
						}

					}
				
				function studentLogin($email,$password){
					$bdd = connecter();
					$req = $bdd->prepare("SELECT * FROM students WHERE student_email = '$email' AND student_password = '$password' ");
					$p = $req->execute();
					$param = $req->fetch();
					$chaine="";
					$student_info = "";
					if(!$param)
					{
						$student_info = $param;
						$get_the_id = $student_info['student_id'];
						header("Location:http://localhost/Projet(system_management)/student_login.php?/");
						exit();
					}
					return $student_info;
				}					

			if(isset($_POST['student_email']) and isset($_POST['student_password'])){
    
                $email = $_POST['student_email'];
                $password = $_POST['student_password'];
				
				
				$student_info = studentLogin($email,$password);
				
				$bdd = connecter();
				$req = $bdd->prepare("SELECT * FROM students WHERE student_email = '$email' AND student_password = '$password' ");
				$p = $req->execute();
				$param = $req->fetch();
				
				$student_id = $param['student_id'];
				$student_key = $param['student_key'];
				$student_name = $param['student_name'];
				$student_birthday = $param['student_birthday'];
				$student_gender = $param['student_gender'];
				$student_city = $param['student_city'];
				$student_email = $param['student_email'];
				$student_phone = $param['student_phone'];
				$student_branch = $param['student_branch'];
				$student_level = $param['student_level'];
				$student_password = $param['student_password'];
				
                
            }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>affiche_liste</title>
<link rel="stylesheet" type="text/css" href="/Projet(system_management)/assets/css/style.css"/>
<link rel="stylesheet" type="text/css" href="/Projet(system_management)/assets/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="/Projet(system_management)/assets/css/bootstrap-datetimepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="/Projet(system_management)/assets/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="/Projet(system_management)/assets/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="/Projet(system_management)/assets/css/fullcalendar.min.css"/>
<link rel="stylesheet" type="text/css" href="/Projet(system_management)/assets/css/select2.min.css"/>
<link rel="stylesheet" type="text/css" href="/Projet(system_management)/assets/css/tagsinput.css"/>
</head>
<body>
<div class="content">
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">My Profile</h4>
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
                                                <h3 class="user-name m-t-0 mb-0"><?php echo $student_name;?></h3><br>
                                                <div class="text-muted"><p>Branch : <span><?php echo $student_branch;?></span> </p></div>
                                                <div class="text-muted"><p>Level : <span><?php echo $student_level;?></span></p></div>
                                                <div class="staff-id"><p>registration ID : <span><?php echo $student_key;?></span></p></div>
                                                <div class="staff-msg"><a href="submit_work.php" class="btn btn-primary">Submit work</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><a href="#"><?php echo $student_phone;?></a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href="#"><?php echo $student_email;?></a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Birthday:</span>
                                                    <span class="text"><?php echo $student_birthday;?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text"><?php echo $student_city;?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Gender:</span>
                                                    <span class="text"><?php echo $student_gender;?></span>
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
	</body>
	</html>