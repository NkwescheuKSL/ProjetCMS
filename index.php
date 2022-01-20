
        <!--  -->
        <?php include"./includes/header.php"?>
        <!--  -->
        
<body>
    <div class="main-wrapper">

        <!--  -->
        <?php include"./includes/navigation.php"?>
        <!--  -->

        <div class="page-wrapper">
            <div class="content">
            <?php
            //  Student_count
            $student_count = student::student_count();
            $male_student_count = student::male_student_count();
            $female_student_count = student::female_student_count();

            //  subject_count
            $subject_count = subject::subject_count();
            
            ?>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-5 col-xl-3">
                        <div class="dash-widget">
						<span class="dash-widget-bg1"><i class="fa fa-users" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<h3><?php echo $student_count; ?></h3>
								<span class="widget-title1">Students </span>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-5 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-university"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>00</h3>
                                <span class="widget-title2"> Total Class </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-5 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-book" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $subject_count; ?></h3>
                                <span class="widget-title3">Subjects </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-5 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i class="fa fa-trophy" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>00</h3>
                                <span class="widget-title4">Result </span>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-5 col-xl-6">
						<div class="card">
							<div class="card-body">
								<div class="chart-title">
									<h4>Students</h4>
									<div class="float-right">
										<ul class="chat-user-total">
											<li><i class="fa fa-circle current-users" aria-hidden="true"></i>Male [<?php echo $male_student_count; ?>]</li><span>  </span>
											<li><i class="fa fa-circle old-users" aria-hidden="true"></i> Female [<?php echo $female_student_count; ?>]</li>
										</ul>
									</div>
								</div>	
                                <div class="chartWrap ">
                                   <div id="donutchart" style="width: 470px; height: 300px;" ></div>
                                </div>
							</div>
						</div>
					</div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
						<div class="card">
							<div class="card-body">
								<div class="chart-title">
									<h4>School Results %</h4>
								</div>	
								<div id="donutcharts" style="width: 470px; height: 300px;" ></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-8 col-xl-8">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">Class</h4> <a href="appointments.html" class="btn btn-primary float-right">View all</a>
							</div>
							<div class="card-body p-0 class0">
								<div class="table-responsive">
									<table class="table mb-0">
										<thead class="d-none">
											<tr>
												<th>Class Name</th>
												<th>Student count</th>
												<th>course count</th>
												<th class="text-right">Status</th>
											</tr>
										</thead>
										<tbody>
                                        <?php                                           
                                            $all_class_info = school_class::find_all_class_level();
                                            while($row = mysqli_fetch_array($all_class_info)){
                                                $class_id =  $row['class_id'];
                                                $class_branch =  $row['class_branch'];
                                                $branch_level =  $row['branch_level'];
                                                $class_student_count =  $row['student_count'];
                                                $letter=substr($class_branch, 0, 2);
                                                $subject_count =  $row['subject_count'];
                                            ?>
                                            <?php
                                              $school_class = new school_class();
                                              $count_student = school_class::branch_student_count($class_branch);
                                              $school_class->update_student_count($count_student, $class_branch);
                                              $level_count_student = school_class::level_student_count($class_branch, $branch_level);
                                            ?>
                                            <tr>
												<td style="min-width: 200px;">
													<a class="avatar" href="profile.html"><?php echo $letter; ?></a>
													<h2><a href="profile.html"><?php echo $class_branch; ?> <span>L1, L2, L3</span></a></h2>
												</td>                 
												<td class="text-center">
													<h5 class="time-title p-0">Students</h5>
													<p><?php echo $class_student_count; ?></p>
												</td>
												<td class="text-center">
													<h5 class="time-title p-0">Courses</h5>
													<p>12 UEs / Year</p>
												</td>
												<td class="text-right">
													<a href="appointments.html" class="btn btn-outline-primary take-btn">view more</a>
												</td>
											</tr>
                                            <?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card member-panel">
							<div class="card-header bg-white">
								<h4 class="card-title mb-0"><i class="fa fa-bell"></i>  Notifications</h4>
							</div>
                            <div class="card-body">
                                <ul class="contact-list">
                                <?php
                                    $notify= new notification();
                                    $count_notify = notification::notification_count();
                                    $notify->update($count_notify );
                                    $show_all_notify = notification::find_all_notifications();
                                    while($row = mysqli_fetch_array($show_all_notify)){
                                        $notify_id =  $row['notify_id'];
                                        $notify_title =  $row['notify_title'];
                                        $notify_text =  $row['notify_text'];
                                        $notify_date =  $row['notify_date'];
                                ?> 
                                    <li>
                                        <div class="contact-cont">
                                            <div class="contact-info">
                                                <span class="contact-name text-name"> <?php echo $notify_title; ?></span>
                                                <span class="contact-name text-ellipsis"><?php echo $notify_text ?> </span>
                                                <span class="contact-date"><?php echo $notify_date; ?></span>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                                </ul>
                            </div>
                            <div class="card-footer text-center bg-white">
                                <form action="" method="POST">
                                  <button clbuttonss="text-muted" class="btn" name="view">View all notifications</button>
                                </form>
                                <?php
                                 if(isset($_POST['view'])){
                                    header("location:notification.php");
                                 }
                                ?>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
            <!--  -->
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>
<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Task', 'Male & female student'],
        ['Male',  <?php echo $male_student_count; ?>],
        ['Female', <?php echo $female_student_count; ?>],
      ]);

      var options = {
        pieHole: 0.4,
      };

      var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
      chart.draw(data, options);
    }
  </script>
  <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Task', 'result student'],
        ['Admitted',     10],
        ['Failure',      5],
        ['Authorized',   3],
      ]);

      var options = {
        pieHole: 0.4,
      };

      var chart = new google.visualization.PieChart(document.getElementById('donutcharts'));
      chart.draw(data, options);
    }
  </script>