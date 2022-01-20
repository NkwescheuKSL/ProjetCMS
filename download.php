<?php include"./includes/header.php"?>
<?php include"./includes/navigation.php"?>
<body>

<div class="main-wrapper">

<!--  -->
<?php include"./includes/navigation.php"?>
<!--  -->

<div class="page-wrapper">
<div class="row">
                    <div class="col-md-12">
						<div class="table-responsive">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Course code</th>
                                        <th>Course title</th>
                                        <th>filiere</th>
                                        <th>level</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <!-- <?php
                                    $count=0;
                                    $show_all_Course = subject::find_all_course();
                                    while($row = mysqli_fetch_array($show_all_Course)){
                                        $subject_code =  $row['subject_code'];
                                        $subject_title =  $row['subject_title'];
                                        $filiere =  $row['fiiliere'];
                                        $subject_level =  $row['subject_level'];
                                        $subject_pdf =  $row['subject_pdf'];
                                        $count++;
                                    ?>  -->
                                    <tr>
                                        <td ><h2><?php echo $count ?></h2></td>
                                        <td><?php echo $subject_code ?></td>
                                        <td><?php echo $subject_title ?></td>
                                        <td><?php echo $filiere ?></td>
                                        <td><?php echo $subject_level ?></td>
                                     <td><a href="./assets/course/<?php echo $subject_pdf?>" download="<?php echo $subject_pdf?>"><i class="fa fa-download"></i></a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
						</div>
                    </div>
                </div>
</div>

</div>

</body>

            <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>